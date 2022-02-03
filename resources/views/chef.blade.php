@extends('layouts/main')

@section('title')
    Chef
@endsection

@section('main-content')

<section class="hero-wrap hero-wrap-2" style="background-image:url(images/xbg_5.jpg.pagespeed.ic.k95c5nPtun.jpg)" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
         <div class="col-md-9 ftco-animate text-center mb-5">
            <h1 class="mb-2 bread">Master Chef</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Chef <i class="fa fa-chevron-right"></i></span></p>
         </div>
      </div>
   </div>
</section>
<section class="ftco-section bg-light">
   <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
         <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Chef</span>
            <h2 class="mb-4">Our Master Chef</h2>
         </div>
      </div>
      <div class="row">
        @if(!empty($chefs))
            @foreach($chefs as $chef)
                <div class="col-md-6 col-lg-3 ftco-animate mt-5">
                    <div class="staff">
                    <div class="img" style="background-image:url({{ $chef->img }})"></div>
                    <div class="text px-4 pt-2">
                        <h3>{{ $chef->name }}</h3>
                        <span class="position mb-2">{{ $chef->job }}</span>
                        <div class="faded">
                            <p>{{ $chef->bio }}</p>
                            <ul class="ftco-social d-flex">
                                <li class="ftco-animate"><a href="chef.html#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="chef.html#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="chef.html#"><span class="icon-google-plus"></span></a></li>
                                <li class="ftco-animate"><a href="chef.html#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="text-center text-danger my-3">Ustalar topilmadi</div>
        @endif
      </div>
      <div class="row no-gutters my-5">
         <div class="col text-center">
            <div class="block-27">
               <ul>
                  {{ $chefs->links() }}
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
   <div class="container">
      <div class="row no-gutters">
         <div class="col-sm-4 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">
            <form action="{{ route('admin/place/store') }}" class="appointment-form" method="POST">
            @csrf
               <h3 class="mb-3">Book your Table</h3>
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <input type="name" class="form-control" name="name" placeholder="Name">
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <input type="" class="form-control" name="phone" placeholder="Phone">
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <div class="input-wrap">
                           <div class="icon"><span class="fa fa-calendar"></span></div>
                           <input type="text" class="form-control book_date" name="date"placeholder="Check-In">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <div class="input-wrap">
                           <div class="icon"><span class="fa fa-clock-o"></span></div>
                           <input type="text" class="form-control" name="time" placeholder="Time">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <div class="form-field">
                           <div class="select-wrap">
                              <input type="text" class="form-control" name="guest" placeholder="Mexmonlar soni">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <input type="submit" value="Book Your Table Now" class="btn btn-white py-3 px-4">
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <div class="col-sm-8 wrap-about py-5 ftco-animate img" style="background-image:url(images/xabout.jpg.pagespeed.ic.1t7Mz0zawr.jpg)">
            <div class="row pb-5 pb-md-0">
               <div class="col-md-12 col-lg-7">
                  <div class="heading-section mt-5 mb-4">
                     <div class="pl-lg-3 ml-md-5">
                        <span class="subheading">About</span>
                        <h2 class="mb-4">Welcome to Taste.it</h2>
                     </div>
                  </div>
                  <div class="pl-lg-3 ml-md-5">
                     <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection
