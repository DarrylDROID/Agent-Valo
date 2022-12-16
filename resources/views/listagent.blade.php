<!DOCTYPE html>
<html lang="en">

<<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Agent Valo</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><span>Agent Valo</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="listagent">List Agent</a></li>
                    <li class="nav-item"><a class="nav-link" href="ourteam">Our Team</a></li>
                </ul>
                @auth
                <a class="btn btn-primary" href="{{ route('password') }}">Change password</a></div>
                <a class="ms-2 btn btn-danger" href="{{ route('logout') }}">Logout</a>
                @endauth
                @guest
                <a class="btn btn-primary shadow" role="button" href="{{ route('signup') }}">Sign up</a> 
                <a class="ms-2 btn btn-secondary shadow" role="button" href="{{ route('login') }}">Log in</a>
                @endguest
            </div>
        </div>
    </nav>
    <header class="pt-5">
        <div class="container pt-4 pt-xl-5">
            <div class="row pt-5">
                <div class="col-md-8 text-center text-md-start mx-auto">
                    <div class="text-center">
                        <h1 class="display-4 fw-bold mb-5">List Agent</h1>
                        <p class="fs-5 text-muted mb-5">Here are the list of agents that are currently available to play in the game.</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 row-cols-1 row-cols-md-2">
            <div class="col">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="w-100"><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" /></div>
                    <div class="py-4 py-lg-0 px-lg-4">
                        <h4>Jett</h4>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="w-100"><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" /></div>
                    <div class="py-4 py-lg-0 px-lg-4">
                        <h4>Sova</h4>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="w-100"><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" /></div>
                    <div class="py-4 py-lg-0 px-lg-4">
                        <h4>Reyna </h4>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="w-100"><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" /></div>
                    <div class="py-4 py-lg-0 px-lg-4">
                        <h4>Brimstone</h4>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Break -->
        <br>
        <!-- Break -->
        <div class="row gy-4 row-cols-1 row-cols-md-2">
            <div class="col">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="w-100"><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" /></div>
                    <div class="py-4 py-lg-0 px-lg-4">
                        <h4>Jett</h4>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="w-100"><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" /></div>
                    <div class="py-4 py-lg-0 px-lg-4">
                        <h4>Sova</h4>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="w-100"><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" /></div>
                    <div class="py-4 py-lg-0 px-lg-4">
                        <h4>Reyna </h4>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="w-100"><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" /></div>
                    <div class="py-4 py-lg-0 px-lg-4">
                        <h4>Brimstone</h4>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>