<div class="form-group">
	
	{!! form::label('name', 'Nombre de la orden')!!}
	{!! form::text('name', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">
	
	{!! form::label('short', 'Informacion corta')!!}
	{!! form::text('short', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
	
	
    </div>

    <div class="form-group">

	{!! form::label('body', 'Descripcion de la orden')!!}
	{!! form::text('body', null, ['class' => 'form-control']) !!}


    </div>
    <div class="form-group">

	{!! form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}

    </div>

</div>