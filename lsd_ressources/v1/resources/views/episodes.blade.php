{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('saison_id', 'Saison_id:') !!}
			{!! Form::text('saison_id') !!}
		</li>
		<li>
			{!! Form::label('synopsis', 'Synopsis:') !!}
			{!! Form::text('synopsis') !!}
		</li>
		<li>
			{!! Form::label('nom', 'Nom:') !!}
			{!! Form::text('nom') !!}
		</li>
		<li>
			{!! Form::label('numero', 'Numero:') !!}
			{!! Form::text('numero') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}