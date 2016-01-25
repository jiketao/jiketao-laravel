@extends('layouts.index')

@section('title', '极客淘@beta')

@section('content')
    <div class="topics-container row-wrap">
        <br>
        <ul class="topic-nav">
            <li class="nav-item">所有分类 <i class="fa fa-caret-right"></i></li>
            <li class="nav-item active">最新</li>
            <li class="nav-item">热门</li>
            <li class="nav-item">分类</li>
        </ul>
        <div class="topic-about topic">
            <h3 class="topic-title"><i class="fa fa-thumb-tack"></i> 极客淘宗旨</h3>
            <div class="topic-description">
                <p>
                    TO BE 中国最棒的极客产品信息中心, 您可以在这里
                </p>
                <ol>
                    <li> 搜索极客产品, 了解, 学习, 购买, 二手销售</li>
                    <li> 了解极客产品的最新动态, 购买渠道, 优惠信息</li>
                    <li> 分享交流极客产品使用,购买心得</li>
                </ol>
                {{--<img src="http://7xkn9n.com1.z0.glb.clouddn.com/image%2F55acdbb4b84b4.jpeg_d320.jpg" alt=""/>--}}
            </div>
        </div>
        @foreach ($topics as $topic)
            <div class="topic" id="Topic-{{$topic->id}}">
                <div class="topic-description">
                    <a href="/topics/{{$topic->id}}"> <img class="avatar" src="{{$topic->product->cover}}"/>  {{$topic->title}}</a>
                </div>
                <div class="topic-meta">
                    <span class="tag"><i class="fa fa-square text-info"></i> 测评 </span>
                    <span> 5 回复 </span>
                    <span> 352 浏览 </span>
                    <span> 6小时前更新 </span>
                </div>
            </div>
        @endforeach
        {!! $topics->render() !!}
    </div>
@endsection