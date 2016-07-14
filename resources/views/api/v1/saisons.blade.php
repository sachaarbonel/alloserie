{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('note_spectateurs', 'Note_spectateurs:') !!}
			{!! Form::text('note_spectateurs') !!}
		</li>
		<li>
			{!! Form::label('serie_id', 'Serie_id:') !!}
			{!! Form::text('serie_id') !!}
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