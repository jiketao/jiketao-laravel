@extends('layouts.index')

@section('title', '极客淘@beta')

@section('content')
    <div class="topics-container row-wrap">
        <br>
        <ul class="topic-nav">
            <li class="nav-item">话题标签<i class="fa fa-caret-right"></i></li>
            <li class="nav-item active">最新</li>
            <li class="nav-item">热门</li>
            <li class="nav-item">产品</li>
            <li class="nav-item">分类</li>
        </ul>
        <div class="topic-about topic">
            <h3 class="topic-title"><i class="fa fa-thumb-tack"></i> 宗旨 </h3>
            <div class="topic-description">
                <p>
                   " 每个人都是生活的极客, 在这里做最极客的你!"
                </p>
                <ol>
                    <li> 找到最酷最极客的产品 </li>
                    <li> 获取产品最新咨询, 购买渠道, 优惠信息</li>
                    <li> 分享产品的使用经验, 教程 </li>
                </ol>
                {{--<img src="http://7xkn9n.com1.z0.glb.clouddn.com/image%2F55acdbb4b84b4.jpeg_d320.jpg" alt=""/>--}}
            </div>
        </div>
        @foreach ($topics as $topic)
            <div class="topic" id="Topic-{{$topic->id}}">
                <div class="topic-description">
                    <a href="/topics/{{$topic->id}}"> <img class="avatar" src="{{$topic->product->cover}}"/> {{$topic->title}}</a>
                </div>
                <div class="topic-meta">
                    <span class="tags">
                        @foreach ($topic->tags as $tag)
                            <span class="tag">
                                <i class="fa fa-square " style="color:{{$tag->color}}"></i>
                                {{$tag->name}}
                            </span>
                        @endforeach
                    </span>
                    <span> {{$topic->reply_count}} 回复 </span>
                    <span> {{$topic->page_view_count}} 浏览 </span>
                </div>
            </div>
        @endforeach
        {!! $topics->render() !!}
    </div>
@endsection