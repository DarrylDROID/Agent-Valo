<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Forgotten Password - Agent Valo</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="assets/css/Team-icons.css">
    <link rel="stylesheet" href="assets/css/Team-images.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><span>Agent Valo</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="listagent">List Agent</a></li>
                    <li class="nav-item"><a class="nav-link" href="ourteam">Our Team</a></li>
                </ul><a class="btn btn-primary shadow" role="button" href="signup">Sign up</a>
                <a class="ms-2 btn btn-secondary shadow" role="button" href="login">Log in</a>
            </div>
        </div>
    </nav>
    <section class="py-4 py-md-5 mt-5">
        <div class="container py-md-5">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 text-center"><img class="img-fluid w-100" src="assets/img/illustrations/desk.svg"></div>
                <div class="col-md-5 col-xl-4 text-center text-md-start">
                    <h2 class="display-6 fw-bold mb-4">Change your <span class="underline">password</span>?</h2>
                    @if(session('success'))
                    <p class="alert alert-success">{{ session('success') }}</p>
                    @endif
                    @if($errors->any())
                    @foreach($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                    @endforeach
                    @endif
                    <form action="{{ route('password.action') }}" method="POST">   
                        @csrf                    
                        <div class="mb-3"><input class="shadow form-control" type="password" name="old_password" placeholder="Password"></div>
                        <div class="mb-3"><input class="shadow form-control" type="password" name="new_password" placeholder="New Password"></div>
                        <div class="mb-3"><input class="shadow form-control" type="password" name="new_password_confirmation" placeholder="New Password Confirmation"></div>
                        <div class="mb-5"><button class="btn btn-primary shadow" type="submit" href="{{ route('/') }}">Change password</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container py-4 py-lg-5">
            <hr>
            <div class="text-muted d-flex justify-content-between align-items-center pt-3">
                <p class="mb-0">Copyright © 2022 Ngantok IMT</p>
            </div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/startup-modern.js"></script>
</body>

</html>