<?php

namespace App\Livewire\Pages\Keanggotaan\Group;

use Livewire\Component;
use App\Models\Group as GroupModel;

class Delete extends Component
{
    public function mount($id)
    {
        GroupModel::findOrFail($id)->delete();
        session()->flash('success', 'Group deleted successfully!');
        return redirect()->route('keanggotaan/group');
    }
}
