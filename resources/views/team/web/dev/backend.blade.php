@extends('templates.main')
@section('content')
    <div class="row">
        @foreach ($backs as $back)
            <div class="col-4 card" style="width: 18rem;">
                <img src="{{asset($back -> photo)}}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$back -> nom}}</h5>
                <p class="card-text">{{$back -> fonction}}</p>
                </div>
            </div>
            @if ($loop->iteration % 3 == 0)
                </div>
                <div class="row">
            @endif
        @endforeach
    </div>
@endsection