<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(session('success'))
        {{session('success')}}
        @endif
    @if(session('error'))
    @endif
    
    <img src="skanpat.jpg" alt="foto" width="80" height="80"></img>
    <br>    
    <svg width="500" height="300">
<line  x1="50" y1="250" x2="450" y2="250" stroke="black"/>
<line  x1="50" y1="250" x2="50" y2="50" stroke="black"/>

@for($i = 0; $i <= 10; $i++)
<text x="40" y="{{250-$i*20}}" text-anchor="end">{{$i *10}}</text>
@endfor

@foreach($golonganData as $label => $count)
    <text x="{{$loop->index * 80 + 90}}" y="270" text-anchor="middle">{{$label}}</text>
    <rect x="{{$loop->index * 80 + 70}}" y="{{250 -  $count *5}}" width="60" height="{{$count*5}}"/>
@endforeach

<text x="20" y="150" text-anchor="middle" transform="rotate(-90,20,150)">Jumlah Karyawan</text>
    </svg>


    <a href="{{route ('karyawan.create')}}"><button type="submit">TAMBAH</a></button>
    <table border="1">
<tr>
<th>ID</th>
<th>Nama Karyawan</th>
<th>Jenis Kelamin</th>
<th>Tanggal Lahir</th>
<th>Golongan</th>
<th>Jabatan</th>
<th>Aksi</th>
</tr>
@foreach ($karyawan as $karyawan)
<tr>
            <td>{{$karyawan->nik}}</td>
            <td>{{$karyawan->nama}}</td>
            <td>{{$karyawan->jenis_kelamin}}</td>
            <td>{{$karyawan->tgl_lahir}}</td>
            <td>{{$karyawan->id_jabatan}}</td>
            <td>{{$karyawan->id_golongan}}</td>
            <td>
            <a href ="{{route('karyawan.edit', $karyawan->nik)}}"><button type="submit">EDIT</a></button>
            <form action="{{route('karyawan.destroy', $karyawan->nik)}}" method="post">
            @csrf
    @method('DELETE') 

            <button type="submit">HAPUS</button>
</form>
</td>
</tr>
@endforeach
    </table>
</body>
</html>