<?php

namespace App\Livewire\Pages\Keanggotaan\Member;

use Livewire\Component;
use App\Models\Member as MemberModel;

class Delete extends Component
{
    public function mount($id)
    {
        MemberModel::findOrFail($id)->delete();
        session()->flash('success', 'Group deleted successfully!');
        return redirect()->route('keanggotaan/group');
    }
}
