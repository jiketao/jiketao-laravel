@extends('layouts.index')

@section('title', '极客淘@beta')

@section('content')   
	<div class="product-header well">
		<div class="row-wrap">
			<h1 class="text-center">SONY 索尼黑卡 RX 100 相机</h1>
		</div>
		<ul class="product-nav-box">
			<li class="nav-item active">信息</li>
            <li class="nav-item">参数</li>
            <li class="nav-item">二手</li>
            <li class="nav-item">测评</li>
            <li class="nav-item">渠道</li>
		</ul>
	</div>

    <div class="product-main-container">
        <ul class="topic-nav">
            <li class="nav-item">所有分类 <i class="fa fa-caret-right"></i></li>
            <li class="nav-item active">最新</li>
            <li class="nav-item">热门</li>
            <li class="nav-item">分类</li>
        </ul>
        <div class="topic-about topic">
            <h3 class="topic-title"><i class="fa fa-thumb-tack"></i> 产品详情</h3>
            <div class="topic-description">
                <p>
                    第四代黑卡外观仍然沿用了RX100 III的设计，并配备了同样等效焦距为24-70mm的镜头，最为明显的改进是采用了1英寸堆栈式CMOS影像传感器，具备2010万像素。说起来这种堆栈式影像传感器通常是在手机摄像头上使用，而此次索尼将其首次搭载在相机上，主要是看中其感光区域和电路采用分离式设计，使得单个像素的感光能力得到提升，因此易于获得更优的画质。同时RX100 IV还新增了DRAM高速内存，配合影像处理器可使最高连拍速度达到16FPS，更有利于捕捉瞬间画面。此外RX100IV还将EVF提升到了235万像素，最高快门速度可达1/32000秒，并支持以XVAV S编码的4K视频，以及最高960FPS的慢速视频（NTSC模式下，分辨率为1080P）。
                </p>
                <a href="">显示全文</a>
                {{--<img src="http://7xkn9n.com1.z0.glb.clouddn.com/image%2F55acdbb4b84b4.jpeg_d320.jpg" alt=""/>--}}
            </div>
        </div>
        @foreach ([1, 2, 3, 4, 5, 6] as $index)
        <div class="topic">
            <div class="topic-description">
                <a href=""> 为了让他叫知道 购买 RX 100 的有多少坑, 我来摆一摆今天我的经验, 首先.... </a>
            </div>
            <div class="topic-meta">
                <span class="tag"><i class="fa fa-square text-info"></i> 测评</span>
                <span> 5 回复 </span>
                <span> 352 浏览 </span>
                <span> 6小时前更新 </span>
            </div>
        </div>
        @endforeach
    </div>
@endsection