<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use App\Http\Requests\studentFormRequest;
class Students extends Component
{
    public $students, $nome, $cognome, $email, $anno_iscrizione,$genere, $id_studente, $searchTerm;
    public $modal = false;




    public function render()
    {
        $searchTerm = '%'.$this->searchTerm . '%';
        $this->students = Student::where('nome', 'LIKE', $searchTerm)
                                ->orwhere('cognome', 'LIKE', $searchTerm)->get();
        return view('livewire.students');
    }

    public function create()
    {
        $this->clear();
        $this->openModal();
    }

    public function openModal()
    {
        $this->modal = true;
    }

    public function closeModal()
    {
        $this->modal = false;
    }

    public function clear()
    {
        $this->nome = '';
        $this->cognome = '';
        $this->id_studente = '';
        $this->email = '';
        $this->anno_iscrizione = '';
        $this->genere = '';
    }

    public function edit($id)
    {
        $studente = Student::findOrFail($id);
        $this->id_studente = $id;
        $this->nome = $studente->nome;
        $this->cognome = $studente->cognome;
        $this->email = $studente->email;
        $this->anno_iscrizione = $studente->anno_iscrizione;
        $this->openModal();
    }

    public function delete($id)
    {
        Student::find($id)->delete();
        session()->flash('message', 'Eliminato con successo');
    }

    public function save()
    {

        $this->validate([
            'nome' => 'required',
            'cognome' =>'required',
            'email' => 'required|email',
            'anno_iscrizione' => 'required',
            'genere' => 'required'
        ]);

            Student::updateOrCreate(['id'=>$this->id_studente],
            [
                'nome' => $this->nome,
                'cognome' => $this->cognome,
                'email' => $this->email,
                'anno_iscrizione' => $this->anno_iscrizione,
                'genere' =>$this->genere
            ]);

        session()->flash('message', $this->id_studente ? 'Dati aggiornati con successo' : 'Dati inseriti con successo');

        $this->closeModal();
        $this->clear();
    }
}
