@extends('layouts.index')

@section('title', '极客淘@beta')

@section('content')
	<div class="tag-header">
		<div class="row-wrap">
			<h1>#智能手机#</h1>
			<p>
				共 <i>122</i> 个产品
			</p>
		</div>
		<hr>
	</div>

	<div class="product-list row-wrap row-wrap-small">
		@foreach ([1, 2, 3, 4, 5, 6, 7] as $index)
		<div class="product row-fluid" >
			<div class="item-left col-sm-3" style="background-image: url(http://7xkn9n.com1.z0.glb.clouddn.com/image%2F55acdbb4b84b4.jpeg_d320.jpg);" >
			</div>
			<div class="item-right col-sm-9" >
				<p class="item-title" >
					<a href="/product/0" >SONY 索尼黑卡 RX 100 相机</a>
				</p>
				<p class="item-content" >
					<span >zczf azsxz yuseebgkqtuh</span>
					<span >...</span>
				</p>
				<div class="item-info" >
					<span class="item-publish-date inline" >
						<span> <i>2015-07-28</i></span>
						<span > 发布</span>
					</span>
					<span >| &nbsp;</span>
					<span class="item-publish-upvote inline" >
						<span >175885</span>
						<span > 人觉得很赞</span>
					</span>
                    <span >| &nbsp;</span>
                    <div class="item-topics inline">
                        <span> 130 个话题 </span>
                    </div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
@endsection