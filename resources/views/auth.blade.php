@extends('app')


@section('body-right')


    <div class="form-signin container h-full p-0 px-sm-5 py-5 my-sm-5">

        <a class="d-flex justify-content-center mb-4" href="{{Dashboard::prefix()}}">
            @includeFirst([config('platform.template.header'), 'header'])
        </a>

        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">

                <div class="bg-white p-4 p-sm-5 rounded shadow-sm">
                    @yield('content')
                </div>

                <div class="mt-4 text-center">
                    @includeFirst([config('platform.template.footer'), 'footer'])
                </div>
            </div>
        </div>
    </div>

@endsection
