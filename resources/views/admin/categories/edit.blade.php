@extends('admin.master.app')

@section('admin')
	@include('admin.includes.menu')

	<main class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				
				<header>
					<h1>Editar Categoria</h1>
				</header>

				@if(count($errors) > 0)
					<div class="alert alert-warning">
						@foreach($errors->all() as $error)
							<p>{{ $error }}</p>
						@endforeach
					</div>
				@endif

				<form action="{{ route('admin.categories.update', $category->id) }}" method="post">
					{{ csrf_field() }}
					{{ method_field('PUT') }}

					<div class="form-group">
						<span>Titulo</span>
						<input type="text" name="title" class="form-control" value="{{ $category->title }}">
					</div>

					<div class="form-group">
						<span>Descrição</span>
						<textarea name="body" cols="30" rows="10" class="form-control">{{ $category->body }}</textarea>
					</div>

					<div class="form-group">
						<button class="btn btn-primary">
							Atualizar
						</button>
					</div>

				</form>

			</div>
		</div>
	</main>

@endsection