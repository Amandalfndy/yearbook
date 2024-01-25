<html>

<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>@yield('title')</title>

    <script src="https://kit.fontawesome.com/4be914391d.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js">
    </script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        a {
            color: #000;
            text-decoration: none;
        }

        body {
            font-family: "Roboto", sans-serif;
        }

        .sidebar {
            width: 4rem;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            {{-- display: flex; --}}
            flex-direction: column;
            justify-content: space-between;
            z-index: 100;
            cursor: pointer;
            background:#D9D9D9; 
            transition: 0.5s;
            overflow: hidden;
        }

        .sidebar:hover {
            width: 12rem;
        }

        .brand {
            text-align: center;
            font-size: 1.4rem;
            padding: 1rem 0;
            color: #000;
        }

        .brand:hover {
            background: #ffff;
        }

        .brand span {
            display: none;
        }

        .nav-list {
            list-style: none;
            padding-left: 0
        }

        .nav-item {
            padding: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .nav-item:hover {
            background: #ffff;
            height: 20;
            border-radius: 8px;
        }

        .nav-item a {
            position: relative;
            white-space: nowrap;
            display: flex;
            gap: 1rem;
        }

        .nav-item__icon {
            position: relative;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .nav-item__text {
            position: relative;
            display: none;
            font-size: 1em;
            color: #000;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .avatar {
            width: 1.5rem;
            height: 1.5rem;
            border-radius: 50%;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8em;
            font-weight: 700;
        }

        .logout {
            margin-left: 0.2rem;
        }

        .sidebar:hover .brand span {
            display: inline;
        }

        .sidebar:hover .nav-item {
            justify-content: start;
        }

        .sidebar:hover .nav-item__text {
            display: flex;
            align-items: center;
        }
    </style>

</head>


<body>
    <div class="d-flex">
        {{-- sidebar --}}
        <div class="sidebar">
                <div class="d-flex align-items-center justify-content-center mt-2 p-2">
                    <img src="/foto/image 4 2.png" width="50" height="50" alt="Responsive image">
                </div>
               <hr>

            <ul class="nav-list">
                <li class="nav-item">
                    <a href="#">
                        <span class="nav-item__icon">
                            <i class="fa-solid fa-school"></i>
                        </span>
                        <span class="nav-item__text">
                            Sambutan
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#">
                        <span class="nav-item__icon">
                            <i class="fa-solid fa-sitemap"></i>
                        </span>
                        <span class="nav-item__text">
                            OSIS
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#">
                        <span class="nav-item__icon">
                           <i class="fa-solid fa-group-arrows-rotate"></i>
                        </span>
                        <span class="nav-item__text">
                            Organisasi BTS
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#">
                        <span class="nav-item__icon">
                           <i class="fa-solid fa-scroll"></i>
                        </span>
                        <span class="nav-item__text">
                            Visi dan Misi
                        </span>
                    </a>
                </li>
                  <li class="nav-item">
                    <a href="/guru">
                        <span class="nav-item__icon">
                           <i class="fa-solid fa-chalkboard-user"></i>
                        </span>
                        <span class="nav-item__text">
                            Guru
                        </span>
                    </a>
                </li>
                  <li class="nav-item">
                    <a href="#">
                        <span class="nav-item__icon">
                           <i class="fa-solid fa-user-graduate"></i>
                        </span>
                        <span class="nav-item__text">
                            Kelas
                        </span>
                    </a>
                </li>
            </ul>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="#">
                        <span class="nav-item__icon logout">
                           <i class="fa-solid fa-right-from-bracket"></i>
                        </span>
                        <span class="nav-item__text">
                            Logout
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <footer>
        @yield('footer')
    </footer>
</body>

<html>
