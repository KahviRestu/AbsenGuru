<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('style/bglogin.css')}}">
<link href="https://fonts.googleapis.com/css?family=Alex+Brush&display=swap" rel="stylesheet">
    <div class="bg-login">
        <div class="container">
            <div class="card">
                <div class="row">
                    <div class=" col-md-6">
                        <div class="bgfront"></div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="login">
                            <h1 class="text-center head">Login Now</h1> 
                            <form class="flogin mt-3" action="/postlogin" method="POST">
                            {{csrf_field()}}
                               <div class="form-group">
                                   <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                               </div>
                               <div class="form-group">
                                   <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                               </div>
                               <button type="submit" class="btn btn-primary btn-lg btn-block">Login Now</button>
                           </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>