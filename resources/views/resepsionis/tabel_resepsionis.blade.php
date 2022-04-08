@extends('layouts.main_resepsionis')

@section('tabel_resepsionis')
<ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link {{ ($title === 'Pending') ? 'active' : '' }}" aria-current="page" href="/pending">Pending</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ ($title === 'On Going') ? 'active' : '' }}" href="/ongoing">On Going</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ ($title === 'History') ? 'active' : '' }}" href="/history">History</a>
    </li>
  </ul>
  @yield('pending')
  @yield('ongoing')
  @yield('history')
@endsection
