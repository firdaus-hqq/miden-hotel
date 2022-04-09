<div class="container fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light border-bottom bg-white">
        <div class="container-fluid">
            <a class="navbar-brand text-brown" href="/">
                <img src="images/logo.png" width="30" height="30" alt="logo"
                    class="d-inline-block align-text-top text-color-primary">
                <span class="text-brown"> <b> MIDEN </b>Hotel</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Dashboard") ? 'active' : ''}} aria-current="page" href="/dashboard">Dashboard</a>
                    </li>
                    @if (auth()->user()->role === 'admin')
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Kamar") ? 'active' : ''}}" href="/kamar_admin">Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Kelas Kamar") ? 'active' : ''}}" href="/kelas_kamar">Kelas Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Fasilitas Kamar") ? 'active' : ''}}" href="/fasilitas_kamar">Fasilitas Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === "Fasilitas Hotel") ? 'active' : ''}}" href="/fasilitas_hotel">Fasilitas Hotel</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link {{ ($title !== 'Dashboard') ? 'active' : '' }}" aria-current="page" href="/pending">Data Reservasi</a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="nav-link btn btn-1 text-white">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
