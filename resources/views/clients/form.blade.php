@if ($errors->any()) 

@foreach($errors->all() as $error) 
<li  class="text-danger">{{ $error }}</li> 
@endforeach 

@endif


<!-- Token -->
{!! Form::hidden('email', csrf_token()); !!}

<div class="col-sm-6" style="margin-top: 20px">

    <!-- Name -->
    <div class="form-group">
        {!! Form::label('name', ucfirst(trans('form.name'))); !!}
        {!! Form::text('name', null, ['class' => 'form-control']); !!}
    </div>

    <!-- E-mail -->
    <div class="form-group">
        {!! Form::label('email', ucfirst(trans('form.email'))); !!}
        {!! Form::email('email', null, ['class' => 'form-control']); !!}
    </div>

    <!-- Company -->
    <div class="form-group">
        {!! Form::label('company', ucfirst(trans('form.company'))); !!}
        {!! Form::text('company', null, ['class' => 'form-control']); !!}
    </div>

    <!-- Phone -->
    <div class="form-group">
        {!! Form::label('phone', ucfirst(trans('form.phone'))); !!}
        {!! Form::text('company', null, ['class' => 'form-control']); !!}
    </div>

    <!-- Cellphone -->
    <div class="form-group">
        {!! Form::label('cellphone', ucfirst(trans('form.cellphone'))); !!}
        {!! Form::text('company', null, ['class' => 'form-control']); !!}
    </div>

    @include('layout.buttons', ['buttons' => ['submit']])

</div>