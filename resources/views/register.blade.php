<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('img/logo.jpg')}}" />
    <title>{{ $title }} | KLI KRONOPOS</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <style>
        .bg-login-image {
            background:url('img/3.png') !important;
        }
    </style>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg" style="margin:10% 0;">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Create an Account</h1>
                                    </div>
                                    <form class="user" action="/register" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="exampleInputEmail" name="email" placeholder="Enter Email Address..." value="{{ old('email') }}">
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>                                            
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="name" class="form-control form-control-user  @error('name') is-invalid @enderror" id="name"  name="name" placeholder="Enter Name User" value="{{ old('name') }}">
                                            @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>                                            
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="name" class="form-control form-control-user  @error('vendor') is-invalid @enderror" id="vendor"  name="vendor" placeholder="Enter Nama Vendor" value="{{ old('vendor') }}">
                                            @error('vendor')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>                                            
                                                @enderror
                                        </div>
                                       
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user  @error('password') is-invalid @enderror" name="password" placeholder="Password">
                                            @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>                                            
                                                @enderror
                                        </div>

                                        <div class="input-group my-3"> 
                                            <select class="custom-select select-group-lg rounded-pill @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}"> 
                                                <option selected disabled>Role</option> 
                                                <option value="vendor">Vendor</option> 
                                                <option value="ar_team">AR Team</option> 
                                                <option value="fleet">Fleet</option> 
                                                <option value="finance">Finance</option> 
                                                <option value="super_admin">Super Admin</option> 
                                            </select> 
                                            @error('role')
                                                <div class="invalid-feedback"> {{ $message }} </div>
                                            @enderror
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Register Account
                                        </button>
                                    
                                    </form>
                                    <hr>
                                 
                                    <div class="text-center">
                                        <a class="small" href="/">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>

</html>