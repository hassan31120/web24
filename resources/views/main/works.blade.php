@extends('main.layouts.main')
@section('content')

    <!--section image-->
    <!--service-->
    <h1 class="text-center pt-5 mb-5 fw-bold" id="services" style="color:#fa7b70
    ;">اعمالنا</h1>
    <div class="container">
        <div class="row d-flex justify-content-between">
            @foreach ($links as $link)
                <div class="col-lg-4 col-sm-6 mt-4">
                    <div class="  border rounded img">
                        <a href="{{ $link->link }}" target="_blank"><img src="{{ asset($link->image) }}" class=" img-fluid"
                            alt=""></a>
                    </div>
                </div>
            @endforeach
        </div>
        <div style="margin-top: 15px" class="d-flex justify-content-center">
            {{ $links->links() }}
        </div>
    </div>
@endsection
