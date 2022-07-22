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
        Data Pelajaran
    </legend>
    <br>
    <table border="1" cellpadding="10">
        <tr>
            <td>Kode Mp</td>
            <td>Nama Mp</td>
            <td>Sks</td>
            <td>Semester</td>
        </tr>
        @foreach($pelajaran as $isi)
            <tr>
                <td>{{ $isi['kode_mp'] }}</td>
                <td>{{ $isi['nama_mp'] }}</td>
                <td>{{ $isi['sks'] }}</td>
                <td>{{ $isi['semester'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>