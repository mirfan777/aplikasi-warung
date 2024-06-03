<?php

namespace App\Livewire\Pages\Keanggotaan\Member;

use Livewire\Component;
use \App\Models\Group;
use \App\Models\Member;

class Create extends Component
{

    public $nama = '';
    public $group_id = null;
    public $tgl_masuk;
    public $tgl_keluar = null;
    public $sembako = '';
    public $tabungan = 0;

    public function mount()
    {
        $this->member = new Member();
    }

    protected $rules = [
        'nama' => 'required|string',
        'group_id' => 'required|exists:groups,id',
        'tgl_masuk' => 'required|date',
        'tgl_keluar' => 'nullable|date',
        'sembako' => 'required|integer',
        'tabungan' => 'required|integer',
    ];


    public function render()
    {
        return view('livewire.pages.keanggotaan.member.create' , [
            'groups' => Group::all()
        ])->layout('layouts.app', ['title' => 'Keanggotaan', 'subTitle' => 'Member']);
    }

    public function createMember()
    {
        $this->validate();

        $member = new Member();
        $member->nama = $this->nama;
        $member->group_id = $this->group_id;
        $member->tgl_masuk = $this->tgl_masuk;
        $member->tgl_keluar = $this->tgl_keluar;
        $member->sembako = $this->sembako;
        $member->tabungan = $this->tabungan;
        $member->save();

        session()->flash('success', 'Member created successfully!');

        return redirect()->route('keanggotaan/member');
    }
}
