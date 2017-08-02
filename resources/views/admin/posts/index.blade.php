@extends('admin.master.app')

@section('admin')
	@include('admin.includes.menu')

	<main class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				
				<header>
					<h1>Todos Posts</h1>
				</header>

				@if($posts->count() > 0)
					@foreach($posts as $post)
						<article class="panel panel-{{ $post->status == 0 ? 'info' : 'primary' }}">
							<header class="panel-heading">
								<h2 class="panel-title">{{ $post->title }}</h2>
							</header>
							<div class="panel-body">
								<img src="{{ asset($post->image) }}" alt="" class="img-resposive">
							</div>
							<footer class="panel-footer">
								<form action="{{ route('admin.posts.destroy', $post->id) }}" method="post" class="form-del">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}
									<a href="" class="btn btn-sm btn-primary">Acessar no site</a>
									<a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-sm btn-success">Editar</a>
									<button class="btn btn-sm btn-danger">Deletar</button>
								</form>
							</footer>
						</article>
					@endforeach

					{{ $posts->render() }}
				@else
					<h2 class="text-center">Opss, nenhum post cadastrado</h2>
				@endif

			</div>
		</div>
	</main>

@endsection