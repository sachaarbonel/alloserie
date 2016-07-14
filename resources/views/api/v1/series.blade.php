{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('note_presse', 'Note_presse:') !!}
			{!! Form::text('note_presse') !!}
		</li>
		<li>
			{!! Form::label('note_spectateurs', 'Note_spectateurs:') !!}
			{!! Form::text('note_spectateurs') !!}
		</li>
		<li>
			{!! Form::label('nombre_fan', 'Nombre_fan:') !!}
			{!! Form::text('nombre_fan') !!}
		</li>
		<li>
			{!! Form::label('nationalite', 'Nationalite:') !!}
			{!! Form::text('nationalite') !!}
		</li>
		<li>
			{!! Form::label('statut', 'Statut:') !!}
			{!! Form::text('statut') !!}
		</li>
		<li>
			{!! Form::label('format', 'Format:') !!}
			{!! Form::text('format') !!}
		</li>
		<li>
			{!! Form::label('synopsis', 'Synopsis:') !!}
			{!! Form::text('synopsis') !!}
		</li>
		<li>
			{!! Form::label('miniatureURL', 'MiniatureURL:') !!}
			{!! Form::text('miniatureURL') !!}
		</li>
		<li>
			{!! Form::label('posterURL', 'PosterURL:') !!}
			{!! Form::text('posterURL') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}