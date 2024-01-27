@props(['carousels' => []])
<div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @for ($i = 0; $i < count($carousels); $i++)
                <li data-target="#carouselExampleCaptions"
                    data-slide-to="{{ $i }}"@if ($i == 0) class="active" @endif></li>
            @endfor
        </ol>
        <div class="carousel-inner">
            @forelse ($carousels as $carousel)
                <div class="carousel-item @if ($loop->first) active @endif">
                    <img src="{{ asset('storage/carousels/' . $carousel->image) }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $carousel->name }}</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
            @empty
                <h1>No Caousel Found</h1>
            @endforelse

        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
