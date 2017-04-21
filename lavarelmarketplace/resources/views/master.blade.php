<!DOCTYPE html>
<html>
<head>
	<title>LARAVEL MARKETPLACE FULL WEB</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
	
</head>
<body onload="openTab(event, 'Khyen mai')">
<header>
	<div>
			<ul>
			<li><a href="{{url('admin')}}" style="color:#f36f36;">Admin</a></li>
			<li><a href="">CHANGE LANGUAGE</a></li>
			<li><a href="">Đăng kí</a></li>
			<li><a href="">Đăng nhập</a></li>
			<li><a href="">Kiểm tra đơn hàng</a></li>
			<li><a href="">Chăm Sóc khách hàng</a></li>
			<li><a href="" style="color:#0dfffa;">BÁN HÀNG CÙNG MARKETPLACE</a></li>
			<li><a href="" style="color:#f36f36;">Tai APP MARKETPLACE</a></li>
		</ul>
	</div>
	<nav>
		<a href="{{url('/')}}"><img src="{{asset('images/marketplace.png')}}" style="float: left;margin-left: 4em;"></a>
		
		<input type="text" name="" placeholder="Tim kiem san pham ban mong muon..." id='inputSeach' >
		<a href=""><img src="{{asset('images/seachIcon.png')}}" style='margin-top:1.5em;float: left;'></a>
		<a href="{{url('viewcart')}}" >
		<span style="color:#199191;padding-top: 2em;float: left; ">
		<img src="{{asset('images/giohang.png')}}" style="margin-left: 1em;padding: 0">
		<sup class="badge" style="background:#f36f36;margin: 0; ">{{Cart::count()}}</sup></span></a>
		
	</nav>
	<section>
		<ul>
			@foreach($industry_all as $industry)
				<li><a href="">{{ $industry->name }}</a>
					<ul>
				 	@foreach($category_all as $category)
				 		@if( $category->industry_id == $industry->id)
				 		<li><a href="{{url('showbycategory/'.$category->id)}}">{{ $category->name }}</a></li>
				 		@endif
				 	@endforeach
				 	<li style="float: left;clear: both;margin-top: 1em;font-size: 120%;color:#f36f36 ">Thương hiệu hàng đầu</li>
				 	<li style="clear: both"></li>
				 	@foreach($trademark_all as $trademark)
				 		@if( $trademark->industry_id == $industry->id)
				 		<li style="float: left;;"><a href="{{url('showbytrademark/'.$trademark->id)}}">{{ $trademark->name }}</a></li>
				 		@endif
				 	@endforeach
					<li style="float: left;clear: both;margin-top: 1em;font-size: 120%;color:#f36f36">Cửa hàng bán lẻ</li>
				 	<li style="clear: both"></li>
				 	@foreach($shop_all as $shop)
				 		@if( $shop->industry_id == $industry->id)
				 		<li style=""><a href="{{url('showbyshop/'.$shop->id)}}">{{ $shop->name }}</a></li>
				 		@endif
				 	@endforeach
				 	</ul>
				</li>
			@endforeach
			
			<li><a href=""  style="color:#f36f36;">Khuyến mãi</a>
				<ul>
					<li style="float: left;clear: both;margin-top: 1em;font-size: 120%;color:#f36f36 ">Lọc sản phẩm khuyến mãi theo ngành hàng</li>
					<li style="clear: both"></li>
					@foreach($industry_all as $industry)
					<li><a href="">{{ $industry->name }}</a>
					@endforeach
				</ul>	
			</li>
			<li><a href="">Thương hiệu lớn</a></li>
		</ul>
	</section>
</header>

<main>
@section('content')
	<div>
		<ul>
			<li id='khuyenmaiTab' onmouseover="openTab(event, 'Khyen mai')" class="tablinks"><a href="" >Khyến mãi Hot</a></li>
			<li onmouseover="openTab(event, 'Thuong hieu noi bat')" class="tablinks"><a href="" >Thuong hieu noi bat</a></li>
			<li onmouseover="openTab(event, 'Danh muc nganh hang')" class="tablinks"><a href="" >Danh muc&nganh hang</a></li>
			<li id='samsungTab'onmouseover="openTab(event, 'Tuan le SamSumg')" class="tablinks"><a href="" >Tuan le SamSumg</a></li>
		</ul>
	</div>


<div id="Khyen mai" class="tabcontent">
  <h3>Khyen mai</h3>
  <p>Mac hang Khyen mai</p>
</div>

<div id="Thuong hieu noi bat" class="tabcontent">
  <h3>Thuong hieu noi bat</h3>
  <p>Cac Thuong hieu noi bat.</p> 
</div>

<div id="Danh muc nganh hang" class="tabcontent">
  <h3>Danh muc&nganh hang</h3>
  <p> Cac Danh muc&nganh hang</p>
</div>
<div id="Tuan le SamSumg" class="tabcontent">
  <h3>Tuan le SamSumg</h3>
  <p> Mac hang Tuan le SamSumg</p>
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
@if(!empty($category_name))<h1>MARKETPLACE/{{$category_name}}</h1>@endif
@if(!empty($shop_name))<h1>MARKETPLACE/{{$shop_name}}</h1>@endif
@if(!empty($trademark_name))<h1>MARKETPLACE/{{$trademark_name}}</h1>@endif

@if(empty($product))

@foreach($product_all as $product)
<div style="width: 250px;height: 450px;float: left;margin: 1em;position: relative;">
<a href="{{url('showoneproduct/'.$product->id)}}">
<img src="{{asset('images/'.$product->id.'.png')}}" style="width: 200px;height: 200px">
<h4>{{ $product->name }}</h4>
</a>
<h4>Đánh giá</h4>
<h3>Giá:{{ number_format($product->price )}}
<h4></h4>
@if($product->sale>0)<h4>Sale:<span style="font-size: 100%;background: red;padding: .3em" >-{{number_format($product->sale,0)}}%</span></h4>@endif</h3>
<br>
<a href="{{url('addtocart/'.$product->id)}}" class="muangay">Mua ngay</a>

</div>
@endforeach
</main>
@endif
@show

<footer>
	<h2>Develop by PHP16's team</h2>
</footer>

</body>
</html>