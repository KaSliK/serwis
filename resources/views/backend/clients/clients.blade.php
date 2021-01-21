@extends('layouts.backend')

@section('content')

    <p style="font-size: 3rem;" class="text-center font-weight-bolder">Klienci </p>
    <div class="separate-line"></div>

    <div class="">
        <table class="table table-hover align-middle table-responsive" id="myTable">
            <tr>
                <th class="">L.p.</th>
                <th class="name"  onclick="sortTable()">Imię</th>
                <th class="">Nazwisko</th>
                <th class="">Numer telefonu</th>
                <th class="">Ulica</th>
                <th class="">Miasto</th>
                <th class="float-right">
                    <a href="{{route('clients.create')}}" class="btn btn-sm btn-info"><i
                            class="fa fa-plus mg-r-10"></i> Dodaj</a>
                </th>
            </tr>

            @foreach($clients as $client)
                <tr>
                    <td class="align-middle">{{$loop->index+1}}</td>
                    <td class="align-middle">{{$client->name}}</td>
                    <td class="align-middle">{{$client->surname}}</td>
                    <td class="align-middle">{{$client->phone_number}}</td>
                    <td class="align-middle">{{$client->street }}</td>
                    <td class="align-middle">{{$client->city }}</td>
                    <td class="text-right">
                        <a href="{{route('clients.edit', $client->id)}}" class="btn-floating btn-md btn-green"><i
                                class="far fa-edit"></i></a>

                        <form style="display: inline;" method="POST"
                              action="{{ route('clients.destroy', $client->id) }}">
                            <button onclick="return confirm('Jesteś pewny?');" class="btn-floating btn-md btn-dark"
                                    type="submit"><i class="fas fa-trash-alt"></i></button>
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                        </form>

                    </td>
                </tr>
            @endforeach
        </table>
        {{$clients->links()}}
    </div>

    <script src="{{asset(('js/scripts/sort.js'))}}"></script>

@endsection
