<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h3>Pesanan Anda : {{ $makan }}</h3> -->

    @if($makan == 'ayam goreng')
        <br> Makanan Yang Dipilih : <b>{{ $makan }}</b>
        <br> Harga {{ $makan }}   :  Rp.150000
    @elseif($makan == 'lobster')
        <br> Makanan Yang Dipilih : <b>{{ $makan }}</b>
        <br> Harga {{ $makan }}   : Rp.20000
    @elseif($makan == 'pizza')
        <br> Makanan Yang Dipilih : <b>{{ $makan }}</b>
        <br> Harga {{ $makan }}   : Rp.50000
    @elseif($makan == 'tiramisu')
        <br> Makanan Yang Dipilih : <b>{{ $makan }}</b>
        <br> Harga {{ $makan }}   : Rp.30000
    @elseif($makan == 'pasta')
        <br> Makanan Yang Dipilih : <b>{{ $makan }}</b>
        <br> Harga {{ $makan }}   : Rp.25000
    @else
        <br> Mohon Maaf Pesanan Anda Tidak Ada
    @endif
</body>
</html>