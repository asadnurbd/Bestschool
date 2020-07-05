<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{ asset('rev') }}/user/img/favicon.png">

  <title>Profile | Creative - Bootstrap 3 Responsive Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="{{ asset('rev') }}/user/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ asset('rev') }}/user/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ asset('rev') }}/user/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="{{ asset('rev') }}/user/css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="{{ asset('rev') }}/user/css/style.css" rel="stylesheet">
  <link href="{{ asset('rev') }}/user/css/style-responsive.css" rel="stylesheet" />


  <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>


    <style>
        html, body {
          padding-bottom:40px;
            height: 100%;
            margin: 0;

        }
        #map {
            width:100%;
            padding: 80px;
            height:350px;
        }
        #map_1 {
            width:95%;

            height:350px;
        }






/* for image butoon */

    .Neon {
font-family: sans-serif;
font-size: 14px;
color: #494949;
position: relative;


}
.Neon * {
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}
.Neon-input-dragDrop {
display: block;
width: 203px;
margin: 0 auto 25px auto;
padding: 25px;
color: #8d9499;
color: #97A1A8;
background: #fff;
border: 2px dashed #C8CBCE;
text-align: center;
-webkit-transition: box-shadow 0.3s, border-color 0.3s;
-moz-transition: box-shadow 0.3s, border-color 0.3s;
transition: box-shadow 0.3s, border-color 0.3s;
}
.Neon-input-dragDrop .Neon-input-icon {
font-size: 48px;
margin-top: -10px;
-webkit-transition: all 0.3s ease;
-moz-transition: all 0.3s ease;
transition: all 0.3s ease;
}
.Neon-input-text h3 {
margin: 0;
font-size: 18px;
}
.Neon-input-text span {
font-size: 12px;
}
.Neon-input-choose-btn.blue {
color: #008BFF;
border: 1px solid #008BFF;
}
.Neon-input-choose-btn {
display: inline-block;
padding: 8px 14px;
outline: none;
cursor: pointer;
text-decoration: none;
text-align: center;
white-space: nowrap;
font-size: 12px;
font-weight: bold;
color: #8d9496;
border-radius: 3px;
border: 1px solid #c6c6c6;
vertical-align: middle;
background-color: #fff;
box-shadow: 0px 1px 5px rgba(0,0,0,0.05);
-webkit-transition: all 0.2s;
-moz-transition: all 0.2s;
transition: all 0.2s;
}
p{
  font-size:120%;
  
}

label{
  font-size:120%;
  color:black;
  font-family: Arial, Helvetica, sans-serif;

}
h1{
  color:#275c85;
  font-family: Arial, Helvetica, sans-serif;

}
  </style>

</head>

