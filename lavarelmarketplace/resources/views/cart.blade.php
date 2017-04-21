<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		th,td{border: 0px solid black;margin-right: 2em;}
		.soluong a{text-decoration: none;display: inline;background: #f1f1f1;font-size: 120%;font-weight: bold;color: #dfe0d0}
		.soluong a:hover{color: red}
	</style>
</head>
<body>
<h1>Giỏ hàng của tôi</h1>
<h3><a href="{{url('/')}}">Tiếp tục mua hàng</a></h3>
@foreach($cart_all as $cart)
	<table>
		<tr>
			<td>SẢN PHẨM</td>
			<td>GIÁ</td>
			<td>SỐ LƯỢNG</td>
		</tr>
		<tr>
			<td><img src="{{asset('images/'.$cart->id.'.png')}}"  style="width: 150px;height:150px;float: left;margin-right: 3em;">
			{{$cart->name}}<br></td>
			<td><h3>{{number_format($cart->price)}}</h3></td>
			<td class="soluong"><a href="{{url('desc_cart/'.$cart->rowId)}}">   -   </a><span style="padding: 1em;">{{$cart->qty}}</span><a href="{{url('inc_cart/'.$cart->rowId)}}">  +  </a></td>
			<td><a href="{{url('removecart/'.$cart->rowId)}}">Xóa</a></td>
		</tr>
	</table>
@endforeach
<h2>Thông tin đơn hàng</h2>
<h3>Tổng tiền:{{Cart::subtotal()}}</h3>
<h3><a href="">Tiến hành thanh toán</a></h3>
</body>
</html>