@extends('layouts/main')

@section('title')
    Blog
@endsection

@section('main-content')

<section class="hero-wrap hero-wrap-2" style="background-image:url(images/xbg_5.jpg.pagespeed.ic.k95c5nPtun.jpg)" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
         <div class="col-md-9 ftco-animate text-center mb-5">
            <h1 class="mb-2 bread">Blog</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Blog <i class="fa fa-chevron-right"></i></span></p>
         </div>
      </div>
   </div>
</section>
<section class="ftco-section bg-light">
   <div class="container">
      <div class="row">
         @forelse($blogs as $blog)
            <div class="col-md-4 ftco-animate">
               <div class="blog-entry">
                  <a href="blog-single.html" class="block-20" style="background-image:url({{ $blog->image }})">
                  </a>
                  <div class="text px-4 pt-3 pb-4">
                     <div class="meta">
                        <div><a href="blog.html#">{{ $blog->date }}</a></div>
                        <div><a href="blog.html#">{{ $blog->author }}</a></div>
                     </div>
                     <h3 class="heading"><a href="blog.html#">{{ $blog->short }}</a></h3>
                     <p class="clearfix">
                        <a href="/blog_single" class="float-left read btn btn-primary">Read more</a>
                        <a href="blog.html#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
                     </p>
                  </div>
               </div>
            </div>
         @empty
            <div>Xatolik do`stim</div>
         @endforelse
      </div>
      <div class="row no-gutters my-5">
         <div class="col text-center">
            <div class="block-27">
               <ul>
                  {{ $blogs->links() }}
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection
