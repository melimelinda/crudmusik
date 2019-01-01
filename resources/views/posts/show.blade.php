@extends('posts.master')

@section('content')
		<div class="row">
			<div class="col-lg-12">
				<div class="pull-left">
					<h3>Tampil Data Musik</h3> 
				</div>
			</div>
		</div>

			<div class="col-xs-12">
				<div class="form-group">
					<strong>Penyanyi : </strong>
					{{ $post -> penyanyi }}
				</div>
			</div>  
			<div class="col-xs-12">
				<div class="form-group">
					<strong>Judul : </strong>
					{{ $post -> judul }}
				</div>
			</div> 
			<div class="col-xs-12">
				<div class="form-group">
					<strong>Lirik : </strong>
					{{ $post -> lirik }}
				</div>
			</div>
			<div class="col-xs-12">
				<div class="form-group">
					<strong>Genre : </strong>
					{{ $post -> genre }}
				</div>
			</div> 
			<a class="btn btn-xs btn-success" href="{{ route('posts.index') }} ">Back</a>

		</div>		


@endsection