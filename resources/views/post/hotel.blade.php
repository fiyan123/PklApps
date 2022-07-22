<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Hotel</title>

</head>
<body>
<center>
    <h2>Tabel Karyawan</h2>
    <table border="1" cellpadding="10">
    <tr>
        <th>Id Karyawan</th>
        <th>Nama Karyawan</th>
        <th>Jenis Kelamin</th>
    </tr>    
        @foreach($karyawan as $isi)

         <tr>
            <td>{{ $isi['id_karyawan']}} </td>
            <td>{{ $isi['nm_karyawan']}} </td>
            <td>{{ $isi['jk']}} </td>
         </tr>
            
        @endforeach
    </table>
    <br>

    <h2>Tabel Pengunjung</h2>
    <table border="1" cellpadding="10">
    <tr>
        <th>Id Pengunjung</th>
        <th>Nama Pengunjung</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>NO Telpon</th>
        <th>NO Ktp</th>
    </tr>    
        @foreach($pengunjung as $isi1)

         <tr>
            <td>{{ $isi1['id_pengunjung']}} </td>
            <td>{{ $isi1['nm_pengunjung']}} </td>
            <td>{{ $isi1['alamat']}} </td>
            <td>{{ $isi1['jk']}} </td>
            <td>{{ $isi1['no_tlp']}} </td>
            <td>{{ $isi1['no_ktp']}} </td>
         </tr>
            
        @endforeach
    </table>
    <br>

    <h2>Tabel Transaksi</h2>
    <table border="1" cellpadding="10">
    <tr>
        <th>No Transaksi</th>
        <th>Id Pengunjung</th>
        <th>Id Karyawan</th>
        <th>Jumlah Kamar</th>
        <th>Tanggal Masuk</th>
        <th>Tanggal Keluar</th>
        <th>Lama Nginap</th>
        <th>Total Harga</th>
    </tr>    
        @foreach($transaksi as $isi2)

         <tr>
            <td>{{ $isi2['no_transaksi']}} </td>
            <td>{{ $isi2['id_pengunjung']}} </td>
            <td>{{ $isi2['id_karyawan']}} </td>
            <td>{{ $isi2['jmlh_kamar']}} </td>
            <td>{{ $isi2['tgl_masuk']}} </td>
            <td>{{ $isi2['tgl_keluar']}} </td>
            <td>{{ $isi2['lama_nginap']}} </td>
            <td>{{ $isi2['total_harga']}} </td>
         </tr>
            
        @endforeach
    </table>
    <br>

    <h2>Tabel Detail Transaksi</h2>
    <table border="1" cellpadding="10">
    <tr>
        <th>Id Dtl Transaksi</th>
        <th>No Transaksi</th>
        <th>No Kamar</th>
    </tr>    
        @foreach($detail_transaksi as $isi3)

         <tr>
            <td>{{ $isi3['id_dtl_transaksi']}} </td>
            <td>{{ $isi3['no_transaksi']}} </td>
            <td>{{ $isi3['no_kamar']}} </td>
         </tr>
            
        @endforeach
    </table>
    <br>

    <h2>Tabel Kamar</h2>
    <table border="1" cellpadding="10">
    <tr>
        <th>No Kamar</th>
        <th>Jenis Kamar</th>
        <th>Harga</th>
    </tr>    
        @foreach($kamar as $isi4)

         <tr>
            <td>{{ $isi4['no_kamar']}} </td>
            <td>{{ $isi4['jenis_kamar']}} </td>
            <td>{{ $isi4['harga']}} </td>
         </tr>
            
        @endforeach
    </table>
</center>
</body>
</html>