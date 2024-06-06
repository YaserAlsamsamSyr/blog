@extends('layout')
@section('content')
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f0f4f8;
        color: #333;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 800px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }
    .post-title {
        font-size: 2rem;
        font-weight: 700;
        color: #2c3e50;
        margin: 1.5rem 0;
        text-align: center;
    }
    .post-excerpt {
        font-size: 1.1rem;
        color: #34495e;
        line-height: 1.6;
        margin: 1rem 0;
        text-align: justify;
        padding: 0 20px;
    }
    .img {
        display: block;
        max-width: 100%;
        height: auto;
        margin: 0 auto;
        border-radius: 8px;
    }
    .back-button {
        display: block;
        width: fit-content;
        margin: 20px auto;
        padding: 10px 20px;
        font-size: 1rem;
        color: #fff;
        background-color: #3498db;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        text-align: center;
    }
    .back-button:hover {
        background-color: #2980b9;
    }
</style>

<div class="container">
    @if ($post->image)
        <img class="img" src="{{ $post->image }}" alt="{{ $post->title }}">
    @endif
    <h2 class="post-title">{{ $post->title }}</h2>
    <p class="post-excerpt">
        {{ $post->content }}
    </p>
    <a href="{{ route('Post.index') }}" class="back-button">الرجوع إلى الصفحة الرئيسية</a>
</div>
@endsection
        