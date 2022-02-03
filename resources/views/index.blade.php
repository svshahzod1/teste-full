@extends('layouts/main')

@section('title')
    Home
@endsection

@section('main-content')

<section class="hero-wrap">
   <div class="home-slider owl-carousel js-fullheight">
      <div class="slider-item js-fullheight" style="background-image:url(images/xbg_1.jpg.pagespeed.ic.b7gF1rFfLF.jpg)">
         <div class="overlay"></div>
         <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
               <div class="col-md-12 ftco-animate">
                  <div class="text w-100 mt-5 text-center">
                     <span class="subheading">Taste.it Restaurant</h2></span>
                     <h1>Cooking Since</h1>
                     <span class="subheading-2">1958</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="slider-item js-fullheight" style="background-image:url(images/xbg_2.jpg.pagespeed.ic.2z86WXhTEW.jpg)">
         <div class="overlay"></div>
         <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
               <div class="col-md-12 ftco-animate">
                  <div class="text w-100 mt-5 text-center">
                     <span class="subheading">Taste.it Restaurant</h2></span>
                     <h1>Best Quality</h1>
                     <span class="subheading-2 sub">Food</span>
                  </div>
               </div>
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
<section class="ftco-section ftco-intro" style="background-image:url(images/xbg_3.jpg.pagespeed.ic.MB94bElbIw.jpg)">
   <div class="overlay"></div>
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center">
            <span>Now Booking</span>
            <h2>Private Dinners &amp; Happy Hours</h2>
         </div>
      </div>
   </div>
</section>
<section class="ftco-section">
   <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
         <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Specialties</span>
            <h2 class="mb-4">Our Menu</h2>
         </div>
      </div>
      <div class="row">
         @forelse($categories as $category)
            <div class="col-md-6 col-lg-4">
               <div class="menu-wrap">
                  <div class="heading-menu text-center ftco-animate">
                     <h3>{{ $category->name }}</h3>
                  </div>
                  @forelse($ovqatlar->where('categoriy_id', $category->id)->take(3) as $ovqat)
                        <div class="menus d-flex ftco-animate">
                           <div class="menu-img img" style="background-image:url({{ $ovqat->image }})"></div>
                           <div class="text">
                              <div class="d-flex">
                                 <div class="one-half">
                                    <h3>{{ $ovqat->nomi }}</h3>
                                 </div>
                                 <div class="one-forth">
                                    <span class="price">{{ $ovqat->narxi }} $</span>
                                 </div>
                              </div>
                              <p><span>{{ $ovqat->retsept }}</span></p>
                           </div>
                        </div>
                  @empty
                     <div>Ovqat Yo`q</div>
                  @endforelse
               </div>
            </div>            
         @empty
            <div>Xatolik bo`ldi</div>
         @endforelse
      </div>
   </div>
