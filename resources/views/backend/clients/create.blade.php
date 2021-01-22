@extends('layouts.backend')

@section('content')

    <p style="font-size: 3rem;" class="text-center font-weight-bolder">Stwórz klienta</p>
    <div class="separate-line"></div>
        <form enctype="multipart/form-data" method="POST" action="{{ route('clients.store') }}">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row">
                        <div class="col-6 md-form">
                            <i class="fas fa-font prefix"></i>
                            <input type="text" name="name" id="name" value="" class="form-control">
                            <label for="name">Imię</label>
                        </div>
                        <div class="col-6 md-form">
                            <i class="fas fa-bold prefix"></i>
                            <input type="text" name="surname" id="surname" value=""
                                   class="form-control">
                            <label for="surname">Nazwisko</label>
                        </div>
                    </div>
                </div>
                <div class="col-10">
                    <div class="row">
                        <div class="col-6 md-form">

                            <input type="text" name="phone_number" id="phone_number" value="" class="form-control">
                            <label for="phone_number">Numer telefonu</label>
                        </div>
                        <div class="col-6 md-form">

                            <input type="text" name="email" id="email" value=""
                                   class="form-control">
                            <label for="email">e-mail</label>
                        </div>
                    </div>
                </div>
                <div class="col-10">
                    <div class="row">
                        <div class="col-4 md-form">

                            <input type="text" name="street" id="street" value="" class="form-control">
                            <label for="street">Ulica</label>
                        </div>
                        <div class="col-4 md-form">

                            <input type="text" name="city" id="city" value=""
                                   class="form-control">
                            <label for="city">Miasto</label>
                        </div>
                        <div class="col-4 md-form">

                            <input type="text" name="post_code" id="post_code" value=""
                                   class="form-control">
                            <label for="post_code">Kod pocztowy</label>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row justify-content-center">
                <div class="col-6">
                    <button class="btn blue-gradient float-right" type="submit">{{__('messages.create')}}</button>
                    <a class="btn morpheus-den-gradient white-text float-right" href="{{route('clients.index')}}">{{__('messages.cancel')}}</a>

                    {{ csrf_field() }}
                </div>

            </div>
        </form>




@endsection
