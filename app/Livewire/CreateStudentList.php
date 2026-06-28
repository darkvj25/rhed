<?php

namespace App\Livewire;
use App\Models\Block;
use App\Models\Student;
use App\Models\Year;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;

class CreateStudentList extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];
    public $id;
    public $block;
    public function mount($id): void
    {
       $this->id = $id;
        $this->block = Block::where('id', $id)->first();
        $this->form->fill();
    }
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('course_id')
                    ->default(fn()=>$this->block->course_id),
                Hidden::make('year_id')
                    ->default(fn()=>$this->block->year_id),
                Hidden::make('block_id')
                    ->default(fn()=>$this->id),
               TextInput::make('id_number')
                    ->label('ID Number')
                    ->required()
                    ->unique(Student::class, 'id_number'),
               TextInput::make('first_name')
                    ->required(),
               TextInput::make('last_name')
                    ->required(),
               TextInput::make('middle_name')
                    ->required(),
               Select::make('gender')
                    ->options([
                        'male' => 'Male',
                        'female' => 'Female',
                    ])
                    ->required(),
                // ...
            ])
            ->statePath('data');
    }

    public function create()
    {


        Student::create($this->form->getState());

        session()->flash('save', 'News saved successfully.');
        return redirect()->route('student-list',['id' => $this->id]);
    }
    public function render()
    {
        return view('livewire.create-student-list');
    }
}
