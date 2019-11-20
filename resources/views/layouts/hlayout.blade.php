<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="dist/fonts/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cairo:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <section class="nav">
        <img src="https://images.unsplash.com/photo-1573666008508-3825beb91997?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="" class="image">
        <div class="container">
            <div class="row">
                @include('layouts.partials.navbar')
                @yield('banner')
            </div> 
        </div>
        </div>
    </section>
    @yield('body')
    @include('layouts.partials.contact-us')
    @include('layouts.partials.footer')
    <script src="dist/js/main.js "></script>
</body>
</html>