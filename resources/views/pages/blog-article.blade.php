@extends('layout')

@section('pageTitle')
    {{ $article->title }}
@endsection

@section ('linkBlog')
    active
@endsection

@section('content')
    <section class="article">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="/blog">Blog</a></li>
                <li>{{ $article->title }}</li>
            </ul>
        </div>

        <div class="separator">
            <div class="line"></div>
            <h2>{{ $article->title }}</h2>
            <div class="line"></div>
        </div>
        <div class="container">
            <div class="article_item">
                <p class="article_category">Category: <span>{{ $article->category->name }}</span></p>
                <p class="article_data">Data: <span>{{ $article->created_at }}</span></p>
                
                <div class="article_text">
                    <img src="{{ $article->image_url }}" alt="{{ $article->title }}">
                    {{ $article->body }}
                </div>

                <p class="article_author">Author: <span>{{ $article->author->first_name.' '.$article->author->last_name }}</span></p>
            </div>
            <a class="back" href="/blog">Back</a>
        </div>

    </section>
@endsection