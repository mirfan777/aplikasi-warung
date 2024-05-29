<?php

namespace App\Livewire\Pages\Keanggotaan;

use Livewire\Component;

class Member extends Component
{
    public function render()
    {
        return view('livewire.pages.keanggotaan.member')->layout('layouts.app', ['title' => 'Keanggotaan', 'subTitle' => 'Member']);
    }

    
}
