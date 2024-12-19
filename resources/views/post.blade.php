{{-- @dd($post) --}}
@extends('layouts.main')

@section('content') 
       <article class="mb-5">
           <h2>{{ $post->title }}</h2>
           {!! $post->body !!}
       </article>

   <a href="/post" class="btn btn-danger">Kembali</a>
@endsection
