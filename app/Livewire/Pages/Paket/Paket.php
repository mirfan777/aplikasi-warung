<?php

namespace App\Livewire\Pages\Paket;

use Livewire\Component;

class Paket extends Component
{
    public function render()
    {
        return view('livewire.pages.paket.paket')->layout('layouts.app', ['title' => 'Keanggotaan', 'subTitle' => 'Group']);
    }
}
