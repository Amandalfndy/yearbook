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
    <div class="card outer-card mx-auto" style="width: 50%; border-color: black; border: solid black;">
        <div class="card-body">
            <div class="d-flex">
                <div class="card" style="width: 12rem; border-color: black; height: max-content; position: relative">
                    <img src="/Rectangle 38.png" class="card-img-top" alt="...">
                </div>
                <h1 style="font-family: monospace; margin-left: 3rem; margin-top: 1rem; font-size: 9vh"><b>Sambutan <br> Kepala <br> Sekolah</b></h1>
            </div>
            <div class="card" style="width: 10rem; border-color: black; height: max-content; margin-left: 10vh; position: relative; margin-top: -25px">
                <p class="text-center" style="margin: 5px"><b>Drs.Boan M.pd</b></p>
            </div>
            <div>
                <p>Assalamu'alaikum Wr.Wb
                    Kita panjatkan puji syukur ke hadirat Allah SWT beserta Nabi Muhammad SAW beserta sahabat-sahabatnya yang telah memberikan karunia dan kenikmatan yang tak terhitung banyaknya.
                    Bersamaan dengan datangnya tahun ajaran 2022/2023, Website SMK Negeri 1 Kota Bekasi hadir dengan wajah yang baru. Pergantian web ini dirasa sangat penting artinya bagi SMK Negeri 1 Kota Bekasi, karena website adalah halaman muka dan sumber informasi dari sebuah institusi. Seiring perkembangan jaman dan kemajuan teknologi IT yang berkembang dengan cepat maka SMK Negeri 1 Kota Bekasi harus selalu mampu mengikutinya.
                    Wassalamu'alaikum wr.wb.</p>
            </div>
        </div>
    </div>
</body>

</html>
