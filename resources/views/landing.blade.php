@extends ('_base')

@section ('page.title', 'Home | Loco Food')

@section ('page.style')
@endsection

@section ('page.content')
    {!! MaterializeCSS::include_full() !!}
    <link rel="stylesheet" href="http://yourdomain.com/materialize-css/css/materialize.min.css">
    <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="http://yourdomain.com/materialize-css/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <nav>
    <div class="nav-wrapper">
      <div class="brand-logo center">LOCO</div>
      <form>
        <div class="input-field">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>


<ul class="collection with-header">
    <li class="collection-header"><h8>Jenis Makanan</h8></li>
    <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="fastfood" src="https://upload.wikimedia.org/wikipedia/commons/2/2e/Fast_food_meal.jpg">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Makan Cepat<i class="material-icons right">more_vert</i></span>
                <p><a href="#">Cari</a></p>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Makan Cepat<i class="material-icons right">close</i></span>
                <p>Makan cepat, adalah berbagai jenis makanan yang dapat di santap dalam kurun waktu 10 - 15 menit.</p>
            </div>
    </div>
     <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
             <img class="activator" src="http://gldelapan.com/images/WATERMARK/201603/20053/masakan-indonesia-nasi-bakso-telur.jpg">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Makan Sedang<i class="material-icons right">more_vert</i></span>
                <p><a href="#">Cari</a></p>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Makan Sedang<i class="material-icons right">close</i></span>
                <p>Makan sedang, adalah berbagai jenis makanan yang dapat di santap dalam kurun waktu 15 - 20 menit.</p>
            </div>
        </div>
     <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
             <img class="activator" src="https://nacelopendoor.files.wordpress.com/2017/03/blog-5-2.jpg?w=736">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Makan Lama<i class="material-icons right">more_vert</i></span>
                <p><a href="#">Cari</a></p>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Makan Lama<i class="material-icons right">close</i></span>
                <p>Makan lama, adalah berbagai jenis makanan yang dapat di santap dalam kurun waktu yang lebih dari 20 menit.</p>
            </div>
    </div>
</ul>





    <style>
        .card {
            min-height: 150px;
            min-width: 50%;
            height: 250px;
            width:auto;
        }

        .fastfood {
            min-height: 100px;
            min-width: 50%;
            height: auto;
            width:auto;
        }

    </style>

@endsection



