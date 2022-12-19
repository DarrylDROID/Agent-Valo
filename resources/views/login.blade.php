<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Log in - Agent Valo</title>
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
                </ul><a class="btn btn-primary shadow" role="button" href="signup">Sign up</a>
                <a class="ms-2 btn btn-secondary shadow" role="button" href="login">Log in</a>
            </div>
        </div>
    </nav>
    <section class="py-4 py-md-5 my-5">
        <div class="container py-md-5">
            <div class="row">
                <div class="col-md-6 text-center"><img class="img-fluid w-100" src="assets/img/illustrations/login.svg"></div>
                <div class="col-md-5 col-xl-4 text-center text-md-start">
                    <h2 class="display-6 fw-bold mb-5"><span class="underline pb-1"><strong>Login</strong><br></span></h2>
                    @if(session('success'))
                    <p class="alert alert-success">{{ session('success') }}</p>
                    @endif
                    @if($errors->any())
                    @foreach($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                    @endforeach
                    @endif
                    <form action="{{ route('login.action') }}" method="POST">
                        @csrf
                        <div class="mb-3"><input class="shadow form-control" type="username" name="username" placeholder="Username" value="{{ old('username') }}"></div>
                        <div class="mb-3"><input class="shadow form-control" type="password" name="password" placeholder="Password"></div>
                        <div class="mb-5"><button class="btn btn-primary shadow" type="submit">Log in</button></div>
                            <p class="text-muted">Doesn't have account? <a href="signup">Sign up&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-arrow-narrow-right">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <line x1="15" y1="16" x2="19" y2="12"></line>
                                <line x1="15" y1="8" x2="19" y2="12"></line>
                            </svg></a>&nbsp;</p>
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