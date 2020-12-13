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
                font-size:1.2em; padding:36px 0px 0px 0px;">発送元・お届け先</h1>
                <hr>

        <div class="container pb-5">
            <div class="row justify-content-center ml-2">
                <div class="col-md-8">
                    <form action="/profile/send" method="post" enctype="multipart/form-data">
                        @csrf

                        {{-- ユーザー情報 --}}
                        {{-- <input type="hidden" name="user_id" value="{{ $user_id->id }}"> --}}

                        <div class="card shadow-none border-0 pb-4">
                            <div class="card-body pt-3">

                                {{-- 商品名 --}}
                                <label class="font-weight-bold">お名前<span class="badge badge-danger shadow-none ml-2">必須</span></label>
                                <input type="text" class="form-control" name="firstname" placeholder="例）山田" value="" required>
                                    <div class="pt-2">
                                        <span class="help-block h6 text-danger">{{$errors->first('name')}}</span>
                                    </div>
                                <input type="text" class="form-control" name="lastname" placeholder="例）太郎" value="{{ old('lastname') }}" required>
                            </div>

                            <div class="card-body pt-3">

                                {{-- 商品名 --}}
                                <label class="font-weight-bold">お名前カナ<span class="badge badge-danger shadow-none ml-2">必須</span></label>
                                <input type="text" class="form-control" name="firstname_kana" placeholder="例）ヤマダ" value="" required>
                                    <div class="pt-2">
                                        <span class="help-block h6 text-danger">{{$errors->first('name')}}</span>
                                    </div>
                                <input type="text" class="form-control" name="lastname_kana" placeholder="例）タロウ" value="" required>
                            </div>

                            <div class="card-body pt-3">

                                {{-- 商品名 --}}
                                <label class="font-weight-bold">郵便番号<span class="badge badge-danger shadow-none ml-2">必須</span></label>
                                <input type="text" class="form-control" name="postal_code" placeholder="例）123-4567" value="" required>
                                    <div class="pt-2">
                                        <span class="help-block h6 text-danger">{{$errors->first('name')}}</span>
                                    </div>
                            </div>

                            <div class="card-body pt-3">

                                {{-- 送料負担セレクト --}}
                                <label class="font-weight-bold">都道府県<span class="badge badge-danger shadow-none ml-2">必須</span></label>
                                <div>
                                    <select class="form-control" name="area_id">
                                        <option value="">選択してください</option>
                                        <option value="1"> 北海道</option>
                                        <option value="2"> 青森県</option>
                                        <option value="3"> 岩手県</option>
                                        <option value="4"> 宮城県</option>
                                        <option value="5"> 秋田県</option>
                                        <option value="6"> 山形県</option>
                                        <option value="7"> 福島県</option>
                                        <option value="8"> 茨城県</option>
                                        <option value="9"> 栃木県</option>
                                        <option value="10" >群馬県</option>
                                        <option value="11" >埼玉県</option>
                                        <option value="12" >千葉県</option>
                                        <option value="13" >東京都</option>
                                        <option value="14" >神奈川県</option>
                                        <option value="15" >新潟県</option>
                                        <option value="16" >富山県</option>
                                        <option value="17" >石川県</option>
                                        <option value="18" >福井県</option>
                                        <option value="19" >山梨県</option>
                                        <option value="20" >長野県</option>
                                        <option value="21" >岐阜県</option>
                                        <option value="22" >静岡県</option>
                                        <option value="23" >愛知県</option>
                                        <option value="24" >三重県</option>
                                        <option value="25" >滋賀県</option>
                                        <option value="26" >京都府</option>
                                        <option value="27" >大阪府</option>
                                        <option value="28" >兵庫県</option>
                                        <option value="29" >奈良県</option>
                                        <option value="30" >和歌山県</option>
                                        <option value="31" >鳥取県</option>
                                        <option value="32" >島根県</option>
                                        <option value="33" >岡山県</option>
                                        <option value="34" >広島県</option>
                                        <option value="35" >山口県</option>
                                        <option value="36" >徳島県</option>
                                        <option value="37" >香川県</option>
                                        <option value="38" >愛媛県</option>
                                        <option value="39" >高知県</option>
                                        <option value="40" >福岡県</option>
                                        <option value="41" >佐賀県</option>
                                        <option value="42" >長崎県</option>
                                        <option value="43" >熊本県</option>
                                        <option value="44" >大分県</option>
                                        <option value="45" >宮崎県</option>
                                        <option value="46" >鹿児島県</option>
                                        <option value="47" >沖縄県</option>
                                    </select>
                                    <div class="pt-2">
                                        <span class="help-block h6 text-danger">{{$errors->first('paystatus_id')}}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body pt-3">

                                {{-- 商品名 --}}
                                <label class="font-weight-bold">市町村<span class="badge badge-danger shadow-none ml-2">必須</span></label>
                                <input type="text" class="form-control" name="city" placeholder="例）新宿区" value="" required>
                                    <div class="pt-2">
                                        <span class="help-block h6 text-danger">{{$errors->first('name')}}</span>
                                    </div>
                            </div>

                            <div class="card-body pt-3">

                                {{-- 商品名 --}}
                                <label class="font-weight-bold">番地<span class="badge badge-danger shadow-none ml-2">必須</span></label>
                                <input type="text" class="form-control" name="city_address" placeholder="例）新宿1-7-3" value="" required>
                                    <div class="pt-2">
                                        <span class="help-block h6 text-danger">{{$errors->first('name')}}</span>
                                    </div>
                            </div>

                            <div class="pl-4 ml-3 mt-5">
                                <button type="submit" class="btn danger-color-dark text-white col-6 offset-2">
                                    変更する
                                </button>
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
