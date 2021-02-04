@extends('layouts.noheader')

@section('content')
    <div class="container">
        <div class="row justify-content-center mr-3">
            <div class="col-md-12">
                <div class="container mt-3 py-5 z-depth-1 white">


                    <!--Section: Content-->
                    <section class="text-center">

                        <!-- Section heading -->
                        <h3 class="font-weight-bold mb-5 pr-4">参加中のオークション名</h3>

                        <div class="row">
                            <div class="col-lg-9">

                                <div class="row w-100 ml-4 pl-5 mt-4">
                                    <!-- Grid column -->
                                    <div class="col-md-4 pt-5">

                                        <div class="w-100 mx-auto mb-4">
                                            <img src="{{ asset('storage/image/1.jpg') }}"
                                                class="z-depth-1 rounded-circle img-fluid" alt="smaple image">
                                        </div>
                                        <h6 class="font-weight-bold">ユーザー１</h6>
                                        <p class="mt-3 mb-4 pr-2 text-danger h5">￥2700</p>

                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-4 mb-4 pt-5">

                                        <div class="w-100 mx-auto mb-4">
                                            <img src="{{ asset('storage/image/2.jpg') }}"
                                                class="z-depth-1 rounded-circle img-fluid mx-auto" alt="smaple image">
                                        </div>
                                        <h6 class="font-weight-bold pl-2">ユーザー２</h6>
                                        <p class="mt-3 mb-4 pr-1 text-danger h5">￥2500</p>

                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-md-4 mb-4 pt-5">

                                        <div class="w-100 mx-auto mb-4">
                                            <img src="{{ asset('storage/image/3.jpg') }}"
                                                class="z-depth-1 rounded-circle img-fluid mx-auto" alt="smaple image">
                                        </div>
                                        <h6 class="font-weight-bold pl-2">ユーザー３</h6>
                                        <p class="mt-3 mb-4 text-danger h5">￥3000</p>

                                    </div>
                                    <!-- Grid column -->
                                </div>

                            </div>

                            <div class="col-lg-3 text-center text-md-left mt-2 pt-2">

                                <h2
                                    class="h2-responsive text-center product-name font-weight-bold dark-grey-text mb-1 pr-1 mt-4 h4">
                                    現在価格</h2>

                                <h3 class="h3-responsive text-center  mb-5 pr-2">
                                    <span class="red-text font-weight-bold">
                                        <strong>￥3000</strong>
                                    </span>
                                </h3>

                                <h2
                                    class="h2-responsive text-center product-name font-weight-bold dark-grey-text mb-1 pr-1 h4">
                                    残り時間</h2>

                                <h3 class="h3-responsive text-center  mb-5 pr-1">
                                    <span class="red-text font-weight-bold">
                                        <strong>4 : 20</strong>
                                    </span>
                                </h3>

                                <form action="">

                                    <div class="row ml-4">
                                        <div class="col-10">
                                            <label>入札金額</label>
                                            <input id="number" type="number" class="form-control w-100" name="price"
                                                value="{{ old('price') }}" placeholder="￥0" min="300" max="9999999"
                                                required>

                                            <label class="mt-3">技選択</label>
                                            <div>
                                                <select class="form-control" name="">
                                                    <option value="">選択してください</option>
                                                    <option value="1">技１</option>
                                                    <option value="2">技２</option>
                                                    <option value="3">技３</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="pl-5 ml-3 mt-5">
                                        <button type="submit" class="btn btn-lg danger-color-dark text-white">
                                            入札
                                        </button>
                                    </div>

                                </form>
                            </div>


                        </div>
                </div>

                </section>
                <!--Section: Content-->


            </div>
        </div>
    </div>
    </div>

@endsection
