@extends('master')

@section('main')

<section id="home" class="main-home parallax-section">
    <div class="overlay"></div>
    <div class="container">
         <div class="row">

            <div class="col-md-12 col-sm-12">
                <h1>Bem vindo ao Meu Blog!</h1>
                <h4>Responsive Blog HTML CSS Website Template</h4>
                <form action="{{ route('posts') }}" method="get">
                      <input type="text" name="search" class="btn btn-default" id="" placeholder="Buscar" value="{{ request()->input('search') ?? '' }}">
                      <button type="submit">Buscar</button>
                </form>
                @if (request()->input('search'))
                    <h4>Sua busca encontrou {{ $posts->total() }} resultados</h4>
                @endif
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
                                   <span><a href="#"><img src="{{ $post->user->thumb }}" class="img-responsive img-circle">{{ $post->user->firstName }} {{ $post->user->lastName }}</a></span>
                                   <span><i class="fa fa-date"></i>{{ $post->created_at }}</span>
                                   <span><a href="#"><i class="fa fa-comment-o"></i>{{ $post->comments->count() }}</a></span>
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
                @if (request()->input('search'))
                    {{ $posts->appends(['search' => request()->input('search')])->links() }}
                @else
                    {{ $posts->links() }}
                @endif
                
         </div>
    </div>
</section>

@endsection