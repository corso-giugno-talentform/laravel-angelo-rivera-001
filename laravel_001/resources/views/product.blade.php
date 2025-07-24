<!DOCTYPE html>
<html lang="it">

<head>
    <title>Prodotti</title>
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
                            <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products') }}">Prodotti</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contacts') }}">Contatti</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Cerca" aria-label="Search" />
                        <button class="btn btn-outline-success" type="submit">Cerca</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="container-fluid d-flex justify-content-center align-items-center text-center">
            <div class="card px-auto" style="width: auto;">
                <img src="https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExYTlxM3VtdXB6N2dwMDNrZWR5djJyeGduaHpxeHJ2ODdhaXM1ZDU4NCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9cw/BzSL7DiPSY5ieqRfYl/giphy.gif"
                    class="card-img" style="width: 30%; height: 30%;" alt="Scheda Grafica RTX X">
                <div class="card-body p-5">
                    <h1 class="card-title">{{ $product }} (serie RTX 90)</h1>
                    <h2>1. Prestazioni di fascia alta</h2>
                    <p>
                        Le versioni "Finali" o top di gamma sarebbero progettate per offrire le massime prestazioni di
                        calcolo grafico, adatte a gaming 8K, realtà virtuale avanzata, e applicazioni professionali come
                        AI, machine learning e rendering di alta qualità.
                        Potrebbero includere più CUDA cores, RT cores e Tensor cores rispetto alle versioni di fascia
                        media.
                    </p>
                    <h2>2. Memoria e capacità</h2>
                    <p>
                        Versioni di punta potrebbero arrivare con configurazioni di VRAM molto elevate, ad esempio 24 o
                        32 GB GDDR6X o future memorie più veloci, per supportare workload estremamente intensivi.
                    </p>
                    <h2>3. Tecnologie di supporto avanzate</h2>
                    <p>
                        Rifinitura di tecnologie come DLSS (Deep Learning Super Sampling) di nuova generazione,
                        migliorate per garantire alte prestazioni anche in risoluzioni estreme.
                        Supporto per le ultime interfacce di connessione: HDMI 2.1/2.2, DisplayPort 2.0, PCIe 5.0.
                    </p>
                    <h2>4. Design e raffreddamento</h2>
                    <p>
                        Sistemi di raffreddamento di alto livello, possibilmente con sistemi a liquido integrati o
                        soluzioni personalizzate per mantenere le alte prestazioni sotto carico.
                        Design più massicci e con attenzione all’efficienza termica.
                    </p>
                    <h2>5. Innovazioni e funzionalità future</h2>
                    <p>
                        Potenziali miglioramenti nelle tecnologie di AI e accelerazione hardware.
                        Supporto per nuove tecnologie di streaming, compressione e integrazione con sistemi di
                        intelligenza artificiale.
                    </p>
                    <h2>In sintesi:</h2>
                    <p>
                        Se ti riferisci a una "serie RTX 90 finalizzata" come le versioni più potenti o di fine
                        generazione, possiamo aspettarci che siano schede di fascia alta, dedicate a utenti
                        professionali, gamer estremi e applicazioni di calcolo avanzato, con le più recenti innovazioni
                        tecnologiche.
                        Per ora, ti consiglio di seguire gli annunci ufficiali di NVIDIA per le novità sulle future
                        schede grafiche. Se vuoi, posso aiutarti a rimanere aggiornato o a confrontare le schede
                        attualmente disponibili!
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>
