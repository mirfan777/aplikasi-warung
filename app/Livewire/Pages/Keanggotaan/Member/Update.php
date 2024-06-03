<?php

namespace App\Livewire\Pages\Keanggotaan\Member;

use Livewire\Component;
use App\Models\Group;
use App\Models\Member;
use Carbon\Carbon;

class Update extends Component
{
    public $memberId;
    public $nama = '';
    public $group_id = null;
    public $tgl_masuk = null;
    public $tgl_keluar = null;
    public $sembako = '';
    public $tabungan = 0;

    protected $rules = [
        'nama' => 'required|string',
        'group_id' => 'required|exists:groups,id',
        'tgl_masuk' => 'required|date',
        'tgl_keluar' => 'nullable|date',
        'sembako' => 'required|string',  // Changed to string if it's a type
        'tabungan' => 'required|numeric',
    ];

    public function mount($id)
    {
        $this->memberId = $id;
        $member = Member::findOrFail($id);

        $this->nama = $member->nama;
        $this->group_id = $member->group_id;
        $this->tgl_masuk = $this->formatDate($member->tgl_masuk);
        $this->tgl_keluar = $this->formatDate($member->tgl_keluar);
        $this->sembako = is_numeric($member->sembako) ? strval($member->sembako) : $member->sembako;
        $this->tabungan = is_numeric($member->tabungan) ? $member->tabungan : 0;
    }

    private function formatDate($date)
    {
        if ($date instanceof Carbon) {
            return $date->format('Y-m-d');
        } elseif (is_string($date) && strtotime($date) !== false) {
            return date('Y-m-d', strtotime($date));
        }
        return null;
    }

    public function render()
    {
        return view('livewire.pages.keanggotaan.member.update', [
            'groups' => Group::all()
        ])->layout('layouts.app', ['title' => 'Keanggotaan', 'subTitle' => 'Update Member']);
    }

    public function updateMember()
    {
        $this->validate();

        $member = Member::findOrFail($this->memberId);
        $member->nama = $this->nama;
        $member->group_id = $this->group_id;
        $member->tgl_masuk = $this->tgl_masuk;
        $member->tgl_keluar = $this->tgl_keluar;
        $member->sembako = $this->sembako;
        $member->tabungan = $this->tabungan;
        $member->save();

        session()->flash('success', 'Member updated successfully!');

        return redirect()->route('keanggotaan/member');
    }
}