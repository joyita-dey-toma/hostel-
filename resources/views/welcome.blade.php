<!DOCTYPE html>
 <html>
 <head>
   <title> HOSTEL MANAGEMENT </title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	 <link rel="stylesheet" type="text/css" href="{{ asset('front/css/style.css') }}">
	 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
	
	 <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
      

 </head>
 <header>
 <body>
 <section id="banner-cover">
 <img src="{{ asset('front/image/banner.jpg.jpg') }}">
 <div class="banner-text">
     <h1>Razia Monzil Girl's Hostel</h1>
	 <p>Come & gain new experience & shine your life</p>
   
  </div>
 
 </section>
 <div id="sideNav">
      <nav>
	  <ul>
	  <li><a href="#banner">HOME</a></li>
	  <li><a href="#facility">FACILITY</a></li>
	  <li><a href="#feature">ABOUT</a><li>
	  <li><a href="#service">SERVICE</a></li>
	  <li><a href="#testimonial">TESTIMONIALS</a></li>
	  <li><a href="#footer">CONTACT US</a></li>
	  
	  </ul>
	  </nav>
	 </div>
	 <!--Features-->
 
	 <section id="facility">
	 <div class="title-text">
	 <p>facilities<p>
	 <h1>Our facilities</h1>
	 </div>
	 <div class="service-box">
     @if($facilities->count()>0)
         @foreach($facilities as $facility)
	      <div class="single-service">
		  <img src="{{$facility->image}}">
		  <div class="overlay"></div>
		  <div class="service-desc">
		  <h3>{{$facility->title}}</h3>
		  <hr>
		  <p>{{$facility->description}}</p>
		  </div>
		  </div>
          @endforeach
               
               @else
                   <tr>
                       <th colspan="5" class="text-center">No Data Yet..</th>
                   </tr>
                @endif   
		 
		  </div>
	 </section>
	 
	 <!--features-->
	 
	 <section id="feature">
	 <div class="title-text">
	 <p>FEATURES</P>
	 <h1>Why Choose Us</h1>
	 </div>
	 <div class="feature-box">
	  <div class="features">
	 <h1>Accommodation</h1>
	 <div class="features-desc">
	 <div class="feature-icon">
	   <i class="fa fa-bed" aria-hidden="true"></i>

	 </div>
	 <div class="feature-text">
	    <p>We provide a perfect room for a student & also provide a better environment for study.</p>
	 </div>
	 </div>
	  <h1>High Security</h1>
	 <div class="features-desc">
	 <div class="feature-icon">
	   <i class="fa fa-check-square-o" aria-hidden="true"></i>

	 </div>
	 <div class="feature-text">
	    <p>We provide a good security system & our guards are smartly handled all irritative situations.</p>
	 </div>
	 </div>
	  <h1>Affordable Cost</h1>
	 <div class="features-desc">
	 <div class="feature-icon">
	   <i class="fa fa-money" aria-hidden="true"></i>

	 </div>
	 <div class="feature-text">
	    <p>We provide affordable consumption for all classes of students to live here comfortably.</p>
	 </div>
	 </div>
	  </div>
	  <div class="features-img">
	    <img src="{{ asset('front/image/building.jpg.jpg') }}"/>
		</div>
	  </div>
	 </section>
	 
	 <!--Service  -->
	 
	 <section id="service">
	 <div class="title-text">
	 <p>SERVICES<p>
	 <h1>We Provide Better</h1>
	 </div>
	 <div class="service-box">
     @if($services->count()>0)
         @foreach($services as $service)
	      <div class="single-service">
		  <img src="{{$service->image}}">
		  <div class="overlay"></div>
		  <div class="service-desc">
		  <h3>{{$service->name}}</h3>
		  <hr>
		  <p>{{$service->description}}</p>
		  </div>
		  </div>
          @endforeach
               
               @else
                   <tr>
                       <th colspan="5" class="text-center">No Data Yet..</th>
                   </tr>
                @endif   
		  </div>
	 </section>


	<!--Students-Info--> 

	 <section>
	   <div class="title-text">
	   <p>About Student's</p>
	   <h1>Student's Info.</h1>
	   </div>

	   <div class="row">
	   @if($students->count()>0)
         @foreach($students as $student) 
	      <div class="col-md-4 student-info">
		     <div class="card-p">
				<img src="{{$student->image}}" alt="John" style="width:300px" class="stu-img fluid">
				<h1>{{$student->name}}</h1>
				<p class="title">{{$student->contact}}</p>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<p><button class="button-con">Contact</button></p>
				</div>  
		   </div>
		   
		   @endforeach
               
               @else
                   <tr>
                       <th colspan="5" class="text-center">No Data Yet..</th>
                   </tr>
                @endif   
		  </div>
		</div>
	</section>
	 
	 
	 <!--Testimonial -->
	 
	 <section id="testimonial">
	   <div class="title-text">
	   <p>TESTIMONIAL</p>
	   <h1>Some Guardian's Comments</h1>
	   </div>
	   <div class="testimonial-row">
	      <div class="testimonial-col">
		  <div class="user">
		     <img src="{{ asset('front/image/Minoty.jpg.jpg') }}">
			 <div class="user-info">
			  <h4>MINOTY CHOWDHURY<i class="fa fa-fa-twitter"></i></h4>
			  <small>@minotychowdhury</small>
			  </div>
		  </div>
		  <p>The service of the hostel is too good and I am fully satisfied for the srevice.
		  My child is also happy for this service.</p>
		  </div>
		  <div class="testimonial-col">
		   <div class="user">
		     <img src="{{ asset('front/image/nikhil.jpg.jpg') }}">
			 <div class="user-info">
			  <h4>NIKHIL DEY<i class="fa fa-twitter"></i></h4>
			  <small>@nikhildey</small>
			  </div>
		  </div>
		  <p>The service of the hostel is too good and I am fully satisfied for the srevice.
		  My child is also happy for this service.</p>
		  </div>
		  <div class="testimonial-col">
		   <div class="user">
		     <img src="{{ asset('front/image/tahmina.jpg.jpg') }}">
			 <div class="user-info">
			  <h4>TAHMINA ROJI<i class="fa fa-twitter"></i></h4>
			  <small>@tahminaroji</small>
			  </div>
		  </div>
		  <p>The service of the hostel is too good and I am fully satisfied for the srevice.
		  My child is also happy for this service.</p>
		  
		  </div>
		  
		</div>
		</section>
		
 <!--footer-->
	
	<section id="footer">
	   <img src="{{ asset('front/image/footer.jpg.jpg') }}" class="footer-img">
	     <div class="title-text">
		 <p>CONTACT</p>
		 <h1>Visit US Today<h1>
		 </div>
	<div class="footer-row">
	<div class="footer-left">
	     <h1>Visiting Time</h1>
		 <p><i class="fa fa-clock-o"></i>Sunday to thursday-9am to 8pm</p>
		 <p><i class="fa fa-clock-o"></i>Friday & saturday-11am to 5pm</p>
	</div>
	<div class="footer-right">
	<h1>Get In Touch</h1>
	<p>#16/2 Arnob-Mirer Moydan,Sylhet<i class="fa fa-map-marker"></i></p>
	<p>+01736717072<i class="fa fa-whatsapp"></i></p>
	<p>+01720631844<i class="fa fa-phone"></i></p>
	</div>
	</div>
	
	<div class="social-links">
	     <i class="fa fa-facebook"></i>
		 <i class="fa fa-instagram"></i>
		 <i class="fa fa-twitter"></i>
		 <i class="fa fa-youtube"></i>
		 <p>Copyright By Joyita Dey Toma</p>
	</div>
	    
	
	
	</section>
	
	
 
 
 
 </header>
 </body>
 </html>