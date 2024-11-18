@extends("layouts.main")

@section("title",$title ?? "Cím nincs megadva!")

@section('content')
<div class="container">

    <div class="row">
        <div class="col-12">
            <h1 class="my-3">{{$title ?? "Cím nincs megadva!"}}</h1>
        </div>
    </div>


    @if(isset($hungary))
    <div class="row">
        @foreach($hungary as $key => $hun)
        <div class="col-4 mb-2">
            <div class="card">
                <div class="card-header bg-danger">
                    <b>Csoport</b>
                </div>
                <div class="card-body">
                    {{$hun->group}}
                </div>
            </div>
        </div>
        <div class="col-4 mb-2">
            <div class="card">
                <div class="card-header">
                    <b> Meccsek száma</b>
                </div>
                <div class="card-body">
                    {{$hun->played}}
                </div>
            </div>
        </div>
        <div class="col-4 mb-2">
            <div class="card">
                <div class="card-header bg-success">
                    <b> Gólok száma </b>
                </div>
                <div class="card-body">
                    {{$hun->goals}}
                </div>
            </div>
        </div>
        <div class="col-4 mb-2">
            <div class="card">
                <div class="card-header bg-danger">
                    <b>Győzelmek száma</b>
                </div>
                <div class="card-body">
                    {{$hun->won}}
                </div>
            </div>
        </div>
        <div class="col-4 mb-2">
            <div class="card">
                <div class="card-header">
                   <b> Vereségek száma</b>
                </div>
                <div class="card-body">
                    {{$hun->lost}}
                </div>
            </div>
        </div>
        <div class="col-4 mb-2">
            <div class="card">
                <div class="card-header bg-success">
                    <b>Döntetlenek száma</b>
                </div>
                <div class="card-body">
                    {{$hun->drawn}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>

@endsection