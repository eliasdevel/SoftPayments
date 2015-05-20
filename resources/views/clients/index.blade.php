@extends('app')

@section('content')

<!-- Breadcrumb -->
@include('layout.breadcrumb')



<!-- Table -->
@if ( $rows <= 0 )

{{ ucfirst(trans('messages.no_registers')) }}

@else

<table class="table table-bordered table-responsive">
    <thead>
    <th></th>
    <th></th>
    <th>{{ ucfirst(trans('form.name')) }}</th>
    <th>{{ ucfirst(trans('form.email')) }}</th>
    <th>{{ ucfirst(trans('form.company')) }}</th>
    <th>{{ ucfirst(trans('form.phone')) }}</th>
    <th>{{ ucfirst(trans('form.cellphone')) }}</th>
</thead>
<tbody>
    @foreach( $clients as $client )
    <tr>
        <td><a href="{{ url('clients/destroy/' . $client->id) }}">Excluir</a></td>
        <td><a href="{{ url('clients/edit/' . $client->id) }}">Editar</a></td>
        <td>{{ $client->name }}</td>
        <td>{{ $client->email }}</td>
        <td>{{ $client->company }}</td>
        <td>{{ $client->phone }}</td>
        <td>{{ $client->cellphone }}</td>
    </tr>
    @endforeach
</tbody>
</table>

@endif
<div class="clearfix"></div><br/>

<!-- End Table -->

<!-- Buttons -->
@include('layout.buttons', ['buttons' => ['create']])

@endsection