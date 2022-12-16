<!DOCTYPE html>
<html lang="en">

<head>
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
                    <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="listagent">List Agent</a></li>
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
                        @auth
                        <p>Welcome <b>{{ Auth::user()->name }}</b></p>
                        @endauth
                        <h1 class="display-4 fw-bold mb-5">Welcome to Agent Valo Website&nbsp;<span class="underline">API</span>.</h1>
                        <p class="fs-5 text-muted mb-5">Here is the Documentation for Valorant API.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="text-center position-relative"><img class="img-fluid" src="assets/img/valorant/valorant.jpg" style="width: 800px;"></div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container py-4 py-xl-5 my-3">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="display-6 fw-bold pb-md-4">Description About Valorant Agent&nbsp;<span class="underline">API</span></h3>
                </div>
                <div class="col-md-6 pt-2">
                    <p class="text-muted mb-4">Agent Valo provides a RESTful API (Application Programming Interface) that you can use to create various applications that require data in the form of valorant agents. Valorant agent data is taken directly from the Valorant-API web to maintain data accuracy. However, if you find invalid data, please report it to our team. Agent Valo is easy to integrate because it uses a REST architecture with a response format in the form of JSON which is supported by almost all programming languages. Imagine being able to create a feature that displays an automatic list of Valorant agents on the website or create mobile applications for Android, iOS, and others. Have you got an idea to make an application with Agent Valo? Please register an account to get an API Key, it's FREE!!</p>
                </div>
            </div>
            <div class="col-md-6 text-center mx-auto my-5">
                <h3 class="display-6 fw-bold pb-md-4">Why Use Valorant Agent&nbsp;<span class="underline">API?</span></h3>
            </div>
            <div class="row gy-4 gy-md-0">
                <div class="col-md-6 d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                    <div>
                        <div class="row gy-2 row-cols-1 row-cols-sm-2">
                            <div class="col text-center text-md-start">
                                <div class="d-flex justify-content-center align-items-center justify-content-md-start"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-sun fs-3 text-primary bg-warning">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path>
                                    </svg>
                                    <h5 class="fw-bold mb-0 ms-2">Easy to Use</h5>
                                </div>
                                <p class="text-muted my-3">All the data is easily accessed.</p>
                            </div>
                            <div class="col text-center text-md-start">
                                <div class="d-flex justify-content-center align-items-center justify-content-md-start"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-sun fs-3 text-primary bg-warning">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path>
                                    </svg>
                                    <h5 class="fw-bold mb-0 ms-2">Realtime Data</h5>
                                </div>
                                <p class="text-muted my-3">The data is updated in realtime.</p>
                            </div>
                            <div class="col text-center text-md-start">
                                <div class="d-flex justify-content-center align-items-center justify-content-md-start"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-sun fs-3 text-primary bg-warning">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path>
                                    </svg>
                                    <h5 class="fw-bold mb-0 ms-2">It's Free</h5>
                                </div>
                                <p class="text-muted my-3">No cash needed to use this API.</p>
                            </div>
                            <div class="col text-center text-md-start">
                                <div class="d-flex justify-content-center align-items-center justify-content-md-start"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-sun fs-3 text-primary bg-warning">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path>
                                    </svg>
                                    <h5 class="fw-bold mb-0 ms-2">Ready to Use</h5>
                                </div>
                                <p class="text-muted my-3">API is ready to use whenever and whoever.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-first order-md-last">
                    <div><img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;" src="assets/img/illustrations/teamwork.svg"></div>
                </div>
            </div>
            <div class="col-md-6 text-center mx-auto my-5">
                <h3 class="display-6 fw-bold pb-md-4"><span class="underline">Request</span></h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Method</th>
                        <th scope="col">URL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>GET</td>
                        <td>http://127.0.0.1:8000/getagent</td>
                    </tr>
                    <tr>
                        <td>GET</td>
                        <td>http://127.0.0.1:8000/getagent/1</td>
                    </tr>
                </tbody>
            </table>
            <div class="col-md-6 text-center mx-auto my-5">
                <h3 class="display-6 fw-bold pb-md-4"><span class="underline">Response</span></h3>
            </div>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Response Success</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Response Failed</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Response Detail</a>
                </li>
            </ul>
            <img class="img-fluid" src="assets/img/APIdocumentation/response.jpg" style="width: 800px;">
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