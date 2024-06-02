<?php

namespace App\Livewire\Pages\Keanggotaan\Group;

use Livewire\Component;
use App\Models\Group as GroupModel;
use Illuminate\Support\Facades\DB;

class Group extends Component
{

    public function render()
    {
        return view('livewire.pages.keanggotaan.group.group', [
            'groups' => DB::table('groups')
            ->select('groups.id', 'groups.nama', DB::raw("DATE_FORMAT(groups.created_at, '%d/%m/%Y') as created_at"), DB::raw('COUNT(members.id) as total_members'))
            ->leftJoin('members', 'groups.id', '=', 'members.group_id')
            ->groupBy('groups.id', 'groups.nama')
            ->paginate(10),
        ])->layout('layouts.app', ['title' => 'Keanggotaan', 'subTitle' => 'Group']);
    }

    public function deleteGroup()
    {
        $groupId = request()->input('group_id');
        GroupModel::findOrFail($groupId)->delete();
        session()->flash('success', 'Group deleted successfully!');
        return redirect()->route('keanggotaan/group');
    }



}
