@extends('layouts/main')

@section('title')
    Reservation
@endsection

@section('main-content')

<section class="hero-wrap hero-wrap-2" style="background-image:url(images/xbg_5.jpg.pagespeed.ic.k95c5nPtun.jpg)" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
         <div class="col-md-9 ftco-animate text-center mb-5">
            <h1 class="mb-2 bread">Book A Table Now</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Reservation <i class="fa fa-chevron-right"></i></span></p>
         </div>
      </div>
   </div>
</section>
<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
   <div class="container">
      <div class="row no-gutters">
         <div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">
            <form action="{{ route('admin/place/store') }}" class="appointment-form" method="POST">
            @csrf
               <h3 class="mb-3">Book your Table</h3>
               <div class="row justify-content-center">
                   <div class="col-md-4">
                       <div class="form-group">
                           <input type="name" class="form-control" name="name" placeholder="Name"> 
                       </div>
                   </div>
                   <div class="col-md-4">
                       <div class="form-group">
                           <input type="email" class="form-control" name="email" placeholder="Email"> 
                       </div>
                   </div>
                   <div class="col-md-4">
                       <div class="form-group">
                           <input type="" class="form-control" name="phone" placeholder="Phone"> 
                       </div>
                   </div>
                   <div class="col-md-4">
                       <div class="form-group">
                           <div class="input-wrap">
                               <div class="icon"><span class="fa fa-calendar"></span></div>
                               <input type="text" class="form-control book_date" name="date"placeholder="Check-In"> 
                           </div>
                       </div>
                   </div>
                   <div class="col-md-4">
                       <div class="form-group">
                           <div class="input-wrap">
                               <div class="icon"><span class="fa fa-clock-o"></span></div>
                               <input type="text" class="form-control" name="time" placeholder="Time"> 
                           </div>
                       </div>
                   </div>
                   <div class="col-md-4">
                       <div class="form-group">
                           <div class="form-field">
                               <div class="select-wrap">
                                   <input type="text" class="form-control" name="guest" placeholder="Mexmonlar soni">
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-4">
                       <div class="form-group">
                           <input type="submit" value="Book Your Table Now" class="btn btn-white py-3 px-4"> 
                       </div>
                   </div>
               </div>
           </form>
         </div>
      </div>
   </div>
</section>
<section class="ftco-section">
   <div class="container">
      <div class="row d-flex">
         <div class="col-md-6 d-flex">
            <div class="img img-2 w-100 mr-md-2" style="background-image:url(images/bg_6.jpg)"></div>
            <div class="img img-2 w-100 ml-md-2" style="background-image:url(images/xbg_4.jpg.pagespeed.ic.zU7VIZOgsr.jpg)"></div>
         </div>
         <div class="col-md-6 ftco-animate makereservation p-4 p-md-5">
            <div class="heading-section ftco-animate mb-5">
               <span class="subheading">This is our secrets</span>
               <h2 class="mb-4">Perfect Ingredients</h2>
               <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
               <p><a href="reservation.html#" class="btn btn-primary">Learn more</a></p>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection