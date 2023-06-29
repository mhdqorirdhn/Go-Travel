@extends('layouts.app')
@section('title', 'Go Travel')

@section('content')

<!--Header-->
<header class="text-center">
    <h1>
        Go Around The World
        <br>
        That Easy With One Click
    </h1>

    <p class="mt-3">
        You will add experience
        <br>
        enjoy the beauty of the world
    </p>

    <a href="{{route('register')}}" class="btn-eksplore px-4 mt-5 mb-5">Eksplore</a>
</header>

<main>
    <div class="container">
        <section class="section-stats row justify-content-center" id="stats">
            <div class="col-3 col-md-2 stats-detail">
                <h2>20K</h2>
                <p>Members</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>12</h2>
                <p>Countries</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>3K</h2>
                <p>Hotels</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>72</h2>
                <p>Partners</p>
            </div>
        </section>
    </div>

    <section class="section-popular">
        <div class="row">
            <div class="col text-center section-popular-heading">
                <h2>Wisata Popular</h2>
                <p>You Must Try For The Best Eksperience</p>
            </div>
        </div>
    </section>
    <section class="section-popular-content" id="popularcontent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image:url(FrontEnd/Image/popular-1.jpg);">
                        <div class="travel-country">Indonesia</div>
                        <div class="travel-location">Derata, Bali</div>
                        <div class="travel-button mt-auto">
                            <a href="{{route('detail')}}" class="btn btn-travel-details px-4">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image:url(FrontEnd/Image/popular-2.jpg) ;">
                        <div class="travel-country">Indonesia</div>
                        <div class="travel-location">Bromo, Malang</div>
                        <div class="travel-button mt-auto">
                            <a href="{{route('detail')}}" class="btn btn-travel-details px-4">View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image:url(FrontEnd/Image/popular-3.jpg) ;">
                        <div class="travel-country">Indonesia</div>
                        <div class="travel-location">Nusa Penida</div>
                        <div class="travel-button mt-auto">
                            <a href="{{route('detail')}}" class="btn btn-travel-details px-4">View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md4 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image:url(FrontEnd/Image/popular-4.jpg) ;">
                        <div class="travel-country">Middle East</div>
                        <div class="travel-location">Dubai</div>
                        <div class="travel-button mt-auto">
                            <a href="{{route('detail')}}" class="btn btn-travel-details px-4">View Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-networks">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Our Network</h2>
                    <p>
                        Companies are trusted us
                        <br>
                        more than just a trip
                    </p>
                </div>
                <div class="col-md-8 text-center">
                    <img src="{{url('FrontEnd/Image/logos_partner.jpg')}}" alt="Logo Partners">
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonial-heading" id="testimonialHeading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>They Are Loving Us</h2>
                    <P>moment were giving then
                        <br>
                        the best experience
                    </P>

                </div>
            </div>
        </div>
    </section>
    <section class="section-testimonials-content" id="testimonialsContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center match-height">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{url('FrontEnd/Image/testi-1.jpg')}}" alt="" class="mb-4 rounded-circle" />
                            <h3 class="mb-4">Angga Risky</h3>
                            <p class="testimonials">
                                “ It was glorious and I could not stop to say wohooo for
                                every single moment Dankeeeeee “
                            </p>
                        </div>
                        <hr />
                        <p class="trip-to mt-2">Trip to Ubud</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="{{url('FrontEnd/Image/testi-2.jpg')}}" alt="" class="mb-4 rounded-circle" />
                            <h3 class="mb-4">Shayna</h3>
                            <p class="testimonials">
                                “ The trip was amazing and I saw something beautiful in that
                                Island that makes me want to learn more “
                            </p>
                        </div>
                        <hr />
                        <p class="trip-to mt-2">Trip to Nusa Penida</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content mb-auto">
                            <img src="{{url('FrontEnd/Image/testi-3.jpg')}}" alt="" class="mb-4 rounded-circle" />
                            <h3 class="mb-4">Shabrina</h3>
                            <p class="testimonials">
                                “ I loved it when the waves was shaking harder — I was
                                scared too “
                            </p>
                        </div>
                        <hr />
                        <p class="trip-to mt-2">Trip to Karimun Jawa</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                        I Need Help
                    </a>
                    <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection