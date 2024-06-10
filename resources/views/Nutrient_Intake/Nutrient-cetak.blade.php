<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Nutrient</title>
    <style>
        .table-data {
            border-collapse: collapse;
            width: 100%;
        }
        .table-data tr th,
        .table-data tr td {
            border: 1px solid black;
            font-size: 11pt;
            padding: 10px 20px;
            text-align: center;
        }
        .table-data tr th {
            background-color: #2c3e50;
            color: white;
        }
        .table-data tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .table-data tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <h3>Data Nutrient</h3>
    <table class="table-data">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pengguna</th>
                <th>Nama Makanan</th>
                <th>Calories</th>
                <th>Protein</th>
                <th>Carbs</th>
                <th>Fat</th>
                <th>Fiber</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($Nutrient as  $Nutrient)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $Nutrient->nama_pengguna }}</td>
                <td>{{ $Nutrient->nama_makanan }}</td>
                <td>{{ $Nutrient->calories }}</td>
                <td>{{ $Nutrient->protein }}</td>
                <td>{{ $Nutrient->carbs }}</td>
                <td>{{ $Nutrient->fat }}</td>
                <td>{{ $Nutrient->fiber }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="8" align="center">Tidak ada data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
