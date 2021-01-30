@extends('layouts.backend')

@section('content')

    <p style="font-size: 3rem;" class="text-center font-weight-bolder">Pracownicy </p>
    <div class="separate-line"></div>

    <div>
        <a href="{{route('users.create')}}" class="btn btn-sm btn-info float-right"><i
                class="fa fa-plus "></i> Dodaj</a>
        <table id="dt" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>L.p.</th>
                <th>Imię</th>
                <th>Email</th>
                <th>Rola</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr id="row-{{$user->id}}">
                    <td class="align-middle">{{$loop->index+1}}</td>
                    <td class="align-middle">{{$user->name}}</td>
                    <td class="align-middle">{{$user->email}}</td>
                    <td class="align-middle">{{$user->hasRole->name}}</td>
                    <td class="text-right">
                        <a href="{{route('users.edit', $user->id)}}" class="btn-floating btn-md btn-green"><i
                                class="far fa-edit"></i></a>

                        <button id="{{$user->id}}"  class="btn-floating btn-md btn-dark remove"
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
