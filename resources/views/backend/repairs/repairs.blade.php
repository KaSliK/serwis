@extends('layouts.backend')

@section('content')

    <p style="font-size: 3rem;" class="text-center font-weight-bolder">Zgłoszenia </p>
    <div class="separate-line"></div>

    <div>
        <a href="{{route('repairs.create')}}" class="btn btn-sm btn-info float-right"><i
                class="fa fa-plus"></i> Dodaj</a>
        <table id="dt" class="table table-striped table-bordered table-sm" >
            <thead>
            <tr>
                <th>Rew.</th>
                <th>Klient</th>
                <th>Urządzenie</th>
                <th>Status</th>
                <th>S/N</th>
                <th>Opis</th>
                <th>Cena</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($repairs as $repair)
                <tr id="row-{{$repair->id}}">
                    <td class="align-middle">{{$repair->id}}</td>
                    <td class="align-middle"><a href="{{route('clients.edit',$repair->client->id )}}">{{$repair->client->getFullName()}}</a> </td>
                    <td class="align-middle">{{$repair->item->model}}</td>
                    <td class="align-middle">{{$repair->status->name}}</td>
                    <td class="align-middle">{{$repair->serial_number }}</td>
                    <td class="align-middle ">{{Str::limit($repair->description,25) }}</td>
                    <td class="align-middle">{{$repair->price }}</td>
                    <td class="text-right">

                        <a href="{{route('repairs.edit', $repair->id)}}" class="btn-floating btn-md btn-green"><i
                                class="far fa-edit"></i></a>
                        <button id="{{$repair->id}}"  class="btn-floating btn-md btn-dark remove"
                                type="submit"><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
@endsection
@section('scripts')
    <script src="{{asset(('js/scripts/tableSettings.js'))}}"></script>
    <script src="{{asset(('js/scripts/ajaxDelete.js'))}}"></script>

@endsection
