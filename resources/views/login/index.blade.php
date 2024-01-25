<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
     <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .vh-100 {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #98C1D9;
            overflow: auto;
        }

        .card-container {
            display: flex;
            justify-content: center;
        }

        .card {
            border-radius: 1rem;
            background-color: #D9D9D9;
            /* display: flex; */
            /* align-items: center; */
            /* overflow: hidden; */
        }

        /* .card-body {
            padding: 2rem 2rem;
        } */

        .card-image {
            flex-shrink: 0;
            width: 400px; /* Adjust the width as needed */
            height: auto;
            object-fit: cover;
        }

        .card-content {
            flex-grow: 1;
        }

        .btn {
            background-color: #98C1D9;
            color: white;
        }

        .btn:hover {
            background-color: #7ab0cc;
        }
    </style>
    <title>Login</title>
</head>

<body>

    <section class="vh-100">
    <div class="card mb-3">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="{{ url('../login.png')}}" class="card-img" style="height: 100%; width: 100%">
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <div class="card-body">
              <form action="
              ">
              <div class="mb-3 pb-1 d-flex align-items-center justify-content-center" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <span class="h1 fw-bold mb-0">LOGIN</span>
            </div>
            <div class="form-group mb-4">
                <label><b>Username</b></label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Masukan Username" required />
            </div>
            <div class="form-group mb-4">
                <label><b>Password</b></label>
                <input type="password" class="form-control @error('password') is-invalid @enderror password-input" name="password" id="PassEntry" placeholder="Masukan Password" required />
            </div>
            <div class="pt-1 mb-4 d-grid gap-2">
                <button class="btn btn-lg btn-block" type="submit">Login</button>
            </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>
