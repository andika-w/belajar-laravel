@extends('layout.main')

@section('container')

  <h1 class="mt-5 mb-5">Info Sekolah</h1>

<article>
	<h2>{{ $data->nama_sekolah }}</h2>
	<h5>Akreditasi : {{ $data->akreditasi }}</h5>
	<h5>Jumlah Prestasi : {{ $data->jumlah_prestasi }}</h5>
	<h5>Alamat : {{ $data->alamat }}</h5>
</article>
@endsection

