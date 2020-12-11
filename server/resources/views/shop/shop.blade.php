@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mx-auto">
        <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">商品一覧</h1>
        <div class="">
            <div class="d-flex flex-row flex-wrap">
                {{-- 商品はまだありません --}}

                @foreach ($sells as $sell)
                <div class="col-xs-6 col-sm-4 col-md-4 border m-2">
                 <div class="mycart_box">
                     {{$sell->name}} <br>
                     {{$sell->price}}円<br>
                     <img src="{{ asset('storage/'.$sell->imgpath) }}" alt="" class="incart" width="200px">
                     <br>
                     {{$sell->detail}} <br>

                     <form action="{{ url('/mypage/like') }}" method="POST">
                         {{ csrf_field() }}
                         <input type="hidden" name="sell_id" value="{{ $sell->id }}">
                         <input type="submit" value="いいね！">
                     </form>
                 </div>

                 </div>
                 @endforeach
        </div>
    </div>
    <div class="text-center" style="width: 200px;margin: 20px auto; text-align:center;">
        {{ $sells ?? ''->links() }}
    </div>
</div>
@endsection
