<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{asset('assets/clients/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/style.css')}}">
</head>
<body>
    <main class="main">
        <div class="container-fuild mt-5 mb-5">
            <div class="title">
                <h1>{{$title}}</h1>
            </div>
        </div>
        <div class="container">
            <div class="row form">
                <div class="col-6">
                    <form action="#" method="POST">
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text"  class="form-control" id="staticEmail" value="email@example.com">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-3">
                                <button type="button">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </main>
</body>
</html>
