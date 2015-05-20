<div class="col-sm-6">
    <!-- Token -->
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <!-- Name -->
    <div class="form-group">
        <label class="control-label">{{ ucfirst(trans('form.name')) }}: </label>
        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
    </div>

    <!-- E-mail -->
    <div class="form-group">
        <label class="control-label">{{ ucfirst(trans('form.email')) }}: </label>
        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
    </div>

    <!-- Company -->
    <div class="form-group">
        <label class="control-label">{{ ucfirst(trans('form.company')) }}: </label>
        <input type="text" class="form-control" name="company" value="{{ old('company') }}">
    </div>

    <!-- Phone -->
    <div class="form-group">
        <label class="control-label">{{ ucfirst(trans('form.phone')) }}: </label>
        <input type="tel" class="form-control" name="phone" value="{{ old('phone') }}">
    </div>

    <!-- Cellphone -->
    <div class="form-group">
        <label class="control-label">{{ ucfirst(trans('form.cellphone')) }}: </label>
        <input type="tel" class="form-control" name="cellphone" value="{{ old('cellphone') }}">
    </div>

    @include('layout.buttons', ['buttons' => ['submit']])

</div>