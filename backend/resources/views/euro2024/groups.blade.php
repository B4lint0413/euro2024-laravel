@extends("layouts.main")

@section("title",$title ?? "Cím nincs megadva!")

@section('content')
<div class="container">

    <div class="row">
        <div class="col-12">
            <h1 class="my-3">{{$title ?? "Cím nincs megadva!"}}</h1>
        </div>
    </div>

    <div class="row">
        @if(isset($teams))
        @foreach($teams as $key => $team)
        <div class="col-6 col-md-3 mb-3">
            <div class="card text-center">
                <div class="card-header">
                    {{$team->nation}}
                </div>
                <div class="card-body">
                    <p>Győzelmek: {{$team->won}}</p>
                    <p>Döntetlenek: {{$team->drawn}}</p>
                    <p>Vereségek: {{$team->lost}}</p>
                </div>
            </div>
        </div>
        @endforeach
        @endif

    </div>
</div>

@endsection