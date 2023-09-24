<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>master </title>
</head>
<body>

    <header>
        this is header
    </header>
@yield('content')
@section('sidebar')
this is side bar
@show
<footer>
    this is footer
</footer>
</body>
</html>
