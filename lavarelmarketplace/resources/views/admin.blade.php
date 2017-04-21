<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table{border-collapse: collapse;}
		td,th{border: 1px solid black}
		#addproduct td,th{border: none}
		.tabcontent{display: none;}
	</style>
</head>
<body>
<a href="{{url('/')}}"  style="float: right;">Quay về</a>
		
			<button onclick ="openTab(event, 'Thêm Category')" class="tablinks"><h1>Thêm Category</h1></button>
			<button onclick="openTab(event, 'Thêm thương hiệu')" class="tablinks"><h1>Thêm thương hiệu</h1></button>
			<button onclick="openTab(event, 'Thêm sản phẩm')" class="tablinks"><h1>Thêm/Sửa sản phẩm</h1></button>
			
		
		<div id="Thêm Category" class="tabcontent">
		<h1>Thêm Category</h1>
		{{Form::open(['url'=>'storeCategory'])}}
		Category:{{ Form::text('name') }}
		Industry:{{ Form::select('industry_id',$industry_pluck)}}
		{{Form::submit('Add')}}
		{{Form::close()}}
		<h2>Danh sách category</h2>
		<table>
			<tr>
				<th>Tên</th>
				<th>Ngành hàng</th>
			</tr>
		@foreach($category_all as $category)
			<tr>
				<td>{{$category->name}}</td>
				<td>{{$category->industry['name']}}</td>
			</tr>
			@endforeach
		</table>
		</div>
	
		<div id="Thêm thương hiệu" class="tabcontent">
		<h1>Thêm thương hiệu</h1>
		{{Form::open(['url'=>'storeTrademark'])}}
		Trademark:{{ Form::text('name') }}
		Industry:{{ Form::select('industry_id',$industry_pluck)}}
		{{Form::submit('Add')}}
		{{Form::close()}}
		<h2>Danh sách Trademark</h2>
		<table>
			<tr>
				<th>Tên</th>
				<th>Ngành hàng</th>
			</tr>
		@foreach($trademark_all as $trademark)
			<tr>
				<td>{{$trademark->name}}</td>
				<td>{{$trademark->industry['name']}}</td>
			</tr>
		@endforeach
		</table >
		</div >
		
		<div id="Thêm sản phẩm" class="tabcontent">
		<h1>Thêm sản phẩm</h1>
	<table id='addproduct'>
	{{Form::open(['url'=>'storeProduct','files' => true])}}

	<tr>
		<td>Product Name:</td>
		<td>{{ Form::text('name') }}</td>
	</tr>
	<tr>
		<td>Image</td>
		<td>{{Form::file('image')}}</td>
	</tr>
	<tr>
		<td>Description:</td>
		<td>{{ Form::text('description') }}</td>
	</tr>
	<tr>
		<td>Price:</td>
		<td>{{ Form::text('price') }}</td>
	</tr>
	<tr>
		<td>Sale:</td>
		<td>{{ Form::text('sale') }}%</td>
	</tr>
	<tr>
		<td>Category:</td>
		<td>{{ Form::select('category_id',$category_pluck)}}</td>
	</tr>
	<tr>
		<td>Trademark:</td>
		<td>{{ Form::select('trademark_id',$trademark_pluck)}}</td>
	</tr>
	<tr>
		<td>Shop:</td>
		<td>{{ Form::select('shop_id',$shop_pluck)}}</td>
	</tr>
	<tr>
		<td></td>
		<td>{{Form::submit('Add')}}</td>
	</tr>
	
	
	{{Form::close()}}
	</table>
	<h2>Danh sách sản phẩm</h2>
	<table>
		<tr>
			<th>Tên</th>
			<th>Giá</th>
			<th>Thể loại</th>
			<th>Thương hiệu</th>
			<th>Cửa hàng</th>
			<th>Image</th>
		</tr>
	@foreach($product_all as $product)
		<tr>
			<td>{{$product->name}}</td>
			<td>{{number_format($product->price)}}</td>
			<td>{{$product->category['name']}}</td>
			<td>{{$product->trademark['name']}}</td>
			<td>{{$product->shop['name']}}</td>
			<td><a href="{{url('update/product/'.$product->id)}}">Update</a></td>
		</tr>
	@endforeach
	</table>
	</div>
	<script>
function openTab(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
</body>
</html>