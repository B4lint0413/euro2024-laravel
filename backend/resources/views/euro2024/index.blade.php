@extends("layouts.main")

@section("title",$title ?? "Cím nincs megadva!")

@section('content')
<div class="container">

    <div class="row">
        <div class="col-12">
            <h1 class="my-3">{{$title ?? "Cím nincs megadva!"}}</h1>
        </div>
    </div>

    @if(isset($items))
    <div class="row">
        <table class="table table-striped table-primary">
            <thead>
                <tr>
                    <th>Ország</th>
                    <th>Meccsek száma</th>
                    <th>Nyert</th>
                    <th>Döntetlen</th>
                    <th>Vesztett</th>
                    <th>Gólok</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $key => $item)
                <tr>
                    <td>{{$item->nation}}</td>
                    <td>{{$item->played}}</td>
                    <td>{{$item->won}}</td>
                    <td>{{$item->drawn}}</td>
                    <td>{{$item->lost}}</td>
                    <td>{{$item->goals}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @if(
        $items instanceof \Illuminate\Pagination\Paginator ||
        $items instanceof Illuminate\Pagination\LengthAwarePaginator
        )

        {{$items->links('vendor.pagination.bootstrap-5')}}
        @else
        <div class="alert alert-info">
            A lapozó megjelenítéséhez majd a <code>paginate(6)</code> metódust kell meghívni a QueryBuilder legvégén.
        </div>
        @endif
    </div>
    @endif


    @if(isset($final))
    <div class="row">
        <div class="col-12">
            <h2 class="mb-1"> Döntősök </h2>
        </div>
        <h4 class="text-center">{{$final[0]->nation}}<sub>🇪🇸</sub> - {{$final[1]->nation}}<sub>🇬🇧</sub></h4>
        <div class="col-12">
        </div>


    </div>
    @endif

</div>

@endsection