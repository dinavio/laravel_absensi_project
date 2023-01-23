<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <h1>Relasi Kelas dan Guru</h1>
            <table>
                <thead>
                    <tr>
                        <th>nama kelas</th>
                        <th>Nama Guru</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kelas as $k)
                    <tr>
                        <td>{{ $k->nama_kelas }}</td>
                        <td>{{ $k->guru}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>