@extends('layouts.backend')

@section('content')

    @include('backend.errors')
    <p style="font-size: 3rem;" class="text-center font-weight-bolder">{{__('messages.edit')}} <b>{{$item->model}}</b></p>
    <div class="separate-line"></div>
    <form enctype="multipart/form-data" method="POST"
          action="{{ route('items.update', ['item' => $item->id]) }}">
        @csrf
        @method('PUT')
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <div class="col-6 md-form">
                        <i class="fas fa-font prefix"></i>
                        <input type="text" name="brand" id="brand" value="{{$item->brand}}" class="form-control">
                        <label for="brand">Marka</label>
                    </div>
                    <div class="col-6 md-form">
                        <i class="fas fa-bold prefix"></i>
                        <input type="text" name="model" id="model" value="{{$item->model}}"
                               class="form-control">
                        <label for="model">Model</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6">
                <button class="btn blue-gradient float-right" type="submit">{{__('messages.edit')}}</button>

                <a class="btn morpheus-den-gradient float-right white-text"
                   href="{{route('items.index')}}">{{__('messages.cancel')}}</a>


            </div>

        </div>
    </form>




@endsection
