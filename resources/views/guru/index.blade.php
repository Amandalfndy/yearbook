@extends('layout.layout')
@section('guru', 'active')
@section('title', 'Guru')
@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
        </script>
        <style>
            body {
                background-image: url('{{ asset('gelombang.png') }}');
                background-repeat: none;
                background-size: 100%;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                height: 100vh;
                margin: 0;
                /* hapus default margin */
                display: flex;
                align-items: center;
                justify-content: center;
            }
        </style>
    </head>

    <body>
        <div class="d-flex row">
            <div class="d-flex justify-content-center align-item-center">
                <h1 style="font-family: monospace; font-size: 9vh;"><b>GURU</b></h1>
            </div>

            <div class="card outer-card mx-auto" style=" border-color: black; border: solid black; width: max-content">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <div class="card"
                            style=" width:110vh ;border-color: black; height: max-content; position: relative">
                            <img src="/foto/guru.png" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-3 d-flex " style="gap: 10px; justify-content:END">

            </div>
        </div>

    </body>

    </html>
