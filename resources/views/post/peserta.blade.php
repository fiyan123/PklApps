<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <legend>
        Data peserta
    </legend>
    <br>
    <table border="1" cellpadding="10">
        <tr>
            <td>NO Siswa</td>
            <td>Kode Mp</td>
        </tr>
        @foreach($peserta as $isi)
            <tr>
                <td>{{ $isi['no'] }}</td>
                <td>{{ $isi['kode_mp'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>