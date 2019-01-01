@extends('posts.master')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<br>
			<h3 align="center">Data Musik</h3>
			<br>
			<br>
		</div>
	</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="pull-right">
					<a style="margin-right: 967px" class="btn btn-xs btn-dark" href="{{ route('posts.create') }} " align="right">Tambah Data</a>
				</div>
				<br>
			</div>
		</div>

@if($message = Session::get('success'))
	<div class="alert alert-success">
		<p> {{ @message }} </p>
	</div>
@endif

<table class="table table-bordered">
	<tr style="background-color: grey">
		<th>No.</th>
		<th>Penyanyi</th>
		<th>Judul</th>
		<th>Lirik</th>
		<th>Genre</th>
		<th width="225px">Actions</th>
	</tr>

	@foreach($posts as $post)
		<tr>
			<td> {{++$i}} </td>
			<td> {{$post -> penyanyi}} </td>
			<td> {{$post -> judul}} </td>
			<td> {{$post -> lirik}} </td>
			<td> {{$post -> genre}} </td>
			<td>
				<a class="btn btn-dark" href=" {{route('posts.show', $post -> id)}} ">Show</a>

				<a class="btn btn-dark" href=" {{route('posts.edit', $post -> id)}} ">Edit</a>

				{!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post -> id], 'style' => 'display:inline']) !!}

				{!! Form::submit('Delete', ['class' => 'btn btn-xs btn-danger']) !!}

				{!! Form::close() !!}
			</td> 
		</tr>
	@endforeach
</table>

{!! $posts -> links() !!}

@endsection