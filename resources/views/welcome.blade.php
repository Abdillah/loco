@extends ('_base')

@section ('page.title')
    Home | Loco Food
@stop

@section ('page.style')
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
@endsection

@section ('page.content')
    <div class="title m-b-md">
        Under Heavy Construction<br/>
        <small>Loco Hunter - Food Edition</small>
    </div>

    <div class="links">
        <a href="https://locohunter.com/">About</a>
        <a href="https://github.com/Abdillah/loco">GitHub</a>
    </div>
@endsection
