<div class="seasonal">
    <div class="seasonal-title w-100 d-flex justify-content-left">
        <h2 class="text-white">Seasonal Anime</h2>
    </div>
    <div class="seasonal-container">
        <div class="w-100 d-flex gap-4 flex-wrap justify-content-center">
            <div class="card" style="width: 14rem; height: 18rem;">
                <div class="card-body anime-card d-flex flex-column-reverse align-items-center"
                    style="background-image: url({{ asset('images/carousel/anime1.png') }});">
                    <h6 class="card-text text-white text-center">Anime Title</h6>
                </div>
            </div>

            <div class="card" style="width: 14rem; height: 18rem;">
                <div class="card-body anime-card d-flex flex-column-reverse align-items-center"
                    style="background-image: url({{ asset('images/carousel/anime1.png') }});">
                    <h6 class="card-text text-white text-center">Anime Title</h6>
                </div>
            </div>

            <div class="card" style="width: 14rem; height: 18rem;">
                <div class="card-body anime-card d-flex flex-column-reverse align-items-center"
                    style="background-image: url({{ asset('images/carousel/anime1.png') }});">
                    <h6 class="card-text text-white text-center">Anime Title</h6>
                </div>
            </div>

            <div class="card" style="width: 14rem; height: 18rem;">
                <div class="card-body anime-card d-flex flex-column-reverse align-items-center"
                    style="background-image: url({{ asset('images/carousel/anime1.png') }});">
                    <h6 class="card-text text-white text-center">Anime Title</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .anime-card {
        background-size: cover;
        background-position: center;
        position: relative;
        color: white;
        overflow: hidden;
        border-radius: 10px
    }

    .anime-card::before {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.5);
        /* adjust darkness */
        z-index: 0;
    }

    .anime-card h6 {
        position: relative;
        z-index: 1;
    }
</style>
