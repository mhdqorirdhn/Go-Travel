@extends('layouts.app')

@section('title','Detail Travel')

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0 pl-3 pl-lg-0">
                    <nav aria-label=" breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" aria-current="page">
                                Paket Travel
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Nusa Peninda</h1>
                        <p>
                            Republic of Indonesia Raya
                        </p>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img class="xzoom" id="xzoom-default" src="FrontEnd/Image/pic_featured.png" xoriginal="FrontEnd/Image/pic_featured.png" />
                                <div class="xzoom-thumbs">
                                    <a href="{{url('FrontEnd/Image/pic_featured.png')}}"><img class="xzoom-gallery" width="127" src="{{url('FrontEnd/Image/pic_featured.png')}}" xpreview="FrontEnd/Image/pic_featured.png" /></a>
                                    <a href="{{url('FrontEnd/Image/detail-2.png')}}"><img class="xzoom-gallery" width="127" src="{{url('FrontEnd/Image/detail-2.png')}}" xpreview="FrontEnd/Image/detail-2.png" /></a>
                                    <a href="{{url('FrontEnd/Image/detail-3.png')}}"><img class="xzoom-gallery" width="127" src="{{url('FrontEnd/Image/detail-3.png')}}" xpreview="FrontEnd/Image/detail-3.png" /></a>
                                    <a href="{{url('FrontEnd/Image/detail-4.png')}}"><img class="xzoom-gallery" width="127" src="{{url('FrontEnd/Image/detail-4.png')}}" xpreview="FrontEnd/Image/detail-4.png" /></a>
                                    <a href="{{url('FrontEnd/Image/detail-5.png')}}"><img class="xzoom-gallery" width="127" src="{{url('FrontEnd/Image/detail-5.png')}}" xpreview="FrontEnd/Image/detail-5.png" /></a>



                                </div>
                            </div>
                            <h2>Tentang Wisata</h2>
                            <p>
                                Nusa Penida is an island southeast of Indonesia’s island
                                Bali and a district of Klungkung Regency that includes the
                                neighbouring small island of Nusa Lembongan. The Badung
                                Strait separates the island and Bali. The interior of Nusa
                                Penida is hilly with a maximum altitude of 524 metres. It is
                                drier than the nearby island of Bali.
                            </p>
                            <p>
                                Bali and a district of Klungkung Regency that includes the
                                neighbouring small island of Nusa Lembongan. The Badung
                                Strait separates the island and Bali.
                            </p>
                            <div class="features row pt-3">
                                <div class="col-md-4">
                                    <img src="{{url('FrontEnd/Image/ic_event – 1.jpg')}}" alt="" class="features-image" />
                                    <div class="description">
                                        <h3>Featured Ticket</h3>
                                        <p>Tari Kecak</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img src="{{url('FrontEnd/Image/ic_bahasa.jpg')}}" alt="" class="features-image" />
                                    <div class="description">
                                        <h3>Language</h3>
                                        <p>Bahasa Indonesia</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img src="{{url('FrontEnd/Image/ic_foods.jpg')}}" alt="" class="features-image" />
                                    <div class="description">
                                        <h3>Foods</h3>
                                        <p>Local Foods</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Members are going</h2>
                        <div class="members my-2">
                            <img src="{{url('FrontEnd/Image/mem1.png')}}" alt="" class="member-image mr-1" />
                            <img src="{{url('FrontEnd/Image/mem2.png')}}" alt="" class="member-image mr-1" />
                            <img src="{{url('FrontEnd/Image/mem3.png')}}" alt="" class="member-image mr-1" />
                            <img src="{{url('FrontEnd/Image/mem4.png')}}" alt="" class="member-image mr-1" />
                            <img src="{{url('FrontEnd/Image/member-5.png')}}" alt="" class="member-image mr-1" />


                        </div>
                        <hr />
                        <h2>Trip Informations</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Date of Departure</th>
                                <td width="50%" class="text-right">22 Aug, 2019</td>
                            </tr>
                            <tr>
                                <th width="50%">Duration</th>
                                <td width="50%" class="text-right">4D 3N</td>
                            </tr>
                            <tr>
                                <th width="50%">Type</th>
                                <td width="50%" class="text-right">Open Trip</td>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <td width="50%" class="text-right">$80,00 / person</td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        <a href="{{route('checkout')}}" class="btn btn-block btn-join-now mt-3 py-2">Join Now</a>


                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{url('FrontEnd/Libaries/xzoom/xzoom.css')}}" />
@endpush

@push('addon-script')
<script src="{{url('FrontEnd/Libaries/xzoom/xzoom.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500
            , title: false
            , tint: '#333'
            , Xoffset: 15
        });
    });

</script>

@endpush
