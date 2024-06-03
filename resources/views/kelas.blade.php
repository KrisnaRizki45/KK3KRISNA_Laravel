<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .alert {
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }
        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
        }
        a {
            display: inline-block;
            padding: 10px 20px;
            margin-bottom: 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 2px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #ffff;
        }
        tr:nth-child(even) {
            background-color: #ffff;
        }

        /* CSS for the table header */
        #judul th {
            background-color: #0056b3; /* Black background for header */
            color: #fff; /* White text color for header */
        }

        /* CSS for delete button form */
        form {
            display: inline-block;
            margin: 0;
            padding: 0;
        }

        button[type="submit"] {
            background-color: #ff4d4d; /* Red color for delete action */
            color: white; /* Text color */
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #ff1a1a; /* Darker red on hover */
            transform: scale(1.05); /* Slightly enlarge on hover */
        }

        button[type="submit"]:active {
            background-color: #cc0000; /* Even darker red on click */
            transform: scale(0.95); /* Slightly shrink on click */
        }

        /* CSS for action buttons */
        .aksi {
            display: flex;
            gap: 10px;
        }

        .aksi a {
            background-color: #28a745; /* Green color for edit button */
            color: white; /* Text color */
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .aksi a:hover {
            background-color: #218838; /* Darker green on hover */
            transform: scale(1.05); /* Slightly enlarge on hover */
        }

        .aksi a:active {
            background-color: #1e7e34; /* Even darker green on click */
            transform: scale(0.95); /* Slightly shrink on click */
        }
    </style>
</head>
<body>
    <h1>Belajar Laravel, Tulisan ini ditampilkan dari Views/kelas</h1>
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    @if (session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
    @endif
    
    <a href="{{ url('/kelas/create') }}"><i class="bi bi-plus-square-fill"></i></a>
    <table>
        <tr id="judul">
            <th>No</th>
            <th>Nama Kelas</th>
            <th>Jurusan</th>
            <th>Lokasi Ruangan</th>
            <th>Nama Wali Kelas</th>
            <th>Aksi</th>
        </tr>
        @foreach ($kelas as $row)
        <tr>
            <td>{{ isset($i) ? ++$i : $i = 1 }}</td>
            <td>{{ $row->nama_kelas }}</td>
            <td>{{ $row->jurusan }}</td>
            <td>{{ $row->lokasi_ruangan }}</td>
            <td>{{ $row->nama_wali_kelas }}</td>
            <td class="aksi">
                <a href="{{ url('/kelas/edit/' . $row->id )}}"><i class="bi bi-pencil-square"></i></a>          
                <form action="{{ url('/kelas', $row->id )}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit"><i class="bi bi-trash-fill"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
