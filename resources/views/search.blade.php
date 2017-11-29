<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Search | Locohunter</title>
    <meta name="author" content="Locomotive Labs">
    <meta name="description" content="Locohunter food eatery">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Misc-->
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,600|Lato|Open+Sans|Material+Icons" type="text/css">
    <!--Import materialize.css-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="{{ asset('css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
</head>
<body>
    <div class="container">
        <!-- Logo and search bar -->
        <div class="row card-panel green lighten-3">
            <form action="/search" method="GET" id="cari">
                <div class="col s12">
                    <div class="col s2 logo">
                        <img src="https://cldup.com/qxy65mfeGo.png" width="75px" height="75px" alt="logo">
                        Locohunter
                    </div>
                    <div class="col offset-s1 s9">
                        <div class="row" style="margin-top: 30px;">
                            <div class="col s12 search-wrapper card input-field">
                                <input id="search" class="autocomplete" placeholder="Cari obat laparmu.." value="{{ $query }}" autocomplete="off"><i class="material-icons btn-search">search</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s1"></div>
            </div>

            <!-- Filter -->
            <div class="row card-panel teal lighten-4">
                <div class="col s1"></div>
                <div class="col s5">
                    <!-- price range -->
                    <label class="title-label">Rentang harga</label>
                    <br><br><br>
                    <input type="hidden" name="low" id="low">
                    <input type="hidden" name="high" id="high">
                    <div id="price-slider"></div>
                </div>
                <div class="col s2"></div>
                <div class="input-field col s3">
                    <br>
                    <select name="mode" form="cari">
                        <option value="" disabled selected>Pilih opsi</option>
                        <option value="relevance">Ngidam</option>
                        <option value="location">Mager</option>
                        <option value="price">Bokek</option>
                    </select>
                    <label class="title-label">Mode</label>
                </div>
                <div class="col s1"></div>
                <div class="col s12">
                    <div class="filter">
                        <br>
                        <button class="btn waves-effect waves-light " type="submit">Saring
                            <i class="material-icons left">filter_list</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="row">
            <div class="col s1"></div>
            <div class="col s12">

                <!-- Foreach loop -->
                <ul class="collection">
                    @foreach ($foodstuffs as $i => $foodstuff)
                        <li class="collection-item card-panel light-green lighten-5">
                            <img class="items-img" src="https://pbs.twimg.com/profile_images/3343963833/20a1d4e40685feccf83cdd8e54a34485.jpeg" alt="">
                            <div class="items">
                                <span class="item">{{ $foodstuff->name }}</span>
                                <div class="rating">
                                    <span class="star-icon full">☆</span>
                                    <span class="star-icon full">☆</span>
                                    <span class="star-icon full">☆</span>
                                    <span class="star-icon half">☆</span>
                                    <span class="star-icon">☆</span>
                                </div>
                                <p class="price" style="text-align: right">Rp {{ number_format($foodstuff->price, 2, ",", ".") }}</p>
                                <p class="place" style="text-align: right">{{ $foodstuff->eatspot->name }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>

            </div>
            <div class="col s1"></div>
        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/nouislider.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/search.js') }}"></script>
</body>
</html>
