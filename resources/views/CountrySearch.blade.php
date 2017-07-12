<!DOCTYPE html>
<html>
<head>
    <title>Laravel 5.3 - laravel scout algolia search example</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h2>Laravel Full Text Search using Scout and algolia</h2>


    

    <div class="panel panel-primary">
      <div class="panel-heading">Country</div>
      <div class="panel-body">
            <form method="GET" action="{{ route('Search') }}">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="namesearch" class="form-control" placeholder="Enter Name For Search Country" value="{{ old('namesearch') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <button class="btn btn-success">Search</button>
                        </div>
                    </div>
                </div>
            </form>

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