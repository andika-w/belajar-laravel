@dd($slug, $list["slug"]);
@extends('layout.main')

@section('container')

  <h1 class="mt-5 mb-5">Info Sekolah</h1>

<article>
	<h2>{{ $data["nama"] }}</h2>
	<h5>{{ $data["lokasi"] }}</h5>
	<p>{{ $data["info"] }}</p>
</article>
@endsection

