<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title> > Laravel 9 Crud </title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
                @foreach ($data as $item)
                <form method="post" action="">
                    @csrf @method('put')
                    <div class="mb-3">
                        <label for="exampleInputName1" class="mb-2">Your Full Name</label>
                        <input type="text" class="form-control" name='name' value="{{ $item->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="mb-2">Email Address</label>
                        <input type="email" class="form-control" name='email' value="{{ $item->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPhone1" class="mb-2">Mobile Number</label>
                        <input type="text" class="form-control" name='mobile' value="{{ $item->mobile }}">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Update Records</button>
                    </div>
                </form>
                @endforeach
                @if (session()->has('status'))
                <div class="alert alert-success mb-4" role="alert">{{ session('status') }}</div>
                @endif
            </div>
        </div>
    </div>
</body>

</html>