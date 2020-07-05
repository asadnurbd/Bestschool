@include('hader_footer.hader')

<style>
#call-to-action{

background:#275c85;

}
.vl {
  border-left: 1px solid gray;
  border-right: 1px solid gray;
  height: 10px;
  margin-left: 10px;
  margin-right: 10px;
}

.circle {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  color: #fff;
  text-align: center;
  background: #1428D7
}

.testimonial-itsem {
	border: 2px dashed;
	padding: 5px;
	border-color: solid gray;
	width: 90%;
	background-color: lightgray;
}

html, body {
  padding-bottom:40px;
    height: 100%;
    margin: 0;

}
  /* map css */
#map {
    width:100%;
    padding: 80px;
    height:350px;
}

p{

  font-family: "Times New Roman", Times, serif;
  color:black;
  font-size:150%;
  padding:15px;

}
a{
    font-family: "Times New Roman", Times, serif;
    font-size:120%;

}
.description{

  font-family: "Times New Roman", Times, serif;
  font-size:150%;
}


</style>

<div>
<!--==========================
      Main school Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">

            @foreach ($school_info as $info)

            <h3 class="cta-title">{{ $info->school_name }}</h3>
            <span class="ion-ios-location-outline" style="color: white;"> <a href="#map" style="color: white; text-decoration: underline;">{{ $info->s_address }}</a> <span class="vl"></span> {{ $info->area }} {{ $info->type }} School <span class="vl"></span> </span>
            <span class="ion-ios-telephone-outline" style="color: white;"> <a href="#contact" style="color: white; text-decoration: underline;">Contact info</a></span>

          	<br><br>

            <span style="color: white;">RATING : <sup>{{ $info->rating }}</sup>/10</span> <span class="vl"></span> <span style="color: white;"> REVIEWS : 5 </span><span class="vl"></span> <span style="color: white;"> STUDENT : {{ $info->totalStudent }}</span><span class="vl"></span><span style="color: white;"> TYPE : {{ $info->type }}</span>

            @endforeach
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#nearby">Nearby Best Schools</a>
          </div>
        </div>

      </div>
    </section><!-- #end of Main school Section -->


<!-- school detail section -->
	<section id="services">
      <div class="container">
        <div class="card " class=""style="border:0px solid #A9A9A9;margin-bottom:40px;border-radius:80px;background:#F0FFFF;">
          <div class="card-body ">
          <p >This school is rated above average in school quality compared to other schools in Michigan. Students here are making above average year-over-year academic improvement, and this school has above average results in how well it’s serving disadvantaged students.</p>

          </div>
        </div>


        <div class="row" >

          <div class="col-lg-6"  >
            <div class="box wow fadeInLeft" style="background:#F0FFFF;">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a>ACADEMICS</a></h4>
              <h5 class="title"><a href="" style="margin-left: 25px;"></a></h5><hr>
              <h5 class="title"><a href="#Testscores" style="margin-left: 100px;" >Test Scores</a></h5><hr>
              <h5 class="title"><a href="#StudentProgress" style="margin-left: 100px;">Student Progress</a></h5><hr>


            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft" style="background:#F0FFFF;">
              <div class="icon"><i class="fa fa-picture-o"></i></div>
              <h4 class="title"><a>EQUITY</a></h4>
              <h5 class="title"><a href="" style="margin-left: 25px;"></a></h5><hr>
              <h5 class="title"><a href="#Equityoverview" style="margin-left: 100px;">Equity Overview</a></h5><hr>
              <h5 class="title"><a href="#Low-incomestudents" style="margin-left: 100px;">Low Income Students</a></h5><hr>

            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- school detail section end -->



     <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>ACADEMICS</h2>

        </div>

        <div class="row" >

          <div class="col-lg-x6" >
            <div class="box wow fadeInLeft" id="Testscores" style="background:#F0FFFF;" >
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a>Test Scores</a></h4>
              <p class="description" style="font-size:150%;">This rating measures how much students at this school improved from one year to the next, compared to students with similar proficiency levels at other schools in the state.</p>
            </div>
		        <br>
            <div class="box wow fadeInRight" id="StudentProgress" style="background:#F0FFFF;">
              <div class="icon"><i class="fa fa-picture-o"></i></div>
              <h4 class="title"><a>Student Progress</a></h4>
              <p class="description" style="font-size:150%;">This rating measures how much students at this school improved from one year to the next, compared to students with similar proficiency levels at other schools in the state.</p>
            </div>
          </div>
	     	<br>
        </div>

      </div>
    </section>




     <!--==========================
      New Section
    ============================-->

    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>EQUITY</h2>

        </div>

        <div class="row" >

          <div class="col-lg-x6" >
            <div class="box wow fadeInLeft" id="Equityoverview" style="background:#F0FFFF;">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a>Equity Overview</a></h4>
              <p class="description" style="font-size:150%;">This rating measures how much students at this school improved from one year to the next, compared to students with similar proficiency levels at other schools in the state.</p>
            </div>
			       <br>
            <div class="box wow fadeInRight" id="Low-incomestudents" style="background:#F0FFFF;" >
              <div class="icon"><i class="fa fa-picture-o"></i></div>
              <h4 class="title"><a>Low Income Students</a></h4>
              <p class="description" style="font-size:150%;">This rating measures how much students at this school improved from one year to the next, compared to students with similar proficiency levels at other schools in the state.</p>
            </div>
          </div>
			   <br>
        </div>

      </div>
      <tr>
    </section><!-- #services -->



