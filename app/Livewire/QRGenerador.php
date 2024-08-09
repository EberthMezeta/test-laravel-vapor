<?php

namespace App\Livewire;

use Livewire\Component;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRGenerador extends Component
{
    public $url;
    public $size = 200; // Tamaño predeterminado
    protected $listeners = ['screenSizeChanged' => 'updateSize'];
    public function mount($url, $size = 200)
    {
        $this->url = $url;
        $this->size = $size;
    }

    public function updateSize($width, $height)
    {
        // Ajustar el tamaño basado en el ancho de la pantalla
        $this->size = min($width, $height) * 0.8; // Por ejemplo, 80% del tamaño menor
    }



    public function render()
    {

          $qrCode = QrCode::format('svg')->size($this->size)->generate($this->url);

        return view('livewire.q-r-generador', ['qrCode' => $qrCode]);
    }
}
