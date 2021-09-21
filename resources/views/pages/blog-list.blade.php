@extends('layout')

@section('pageTitle')
    Blog Pizza Mircea
@endsection

@section ('linkBlog')
    active
@endsection

@section('content')
    <section class="blog">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li>Blog</li>
            </ul>
        </div>

        <div class="separator">
            <div class="line"></div>
            <h2>Blog</h2>
            <div class="line"></div>
        </div>
        <div class="container">

            <nav class="blog_nav">
                <form class="blog_filter-form" action="#">
                    <label for="list-filter">Filtering by:</label>
                    <select id="list-filter" name="filter_list">
                        <option value="Ascendent">Data Ascendent</option>
                        <option value="Descendent">Data Descendent</option>
                    </select>
                    <input class="blog_filter-form_button" type="submit">
                </form>
            </nav>

            <div class="blog_list">

            @foreach($articles as $article)

            <div class="blog_item">
                <a href="{{ route('article.show', ['articleId'=>$article->id]) }}" class="blog_item-title">
                    {{ $article->title }}
                </a>
                <p class="blog_item-category">Category: <span>{{$article->category->name}}</span></p>
                <p class="blog_item-data">Data: <span>{{$article->created_at}}</span></p>
                <p class="blog_item-description">{{$article->description}}</p>
            </div>

            @endforeach

            </div>
            {{ $articles->links('vendor.pagination.tailwind') }}
        </div>
    </section>
@endsection