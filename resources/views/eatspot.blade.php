@extends('layouts.base')

@section('app.title')
    {{ $eatspot->name }} | Loco
@endsection

@section('app.style')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<style media="screen">
body {
    font-family: 'Lato';
    background-image: url(https://cldup.com/qstFqZCgVY.png);
    background-size: contain;
    padding-top: 3%;
    padding-bottom: 3%;
}
</style>
@endsection

@section('app.script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {});
</script>
<script>
  function initMap() {
    var uluru = {lat: -25.363, lng: 131.044};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 4,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
</script>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col m8 col offset-m2">
            <div class="card" style="margin-top: 20px">
                <div class="card-image">
                    <img style="max-height: 250px;" src="{{ asset('img/burjo.jpg') }}" />
                    <span class="card-title">{{ $eatspot->name }}</span>
                </div>
                <div class="card-content">
                    {{-- <h1 style="font-size: 2em; font-family: 'Raleway', sans-serif;">
                        {{ $eatspot->name }}
                    </h1> --}}
                    <p>
                        {{ $eatspot->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col m8 col offset-m2">
            <div class="card">
                <div class="card-content">
                    <p>Peta di sini: Tanya Dora</p>
                    <div id="map">
                        <iframe
                          width="600"
                          height="450"
                          frameborder="0" style="border:0"
                          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA-rBXQJg_oyYNCD3ArZpry51dG5L8uhok
                            &q=Yogyakarta" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col m8 col offset-m2">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">
                        Menu Makanan
                    </span>
                    <p>Belum buka ^^</p>
                </div>
                {{-- Maps and Navigation --}}
            </div>
        </div>
    </div>
</div>
@endsection
