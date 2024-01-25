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

    <body></body>