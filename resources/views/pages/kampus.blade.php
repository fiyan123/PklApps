<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Dosen</title>
</head>
<body>


           @foreach($kampus as $isi)

            <table border="1" cellpadding="15">
                <tr>
                    <th colspan="2">Nama Dosen</th>
                    <th colspan="2">Mata Kuliah</th>
                </tr>
                <tr>
                    <td colspan="2 ">{{ $isi['nama'] }}</td>
                    <td colspan="2 ">{{ $isi['mata_kuliah'] }}</td>
                    
                </tr>
                
                <?php $nilai0 = 0 ?>

                <tr>
                    <th colspan="4">Mahasiswa Pembimbing</th>
                    </tr>
                    <tr>
                        <th colspan="2">NAMA</th>
                        <th>NILAI</th>
                        <th>GRADE</th>
                    </tr>
                    @foreach($isi['mahasiswa'] as $data)
                    <tr>
                        <td colspan="2">{{ $data['nama'] }} </td>
                        <td>{{$data['nilai']}}</td>
                        
                            @if($data['nilai'] >= 90 && 100)
                            <td>  A</td>
                            @elseif($data['nilai'] >= 80 && 89)
                            <td>  B</td>
                            @elseif($data['nilai'] >= 70 && 79)
                            <td>  C</td>
                            @elseif($data['nilai'] >= 50 && 69)
                            <td>  D</td>
                            @elseif($data['nilai'] >= 0 && 49)
                            <td>  E</td>
                            @endif
                            
                        </tr>
                        <?php  $nilai0 += $data['nilai'] ?>
                        @endforeach
                        
                        <tr>
                        <th colspan="3">Total Nilai</th>
                        <th>{{$nilai0}}</th>
                    </tr>
                    <?php $rata = $nilai0 / count($isi['mahasiswa']) ?>
                    <tr>
                        <th colspan="3">Nilai Rata-Rata</th>
                        <th>{{$rata}}</th>
                    </tr>
                    <tr>
                        @php
                            
                           if($rata > 90){
                            $grade = 'A';
                           }
                           elseif($rata > 80){
                            $grade = 'B';
                           }
                           elseif($rata > 70){
                            $grade = 'C';
                           }
                           elseif($rata > 60){
                            $grade = 'D';
                           }
                           else {
                            $grade = 'E';
                           }
          
                        @endphp
                        <th colspan="3">Grade Dari Dosen{{ $isi['nama'] }}</th>
                        <th>{{ $grade }}</th>
                    </tr>
            </table>
            <br>
        @endforeach






        {{-- <fieldset>
            <legend>
                Data Dosen Kampus
            </legend>

            @foreach($kampus as $isi)

                Nama Dosen  : {{ $isi['nama'] }} <br>
                Mata Kuliah : {{ $isi['mata_kuliah'] }} <br><br>

                <?//php $nilai0 = 0 ?>

                Mahasiswa Pembimbing : <br>
                    @foreach($isi['mahasiswa'] as $data)
                        <br> {{ $data['nama']}} {{$data['nilai']}} :

                        @if($data['nilai'] >= 90 && 100)
                            Grade A
                        @elseif($data['nilai'] >= 80 && 89)
                            Grade B
                        @elseif($data['nilai'] >= 70 && 79)
                            Grade C
                        @elseif($data['nilai'] >= 50 && 69)
                            Grade D
                        @elseif($data['nilai'] >= 0 && 49)
                            Grade E
                        @endif
                        <?php// $nilai0 += $data['nilai'] ?>
                    @endforeach
                <br>
                Total Nilai : {{ $nilai0 }}

                <?php //$rata = $nilai0 / count($isi['mahasiswa']) ?>
                <br>
                Rata - Rata Nilai : {{$rata}}
                <br>
                @if($rata > 90)
                    Grade Dari Dosen {{ $isi['nama'] }} : A
                @elseif($rata > 80)
                    Grade Dari Dosen {{ $isi['nama'] }} : B
                @elseif($rata > 70)
                    Grade Dari Dosen {{ $isi['nama'] }} : C
                @elseif($rata > 60)
                    Grade Dari Dosen {{ $isi['nama'] }} : D
                @endif                
                <hr>
            @endforeach
        </fieldset> --}}
</body>
</html>