</section>
<section class="ftco-section testimony-section" style="background-image:url(images/xbg_5.jpg.pagespeed.ic.k95c5nPtun.jpg)">
   <div class="overlay"></div>
   <div class="container">
      <div class="row justify-content-center mb-3 pb-2">
         <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <span class="subheading">Testimony</span>
            <h2 class="mb-4">Happy Customer</h2>
         </div>
      </div>
      <div class="row ftco-animate justify-content-center">
         <div class="col-md-7">
            <div class="carousel-testimony owl-carousel ftco-owl">
               <div class="item">
                  <div class="testimony-wrap text-center">
                     <div class="text p-3">
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="user-img mb-4" style="background-image:url(images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg)">
                           <span class="quote d-flex align-items-center justify-content-center">
                           <i class="fa fa-quote-left"></i>
                           </span>
                        </div>
                        <p class="name">John Gustavo</p>
                        <span class="position">Customer</span>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimony-wrap text-center">
                     <div class="text p-3">
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="user-img mb-4" style="background-image:url(images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg)">
                           <span class="quote d-flex align-items-center justify-content-center">
                           <i class="fa fa-quote-left"></i>
                           </span>
                        </div>
                        <p class="name">John Gustavo</p>
                        <span class="position">Customer</span>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimony-wrap text-center">
                     <div class="text p-3">
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="user-img mb-4" style="background-image:url(images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg)">
                           <span class="quote d-flex align-items-center justify-content-center">
                           <i class="fa fa-quote-left"></i>
                           </span>
                        </div>
                        <p class="name">John Gustavo</p>
                        <span class="position">Customer</span>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimony-wrap text-center">
                     <div class="text p-3">
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="user-img mb-4" style="background-image:url(images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg)">
                           <span class="quote d-flex align-items-center justify-content-center">
                           <i class="fa fa-quote-left"></i>
                           </span>
                        </div>
                        <p class="name">John Gustavo</p>
                        <span class="position">Customer</span>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="testimony-wrap text-center">
                     <div class="text p-3">
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="user-img mb-4" style="background-image:url(images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg)">
                           <span class="quote d-flex align-items-center justify-content-center">
                           <i class="fa fa-quote-left"></i>
                           </span>
                        </div>
                        <p class="name">John Gustavo</p>
                        <span class="position">Customer</span>
                     </div>
                  </div>
               </div>
            </div>
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
         @forelse($chefs->take(4) as $chef)
            <div class="col-md-6 col-lg-3 ftco-animate mt-5">
               <div class="staff">
                  <div class="img" style="background-image:url({{ $chef->img }})"></div>
                  <div class="text px-4 pt-2">
                     <h3>{{ $chef->name }}</h3>
                     <span class="position mb-2">{{ $chef->job }}</span>
                     <div class="faded">
                        <p>{{ $chef->bio }}</p>
                        <ul class="ftco-social d-flex">
                           <li class="ftco-animate"><a href="index.html#"><span class="icon-twitter"></span></a></li>
                           <li class="ftco-animate"><a href="index.html#"><span class="icon-facebook"></span></a></li>
                           <li class="ftco-animate"><a href="index.html#"><span class="icon-google-plus"></span></a></li>
                           <li class="ftco-animate"><a href="index.html#"><span class="icon-instagram"></span></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         @empty
            <div>Xatolik bo`ldi</div>
         @endforelse
      </div>
   </div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb">
   <div class="container">
      <div class="row d-flex">
         <div class="col-md-6 d-flex">
            <div class="img img-2 w-100 mr-md-2" style="background-image: url(images/bg_6.jpg);"></div>
            <div class="img img-2 w-100 ml-md-2" style="background-image:url(images/xbg_4.jpg.pagespeed.ic.zU7VIZOgsr.jpg)"></div>
         </div>
         <div class="col-md-6 ftco-animate makereservation p-4 p-md-5">
            <div class="heading-section ftco-animate mb-5">
               <span class="subheading">This is our secrets</span>
               <h2 class="mb-4">Perfect Ingredients</h2>
               <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
               <p><a href="index.html#" class="btn btn-primary">Learn more</a></p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="ftco-section bg-light">
   <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
         <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Blog</span>
            <h2 class="mb-4">Recent Blog</h2>
         </div>
      </div>
      <div class="row">
         @forelse($blogs->take(3) as $blog)
            <div class="col-md-4 ftco-animate">
               <div class="blog-entry">
                  <a href="blog-single.html" class="block-20" style="background-image:url({{ $blog->image }})">
                  </a>
                  <div class="text px-4 pt-3 pb-4">
                     <div class="meta">
                        <div><a href="index.html#">{{ $blog->date }}</a></div>
                        <div><a href="index.html#">{{ $blog->author }}</a></div>
                     </div>
                     <h3 class="heading"><a href="index.html#">{{ $blog->short }}</a></h3>
                     <p class="clearfix">
                        <a href="/blog_single" class="float-left read btn btn-primary">Read more</a>
                        <a href="index.html#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
                     </p>
                  </div>
               </div>
            </div>
         @empty
            <div>Xozircha bloglar mavjud emas</div>
         @endforelse
      </div>
   </div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb ftco-intro bg-primary">
   <div class="container py-5">
      <div class="row py-2">
         <div class="col-md-12 text-center">
            <h2>We Make Delicious &amp; Nutritious Food</h2>
            <a href="index.html#" class="btn btn-white btn-outline-white">Book A Table Now</a>
         </div>
      </div>
   </div>
</section>

@endsection
