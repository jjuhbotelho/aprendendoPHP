@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            @foreach($articles as $article)
                <div class="content">
                    <div class="title">
                        <h2>
                            <a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
                        </h2>
                    </div>

                    <p>
                        <img
                            src="images/banner.jpg"
                            alt=""
                            class="image image-full"
                        />
                    </p>

                    <p><a href="#">{{ $article->excerpt }}</a></p>
                </div>
            @endforeach
            {{ $articles->links() }}
        </div>
    </div>
@endsection
