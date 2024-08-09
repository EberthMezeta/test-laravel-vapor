<?php

namespace App\Livewire;

use Livewire\Component;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRGenerador extends Component
{
    public $url;

    public function mount($url)
    {
        $this->url = $url;
    }


    public function render()
    {
        $qrCode = QrCode::size(200)->generate($this->url);

        return view('livewire.q-r-generador', ['qrCode' => $qrCode]);
    }
}
