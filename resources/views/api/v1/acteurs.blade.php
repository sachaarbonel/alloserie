{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('saison_id', 'Saison_id:') !!}
			{!! Form::text('saison_id') !!}
		</li>
		<li>
			{!! Form::label('nom', 'Nom:') !!}
			{!! Form::text('nom') !!}
		</li>
		<li>
			{!! Form::label('role', 'Role:') !!}
			{!! Form::text('role') !!}
		</li>
		<li>
			{!! Form::label('photoURL', 'PhotoURL:') !!}
			{!! Form::text('photoURL') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}