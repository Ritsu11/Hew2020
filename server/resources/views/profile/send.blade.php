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
                    font-size:1.2em; padding:25px 0px 5px 0px;">発送元・お届け先</h1>
                    <hr>

                    <div class="container pb-5">
                        <div class="row justify-content-center ml-2">
                            <div class="col-md-8">
                                <form action="/profile/send" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="card shadow-none border-0 pb-4">
                                        <div class="card-body pt-3">

                                            {{-- 名前 --}}
                                            <label class="font-weight-bold">お名前<span
                                                    class="badge badge-danger shadow-none ml-2">必須</span></label>
                                            <input type="text" class="form-control" name="firstname" placeholder="例）山田"
                                                value="{{ $user->firstname }}" required>
                                            <div class="pt-2">
                                                <span
                                                    class="help-block h6 text-danger">{{ $errors->first('firstname') }}</span>
                                            </div>
                                            <input type="text" class="form-control" name="lastname" placeholder="例）太郎"
                                                value="{{ $user->lastname }}" required>
                                            <div class="pt-2">
                                                <span
                                                    class="help-block h6 text-danger">{{ $errors->first('lastname') }}</span>
                                            </div>
                                        </div>

                                        <div class="card-body pt-3">

                                            {{-- 名前カナ --}}
                                            <label class="font-weight-bold">お名前カナ<span
                                                    class="badge badge-danger shadow-none ml-2">必須</span></label>
                                            <input type="text" class="form-control" name="firstname_kana"
                                                placeholder="例）ヤマダ" value="{{ $user->firstname_kana }}" required>
                                            <div class="pt-2">
                                                <span
                                                    class="help-block h6 text-danger">{{ $errors->first('firstname_kana') }}</span>
                                            </div>
                                            <input type="text" class="form-control" name="lastname_kana" placeholder="例）タロウ"
                                                value="{{ $user->lastname_kana }}" required>
                                            <div class="pt-2">
                                                <span
                                                    class="help-block h6 text-danger">{{ $errors->first('lastname_kana') }}</span>
                                            </div>
                                        </div>

                                        <div class="h-adr">
                                            <span class="p-country-name" style="display:none;">Japan</span>
                                            <div class="card-body pt-3">

                                                {{-- 郵便番号 --}}
                                                <label class="font-weight-bold">郵便番号<span
                                                        class="badge badge-danger shadow-none ml-2">必須</span></label>
                                                <input type="text" class="form-control p-postal-code" name="postal_code"
                                                    placeholder="例）123-4567" value="{{ $user->postal_code }}" size="7"
                                                    maxlength="7" required>
                                                <div class="pt-2">
                                                    <span
                                                        class="help-block h6 text-danger">{{ $errors->first('postal_code') }}</span>
                                                </div>
                                            </div>

                                            <div class="card-body pt-3">

                                                {{-- 都道府県 --}}
                                                <label class="font-weight-bold">都道府県<span
                                                        class="badge badge-danger shadow-none ml-2">必須</span></label>
                                                <div>
                                                    <select class="form-control p-region-id" name="area_id">
                                                        <option value="">選択してください</option>
                                                        <option value="1" @if ($user->area_id == '1') selected @endif>北海道</option>
                                                        <option value="2" @if ($user->area_id == '2') selected @endif> 青森県</option>
                                                        <option value="3" @if ($user->area_id == '3') selected @endif> 岩手県</option>
                                                        <option value="4" @if ($user->area_id == '4') selected @endif> 宮城県</option>
                                                        <option value="5" @if ($user->area_id == '5') selected @endif> 秋田県</option>
                                                        <option value="6" @if ($user->area_id == '6') selected @endif> 山形県</option>
                                                        <option value="7" @if ($user->area_id == '7') selected @endif> 福島県</option>
                                                        <option value="8" @if ($user->area_id == '8') selected @endif> 茨城県</option>
                                                        <option value="9" @if ($user->area_id == '9') selected @endif> 栃木県</option>
                                                        <option value="10" @if ($user->area_id == '10') selected @endif>群馬県</option>
                                                        <option value="11" @if ($user->area_id == '11') selected @endif>埼玉県</option>
                                                        <option value="12" @if ($user->area_id == '12') selected @endif>千葉県</option>
                                                        <option value="13" @if ($user->area_id == '13') selected @endif>東京都</option>
                                                        <option value="14" @if ($user->area_id == '14') selected @endif>神奈川県</option>
                                                        <option value="15" @if ($user->area_id == '15') selected @endif>新潟県</option>
                                                        <option value="16" @if ($user->area_id == '16') selected @endif>富山県</option>
                                                        <option value="17" @if ($user->area_id == '17') selected @endif>石川県</option>
                                                        <option value="18" @if ($user->area_id == '18') selected @endif>福井県</option>
                                                        <option value="19" @if ($user->area_id == '19') selected @endif>山梨県</option>
                                                        <option value="20" @if ($user->area_id == '20') selected @endif>長野県</option>
                                                        <option value="21" @if ($user->area_id == '21') selected @endif>岐阜県</option>
                                                        <option value="22" @if ($user->area_id == '22') selected @endif>静岡県</option>
                                                        <option value="23" @if ($user->area_id == '23') selected @endif>愛知県</option>
                                                        <option value="24" @if ($user->area_id == '24') selected @endif>三重県</option>
                                                        <option value="25" @if ($user->area_id == '25') selected @endif>滋賀県</option>
                                                        <option value="26" @if ($user->area_id == '26') selected @endif>京都府</option>
                                                        <option value="27" @if ($user->area_id == '27') selected @endif>大阪府</option>
                                                        <option value="28" @if ($user->area_id == '28') selected @endif>兵庫県</option>
                                                        <option value="29" @if ($user->area_id == '29') selected @endif>奈良県</option>
                                                        <option value="30" @if ($user->area_id == '30') selected @endif>和歌山県</option>
                                                        <option value="31" @if ($user->area_id == '31') selected @endif>鳥取県</option>
                                                        <option value="32" @if ($user->area_id == '32') selected @endif>島根県</option>
                                                        <option value="33" @if ($user->area_id == '33') selected @endif>岡山県</option>
                                                        <option value="34" @if ($user->area_id == '34') selected @endif>広島県</option>
                                                        <option value="35" @if ($user->area_id == '35') selected @endif>山口県</option>
                                                        <option value="36" @if ($user->area_id == '36') selected @endif>徳島県</option>
                                                        <option value="37" @if ($user->area_id == '37') selected @endif>香川県</option>
                                                        <option value="38" @if ($user->area_id == '38') selected @endif>愛媛県</option>
                                                        <option value="39" @if ($user->area_id == '39') selected @endif>高知県</option>
                                                        <option value="40" @if ($user->area_id == '40') selected @endif>福岡県</option>
                                                        <option value="41" @if ($user->area_id == '41') selected @endif>佐賀県</option>
                                                        <option value="42" @if ($user->area_id == '42') selected @endif>長崎県</option>
                                                        <option value="43" @if ($user->area_id == '43') selected @endif>熊本県</option>
                                                        <option value="44" @if ($user->area_id == '44') selected @endif>大分県</option>
                                                        <option value="45" @if ($user->area_id == '45') selected @endif>宮崎県</option>
                                                        <option value="46" @if ($user->area_id == '46') selected @endif>鹿児島県</option>
                                                        <option value="47" @if ($user->area_id == '47') selected @endif>沖縄県</option>
                                                    </select>
                                                    <div class="pt-2">
                                                        <span
                                                            class="help-block h6 text-danger">{{ $errors->first('area_id') }}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-body pt-3">

                                                {{-- 市町村 --}}
                                                <label class="font-weight-bold">市町村<span
                                                        class="badge badge-danger shadow-none ml-2">必須</span></label>
                                                <input type="text"
                                                    class="form-control p-locality p-street-address p-extended-address"
                                                    name="city" placeholder="例）新宿区" value="{{ $user->city }}" required>
                                                <div class="pt-2">
                                                    <span
                                                        class="help-block h6 text-danger">{{ $errors->first('city') }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body pt-3">

                                            {{-- 番地 --}}
                                            <label class="font-weight-bold">番地<span
                                                    class="badge badge-danger shadow-none ml-2">必須</span></label>
                                            <input type="text" class="form-control" name="city_address"
                                                placeholder="例）新宿1-7-3" value="{{ $user->city_address }}">
                                            <div class="pt-2">
                                                <span
                                                    class="help-block h6 text-danger">{{ $errors->first('city_address') }}</span>
                                            </div>
                                        </div>

                                        <div class="pl-4 ml-4 mt-5">
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
