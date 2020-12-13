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
                font-size:1.2em; padding:25px 0px 5px 0px;">支払い方法</h1>
                <hr>
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
