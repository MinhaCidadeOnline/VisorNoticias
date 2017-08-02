@extends('admin.master.app')

@section('admin')
	@include('admin.includes.menu')

	<main class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				
				<header>
					<h1>Todas Categorias</h1>
				</header>

				@if($categories->count() > 0)
					@foreach($categories as $category)
						<article class="panel panel-default">
							<header class="panel-heading">
								<h2 class="panel-title">{{ $category->title }}</h2>
							</header>
							<footer class="panel-footer">
								<form action="{{ route('admin.categories.destroy', $category->id) }}" method="post" class="form-del">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<a href="" class="btn btn-sm btn-primary">Acessar no site</a>
									<a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-sm btn-success">Editar</a>
									<button class="btn btn-sm btn-danger">Deletar</button>
								</form>
							</footer>
						</article>
					@endforeach

					{{ $categories->render() }}
				@else
					<h2 class="text-center">Opss, nenuma categoria cadastrada</h2>
				@endif

			</div>
		</div>
	</main>

@endsection