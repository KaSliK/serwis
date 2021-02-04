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
    <p style="font-size: 3rem;" class="text-center font-weight-bolder"><b> Zgłoszenie o rewersie {{$repair->id+1000}}</b></p>
    <div class="separate-line"></div>
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6 md-form">

                            <input type="text" disabled name="serial_number" id="serial_number" value="{{$repair->serial_number}}" class="form-control">
                            <label for="serial_number">Numer seryjny</label>
                        </div>
                        <div class="col-6 md-form">

                            <input type="number" disabled name="price" id="price" value="{{$repair->price}}"
                                   class="form-control">
                            <label for="price">Cena za usługę</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 md-form">
                    <i class="fas fa-pencil-alt prefix"></i>
                    <textarea disabled name="description" id="description" class="md-textarea form-control" rows="3">{{$repair->description}}</textarea>
                    <label for="description">Opis</label>
                </div>
                <div class="col-12 md-form">
                    <i class="fas fa-pencil-alt prefix"></i>
                    <textarea disabled name="repair_details" id="repair_details" class="md-textarea form-control" rows="3">{{$repair->repair_details}}</textarea>
                    <label for="repair_details">Diagnoza i opis naprawy</label>
                </div>


                <div class="col-12">
                    <div class="row">
                        <select disabled class="col-6 mdb-select md-form" id="status_id" name="status_id" searchable="Wyszukaj status">
                            <option value="{{$repair->status->id}}" selected>{{$repair->status->name}}</option>
                        </select>
                        <label class="mdb-main-label">Status</label>
                    </div>
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
