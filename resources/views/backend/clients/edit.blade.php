@extends('layouts.backend')

@section('content')


    <p style="font-size: 3rem;" class="text-center font-weight-bolder">{{__('messages.edit')}} Example</p>
    <div class="separate-line"></div>
    <form enctype="multipart/form-data" method="POST"
          action="{{ route('examples.update', ['example' => $example->id]) }}">
        @csrf
        @method('PUT')
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="md-form">
                    <i class="fas fa-font prefix"></i>
                    <input type="text" name="title" id="title" value="{{$example->title}}" class="form-control">
                    <label for="title">{{__('messages.title')}}</label>
                </div>
                <div class="md-form">
                    <i class="fas fa-bold prefix"></i>
                    <input type="text" name="subtitle" id="subtitle" value="{{$example->subtitle}}"
                           class="form-control">
                    <label for="subtitle">{{__('messages.subtitle')}}</label>
                </div>
                <div class="md-form">
                    <textarea name="description" id="description" class="form-control md-textarea" length="120"
                              rows="3">{{$example->description}}</textarea>
                    <label for="description">{{__('messages.short description')}}</label>
                </div>
            </div>
            {{--<div class="col-6 align-self-center">
                <div class="file-field">
                    <div class="btn blue-gradient btn-sm float-left">
                        <span><i class="fas fa-cloud-upload-alt mr-2" aria-hidden="true"></i>Dodaj plik</span>
                        <input id="photo" type="file" name="photo">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Upload one or more files">
                    </div>
                </div>
                <div class="md-form">
                    <i class="fas fa-align-justify prefix"></i>
                    <input type="text" name="alt" id="alt" value="{{$example->alt}}"class="form-control">
                    <label for="alt">Nazwa zdjęcia</label>
                </div>
            </div>--}}
        </div>
        <div class="row justify-content-center">
            <div class="col-6">
                <button class="btn blue-gradient float-right" type="submit">{{__('messages.edit')}}</button>

                <a class="btn morpheus-den-gradient float-right white-text"
                   href="{{route('examples.index')}}">{{__('messages.cancel')}}</a>


            </div>

        </div>
    </form>




@endsection
