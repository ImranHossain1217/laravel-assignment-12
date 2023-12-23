<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Your Ticketing System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div>
        @include('components.navbar')
        <!-- Sidebar -->
        <div class="row" style="height: 100vh;">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="/">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('trip.ourTrips')}}">
                                Our Trips
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('user.create')}}">
                                Create User
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('location.create') }}">
                                Create Location
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('trip.create') }}">
                                Create Trip
                            </a>
                        </li>
                        <!-- Add more sidebar items as needed -->
                    </ul>
                </div>
            </nav>
            
            <!-- Main Content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                @yield('content') <!-- This is where your page content will go -->
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
