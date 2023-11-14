@extends('components/layout')

@section('content')
    <article>
        <h1>
            <a href="/posts/<?= $post->slug ?>">
                {{ $post->title }}
            </a>
        </h1>
        <p>{!! $post->body !!}</p>
    </article>

    <a href="/">Go Back</a>
@endsection
