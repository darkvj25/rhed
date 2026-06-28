<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\Course;
use App\Models\Faculty;
use App\Models\Student;
use App\Models\User;
use Filament\Actions\CreateAction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\CreateAction as ActionsCreateAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id_number')
                    ->label('ID Number')
                    ->unique(ignoreRecord: true)
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Select::make('course')
                     ->options(Course::all()->pluck('course', 'id'))
                    ->default(null),
                Forms\Components\TextInput::make('email')
                        ->label('Email address')
                        ->email()
                        ->unique(ignoreRecord:true)
                        ->required()
                        ->maxLength(255),

                Forms\Components\TextInput::make('password')
                   ->password()
                   ->confirmed()
                   ->revealable()
                   ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                    ->dehydrated(fn ($state) => filled($state))
                    ->required(fn (string $context): bool => $context === 'create')
                   ->label('Password (Leave blank to keep current)'),

               Forms\Components\TextInput::make('password_confirmation')
                   ->password()
                   ->nullable()
                   ->revealable(),
                   Forms\Components\Toggle::make('accept')
                   ->required()
                   ->afterStateUpdated(function ($record) {
                       if($record && $record !=null){
                           $acceptUser = User::findOrFail($record->id);
                       $acceptUser->accept = 1;
                       if ($acceptUser->role === 'faculty') {
                           $data = [
                               'user_id' => $acceptUser->id,
                               'first_name' => $acceptUser->first_name,
                               'last_name' => $acceptUser->last_name,
                               'position' => $acceptUser->position,
                           ];
                           Faculty::create($data);
                       } elseif ($acceptUser->role === 'student') {
                           Student::create([
                               'user_id' => $acceptUser->id,
                               'id_number' => $acceptUser->id_number,
                               'first_name' => $acceptUser->first_name,
                               'last_name' => $acceptUser->last_name,
                               'course_id' => $acceptUser->course,
                               'year_id' => $acceptUser->year,
                               'block_id' => $acceptUser->block,
                               'gender' => $acceptUser->gender,
                           ]);
                       }else{
                           $acceptUser->save();
                       }
                       }

                   }),
                Forms\Components\Hidden::make('role')
                    ->default('admin'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_number')
                    ->label('ID Number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Username')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('course')
                ->formatStateUsing(fn ($record) => Course::find($record->course)->course ?? 'N/A')
                    ->searchable(),
                Tables\Columns\IconColumn::make('accept')
                        ->boolean(),
                Tables\Columns\TextColumn::make('role')
                    ->searchable(),
            ])
            ->modifyQueryUsing(function (Builder $query) {
                $user_course = Auth::user()->course;
                $course = Course::where('id', $user_course)->first();
                 if (!$user_course || !$course) {
                      return User::query()
                    ->whereIn('role', ['org', 'faculty','admin'])
                    ->orderBy('created_at', 'desc');
                };

                $user = User::where('course', $course->id)->pluck('id');

                $query->where(function ($query) use ($user) {
                    $query->whereIn('id', $user)
                    ->orWhere('role','org')
                    ->orWhere('role','admin')
                    ->orWhere('role','faculty');
                })->orderBy('created_at', 'desc');
            })
             ->recordUrl(fn ($record) => null)
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make()
                    ->before(function ($record) {
                        if ($record->image) {
                            Storage::disk('public')->delete($record->image);// ...
                    }})

                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
    public static function getEloquentQuery(): Builder
    {
        $user_course = Auth::user()->course;
                $course = Course::where('id', $user_course)->first();
                 if (!$user_course || !$course) {
                     return User::query()
                    ->whereIn('role', ['org', 'faculty','admin'])
                    ->orderBy('created_at', 'desc');
                }
                $user = User::where('course', $course->id)->pluck('id');

       return parent::getEloquentQuery()->where(function ($query) use ($user) {
            $query->whereIn('id', $user)
                    ->orWhere('role','org')
                      ->orWhere('role','admin')
                    ->orWhere('role','faculty');
        })->orderBy('created_at', 'desc');
    }
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    // public static function canCreate(): bool
    // {
    //   return false;
    // }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