<!-- New Section -->
<section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Academic Fee Table</h2>
          <div class="col-lg-12" >
            <section class="panel">
              <header class="panel-heading" style="text-align: center;">
                Fee Structure
              </header>
              <div class="table-responsive" style="text-align: center;">
                <img src="{{asset('public/fee.png')}}">
              </div>

            </section>
          </div>

      </div>
  </div>
</section>



<!-- New Section -->

<section id="services">
      <div class="container" >
        <div class="section-header">
          <h2>{{$info->school_name}} in MAP</h2>
          <div class="col-lg-12">
            <section class="panel">
          	<div class="row" >
              <div class="box wow fadeInLeft" id="Equityoverview" style="width: 100%;">
              <div class="col-lg-x6" id="map" style="width:94%; margin-left:30px; z-index: 10;">
                  <script>
                  var map = L.map('map').setView(["{{$info->longi}}", "{{$info->lati}}"], 15);
                  L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {maxZoom:100, minZoom:10,attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, '+'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',id: 'mapbox.streets'}).addTo(map);

                  //school in map
                   L.marker(["{{ $info->longi}}", "{{ $info->lati}}"]).bindPopup("{{$info->school_name}}").addTo(map);
                  </script>
              </div>
              </div>
            </div>
          </section>
        </div>
          </div>
        </div>
</section>



<section id="services">
      <div class="container" id="contact">
        <div class="section-header">
          <h2>Contact</h2>

          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading" style="text-align: center; font-size:200%;">
                Contact Information
              </header>
              <div class="table-responsive"style="background:#275c85;">
                <table class="table" style="color:#50d8af;font-size:120%;">
                  <thead style="color:white;">
                    <tr style="color:white;">
                      <th></th>
                      <th style="color:#50d8af;">School Name</th>
                      <th style="color:#50d8af;">Address</th>
                      <th style="color:#50d8af;">Number</th>
                      <th style="color:#50d8af;">Website</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td>{{ $info->school_name }}</td>
                      <td>{{ $info->s_address }}</td>
                      <td>{{ $info->phone }}</td>
                      <td>{{ $info->website }}</td>
                    </tr>

                  </tbody>
                </table>
              </div>

            </section>
          </div>

      </div>
  </div>
</section>




<!-- review section -->

<section id="testimonials" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Review of - {{ $info->school_name }}</h2>
          <p style="border-radius: 2px;"> Reviews from Parents!</p>
        </div>


        <div class="owl-carousel testimonials-carousel">

          <!-- comment profile -->

  @foreach($comments as $comment)


       @if($comment->school_id==$info->school_id)
             @foreach($user as $users)
              @if($comment->user_id==$users->id)
            <div class="testimonial-item" >
              <p>
                <img src="{{ asset('rev') }}/img/quote-sign-left.png" class="quote-sign-left" alt="">
                    {{$comment->comment}}
                <img src="{{ asset('rev') }}/img/quote-sign-right.png" class="quote-sign-right" alt="">

              </p>
              <img src="{{ asset('') }}{{$users->image}}" class="testimonial-img" alt="">
              <h3>{{$users->name}}</h3>
              <h4>{{$users->email}}</h4>
              <h5>{{$users->occupation}}</h5>
            </div>
                 @endif
               @endforeach
            @endif
      @endforeach

        </div>
      </div>
    </section><!-- #testimonials -->





<!-- Review post section -->
@guest
<section>


<div class="container">
        <div class="form">
          <div class="text-center"><a href="{{ route('login') }}" class="btn btn-primary btn-lg">Write A Review</a></div>
          </div>
        </div>
</section>



@if (Route::has('register'))

@endif

@else
<section id="contact" class="wow fadeInUp">
  <div class="container" >
    <div class="form">
      <form method="post" action="{{ route('comment.store',$info->school_id) }}">
          @csrf
          <div class="form-group">
          <div class="row">
              <div class="col-sm-12">

                  <textarea name="comment" rows="5" class="text-area-messge form-control" data-msg="Please write a review!"
                            placeholder="Write your review about - {{ $info->school_name }}" aria-required="true" aria-invalid="false"></textarea >
                            <div class="validation"></div>
              </div><!-- col-sm-12 -->
              <div class="col-sm-12">
                <div class="text-center">  <button  style="margin-top:10px;" class="submit-btn" type="submit" id="form-submit"><b>POST REVIEW</b></button></div>
              </div><!-- col-sm-12 -->

          </div><!-- row -->
            </div><!-- row -->
      </form>
    </div>

  </div>

</section><!-- #contact -->
@endguest









 <!--==========================
      Recomendation Section
    ============================-->
    <section id="testimonials" class="wow fadeInUp">
      <div class="container" id="nearby" >
        <div class="section-header">
          <h2>Nearest High Performing Schools</h2>
          <p>High performing best school nearby.</p>
        </div>


        <div class="owl-carousel testimonials-carousel" style="color:white;">

            <!-- recomendation school 1 -->
            <div class="testimonial-itsem" style="background:#303a48;">
              @foreach ($school_info4 as $info2)
              <h3 ><span class="icon"> <center><img src="{{ asset('')}}{{$info2->image}}"  style="height:100px ;width:150px;"></center></span>  <span > RATING : <b>{{ $info2->rating }}</b>/<sub>5</sub></span> <b> <a style="color:#50d8af;" href="{{route('schooldetail', $info2->school_id)}}">{{ $info2->school_name}}</a></b></h3>
              <h4> {{ $info2->s_address }}</h4>
              @endforeach
            </div>


            <!-- recomendation school 2 -->
           <div class="testimonial-itsem" style="background:#303a48;">
             @foreach ($school_info5 as $info3)
              <h3 > <span class="icon"> <center><img src="{{ asset('')}}{{$info3->image}}"  style="height:100px ;width:150px;"></center></span> <span > RATING : <b>{{ $info3->rating }}</b>/<sub>5</sub></span> <b> <a style="color:#50d8af;" href="{{route('schooldetail', $info3->school_id)}}">{{ $info3->school_name}}</a></b></h3>
              <h4> {{ $info3->s_address }}</h4>
              @endforeach
            </div>


            <!-- recomendation school 3 -->
            <div class="testimonial-itsem"  style="background:#303a48;">
              @foreach ($school_info6 as $info4)

              <h3 > <span class="icon"><center> <img src="{{ asset('')}}{{$info4->image}}"  style="height:100px ;width:150px;"></center></span> <span > RATING : <b>{{ $info4->rating }}</b>/<sub>5</sub></span> <b> <a  style="color:#50d8af;"href="{{route('schooldetail', $info4->school_id)}}">{{ $info4->school_name}}</a></b></h3>
              <h4> {{ $info4->s_address }}</h4>
              @endforeach
            </div>
        </div>

      </div>
    </section><!-- #recomendation -->
</div>
@include('hader_footer.footer')
