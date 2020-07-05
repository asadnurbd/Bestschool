@include('hader_footer.hader')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
            crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <title></title>

    <style media="screen">


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
    /* for body */
    body {
              background-color:#908F8F;
          }

          .h7 {
              font-size:3rem;
          }
          .h2 {
              font-size:1.5rem;
          }

          .gedf-wrapper {
              margin-top: 0.97rem;
          }

          @media (min-width: 992px) {
              .gedf-main {
                  padding-left: 4rem;
                  padding-right: 4rem;
              }
              .gedf-card {
                  margin-bottom: 2.77rem;
              }
          }

          /**Reset Bootstrap*/
          .dropdown-toggle::after {
              content: none;
              display: none;
          }


    /* comment */

      body{ background: #fafafa;}
      .widget-area.blank {
      background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
      -webkit-box-shadow: none;
      -moz-box-shadow: none;
      -ms-box-shadow: none;
      -o-box-shadow: none;
      box-shadow: none;
      }
      body .no-padding {
      padding: 0;
      }
      .widget-area {
      background-color: #fff;
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      -ms-border-radius: 4px;
      -o-border-radius: 4px;
      border-radius: 4px;
      -webkit-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
      -moz-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
      -ms-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
      -o-box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
      box-shadow: 0 0 16px rgba(0, 0, 0, 0.05);
      float: left;
      margin-top: 30px;
      padding: 25px 30px;
      position: relative;
      width: 100%;
      }
      .status-upload {
      background: none repeat scroll 0 0 #f5f5f5;
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      -ms-border-radius: 4px;
      -o-border-radius: 4px;
      border-radius: 4px;
      float: left;
      width: 100%;
      }
      .status-upload form {
      float: left;
      width: 100%;
      }
      .status-upload form textarea {
      background: none repeat scroll 0 0 #fff;
      border: medium none;
      -webkit-border-radius: 4px 4px 0 0;
      -moz-border-radius: 4px 4px 0 0;
      -ms-border-radius: 4px 4px 0 0;
      -o-border-radius: 4px 4px 0 0;
      border-radius: 4px 4px 0 0;
      color: #777777;
      float: left;
      font-family: Lato;
      font-size: 14px;
      height: 142px;
      letter-spacing: 0.3px;
      padding: 20px;
      width: 100%;
      resize:vertical;
      outline:none;
      border: 1px solid #F2F2F2;
      }

      .status-upload ul {
      float: left;
      list-style: none outside none;
      margin: 0;
      padding: 0 0 0 15px;
      width: auto;
      }
      .status-upload ul > li {
      float: left;
      }
      .status-upload ul > li > a {
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      -ms-border-radius: 4px;
      -o-border-radius: 4px;
      border-radius: 4px;
      color: #777777;
      float: left;
      font-size: 14px;
      height: 30px;
      line-height: 30px;
      margin: 10px 0 10px 10px;
      text-align: center;
      -webkit-transition: all 0.4s ease 0s;
      -moz-transition: all 0.4s ease 0s;
      -ms-transition: all 0.4s ease 0s;
      -o-transition: all 0.4s ease 0s;
      transition: all 0.4s ease 0s;
      width: 30px;
      cursor: pointer;
      }
      .status-upload ul > li > a:hover {
      background: none repeat scroll 0 0 #606060;
      color: #fff;
      }
      .status-upload form button {
      border: medium none;
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      -ms-border-radius: 4px;
      -o-border-radius: 4px;
      border-radius: 4px;
      color: #fff;
      float: right;
      font-family: Lato;
      font-size: 14px;
      letter-spacing: 0.3px;
      margin-right: 9px;
      margin-top: 9px;
      padding: 6px 15px;
      }
      .dropdown > a > span.green:before {
      border-left-color: #2dcb73;
      }
      .status-upload form button > i {
      margin-right: 7px;
      }

</style>

</head>

<body style="background:#eeeeee;padding:20px;">





<div class="container-fluid gedf-wrapper">

<!-- validation code -->
@if ($errors->any())
<div class="alert alert-danger" style="width:750px;margin-left:450px;">
  <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
  </ul>
</div>
@endif
<!-- validation end code -->

<div class="row">
<div class="col-md-3" >
  <div class="card">
      <div class="card-body" style="background:#303a48;">
        <nav class="navbar navbar-light">

                <form class="form-inline">
                    <div class="input-group" >
                        <input type="text"  style="width:50;"  class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2" >
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary" type="button" id="button-addon2">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </nav>
      </div>
      <!-- <ul class="list-group list-group-flush"  >
        @foreach($users as $user)
        @endforeach
          <li class="list-group-item" style="background:#303a48;color:white;">
              <div class="h6 text-muted"  style="font-size:18px;font-style: italic;">Followers</div>
              <div class="h5">{{$user->count('id')}}</div>
          </li>
      </ul> -->
  </div>
</div>
<div class="col-md-6 gedf-main">

  <!--- \\\\\\\Post-->

<div class="card gedf-card" style="padding:40px;background:#323C4A;">
<div class="card-header">
  <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
      <li class="nav-item">
          <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Write A Post</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Upload A Image</a>
      </li>
  </ul>
</div>


<form class="form-horizontal" action="{{ route('store_post_school') }}" method="post" enctype="multipart/form-data">
@csrf
<div class="card-body" >
  <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
          <div class="form-group" style="padding-top:10px;" >
            <div class="form-group" style="width:680px;margin-left:5px;">
              <input type="text" class="form-control h2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title of post..." name="title" style="width: 70%;">
            </div>
              <label class="sr-only" for="message">Post</label>
              <textarea style="padding:40px;" class="form-control h2" id="message" rows="5" placeholder="Weite a post..." name="body"></textarea>
          </div>
      </div>
<!-- image -->
<div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">

  <div class="form-group">

  <div class="Neon Neon-theme-dragdropbox">
     <input style="z-index:100; opacity: 0; width:100px; height:100px; position: absolute; right: 0px; left: 0px; margin-right: auto; margin-left: auto;" d="customFile" name="image" value="{{Auth::user()->image}}" id="filer_input2" multiple="multiple" type="file">
     <div class="Neon-input-dragDrop"><div class="Neon-input-inner"><div class="Neon-input-icon"><i class="fa fa-file-image-o"></i></div><div class="Neon-input-text"><h3>Drag&amp;Drop files here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="Neon-input-choose-btn blue">Browse Files</a></div></div>
     </div>
   </div>

    <!-- <div class="form-group">
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile"  name="image">
            <label class="custom-file-label " for="customFile" style="padding:20px;margin-bottom:10px;">Upload image</label>
        </div>
    </div> -->
    <div class="py-4"></div>
</div>
<!-- <div class="form-group"style="padding:10px;">
    <input type="checkbox" id="publish" class="filled-in" name="status" value="1">
    <label for="publish" class="btn btn-primary" >Publish</label>
</div> -->
  </div>
  <div class="btn-toolbar justify-content-between">
      <div class="btn-group" style="margin-right:560px;">
          <button type="submit" class="btn btn-primary" style="padding:12px;font-size:15px;">Share Post</button>
      </div>
     <!--  <div class="btn-group">
          <button id="btnGroupDrop1" type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <i class="fa fa-globe"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
              <a class="dropdown-item" href="#"><i class="fa fa-globe"></i> Public</a>
              <a class="dropdown-item" href="#"><i class="fa fa-users"></i> Friends</a>
              <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Just me</a>
          </div>
      </div> -->
  </div>
</div>

</form>
</div>

  <!-- Post /////-->

  <!--- \\\\\\\Post-->
  @foreach($school_post as $post)
  @foreach($users as $user)
      @if($post->users_id==$user->id)

  <div class="card gedf-card">
      <div class="card-header">
          <div class="d-flex justify-content-between align-items-center">
              <div class="d-flex justify-content-between align-items-center">
                  <div class="mr-2">
                      <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                  </div>
                  <div class="ml-2">
                      <div class="h5 m-0">{{$user->name}}</div>
                      <div class="h5 text-muted icon_pin_alt">{{$user->area}}</div>

                  </div>
              </div>
              <div>
                  <div class="dropdown">
                      <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-h"></i>
                          <div class="text-muted h5 mb-2"> <i class="fa fa-clock-o"></i>{{$post->created_at}}</div>


                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                          <div class="h6 dropdown-header">Configuration</div>
                          <a class="dropdown-item" href="#">Save</a>
                          <a class="dropdown-item" href="#">Hide</a>
                          <a class="dropdown-item" href="#">Report</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="card-body">
        <a class="card-link" href="#" style="padding:10px;">
          <center>  <h5 class="card-title   h7"><strong><em>{{$post->title}}</em></strong></h5></center>
        </a>
          <div class="card bg-dark text-white">
            <img class="bd-placeholder-img bd-placeholder-img-lg card-img" src="{{$post->image}}" width="50%" height="300" aria-label="Placeholder: Card image" preserveAspectRatio="xMidYMid slice" role="img"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="80%" y="20%" fill="#dee2e6" dy=".3em">
          </div>

          <p class="card-text h2" style="margin-top:20px;">
              {{$post->body}}
          </p>
      </div>
      <div class="card-footer">
          <a href="#" class="card-link btn btn-primary"><i class="fa fa-gittip"></i> Like</a>
          <!-- <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-comment"></i>comment</a> -->
          <!-- <a href="#" class="card-link btn btn-primary"><i class="fa fa-mail-forward"></i> Share</a> -->
          <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
   comment
 </a>
      </div>
  </div>
  <!-- Post /////-->
  <div class="collapse" id='collapseExample'style="margin-left:40px;padding:10px;" >

    <!-- comment top box -->
@foreach($school_post as $post)
    @foreach($comment as $comments)
      @foreach($users as $user)
        @if($user->id==$comments->user_id)
         @if($post->id==$comments->post_id)
<div class="card card-body">
    <div class="card gedf-card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mr-2">
                        <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                    </div>
                    <div class="ml-2">
                        <div class="h5 m-0">{{$user->name}}</div>
                        <div class="h5 text-muted icon_pin_alt">{{$user->area}}</div>
                    </div>
                </div>
                <div>
                    <div class="dropdown">
                      <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-ellipsis-h"></i>
                          <div class="text-muted h5 mb-2"> <i class="fa fa-clock-o"></i>{{$post->created_at}}</div>


                      </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                            <div class="h6 dropdown-header">Configuration</div>
                            <a class="dropdown-item" href="#">Save</a>
                            <a class="dropdown-item" href="#">Hide</a>
                            <a class="dropdown-item" href="#">Report</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="text-muted h7 mb-2"> <i class="glyphicon glyphicon-envelope"></i></div>

                <a class="card-link" href="#">
                    <h5 class="card-title h3">{{$comments->comment}}</h5>
                </a>
        </div>
        <div class="card-footer">
            <a href="#" class="card-link btn btn-primary"><i class="fa fa-gittip"></i> Like</a>

        </div>
    </div>
    </div>



@endif
@endif
@endforeach
@endforeach



@endforeach
<!-- comment top box -->

<div class="col-md-12 card card-body">
<div class="widget-area no-padding blank">
<div class="status-upload">


<form  method="post" action="{{ route('comment_post',$post->id) }}" >

@csrf

     <textarea name="comment" placeholder="Write a comment..." ></textarea>
     <ul>
       <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Audio"><i class="fa fa-music"></i></a></li>
       <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Video"><i class="fa fa-video-camera"></i></a></li>
       <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Sound Record"><i class="fa fa-microphone"></i></a></li>
       <li><a title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Picture"><i class="fa fa-picture-o"></i></a></li>
     </ul>
     <button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Share</button>
</form>


</div><!-- Status Upload  -->
</div><!-- Widget Area -->
</div>

</div>

    @endif
@endforeach
<!-- /////////////////comment section -->

@endforeach
<!-- /////////////////comment section -->


</div>
<!-- <div class="col-md-3">
<div class="card gedf-card"style="background:#303a48;">
    <div class="card-body" style="color:white;">
        <u><h2 class="card-title">BestSchool Mission & Vision Statements</h2></u>

        <p class="card-text "><li style="font-size:18px;font-style: italic;">We foster our students’ love for learning, encourage them to try new and exciting things, and give them a solid foundation to build on.</li>
        <li style="font-size:18px;font-style: italic;">Our vision is to develop well rounded, confident and responsible individuals who aspire to achieve their full potential. We will do this by providing a welcoming, happy, safe, and supportive learning environment in which everyone is equal and all achievements are celebrated.</li>
        <li style="font-size:18px;font-style: italic;">Our goal is to support and nurture the children’s and our own natural desire to be life-long learners. We are committed to the families we serve, providing support and encouragement.</li></p>
        <a href="{{ url('/review') }}" class="card-link"style="font-weight: bold;"> PARENTS REVIEW </a>
        <a href="{{ url('/contact') }}" class="card-link" style="font-weight: bold;">CONTACT US</a>
    </div>
</div>

</div> -->
</div>
</div>




  </body>
</html>
@include('hader_footer.footer')
