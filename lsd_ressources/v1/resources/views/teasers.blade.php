{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('teaserable_id', 'Teaserable_id:') !!}
			{!! Form::text('teaserable_id') !!}
		</li>
		<li>
			{!! Form::label('teaserable_type', 'Teaserable_type:') !!}
			{!! Form::text('teaserable_type') !!}
		</li>
		<li>
			{!! Form::label('videoURL', 'VideoURL:') !!}
			{!! Form::text('videoURL') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}