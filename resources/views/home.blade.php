@extends('layouts.base')

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
</style>
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
@endsection

@section('app.script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="{{ asset('library/ion.rangeSlider-2.2.0/js/ion-rangeSlider/ion.rangeSlider.min.js')}}" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#price-range").ionRangeSlider({
            type: 'double',
            min: 5000,
            max: 100000,
            step: 500,
            from: 8000,
            to: 40000,
        });

        function search(query) {
            window.location = '/search?q=' + query;
        }

        $('#search').keypress(function(e) {
            if (e.keyCode === 13) {
                var query = $(this).val();
                search(query);
            }
        });

        $('.btn-search').click(function(e) {
            var query = $(this).val();
            search(query);
        });
    });
</script>
@endsection

@section('content')
<div class="container" style="margin-top: 30vh">
    <div class="row">
        <div class="col m8 col offset-m2">
            <div class="row">
                <div class="col s12" style="text-align: center; font-size: 4em; font-family: 'Raleway', sans-serif;">
                    <img class="logo-loco" src="https://cldup.com/qxy65mfeGo.png" alt=""> Locohunter
                </div>
            </div>
            <div class="row">
                <div class="col s12 search-wrapper card">
                    <input id="search" name="q" placeholder="Cari obat laparmu.."><i class="material-icons btn-search">search</i>
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
                                    <a href="/?mode=price" class="btn btn-small {{ (!isset($searchMode) || $searchMode === 'price')? 'active' : '' }}">Bokek</a>
                                    <a href="/?mode=location" class="btn btn-small {{ $searchMode === 'location'? 'active' : '' }}">Mager</a>
                                    <a href="/?mode=relevance" class="btn btn-small {{ $searchMode === 'relevance'? 'active' : '' }}">Ngidam</a>
                                </div>
                            </div>
                        </div>
                        <div class="col s6">
                            @if (!isset($searchMode) || $searchMode === 'price')
                                <div class="title-label"><center>Bokek meter</center></div>
                                <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                                    <input type="text" id="price-range" name="price-range" value="" />
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
