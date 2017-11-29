  @extends('blog.layouts.index')

  @section('content')

  
  <section class="tada-container content-posts page post-right-sidebar">

     @if(!empty($page))
     @foreach($page as $post)
     <!-- CONTENT -->
     <div class="content col-xs-8">


        <!-- ARTICLE 1 -->
        <article>
            <div class="post-image">
                <img src="{{$post->thumbnail}}" alt="post image 1"> 
            </div>
            <div class="post-text">
                <h2>{{$post->title}}</h2>
            </div>                 
            <div class="post-text text-content">                  
                <div class="text"><p>{{$post->content}}

                    <div class="clearfix"></div>
                </div>
            </div>


        </article>


    </div>
    @endforeach
    @endif

    <!-- SIDEBAR -->
    <div class="sidebar col-xs-4">

       @if(!empty($lefts))
       @foreach($lefts as $left)
       <!-- ABOUT ME -->                              
       <div class="widget about-me">
        <div class="ab-image">
            <img style="width: 100%" src="{{$left->thumbnail}}" alt="about me">
            <div class="ab-title">{{$left->category_name}}</div>
        </div>
        <div class="ad-text">
            <p>{{$left->description}}</p>
            <span class="signing"><img src="{{asset('img/signing.png')}}" alt="signing"></span>
        </div>
    </div>

    @endforeach
    @endif


    <!-- LATEST POSTS -->                              
    <div class="widget latest-posts">
        <h3 class="widget-title">
            Latest Posts
        </h3>
        <div class="posts-container">
            @if(!empty($afters))
            @foreach($afters as $after)
          <div class="item">

            <div class="col-xs-6">
                <img style="width: 100%" src="{{$after->thumbnail}}" alt="post 1" class="post-image">
            </div>
            <div class="col-xs-6">
                <div style="width: 100%" class="info-post">
                
                <h5 ><a href="#">{{$after->title}}</a></h5>
                <span class="date">07 JUNE 2016</span>  
            </div> 
            </div>

            
            
            <div class="clearfix"></div>   
        </div>
          @endforeach
    @endif      
        <div class="clearfix"></div>
    </div>
</div>


<!-- FOLLOW US -->                              
<div class="widget follow-us">
    <h3 class="widget-title">
        Follow Us
    </h3>
    <div class="follow-container">
        <a href="#"><i class="icon-facebook5"></i></a>
        <a href="#"><i class="icon-twitter4"></i></a>
        <a href="#"><i class="icon-google-plus"></i></a>
        <a href="#"><i class="icon-vimeo4"></i></a>
        <a href="#"><i class="icon-linkedin2"></i></a>                
    </div>
    <div class="clearfix"></div>
</div>            


<!-- TAGS -->                              
<div class="widget tags">
    <h3 class="widget-title">
        Tags
    </h3>
    <div class="tags-container">
        <a href="#">Audio</a>
        <a href="#">Travel</a>
        <a href="#">Food</a>
        <a href="#">Event</a>
        <a href="#">Wordpress</a>
        <a href="#">Video</a>
        <a href="#">Design</a>
        <a href="#">Sport</a>
        <a href="#">Blog</a>
        <a href="#">Post</a> 
        <a href="#">Img</a>
        <a href="#">Masonry</a>                                    
    </div>
    <div class="clearfix"></div>
</div> 


<!-- ADVERTISING -->                              
<div class="widget advertising">
    <div class="advertising-container">
        <img src="{{asset('img/350x300.png')}}" alt="banner 350x300">
    </div>
</div>


<!-- NEWSLETTER -->                              
<div class="widget newsletter">
    <h3 class="widget-title">
        Newsletter
    </h3>
    <div class="newsletter-container">
        <h4>DO NOT MISS OUR NEWS</h4>
        <p>Sign up and receive the <br> latest news of our company</p> 
        <form>
           <input type="email" class="newsletter-email" placeholder="Your email address...">
           <button type="submit" class="newsletter-btn">Send</button>
       </form>                                  
   </div>
   <div class="clearfix"></div>
</div>  

</div> <!-- #SIDEBAR -->


<div class="clearfix"></div>

<div class="navigation">
    <a href="post" class="prev"><i class="icon-arrow-left8"></i> Previous Posts</a>
    <a href="post-right-sidebar" class="next">Next Posts <i class="icon-arrow-right8"></i></a>
    <div class="clearfix"></div>
</div> 

</section>
@endsection
