<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('karyawan.update', $karyawan->nik)}}" method="post">
        @csrf
        @method('PUT')
        <label>NIK</label>
        <input type="number" name="nik" value="{{$karyawan->nik}}" required>
<br>
<label>Nama Karyawan</label>
        <input type="text" name="nama" value="{{$karyawan->nama}}"  required>
<br>
<label>Jenis Kelamin</label>
        <input type="text" name="tgl_lahir" value="{{$karyawan->tgl_lahir}}" required>
<br>
<label>Tanggal Lahir</label>
        <input type="date" name="jenis_kelamin" value="{{$karyawan->jenis_kelamin}}"  required>
<br>
<label>Golongan</label>
        <input type="number" name="id_jabatan" value="{{$karyawan->id_golongan}}" required>
<br>
<label>Jabatan</label>
        <input type="number" name="id__golongan" value="{{$karyawan->id_golongan}}" required>
<br>
<button type="submit">EDIT</button> 
    </form>
</body>
</html>