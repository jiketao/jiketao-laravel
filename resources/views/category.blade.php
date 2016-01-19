@extends('layouts.index')

@section('title', '极客淘@beta')

@section('content')   
	<div class="tag-header">
		<div class="row-wrap">
			<h1>#智能手机#</h1>
		</div>
		<hr>
	</div>

	<div class="product-list row-wrap">
		@foreach ([1, 2, 3, 4, 5, 6, 7] as $index)
		<div class="product" >
			<div class="item-right" >
				<img src="http://7xkn9n.com1.z0.glb.clouddn.com/image%2F55acdbb4b84b4.jpeg_d320.jpg" >
			</div>
			<div class="item-left" >
				<h3 class="item-title" >
					<a href="/product/0" >kwlvywue</a>
				</h3>
				<p class="item-content" >
					<span >zczf azsxz yuseebgkqtuh</span>
					<span >...</span>
				</p>
				<div class="item-info" >
					<span class="item-publish-date" >
						<span >2015-07-28</span>
						<span > 发布</span>
					</span>
					<span >| &nbsp;</span>
					<span class="item-publish-upvote" >
						<span >175885</span>
						<span > 人觉得很赞</span>
					</span>
				</div>
			</div>
		</div>
		@endforeach
	</div>
@endsection