@extends('master')

@section('konten')
	<h2>{{ $materi->nama }}</h2>
	<p>
		{{ $materi->deskripsi}}
	</p>
@stop
