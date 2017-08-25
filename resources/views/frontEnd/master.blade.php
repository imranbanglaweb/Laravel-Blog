@include('frontEnd.includes.header')


<header id="navigation" class="navbar-fixed-top animated-header">
    <div class="container">
        <div class="navbar-header">
            <!-- responsive nav button -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
            </button>
			<!-- /responsive nav button -->
			
			<!-- logo -->
			@foreach($Logos as $Logo)
			<h1 class="navbar-brand">
				<a href="#body">
				<img src="{{ asset($Logo->limage)}}" height="40" width="164" title="{{$Logo->ltitle}}" data-toggle="tooltip" data-placement="right" align="{{$Logo->ltitle}}">
				</a>
			</h1>
			@endforeach
			<!-- /logo -->
        </div>

		<!-- main nav -->
        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <ul id="nav" class="nav navbar-nav menu">
                <li><a href="#top">Home</a></li>
                <li><a href="#features">Service</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#pricing-table">Price</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#testimonial">Testimonial</a></li>
                <li><a href="#contact-form">Contact</a></li>
            </ul>
        </nav>
		<!-- /main nav -->
		
    </div>
</header>


<div class="wrapper">
<section id="banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block">
					<h1>Blog With Laravel 5.4</h1>
					<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</h2>
					<div class="buttons">
						<a href="#" class="btn btn-learn">Purchase Now</a>
						<a href="#" class="btn btn-learn">View Featurese</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="scrolldown">
        <a id="scroll" href="#features" class="scroll"></a>
    </div>
</section>
<section id="features">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title">
					<h2>OUR BEST SERVICES</h2>
					<p>Dantes remained confused and silent by this explanation of the <br> thoughts which had unconsciously</p>
				</div>
			</div>
		</div>
		<div class="row">
		@foreach($services as $service)
			<div class="col-md-4 col-xs-6 col-sm-6">
				<div class="feature-block text-center">
					<div class="icon-box">
					
					<i class="{{$service->sicon}}"></i>
						<!-- <i class="ion-easel"></i> -->
					</div>
					<h4 class="wow fadeInUp" data-wow-delay=".3s">	
						{{$service->stitle}}
					</h4>
					<p class="wow fadeInUp" data-wow-delay=".5s">{{$service->scontent}}</p>
				</div>
			</div>
		@endforeach
			
		</div>
	</div>
