@include('hader_footer.hader')


  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h2>Guide your child <span style="color:#2F4F4F;">to a great</span><br>future!</h2><br>
      <h1><span style="color:#2F4F4F;font-style: italic;font-weight: bold;">FIND THE BEST SCHOOL</span></h1>

      <style type="text/css">

      	.s01 form .inner-form .input-field.third-wrap .btn-search {
  			height: 100%;
  			width: 100%;
  			background: #4272d7;
  			white-space: nowrap;
  			border-radius: .5px;
  			font-size: 20px;
  			color: #fff;
  			transition: all .2s ease-out, color .2s ease-out;
  			border: 0;
  			cursor: pointer;
		}

		.s01 form .inner-form .input-field.third-wrap .btn-search:hover {
		  background: #2d62d3;
		}

		.s01 form .inner-form .input-field {
		  margin-right: 30px;
		  height: 53px;
		}

		.s01 form .inner-form .input-field input {
		  height: 100%;
		  background: #fff;
		  border-radius: .5px;
		  border: 0;
		  display: block;
		  width: 100%;
		  padding: 10px 20px;
		  font-size: 20px;
		}

		.s01 form .inner-form .input-field input.placeholder {
		  color: #9a9a9a;
		  font-size: 20px;
		}

		.s01 form .inner-form .input-field input:-moz-placeholder {
		  color: #9a9a9a;
		  font-size: 20px;
		}

		.s01 form .inner-form .input-field input::-webkit-input-placeholder {
		  color: #9a9a9a;
		  font-size: 20px;
		}

		.s01 form .inner-form .input-field input:hover, .s01 form .inner-form .input-field input:focus {
		  box-shadow: none;
		  outline: 0;
		}

		.s01 form .inner-form .input-field.first-wrap {
		  -ms-flex-positive: 1;
		      flex-grow: 1;
		}

		.s01 form .inner-form .input-field.second-wrap {
		  width: 32.77%;
		  min-width: 180px;
		}

		.s01 form .inner-form .input-field.third-wrap {
		  width: 180px;
		  margin-right: 0;
		}

		.detail{
			-webkit-tap-highlight-color: rgba(0,0,0,0);
			text-align: center;
			box-sizing: border-box;
			margin: 0 0 10.5px;
			font: 14px "opensans-regular", Arial, "Helvetica Neue", Helvetica, sans-serif;
			font-family: 'RobotoSlab-Bold', sans-serif;
			font-weight: 1000;
			font-size: 36px;
			color: #333333;
			padding: 30px 15px 0 15px;
		}

		.detail_inner{
			-webkit-tap-highlight-color: rgba(0,0,0,0);
			text-align: center;
			box-sizing: border-box;
			margin: 0 0 10.5px;
			font-weight: 900;
			color: #333333;
			font-size: 20px;
			padding: 15px 0;
		}

     </style>



     <div class="s01" style="padding-bottom: 20px; background-position: center center; background-size: cover; font-family: 'Poppins', sans-serif; align-items: center; display: -ms-flexbox; display: flex; -ms-flex-pack: center; justify-content: center; -ms-flex-align: center;">
      <form style="width: 100%; max-width: 1290px;" action="{{route('home.school_search')}}" method="get" >
        <div class="inner-form" style="background: rgba(0, 1, 0, 0.5); padding: 15px 15px;display: -ms-flexbox;display: flex;width: 100%;-ms-flex-pack: justify;justify-content: space-between;-ms-flex-align: center;align-items: center;">

          <div class="input-field second-wrap" >
          	<!-- <input id="location" type="text" placeholder="location" /> -->


              <select id="location" style="height: 54px; width: 100%;"><option id="search" name="search">Select Class</option>
                              <option value="p">Play</option>
                              <option value="1">I</option>
                              <option value="2">II</option>
                              <option value="3">III</option>
                              <option value="4">IV</option>
                              <option value="5">V</option>
                              <option value="6">VI</option>
                              <option value="7">VII</option>
                              <option value="8">VIII</option>
                              <option value="9">IX</option>
                              <option value="10">X</option></select>

          </div>

          <div class="input-field first-wrap">
            <input id="search" type="text" placeholder="School Near?" name="search" />
          </div>

           <div class="input-field third-wrap">
            <button class="btn-search" type="submit" value="search" >Search</button>

          </div>
        </div>
      </form>
    </div>


    </div>

    <div id="intro-carousel" class="owl-carousel">
      <div class="item" style="background-image: url('{{ asset('rev') }}/img/intro-carousel/1.jpg');"></div>
      <div class="item" style="background-image: url('{{ asset('rev') }}/img/intro-carousel/2.jpg');"></div>
      <div class="item" style="background-image: url('{{ asset('rev') }}/img/intro-carousel/3.jpg');"></div>
      <div class="item" style="background-image: url('{{ asset('rev') }}/img/intro-carousel/4.jpg');"></div>
    </div>







  </section><!-- #intro -->


  <section id="services">
	      <div class="container">
	        <div class="section-header">
	          <h2 style="text-align: center;">We help millions of parents<br> get a great education for<br> their child.</h2>

	        </div>
	    </div>
	</section>
 <!-- slider -->
  <section>
  <div class="container">
    <div class="row" style="margin-left:20px;" >

        <div class="col-sm-6">


          <div id="carouselExampleControls" class="carousel slide rounded float-left">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img style="width:400px;height:300px;border:10px solid #778899 ;"class="rounded-circle" src="{{asset('rev')}}/img/intro-carousel/01.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img style="width:400px;height:300px;border:10px solid #778899 ;"class="rounded-circle" src="{{asset('rev')}}/img/intro-carousel/02.jpg"  alt="Second slide">
            </div>
            <div class="carousel-item">
              <img style="width:400px;height:300px;border:10px solid #778899 ;"class="rounded-circle" src="{{asset('rev')}}/img/intro-carousel/4.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          </div>
      </div>
   <div class="col-sm-6">

        <div id="carouselExampleControls" class="carousel slide rounded float-right">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img style="width:400px;height:300px;border:10px solid #778899  ;"class="rounded-circle" src="{{asset('rev')}}/img/intro-carousel/02.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img style="width:400px;height:300px;border:10px solid #778899   ;"class="rounded-circle" src="{{asset('rev')}}/img/intro-carousel/4.jpg"  alt="Second slide">
          </div>
          <div class="carousel-item">
            <img style="width:400px;height:300px;border:10px solid #778899   ;"class="rounded-circle" src="{{asset('rev')}}/img/intro-carousel/01.png" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    </div>

  </div>
