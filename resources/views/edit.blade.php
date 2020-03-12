<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h3>Edit Data Mahasiswa</h3>

	<a href="/mahasiswa"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($mahasiswa as $mhs)
	<form action="/mahasiswa/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="nim" value="{{ $mhs->nim }}"> <br/>
		<input type="text" required="required" name="nama" value="{{ $mhs->nama }}">Nama <br/>
        <div class="form-group">
            <select name="kelas" kelas="" class="form-control form-control-sm">
            <option value="" >Pilih Kelas</option>
            <option value="6A" {{ $mhs->kelas }} >6A</option>
            <option value="6B" {{ $mhs->kelas }} >6B</option>
            <option value="6C" {{ $mhs->kelas }} >6C</option>
            <option value="6D" {{ $mhs->kelas }} >6D</option>
            </select>
        </div><br/>
		<!-- Jabatan <input type="text" required="required" name="kelas" value="{{ $mhs->kelas }}"> <br/> -->
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
</body>
</html>