@extends('admin.master.app')

@section('admin')

	<main class="container">
		<div class="row">
			<div class="col-lg-4 col-lg-offset-4" style="margin-top: 50px;">

				@if(count($errors) > 0)
					<div class="alert alert-warning">
						@foreach($errors->all() as $error)
							<p>{{ $error }}</p>
						@endforeach
					</div>
				@endif

				<form action="{{ route('admin.login.store') }}" method="post">
					{{ csrf_field() }}
					<div class="form-group">
						<span>Seu email</span>
						<input type="email" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<span>Sua senha</span>
						<input type="password" name="password" class="form-control" required>
					</div>
					<div class="form-group">
						<button class="btn btn-primary">
							Acessar conta
						</button>
					</div>
				</form>
			</div>
		</div>
	</main>

@endsection