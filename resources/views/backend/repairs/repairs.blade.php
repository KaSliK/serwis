@extends('layouts.backend')

@section('content')

    <p style="font-size: 3rem;" class="text-center font-weight-bolder">Zgłoszenia </p>
    <div class="separate-line"></div>

    <div>
        <a href="{{route('repairs.create')}}" class="btn btn-sm btn-info"><i
                class="fa fa-plus "></i> Dodaj</a>
        <table id="dt" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
{{--        <table class="table table-hover align-middle table-responsive" id="myTable">--}}
            <thead>
            <tr>
                <th>L.p.</th>
                <th>Klient</th>
                <th>Urządzenie</th>
                <th>S/N</th>
                <th>Cena</th>
                <th></th>
            </tr>
            </thead>


            <tbody>
            @foreach($repairs as $repair)
                <tr>
                    <td class="align-middle">{{$loop->index+1}}</td>
                    <td class="align-middle">{{$repair->client->name}} {{$repair->client->surname}}</td>
                    <td class="align-middle">{{$repair->item->model}}</td>
                    <td class="align-middle">{{$repair->status->name}}</td>
                    <td class="align-middle">{{$repair->serial_number }}</td>
                    <td class="text-right">
                        <a href="{{route('repairs.edit', $repair->id)}}" class="btn-floating btn-md btn-green"><i
                                class="far fa-edit"></i></a>

                        <form style="display: inline;" method="POST"
                              action="{{ route('repairs.destroy', $repair->id) }}">
                            <button onclick="return confirm('Jesteś pewny?');" class="btn-floating btn-md btn-dark"
                                    type="submit"><i class="fas fa-trash-alt"></i></button>
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                        </form>

                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>





@endsection
@section('script')
    <script src="{{asset(('js/scripts/sort.js'))}}"></script>
@endsection
