

{!! Form::model($product, [
							'method' => 'PATCH',
							'action' => ['productController@update', $product->id ]
							]) !!}

	@include('admin.product.form',['submiteText' => 'update'])

{!! Form::close() !!}