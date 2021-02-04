@extends('layouts.backend')

@section('content')
    @include('backend.errors')


    <p style="font-size: 3rem;" class="text-center font-weight-bolder"><b> Zgłoszenie o rewersie {{$repair->id+1000}}</b></p>
    <div class="separate-line"></div>
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6 md-form">

                            <input type="text" disabled name="serial_number" id="serial_number" value="{{$repair->serial_number}}" class="form-control">
                            <label for="serial_number">Numer seryjny</label>
                        </div>
                        <div class="col-6 md-form">

                            <input type="number" disabled name="price" id="price" value="{{$repair->price}}"
                                   class="form-control">
                            <label for="price">Cena za usługę</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 md-form">
                    <i class="fas fa-pencil-alt prefix"></i>
                    <textarea disabled name="description" id="description" class="md-textarea form-control" rows="3">{{$repair->description}}</textarea>
                    <label for="description">Opis</label>
                </div>
                <div class="col-12 md-form">
                    <i class="fas fa-pencil-alt prefix"></i>
                    <textarea disabled name="repair_details" id="repair_details" class="md-textarea form-control" rows="3">{{$repair->repair_details}}</textarea>
                    <label for="repair_details">Diagnoza i opis naprawy</label>
                </div>


                <div class="col-12">
                    <div class="row">
                        <select disabled class="col-6 mdb-select md-form" id="status_id" name="status_id" searchable="Wyszukaj status">
                            <option value="{{$repair->status->id}}" selected>{{$repair->status->name}}</option>
                        </select>
                        <label class="mdb-main-label">Status</label>
                    </div>
                </div>


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
