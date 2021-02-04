<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Kamil Kaślikowski">
    <title>Sprawdź zgłoszenie</title>
    <link rel="icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/addons/datatables.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/addons/datatables2.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/addons/datatables-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/addons/datatables-select2.min.css')}}">


</head>

<body>
<div style="height: 50vh !important;" class="container d-flex justify-content-center">
    <div class="card testimonial-card h-30 align-self-center">
        <div class="card-up indigo lighten-1"></div>
        <div class="avatar mx-auto white">
            <img src="{{asset('img/logo.png')}}"
                 alt="logo serwisu">
        </div>
        <div class="card-body">
            <h4 class="card-title">Zły link</h4>
            <p class="card-text">Przykro nam ale musiałeś wpisać nieprawidłowy link. W celu sprawdzenia poprawności sprawdź dane na wygenerowanym dokumencie.</p>
        </div>

    </div>
</div>





<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/addons/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/addons/datatables2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/modules/material-select/material-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/modules/material-select/material-select-view.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/modules/material-select/material-select-view-renderer.min.js')}}"></script>


<script src="https://kit.fontawesome.com/3c5516695a.js" crossorigin="anonymous"></script>
<script>
   var tokenCSRF = "{{ csrf_token() }}"
</script>
</body>
</html>


