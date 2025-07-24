<!DOCTYPE html>
<html lang="it">

<head>
    <title>HomePage</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://img.icons8.com/?size=100&id=6oFZ7BIVGUGH&format=png&color=000000" type="image/gif"
        sizes="16x16" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-body-tertiary mb-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img src="https://img.icons8.com/?size=100&id=6oFZ7BIVGUGH&format=png&color=000000" alt="Logo"
                        width="30" height="30" class="d-inline-block align-text-top">
                    CompTech
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/prodotti">Prodotti</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contatti">Contatti</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Cerca" aria-label="Search" />
                        <button class="btn btn-outline-success" type="submit">Cerca</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="jumbotron d-grid gap-3 text-center">
            <h1>CompTech</h1>
            <p><em>Il tuo hardware, senza svuotare il portafoglio.</em></p>
        </div>
        <div>
            <h4>Descrizione dei vari componenti in un PC.</h4>
        </div>
        <section class="row gap-3 mt-5 mb-3">
            <div class="col-md-4 gap-3"> <img
                    src="https://img.icons8.com/?size=100&id=G02MS1OblWEZ&format=png&color=000000" alt="Logo"
                    width="30" height="30" class="d-inline-block align-text-top">
                <p>Una scheda video è un componente del computer che elabora e visualizza le immagini sullo schermo,
                    principalmente utilizzata per giochi, grafica e video.</p> <img
                    src="https://img.icons8.com/?size=100&id=13105&format=png&color=000000" alt="Logo"
                    width="30" height="30" class="d-inline-block align-text-top">
                <p>Il processore (CPU) è il cervello del computer, che esegue i calcoli e gestisce le istruzioni per far
                    funzionare il sistema.</p><img
                    src="https://img.icons8.com/?size=100&id=tQou6TnHcjDS&format=png&color=000000" alt="Logo"
                    width="30" height="30" class="d-inline-block align-text-top">
                <p>La scheda madre è la principale componente del computer che collega e permette la comunicazione tra
                    tutti gli altri pezzi, come CPU, RAM e schede di espansione.</p>
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>
