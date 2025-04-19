<div class="carousel">
    <div class="container-fluid">
        <div class="splide" id="image-carousel">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($recommendations as $rec)
                        @php
                            $entry = $rec['entry'][0];
                        @endphp
                        <li class="splide__slide">
                            <div class="slide-wrapper">
                                <img src="{{ $entry['images']['webp']['large_image_url'] }}" alt="{{ $entry['title'] }}">
                                <div class="gradient-overlay"></div>
                                <div class="slide-content">
                                    <h2>{{ $entry['title'] }}</h2>
                                    <p>{{ substr(ucfirst($rec['content']), 0, 200) }}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="splide__arrows">
                <button class="splide__arrow splide__arrow--prev">
                    <i class="fa-solid fa-less-than"></i>
                </button>
                <button class="splide__arrow splide__arrow--next">
                    <i class="fa-solid fa-greater-than"></i>
                </button>
            </div>

            <div class="my-slider-progress">
                <div class="my-slider-progress-bar"></div>
            </div>
        </div>
    </div>
</div>


<style>
    .splide__slide img {
        width: 100%;
        height: auto;
        object-fit: cover;
        object-position: center;
    }

    #image-carousel {
        margin: auto;
    }

    .splide__track {
        max-height: 600px;
        overflow: hidden;
    }

    .splide__arrow {
        background: none;
        border: none;
        color: #fff;
        font-size: 2rem;
        width: auto;
        height: auto;
        padding: 0;
        z-index: 10;
    }

    .splide__arrow:hover {
        /* color: #0d6efd; */
        background: none;
    }

    /* Custom progress bar */
    .my-slider-progress {
        background: #e0e0e0;
        height: 4px;
        margin-top: 10px;
        width: 100%;
    }

    .my-slider-progress-bar {
        background: #0d6efd;
        height: 100%;
        width: 0;
        transition: width 400ms ease;
    }

    .slide-wrapper {
        position: relative;
        width: 100%;
        height: 600px;
        overflow: hidden;
    }

    .slide-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .gradient-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 1;

        background:
            linear-gradient(to top, #242424 5%, transparent 70%),
            linear-gradient(to bottom, #242424 5%, transparent 70%),
            linear-gradient(to left, #242424 5%, transparent 70%),
            linear-gradient(to right, #242424 5%, transparent 70%);
    }

    .slide-content {
        position: absolute;
        z-index: 2;
        top: 50%;
        left: 5%;
        transform: translateY(-50%);
        color: #fff;
        max-width: 600px;
    }

    .slide-content h2 {
        font-size: 2.5rem;
        margin-bottom: 0.5rem;
    }

    .slide-content p {
        font-size: 1.2rem;
        opacity: 0.9;
    }
</style>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var splide = new Splide('#image-carousel', {
            type: 'fade',
            rewind: true,
            perPage: 1,
            autoplay: true,
            arrows: true,
            pagination: false,
            interval: 3000,
            pauseOnHover: false,
        });

        // Track progress by slide index
        var bar = document.querySelector('.my-slider-progress-bar');

        splide.on('mounted move', function() {
            var end = splide.Components.Controller.getEnd() + 1;
            var rate = Math.min((splide.index + 1) / end, 1);
            bar.style.width = String(100 * rate) + '%';
        });

        splide.mount();
    });
</script>
