@extends('layouts.app')

@section('content')
<div class="container my-5">

    <div class="row ml-3">
        @component('components.list')
        @endcomponent
    <!-- Section: Block Content -->
    <div class="col-8 z-depth-1 ml-2 white">
        <section>
        <h1 class="text-center font-weight-bold" style="color:#555555;
                font-size:1.2em; padding:36px 0px 0px 0px;">出品 - 出品中</h1>
        <p class="text-center">{{ $message ?? ""}}</p><br>
        <!-- Shopping Cart table -->
        <div class="table-responsive">
            <table class="table product-table table-cart-v-1">
                <!-- Table body -->
                <tbody>
                <!-- First row -->
                @foreach($put_now as $put)
                <tr>
                    <td></td>
                    <th scope="row" style="width: 150px">
                    <img src="{{ asset('storage/'. $put->imgpath) }}" alt=""
                        class="img-fluid z-depth-0" width="100px">
                    </th>
                    <td>
                    <h5 class="mt-2 pt-cus-1">
                        <a href=""><strong>{{ $put->name }}</strong></a>
                        <p><small>￥{{ number_format($put->price)}}</small></p>
                    </h5>
                    </td>
                    {{-- <td class="font-weight-bold pt-4 text-size-big">
                    <strong>{{ number_format(optional($like->sell)->price)}}</strong>
                    </td> --}}
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>

                        {{-- 編集ボタン --}}
                        <form action="{{ url('/mypage/like/delete') }}" method="POST">
                            @csrf
                            <input type="hidden" name="sell_id" value="{{ optional($put->sell)->id }}">
                            <input type="submit" value="編集" class="btn btn-primary btn-sm">
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
                <!-- Table body -->
            </table>
        </div>
        <!-- Shopping Cart table -->
    </section>
    <!-- Section: Block Content -->
    </div>
    </div>

</div>
@endsection
