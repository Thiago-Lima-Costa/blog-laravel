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

                        <div class="blog-comment">
                             <h3>Comments</h3>
                                  <div class="media">
                                       <div class="media-object pull-left">
                                            <img src="images/comment-image1.jpg" class="img-responsive img-circle" alt="Blog Image 11">
                                       </div>
                                       <div class="media-body">
                                            <h3 class="media-heading">David Jones</h3>
                                            <span>3 days ago</span>
                                            <p>Aliquam gravida arcu at risus blandit, in interdum metus varius. Cras efficitur, ex sit amet tincidunt rhoncus, dui ex hendrerit risus, ac dapibus ligula mi id leo. In auctor dui justo, ac consequat dui posuere ac.</p>
                                       </div>
                                  </div>
                                  <div class="media">
                                       <div class="media-object pull-left">
                                            <img src="images/comment-image2.jpg" class="img-responsive img-circle" alt="Blog Image 22">
                                       </div>
                                       <div class="media-body">
                                            <h3 class="media-heading">Omar Larus</h3>
                                            <span>5 days ago</span>
                                            <p>Maecenas ultricies ante dignissim, iaculis ligula sed, gravida ipsum. Pellentesque lobortis velit mi, sed volutpat enim facilisis.</p>
                                       </div>
                                  </div>
                                  <div class="media">
                                       <div class="media-object pull-left">
                                            <img src="images/author-image2.jpg" class="img-responsive img-circle" alt="Blog Image 33">
                                       </div>
                                       <div class="media-body">
                                            <h3 class="media-heading">Walker Jen</h3>
                                            <span>July 27, 2017</span>
                                            <p>In eu posuere nulla, sit amet semper lectus. Aliquam gravida arcu at risus blandit, in interdum metus varius. Cras efficitur, ex sit amet tincidunt rhoncus, dui ex hendrerit risus, ac dapibus ligula mi id leo.</p>
                                       </div>
                                  </div>
                                  <div class="media">
                                       <div class="media-object pull-left">
                                            <img src="images/author-image1.jpg" class="img-responsive img-circle" alt="Blog Image 44">
                                       </div>
                                       <div class="media-body">
                                            <h3 class="media-heading">Jen Lopez</h3>
                                            <span>July 24, 2017</span>
                                            <p>In auctor dui justo, ac consequat dui posuere ac. Lorem ipsum dolor sit amet, maecenas eget vestibulum justo imperdiet, wisi risus purus augue vulputate voluptate neque, curabitur.</p>
                                       </div>
                                  </div>
                        </div>

                        <div class="blog-comment-form">
                             <h3>Leave a Comment</h3>
                                  <form action="#" method="post">
                                             <input type="text" class="form-control" placeholder="Name" name="name" required>
                                       <input type="email" class="form-control" placeholder="Email" name="email" required>
                                       <textarea name="message" rows="5" class="form-control" id="message" placeholder="Message" message="message" required="required"></textarea>
                                       <div class="col-md-3 col-sm-4">
                                            <input name="submit" type="submit" class="form-control" id="submit" value="Post Your Comment">
                                       </div>
                                  </form>
                        </div>
                   </div>
         </div>
    </div>
</section>

@endsection
