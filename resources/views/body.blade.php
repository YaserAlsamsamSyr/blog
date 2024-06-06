@extends('layout')
@section('content')
<!-- Your blog content here -->
<style>
    .swiper-container {
        width: 100%;
        height: 100%;
    }

    .swiper-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .main-content {
        margin-top: 5rem;
        padding: 2rem;
        background-color: #fff;
        border-radius: 0.5rem;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }

    .title {
        font-size: 2rem;
        font-weight: 600;
        color: #333;
        text-align: center;
        margin-bottom: 1rem;
    }

    .description {
        font-size: 1.125rem;
        color: #666;
        text-align: center;
        margin-bottom: 2rem;
    }

    .post-list {
        list-style-type: none;
        padding: 0;
    }

    .post {
        margin: 1rem auto; /* Center posts */
        padding: 1rem;
        border: 1px solid #ccc;
        border-radius: 0.5rem;
        background-color: #f9f9f9;
        max-width: 800px; /* Set a larger max-width */
        box-shadow: 0 10px 20px -10px rgba(0, 0, 0, 0.2);
    }

    .post img {
        max-width: 100%;
        border-radius: 0.5rem;
        box-shadow: 0 10px 20px -10px rgba(0, 0, 0, 0.2);
    }

    .post-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: #1a202c;
        margin-top: 1rem;
        text-align: center; /* Center the title */
    }

    .post-excerpt {
        font-size: 1rem;
        color: #4a5568;
        margin-top: 0.5rem;
        text-align: justify; /* Justify the text */
    }

    .button {
        display: block;
        width: 100%;
        text-align: center;
        background-color: #2a3051e3;
        color: white;
        font-size: 20px;
        border-radius: 5%;
        padding: 0.5rem 1rem; /* Adjust padding */
        padding-left: none;
        padding-right: 0px;
        padding-left: 0px;
        text-decoration: none; /* Remove underline */
        margin-top: 1rem; /* Add margin to separate from content */
    }

    body, html {
        margin: 0;
        padding: 0;
        height: 100%;
        width: 100%;
    }

    .cover-container {
        position: relative;
        width: 100%;
        height: 80vh;
        overflow: hidden;
    }

    .cover-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .cover-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        background-color: rgba(255, 255, 255, 0.8);
        padding: 15px;
        border-radius: 10px;
    }

    .cover-text p {
        margin: 0;
        font-size: 18px;
        font-weight: bold;
        color: #333;
    }

    @media (max-width: 600px) {
        .cover-text p {
            font-size: 16px;
        }

        .post {
            max-width: 100%; /* Ensure posts take full width on small screens */
            margin: 0.5rem; /* Adjust margin for small screens */
        }
    }
</style>

<div class="cover-container">
    <img class="cover-image" src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGJsb2d8ZW58MHx8MHx8fDA%3D" alt="Cover Image">
    <div class="cover-text">
        <p>Hello in my blog</p>
    </div>
</div>

<h1 class="title">مرحبًا بك في مدونة شرق لأوسط</h1>
<p class="description"><strong>.مكان لمشاركة الأفكار والأفكار والقصص</strong></p>

<div class="main-content">
    <ul class="post-list">
        @foreach($posts as $item)
        <li class="post">
           <center> <img src="{{$item['image']}}" alt="خطأ في تحميل الصورة "></center>
           <center><p><strong>Name of Auth:</strong> {{$item->user->name}}</p></center>
           <center><p><strong>Posted on:</strong> {{ $item->created_at->format('F j, Y') }}</p></center>
            <h2 class="post-title">{{$item['title']}}</h2>
            <p class="post-excerpt">{{$item['content']}}</p>
            <a href="{{route('Post.show', $item->id)}}" class="button">اقرأ المزيد</a>
        </li>
        @endforeach
    </ul>
</div>
@endsection
