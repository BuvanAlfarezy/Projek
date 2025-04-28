
<h2>Form Contact</h2>
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
<form action="{{ route('contact.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nama" value="{{ old('name') }}"><br>
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
    <input type="text" name="no" placeholder="Nomor Hp" value="{{ old('no') }}"><br>
    <input type="text" name="message" placeholder="Pesan" value="{{ old('message') }}"><br>
    <button type="submit">Simpan</button>
</form>
