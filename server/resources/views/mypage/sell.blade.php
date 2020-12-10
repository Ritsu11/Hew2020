@extends('layouts.noheader')

@section('content')
<div class="container pb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="" method="post">
                @csrf
                <div class="card shadow-none border-0 pb-4">
                    <div class="card-body pt-4">
                        <label class="font-weight-bold">出品画像</label>
                        <p>最大5枚までアップロードできます</p>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroupFileAddon01">アップロード</span>
                            </div>
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="inputGroupFile01"
                                aria-describedby="inputGroupFileAddon01">
                              <label class="custom-file-label" for="inputGroupFile01">ファイルの選択</label>
                            </div>
                        </div>
                    </div>
                    <hr class="mb-3 mt-4">
                    <div class="card-body pt-3">
                        <label class="font-weight-bold">商品名</label>
                        <input type="text" id="exampleForm2" class="form-control" placeholder="30文字まで">
                    </div>
                    <div class="card-body">
                        <label class="font-weight-bold">商品の説明</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                    <hr class="mb-3 mt-4">
                    <div class="card-body pt-3">
                        <p class="text-black-50 font-weight-bold mb-4 pb-2">商品の詳細</p>
                        <label class="font-weight-bold">カテゴリー</label>
                        <select class="form-control">
                            <option selected>選択してください</option>
                            <option value="コンピュータ">コンピュータ</option>
                            <option value="本、雑誌">本、雑誌</option>
                            <option value="映画、ビデオ">映画、ビデオ</option>
                            <option value="おもちゃ、ゲーム">おもちゃ、ゲーム</option>
                            <option value="アンティーク、コレクション">アンティーク、コレクション</option>
                            <option value="スポーツ、レジャー">スポーツ、レジャー</option>
                            <option value="自動車、オートバイ">自動車、オートバイ</option>
                            <option value="ファッション">ファッション</option>
                            <option value="アクセサリー、時計">アクセサリー、時計</option>
                            <option value="食品、飲料">食品、飲料</option>
                            <option value="住まい、インテリア">住まい、インテリア</option>
                            <option value="事務、店舗用品">事務、店舗用品</option>
                            <option value="その他">その他</option>
                        </select>
                        <label class="font-weight-bold mt-4 pt-4">商品の状態</label>
                        <select class="form-control">
                            <option selected>選択してください</option>
                            <option value="新品、未使用">新品、未使用</option>
                            <option value="未使用に近い">未使用に近い</option>
                            <option value="目立った傷や汚れなし">目立った傷や汚れなし</option>
                            <option value="やや傷や汚れあり">やや傷や汚れあり</option>
                            <option value="傷や汚れあり">傷や汚れあり</option>
                            <option value="全体的に状態が悪い">全体的に状態が悪い</option>
                        </select>
                    </div>
                    <hr class="mb-3 mt-4">
                    <div class="card-body pt-3">
                        <p class="text-black-50 font-weight-bold mb-4 pb-2">配送について</p>
                        <label class="font-weight-bold">配送料の負担</label>
                        <select class="form-control">
                            <option selected>選択してください</option>
                            <option value="送料込み">送料込み（出品者負担）</option>
                            <option value="着払い">着払い（購入者負担）</option>
                        </select>
                        <label class="font-weight-bold mt-4 pt-4">発送元の地域</label>
                        <select class="form-control">
                            <option value="" selected>選択してください</option>
                            <option value="北海道">北海道</option>
                            <option value="青森県">青森県</option>
                            <option value="岩手県">岩手県</option>
                            <option value="宮城県">宮城県</option>
                            <option value="秋田県">秋田県</option>
                            <option value="山形県">山形県</option>
                            <option value="福島県">福島県</option>
                            <option value="茨城県">茨城県</option>
                            <option value="栃木県">栃木県</option>
                            <option value="群馬県">群馬県</option>
                            <option value="埼玉県">埼玉県</option>
                            <option value="千葉県">千葉県</option>
                            <option value="東京都">東京都</option>
                            <option value="神奈川県">神奈川県</option>
                            <option value="新潟県">新潟県</option>
                            <option value="富山県">富山県</option>
                            <option value="石川県">石川県</option>
                            <option value="福井県">福井県</option>
                            <option value="山梨県">山梨県</option>
                            <option value="長野県">長野県</option>
                            <option value="岐阜県">岐阜県</option>
                            <option value="静岡県">静岡県</option>
                            <option value="愛知県">愛知県</option>
                            <option value="三重県">三重県</option>
                            <option value="滋賀県">滋賀県</option>
                            <option value="京都府">京都府</option>
                            <option value="大阪府">大阪府</option>
                            <option value="兵庫県">兵庫県</option>
                            <option value="奈良県">奈良県</option>
                            <option value="和歌山県">和歌山県</option>
                            <option value="鳥取県">鳥取県</option>
                            <option value="島根県">島根県</option>
                            <option value="岡山県">岡山県</option>
                            <option value="広島県">広島県</option>
                            <option value="山口県">山口県</option>
                            <option value="徳島県">徳島県</option>
                            <option value="香川県">香川県</option>
                            <option value="愛媛県">愛媛県</option>
                            <option value="高知県">高知県</option>
                            <option value="福岡県">福岡県</option>
                            <option value="佐賀県">佐賀県</option>
                            <option value="長崎県">長崎県</option>
                            <option value="熊本県">熊本県</option>
                            <option value="大分県">大分県</option>
                            <option value="宮崎県">宮崎県</option>
                            <option value="鹿児島県">鹿児島県</option>
                            <option value="沖縄県">沖縄県</option>
                        </select>
                        <label class="font-weight-bold mt-4 pt-4">発送までの日数</label>
                        <select class="form-control">
                            <option selected>選択してください</option>
                            <option value="１〜２日で発送">１〜２日で発送</option>
                            <option value="２〜３日で発送">２〜３日で発送</option>
                            <option value="４〜７日で発送">４〜７日で発送</option>
                        </select>
                    </div>
                    <hr class="mb-3 mt-4">
                    <div class="card-body pt-3">
                        <p class="text-black-50 font-weight-bold mb-4 pb-2">価格</p>
                    </div>
                    <div class="form-group row">
                        <label for="value" class="col-md-6 col-form-label text-md-left-3 ml-4 font-weight-bold">開始価格</label>
                        <p class="col-1 pt-2 ml-3 pl-5">￥</p>
                        <div class="col-md-4">
                            <input id="number" type="number" class="form-control" name="value" placeholder="0" min="0" max="9999999">
                        </div>
                    </div>
                    <hr class="mb-3 mt-4">
                    <div class="card-body pt-3">
                        <p class="text-black-50 font-weight-bold mb-4 pb-2">時間</p>
                        <label class="font-weight-bold pt-2 pb-1">締切時間</label>
                        <select class="form-control">
                            <option selected>選択してください</option>
                            <option value="1">1時間後</option>
                            <option value="3">3時間後</option>
                            <option value="6">6時間後</option>
                            <option value="1">12時間後</option>
                            <option value="24">24時間後</option>
                        </select>
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
