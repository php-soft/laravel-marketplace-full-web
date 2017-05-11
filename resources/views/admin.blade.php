<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <style type="text/css">
        main li{width: 100px;border-top: 1px solid black}
        main li button{width: 100%;background: none}
        main li:hover{background: #018fca}
        .btn{background: none}
        table{border-collapse: collapse;}
        td,th{border-top: 1px solid black;padding: 1em;}
        #addproduct td,th{border: none}
        .tabcontent{display: none;}
    </style>
</head>
<body>

<div class="container">
    <header>
        Welcome Admin! <a href="">Logout</a>
    </header>
    <main>
        <div style="height:500px;background: #f5f5f5;margin-top: 5%">
            <h1>Chương mục quản lí</h1>
            <div style="float: left;background: #e9e9e9;width: 100px">
                <ul class="nav nav-pills nav-stacked">
                    <li>
                        <button onclick ="openTab(event, 'Thêm Type')" class="tablinks">Thêm Type</button>
                    </li>
                    <li>
                        <button onclick ="openTab(event, 'Thêm Category')" class="tablinks">Thêm Category</button>
                    </li>
                    <li>
                        <button onclick="openTab(event, 'Thêm sản phẩm')" class="tablinks">Thêm/Sửa Product</button>
                    </li>
                </ul>
            </div>
            <div style="float: left;margin-left: 5%">
                <div id="Thêm sản phẩm" class="tabcontent">
                    <h1>Thêm sản phẩm</h1>
                    <table id='addproduct'>
                    {{Form::open(['url'=>'admin/storeProduct','files' => true])}}

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
                        <td>{{ Form::textarea('description') }}</td>
                    </tr>
                    <tr>
                        <td>Code:</td>
                        <td>{{ Form::text('image') }}</td>
                    </tr>
                    <tr>
                        <td>Price:</td>
                        <td>{{ Form::text('price') }}</td>
                    </tr>
                    <tr>
                        <td>Quantity:</td>
                        <td>{{ Form::text('quantity') }}</td>
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
                <div id="Thêm Category" class="tabcontent">
                    <h1>Thêm Category</h1>
                    {{Form::open(['url'=>'admin/storeCategory'])}}
                    Category:{{ Form::text('name') }}
                    Type:{{ Form::select('type_id',$type_pluck)}}
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
                            <td>{{$category->type['name']}}</td>
                        </tr>
                        @endforeach
                    </table>
                    </div>
                </div >
                
                </div >
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
            </div>
        </div>
    </main>
</div>
</body>
</html>