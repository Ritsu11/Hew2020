@extends('layouts.shopapp')

@section('contents')
    <div class="container mt-3">
        <div class="row ml-1">
            <div class="container mb-5 py-5 z-depth-1 white">


                <!--Section: Content-->
                <section class="text-center">

                    <!-- Section heading -->

                    <div class="row">
                        <div class="col-lg-7">

                            <!--Carousel Wrapper-->
                            <div id="carousel-thumb1" class="carousel slide carousel-fade carousel-thumbnails mb-5 pb-4"
                                data-ride="carousel">

                                <!--Slides-->
                                <div class="carousel-inner text-center text-md-left" role="listbox">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('storage/' . $detail->imgpath) }}" alt="First slide"
                                            class="img-fluid" width="530" height="350">
                                    </div>
                                    {{-- <div class="carousel-item">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg"
                                            alt="Second slide" class="img-fluid">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/20.jpg"
                                            alt="Third slide" class="img-fluid">
                                    </div> --}}
                                </div>
                                <!--/.Slides-->

                                <!--Thumbnails-->
                                <a class="carousel-control-prev" href="#carousel-thumb1" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-thumb1" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <!--/.Thumbnails-->

                            </div>
                            <!--/.Carousel Wrapper-->

                            {{-- <div class="row mb-4">
                                <div class="col-md-12">
                                    <div class="mdb-lightbox no-margin">
                                        <figure class="col-md-4">
                                            <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg"
                                                data-size="1600x1067">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg"
                                                    class="img-fluid">
                                            </a>
                                        </figure>
                                        <figure class="col-md-4">
                                            <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg"
                                                data-size="1600x1067">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg"
                                                    class="img-fluid">
                                            </a>
                                        </figure>
                                        <figure class="col-md-4">
                                            <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/20.jpg"
                                                data-size="1600x1067">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/20.jpg"
                                                    class="img-fluid">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                            </div> --}}

                        </div>

                        <div class="col-lg-4 text-center text-md-left">

                            <h2
                                class="text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
                                {{ $detail->name }}</h2>


                            <h3 class="h3-responsive text-center text-md-left ml-xl-0 ml-4 mt-3 mb-2 pb-2">
                                <span class="font-weight-bold dark-grey-text font-small">現在価格: </span>
                                <span class="red-text font-weight-bold">
                                    <strong>{{ $detail->price }}</strong>円
                                </span>
                                <div class="font-weight-bold dark-grey-text font-small mt-1">
                                    送料: {{ $paystatus->name }}
                                </div>
                            </h3>

                            <div class="font-weight-bold dark-grey-text font-small">
                                <p class="ml-xl-0 ml-4">
                                    参加人数: ###
                                </p>
                                <p class="ml-xl-0 ml-4">
                                    残りの時間: ###
                                </p>
                                <p class="ml-xl-0 ml-4">
                                    出品者: <a href="#">{{ $user->name }}</a>
                                </p>

                                <div class="mt-5">
                                    <div class="row mt-3">
                                        <div class="form-group row">

                                            {{-- 開始価格 --}}
                                            <label for="value"
                                                class="col-md-3 col-form-label text-md-left-3 ml-3 font-weight-bold">入札</label>
                                            <p class="col-1 pt-2">￥</p>
                                            <div class="col-md-6">
                                                <input id="number" type="number" class="form-control" name="price"
                                                    value="{{ old('price') }}" placeholder="0" min="300" max="9999999" required>
                                                <div class="pt-2">
                                                    <span class="help-block h6 text-danger">{{ $errors->first('price') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center text-md-left text-md-right">
                                            <button class="btn btn-primary btn-rounded">
                                                <i class="fas fa-cart-plus mr-2" aria-hidden="true"></i> Add to
                                                cart</button>
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>

                        </div>
                    </div>

                </section>
                <!--Section: Content-->


            </div>

        </div>
    </div>

@endsection
