@include('admin.hader')

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{ url('/admin') }}">Home</a></li>
              <li><i class="fa fa-user-md"></i>Profile</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <!-- profile-widget -->
          <div class="col-lg-12">
            <div class="profile-widget profile-widget-info">
              <div class="panel-body">
                <div class="col-lg-2 col-sm-2">
                  <h4>Ariful Islam</h4>
                  <div class="follow-ava">
                    <img src="{{ asset('rev') }}/admin/img/profile-widget-avatar.jpg" alt="">
                  </div>
                  <h6>Administrator</h6>
                </div>
                <div class="col-lg-4 col-sm-4 follow-info">
                  <p>This is admin functionality!</p>
                  <p>@bestschool</p>
                  <p><i class="fa fa-twitter">bestschool</i></p>
                  <h6>
                                    <span><i class="icon_clock_alt"></i>11:05 AM</span>
                                    <span><i class="icon_calendar"></i>25.10.13</span>
                                    <span><i class="icon_pin_alt"></i>Dhaka</span>
                                </h6>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading tab-bg-info">

                <ul class="nav nav-tabs">
                  <li class="active">
                    <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                          Profile
                                      </a>
                  </li>
                  <li class="">
                    <a data-toggle="tab" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                          Edit Profile
                                      </a>
                  </li>
                </ul>
              </header>

              <div class="panel-body">
                <div class="tab-content">

                  <!-- profile -->
                  <div id="profile" class="tab-pane active">
                    <section class="panel">
                     
                      <div class="panel-body bio-graph-info">
                       
                        <div class="row">
                          <div class="bio-row">
                            <p><span> Name </span>:  {{ Auth::user()->name }} </p>
                          </div>
                          
                          <div class="bio-row">
                            <p><span>Birthday</span>: {{ Auth::user()->dob }}</p>
                          </div>
                          
                          <div class="bio-row">
                            <p><span>Email </span>: {{ Auth::user()->email }}</p>
                          </div>
                          <div class="bio-row">
                            <p><span>Mobile </span>: {{ Auth::user()->mobile }}</p>
                          </div>
                        </div>
                      </div>
                    </section>
                    <section>
                      <div class="row">
                      </div>
                    </section>
                  </div>
                  <!-- edit-profile -->
                  <div id="edit-profile" class="tab-pane">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <h1> Profile Info</h1>
                        <form class="form-horizontal" role="form">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Name</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="f-name" placeholder="New Name">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="email" placeholder="New Email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Password</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" id="password" placeholder="New Password">
                            </div>
                          </div>

                          <div class="form-group" >
                            <div class="col-lg-offset-2 col-lg-10" style="padding-top: 10px;">
                              <button type="submit" class="btn btn-primary" style="margin-left: 12px; padding-right: 20px; padding-left: 20px;">Save</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="{{ asset('rev') }}/admin/js/jquery.js"></script>
  <script src="{{ asset('rev') }}/admin/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="{{ asset('rev') }}/admin/js/jquery.scrollTo.min.js"></script>
  <script src="{{ asset('rev') }}/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery knob -->
  <script src="{{ asset('rev') }}/admin/assets/jquery-knob/js/jquery.knob.js"></script>
  <!--custome script for all page-->
  <script src="{{ asset('rev') }}/admin/js/scripts.js"></script>

  <script>
    //knob
    $(".knob").knob();
  </script>


</body>

</html>
