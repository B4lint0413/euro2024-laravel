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
        @if(isset($notContains))
        <div class="col-6">
            <h4>Nem tartalmazzák az ország szót:</h4>
            <ul>
                @foreach($notContains as $key => $nation)
                <li>
                    {{$nation->nation}}
                </li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(isset($contains))
        <div class="col-6">
            <h4>Tartalmazzák az ország szót:</h4>
            <ul>
                @foreach($contains as $key => $nation)
                <li>
                    {{$nation->nation}}
                </li>
                @endforeach
            </ul>
        </div>
        @endif


    </div>

</div>

@endsection