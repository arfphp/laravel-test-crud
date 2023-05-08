<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/karep1/{{ $editcoy->id }}" method="post">
        @csrf
        @method('put')
        <label for="">nim</label>
        <input type="text" name="nim" value="{{ $editcoy->nim }}">

        <label for="">nama</label>
        <input type="text" name="nama" value="{{ $editcoy->nama }}">

        <label for="">jurusan</label>
        <input type="text" name="jurusan" value="{{ $editcoy->jurusan }}">

        <label for="">prodi</label>
        <input type="text" name="prodi" value="{{ $editcoy->prodi }}">

        <button type="submit">simpen</button>
    </form>
</body>

</html>
