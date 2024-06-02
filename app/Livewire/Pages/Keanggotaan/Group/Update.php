<?php

namespace App\Livewire\Pages\Keanggotaan\Group;

use Livewire\Component;
use App\Models\Group as GroupModel;
use Illuminate\Support\Facades\Request;

class Update extends Component
{
    public $group , $nama;

    public function mount($id)
    {
        $this->group = GroupModel::findOrFail($id);
        $this->nama = $this->group->nama;
    }

    public function render()
    {
        return view('livewire.pages.keanggotaan.group.update')->layout('layouts.app', ['title' => 'Keanggotaan', 'ubTitle' => 'Group']);
    }

    function rules() {
        return ['nama' => 'required|string|unique:groups,nama,'. $this->group->id];
    }

    public function updateGroup()
    {
        $this->validate();
        

        try {
            $this->group->nama = $this->nama;
            $this->group->save();
            session()->flash('success','Group Berhasil Diupdate');
            return redirect()->route('keanggotaan/group');
        } catch (\Exception $e) {
            session()->flash('error','Error: '.$e->getMessage());
        }
    }
}