<?php

namespace App\Livewire\Pages\Keanggotaan\Member;

use Livewire\Component;
use App\Models\Member as MemberModel;
use App\Models\Group;

class Member extends Component
{
    

    public function render()
    {
        return view('livewire.pages.keanggotaan.member.member' , [ 
            'members' => MemberModel::paginate(10),
            'groups' => Group::all(),
        ])->layout('layouts.app', ['title' => 'Keanggotaan', 'subTitle' => 'Member']);
        
    }

    public function deleteMember()
    {
        $memberId = request()->input('group_id');
        MemberModel::findOrFail($$memberId)->delete();
        session()->flash('success', 'Anggota Berhasil Dihapus');
        return redirect()->route('keanggotaan/member');
    }

}