</section>
<section id="counter">
	<div class="container">
		<div class="row">
			<div class="title">
				<h2>FUN FACTS</h2>
				<p>Dantes remained confused and silent by this explanation of the <br> thoughts which had unconsciously</p>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="block wow fadeInRight" data-wow-delay=".3s">
					<i class="ion-code"></i>
					<p class="count-text">
						<span class="counter-digit">136800 </span> k
					</p>
					<p>Lines Coded</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="block wow fadeInRight" data-wow-delay=".5s">
					<i class="ion-compass"></i>
					<p class="count-text">
						<span class="counter-digit">7800 </span> +
					</p>
					<p>Lines Coded</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="block wow fadeInRight" data-wow-delay=".7s">
					<i class="ion-compose"></i>
					<p class="count-text">
						<span class="counter-digit">399</span>
					</p>
					<p>Lines Coded</p>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="block wow fadeInRight" data-wow-delay=".9s">
					<i class="ion-image"></i>
					<p class="count-text">
						<span class="counter-digit">9995</span>
					</p>
					<p>Lines Coded</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title">
					<h2>LATEST WORKS</h2>
					<p>Dantes remained confused and silent by this explanation of the <br> thoughts which had unconsciously</p>
				</div>
				<div class="block">
					<div class="recent-work-mixMenu">
						<ul>
							<li><button class="filter" data-filter="all">All</button></li>
							<li><button class="filter" data-filter=".category-2">Printing</button></li>
							<li><button class="filter" data-filter=".category-1">Web</button></li>
							<li><button class="filter" data-filter=".category-2">Illustration</button></li>
							<li><button class="filter" data-filter=".category-1">Media</button></li>
						</ul>
					</div>
					<div class="recent-work-pic">
						<ul id="mixed-items">
					@foreach($portfolios as $portfolio)
							<li class="mix category-1 col-md-4 col-xs-6" data-my-order="1">
							
							
								<a class="example-image-link" href="{{asset($portfolio->link)}}" data-lightbox="example-set">
									<img class="img-responsive" src="{{ asset($portfolio->image)}}" alt="">
									<div class="overlay">
							<h3>{{$portfolio->title}}</h3>
					<i class="ion-ios-plus-empty"></i>
									</div>
								</a>
							</li>
					@endforeach
							<!-- <li class="mix category-2 col-md-4 col-xs-6" data-my-order="2">
								<a class="example-image-link" href="{{ asset('public/FrontEnd/')}}/img/work2.jpg" data-lightbox="example-set">
									<img class="img-responsive" src="{{ asset('public/FrontEnd/')}}/img/work2.jpg" alt="">
									<div class="overlay">
										<h3>Web design</h3>
										<i class="ion-ios-plus-empty"></i>
									</div>
								</a>
							</li>
							<li class="mix category-1 col-md-4 col-xs-6" data-my-order="3">
								<a class="example-image-link" href="img/work3.jpg" data-lightbox="example-set">
									<img class="img-responsive" src="{{ asset('public/FrontEnd/')}}/img/work3.jpg" alt="">
									<div class="overlay">
										<h3>Web design</h3>
										<i class="ion-ios-plus-empty"></i>
									</div>
								</a>
							</li>
							<li class="mix category-2 col-md-4 col-xs-6" data-my-order="4">
								<a class="example-image-link" href="{{ asset('public/FrontEnd/')}}/img/work4.jpg" data-lightbox="example-set">
									<img class="img-responsive" src="{{ asset('public/FrontEnd/')}}/img/work4.jpg" alt="">
									<div class="overlay">
										<h3>Web design</h3>
										<i class="ion-ios-plus-empty"></i>
									</div>
								</a>
							</li>
							<li class="mix category-1 col-md-4 col-xs-6" data-my-order="5">
								<a class="example-image-link" href="{{ asset('public/FrontEnd/')}}/img/work5.jpg" data-lightbox="example-set">
									<img class="img-responsive" src="img/work5.jpg" alt="">
									<div class="overlay">
										<h3>Web design</h3>
										<i class="ion-ios-plus-empty"></i>
									</div>
								</a>
							</li>
							<li class="mix category-2 col-md-4 col-xs-6" data-my-order="6">
								<a class="example-image-link" href="img/work6.jpg" data-lightbox="example-set">
									<img class="img-responsive" src="img/work6.jpg" alt="">
									<div class="overlay">
										<h3>Web design</h3>
										<i class="ion-ios-plus-empty"></i>
									</div>
								</a>
							</li> -->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="play-video">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block">
					<h2 class="wow fadeInUp" data-wow-delay=".3s">GET THE TEMPLATE</h2>
					<p class="wow fadeInUp" data-wow-delay=".5s">Dantes remained confused and silent by this explanation of the </p>
					<a href="https://vimeo.com/channels/staffpicks/145743834" class="html5lightbox" data-width=800 data-height=400>
						<div class="button ion-ios-play-outline wow zoomIn" data-wow-delay=".3s"></div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="team">
	<div class="container">
		<div class="row">
			<div class="title">
				<h2>CREATIVE TEAM</h2>
				<p>Dantes remained confused and silent by this explanation of the <br> thoughts which had unconsciously</p>
			</div>
			@foreach($teams as $team)
			<div class="col-md-4 col-sm-4 col-xs-6">
				<div class="block wow fadeInLeft" data-wow-delay=".3s">
					<img src="{{asset($team->teamimage)}}" alt="{{$team->teamtitile}}">
					<div class="team-overlay">
						<h3>{{$team->teamtitle}}<span>
						{{$team->teamsubtitle}}
						</span></h3>
						<span class="icon"><i class="ion-quote"></i></span>
						<p>
						{{$team->teamcontent}}
						</p>
					</div>
				</div>
			</div>
			@endforeach
			
		</div>
	</div>
