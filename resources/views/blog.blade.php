
@extends('layouts.main')

@section('container')
    <div class="">
        <h1>Halaman Blog</h1>
    </div>
        <article class="mt-5">
            <h2>
                {{ $post["tittle"] }}
            </h2>
            <h5>
                {{ $post["author"] }}</h5>
            <p>
                {{ $post["body"] }}</p>
        </article>
@endsection