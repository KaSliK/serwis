@extends('layouts.backend')

@section('content')

    <p style="font-size: 3rem;" class="text-center font-weight-bolder">Example </p>
    <div class="separate-line"></div>

    <div class="">
        <table class="table">
            <thead>
            <tr>
                <th class="">L.p.</th>
                <th class="">{{__('messages.title')}}</th>
                <th class="">{{__('messages.subtitle')}}</th>
                <th class="">{{__('messages.description')}}</th>
                {{--                <th class="">Zdjęcie</th>--}}
                <th class="float-right">
                    <a href="{{route('examples.create')}}" class="btn btn-sm btn-info"><i
                            class="fa fa-plus mg-r-10"></i> Dodaj</a>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($examples as $example)
                <tr>
                    <td class="align-middle">{{$loop->index+1}}</td>
                    <td class="align-middle">{{$example->title}}</td>
                    <td class="align-middle">{{$example->subtitle}}</td>
                    <td class="align-middle">{{ Str::limit($example->description, 25) }}</td>
                    {{--<td class="align-middle"><img src="{{asset($example->photo)}}" alt="{{$example->alt}}" width="100" height="100" ></td>--}}
                    <td class="text-right">
                        <a href="{{route('examplePhotos', $example->id)}}" type="button"
                           class="btn-floating btn-md btn-success"><i class="far fa-images"></i></a>
                        <a href="{{route('examples.edit', $example->id)}}" class="btn-floating btn-md btn-green"><i
                                class="far fa-edit"></i></a>

                        <form style="display: inline;" method="POST"
                              action="{{ route('examples.destroy', $example->id) }}">
                            <button onclick="return confirm('Are you sure?');" class="btn-floating btn-md btn-dark"
                                    type="submit"><i class="fas fa-trash-alt"></i></button>
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                        </form>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



@endsection
