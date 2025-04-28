
<h2>Form Admin</h2>
@if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

@if ($errors->any())
    <ul style="color: red;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form action="{{ route('admin.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nama" value="{{ old('name') }}"><br>
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
    <input type="text" name="no" placeholder="Nomor Hp" value="{{ old('no') }}"><br>
    <input type="text" name="alamat" placeholder="alamat" value="{{ old('alamat') }}"><br>
    <select name="role">
        <option value="">-- Pilih Role --</option>
        <option value="Super Admin" {{ old('role') == 'Super Admin' ? 'selected' : '' }}>Super Admin</option>
        <option value="Kasir" {{ old('role') == 'Kasir' ? 'selected' : '' }}>Kasir</option>
    </select><br><br>
    <button type="submit">Simpan</button>
</form>
