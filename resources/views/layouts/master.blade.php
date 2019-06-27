<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Test ckc-net - {{ $title }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #2C3B4D;
                font-family: 'Nunito', sans-serif;
                height: 100vh;
                margin: 0;
                text-align: center;
            }

            nav {
              margin-bottom: 20px;
            }

            .title {
                font-size: 42px;
                background-color: #F27267;
                color: #fff;
                padding: 20px 0;
            }

            main {
                margin: 0 80px;
            }

            footer {
              margin-top: 30px;
            }

            footer p {
              color: #F27267;
              font-weight: bold;
              font-style: italic;
              border-top: 1px #F27267 solid;
              padding-top: 20px;
            }

            .container {
              justify-content: space-around;
            }

            .left-block {
              border: 1px green solid;
            }

            .right-block {
              border: 1px orange solid;
            }
        </style>
    </head>

    <body>

      <header>
          <h1 class="title">Test technique</h1>
      </header>

      <nav class="navbar justify-content-center navbar-expand-lg navbar-light">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="/" class="nav-link"><button class="btn btn-outline-warning">Accueil</button></a>
          </li>
          <li class="nav-item">
            <a href="/message" class="nav-link"><button class="btn btn-outline-warning">Formulaire</button></a>
          </li>
        </ul>
      </nav>

      <main>
          @yield('main')
      </main>

      <footer>
          <p><?php echo 'Aurélie Favre-Brun' . ' - ' . date('d/m/Y') ?></p>
      </footer>

      <script src="//code.jquery.com/jquery.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>
