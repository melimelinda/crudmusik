	<div class="col-xs-12">
		<div class="form-group">
			<strong>Penyanyi : </strong>
			{!! Form::text('penyanyi', null, ['placeholder' => 'Penyanyi', 'class' => 'form-control']) !!}
		</div>
	</div>
	<div class="col-xs-12">
		<div class="form-group">
			<strong>Judul : </strong>
			{!! Form::text('judul', null, ['placeholder' => 'Judul', 'class' => 'form-control']) !!}
		</div>
	</div>
	
	<div class="col-xs-12">
		<div class="form-group">
		<strong>lirik : </strong>
			{!! Form::textarea('lirik', null, ['placeholder' => 'Lirik', 'class' => 'form-control', 'style' => 'height:150px']) !!}
		</div>
	</div>
	<div class="col-xs-12">
		<div class="form-group">
			<strong>Genre : </strong>
			{!! Form::text('genre', null, ['placeholder' => 'Genre', 'class' => 'form-control']) !!}
		</div>
	</div>
	<div class="col-xs-12">
		<a class="btn btn-xs btn-success" href=" {{ route('posts.index') }} ">Back</a>
		<button type="submit" class="btn btn-xs btn-success" name="button" >Submit</button>
	</div>	
</div>