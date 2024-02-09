@extends('layout.main')

@section('container')

	<h1 class="mt-5 mb-5">Daftar Sekolah</h1>

	@foreach ($list as $l)
		<article class="mb-5">
			<h2>
				<a href="/sekolah/{{ $l->slug }}">
					{{ $l->nama_sekolah }}	
				</a>
			</h2>
		<h5>Akreditasi : {{ $l->akreditasi }}</h5>
		<h5>Jumlah Prestasi : {{ $l->jumlah_prestasi }}</h5>
		<h5>Alamat : {{ $l->alamat }}</h5>
		</article>
	@endforeach
@endsection