</div>

</section>



<section id="services">
      <div class="container">
        <div class="section-header">
          <p style="text-align: center;font-weight: bold;color:#2F4F4F; font-size:30px;">More about our work:</p>
        </div>
    </div>
</section>



    <div style="text-align: center;">
      <span style="width: 25%; display: inline-table; margin: 0 auto; border:20px solid #A9A9A9 ;background:#A9A9A9;margin-left:20px;
  border-radius:20px;padding:20px;height:440px;"class="rounded-lg" >
        <center><img style="display: block;" src="{{asset('file')}}/img/school-quality-e8955ca541b89ec5253fbd9c8590fefb.png" alt="School quality" /></center>
          <u> <center><h4  style="text-align: left;text-align:center;font-weight: bold;color:#2F4F4F;">School Quality</h4 ></center></u>
        <span style="text-align: left;font-size:18px;font-style: italic;color:#191970;">We provide parents essential information to help improve educational opportunities for their children. Using trusted GreatSchools Ratings and school quality information, parents can choose the right school for their family.
		</span>
      </span>

      <span style="width: 25%; display: inline-table; margin: 0 auto; border:20px solid #A9A9A9;background:#A9A9A9;margin-left:20px;
  border-radius:20px;padding:20px; height:440px;"class="rounded-lg" >
        <center><img style="display: block;" src="{{asset('file')}}/img/supporting-advocacy-2b672641d36d24ff80a9d836ca49262d.png" alt="Supporting advocacy" /></center>
        <u> <center><h4 style="text-align: left;text-align:center;font-weight: bold;color:#2F4F4F;">Supporting Advocacy</h4 ></center></u>
        <span style="text-align: left;font-size:18px;font-style: italic;color:#191970;">We offer on-the-ground organizers, education and civil rights advocacy groups, and researchers useful data and insights to help parents and communities understand school quality, discover inequities for all children.
		  </span>
      </span>

      <span style="width: 25%; display: inline-table; margin: 0 auto; border:20px solid #A9A9A9;background:#A9A9A9;margin-left:20px;
  border-radius:20px;padding:20px; height:440px;"class="rounded-lg" >
        <center><img style="display: block;" src="{{asset('file')}}/img/parenting-resources-a30cf0a42c8f63531933b1464394809b.png" alt="Parenting resources" /></center>
        <u> <h4  style="text-align: left;text-align:center;font-weight: bold;color:#2F4F4F;">Parenting Information</h4 ></u>
        <span style="text-align: left;font-size:18px;font-style: italic;color:#191970;">We present actionable, research-based parenting information, including articles, videos, podcasts, and interactive tips, to help parents engage with and support their children’s academic studies.
		</span>
      </span>
    </div>




	<section id="services">
	      <div class="container">
	        <div class="section-header">
	          <h2 style="text-align: center;">Visit Our Best Schools</h2>
	        </div>

	        <!-- left side school start -->
	        <div class="row">
	          <div class="col-sm-6">
	          	@foreach($school_info as $school)
	          	@if ($school->school_id == $random )
              <div class="box wow fadeInLeft"style="background:#303a48;color:white;">
                <center>
                <div class="icon" style="margin-right:20px" > <img class="rounded-circle"  src="{{ asset('')}}{{$school->image}}"  style="height:150px ;width:150px;">
                </div>
                </center>
                <h4 class="title"><a  style="color:white;" href="{{route('schooldetail', $school->school_id)}}">{{ $school->school_name}}</a></h4>
                <p class="description">{{ $school->s_address}}<br>Class: I - IX <br>Rating: {{ $school->rating}}/5<br><br>
                <a style="padding: 5px; margin-left: 75px; text-align: center; border: solid; width: 30%;" class="" href="{{route('schooldetail', $school->school_id)}}">View Detail</a></p>
              </div>
	            @endif
				@endforeach
	          </div>



	          <div class="col-sm-6">
	          	@foreach($school_info as $school)
	          	@if ($school->school_id == $random1 )
              <div class="box wow fadeInLeft"style="background:#303a48;color:white;">
                <center>
                <div class="icon" style="margin-right:20px" > <img class="rounded-circle"  src="{{ asset('')}}{{$school->image}}"  style="height:150px ;width:150px;">
                </div>
                </center>
                <h4 class="title"><a  style="color:white;" href="{{route('schooldetail', $school->school_id)}}">{{ $school->school_name}}</a></h4>
                <p class="description">{{ $school->s_address}}<br>Class: I - IX <br>Rating: {{ $school->rating}}/5<br><br>
                <a style="padding: 5px; margin-left: 75px; text-align: center; border: solid; width: 30%;" class="" href="{{route('schooldetail', $school->school_id)}}">View Detail</a></p>
              </div>
	            @endif
				@endforeach
	          </div>
	        <!-- left side school end -->

	        <!-- right side school start -->
	          <div class="col-sm-6">
	          	@foreach($school_info as $school)
	          	@if ($school->school_id == $random2 )
              <div class="box wow fadeInLeft"style="background:#303a48;color:white;">
                <center>
	              <div class="icon" style="margin-right:20px" > <img class="rounded-circle"  src="{{ asset('')}}{{$school->image}}"  style="height:150px ;width:150px;">
	              </div>
                </center>
	              <h4 class="title"><a  style="color:white;" href="{{route('schooldetail', $school->school_id)}}">{{ $school->school_name}}</a></h4>
	              <p class="description">{{ $school->s_address}}<br>Class: I - IX <br>Rating: {{ $school->rating}}/5<br><br>
	              <a style="padding: 5px; margin-left: 75px; text-align: center; border: solid; width: 30%;" class="" href="{{route('schooldetail', $school->school_id)}}">View Detail</a></p>
	            </div>
	            @endif
	            @endforeach
	          </div>


	          <div class="col-lg-6">
	          	@foreach($school_info as $school)
	          	@if ($school->school_id == $random3 )
	            <div class="box wow fadeInLeft"style="background:#303a48;color:white;">
                <center>
	              <div class="icon" style="margin-right:20px" > <img class="rounded-circle"  src="{{ asset('')}}{{$school->image}}"  style="height:150px ;width:150px;">
	              </div>
                </center>
	              <h4 class="title"><a  style="color:white;" href="{{route('schooldetail', $school->school_id)}}">{{ $school->school_name}}</a></h4>
	              <p class="description">{{ $school->s_address}}<br>Class: I - IX <br>Rating: {{ $school->rating}}/5<br><br>
	              <a style="padding: 5px; margin-left: 75px; text-align: center; border: solid; width: 30%;" class="" href="{{route('schooldetail', $school->school_id)}}">View Detail</a></p>
	            </div>
	            @endif
				@endforeach
	          </div>
	        <!-- right side school end -->


	        </div>
	      </div>
	</section>
	<!-- #services -->


@include('hader_footer.footer')
