@extends('layouts.backend')

@section('content')

    <p style="font-size: 3rem;" class="text-center font-weight-bolder">Urządzenia </p>
    <div class="separate-line"></div>

    <div>
        <a href="{{route('items.create')}}" class="btn btn-sm btn-info"><i
                class="fa fa-plus "></i> Dodaj</a>
        <table id="dt" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>L.p.</th>
                <th>Model</th>
                <th>Marka</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr>
                    <td class="align-middle">{{$loop->index+1}}</td>
                    <td class="align-middle">{{$item->model}}</td>
                    <td class="align-middle">{{$item->brand}}</td>
                    <td class="text-right">
                        <a href="{{route('items.edit', $item->id)}}" class="btn-floating btn-md btn-green"><i
                                class="far fa-edit"></i></a>

                        <form style="display: inline;" method="POST"
                              action="{{ route('items.destroy', $item->id) }}">
                            <button onclick="return confirm('Jesteś pewny?');" class="btn-floating btn-md btn-dark"
                                    type="submit"><i class="fas fa-trash-alt"></i></button>
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                        </form>

                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
        {{$items->links()}}
    </div>

    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">




@endsection
@section('script')
    <script src="{{asset(('js/scripts/sort.js'))}}"></script>
@endsection
