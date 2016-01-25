@extends('layouts.index')

@section('title', '极客淘@beta')

@section('content')
   @include('products.snippets.header')

    <div class="product-main-container">
        <div class="topic-content">
            <h2 class="topic-title"> 
                <span class="avatar avatar-radius"> <img src="http://semantic-ui.com/images/avatar/small/elliot.jpg" alt=""></span>
                {{$topic->title}}
            </h2>
            <article>
                {{$topic->content}}
            </article>

            <section  class="post-menu-area clearfix">
                @include('topics.topic-control')
            </section>

            @include('topics.topic-map')
        </div>

        <div class="topic-replys">
            @foreach($topic->replies as $reply)
                @include('topics.topic-reply')
            @endforeach
        </div>
    </div>
@endsection