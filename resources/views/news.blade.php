@extends('master')

@section('content')
    <div class="container">

        @foreach($articles as $key => $article)

            <div class="row g-0 mt-4 mb-4 bg-light position-relative article">
                <div class="col-md-4 mb-md-0 p-md-4">
                    @if(isset($article->urlToImage))
                        <img src="{{ $article->urlToImage }}" class="w-100" alt="news-photo">
                    @else
                        <img src="{{ asset('img/placeholderimage.jpg') }}" class="w-100" alt="news-photo">
                    @endif
                </div>
                <div class="col-md-8 p-4 ps-md-0">
                    <h4 class="mt-0"><a href="{{ route('news_details', ['category' => $category, 'id' => $key]) }}"
                                        class="stretched-link text-dark">{{ $article->title }}</a></h4>

                    {{--                    I didn't use {{  }} in the description has some links in it which would be escaped--}}
                    <p>{!! $article->description !!}</p>
                    <p>
                        <span class="news-category">{{ $category }}</span>
                        <span class="news-published-at">{{ substr($article->publishedAt, 0, 10) }}</span>
                    </p>
                </div>
            </div>

        @endforeach

    </div>
@endsection
