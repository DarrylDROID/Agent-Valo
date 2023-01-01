<!DOCTYPE html>
<html lang="en">

<<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Agent Valo</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Raleway:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    </head>

    <body>
        <nav class="navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3" id="mainNav">
            <div class="container"><a class="navbar-brand d-flex align-items-center" href="/listagent"><span>Agent
                        Valo</span></a><button data-bs-toggle="collapse" class="navbar-toggler"
                    data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link" href="afterloginhome">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" href="listagent">List Agent</a></li>
                        <li class="nav-item"><a class="nav-link" href="ourteam">Our Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="/api/documentation">Documentation</a></li>
                    </ul>
                    @auth
                        <a class="btn btn-primary" href="{{ route('password') }}">Change password</a>
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
                            <h1 class="display-4 fw-bold mb-5">List&nbsp;<span class="underline">Agent</span>.</h1>
                            <p class="fs-5 text-muted mb-3">Here are the list of agents that are currently available to
                                play in the game.</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @foreach ($agent as $key => $data)
            <div class="container py-4 py-xl-5">
                <div class="row gy-4 row-cols-1 row-cols-md-1">
                    <div class="col">
                        <div class="d-flex flex-column flex-lg-row">
                            <div class="w-100"><img class="rounded img-fluid d-block w-100 fit-cover"
                                    style="height: 350px;" src="{{ $data->agent_image }}" /></div>
                            <div class="py-4 py-lg-0 px-lg-4">
                                <h4 class="display-5 fw-bold mb-1"> <span
                                        class="underline">{{ $data->agent_name }}</span></h4>
                                <p>Role : {{ $data->agent_role }}<img
                                        style="filter: invert(100%); height: 20px; margin-left: 5px;"
                                        src="{{ $data->agent_role_icon }}" /></p>
                                <p>Skill 1 : {{ $data->agent_skill_1 }}</p>
                                <p>Skill 2 : {{ $data->agent_skill_2 }}</p>
                                <p>Skill 3 : {{ $data->agent_skill_3 }}</p>
                                <p>Ultimate : {{ $data->agent_skill_4 }}</p>
                                <p>{{ $data->agent_description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
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
