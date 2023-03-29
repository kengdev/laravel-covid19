<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Login Form | CodingLab</title> -->
    <link href="{{ asset('/css/authen/style.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/authen/site.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

</head>

<body>
    <div class="container">
        <div class="wrapper">
            @yield('content')
        </div>
    </div>
</body>
<script src="{{ asset('/js/authen/jquery.min.js') }}"></script>
<script src="{{ asset('/js/authen/bootstrap.bundle.min.js') }}"></script>

</html>
