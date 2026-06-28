<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Course;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    public static function form(Form $form): Form
    {
        $user = Auth::user()->id;
        return $form
            ->schema([
                Hidden::make('user_id')
                    ->default($user),
                Select::make('course')
                    ->options(Course::all()->pluck('course', 'course'))
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->directory('eventImage')
                    ->image()
                    ->required(),

                Forms\Components\RichEditor::make('post')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('status')
                    ->options([
                        'public' => 'public',
                        'private' => 'private',
                    ]),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('post')
                    ->html()
                    ->limit(50)
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
             ->modifyQueryUsing(function (Builder $query) {
                $user = Auth::user();
                $userCourseId = $user->course;

                $userCourse = Course::find($userCourseId);
                if (!$user || !$userCourseId || !$userCourse) {
                    return Event::query()->where('status', 'public')->orderBy('created_at', 'desc');
                }
                
                $event = Event::where('course', $userCourse->course)->pluck('id');
                $query->where(function ($query) use ($event) {
                    $query->whereIn('id', $event)
                          ->orWhere('status', 'public');
                })->orderBy('created_at', 'desc');
            })
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make()->visible(fn($record) =>$record->user_id === Auth::user()->id),
                    DeleteAction::make()
                    ->before(function ($record) {
                        if ($record->image) {
                            Storage::disk('public')->delete($record->image);// ...
                    }})->visible(fn($record) =>$record->user_id === Auth::user()->id),

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
        $user = Auth::user();
        $userCourseId = $user->course;

        $userCourse = Course::find($userCourseId);
        if (!$user || !$userCourseId || !$userCourse) {
             return Event::query()->where('status', 'public')->orderBy('created_at', 'desc');
        }
        $event = Event::where('course', $userCourse->course)->pluck('id');

        return parent::getEloquentQuery()->where(function ($query) use ($event) {
            $query->whereIn('id', $event)
                  ->orWhere('status', 'public');
        })->orderBy('created_at', 'desc');
    }
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
