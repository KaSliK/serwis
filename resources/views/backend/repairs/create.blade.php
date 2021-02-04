@extends('layouts.backend')

@section('content')
    @include('backend.errors')

    <p style="font-size: 3rem;" class="text-center font-weight-bolder">Dodaj zlecenie</p>
    <div class="separate-line"></div>
        <form enctype="multipart/form-data" method="POST" action="{{ route('repairs.store') }}">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row">
                        <select class="col-6 mdb-select md-form" name="client_id" searchable="Wyszukaj klienta">

                            <option value="" disabled selected>Wybierz klienta</option>
                            @foreach($clients as $client)
                            <option value="{{$client->id}}" data-secondary-text="{{$client->street}}">{{$client->name}} {{$client->surname}}</option>
                                @endforeach
                        </select>
                        <label class="mdb-main-label">Klient</label>
                        <select class="col-6 mdb-select md-form" name="item_id" searchable="Wyszukaj urządzenie">

                            <option value="" disabled selected>Wybierz urządzenie</option>
                            @foreach($items as $item)
                                <option value="{{$item->id}}" data-secondary-text="{{$item->brand}}">{{$item->model}}</option>
                            @endforeach
                        </select>
                        <label class="mdb-main-label">Urządzenie</label>

                    </div>
                </div>
                <div class="col-10">
                    <div class="row">
                        <div class="col-6 md-form">

                            <input type="text" name="serial_number" id="serial_number" value="" class="form-control">
                            <label for="serial_number">Numer seryjny</label>
                        </div>
                        <div class="col-6 md-form">

                            <input type="number" name="price" id="price" value=""
                                   class="form-control">
                            <label for="price">Cena</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 md-form">
                    <i class="fas fa-pencil-alt prefix"></i>
                    <textarea name="description" id="description" class="md-textarea form-control" rows="3"></textarea>
                    <label for="description">Opis</label>
                </div>

                <div class="col-12 md-form">
                    <i class="fas fa-pencil-alt prefix"></i>
                    <textarea name="comments" id="comments" class="md-textarea form-control" rows="3"></textarea>
                    <label for="comments">Uwagi dodatkowe</label>
                </div>

{{--                <input hidden type="date" name="picked_up" id="picked_up"--}}
{{--                       value="{{ date('Y-m-d')}}">--}}
                <input hidden type="text" name="status_id" id="status_id"
                       value="1">


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
@section('scripts')
    <script>
       // Material Select Initialization
       $(document).ready(function() {
          $('.mdb-select').materialSelect();
       });
    </script>

    @endsection