<body>
  <!-- container section start -->
  <section id="container" class="" style="width: 90%;">


    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">

        <div class="row" >
          <!-- profile-widget -->
          <div class="col-lg-12" >
            <div class="profile-widget profile-widget-info" style="height:400px;">
              <div class="panel-body">
                <div class="col-lg-2 col-sm-2">
                  <h4>{{ Auth::user()->name }}</h4>
                  <div class="follow-ava">
                    <img src="{{ asset('') }}{{Auth::user()->image}}" alt="">
                  </div>
                  <h6>User</h6>
                </div>

                <div class="col-lg-4 col-sm-4 follow-info" >
                  <p>Hello I’m {{ Auth::user()->name }}.</p>
                  <img style="width:10px;height:10px;" src="{{ asset('rev') }}/img/quote-sign-left.png" class="quote-sign-left" alt="">
                    {{ Auth::user()->about}}
                  <img style="width:10px;height:5px;"src="{{ asset('rev') }}/img/quote-sign-right.png" class="quote-sign-right" alt="">

                  <p style="margin-top:10px;"><i class="fa "> @  {{ Auth::user()->email}}</i></p>
                  <h6>
                  <span><i class="icon_clock_alt icon_calendar"></i>{{ Auth::user()->updated_at}}</span>
                  <!-- <span><i class="icon_calendar"></i>{{ Auth::user()->email}}</span> -->
                  <span><i class="icon_pin_alt"></i>{{ Auth::user()->address}}</span>
                  </h6>
                </div>





                <div class="col-lg-2 col-sm-6 follow-info weather-category" style="padding-left:30px;">
                  <ul>
                    <li class="active"style="padding-left:30px;margin-right:20px;">
                      <i class="fa fa-bell fa-2x"> </i><br> Guied your child best future!
                    </li>
                  </ul>
                </div>

                <div class="col-lg-2 col-sm-6 follow-info weather-category" style="padding-left: 40px;">
                  <ul>
                    <li class="active">
                      <i class="fa fa-tachometer fa-2x"> </i><br> Do not give smartphone under 18!
                    </li>
                  </ul>

                </div>

              </div>

                <div class="row" style="padding:50px;margin">
                  <div class="container-fluid" >
                  <div class="card card-block"style="background-color:#324c57;">
                    <h3 class="card-title" class="h6">Schools based on your Current Location!</h3>
                    <a class="btn btn-primary" data-toggle="collapse" href="#map-profile" onclick="getLocation();" role="button" aria-expanded="false" aria-controls="collapseExample"style="font-size:20px;">
                     Click Here!
                    </a>
                  </div>
                  </div>
                 </div>
            </div>
        </div>
        <br>
                       <!--  map-profile -->

       <div class="card mb-12" style="width:97%;margin-left:20px;">
        <div class="collapse"class="tab-pane fade in active " id="map-profile">
          <section class="panel">
            <div class="panel-body ">
              <div class="card card-block"style="background-color:#324c57;">
                <a href="" data-toggle="collapse"  class="btn bg-secondary" style="color:white;"><h1> Schools aroud your Current Location!</h1></a>
              </div>

              <form class="form-horizontal" role="form">

                      <p id="demo"></p>
                      <p id="demo1"></p>
                      <div id='map_1' style='margin:40px 40px; z-index: 10;'></div>
                      <script>

                      var x = document.getElementById("demo");
                        var y = document.getElementById("demo1");

                      function getLocation() {
                        if (navigator.geolocation) {
                          navigator.geolocation.watchPosition(showPosition);
                        } else {
                          x.innerHTML = "Geolocation is not supported by this browser.";
                        }
                      }

                      function showPosition(position) {
                          var longi=position.coords.latitude;
                          var lati=position.coords.longitude;


                          var map_1 = L.map('map_1').setView([longi , lati],14); //map location


                          L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                          maxZoom:90, minZoom:7,
                            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                            id: 'mapbox.streets'
                          }).addTo(map_1);



                          var schoolIcon = L.Icon.extend({
                            options: {
                              iconSize: [30, 40]
                            }
                          });



                          var schoolIcon = new schoolIcon({iconUrl:'file/img/map_markar.png'});    //custom icon

                          L.marker([longi , lati]).bindPopup("My Location").addTo(map_1); //my location


                          @foreach($school_info as $school)

                               L.marker(["{{ $school->longi}}", "{{ $school->lati}}"], {icon: schoolIcon}).bindPopup("{{$school->school_name}}").addTo(map_1);  //school location from database //needs to print school name!!!!!!!
                           @endforeach


                      }
                      </script>

              </form>
            </div>
          </section>

        </div>
        </div>

        <!-- end map-profile -->



  <div class="card mb-12" style="width:97%;margin-left:20px;">
    <div class="card card-block"style="background-color:#324c57;">
      <a href="#"class="btn bg-secondary" style="color:black;"><h1> Schools aroud your Home Address!</h1></a>
    </div>

     <div class="card-body">
  <!-- find the location by map f -->
         <div class="container mb-4"  >
           <div class="card-body"class="col-lg">

                <div id='map'style="width:100%; z-index: 10;"></div>


       <!--   location longitude and latitude find               -->

               @php
                   $i=Auth::user()->area
               @endphp


               @foreach (  $location as $loc_code)
                       @if($i==$loc_code->loc_name)

       <!--    location longitude and latitude find     end          -->

        <script>

                  var map = L.map('map').setView(["{{$loc_code->longi}}", "{{$loc_code->lati}}"], 15); //map location

                  L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                      maxZoom:100, minZoom:10,
                      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                          'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                      id: 'mapbox.streets'
                  }).addTo(map);

                  var schoolIcon = L.Icon.extend({
                      options: {
                          iconSize:   [40, 50]
                      }
                  });


                  var schoolIcon = new schoolIcon({iconUrl:'file/img/map_markar.png'});    //custom icon


                  L.marker(["{{$loc_code->longi}}", "{{$loc_code->lati}}"]).bindPopup("Your Home Location").addTo(map); //my location

                @foreach($school_info as $school)

                     L.marker(["{{ $school->longi}}", "{{ $school->lati}}"], {icon: schoolIcon}).bindPopup('<a href="{{route('schooldetail', $school->school_id)}}">{{$school->school_name}}</a>').addTo(map);  //school location from database //needs to print school name!!!!!!!
                 @endforeach

        </script>
        @endif
         @endforeach

        </div>
        </div>


              <!-- find the location by map end -->


