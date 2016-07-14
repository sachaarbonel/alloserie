{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('genre_id', 'Genre_id:') !!}
			{!! Form::text('genre_id') !!}
		</li>
		<li>
			{!! Form::label('serie_id', 'Serie_id:') !!}
			{!! Form::text('serie_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}