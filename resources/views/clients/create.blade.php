@extends('app')


@section('content')


@include('layout.breadcrumb')

{!! Form::open(['route' => ['clients.store']]) !!}
@include('clients.form')
{!! Form::close() !!}

@endsection