@extends('layout.main')

@section('container')

  <h1 class="mt-5 mb-5">Daftar Sekolah</h1>

  @foreach ($list as $l)
	<article class="mb-5">
		<h2>
			<a href="/sekolah/{{ $l["slug"] }}">
				{{ $l["nama"] }}	
			</a>
		</h2>
	  <h5>{{ $l["lokasi"] }}</h5>
	  <p>{{ $l["info"] }}</p>
	</article>
  @endforeach
@endsection

