@extends('master')

@section('main')

<!-- Home Section -->

<section id="home" class="main-single-post parallax-section">
    <div class="overlay"></div>
    <div class="container">
         <div class="row">

              <div class="col-md-12 col-sm-12">
                   <h1>{{ $post->title }}</h1>
              </div>

         </div>
    </div>
</section>

<!-- Blog Single Post Section -->

<section id="blog-single-post">
    <div class="container">
         <div class="row">

              <div class="col-md-offset-1 col-md-10 col-sm-12">
                   <div class="blog-single-post-thumb">
                        

                        <div class="blog-post-title">
                             <h2>{{ $post->title }}</a></h2>
                        </div>

                        <div class="blog-post-format">
                             <span><a href="#"><img src="{{ $post->user->thumb }}" class="img-responsive img-circle">{{ $post->user->firstName }} {{ $post->user->lastName }}</a></span>
                             <span><i class="fa fa-date"></i>{{ $post->created_at }}</span>
                             <span><a href="#"><i class="fa fa-comment-o"></i>{{ $post->comments->count() }}</a></span>
                        </div>

                        <div class="blog-post-image">
                            <img src="{{ $post->thumb }}" class="img-responsive" alt="Blog Image 3">
                        </div>

                        <div class="blog-post-des">
                             <p>{{ $post->content }}</p>

                        
                         <!-- Comment section -->

                         <div class="blog-comment">
                              <h3>Comentários</h3>
                              @forelse ($post->comments as $comment)
                                   <div class="media">
                                        <div class="media-object pull-left">
                                             <img src="{{ $comment->user->thumb }}" class="img-responsive img-circle" alt="Blog Image 11">
                                        </div>
                                        <div class="media-body">
                                             <h3 class="media-heading">{{ $comment->user->firstName }} {{ $comment->user->lastName }}</h3>
                                             <span>{{ $comment->created_at }}</span>
                                             <p>{{ $comment->comment }}</p>
                                             @if (auth()->check() && auth()->user()->id == $comment->user->id)
                                                  <a href="{{ route('comment.destroy', $comment->id) }}">Apagar comentário</a>
                                             @endif
                                             @if (session()->has('error_delete_comment'))
                                                  <span>{{ session()->get('error_delete_comment') }}</span>
                                             @endif
                                        </div>
                                   </div>
                              @empty
                                   <p>Seja o primeiro a comentar!</p>
                              @endforelse
                                   
                         </div>

                         @if (auth()->check())
                         <div class="blog-comment-form">
                         <h3>Deixe um comentário!</h3>
                              @if (session()->has('error_create_comment'))
                                  <span>{{ session()->get('error_create_comment') }}</span>
                              @endif
                              {{ $errors->first('comment') }}
                              <form action="{{ route('comment', $post->id) }}" method="post">
                                   @csrf
                                   <textarea name="comment" rows="5" class="form-control" id="message" placeholder="Escreva um comentário!"></textarea>
                                   <div class="col-md-3 col-sm-4">
                                        <input name="submit" type="submit" class="form-control" id="submit" value="Enviar Comentário">
                                   </div>
                              </form>
                         </div>
                         @endif
                   </div>
         </div>
    </div>
</section>

@endsection
