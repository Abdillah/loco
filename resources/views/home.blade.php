@extends('layouts.base')

@section('app.style')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<link rel="stylesheet" href="{{ asset('library/ion.rangeSlider-2.2.0/css/ion.rangeSlider.css') }}">
<link rel="stylesheet" href="{{ asset('library/ion.rangeSlider-2.2.0/css/ion.rangeSlider.skinFlat.css') }}">
<style media="screen">
    #search {
        display: block;
        font-size: 16px;
        font-weight: 300;
        width: 100%;
        height: 45px;
        margin: 0;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding: 0 45px 0 15px;
        border: 0;
    }

    .search-wrapper i {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }

    .btn-group {
        text-align: center;
    }

    .btn-group .btn {
        display: inline-block;
        background-color: white;
        color: #333;
        padding-left: 1rem;
        padding-right: 1rem;
        box-shadow: none;
        border: 1px solid #333;
    }

    .btn-group .btn:hover {
        background-color: #eee;
    }

    .btn-group .btn.active {
        background-color: #2bbbad;
        color: white;
    }

    .btn-group .btn.active:hover {
        background-color: #2bbbad;
    }

    .btn-group .btn:first-child {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    .btn-group .btn:last-child {
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
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
                    Loco
                </div>
            </div>
            <div class="row">
                <div class="col s12 search-wrapper card">
                    <input id="search" placeholder="Cari obat laparmu.."><i class="material-icons btn-search">search</i>
                    <div class="search-results"></div>
                </div>
            </div>
            <div class="row" style="margin-top: 20px">
                <div>
                    <div class="row">
                        <div class="col s6">
                            <center><strong>Mode</strong></center>
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
                                <center><strong>Bokek meter</strong></center>
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
