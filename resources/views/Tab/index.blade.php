<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    {{--icon --}}
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 bg-dark bar">
                <h2 class="text-center text-white mt-3 ">profitize</h2>
                <ul class="list-unstyled-none d-flex justify-contact-center mt-5">
                    <li><i class="bi bi-grid text-white p-4"></i></li>
                    <a href="/dashboard" class="text-white"
                        style="text-decoration: none; font-weight: bold; font-size: 16px;">Overview</a>
                </ul>
                <ul class="list-unstyled-none d-flex justify-contact-center">
                    <li><i class="bi bi-gear text-white p-4"></i></li>
                    <a href="{{ route('website.index') }}" class="text-white"
                        style="text-decoration: none; font-weight: bold; font-size: 16px;">Web Setting</a>
                </ul>
                <ul class="list-unstyled-none d-flex justify-contact-center">
                    <li><i class="bi bi-arrows-collapse text-white p-4"></i></li>
                    <a href="{{ route('tab.index') }}" class="text-white"
                        style="text-decoration: none; font-weight: bold; font-size: 16px;">Collapse</a>
                </ul>
                <div class="text-center">
                    <form action="/logout" method="Post">
                        @csrf
                        <button type="submit" class="bg-dark text-white hi fw-bold aq ">LOGOUT</button>
                    </form>
                </div>
            </div>
            <div class="col-9">
                <div class="row-12">
                    <div class="card mt-3 justify-contact-center">
                        <div class="card-body">
                            <form action="{{route('tab.store')}}" method="post">
                                @csrf
                                <h1 class="text-center">Collapse F.A.Q</h1>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>
                                                    {{ $error }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        <b>Success!</b> {{ session('success')}}
                                    </div>
                                @endif
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control">
                                <h5>Description</h5>
                                <textarea id="desc" name="desc" rows="6" cols="90" class="form-control"></textarea>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                </div>
                                </form>a
                                <div class="row-12 mt-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <table class="table">
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                                @foreach($data as $d)
                                                    <tr>
                                                        <td>{{$d->id}}</td>
                                                        <td>
                                                            {{$d->title}}
                                                        </td>
                                                        <td>
                                                            {{$d->desc}}
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <a href="{{route('tab.edit',$d->id)}}"
                                                                    class="btn btn-primary btn-sm me-1">Edit</a>  
                                                                </td>
                                                                <td>
                                                                <form action="{{route('tab.destroy',['tab' => $d->id])}}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>