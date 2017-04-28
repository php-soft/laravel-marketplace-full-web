<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="Thêm sản phẩm" class="tabcontent">
		<h1>Thêm sản phẩm</h1>
	<table>
	{{Form::open(['url'=>'updateProduct','files'=>'true'])}}
	<tr>
		<td>Product Name:</td>
		<td>{{ Form::text('name',$product->name,['disable'=>true]) }}</td>
	</tr>
	<tr>
		<td>Image</td>
		<td>{{Form::file('image')}}</td>
	</tr>
	<tr>
		<td>Description:</td>
		<td>{{ Form::text('description',$product->description) }}</td>
	</tr>
	<tr>
		<td>Price:</td>
		<td>{{ Form::text('price',$product->price) }}</td>
	</tr>
	<tr>
		<td>Sale:</td>
		<td>{{ Form::text('sale',$product->sale) }}%</td>
	</tr>
	<tr>
		<td>Category:</td>
		<td>{{ Form::select('category_id',$category_pluck)}}</td>
	</tr>
	<tr>
		<td>Shop:</td>
		<td>{{ Form::select('shop_id',$shop_pluck)}}</td>
	</tr>
	<tr>
		<td></td>
		<td>{{Form::submit('Update')}}</td>
	</tr>
	
	{{Form::hidden('id',$product->id)}}
	{{Form::close()}}
	</table>
	
	</div>
</body>
</html>