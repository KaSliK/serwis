@extends('layouts.backend')

@section('content')
    @include('backend.errors')
    <p style="font-size: 3rem;" class="text-center font-weight-bolder">Dodaj pracownika</p>
    <div class="separate-line"></div>

    <form enctype="multipart/form-data" method="POST" action="{{ route('users.update', ['user' => $user->id]) }}">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="col-6 md-form md-bg input-with-pre-icon">
                <i class="fas fa-user input-prefix"></i>
                <input type="text" name="email" id="email" value="{{$user->email}}" class="form-control">
                <label for="email">Email</label>
            </div>
            <div class="col-6 md-form md-bg input-with-pre-icon">
                <i class="fas fa-user input-prefix"></i>
                <input type="text" name="name" id="name" value="{{$user->name}}" class="form-control">
                <label for="name">Imię</label>
            </div>

            <select class="col-6 mdb-select md-form" name="role" searchable="Wyszukaj rolę">
                @foreach($roles as $role)
                    <option value="{{$role->id}}" @if($user->hasRole->name === $role->name) selected @endif >{{$role->name}}</option>
                @endforeach
            </select>
            <label class="mdb-main-label">Status</label>

        </div>

        <div class="row justify-content-center">
            <div class="col-6">
                <button class="btn blue-gradient float-right" type="submit">Edytuj</button>
                {{ csrf_field() }}

                <a class="btn morpheus-den-gradient float-right white-text"
                   href="{{url()->previous()}}">{{__('messages.cancel')}}</a>
            </div>

        </div>
    </form>

@endsection
@section('scripts')
    <script>
       // Material Select Initialization
       $(document).ready(function() {
          $('.mdb-select').materialSelect();
       });
       </script>
    @endsection
