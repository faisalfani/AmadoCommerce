@extends('layouts.front')

@section('content')
	

        <!-- Mobile Nav (max width 767px)-->
        

        <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
            <div class="amado-pro-catagory clearfix">

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="/shop">
                        <img src="{{asset('amado/img/bg-img/1.jpg')}}" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $180</p>
                            <h4>Modern Chair</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="/shop">
                        <img src="{{asset('amado/img/bg-img/2.jpg')}}" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $180</p>
                            <h4>Minimalistic Table</h4>
                        </div>
                    </a>
                </div>

                <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="/shop">
                        <img src="{{asset('amado/img/bg-img/3.jpg')}}" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From $180</p>
                            <h4>Modern Bed</h4>
                        </div>
                    </a>
                </div>

            </div>
        </div>
        <!-- Product Catagories Area End -->
    
@endsection