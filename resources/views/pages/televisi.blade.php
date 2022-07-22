<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Televisi</title>
</head>
<body>
    
    <center><h1>Data Jadwal Televisi</h1></center>
    @foreach($tv as $televisi)
        <center><br>
            <table cellpadding="10" border="1">
                <tr>
                    <th colspan="3">{{ $televisi['nama'] }}</th>
                </tr>

                <tr>
                    <th>Nama Program</th>
                    <th>Jam Tayang</th>
                    <th>Tanggal Tayang</th>
                </tr>

                    @foreach($televisi['jadwal_mulai'] as $jadwal)
                    <tr>
                        <td>
                            {{ $jadwal['nama_program'] }}
                        </td>

                        <td>
                            {{ $jadwal['jam_tayang'] }}
                        </td>
                        
                        <td>
                            {{ $jadwal['tanggal_tayang'] }}
                        </td>
                    </tr>
                    @endforeach
                </tr>
            </table>
        </center>
        @endforeach


    {{-- @foreach($tv as $televisi)

        Nama Chanel : {{ $televisi['nama'] }} <br>
        <br>
            @foreach($televisi['jadwal_mulai'] as $jadwal) <br>
                Nama Program     : {{ $jadwal['nama_program'] }} <br>
                Jam Tayang       : {{ $jadwal['jam_tayang'] }} <br>
                Tanggal Tayang   : {{ $jadwal['tanggal_tayang'] }} <br>
            @endforeach
        
    @endforeach --}}

</body>
</html>