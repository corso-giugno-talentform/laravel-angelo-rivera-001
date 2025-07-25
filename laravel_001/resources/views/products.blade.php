<x-navbar />
<x-main />
<div class="container-fluid d-flex justify-content-center align-items-center text-center">
    @foreach ($products as $product)
        <div class="card p-10" style="width: 18rem;">
            <img src="https://media1.giphy.com/media/v1.Y2lkPTc5MGI3NjExYTlxM3VtdXB6N2dwMDNrZWR5djJyeGduaHpxeHJ2ODdhaXM1ZDU4NCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9cw/BzSL7DiPSY5ieqRfYl/giphy.gif"
                class="card-img-top" alt="Scheda Grafica RTX X">
            <div class="card-body">
                <h5 class="card-title">{{ $product }}</h5>
                <p class="card-text">{{ $product }} è una scheda grafica potente, ideale per gaming e
                    lavori
                    intensivi.</p>
                <a href="{{ route('product', ['product' => $product]) }}" class="btn btn-success">Descrizione</a>
            </div>
        </div>
    @endforeach
</div>
<section>
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold text-body-emphasis">I Mie Progetti</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($projects as $project)
                <div class="col">
                    <x-card :project="$project" :isDetail="false" />
                </div>
            @endforeach
        </div>
    </div>
</section>
