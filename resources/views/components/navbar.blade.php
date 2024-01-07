@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
@endpush
<nav>
    <h1 href="">{{ auth()->user()->nama }}</h1>
    <a class="btn-keluar" href="{{ route('keluar') }}">Keluar</a>
    <hr class="line-nav">
</nav>