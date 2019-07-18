@extends('layouts.app')


@section('content')


    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">



             @foreach ($articles as $article)

                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            {{ $article->title }}
                        </h2>
                        <h3 class="post-subtitle">
                            {{ $article->body }}
                        </h3>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">Start Bootstrap</a>
                        on September 24, 2019</p>
                </div>
                <hr>

             @endforeach



                <hr>
                <!-- Pager -->
                <div class="clearfix">
                        {{ $articles->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection