@extends('layouts.base')

@section('body')
    @include('partials.nav')

    <div class="container">
        @yield('content')
    </div>
@stop
