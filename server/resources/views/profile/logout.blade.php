@extends('layouts.app')

@section('content')
<div class="container mt-3">

    <div class="row ml-3 pl-3">
        @component('components.list')
        @endcomponent
    <!-- Section: Block Content -->
    <div class="col-8 z-depth-1 ml-4 white">
        <section>
            <div class="text-center mt-5">
                <div class="col-md-6 offset-3">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                        @csrf
                        <button type="submit" class="btn btn-danger btn-block">
                            {{ __('ログアウト') }}
                        </button>
                    </form>
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
