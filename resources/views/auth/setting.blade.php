<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .hi {
            height: 800px;
            border: none;

        }
    </style>
</head>

<body>
    <div class="container-fluid  ">
        <div class="row">
            <div class="col-3 bg-dark text-white" style="min-height: 620px" ;>
                <h3 class="text-center m-4">Task TODO</h3>
                <div class="text-center">
                    <button type="submit" class="btn btn-dark text-white  px-5">DASHBOARD</button>
                    <button type="submit" class="btn btn-dark text-white  px-5">WEBSITE SETTING</button>
                </div>
                <div class="text-center ">
                    <form action="/logout" method="Post">
                        @csrf
                        <button type="submit" class="bg-dark text-white hi fw-bold">LOGOUT</button>
                    </form>
                </div>
            </div>
            <div class="col-9">
                <div class="card mt-4">
                    <div class="card-body">
                        <h1 class="text-center fw-bold">Details About Contact</h1>
                        <form action="" method="post">
                            @csrf
                            <label for="email">Email</label>
                            <input type="text" name="email" placeholder="contact@example.com" class="form-control">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" placeholder="+1 56555 34555" class="form-control">
                            <hr>
                             <h1 class="text-center fw-bold">Social Media</h1>
                            <hr>
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" name="twitter" placeholder="twitter" class="form-control">
                                </div>
                                <div class="col-6">
                                    <input type="" name="facebook" placeholder="facebook" class="form-control">
                                </div> 
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">
                                    <input type="text" name="instagram" placeholder="instagram" class="form-control">
                                </div>
                                <div class="col-6">
                                    <input type="" name="linkedin" placeholder="linkedin" class="form-control">
                                </div> 
                            </div>
                                <div>
                                    <button type="submit" class="btn-lg btn btn-primary mt-4">Submit</button>
                                </div>
                        </form>
                    </div>
                </div>



            </div>
        </div>
    </div>
    </div>

</body>

</html>