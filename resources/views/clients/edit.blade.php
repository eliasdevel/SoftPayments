@extends('app')


@section('content')

<!-- Breadcrumb -->
@include('layout.breadcrumb')

{!! Form::model($client, ['route' => ['clients.update', $client->id]]) !!}
@include('clients.form')

{!! Form::close() !!}

@endsection