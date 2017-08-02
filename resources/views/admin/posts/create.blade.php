@extends('admin.master.app')

@section('admin')
	@include('admin.includes.menu')

	<main class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				
				<header>
					<h1>Novo Post</h1>
				</header>

				@if(count($errors) > 0)
					<div class="alert alert-warning">
						@foreach($errors->all() as $error)
							<p>{{ $error }}</p>
						@endforeach
					</div>
				@endif

				<form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}

					<div class="form-group">
						<span>Imagem destacada</span>
						<input type="file" name="image" class="form-control">
					</div>

					<div class="form-group">
						<span>Titulo</span>
						<input type="text" name="title" class="form-control" value="{{ old('title') }}">
					</div>

					<div class="form-group">
						<span>Subtítulo</span>
						<textarea name="subtitle" cols="30" rows="10" class="form-control">{{ old('subtitle') }}</textarea>
					</div>

					<div class="form-group">
						<span>Conteúdo</span>
						<textarea name="body" cols="30" rows="10" class="form-control tinymce">{{ old('body') }}</textarea>
					</div>

					<div class="form-group">
						<span>Categoria</span>
						<select name="category_id" class="form-control">
							@if($categories->count() > 0)
								<option selected>Selecione um categoria</option>
								@foreach($categories as $category)
									<option value="{{ $category->id }}">{{ $category->title }}</option>
								@endforeach
							@else
								<option selected disabled>Por favor crie uma categoria</option>
							@endif
						</select>
					</div>

					<div class="form-group">
						<span>Status</span>
						<select name="status" class="form-control">
							<option value="0">Inativo</option>
							<option value="1">Ativo</option>
						</select>
					</div>

					<div class="form-group">
						<button class="btn btn-primary">
							Cadastrar
						</button>
					</div>

				</form>

			</div>
		</div>
	</main>

@endsection