</div>
</div>



        <!-- page start-->



        <div class="row" style="width: 99%; margin-left: 5px;padding-top:10px;">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">

                  <li class="nav-item">
                    <a  href="#profile" class="nav-link active" role="tab" data-toggle="tab">Profile</a>
                  </li>


                  <li class="nav-item">


                    <a href="" data-toggle="tab" data-target="#editprofile"  class="nav-link" role="tab">  Edit Profile</a>
                  </li>

                  <li class="nav-item">
                    <!-- <a href="#map-profile" onclick="getLocation();" class="nav-link" role="tab" data-toggle="tab"> Your current Location</a> -->
                  </li>



                  <!-- <li class="nav-item">
                    <a href="#map-profile" onclick="getLocation()" class="nav-link" role="tab" data-toggle="tab">Your current location</a>
                  </li> -->
                </ul>
              </header>


       <div class="panel-body" >
              <div class="tab-content">
                          <!-- profile work -->
       <div role="tabpanel" class="tab-pane fade in active" id="profile">

                  <section class="panel">
                    <div class="bio-graph-heading">
                      Hello I’m {{ Auth::user()->name }}.
                    </div>
                    <div class="panel-body bio-graph-info">
                      <h1 style="color:#275c85;">Bio Graph</h1>
                      <div class="row">
                        <div class="bio-row">
                          <p><span>Name </span>: {{ Auth::user()->name }} </p>
                        </div>
                        <div class="bio-row">
                          <p><span>Address </span>: {{ Auth::user()->address }}</p>
                        </div>
                        <div class="bio-row">
                          <p><span>Occupation </span>: {{ Auth::user()->occupation }}</p>
                        </div>
                        <div class="bio-row">
                          <p><span>Email </span>: {{ Auth::user()->email }}</p>
                        </div>
                        <div class="bio-row">
                          <p><span>Mobile </span>: {{ Auth::user()->phone }}</p>
                        </div>
                        <div class="bio-row">
                          <p><span>Thana </span>: {{ Auth::user()->area}}</p>
                        </div>
                      </div>
                    </div>
                  </section>


                 </div>

                           <!-- profile work  end-->


                             <!-- edit profile work -->

                <div role="tabpanel" class="tab-pane fade " id="editprofile">
                   <section class="panel">
                     <div class="panel-body bio-graph-info">
                       <h1> Profile Info</h1>

                       <form class="form-horizontal" role="form" action="{{route('home.profile_update', Auth::user()->id ) }}"  method="post" enctype="multipart/form-data">
                         @csrf
                         <div class="form-group">
                           <label class="col-lg-2 control-label">Name</label>
                           <div class="col-lg-6">
                             <input type="text" class="form-control" value="{{ Auth::user()->name }}"  name="name" placeholder=" ">
                           </div>
                         </div>
                         <div class="form-group">
                           <label class="col-lg-2 control-label">Email</label>
                           <div class="col-lg-6">
                             <input type="text" class="form-control" value="{{ Auth::user()->email}}"  name="email" placeholder=" ">
                           </div>
                         </div>
                         <div class="form-group">
                           <label class="col-lg-2 control-label">Address</label>
                           <div class="col-lg-6">
                             <input type="text" class="form-control" value="{{ Auth::user()->address}}"  name="address" placeholder=" ">
                           </div>
                         </div>
                         <div class="form-group">
                           <label class="col-lg-2 control-label">Occupation</label>
                           <div class="col-lg-6">
                             <input type="text" class="form-control" value="{{ Auth::user()->occupation}}"  name="occupation" placeholder=" ">
                           </div>
                         </div>
                         <div class="form-group">
                           <label class="col-lg-2 control-label">Area</label>
                           <div class="col-lg-6">
                             <input type="text" class="form-control" value="{{ Auth::user()->area}}"  name="area" placeholder=" ">
                           </div>
                         </div>
                         <!-- image -->
                         <div class="form-group">
                           <label class="col-lg-2 control-label">Image upload:</label>
                         <div class="Neon Neon-theme-dragdropbox">
      <input style="z-index:100; opacity: 0; width:100px; height:100px; position: absolute; right: 0px; left: 0px; margin-right: auto; margin-left: auto;" name="image" value="{{Auth::user()->image}}" id="filer_input2" multiple="multiple" type="file">
      <div class="Neon-input-dragDrop"><div class="Neon-input-inner"><div class="Neon-input-icon"><i class="fa fa-file-image-o"></i></div><div class="Neon-input-text"><h3>Drag&amp;Drop files here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="Neon-input-choose-btn blue">Browse Files</a></div></div>
      </div>
        </div>

                          <div class="form-group">
                           <label class="control-label col-lg-2" for="content">About:</label>
                           <div class="col-lg-6">
                             <textarea class="form-control" value="{{ Auth::user()->about}}"  name="about" placeholder=" "></textarea>
                           </div>
                         </div>



                         <div class="form-group">
                           <label class="col-lg-2 control-label">Tel No</label>
                           <div class="col-lg-6">
                             <input type="text" class="form-control" value="{{ Auth::user()->phone}}"  name="phone">
                           </div>
                         </div>

                         <div class="form-group">
                           <div class="col-lg-offset-2 col-lg-10">
                             <button type="submit" class="btn btn-primary">Save</button>
                             <!-- <button type="button" class="btn btn-danger">Cancel</button> -->
                           </div>
                         </div>
                       </form>
                     </div>
                   </section>



                 </div>


                </div>
                </div>

                </div>
              </div>
            </section>
          </div>


        <!-- page end-->

      </section>
    </section>

  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="{{ asset('rev') }}/user/js/jquery.js"></script>
  <script src="{{ asset('rev') }}/user/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="{{ asset('rev') }}/user/js/jquery.scrollTo.min.js"></script>
  <script src="{{ asset('rev') }}/user/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery knob -->
  <script src="{{ asset('rev') }}/user/assets/jquery-knob/js/jquery.knob.js"></script>
  <!--custome script for all page-->
  <script src="{{ asset('rev') }}/user/js/scripts.js"></script>

  <script>
    //knob
    $(".knob").knob();
  </script>


</body>

</html>
