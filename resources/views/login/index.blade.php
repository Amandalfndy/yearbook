<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
    </script>
    <title>Login</title>
</head>

<body>
    <section class="vh-100" style="background-color: #98C1D9;">
        <div class="container  h-100" >
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem; background-color: #D9D9D9">
                        <div class="row g-0">
                            <div class="col-md-7 col-lg-5 d-none d-md-block">
                                <img src="{{ url('../login.png') }}" width="400"
/>
                                
                            </div>
                            <div class="col-md-5  d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    
                                    <form method='POST' action='login'>
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                            <span class="h1 fw-bold mb-0" style="margin-left:30vh; ">LOGIN</span>
                                        </div>
                                        
                                        <div class="form-outline mb-4">
                                            <input type="text" class="form-control @error('username') is-invalid @enderror" style="width: 460px;" name="username" placeholder="Username" required/>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror password-input" style="width: 460px;" name="password" id="PassEntry" placeholder="Password" required/>
                                        </div>

                                        <div class="pt-1 mb-4 d-grid gap-2">
                                            <button class="btn btn-lg btn-block" style="background-color: #98C1D9"
                                                type="submit">Login</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>