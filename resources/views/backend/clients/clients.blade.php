@extends('layouts.backend')

@section('content')

    <p style="font-size: 3rem;" class="text-center font-weight-bolder">Klienci </p>
    <div class="separate-line"></div>

    <div>
        <a href="{{route('clients.create')}}" class="btn btn-sm btn-info"><i
                class="fa fa-plus "></i> Dodaj</a>
        <table id="dt" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
{{--        <table class="table table-hover align-middle table-responsive" id="myTable">--}}
            <thead>
            <tr>
                <th>L.p.</th>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Numer telefonu</th>
                <th>Ulica</th>
                <th>Miasto</th>
                <th></th>
            </tr>
            </thead>


            <tbody>
            @foreach($clients as $client)
                <tr id="row-{{$client->id}}">
                    <td class="align-middle">{{$loop->index+1}}</td>
                    <td class="align-middle">{{$client->name}}</td>
                    <td class="align-middle">{{$client->surname}}</td>
                    <td class="align-middle">{{$client->phone_number}}</td>
                    <td class="align-middle">{{$client->street }}</td>
                    <td class="align-middle">{{$client->city }}</td>
                    <td class="text-right">
                        <a href="{{route('clients.edit', $client->id)}}" class="btn-floating btn-md btn-green"><i
                                class="far fa-edit"></i></a>

                        <button id="{{$client->id}}"  class="btn-floating btn-md btn-dark remove"
                                type="submit"><i class="fas fa-trash-alt"></i></button>

                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
        {{$clients->links()}}
    </div>


@endsection
@section('scripts')
    <script src="{{asset(('js/scripts/tableSettings.js'))}}"></script>
    <script src="{{asset(('js/scripts/ajaxDelete.js'))}}"></script>


@endsection
