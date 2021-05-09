@extends('layouts.backend')

@section('content')

        <a href="{{route('repairs.index')}}"><i class="fas fa-arrow-left arrowBack"></i></a>
        <p style="font-size: 3rem;" class="text-center font-weight-bolder">

            Galeria rewersu {{$example->id}}
        </p>
        <div class="separate-line"></div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if ($message = Session::get('noPhoto'))
        <div class="alert alert-success">
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">

    <div class="col-sm-12 col-md-8">
        <div class="row">
            @foreach($example->photos as $photo)

                <a class="elem" href="{{asset($photo->path)}}" title="{{$example->id}}" data-lcl-txt="{{$photo->alt}}" data-lcl-thumb="{{asset($photo->path)}}">
                    <span style="background-image: url({{asset($photo->path)}});"></span>
                </a>
            @endforeach
        </div>

    </div>
        <div class="col-sm-12 col-md-4">

            <form enctype="multipart/form-data" method="POST" action="{{route('photos.store')}}" >
            <div class="file-field ">
                <div class="btn blue-gradient btn-sm float-left">
                    <span><i class="fas fa-cloud-upload-alt mr-2" aria-hidden="true"></i>{{__('messages.addFile')}}</span>
                    <input id="photo" type="file" name="photo" >
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="{{__('messages.addPhoto')}}">
                </div>
            </div>
                <div class="md-form">
                    <i class="fas fa-align-justify prefix"></i>
                    <input type="text" name="alt" id="alt" class="form-control">
                    <label for="alt">{{__('messages.alt')}}</label>
                </div>
                <input type="hidden" id="photoable_id" name="photoable_id" value="{{$example->id}}">
                <input type="hidden" id="title" name="title" value="{{$example->id}}">


                <button class="btn blue-gradient float-right" type="submit">{{__('messages.add')}}</button>
                {{ csrf_field() }}
            </form>


        </div>
    </div>

@endsection
@section('imports')
    <link rel="stylesheet" href="{{asset('css/lc_lightbox.css')}}" />
    <!-- SKINS -->
    <link rel="stylesheet" href="{{asset('skins/minimal.css')}}" />
    <link rel="stylesheet" href="{{asset('css/lcligtboxStyles.css')}}" />
@endsection
@section('scripts')
    <script src="{{asset('lib/jquery.js')}}" type="text/javascript"></script>

    <script src="{{asset('js/lc_lightbox.lite.js')}}" type="text/javascript"></script>
    <!-- ASSETS -->
    <script src="{{asset('lib/AlloyFinger/alloy_finger.min.js')}}" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function(e) {
            lc_lightbox('.elem', {
                wrap_class: 'lcl_fade_oc',
                gallery : true,
                thumb_attr: 'data-lcl-thumb',
                skin: 'minimal',
                radius: 0,
                padding	: 0,
                border_w: 0,
            });
        });
    </script>
@endsection
