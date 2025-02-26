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
                    <a href="/dashboard" class="text-white" style="text-decoration: none; font-weight: bold; font-size: 16px;">Overview</a>  
                </ul>
                <ul class="list-unstyled-none d-flex justify-contact-center">
                    <li><i class="bi bi-gear text-white p-4"></i></li>
                    <a href="{{ route('website.index') }}" class="text-white" style="text-decoration: none; font-weight: bold; font-size: 16px;">Web Setting</a>  
                </ul>
                <ul class="list-unstyled-none d-flex justify-contact-center">
                    <li><i class="bi bi-arrows-collapse text-white p-4"></i></li>
                    <a href="{{ route('tab.index') }}" class="text-white" style="text-decoration: none; font-weight: bold; font-size: 16px;">Collapse</a>  
                </ul>
                <div class="text-center">
                    <form action="/logout" method="Post">
                        @csrf
                        <button type="submit" class="bg-dark text-white hi fw-bold aq ">LOGOUT</button>
                    </form>
                </div>
            </div>
            <div class="col-9">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>

</body>

</html>