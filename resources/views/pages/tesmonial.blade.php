@extends('layouts.app')
@section('title', 'Testimonial')

@section('content')
<section class="section-testimonials-content" id="testimonialsContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center match-height" style="margin-top: 350px">
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
        </div>
    </section>
@endsection