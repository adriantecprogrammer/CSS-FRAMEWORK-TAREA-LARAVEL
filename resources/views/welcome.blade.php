<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>



</head>

<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
        gap: 4px;
        width: 100%;
        height: 100%;
    }

    h1 {
        text-align: center;
        font-size: 2rem;
        font-weight: 600;
        color: #000;
        margin-bottom: 20px;
        margin-top: 20px;
        text-transform: uppercase;
    }
</style>




<body class=" p-3  bg-primary-subtle">


    <h1>
        ESTA PAGINA ESTA HECHA CON MATERIALIZE
    </h1>
    <div class="container">
        <div class="row">
            <div class="col s12 m6">
                <div class="card">
                    <div class="card-image">
                        <img src="https://i.pinimg.com/736x/60/86/01/608601478f57fa75ab245cf8d00057b3.jpg">

                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6">
                <div class="card">
                    <div class="card-image">
                        <img src="https://i.pinimg.com/736x/c8/f3/2a/c8f32ad440930de7f8fdd3a5f6f65db4.jpg">

                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6">
                <div class="card">
                    <div class="card-image">
                        <img src="https://i.pinimg.com/736x/61/88/b6/6188b66bfbfe2358b3e07f0618424385.jpg">

                        <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



</body>

</html>