<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            font-family: Georgia, 'Times New Roman', Times, serif;
            box-shadow: 10px 10px
        }
        h2{
            font-size: 20pt;
        }
    </style>
</head>
<body>

<center>
    <h2>Table Siswa</h2>
    <br>
    <table border="1" cellpadding="10">
        <tr>
            <th>NO Siswa</th>
            <th>Nama</th>
            <th>JK</th>
            <th>Jurusan</th>
        </tr>
        @foreach($siswa as $isi)
            <tr>
                <td>{{ $isi['no'] }}</td>
                <td>{{ $isi['nama'] }}</td>
                <td>{{ $isi['jk'] }}</td>
                <td>{{ $isi['jurusan'] }}</td>
            </tr>
        @endforeach
    </table>
    <br>

    <h2>Table Peserta</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>NO Siswa</th>
            <th>Kode Mp</th>
        </tr>
        @foreach($peserta as $isi)
            <tr>
                <td>{{ $isi['no'] }}</td>
                <td>{{ $isi['kode_mp'] }}</td>
            </tr>
        @endforeach
    </table>
    <br>

    <h2>Table Mata Pelajaran</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>Kode Mp</th>
            <th>Nama Mp</th>
            <th>Sks</th>
            <th>Semester</th>
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
</center>
</body>
</html>