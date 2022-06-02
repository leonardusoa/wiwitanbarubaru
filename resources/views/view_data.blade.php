<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - View Data</title>
    <style>
        table {
            width: 100%;
        }
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<table>
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Golongan Darah</th>
        <th>Alamat</th>
        <th>Pendidikan Terakhir</th>
        <th>Jurusan Pendidikan</th>
        <th>No Telp</th>
        <th>Email</th>
        <th>Konfirmasi</th>
        <th>Bantuan Finansial</th>
        <th>Waktu Submit</th>
    </thead>
    <tbody>
        @foreach ($registed_user as $index => $user)
            <tr>
                <td>{{ $index+1 }}.</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->tempat_lahir }}</td>
                <td>{{ $user->tanggal_lahir }}</td>
                <td>{{ $user->golongan_darah }}</td>
                <td>{{ $user->alamat }}</td>
                <td>{{ $user->jurusan_pendidikan }}</td>
                <td>{{ $user->pendidikan_terakhir }}</td>
                <td>{{ $user->nomor_telp }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->konfirmasi }}</td>
                <td>{{ $user->bantuan_finansial }}</td>
                <td>{{ $user->created_at->isoFormat('dddd, D MMMM Y') }} {{ $user->created_at->format('g:i:s A') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>