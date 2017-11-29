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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Material+Icons" type="text/css">
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
                <div class="col s1"></div>
                <div class="col s10">
                    <div class="col s3 logo">
                        <img src="https://cldup.com/qxy65mfeGo.png" width="75px" height="75px" alt="logo">
                        Locohunter
                    </div>
                    <div class="col s1"></div>
                    <div class="input-field col s6">
                        <br>
                        <input type="text" id="autocomplete-input" class="autocomplete" name="q" value="{{ $query }}">
                        <label class="title-label" for="autocomplete-input">Cari makanan...</label>
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
                        <option value="ngidam">Ngidam</option>
                        <option value="mager">Mager</option>
                        <option value="bokek">Bokek</option>
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

        <div class="row card-panel  light-green lighten-5">
            <div class="col s1"></div>
            <div class="col s10">

                <!-- Foreach loop -->
                <ul class="collection">
                    <li class="collection-item">
                        <img class="items-img" src="https://pbs.twimg.com/profile_images/3343963833/20a1d4e40685feccf83cdd8e54a34485.jpeg" alt="">
                        <div class="items">
                            <span class="item">Tempe Goreng</span>
                            <br><br>
                            <span class="star-icon full">☆</span>
                            <span class="star-icon full">☆</span>
                            <span class="star-icon full">☆</span>
                            <span class="star-icon half">☆</span>
                            <span class="star-icon">☆</span>
                        </div>
                        <p class="price">Rp 6.000</p>
                        <p class="place">Spesial Sambal</p>
                    </li>
                </ul>

                <ul class="collection">
                    <li class="collection-item">
                        <img class="items-img" src="https://c1.staticflickr.com/7/6033/6276453540_5ea46e97e8_b.jpg" alt="">
                        <div class="items">
                            <span class="item">Nasi Goreng</span>
                            <br><br>
                            <span class="star-icon full">☆</span>
                            <span class="star-icon full">☆</span>
                            <span class="star-icon full">☆</span>
                            <span class="star-icon full">☆</span>
                            <span class="star-icon half">☆</span>
                        </div>
                        <p class="price">Rp 10.000</p>
                        <p class="place">Burjo Berkah</p>
                    </li>
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
