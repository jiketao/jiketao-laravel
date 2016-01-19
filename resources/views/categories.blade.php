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
            <div class="category-items">
                <table class="category-grid-table">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($subCategories as $index => $subCategory)
                        @if ($index % 5 === 0)
                            @if ($index > 0)
                            </tr>
                            @endif
                            <tr>
                        @endif
                        <td class="category-item">
                            <a href="/category">{{$subCategory}}</a>
                        </td>
                    @endforeach
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    @endforeach
</div>
@endsection