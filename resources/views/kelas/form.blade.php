<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kelas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .alert {
            padding: 15px;
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
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
        }
        h1 {
            color: #007bff;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form input[type="text"], 
        form select {
            width: calc(100% - 22px);
            padding: 10px;
            margin: 10px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        form input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        form input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    @if (session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Perhatian!</strong>
            <br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1>Form Kelas</h1>
    <form action="{{ url('kelas', @$kelas->id) }}" method="POST">
        @csrf

        @if (!empty(@$kelas))
            @method('PATCH')
        @endif

        Nama Kelas : 
        <select name="nama_kelas">
            <option value="">Pilih Nama Kelas</option>
            <option value="XI-RPL1" {{ old('nama_kelas', @$kelas->nama_kelas) == 'XI-RPL1' ? 'selected' : '' }}>XI-RPL1</option>
            <option value="XI-RPL2" {{ old('nama_kelas', @$kelas->nama_kelas) == 'XI-RPL2' ? 'selected' : '' }}>XI-RPL2</option>
            <option value="XI-TKJ1" {{ old('nama_kelas', @$kelas->nama_kelas) == 'XI-TKJ1' ? 'selected' : '' }}>XI-TKJ1</option>
            <option value="XI-TKJ2" {{ old('nama_kelas', @$kelas->nama_kelas) == 'XI-TKJ2' ? 'selected' : '' }}>XI-TKJ2</option>
            <option value="XI-DKV1" {{ old('nama_kelas', @$kelas->nama_kelas) == 'XI-DKV1' ? 'selected' : '' }}>XI-DKV1</option>
            <option value="XI-DKV2" {{ old('nama_kelas', @$kelas->nama_kelas) == 'XI-DKV2' ? 'selected' : '' }}>XI-DKV2</option>
            <option value="XI-TOI1" {{ old('nama_kelas', @$kelas->nama_kelas) == 'XI-TOI1' ? 'selected' : '' }}>XI-TOI1</option>
            <option value="XI-TOI2" {{ old('nama_kelas', @$kelas->nama_kelas) == 'XI-TOI2' ? 'selected' : '' }}>XI-TOI2</option>
            <option value="XI-TITL1" {{ old('nama_kelas', @$kelas->nama_kelas) == 'XI-TITL1' ? 'selected' : '' }}>XI-TITL1</option>
            <option value="XI-TITL2" {{ old('nama_kelas', @$kelas->nama_kelas) == 'XI-TITL2' ? 'selected' : '' }}>XI-TITL2</option>
        </select><br>
        Jurusan : <input type="text" name="jurusan" value="{{ old('jurusan', @$kelas->jurusan) }}"><br>
        Lokasi Ruangan : <input type="text" name="lokasi_ruangan" value="{{ old('lokasi_ruangan', @$kelas->lokasi_ruangan) }}"><br>
        Wali Kelas : <input type="text" name="nama_wali_kelas" value="{{ old('nama_wali_kelas', @$kelas->nama_wali_kelas) }}"><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
