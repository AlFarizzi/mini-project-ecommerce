@auth
    @if (Auth::user()->level->level == "penjual")
    <li class="nav-item">
        <a class="nav-link" href="{{route("penjual.index")}}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route("penjual.tambah_barang")}}">Data Barang</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Data Pesanan</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{Auth::user()->nama}}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <li><a class="dropdown-item" href="{{route("penjual.update_profile")}}">Update Profile</a></li>
        <li><a class="dropdown-item" href="/logout">Logout</a></li>
        </ul>
    </li>
    @endif

@endauth

@guest
<li class="nav-item">
    <a class="nav-link" href="{{route("all.index")}}">Home</a>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Masuk ?
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <li><a class="dropdown-item" href="/logout">Admin</a></li>
        <li><a class="dropdown-item" href="{{route("penjual.login")}}">Penjual</a></li>
        <li><a class="dropdown-item" href="{{route("pembeli.login")}}">Pembeli</a></li>
    </ul>
</li>
@endguest

