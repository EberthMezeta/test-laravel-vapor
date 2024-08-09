<div>
    @if($qrCode)
        <div>{!! $qrCode !!}</div>
    @else
        <p>No se pudo generar el código QR.</p>
    @endif
</div>
