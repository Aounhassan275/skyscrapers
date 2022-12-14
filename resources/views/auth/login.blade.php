<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Teacher Management System">
    <title>LOGIN | TEACHER MANAGEMENT SYSTEM</title>   
	<!-- CSS START -->
        <link rel="preconnect" href="{{asset('//fonts.gstatic.com/')}}'" crossorigin="">
        <link href="{{asset('assets/css/classic.css')}}" rel="stylesheet">	
    <!-- CSS END -->
</head>
<!-- BODY START -->
    <body>
        <!-- MAIN CONTENT START -->
            <main class="main d-flex justify-content-center w-100">
                <div class="container d-flex flex-column">
                    <div class="row h-100">
                        <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                            <div class="d-table-cell align-middle">
            
                                <div class="text-center mt-4">
                                    <h1 class="h2">Welcome back, Teacher Management System</h1>
                                    <p class="lead">
                                        Sign in to your account to continue
                                    </p>
                                </div>
            
                                <div class="card">
                                    <div class="card-body"> 
                                        <div class="m-sm-4">
                                        <form method="POST" action="{{route('login')}}">
                                            @csrf
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control form-control-lg" type="email" name="email" value="user1@mail.com" placeholder="Enter your email">
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input class="form-control form-control-lg" type="password" name="password" value="1234" placeholder="Enter your password">
                                                </div>
                                                <div class="text-center mt-3">
                                                    <button type="submit" class="btn btn-lg btn-primary">Sign in</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
            
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        <!-- MAIN CONTENT END -->
        <!-- Javascript START -->
            <script src="{{asset('assets/js/app.js')}}"></script>
        <!-- Javascript END -->
    </body>
<!-- BODY END -->
</html>