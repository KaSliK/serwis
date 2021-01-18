@extends('layouts.backend')

@section('content')
        <h1>{{__('messages.welcome')}}</h1>

        <div class="form-row">
            <div class="col-6 md-form md-bg input-with-pre-icon">
                <i class="fas fa-user input-prefix"></i>
                <input type="text" id="companyName" class="form-control">
                <label for="companyName">Nazwa Firmy</label>
            </div>
            <div class="col-6 md-form md-bg input-with-pre-icon">
                <i class="fas fa-user input-prefix"></i>
                <input type="text" id="ownerName" class="form-control">
                <label for="ownerName">Imię i nazwisko właściciela</label>
            </div>
        </div>
        <div class="form-row">
            <div class="col-4 col-md-3 md-form md-bg input-with-pre-icon">
                <i class="fas fa-user input-prefix"></i>
                <input type="text" id="postCode" class="form-control">
                <label for="postCode">Kod pocztowy</label>
            </div>
            <div class="col-8 col-md-4 md-form md-bg input-with-pre-icon">
                <i class="fas fa-user input-prefix"></i>
                <input type="text" id="city" class="form-control">
                <label for="city">Miasto</label>
            </div>
            <div class="col-12 col-md-5 md-form md-bg input-with-pre-icon">
                <i class="fas fa-user input-prefix"></i>
                <input type="text" id="address" class="form-control">
                <label for="address">Adres</label>
            </div>
        </div>
        <div class="form-row">
            <div class="col-6 col-lg-3 md-form md-bg input-with-pre-icon">
                <i class="fas fa-user input-prefix"></i>
                <input type="text" id="phoneNumber1" class="form-control">
                <label for="phoneNumber1">Numer telefonu</label>
            </div>
            <div class="col-6 col-lg-3 md-form md-bg input-with-pre-icon">
                <i class="fas fa-user input-prefix"></i>
                <input type="text" id="phoneNumber2" class="form-control">
                <label for="phoneNumber2">Numer telefonu</label>
            </div>
            <div class="col-6 col-lg-3 md-form md-bg input-with-pre-icon">
                <i class="fas fa-user input-prefix"></i>
                <input type="text" id="phoneNumber3" class="form-control">
                <label for="phoneNumber3">Numer telefonu</label>
            </div>
            <div class="col-6 col-lg-3 md-form md-bg input-with-pre-icon">
                <i class="fas fa-user input-prefix"></i>
                <input type="text" id="phoneNumber4" class="form-control">
                <label for="phoneNumber4">Numer telefonu</label>
            </div>
        </div>



@endsection
