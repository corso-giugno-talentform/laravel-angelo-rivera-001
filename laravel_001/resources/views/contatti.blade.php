<x-navbar />
<x-main />
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
