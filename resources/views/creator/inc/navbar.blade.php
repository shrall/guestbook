{{-- <li class="nav-item @if ($pages ?? ''=='index')active @endif">
    <a class=" nav-link" href="/">Home</a>
</li>
<li class="nav-item @if ($pages ?? ''=='jadwal')active @endif">
    <a class="nav-link" href="/pages/jadwal">Jadwal</a>
</li> --}}


{{-- yang penting ini aja --}}
<li class="nav-item @if ($pages ?? ''=='event')active @endif">
    <a class="nav-link" href="{{ route('creator.event.index') }}">Events</a>
</li>
{{-- yang penting ini aja --}}
