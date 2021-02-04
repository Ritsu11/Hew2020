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
                    font-size:1.2em; padding:25px 0px 13px 0px;">いいね！一覧</h1>
                    {{-- <p class="text-center">{{ $message ?? ""}}</p><br> --}}
                    <!-- Shopping Cart table -->
                    <div class="table-responsive">
                        <table class="table product-table table-cart-v-1">
                            <!-- Table body -->
                            <tbody>
                                <!-- First row -->
                                @foreach ($likes as $like)
                                    <tr>
                                        <td></td>
                                        <th scope="row" style="width: 150px">
                                            <img src="{{ asset('storage/' . optional($like->sell)->imgpath) }}" alt=""
                                                class="img-fluid z-depth-0" width="70px" height="50px">
                                        </th>
                                        <td>
                                            <h5 class="mt-2 pt-cus-1">
                                                <a href=""><strong>{{ optional($like->sell)->name }}</strong></a>
                                                <p><small>￥{{ number_format(optional($like->sell)->price) }}</small></p>
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
                                            <form action="{{ url('/mypage/like/delete') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="sell_id"
                                                    value="{{ optional($like->sell)->id }}">
                                                <input type="submit" value="削除" class="btn btn-primary btn-sm">
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
