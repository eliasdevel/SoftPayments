@extends('app')

@section('content')

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				{{--<div class="panel-heading">Home</div>--}}

				<div class="panel-body">
					<p></p>Olá {{ Auth::user()->name }},</p>

					<p>Este software é gestão de cobranças para projetos pessoais.</p>
				</div>
			</div>
		</div>
	</div>

@endsection
