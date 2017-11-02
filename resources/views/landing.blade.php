@extends ('_base')

@section ('page.title', 'Home | Loco Food')

@section ('page.style')
@endsection

@section ('page.content')
    <nav class="navbar fixed-top navbar-dark bg-dark justify-content-between">
        <a class="navbar-brand">Loco</a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Makanan, Minuman, Lalapan" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Cari</button>
        </form>
    </nav>
    <div class="jumbotron jumbotron-fluid" style="background-image: url('{{ asset('img/landing-banner-1.jpg') }}'); background-size: cover;">
        <div class="container">
            <h1 class="display-3" style="color: #888;">Lapar?</h1>
            <p class="lead" style="color: #999; text-shadow: 0 0 0 white;"><strong>Cari seleramu di sini!</strong></p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="alert alert-warning">
                    Under Heavy Construction<br/>
                    <small>Loco Hunter - Food Edition</small>
                </div>


            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col col-offset-1">
                Copyright (c) 2020 <a href="https://locohunter.com/">Locomotive</a>
            </div>
        </div>
    </div>
@endsection
