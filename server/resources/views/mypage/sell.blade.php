@extends('layouts.noheader')

@section('content')
<div class="container pb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="/sell" method="post" enctype="multipart/form-data">
                @csrf

                {{-- ユーザー情報 --}}
                <input type="hidden" name="user_id" value="{{ $user->id }}">

                <div class="card shadow-none border-0 pb-4">
                    <div class="card-body pt-4">
                            <label class="font-weight-bold">出品画像<span class="badge badge-danger shadow-none ml-2">必須</span></label>
                        <p>最大5枚までアップロードできます</p>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">アップロード</span>
                            </div>
                            <div class="custom-file">

                                {{-- 画像のアップロード --}}
                              <input type="file" class="custom-file-input" name="imgpath" value="{{ old('imgpath') }}" required>
                              <label class="custom-file-label">ファイルの選択</label>
                            </div>
                        </div>
                        <div class="pt-2">
                            <span class="help-block h6 text-danger">{{$errors->first('imgpath')}}</span>
                        </div>
                    </div>
                    <hr class="mb-3 mt-4">
                    <div class="card-body pt-3">

                        {{-- 商品名 --}}
                        <label class="font-weight-bold">商品名<span class="badge badge-danger shadow-none ml-2">必須</span></label>
                        <input type="text" class="form-control" name="name" placeholder="30文字まで" value="{{ old('name') }}" required>
                            <div class="pt-2">
                                <span class="help-block h6 text-danger">{{$errors->first('name')}}</span>
                            </div>
                    </div>
                    <div class="card-body">

                        {{-- 商品説明 --}}
                        <label class="font-weight-bold">商品の説明<span class="badge badge-danger shadow-none ml-2">必須</span></label>
                        <textarea class="form-control" name="detail" rows="5" required>{{ old('detail') }}</textarea>
                            <div class="pt-2">
                                <span class="help-block h6 text-danger">{{$errors->first('detail')}}</span>
                            </div>
                    </div>
                    <hr class="mb-3 mt-4">
                    <div class="card-body pt-3">
                        <p class="text-black-50 font-weight-bold mb-4 pb-2">商品の詳細</p>

                        {{-- カテゴリーセレクト --}}
                        <label class="font-weight-bold">カテゴリー<span class="badge badge-danger shadow-none ml-2">必須</span></label>
                        <div>
                            <select class="form-control" name="category_id">
                                <option value="">選択してください</option>
                                <option value="1" @if ( old('category_id') == "1" ) selected @endif>コンピュータ</option>
                                <option value="2" @if ( old('category_id') == "2" ) selected @endif>家電、AV、カメラ</option>
                                <option value="3" @if ( old('category_id') == "3" ) selected @endif>本、雑誌</option>
                                <option value="4" @if ( old('category_id') == "4" ) selected @endif>映画、ビデオ</option>
                                <option value="5" @if ( old('category_id') == "5" ) selected @endif>おもちゃ、ゲーム</option>
                                <option value="6" @if ( old('category_id') == "6" ) selected @endif>アンティーク、コレクション</option>
                                <option value="7" @if ( old('category_id') == "7" ) selected @endif>スポーツ、レジャー</option>
                                <option value="8" @if ( old('category_id') == "8" ) selected @endif>自動車、オートバイ</option>
                                <option value="9" @if ( old('category_id') == "9" ) selected @endif>ファッション</option>
                                <option value="10" @if ( old('category_id') == "10" ) selected @endif>アクセサリー、時計</option>
                                <option value="11" @if ( old('category_id') == "11" ) selected @endif>食品、飲料</option>
                                <option value="12" @if ( old('category_id') == "12" ) selected @endif>住まい、インテリア</option>
                                <option value="13" @if ( old('category_id') == "13" ) selected @endif>事務、店舗用品</option>
                                <option value="14" @if ( old('category_id') == "14" ) selected @endif>その他</option>
                            </select>
                            <div class="pt-2">
                                <span class="help-block h6 text-danger">{{$errors->first('category_id')}}</span>
                            </div>
                        </div>

                        {{-- 商品状態セレクト --}}
                        <label class="font-weight-bold mt-4 pt-4">商品の状態<span class="badge badge-danger shadow-none ml-2">必須</span></label>
                        <div>
                            <select class="form-control" name="status_id">
                                <option value="">選択してください</option>
                                <option value="1" @if ( old('status_id') == "1" ) selected @endif>新品、未使用</option>
                                <option value="2" @if ( old('status_id') == "2" ) selected @endif>未使用に近い</option>
                                <option value="3" @if ( old('status_id') == "3" ) selected @endif>目立った傷や汚れなし</option>
                                <option value="4" @if ( old('status_id') == "4" ) selected @endif>やや傷や汚れあり</option>
                                <option value="5" @if ( old('status_id') == "5" ) selected @endif>傷や汚れあり</option>
                                <option value="6" @if ( old('status_id') == "6" ) selected @endif>全体的に状態が悪い</option>
                            </select>
                            <div class="pt-2">
                                <span class="help-block h6 text-danger">{{$errors->first('status_id')}}</span>
                            </div>
                        </div>
                    </div>
                    <hr class="mb-3 mt-4">
                    <div class="card-body pt-3">
                        <p class="text-black-50 font-weight-bold mb-4 pb-2">配送について</p>

                        {{-- 送料負担セレクト --}}
                        <label class="font-weight-bold">配送料の負担<span class="badge badge-danger shadow-none ml-2">必須</span></label>
                        <div>
                            <select class="form-control" name="paystatus_id">
                                <option value="">選択してください</option>
                                <option value="1" @if ( old('paystatus_id') == "1" ) selected @endif>送料込み（出品者負担）</option>
                                <option value="2" @if ( old('paystatus_id') == "2" ) selected @endif>着払い（購入者負担）</option>
                            </select>
                            <div class="pt-2">
                                <span class="help-block h6 text-danger">{{$errors->first('paystatus_id')}}</span>
                            </div>
                        </div>

                        {{-- 発送地域セレクト --}}
                        <label class="font-weight-bold mt-4 pt-4">発送元の地域<span class="badge badge-danger shadow-none ml-2">必須</span></label>
                        <div>
                            <select class="form-control" name="area_id">
                                <option value="">選択してください</option>
                                <option @if ( old('area_id') == "1" ) selected @endif value="1"> 北海道</option>
                                <option @if ( old('area_id') == "2" ) selected @endif value="2"> 青森県</option>
                                <option @if ( old('area_id') == "3" ) selected @endif value="3"> 岩手県</option>
                                <option @if ( old('area_id') == "4" ) selected @endif value="4"> 宮城県</option>
                                <option @if ( old('area_id') == "5" ) selected @endif value="5"> 秋田県</option>
                                <option @if ( old('area_id') == "6" ) selected @endif value="6"> 山形県</option>
                                <option @if ( old('area_id') == "7" ) selected @endif value="7"> 福島県</option>
                                <option @if ( old('area_id') == "8" ) selected @endif value="8"> 茨城県</option>
                                <option @if ( old('area_id') == "9" ) selected @endif value="9"> 栃木県</option>
                                <option @if ( old('area_id') == "10" ) selected @endif value="10" >群馬県</option>
                                <option @if ( old('area_id') == "11" ) selected @endif value="11" >埼玉県</option>
                                <option @if ( old('area_id') == "12" ) selected @endif value="12" >千葉県</option>
                                <option @if ( old('area_id') == "13" ) selected @endif value="13" >東京都</option>
                                <option @if ( old('area_id') == "14" ) selected @endif value="14" >神奈川県</option>
                                <option @if ( old('area_id') == "15" ) selected @endif value="15" >新潟県</option>
                                <option @if ( old('area_id') == "16" ) selected @endif value="16" >富山県</option>
                                <option @if ( old('area_id') == "17" ) selected @endif value="17" >石川県</option>
                                <option @if ( old('area_id') == "18" ) selected @endif value="18" >福井県</option>
                                <option @if ( old('area_id') == "19" ) selected @endif value="19" >山梨県</option>
                                <option @if ( old('area_id') == "20" ) selected @endif value="20" >長野県</option>
                                <option @if ( old('area_id') == "21" ) selected @endif value="21" >岐阜県</option>
                                <option @if ( old('area_id') == "22" ) selected @endif value="22" >静岡県</option>
                                <option @if ( old('area_id') == "23" ) selected @endif value="23" >愛知県</option>
                                <option @if ( old('area_id') == "24" ) selected @endif value="24" >三重県</option>
                                <option @if ( old('area_id') == "25" ) selected @endif value="25" >滋賀県</option>
                                <option @if ( old('area_id') == "26" ) selected @endif value="26" >京都府</option>
                                <option @if ( old('area_id') == "27" ) selected @endif value="27" >大阪府</option>
                                <option @if ( old('area_id') == "28" ) selected @endif value="28" >兵庫県</option>
                                <option @if ( old('area_id') == "29" ) selected @endif value="29" >奈良県</option>
                                <option @if ( old('area_id') == "30" ) selected @endif value="30" >和歌山県</option>
                                <option @if ( old('area_id') == "31" ) selected @endif value="31" >鳥取県</option>
                                <option @if ( old('area_id') == "32" ) selected @endif value="32" >島根県</option>
                                <option @if ( old('area_id') == "33" ) selected @endif value="33" >岡山県</option>
                                <option @if ( old('area_id') == "34" ) selected @endif value="34" >広島県</option>
                                <option @if ( old('area_id') == "35" ) selected @endif value="35" >山口県</option>
                                <option @if ( old('area_id') == "36" ) selected @endif value="36" >徳島県</option>
                                <option @if ( old('area_id') == "37" ) selected @endif value="37" >香川県</option>
                                <option @if ( old('area_id') == "38" ) selected @endif value="38" >愛媛県</option>
                                <option @if ( old('area_id') == "39" ) selected @endif value="39" >高知県</option>
                                <option @if ( old('area_id') == "40" ) selected @endif value="40" >福岡県</option>
                                <option @if ( old('area_id') == "41" ) selected @endif value="41" >佐賀県</option>
                                <option @if ( old('area_id') == "42" ) selected @endif value="42" >長崎県</option>
                                <option @if ( old('area_id') == "43" ) selected @endif value="43" >熊本県</option>
                                <option @if ( old('area_id') == "44" ) selected @endif value="44" >大分県</option>
                                <option @if ( old('area_id') == "45" ) selected @endif value="45" >宮崎県</option>
                                <option @if ( old('area_id') == "46" ) selected @endif value="46" >鹿児島県</option>
                                <option @if ( old('area_id') == "47" ) selected @endif value="47" >沖縄県</option>
                            </select>
                            <div class="pt-2">
                                <span class="help-block h6 text-danger">{{$errors->first('area_id')}}</span>
                            </div>
                        </div>

                        {{-- 発送日数セレクト --}}
                        <label class="font-weight-bold mt-4 pt-4">発送までの日数<span class="badge badge-danger shadow-none ml-2">必須</span></label>
                        <div>
                            <select class="form-control" name="day_id">
                                <option value="">選択してください</option>
                                <option value="1" @if ( old('day_id') == "1" ) selected @endif>１〜２日で発送</option>
                                <option value="2" @if ( old('day_id') == "2" ) selected @endif>２〜３日で発送</option>
                                <option value="3" @if ( old('day_id') == "3" ) selected @endif>４〜７日で発送</option>
                            </select>
                            <div class="pt-2">
                                <span class="help-block h6 text-danger h6">{{$errors->first('day_id')}}</span>
                            </div>
                        </div>
                    </div>
                    <hr class="mb-3 mt-4">
                    <div class="card-body pt-3">
                        <p class="text-black-50 font-weight-bold mb-4 pb-2">価格</p>
                    </div>
                    <div class="form-group row">

                        {{-- 開始価格 --}}
                        <label for="value" class="col-md-6 col-form-label text-md-left-3 ml-4 font-weight-bold">開始価格<span class="badge badge-danger shadow-none ml-2">必須</span></label>
                        <p class="col-1 pt-2 ml-3 pl-5">￥</p>
                        <div class="col-md-4">
                            <input id="number" type="number" class="form-control" name="price" value="{{ old('price') }}" placeholder="0" min="300" max="9999999" required>
                            <div class="pt-2">
                                <span class="help-block h6 text-danger">{{$errors->first('price')}}</span>
                            </div>
                        </div>
                    </div>
                    <hr class="mb-3 mt-4">
                    <div class="card-body pt-3">
                        <p class="text-black-50 font-weight-bold mb-4 pb-2">時間</p>

                        {{-- 締め切り時間セレクト --}}
                        <label class="font-weight-bold pt-2 pb-1">締切時間</label>
                        {{-- <select class="form-control" name="time">
                            <option selected>選択してください</option>
                            <option value="1">1時間後</option>
                            <option value="3">3時間後</option>
                            <option value="6">6時間後</option>
                            <option value="1">12時間後</option>
                            <option value="24">24時間後</option>
                        </select> --}}
                    </div>
                    <div class="pl-5 ml-2 mt-5">
                        <button type="submit" class="btn btn-lg danger-color-dark text-white col-4 offset-3">
                            出品する
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
