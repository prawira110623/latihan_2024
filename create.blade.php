<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('karyawan.store')}}" method="post">
    @csrf
    <label>NIK</label>
    <input type="number" name="nik" required>
    <br>
    <label>NAMA</label>
    <input type="text" name="nama" required>
    <br>
    <label>TANGGAL LAHIR</label>
    <input type="date" name="tgl_lahir" required>
    <br>
    <label>JENIS KELAMIN</label>
    <input type="text" name="jenis_kelamin" required>
    <br>
    <label>JABATAN</label>
    <input type="number" name="id_jabatan" required>
    <br>
    <label>GOLONGAN</label>
    <input type="number" name="id_golongan" required>
    <br>

    <button type="submit">SIMPAN</button>
    </form>
</body>
</html>