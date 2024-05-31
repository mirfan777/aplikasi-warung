<?php

namespace App\Livewire\Pages\Barang;

use Livewire\Component;

class Barang extends Component
{
    public function render()
    {
        return view('livewire.pages.barang.barang')->layout('layouts.app', ['title' => 'Barang']);
    }
}
