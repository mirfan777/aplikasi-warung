<?php

namespace App\Livewire\Pages\Keanggotaan\Group;

use Livewire\Component;
use App\Models\Group as GroupModel;

class Create extends Component
{
    public $nama;

    public function render()
    {
        return view('livewire.pages.keanggotaan.group.create')->layout('layouts.app', ['title' => 'Keanggotaan', 'subTitle' => 'Group']);
    }

    protected $rules = [
        'nama' => 'required|string|unique:groups,nama',
    ];

    public function resetFields(){
        $this->nama = '';
    }

    public function storeGroup()
    {
        $this->validate();

        try {
            GroupModel::create([
                'nama' => $this->nama,
            ]);
            session()->flash('success','Group Berhasil Ditambahkan');
            $this->resetFields();
            return redirect()->route('keanggotaan/group');

        } catch (\Exception $e) {
            session()->flash('error','Error: '.$e->getMessage());
        }
    }
}
