<?php

namespace App\Livewire\Pages\Keanggotaan;

use Livewire\Component;

class Group extends Component
{
    public function render()
    {
        return view('livewire.pages.keanggotaan.group')->layout('layouts.app', ['title' => 'Keanggotaan', 'subTitle' => 'Group']);;
    }
}
