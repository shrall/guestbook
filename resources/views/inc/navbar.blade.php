<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item @if ($pages=='index')active @endif">
                <a class=" nav-link" href="/">Home</a>
            </li>
            <li class="nav-item @if ($pages=='jadwal')active @endif">
                <a class="nav-link" href="/pages/jadwal">Jadwal</a>
            </li>
            <li class="nav-item @if ($pages=='kontak')active @endif">
                <a class="nav-link" href="/pages/kontak">Kontak</a>
            </li>
            <li class="nav-item @if ($pages=='event')active @endif">
                <a class="nav-link" href="/event">Events</a>
            </li>
        </ul>
    </div>
</nav>
