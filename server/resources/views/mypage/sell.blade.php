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
                        <label class="font-weight-bold">出品画像</label>
                        <p>最大5枚までアップロードできます</p>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">アップロード</span>
                            </div>
                            <div class="custom-file">

                                {{-- 画像のアップロード --}}
                              <input type="file" class="custom-file-input" name="imgpath">
                              <label class="custom-file-label">ファイルの選択</label>

                            </div>
                        </div>
                    </div>
                    <hr class="mb-3 mt-4">
                    <div class="card-body pt-3">

                        {{-- 商品名 --}}
                        <label class="font-weight-bold">商品名</label>
                        <input type="text" class="form-control" name="name" placeholder="30文字まで">
                    </div>
                    <div class="card-body">

                        {{-- 商品説明 --}}
                        <label class="font-weight-bold">商品の説明</label>
                        <textarea class="form-control" name="detail" rows="5"></textarea>
                    </div>
                    <hr class="mb-3 mt-4">
                    <div class="card-body pt-3">
                        <p class="text-black-50 font-weight-bold mb-4 pb-2">商品の詳細</p>

                        {{-- カテゴリーセレクト --}}
                        <label class="font-weight-bold">カテゴリー</label>
                        <select class="form-control" name="category_id">
                            <option selected>選択してください</option>
                            <option value="1">コンピュータ</option>
                            <option value="2">家電、AV、カメラ</option>
                            <option value="3">本、雑誌</option>
                            <option value="4">映画、ビデオ</option>
                            <option value="5">おもちゃ、ゲーム</option>
                            <option value="6">アンティーク、コレクション</option>
                            <option value="7">スポーツ、レジャー</option>
                            <option value="8">自動車、オートバイ</option>
                            <option value="9">ファッション</option>
                            <option value="10">アクセサリー、時計</option>
                            <option value="11">食品、飲料</option>
                            <option value="12">住まい、インテリア</option>
                            <option value="13">事務、店舗用品</option>
                            <option value="14">その他</option>
                        </select>

                        {{-- 商品状態セレクト --}}
                        <label class="font-weight-bold mt-4 pt-4">商品の状態</label>
                        <select class="form-control" name="status_id">
                            <option selected>選択してください</option>
                            <option value="1">新品、未使用</option>
                            <option value="2">未使用に近い</option>
                            <option value="3">目立った傷や汚れなし</option>
                            <option value="4">やや傷や汚れあり</option>
                            <option value="5">傷や汚れあり</option>
                            <option value="6">全体的に状態が悪い</option>
                        </select>
                    </div>
                    <hr class="mb-3 mt-4">
                    <div class="card-body pt-3">
                        <p class="text-black-50 font-weight-bold mb-4 pb-2">配送について</p>

                        {{-- 送料負担セレクト --}}
                        <label class="font-weight-bold">配送料の負担</label>
                        <select class="form-control" name="paystatus_id">
                            <option selected>選択してください</option>
                            <option value="1">送料込み（出品者負担）</option>
                            <option value="2">着払い（購入者負担）</option>
                        </select>

                        {{-- 発送地域セレクト --}}
                        <label class="font-weight-bold mt-4 pt-4">発送元の地域</label>
                        <select class="form-control" name="area_id">
                            <option selected>選択してください</option>
                            <option value="1">北海道</option>
                            <option value="2">青森県</option>
                            <option value="3">岩手県</option>
                            <option value="4">宮城県</option>
                            <option value="5">秋田県</option>
                            <option value="6">山形県</option>
                            <option value="7">福島県</option>
                            <option value="8">茨城県</option>
                            <option value="9">栃木県</option>
                            <option value="10">群馬県</option>
                            <option value="11">埼玉県</option>
                            <option value="12">千葉県</option>
                            <option value="13">東京都</option>
                            <option value="14">神奈川県</option>
                            <option value="15">新潟県</option>
                            <option value="16">富山県</option>
                            <option value="17">石川県</option>
                            <option value="18">福井県</option>
                            <option value="19">山梨県</option>
                            <option value="20">長野県</option>
                            <option value="21">岐阜県</option>
                            <option value="22">静岡県</option>
                            <option value="23">愛知県</option>
                            <option value="24">三重県</option>
                            <option value="25">滋賀県</option>
                            <option value="26">京都府</option>
                            <option value="27">大阪府</option>
                            <option value="28">兵庫県</option>
                            <option value="29">奈良県</option>
                            <option value="30">和歌山県</option>
                            <option value="31">鳥取県</option>
                            <option value="32">島根県</option>
                            <option value="33">岡山県</option>
                            <option value="34">広島県</option>
                            <option value="35">山口県</option>
                            <option value="36">徳島県</option>
                            <option value="37">香川県</option>
                            <option value="38">愛媛県</option>
                            <option value="39">高知県</option>
                            <option value="40">福岡県</option>
                            <option value="41">佐賀県</option>
                            <option value="42">長崎県</option>
                            <option value="43">熊本県</option>
                            <option value="44">大分県</option>
                            <option value="45">宮崎県</option>
                            <option value="46">鹿児島県</option>
                            <option value="47">沖縄県</option>
                        </select>

                        {{-- 発送日数セレクト --}}
                        <label class="font-weight-bold mt-4 pt-4">発送までの日数</label>
                        <select class="form-control" name="day_id">
                            <option selected>選択してください</option>
                            <option value="1">１〜２日で発送</option>
                            <option value="2">２〜３日で発送</option>
                            <option value="3">４〜７日で発送</option>
                        </select>
                    </div>
                    <hr class="mb-3 mt-4">
                    <div class="card-body pt-3">
                        <p class="text-black-50 font-weight-bold mb-4 pb-2">価格</p>
                    </div>
                    <div class="form-group row">

                        {{-- 開始価格 --}}
                        <label for="value" class="col-md-6 col-form-label text-md-left-3 ml-4 font-weight-bold">開始価格</label>
                        <p class="col-1 pt-2 ml-3 pl-5">￥</p>
                        <div class="col-md-4">
                            <input id="number" type="number" class="form-control" name="price" placeholder="0" min="0" max="9999999">
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
