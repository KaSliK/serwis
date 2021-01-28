@extends('layouts.backend')

@section('content')
    <p style="font-size: 3rem;" class="text-center font-weight-bolder">Dane firmy</p>
    <div class="separate-line"></div>

    <form enctype="multipart/form-data" method="POST" action="{{ route('contact_details.store') }}">
        <div class="form-row">
            <div class="col-6 md-form md-bg input-with-pre-icon">
                <i class="fas fa-user input-prefix"></i>
                <input type="text" id="company_name" name="company_name" value="{{$details ? $details->company_name  : ''}}" class="form-control">
                <label for="company_name">Nazwa Firmy</label>
            </div>
            <div class="col-6 md-form md-bg input-with-pre-icon">
                <i class="fas fa-user input-prefix"></i>
                <input type="text" id="owner_name" name="owner_name" value="{{$details ? $details->owner_name  : ''}}" class="form-control">
                <label for="owner_name">Imię i nazwisko właściciela</label>
            </div>
        </div>
        <div class="form-row">
            <div class="col-4 col-md-3 md-form md-bg input-with-pre-icon">
                <i class="fas fa-user input-prefix"></i>
                <input type="text" name="post_code" id="post_code" value="{{$details ? $details->post_code  : ''}}" class="form-control">
                <label for="post_code">Kod pocztowy</label>
            </div>
            <div class="col-8 col-md-4 md-form md-bg input-with-pre-icon">
                <i class="fas fa-user input-prefix"></i>
                <input type="text" name="city" id="city" value="{{$details ? $details->city  : ''}}" class="form-control">
                <label for="city">Miasto</label>
            </div>
            <div class="col-12 col-md-5 md-form md-bg input-with-pre-icon">
                <i class="fas fa-user input-prefix"></i>
                <input type="text" name="address" id="address" value="{{$details ? $details->address  : ''}}" class="form-control">
                <label for="address">Adres</label>
            </div>
        </div>
        <div class="form-row">
            <div class="col-6 md-form md-bg input-with-pre-icon">
                <i class="fas fa-user input-prefix"></i>
                <input type="text" name="phone_number" id="phone_number" value="{{$details ? $details->phone_number  : ''}}" class="form-control">
                <label for="phone_number">Numer telefonu</label>
            </div>
            <div class="col-6 md-form md-bg input-with-pre-icon">
                <i class="fas fa-user input-prefix"></i>
                <input type="text" name="email" id="email" value="{{$details ? $details->email  : ''}}" class="form-control">
                <label for="email">Email</label>
            </div>

        </div>

        <div class="row justify-content-center">
            <div class="col-6">
                <button class="btn blue-gradient float-right" type="submit">Aktualizuj</button>
                {{ csrf_field() }}
            </div>

        </div>
    </form>

@endsection
