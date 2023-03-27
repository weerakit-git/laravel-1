<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 mt-4 ">
                <h2>Add data</h2>
            </div>
            <div class="mt-3">
                <a href="{{ route('data.index') }}" class="btn btn-primary mb-3"  >Back</a>
            </div>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <form action=" {{ route('data.store') }}" method="POST" enctype="multipart/form-data"   >
                @csrf 
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Name</strong>
                            <input type="text" name="name" class="form-control" placeholder="Plaes enter name">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Email</strong>
                            <input type="email" name="email" class="form-control" placeholder="Plaes enter email">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Address</strong>
                            <input type="text" name="address" class="form-control" placeholder="Plaes enter address">
                            @error('address')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="Submit" class="btn btn-info col-2 mt-3" >Submit</button>
                </div>
            </form>
        </div>

    </div>

    
</body>
</html>