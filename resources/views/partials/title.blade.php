<link rel="icon" href="{{ URL::asset('images/logo.png') }}">
<title>MIDEN Hotel |
    @if (auth()->user()->role === 'admin')
    Admin
    @else
    Resepsionis
    @endif
</title>
