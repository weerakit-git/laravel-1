<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Index</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Laravel CRUD</h2>
            </div>
            <div>
                <a href="{{ route('data.create') }}" class="btn btn-success mb-3"  >Create Post</a>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif

            <table class="table table-bordered">
                <tr>
                    <th>NO.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th width="280px" >Action</th>
                </tr>
                @foreach($webdata as $web)
                    <tr>
                        <td>{{ $web->id }}</td>
                        <td>{{ $web->name }}</td>
                        <td>{{ $web->email }}</td>
                        <td>{{ $web->address }}</td>
                        <td>
                            <form action="{{ route('data.destroy', $web->id)  }}"  method="POST" >
                                    <a href="{{ route('data.edit', $web->id) }}"  class="btn btn-warning">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
              {!! $webdata->links('pagination::bootstrap-4') !!}

        </div>
    </div>


</body>
</html>