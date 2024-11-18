@extends("layouts.main")

@section("title",$title ?? "Cím nincs megadva!")

@section('content')

<div class="container">

    <div class="row">
        <div class="col-12">
            <h1 class="my-2">{{$title ?? "Cím nincs megadva!"}}</h1>
        </div>



        @if(isset($avgGoals))

        <div class="col-6 col-md-4 mb-2">
            <div class="card text-bg-secondary">
                <div class="card-header">
                    Gólok átlaga csapatonként
                </div>
                <div class="card-body">
                    {{$avgGoals}} gól
                </div>
            </div>

        </div>
        @endif


        @if(isset($minGoals))
        <div class="col-6 col-md-4 mb-2">
            <div class="card text-bg-secondary">
                <div class="card-header">
                    Legkevesebb gól
                </div>
                <div class="card-body">
                    @foreach($minGoals as $key => $item)
                    {{$item->nation}}: {{$item->goals}} gól
                    @endforeach
                </div>
            </div>
        </div>
        @endif


        @if(isset($mostGoalsF))
        <div class="col-6 col-md-4 mb-2">
            <div class="card text-bg-secondary">
                <div class="card-header">
                    Legtöbb gól az F csoportban
                </div>
                <div class="card-body">
                    @foreach($mostGoalsF as $key => $item)
                    {{$item->nation}}
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        @if(isset($sumGoals))
        <div class="col-6 col-md-4 mb-2">
            <div class="card text-bg-secondary">
                <div class="card-header">
                    Gólok összesen
                </div>
                <div class="card-body">
                    {{$sumGoals}} gól
                </div>
            </div>
        </div>
        @endif

        @if(isset($wonThree))
        <div class="col-6 col-md-4 mb-2">
            <div class="card text-bg-secondary">
                <div class="card-header">
                    Legalább 3-mat nyert
                </div>
                <div class="card-body">
                    {{$wonThree}} csapat
                </div>
            </div>
        </div>
        @endif


        @if(isset($drawnCount))
        <div class="col-6 col-md-4 mb-2">
            <div class="card text-bg-secondary">
                <div class="card-header">
                    Játszott döntetlent
                </div>
                <div class="card-body">
                    {{$drawnCount}} csapat
                </div>
            </div>
        </div>
        @endif

    </div>
</div>

@endsection