</section>
<section id="pricing-table">
	<div class="container">
		<div class="row">
			<div class="title">
				<h2>PRICING TABLE</h2>
				<p>Dantes remained confused and silent by this explanation of the <br> thoughts which had unconsciously</p>
			</div>
			<div class="col-md-4 col">
				<div class="block text-center wow fadeInLeft" data-wow-delay=".3s">
					<ul>
						<li>
							<h4>STARTER PACK</h4>
							<p>&#36; 40 <span>/Month</span></p>
						</li>
						<li><p>Unlimited Downloads</p></li>
						<li><p>Unlimited Uploads</p></li>
						<li><p>Unlimited Email Accounts</p></li>
						<li><p> Email Forwards </p></li>
						<li><p>Cloud Storage</p></li>
						<li><p>Screen Share</p></li>
						<li>
							<a href="#" class="btn btn-buy">BUY NOW</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 col">
				<div class="block text-center wow zoomIn" data-wow-delay=".3s">
					<ul>
						<li>
							<h4>STARTER PACK</h4>
							<p>&#36; 40 <span>/Month</span></p>
						</li>
						<li><p>Unlimited Downloads</p></li>
						<li><p>Unlimited Uploads</p></li>
						<li><p>Unlimited Email Accounts</p></li>
						<li><p> Email Forwards </p></li>
						<li><p>Cloud Storage</p></li>
						<li><p>Screen Share</p></li>
						<li>
							<a href="#" class="btn btn-buy">BUY NOW</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 col">
				<div class="block text-center wow fadeInRight" data-wow-delay=".3s">
					<ul>
						<li>
							<h4>STARTER PACK</h4>
							<p>&#36; 40 <span>/Month</span></p>
						</li>
						<li><p>Unlimited Downloads</p></li>
						<li><p>Unlimited Uploads</p></li>
						<li><p>Unlimited Email Accounts</p></li>
						<li><p> Email Forwards </p></li>
						<li><p>Cloud Storage</p></li>
						<li><p>Screen Share</p></li>
						<li>
							<a href="#" class="btn btn-buy">BUY NOW</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="blog">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title">
			
					<h2>Blog</h2>
					<p>Dantes remained confused and silent by this explanation of the <br> thoughts which had unconsciously</p>
				
				</div>
				<div id="blog-post" class="owl-carousel">
					@foreach($posts as $post)
					<div>
						
						<div class="block">
							<img src="{{asset($post->image)}}" alt="" width="150px" height="150px" class=" text-center" style="margin:auto; display: block;padding: 10px">
							<div class="content">
								<h4><a href="blog.html">{{$post->ptitle}}
								</a></h4>
								<small> By admin /   
									{{ date('F d, Y', strtotime($post->created_at)) }} 
								</small>
								<p>
									{{Text::shorten($post->pcontent,100)}}
								</p>
								<a href="{{url('/blog/'.$post->id)}}" class="btn btn-read">Read More</a>
								
							</div>
						</div>
						
					</div>
					@endforeach
					
				</div>		
			</div>
		</div>
	</div>
</section>




<section id="testimonial">
	<div class="container">
		<div class="row">
			<div class="title">
				<h2>TESTIMONIAL</h2>
				<p>Dantes remained confused and silent by this explanation of the <br> thoughts which had unconsciously</p>
			</div>
			@foreach($testimonials as $testimonial)
			<div class="col col-md-6">
				<div class="media wow fadeInLeft" data-wow-delay=".3s">
				  <div class="media-left">
				    <a href="#">
				      <img src="{{asset($testimonial->timage)}}" alt="" width="80px" height="80px">
				    </a>
				  </div>
				  <div class="media-body">
				    <a href="#"><h4 class="media-heading">{{$testimonial->tname}}
				    </h4></a>
				    <p>
				    {{Text::shorten($testimonial->tcontent,100)}}
				    </p>
				  </div>
				</div>
			</div>
			@endforeach
			
		</div>
	</div>
