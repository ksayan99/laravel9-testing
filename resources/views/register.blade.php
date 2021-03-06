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
    <link rel="stylesheet" href="{{asset('custom.css')}}">
    <title> > Laravel 9 Crud </title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
                <form method="post" action="{{route('createAction')}}">
                    @csrf
                    <div class="mb-3">
                        <label class="mb-2">{{__('create.name') }}</label>
                        <input type="text" class="form-control" name='name'>
                        @error('name')
                            <div class="alert2 alert-danger msg">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="mb-2">{{__('create.email') }}</label>
                        <input type="email" class="form-control" name='email'>
                        @error('email')
                            <div class="alert2 alert-danger msg">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="mb-2">{{__('create.mob') }}</label>
                        <input type="text" class="form-control" name='mobile'>
                        @error('mobile')
                            <div class="alert2 alert-danger msg">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="mb-2">{{__('create.pass') }}</label>
                        <input type="password" class="form-control" name='password'>
                        @error('password')
                            <div class="alert2 alert-danger msg">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">{{__('create.register')}}</button>
                        <button type="reset" class="btn btn-primary">{{__('create.reset')}}</button>
                    </div>
                </form>
                @if (session()->has('status'))
                <div class="alert alert-success mb-4" role="alert">{{ session('status') }}</div>
                @endif
            </div>
            <div class="col-sm-8">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">{{__('create.serial') }}</th>
                            <th scope="col">{{__('create.display-name') }}</th>
                            <th scope="col">{{__('create.display-mail') }}</th>
                            <th scope="col">{{__('create.display-mob') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!$data->isEmpty())
                            @php $slno = 1; @endphp
                            @foreach ($data as $item)    
                            <tr>
                                <th scope="row">{{ $slno++ }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->mobile }}</td>
                                <td><button type="button" class="btn btn-warning" onclick="location.href='/edit/{{$item->uid}}'">Update</button></td>
                                <td><button type="button" class="btn btn-danger" onclick="location.href='/delete/{{$item->uid}}'">Delete</button></td>
                            </tr>
                            @endforeach
                        @else <tr><td colspan="4" align="center">Register Someone to Display Data</td></tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
