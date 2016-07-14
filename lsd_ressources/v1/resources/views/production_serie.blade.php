{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('production_id', 'Production_id:') !!}
			{!! Form::text('production_id') !!}
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