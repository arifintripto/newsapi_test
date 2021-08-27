@extends('master')

@section('content')
    <div class="container">
        <div class="news">
            <div class="row mt-5">
                @if(isset($article->urlToImage))
                    <img src="{{ $article->urlToImage }}" class="w-100" alt="news-photo">
                @else
                    <img src="{{ asset('img/placeholderimage.jpg') }}" class="w-100" alt="news-photo">
                @endif
            </div>
            <div class="row mb-5">
                <h1 class="display-3">{{ $article->title }}</h1>
                <p>
                    <span class="news-category">{{ $category }}</span>
                    <span class="news-author">{{ $article->author }}</span>
                    <span class="news-published-at">{{ substr($article->publishedAt, 0, 10) }}</span>
                </p>
                <p class="mt-3">{{ $article->content }}</p>
            </div>
        </div>
    </div>
@endsection
