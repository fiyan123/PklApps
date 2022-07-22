<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>
            Data Siswa
        </legend>

        @foreach($siswa as $murid)
            <table>
                <tr>
                    <td>Id</td>
                    <td>:</td>
                    <td>{{$murid['id']}}</td>
                </tr>

                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{$murid['name']}}</td>
                </tr>

                <tr>
                    <td>Umur</td>
                    <td>:</td>
                    <td>{{$murid['age']}}</td>
                </tr>

                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        @if($murid['age'] >= 17)
                            Anda Berhak Mendapatkan KTP
                        @else
                            Anda Belum Berhak Mendapatkan KTP
                        @endif
                    </td>
                </tr>

                <tr>
                    <td>Mata Pelajaran</td>
                    <td> : </td>
                    <td>
                        @foreach($murid['mapel'] as $mapel)
                            <li type="1">{{$mapel}}</li>
                        @endforeach
                    </td>
                </tr>

                <tr>
                    <td>Hobby</td>
                    <td> : </td>
                    <td>
                        @foreach($murid['hobi'] as $hobi)
                            <li type="1">{{$hobi}}</li>
                        @endforeach
                    </td>
                </tr>
            </table>
        <hr>
        @endforeach
    </fieldset>
</body>
</html>