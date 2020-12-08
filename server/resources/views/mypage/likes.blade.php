@extends('layouts.app')

@section('content')
<div class="container-fluid">
 <div class="">
     <div class="mx-auto" style="max-width:1200px">
         <h1 class="text-center font-weight-bold" style="color:#555555;
             font-size:1.2em; padding:24px 0px;">いいね！の一覧</h1>
         <div class="card-body">

            <div class="">
                <p class="text-center">{{ $message ?? ""}}</p><br>
                <div class="d-flex flex-row flex-wrap">
                @foreach($likes as $like)
                    <div class="mycart_box border mr-5 mb-4">
                        <p>{{ optional($like->sell)->name }}</p>
                        {{ number_format(optional($like->sell)->price)}}円 <br>
                        <img src="/image/{{ optional($like->sell)->imgpath }}" alt="" class="incart" width="200px"><br>

                        <form action="{{ url('/mypage/like/delete') }}" method="POST" class="mt-3">
                            @csrf
                            <input type="hidden" name="sell_id" value="{{ optional($like->sell)->id }}">
                            <input type="submit" value="カートから削除する">
                        </form>
                    </div>
                @endforeach
                </div>
            </div>
            <a href="/">商品一覧へ</a>
         </div>
     </div>
 </div>
</div>
@endsection
