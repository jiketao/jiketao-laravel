@extends('layouts.index')

@section('title', '极客淘@beta')

@section('content')    
    <!-- BRAND-RECOMMEND-SECTION -->
    <div class="brand-recommend">
    
    </div>
    
    <!-- CATEGORYS-SECTION -->
    <div class="product-categories row-wrap">
        @foreach ($categories as $categoryName => $subCategories)
            <div class="category">
                <div class="category-nav">
                    <ul>
                        <li class="category-nav-item">
                            <a href="">{{$categoryName}}</a>
                        </li>
                    </ul>
                </div>
                {{-- <div class="category-recommend">
                    <ul>
                        <li>
                            推荐1： Mac Pro 
                        </li>
                        <li>
                            推荐2：Dell 
                        </li>
                    </ul>
                </div> --}}
                <div class="category-items">
                    <ul>
                        @foreach ($subCategories as $subCategory)
                            <li class="category-item">
                                <a href="/category">{{$subCategory}}</a> 
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
@endsection