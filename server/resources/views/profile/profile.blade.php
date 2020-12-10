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
                font-size:1.2em; padding:36px 0px 0px 0px;">プロフィール</h1>
        <p class="text-center">{{ $message ?? ""}}</p><br>
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
