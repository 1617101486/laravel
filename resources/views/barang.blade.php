<html>
<head>
	<title>Data Barang</title>
</head>
<body>
	<h2>Data barang</h2><br><br>
	@foreach($barang as $key)
	{{$key->Kode_barang}}+{{$key->Nama_barang}}+{{$key->Harga}}<hr>
	@endforeach
</body>
</html>