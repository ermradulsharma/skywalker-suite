<!-- Carousel Start -->
<div class="container-fluid px-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            @php
                $slides = [
                    [
                        'image' => 'web/img/slider/slider-1.png',
                        'subtitle' => 'Creative & Innovative',
                        'title' => 'Creative & Innovative Digital Solution',
                        'btn_text' => 'Free Quote',
                        'btn_link' => '#'
                    ],
                    [
                        'image' => 'web/img/slider/slider-2.png',
                        'subtitle' => 'Transforming Businesses',
                        'title' => 'AI-Powered Growth for Your Business',
                        'btn_text' => 'Get a Quote',
                        'btn_link' => '#'
                    ],
                    [
                        'image' => 'web/img/slider/slider-3.png',
                        'subtitle' => 'Cloud & Scalability',
                        'title' => 'Seamless Cloud Solutions for Your Enterprise',
                        'btn_text' => 'Learn More',
                        'btn_link' => '#'
                    ],
                    [
                        'image' => 'web/img/slider/slider-4.png',
                        'subtitle' => 'Digital Transformation',
                        'title' => 'Innovative Strategies for Modern Businesses',
                        'btn_text' => 'Discover More',
                        'btn_link' => '#'
                    ],
                    [
                        'image' => 'web/img/slider/slider-5.jpg',
                        'subtitle' => 'Business Growth',
                        'title' => 'Driving Growth through Intelligent Solutions',
                        'btn_text' => 'Explore Now',
                        'btn_link' => '#'
                    ],
                    [
                        'image' => 'web/img/slider/slider-6.jpg',
                        'subtitle' => 'Automation & AI',
                        'title' => 'Automating Processes for Efficiency',
                        'btn_text' => 'Learn How',
                        'btn_link' => '#'
                    ],
                    [
                        'image' => 'web/img/slider/slider-7.jpg',
                        'subtitle' => 'Innovation & Technology',
                        'title' => 'Technology Solutions for Modern Challenges',
                        'btn_text' => 'See Solutions',
                        'btn_link' => '#'
                    ],
                    [
                        'image' => 'web/img/slider/slider-8.jpg',
                        'subtitle' => 'Smart Business',
                        'title' => 'Smart Tools for Smarter Decisions',
                        'btn_text' => 'Get Started',
                        'btn_link' => '#'
                    ],
                    [
                        'image' => 'web/img/slider/slider-9.jpg',
                        'subtitle' => 'Future Ready',
                        'title' => 'Preparing Businesses for Tomorrow',
                        'btn_text' => 'Join Us',
                        'btn_link' => '#'
                    ]
                ];
            @endphp
            @foreach($slides as $index => $slide)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img class="w-100 carousel-img" src="{{ asset($slide['image']) }}" alt="{{ $slide['title'] }}">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">{{ $slide['subtitle'] }}</h5>
                            <h1 class="display-4 text-white mb-md-4 animated zoomIn">{{ $slide['title'] }}</h1>
                            <a href="{{ $slide['btn_link'] }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">{{ $slide['btn_text'] }}</a>
                            <a href="{{ route('contact') }}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<style>
    .carousel-img {
        height: 100vh; /* Full screen height */
        object-fit: cover; /* Crop nicely without stretching */
    }

    @media (max-width: 768px) {
        .carousel-img {
            height: 60vh; /* Smaller height for mobile */
        }
        .carousel-caption h1 {
            font-size: 1.8rem;
        }
        .carousel-caption h5 {
            font-size: 1rem;
        }
        .carousel-caption .btn {
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
        }
    }
</style>
<!-- Carousel End -->
