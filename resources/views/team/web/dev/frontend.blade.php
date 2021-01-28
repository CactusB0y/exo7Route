@extends('templates.main')
@section('content')
    <div class="row">
        @foreach ($fronts as $front)
            <div class="col-4 card" style="width: 18rem;">
                <img src="{{asset($front -> photo)}}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$front -> nom}}</h5>
                <p class="card-text">{{$front -> fonction}}</p>
                </div>
            </div>
            @if ($loop->iteration % 3 == 0)
                </div>
                <div class="row">
            @endif
        @endforeach
    </div>
@endsection