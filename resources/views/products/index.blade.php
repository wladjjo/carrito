@extends('layout')

@section('content')
     
     <div class="col-sm-8">
     	<h2>
     	Listado
     	<a href="{{route('products.create')}}" class="btn btn-primary pull-right">Nuevo</a>
     	</h2>


     	 <div class="col-md-6 text-right">
          <form action="{{ route('products.index') }}" method="GET" class="form-inline">
              <div class="form-group">
                  <input type="text" class="form-control" name="s" placeholder="Buscar...">
              </div>
              <div class="form-group"> 
              <button class="btn btn-success" type="submit">Buscar</button>

              </div>
          </form>
         </div>

           @include('products.fragment.info')

     	<table class="table table-hover table-striped">
     	  <thead>
     	  	<tr>
     	  		<th width="20px">ID</th>
     	  		<th>Nombre de la orden. (En negritas)</th>
     	  		<th colspan="3">&nbsp</th>
     	  	</tr>
     	  </thead>
     		
     		<tbody>
     			@foreach($products as $product)
     			<tr>
     				<td>{{$product->id }}</td>

     				<td> <strong>
     				{{$product->name }}
     				</strong> <br>
     				{{ $product->short }}
     				</td>
     				<td>
                         <a href="{{ route('products.show', $product->id) }}" class="btn btn-link">Ver</a>
                         </td>
     				<td>
                         <a href="{{ route('products.edit', $product->id) }}" class="btn btn-link">Editar
                         </a>
                         </td>

     				<td>
                           <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                           {{ csrf_field() }}
                           <input type="hidden" name="_method" value="DELETE">
                           <button class="btn btn-link">Eliminar</button>
                                
                           </form>
                         </td>
     			</tr>
     			@endforeach
     		</tbody>
     	</table>
     	{!! $products->render() !!}
     </div>
     <div class="col-sm-4">
           @include('products.fragment.aside')
     </div>

@endsection