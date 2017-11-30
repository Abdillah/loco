@extends('layouts.base')

@section('app.title')
Lapar? Cari menumu dengan cepat! | Locohunter
@endsection

@section('app.style')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<link rel="stylesheet" href="{{ asset('library/ion.rangeSlider-2.2.0/css/ion.rangeSlider.css') }}">
<link rel="stylesheet" href="{{ asset('library/ion.rangeSlider-2.2.0/css/ion.rangeSlider.skinFlat.css') }}">
<link rel="stylesheet" href="{{ asset('css/component-search.css') }}">
<style media="screen">
    body {
        background-image: url(https://cldup.com/qstFqZCgVY.png);
        background-size: cover;
    }

    .logo-loco {
        vertical-align: text-bottom;
        width: 100px;
    }

    .panel-location {
        text-align: center;
        color: #888;
    }

    #user-location {
        display: inline-block;
    }
</style>
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
@endsection

@section('app.script')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script type="text/javascript" src="{{ asset('library/ion.rangeSlider-2.2.0/js/ion-rangeSlider/ion.rangeSlider.min.js')}}" crossorigin="anonymous"></script>
<script>
var searchMode = "{{ $searchMode }}";
</script>
<script type="text/javascript" src="{{ asset('js/component-search.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/location.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var location = JSON.parse(localStorage.getItem('user.location'));
        if (location === null || location['state'] !== 'success') {
            askLocationAndAddress().then(function(location) {
                $('#lat').val(location['lat']);
                $('#lon').val(location['lon']);
                $('#user-location').text(location['addr']);
            });
        } else {
            $('#lat').val(location['lat']);
            $('#lon').val(location['lon']);
            location['addr'] && $('#user-location').text(location['addr']);
        }

        $('#change-user-location').click(askLocationAndAddress);
    })
</script>
@endsection

@section('content')
<div class="container" style="margin-top: 25vh">
    <div class="row">
        <div class="col m8 col offset-m2">
            <form action="/search" method="GET" id="cari">
                <div class="row">
                    <div class="col s12" style="text-align: center; font-size: 4em; font-family: 'Raleway', sans-serif;">
                        <img class="logo-loco" src="https://cldup.com/qxy65mfeGo.png" alt=""> Locohunter
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 search-wrapper card">
                        <input id="search" class="autocomplete" name="q" placeholder="Cari obat laparmu.." autocomplete="off"><i class="material-icons btn-search">search</i>
                        <div class="search-results"></div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px">
                    <div>
                        <div class="row">
                            <div class="col s6">
                                <div class="title-label"><center>Mode</center></div>
                                <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group" role="group" aria-label="First group">
                                        <a href="/?mode=relevance" class="btn btn-small {{ (!isset($searchMode) || $searchMode === 'relevance')? 'active' : '' }}">Ngidam</a>
                                        <a href="/?mode=price" class="btn btn-small {{ $searchMode === 'price'? 'active' : '' }}">Bokek</a>
                                        <a href="/?mode=location" class="btn btn-small {{ $searchMode === 'location'? 'active' : '' }}">Mager</a>
                                    </div>
                                </div>
                                <input type="hidden" name="mode" value="{{ $searchMode ?: 'relevance' }}">
                            </div>
                            <div class="col s6">
                                @if (isset($searchMode) && $searchMode === 'price')
                                    <div class="title-label"><center>Bokek meter</center></div>
                                    <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                                        <input type="text" id="price-range" name="price-range" value="" />
                                    </div>
                                @elseif (isset($searchMode) && $searchMode === 'location')
                                    <div class="title-label"><center><i class="material-icons">place</i> Mager checkpoint</center></div>
                                    <div class="panel-location mb-3" role="toolbar" aria-label="Toolbar with button groups">
                                        <div id="user-location">Locating... (we need your location)</div> (<a id="change-user-location" href="#">Change</a>)
                                        <input type="hidden" id="lat" name="lat" value="" />
                                        <input type="hidden" id="lon" name="lon" value="" />
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            @if (isset($searchMode) && $searchMode !== 'location')
                <div class="row">
                    <div class="col s8 offset-s2 panel-location">
                        <i class="material-icons">place</i> <div id="user-location">Locating... (we need your location)</div> (<a id="change-user-location" href="#">Change</a>)
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