</section>
<section id="client-logo">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block">
					<div id="Client_Logo" class="owl-carousel">
						<div>
							<a href="#"><img class="img-responsive" src="{{asset('public/FrontEnd/')}}/img/clientLogo/client-logo1.jpg" alt=""></a>
						</div>
						<div>
							<a href="#"><img class="img-responsive" src="{{asset('public/FrontEnd/')}}/img/clientLogo/client-logo2.jpg" alt=""></a>
						</div>
						<div>
							<a href="#"><img class="img-responsive" src="{{asset('public/FrontEnd/')}}/img/clientLogo/client-logo3.jpg" alt=""></a>
						</div>
						<div>
							<a href="#"><img class="img-responsive" src="{{asset('public/FrontEnd/')}}/img/clientLogo/client-logo4.jpg" alt=""></a>
						</div>
						<div>
							<a href="#"><img class="img-responsive" src="{{asset('public/FrontEnd/')}}/img/clientLogo/client-logo5.jpg" alt=""></a>
						</div>
						<div>
							<a href="#"><img class="img-responsive" src="{{asset('public/FrontEnd/')}}/img/clientLogo/client-logo6.jpg" alt=""></a>
						</div>
						<div>
							<a href="#"><img class="img-responsive" src="{{asset('public/FrontEnd/')}}/img/clientLogo/client-logo1.jpg" alt=""></a>
						</div>
						<div>
							<a href="#"><img class="img-responsive" src="{{asset('public/FrontEnd/')}}/img/clientLogo/client-logo2.jpg" alt=""></a>
						</div>
						<div>
							<a href="#"><img class="img-responsive" src="{{asset('public/FrontEnd/')}}/img/clientLogo/client-logo3.jpg" alt=""></a>
						</div>
						<div>
							<a href="#"><img class="img-responsive" src="{{asset('public/FrontEnd/')}}/img/clientLogo/client-logo4.jpg" alt=""></a>
						</div>
						<div>
							<a href="#"><img class="img-responsive" src="{{asset('public/FrontEnd/')}}/img/clientLogo/client-logo5.jpg" alt=""></a>
						</div>
						<div>
							<a href="#"><img class="img-responsive" src="{{asset('public/FrontEnd/')}}/img/clientLogo/client-logo6.jpg" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="contact-form">
	<div class="container">
		<div class="row">

			<div class="title">
				<h2>CONTACT US</h2>
				<p>Dantes remained confused and silent by this explanation of the <br> thoughts which had unconsciously</p>
			</div>
			<div class="col-md-6 col">
				<!-- map -->
				<div class="map">
                  <div id="googleMap"></div>
               </div><!--/map-->

			</div>
			<div class="col-md-6">

			{!! Form::open(array('route' => 'postcontact','method'=>'POST')) !!}
               <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {!! Form::text('cname', null, array('placeholder' => 'Enter Name','class' => 'form-control')) !!}
                        {!! $errors->first('cname',
                         '<p class="alert alert-danger">:message
                         </p>') !!}
                    </div>
                </div>
                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        {!! Form::text('email', null, array('placeholder' => 'Enter Email','class' => 'form-control')) !!}
                        {!! $errors->first('email', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Message:</strong>
                        {!! Form::textarea('cbody', null, array('placeholder' => 'Message','class' => 'form-control','style'=>'height:100px')) !!}
                        {!! $errors->first('message', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                {!! Form::submit('Save',['class'=>' btn-sm btn-primary']) !!}
                </div>
        {!! Form::close() !!}

    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
  @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
</script>
			</div>
		</div>
	</div>
</section>
@include('frontEnd.includes.footer')