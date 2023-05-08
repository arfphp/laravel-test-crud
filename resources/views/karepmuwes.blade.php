<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/karep1/create" method="post">
        @csrf
        <label for="">nim</label>
        <input type="text" name="nim">

        <label for="">nama</label>
        <input type="text" name="nama">

        <label for="">jurusan</label>
        <input type="text" name="jurusan">

        <label for="">prodi</label>
        <input type="text" name="prodi">

        <button type="submit">simpen</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>nim</th>
                <th>nama</th>
                <th>jurusan</th>
                <th>prodi</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tampilcoy as $item)
                <tr>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jurusan }}</td>
                    <td>{{ $item->prodi }}</td>
                    <td>
                        <a href="{{ route('hal_update', $item->id) }}">edit</a>
                        <form action="{{ route('destroy', $item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit">delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
