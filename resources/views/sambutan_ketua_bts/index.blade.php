@extends('layout.layout')
@section('sambutan_ketua_bts', 'active')
@section('title', 'Organisasi BTS')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
    </script>
    <style>
        body{
            background-image: url('{{ asset('bg_blob.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh; 
            margin: 0; /* hapus default margin */
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div>
    <div class="card outer-card mx-auto" style="width: 50%; border-color: black; border: solid black;">
        <div class="card-body">
            <div class="d-flex">
                <div class="card" style="width: 35vh; border-color: black; height: max-content; position: relative">
                    <img src="/Rectangle 38.png" class="card-img-top" alt="...">
                </div>
                <h1 style="font-family: monospace; margin-left: 8vh; margin-top: 1vh; font-size: 9vh"><b>Sambutan Ketua<br> BTS </b></h1>
            </div>
            <div class="card" style="width: 32vh; border-color: black; height: max-content; margin-left: 10vh; position: relative; margin-top: -25px">
                <p class="text-center" style="margin: 5px "><b>Amanda Andriyani</b></p>
            </div>
            <div>
                <p>Assalamu'alaikum Wr.Wb
                    Kita panjatkan puji syukur ke hadirat Allah SWT beserta Nabi Muhammad SAW beserta sahabat-sahabatnya yang telah memberikan karunia dan kenikmatan yang tak terhitung banyaknya.
                    Bersamaan dengan datangnya tahun ajaran 2022/2023, Website SMK Negeri 1 Kota Bekasi hadir dengan wajah yang baru. Pergantian web ini dirasa sangat penting artinya bagi SMK Negeri 1 Kota Bekasi, karena website adalah halaman muka dan sumber informasi dari sebuah institusi. Seiring perkembangan jaman dan kemajuan teknologi IT yang berkembang dengan cepat maka SMK Negeri 1 Kota Bekasi harus selalu mampu mengikutinya.
                    Wassalamu'alaikum wr.wb.</p>
        
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-3" style="margin-right: 92vh">
        <button type="button" class="btn btn-primary">Tambah</button>
        <button type="button" class="btn btn-warning" style="margin-left: 2vh">Edit</button>
    </div>
</div>
</body>

</html>
