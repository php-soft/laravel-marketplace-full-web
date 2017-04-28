<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link rel="stylesheet" type="text/css" href="{{'css/main.css'}}">
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
			<li><a href="">Dang ki</a></li>
			<li><a href="">Dang nhap</a></li>
			<li><a href="">Kiem Tra don Hang</a></li>
			<li><a href="">Cham Soc Khach Hang</a></li>
			<li><a href="" style="color:#0dfffa;">BAN HANG MARKETLACE</a></li>
			<li><a href="" style="color:#f36f36;">Tai APP</a></li>
		</ul>
	</div>
	<nav>
		<a href=""><img src="{{'images/lazada.png'}}" style="float: left;margin-left: 4em;"></a>

		<input type="text" name="" placeholder="Tim kiem san pham ban mong muon..." id='inputSeach' >
		<a href=""><img src="{{'images/seachIcon.png'}}" style='margin-top:1.5em;'></a>
		<img src="{{asset('images/giohang.png')}}" style="margin-left: 1em;padding: 0">
		<sup class="badge" style="background:#f36f36;margin: 0; ">{{Cart::count()}}</sup></span></a>
	</nav>
	<section>
		<ul>

			@foreach($type_all as $type)
				<li><a href="">{{ $type->name }}</a>
					<ul>
						<li style="float: left;clear: both;margin-top: 1em;font-size: 120%;color:#f36f36">Thể loại</li>
				 		<li style="clear: both"></li>
				 	@foreach($category_all as $category)
				 		@if( $category->type_id == $type->id)
				 		<li><a href="">{{ $category->name }}</a></li>
				 		@endif
				 	@endforeach
				 	<li style="float: left;clear: both;margin-top: 1em;font-size: 120%;color:#f36f36">Cửa hàng bán lẻ</li>
				 	<li style="clear: both"></li>
				 	@foreach($shop_all as $shop)
				 		@if( $shop->type_id == $type->id)
				 		<li style=""><a href="{{url('showbyshop/'.$shop->id)}}">{{ $shop->name }}</a></li>
				 		@endif
				 	@endforeach
				 	
				 	</ul>
				</li>
			@endforeach
			
			<li><a href=""  style="color:#f36f36;">Khuyen mai</a></li>
			<li><a href="">Thương hiệu lớn</a></li>
		</ul>
	</section>
</header>
<main>
	<div>
		<ul>
			<li id='khuyenmaiTab' onmouseover="openTab(event, 'Khyen mai')" class="tablinks"><a href="" >Khyen mai</a></li>
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

@foreach($product_all as $product)
<div style="width: 250px;height: 250px;float: left;">
<img src="{{'images/'.$product->id.'.png'}}" style="width: 200px;height: 200px">
<h3>{{ $product->name }}</h3><br>
<h3>Giá:{{number_format($product->price) }}</h3>
<h5>{{ $product->description}}</h5>
<a href="" class="muangay">Mua ngay</a>

</div>
@endforeach
</main>


<footer>
	<h2>Develop by PHP16's team</h2>
</footer>
</body>
</html>