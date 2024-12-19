{{-- @dd($posts) --}}
@extends('layouts.main')

@section('content') 
   @foreach ($posts as $post)
       <article class="mb-5">
           <h2><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h2>
           <p>{{ $post->excerpt }}</p>
       </article>
   @endforeach
@endsection

