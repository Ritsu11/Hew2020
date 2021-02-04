@extends('layouts.app')

@section('content')
    <div class="container mt-3">

        <div class="row ml-3 pl-3">
            @component('components.list')
            @endcomponent
            <!-- Section: Block Content -->
            <div class="col-8 z-depth-1 ml-4 white">
                <section>
                    <h1 class="text-center font-weight-bold" style="color:#555555;
                    font-size:1.2em; padding:25px 0px 5px 0px;">プロフィール</h1>
                    <hr>

                    <div class="container pb-5">
                        <div class="row justify-content-center ml-2">
                            <div class="col-md-8">
                                <form action="/profile" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="card shadow-none border-0 pb-4">
                                        <div class="card-body pt-3">

                                            {{-- 名前 --}}
                                            <label class="font-weight-bold">ニックネーム<span
                                                    class="badge badge-danger shadow-none ml-2">必須</span></label>
                                            <input type="text" class="form-control" name="name" placeholder="例）HAL太郎"
                                                value="{{ $user->name }}" required>
                                            <div class="pt-2">
                                                <span class="help-block h6 text-danger">{{ $errors->first('name') }}</span>
                                            </div>

                                            <div class="pl-4 ml-4 mt-3">
                                                <button type="submit"
                                                    class="btn danger-color-dark text-white col-6 offset-2">
                                                    変更する
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Shopping Cart table -->
                    <div class="table-responsive">
                    </div>
                    <!-- Shopping Cart table -->
                </section>
                <!-- Section: Block Content -->
            </div>
        </div>

    </div>
@endsection
