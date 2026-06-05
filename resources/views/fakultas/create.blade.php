<!DOCTYPE html>
<html>
<head>
    <title>Tambah Fakultas</title>
</head>
<body>

    <h1>Tambah Fakultas</h1>

    <form action="/fakultas" method="POST">
        @csrf

        <div>
            <label for="fakultas" class="form-label">
                Fakultas
            </label>
            <select name="fakultas_id" id="fakultas">
                <option value="">Pilih Fakultas</option>
                @foreach ($listFakultas as $fakultas)
                    <option value="{{ $fakultas->id }}">
                        {{$fakultas->nama_fakultas}}
                    </option>
                @endforeach
            </select>
        </div>
        <label>Nama Fakultas</label>
        <br>
        <input type="text" name="nama_fakultas">
        <br><br>

        <label>Nama Dekan</label>
        <br>
        <input type="text" name="nama_dekan">
        <br><br>

        <button type="submit">Simpan</button>
    </form>

</body>
</html>