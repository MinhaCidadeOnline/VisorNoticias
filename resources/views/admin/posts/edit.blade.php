@extends('admin.master.app')

@section('admin')
	@include('admin.includes.menu')

	<main class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				
				<header>
					<h1>Editar Post</h1>
				</header>

				@if(count($errors) > 0)
					<div class="alert alert-warning">
						@foreach($errors->all() as $error)
							<p>{{ $error }}</p>
						@endforeach
					</div>
				@endif

				<form action="{{ route('admin.posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					{{ method_field('PUT') }}

					<div class="form-group">
						<span>Imagem destacada</span>
						<input type="file" name="image" class="form-control">
					</div>

					<div class="form-group">
						<span>Titulo</span>
						<input type="text" name="title" class="form-control" value="{{ $post->title }}">
					</div>

					<div class="form-group">
						<span>Subtítulo</span>
						<textarea name="subtitle" cols="30" rows="10" class="form-control">{{ $post->subtitle }}</textarea>
					</div>

					<div class="form-group">
						<span>Conteúdo</span>
						<textarea name="body" cols="30" rows="10" class="form-control tinymce">{{ $post->body }}</textarea>
					</div>

					<div class="form-group">
						<span>Categoria</span>
						<select name="category_id" class="form-control">
							@if($categories->count() > 0)
								<option selected>Selecione um categoria</option>
								@foreach($categories as $category)
									<option value="{{ $category->id }}" {{ ($post->category_id == $category->id ? 'selected' : null) }}>{{ $category->title }}</option>
								@endforeach
							@else
								<option selected disabled>Por favor crie uma categoria</option>
							@endif
						</select>
					</div>

					<div class="form-group">
						<span>Tag</span>
						<input type="text" name="tag" class="form-control" value="{{ $post->tag }}">
					</div>

					<div class="form-group">
						<span>Status</span>
						<select name="status" class="form-control">
							<option value="0" {{ $post->status == 0 ? 'selected' : null }}>Inativo</option>
							<option value="1" {{ $post->status == 1 ? 'selected' : null }}>Ativo</option>
						</select>
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