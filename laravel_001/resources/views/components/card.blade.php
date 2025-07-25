<div class="card">
    <div class="card-body">
        <img src="{{ $project['image'] }}" alt="">
        <h5 class="card-title">{{ $project['nome'] }}</h5>
        <p class="card-text">{{ $project['descrizione'] }}</p>
        @if (!$isDetail)
            <a href="{{ route('project', ['project' => $project['slug']]) }}" class="btn btn-primary">Dettagli</a>
        @endif
    </div>
</div>
