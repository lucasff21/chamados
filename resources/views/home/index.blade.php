<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonte do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="/css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- CSS da aplicação -->
    <link href="{{ asset('./css/style.css') }}" rel="stylesheet">
    <script src="/js/scripts.js"></script>
</head>

<body>
    <div class="degrade-index">
        <header class="header-index">
            <h1 class="title-index">CHAMADOS</h1>
        </header>

        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <section>
                        <p class="paragrafo-index mt-5 text-muted">Sistema desenvolvido para registro e acompanhamento
                            de
                            chamados (EM
                            CONSTRUÇÃO) </p>


                        <div>
                            <h4 class="action-index">Ações</h4>
                            <div class="button-div">
                                <center>
                                    <button class="btn btn-primary"
                                        onclick="window.location.href = '/login'">Login</button>
                                    <button class="btn btn-primary"
                                        onclick="window.location.href = '/register'">Registar</button>
                                </center>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <footer>
            <div class="footer1">
                <a href="https://www.linkedin.com/in/lucas-franca-f-5805b6177/">
                    <img class="icon-index" src="https://cdn-icons-png.flaticon.com/512/174/174857.png" alt="">
                </a>
                <a href="https://github.com/lucasff21/chamados">
                    <img class="icon-index"
                        src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="">
                </a>
                <p>Todos direitos reservados <strong> Lucas França &copy; 2022 </strong> </p>
            </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
