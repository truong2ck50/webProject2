@extends('layout')
@section('content')

<div class="features_items">
    <!--features_items-->
    <h2 class="title text-center">Sản phẩm mới nhất</h2>
    @foreach($all_product as $key => $product)
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">
            <div class="single-products">
                <div class="productinfo text-center">
                    <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" style="width: 250px; height: 200px;" alt="" />
                    <h2>{{number_format($product->product_price).' VNĐ'}}</h2>
                    <p>{{$product->product_name}}</p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
                </div>
                {{-- <div class="product-overlay">
                    <div class="overlay-content">
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                </div> --}}
            </div>
            </a>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>Thích</a></li>
                    <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach
</div>
<!--features_items--> 

@endsection