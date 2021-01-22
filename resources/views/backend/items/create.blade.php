@extends('layouts.backend')

@section('content')

    <p style="font-size: 3rem;" class="text-center font-weight-bolder">Stwórz urządzenie</p>
    <div class="separate-line"></div>
        <form enctype="multipart/form-data" method="POST" action="{{ route('items.store') }}">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row">
                        <div class="col-6 md-form">
                            <i class="fas fa-font prefix"></i>
                            <input type="text" name="brand" id="brand" value="" class="form-control">
                            <label for="brand">Marka</label>
                        </div>
                        <div class="col-6 md-form">
                            <i class="fas fa-bold prefix"></i>
                            <input type="text" name="model" id="model" value=""
                                   class="form-control">
                            <label for="model">Model</label>
                        </div>
                    </div>
                </div>



            </div>
            <div class="row justify-content-center">
                <div class="col-6">
                    <button class="btn blue-gradient float-right" type="submit">{{__('messages.create')}}</button>
                    <a class="btn morpheus-den-gradient white-text float-right" href="{{route('items.index')}}">{{__('messages.cancel')}}</a>

                    {{ csrf_field() }}
                </div>

            </div>
        </form>




@endsection
