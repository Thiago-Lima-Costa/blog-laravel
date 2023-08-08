@extends('master')

@section('main')

<section id="home" class="main-home parallax-section">
    <div class="overlay"></div>
    <div id="particles-js"></div>
    <div class="container">
         <div class="row">

              <div class="col-md-12 col-sm-12">
                   <h1>Hello! This is Neuron.</h1>
                   <h4>Responsive Blog HTML CSS Website Template</h4>
                   <form action="" method="get">
                    <input type="text" name="search" class="btn btn-default" id="" placeholder="Buscar">
                    <button type="submit">Buscar</button>
                   </form>
                   <a href="#blog" class="smoothScroll btn btn-default">Discover More</a>
              </div>

         </div>
    </div>
</section>

<!-- Blog Section -->

<section id="blog">
    <div class="container">
         <div class="row">

              <div class="col-md-offset-1 col-md-10 col-sm-12">

                    @forelse ($posts as $post)

                         <div class="blog-post-thumb">
                              <div class="blog-post-image">
                                   <a href="{{ route('post', $post->slug) }}">
                                        <img src="{{ $post->thumb }}" class="img-responsive" alt="Blog Image">
                                   </a>
                              </div>
                              <div class="blog-post-title">
                                   <h3><a href="{{ route('post', $post->slug) }}">{{ $post->title }}</a></h3>
                              </div>
                              <div class="blog-post-format">
                                   <span><a href="#"><img src="images/author-image1.jpg" class="img-responsive img-circle"> Jen Lopez</a></span>
                                   <span><i class="fa fa-date"></i> July 22, 2017</span>
                                   <span><a href="#"><i class="fa fa-comment-o"></i> 35 Comments</a></span>
                              </div>
                              <div class="blog-post-des">
                                   <p>{{ Str::limit($post->content, 200, '...') }}</p>
                                   <a href="{{ route('post', $post->slug) }}" class="btn btn-default">LEIA MAIS</a>
                              </div>
                         </div>

                    @empty
                         <h2>Nenhum post encontrado</h2>
                    @endforelse    

                    

              </div>

         </div>
    </div>
</section>

@endsection