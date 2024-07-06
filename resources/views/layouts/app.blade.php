<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
.hi{
  height: 800px;
  border:none;

}
</style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 bg-dark text-white" style="min-height: 620px" ;>
                <h3 class="text-center m-4">Task TODO</h3>
                <div class="text-center">
                    <a href="" class="btn btn-dark text-white  px-5">DASHBOARD</a>
                    <a href="/auth/setting" class="btn btn-dark text-white  px-5">WEBSITE SETTING</a>
                </div>
                <div class="text-center ">
                    <form action="/logout" method="Post">
                        @csrf
                        <button type="submit" class="bg-dark text-white hi fw-bold">LOGOUT</button>
                    </form>
                </div>
            </div>
            <div class="col-9">
                <h1 class="m-4 fw-bold">Welcome Username</h1>
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body d-flex justify-content-between">
                                <h3 class="m-0">Total Visiters</h3>
                                    <h1 class="mt-5 fw-bold">2000</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body d-flex justify-content-between">
                                <h3 class="m-0">Total Visiters</h3>
                                <h1 class="mt-5 fw-bold">2000</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body d-flex justify-content-between">
                                <h3 class="m-0">Total Visiters</h3>
                                <h1 class="mt-5 fw-bold">2000</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>