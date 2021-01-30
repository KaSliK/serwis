@extends('layouts.backend')

@section('content')
    <p style="font-size: 3rem;" class="text-center font-weight-bolder">Dodaj pracownika</p>
    <div class="separate-line"></div>

    <form enctype="multipart/form-data" method="POST" action="{{ route('createUser') }}">
        <div class="form-row">
            <div class="col-6 md-form md-bg input-with-pre-icon">
                <i class="fas fa-user input-prefix"></i>
                <input type="text" name="email" id="email" class="form-control">
                <label for="email">Email</label>
            </div>
            <div class="col-6 md-form md-bg input-with-pre-icon">
                <i class="fas fa-user input-prefix"></i>
                <input type="text" name="name" id="name" class="form-control">
                <label for="name">Imię</label>
            </div>
            <div class="col-6 md-form md-bg input-with-pre-icon">
                <i class="fas fa-user input-prefix"></i>
                <input type="text" name="password" id="password" class="form-control">
                <label for="password">Hasło</label>
            </div>

        </div>

        <div class="row justify-content-center">
            <div class="col-6">
                <button class="btn blue-gradient float-right" type="submit">Dodaj</button>
                {{ csrf_field() }}
            </div>

        </div>
    </form>

@endsection
