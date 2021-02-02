@extends('layouts.backend')

@section('content')
    @include('backend.errors')


    <p style="font-size: 3rem;" class="text-center font-weight-bolder">{{__('messages.edit')}} <b> zgłoszenie nr {{$repair->id}}</b></p>
    <div class="separate-line"></div>
    <form enctype="multipart/form-data" method="POST"
          action="{{ route('repairs.update', ['repair' => $repair->id]) }}">
        @csrf
        @method('PUT')
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <select class="col-6 mdb-select md-form" name="client_id" searchable="Wyszukaj klienta">

                    <option value="{{$repair->client->id}}" selected>{{$repair->client->name}} {{$repair->client->surname}}</option>
                    @foreach($clients as $client)
                        <option value="{{$client->id}}" data-secondary-text="{{$client->street}}">{{$client->name}} {{$client->surname}}</option>
                        @endforeach
                        </select>
                        <label class="mdb-main-label">Klient</label>
                        <select class="col-6 mdb-select md-form" name="item_id" searchable="Wyszukaj urządzenie">

                            <option value="{{$repair->item->id}}" selected>{{$repair->item->brand}} {{$repair->item->model}}</option>
                            @foreach($items as $item)
                                <option value="{{$item->id}}" data-secondary-text="{{$item->brand}}">{{$item->model}}</option>
                            @endforeach
                        </select>
                        <label class="mdb-main-label">Urządzenie</label>
            </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-6 md-form">

                            <input type="text" name="serial_number" id="serial_number" value="{{$repair->serial_number}}" class="form-control">
                            <label for="serial_number">Numer seryjny</label>
                        </div>
                        <div class="col-6 md-form">

                            <input type="number" name="price" id="price" value="{{$repair->price}}"
                                   class="form-control">
                            <label for="price">Cena</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 md-form">
                    <i class="fas fa-pencil-alt prefix"></i>
                    <textarea name="description" id="description" class="md-textarea form-control" rows="3">{{$repair->description}}</textarea>
                    <label for="description">Opis</label>
                </div>


                <div class="col-12">
                    <div class="row">
                        <select class="col-6 mdb-select md-form" id="status_id" name="status_id" searchable="Wyszukaj status">

                            <option value="{{$repair->status->id}}" selected>{{$repair->status->name}}</option>
                            @foreach($statuses as $status)
                                <option value="{{$status->id}}" >{{$status->name}}</option>
                            @endforeach
                        </select>
                        <label class="mdb-main-label">Status</label>

                        <div id="picked_up" class="md-form md-outline input-with-post-icon datepicker" >
                            <input placeholder="Wybierz datę wydania" type="text" id="" class="form-control" name="picked_up">

                            <i class="fas fa-calendar input-prefix" ></i>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6">
                <button class="btn blue-gradient float-right" type="submit">{{__('messages.edit')}}</button>

                <a class="btn morpheus-den-gradient float-right white-text"
                   href="{{route('repairs.index')}}">{{__('messages.cancel')}}</a>

                <a class="btn blue-gradient float-right" href="{{route('createPDF', ['id' => $repair->id])}}">PDF</a>


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

       $('.datepicker').datepicker({
          inline: true
       });
    </script>
    <script>
       var statusId = document.getElementById('status_id');
       var pickedUp = document.getElementById('picked_up');
       statusId.value !== '6' ? pickedUp.hidden = true : '';
       statusId.onchange = handleIt;
       function handleIt() {
          statusId.value !== '6' ? pickedUp.hidden = true : pickedUp.hidden = false;
          pickedUp.hidden === false ? pickedUp.value = 0 :'';
       }
    </script>

@endsection
