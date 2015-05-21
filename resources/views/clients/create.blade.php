@extends('app')


@section('content')

<!-- Breadcrumb -->
@include('layout.breadcrumb')

{!! Form::open(['route' => ['clients.store']]) !!}
@include('clients.form')
{!! Form::close() !!}

@endsection