<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Kamil Kaślikowski">

    <title>Dokument serwisowy</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</head>

<body>

<h1>Dokument serwisowy</h1>

<div class="font-weight-bold col-12 text-right">Data przyjęcia:  {{$details->created_at->format('d/m/Y')}}<br></div>
<div class="mt-5  col-8">
    <div class="font-weight-bold">Dane przyjmującego</div>
    <div>
        <span class="font-weight-bold">Nazwa: </span>{{$details->company_name}} {{$details->owner_name}}<br>
        <span class="font-weight-bold">Adres:  </span>{{$details->post_code}} {{$details->city}}
        {{$details->address}}<br>
        <span class="font-weight-bold">Email:  </span>{{$details->email}}<br>
        <span class="font-weight-bold">Numer telefonu:  </span>{{$details->phone_number}}<br>


    </div>
</div>
<div class="mt-5  col-8 float-right text-right">
    <div class="font-weight-bold">Dane zgłaszającego</div>
    <div>
        <span class="font-weight-bold">Imię i nazwisko: </span>{{$repair->client->getFullName()}}<br>
        <span class="font-weight-bold">Adres:  </span>{{$repair->client->getFullAddress()}}<br>
        <span class="font-weight-bold">Email:  </span>{{$repair->client->email}}<br>
        <span class="font-weight-bold">Numer telefonu:  </span>{{$repair->client->phone_number}}<br>

    </div>
</div>


<div class="mt-5 bordered col-12 " style="clear:both;">
    <div class="font-weight-bold text-center">Zgłoszenie</div>
    <div>
        <div class="row">
            <div class="border col-4" style="float: left">
                <span class="font-weight-bold ">Numer rewersu: </span>{{$repair->id+1000}}<br>
            </div>
            <div class="border col-4" style="float: left">
                <span class="font-weight-bold ">identyfikator: </span>{{$repair->identifier}}<br>
            </div>
        </div>

    </div>
    <div>
        <div class="row">
        <div class="border col-3 " style="float: left">
            <span class="font-weight-bold ">Cena: </span>{{$repair->price}}<br>
        </div>
        </div>
    </div>

        <div class="border ">
            <span class="font-weight-bold">Sprzęt: </span>{{$repair->item->brand}} {{$repair->item->model}}<br>
        </div>
    <div class="border ">
        <span class="font-weight-bold ">S/N: </span>{{$repair->serial_number}}<br>
    </div>

        <div class="border ">
            <span class="font-weight-bold">Opis usterki: </span>{{$repair->description}}{{$repair->description}}{{$repair->description}}<br>
        </div>
    </div>
</div>

<div style="position: absolute; bottom: 0; font-size: 12px;">Podpis klienta</div>
<div style="position: absolute; bottom: 15px; font-size: 12px;">..............</div>
<div style="position: absolute; bottom: 0; right:0; font-size: 12px;">Podpis przyjmującego</div>
<div style="position: absolute; bottom: 15px; right:0; font-size: 12px;">.....................</div>
<div style="position: absolute; bottom: 100px; left:0; font-size: 12px;">By zobaczyć status zgłoszenia wejdz na stronę https://serwis.srv32745.seohost.com.pl/repair/{{$repair->id+1000}}/{{$repair->identifier}}</div>

</body>
<style type="text/css">
    * {
        font-family: "DejaVu Sans Mono", monospace;
    }
</style>

<style>
    h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }

    .bordered {
        border: 1px solid black;

    }
</style>
</html>
