<!DOCTYPE html>
<html lang="it">

<head>
    <title>Contatti</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://img.icons8.com/?size=100&id=6oFZ7BIVGUGH&format=png&color=000000" type="image/gif"
        sizes="16x16" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="../src/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-body-tertiary mb-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.html">
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
                            <a class="nav-link" href="/products">Prodotti</a>
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
        <form class="row d-flex justify-content-center align-items-center">
            <div class="mb-3 col-md-6">
                <label for="iNome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="iNome" placeholder="Nome" required>
            </div>
            <div class="mb-3 col-md-6">
                <label for="iEmail" class="form-label">Indirizzo E-mail</label>
                <input type="email" class="form-control" id="iEmail" placeholder="nome@esempio.com" required>
            </div>
            <div class="mb-3 col-md-12">
                <label for="iAreaTesto" class="form-label">Area di Testo</label>
                <textarea class="form-control" id="iAreaTesto" rows="3"></textarea>
            </div>
            <div class="col-12 text-center">
                <input class="btn btn-success btn-lg" type="submit" value="Invia">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>
