<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5.3 - laravel scout algolia search example</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Country</h2>
    <div class="panel panel-primary">
      <div class="panel-heading">Country</div>
      <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <th>Id</th>
                    <th>Name</th>                    
                </thead>
                <tbody>
                    @if($countries->count())
                        @foreach($countries as $key => $country)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $country->name }}</td>                               
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">There are no data.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            {{ $countries->links() }}
      </div>
    </div>
</div>

</body>
</html>