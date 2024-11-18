@php
$menuItems = [
["route" => "home", "text" => "Főoldal"],
["route" => "euro2024.hungary", "text" => "Magyarország"],
["route" => "euro2024.nations", "text" => "Országok"],
["route" => "euro2024.statistics", "text" => "Statisztikák"]
]
@endphp
<nav class="navbar navbar-expand-md" data-bs-theme="dark" style="background-color:rgb(13 30 98)">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route("home")}}">Euro2024</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @foreach($menuItems as $menuItem)
                @if(Route::has($menuItem["route"]))
                <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName() == $menuItem["route"] ? "active": ""}}" href="{{route($menuItem["route"])}}">
                        {{$menuItem["text"]}}
                    </a>
                </li>
                @endif
                @endforeach
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Csoportok
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item nav-link {{Route::currentRouteName() == $menuItem["route"] ? "active": ""}}" href="/groups/A">A</a></li>
                        <li><a class="dropdown-item nav-link {{Route::currentRouteName() == $menuItem["route"] ? "active": ""}}" href="/groups/B">B</a></li>
                        <li><a class="dropdown-item nav-link {{Route::currentRouteName() == $menuItem["route"] ? "active": ""}}" href="/groups/C">C</a></li>
                        <li><a class="dropdown-item nav-link {{Route::currentRouteName() == $menuItem["route"] ? "active": ""}}" href="/groups/D">D</a></li>
                        <li><a class="dropdown-item nav-link {{Route::currentRouteName() == $menuItem["route"] ? "active": ""}}" href="/groups/E">E</a></li>
                        <li><a class="dropdown-item nav-link {{Route::currentRouteName() == $menuItem["route"] ? "active": ""}}" href="/groups/F">F</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>