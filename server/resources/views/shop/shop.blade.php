@extends('layouts.shopapp')

@section('contents')
<div class="container mt-3">
      <div class="row ml-1">

        @foreach ($sells as $sell)
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card card-ecommerce">
            <div class="view overlay ml-1">
              <img src="{{ asset('storage/'.$sell->imgpath) }}" class="img-fluidincart ml-4 mt-3" height="180px" width="200px"
                alt="">
            </div>

            <div class="card-body">
              <h5 class="card-title mb-1">
                <strong>
                  <a href="" class="dark-grey-text">{{$sell->name}}</a>
                </strong>
              </h5>

              <div class="card-footer pb-0 white">
                <div class="row mb-0">
                  <span class="float-left">
                    <strong class="text-danger h5">￥{{ number_format($sell->price) }}</strong>
                    <form action="{{ url('/mypage/like') }}" method="POST" class="float-right ml-5">
                        @csrf
                        <input type="hidden" name="sell_id" value="{{ $sell->id }}">
                        <button type="submit" class="btn btn-sm btn-link rounded-pill border-danger text-danger nav-link"><i class="far fa-heart text-danger pr-1"></i>いいね！</button>
                    </form>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="">
        {{ $sells ?? ''->links() }}
        </div>

  </div>
@endsection
