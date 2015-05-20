@if ( in_array('create', $buttons))

    <a href="{{ Request::segment(1) . DIRECTORY_SEPARATOR . 'create' }}" class="btn btn-primary">
        {{ ucfirst(trans('buttons.create')) }}
    </a>

@endif

@if ( in_array('submit', $buttons))

    <button type="submit" class="btn btn-primary">
        {{ ucfirst(trans('buttons.submit')) }}
    </button>

@endif