@extends('layouts.index')

@section('title', '极客淘@beta')

@section('content')
	<div class="tag-header">
		<div class="row-wrap">
			<h1>#{{$category->name}}#</h1>
			<p>
				共 <i>{{$products->count()}}</i> 个产品
			</p>
		</div>
		<hr>
	</div>

	<div class="product-list row-wrap row-wrap-small">
		@foreach ($products as $product)
		<div class="product row-fluid" >
			<div class="item-left col-sm-3" style="background-image: url({{$product->cover}});" >
			</div>
			<div class="item-right col-sm-9" >
				<p class="item-title" >
					<a href="/products/{{$product->id}}" >{{$product->name}}</a>
				</p>
				<p class="item-content" >
					<span >{{$product->description}}</span>
					<span >...</span>
				</p>
				<div class="item-info" >
					<span class="item-publish-date inline" >
						<span> <i>{{$product->created_at}}</i></span>
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