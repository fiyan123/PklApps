<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Blade</title>
</head>

<body>

    <h3>Pesanan Yang Anda Pilih : {{ $makan }}</h3>

    @if ($makan == 'Ayam goreng')
        <br> Makanan Yang Dipilih : <u>{{ $makan }}</u>
        <br> Harga {{ $makan }}   : Rp.150000
    @elseif($makan == 'Lobster')
        <br> Makanan Yang Dipilih : <u>{{ $makan }}</u>
        <br> Harga {{ $makan }}   : Rp.20000
    @elseif($makan == 'Pizza')
        <br> Makanan Yang Dipilih : <u>{{ $makan }}</u>
        <br> Harga {{ $makan }}   : Rp.50000
    @elseif($makan == 'Tiramisu')
        <br> Makanan Yang Dipilih : <u>{{ $makan }}</u>
        <br> Harga {{ $makan }} : Rp.30000
    @elseif($makan == 'Pasta')
        <br> Makanan Yang Dipilih : <u>{{ $makan }}</u>
        <br> Harga {{ $makan }} : Rp.25000
    @else
        <br> Mohon Maaf Pesanan Anda Tidak Ada
    @endif

    <hr>

    <h3>Pesanan Yang Anda Pilih : {{ $makan1 }}</h3>

    @if ($makan1 == 'Ayam goreng')
        <br> Makanan Yang Dipilih : <u>{{ $makan1 }}</u>
        <br> Harga {{ $makan1 }} : Rp.150000
        <hr>
    @elseif($makan1 == 'Lobster')
        <br> Makanan Yang Dipilih : <u>{{ $makan1 }}</u>
        <br> Harga {{ $makan1 }} : Rp.20000
        <hr>
    @elseif($makan1 == 'Pizza')
        <br> Makanan Yang Dipilih : <u>{{ $makan1 }}</u>
        <br> Harga {{ $makan1 }} : Rp.50000
        <hr>
    @elseif($makan1 == 'Tiramisu')
        <br> Makanan Yang Dipilih : <u>{{ $makan1 }}</u>
        <br> Harga {{ $makan1 }} : Rp.30000
        <hr>
    @elseif($makan1 == 'Pasta')
        <br> Makanan Yang Dipilih : <u>{{ $makan1 }}</u>
        <br> Harga {{ $makan1 }} : Rp.25000
        <hr>
    @else
        <br> Mohon Maaf Pesanan Anda Tidak Ada
    @endif

</body>

</html>
