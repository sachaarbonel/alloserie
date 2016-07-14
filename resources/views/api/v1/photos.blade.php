{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('saison_id', 'Saison_id:') !!}
			{!! Form::text('saison_id') !!}
			{!! Form::label('imageURL', 'Saison_id:') !!}
			{!! Form::text('imageURL') !!}
		</li>
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}