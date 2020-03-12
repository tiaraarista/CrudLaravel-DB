<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h3>Data Mahasiswa</h3>

	<a href="/mahasiswa"> Kembali</a>
	
	<br/>
	<br/>
    
	<form action="{{url('mahasiswa/store')}}" method="post">
		{{ csrf_field() }}
        <input type="text" name="nim"> Nim <br/>
		<input type="text" name="nama"> Nama <br/>
        <div class="form-group">
            <select name="kelas" kelas="" class="form-control form-control-sm">
            <option value="" >Pilih Kelas</option>
            <option value="6A" >6A</option>
            <option value="6B" >6B</option>
            <option value="6C" >6C</option>
            <option value="6D" >6D</option>
            </select>
        </div><br/>
		<input type="submit" value="Simpan Data">
	</form>
		


</body>
</html>