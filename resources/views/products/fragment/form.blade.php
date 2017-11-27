<div class="form-group">
	
	{!! form::label('name', 'Infromacion de la orden')!!}
	{!! form::text('name', null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">
	
	{!! form::label('short', 'Informacion corta')!!}
	{!! form::text('short', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
	
	{!! form::label('body', 'IInfo del la orden')!!}
    </div>

    <div class="form-group">

	{!! form::label('body', 'Informacion de la orden')!!}
	{!! form::text('body', null, ['class' => 'form-control']) !!}


    </div>
    <div class="form-group">

	{!! form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}

    </div>

</div>