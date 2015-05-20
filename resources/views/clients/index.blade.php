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
            </thead>
            <tbody>
                <tr>
                    <td></td>
                </tr>
            </tbody>
        </table>

    @endif
    <div class="clearfix"></div><br/>

    <!-- End Table -->

    <!-- Buttons -->
    @include('layout.buttons', ['buttons' => ['create']])

@endsection