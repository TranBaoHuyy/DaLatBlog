@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!---category-->
            <div class="col-lg-3 col-6">
                <!-- Small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>6</h3>
                        <p>Category</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <a href="{{ route("categories.index") }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!---blog-->
            <div class="col-lg-3 col-6">
                <!-- Small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Blog</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <a href="{{ route("blogs.index") }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!---travelTrip-->
            <div class="col-lg-3 col-6">
                <!-- Small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Travel Tip</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <a href="{{ route("travelTrips.index") }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!---cuisine/ẩm thực-->
            <div class="col-lg-3 col-6">
                <!-- Small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Cuisine</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <a href="{{ route("cuisines.index") }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!---product-->
            <div class="col-lg-3 col-6">
                <!-- Small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Product</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <a href="{{ route("products.index") }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- Thêm các box khác tương tự -->
        </div>
    </div>
@endsection
