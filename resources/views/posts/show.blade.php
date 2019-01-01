@extends('posts.master')

@section('content')
		<div class="row">
			<div class="col-lg-12">
				<div class="pull-left">
					<h3 align="center">Tampil Data Musik</h3> 
					<br>
					<br>
				</div>
			</div>
		</div>
			<center>
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
					<strong>Genre : </strong>
					{{ $post -> genre }}
				</div>
			</div> 
			<div class="col-xs-12">
				<div class="form-group">
					{{ $post -> lirik }}
				</div>
			</div>
			</center>
			<a class="btn btn-xs btn-dark" href="{{ route('posts.index') }} ">Back</a>

		</div>		


@endsection