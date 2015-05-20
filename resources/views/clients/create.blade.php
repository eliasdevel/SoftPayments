@extends('app')


@section('content')

    <!-- Breadcrumb -->
    @include('layout.breadcrumb')

    <form action="{{ url('clients/store') }}" method="POST">
        @include('clients.form')
    </form>

@endsection