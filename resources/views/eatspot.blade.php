@extends('layouts.base')

@section('app.style')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
@endsection

@section('app.script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {});
</script>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col m8 col offset-m2">
            <div class="card" style="margin-top: 20px">
                <div class="card-image">
                    <img style="max-height: 250px;" src="images/sample-1.jpg" />
                    <span class="card-title">Card Title</span>
                </div>
                <div class="card-content">
                    <h1 style="font-size: 2em; font-family: 'Raleway', sans-serif;">
                        {{ $eatspot->name }}
                    </h1>
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
                    <p>Maps here</p>
                </div>
                {{-- Maps and Navigation --}}
            </div>
        </div>
    </div>
</div>
@endsection
