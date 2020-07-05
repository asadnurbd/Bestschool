@include('admin.hader')



    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{ url('/admin') }}">Admin</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

         <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-university"></i>
              <div class="count">{{$totalSchool}}</div>
              <div class="title">Total School!</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-users"></i>
              <div class="count">{{$totalUser}}</div>
              <div class="title">Total User!</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-comments"></i>
              <div class="count">{{$totalComment}}</div>
              <div class="title">Total Comments!</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-external-link"></i>
              <div class="count">{{$totalAdmin}}</div>
              <div class="title">Total Admin!</div>
            </div>
            <!--/.info-box-->
          </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->











        <div class="row">

          <div class="col-md-6 portlets">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Quick Post</div>


              </div>
              <div class="panel-body">
                <div class="padd">

                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
                    <form class="form-horizontal">
                      <!-- Title -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Title</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="title">
                        </div>
                      </div>
                      <!-- Content -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="content">Content</label>
                        <div class="col-lg-10">
                          <textarea class="form-control" id="content"></textarea>
                        </div>
                      </div>
                      <!-- Cateogry -->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Category</label>
                        <div class="col-lg-10">
                          <select class="form-control">
                                                  <option value="">- Choose Cateogry -</option>
                                                  <option value="1">General</option>
                                                  <option value="2">News</option>
                                                  <option value="3">Media</option>
                                                  <option value="4">Funny</option>
                                                </select>
                        </div>
                      </div>
                      <!-- Tags -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="tags">Tags</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="tags">
                        </div>
                      </div>

                      <!-- image Upload -->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Image upload</label>
                        <div class="col-lg-10">
                          <div class="custom-file">
                               <input type="file" class="custom-file-input btn btn-primary" name="image" >
                                <img src="" style="height:40px ;width:80px;">

                             </div>
                        </div>
                      </div>

                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary">Publish</button>
                          <button type="submit" class="btn btn-danger">Save Draft</button>
                          <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                      </div>
                    </form>
                  </div>


                </div>
                <div class="widget-foot">
                  <!-- Footer goes here -->
                </div>
              </div>
            </div>

          </div>



          <div class="col-md-6">
            <!-- List starts -->
            <ul class="today-datas">
              <!-- List #1 -->
              <li>
                <!-- Graph -->
                <div><span id="todayspark1" class="spark"></span></div>
                <!-- Text -->
                <div class="datas-text">0 visitors/day</div>
              </li>
              <li>
                <div><span id="todayspark2" class="spark"></span></div>
                <div class="datas-text">0 Pageviews</div>
              </li>
              <li>
                <div><span id="todayspark3" class="spark"></span></div>
                <div class="datas-text">0 Bounce Rate</div>
              </li>
              <li>
                <div><span id="todayspark4" class="spark"></span></div>
                <div class="datas-text">0 Revenue/Day</div>
              </li>
              <li>
                <div><span id="todayspark5" class="spark"></span></div>
                <div class="datas-text">0 visitors every Month</div>
              </li>
            </ul>
          </div>


        </div>

      </section>

    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="{{ asset('rev') }}/admin/js/jquery.js"></script>
  <script src="{{ asset('rev') }}/admin/js/jquery-ui-1.10.4.min.js"></script>
  <script src="{{ asset('rev') }}/admin/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="{{ asset('rev') }}/admin/js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="{{ asset('rev') }}/admin/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="{{ asset('rev') }}/admin/js/jquery.scrollTo.min.js"></script>
  <script src="{{ asset('rev') }}/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="{{ asset('rev') }}/admin/assets/jquery-knob/{{ asset('rev') }}/admin/js/jquery.knob.js"></script>
  <script src="{{ asset('rev') }}/admin/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="{{ asset('rev') }}/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="{{ asset('rev') }}/admin/js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="{{ asset('rev') }}/admin/js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="{{ asset('rev') }}/admin/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="{{ asset('rev') }}/admin/js/calendar-custom.js"></script>
    <script src="{{ asset('rev') }}/admin/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="{{ asset('rev') }}/admin/js/jquery.customSelect.min.js"></script>
    <script src="{{ asset('rev') }}/admin/assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="{{ asset('rev') }}/admin/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="{{ asset('rev') }}/admin/js/sparkline-chart.js"></script>
    <script src="{{ asset('rev') }}/admin/js/easy-pie-chart.js"></script>
    <script src="{{ asset('rev') }}/admin/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="{{ asset('rev') }}/admin/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{ asset('rev') }}/admin/js/xcharts.min.js"></script>
    <script src="{{ asset('rev') }}/admin/js/jquery.autosize.min.js"></script>
    <script src="{{ asset('rev') }}/admin/js/jquery.placeholder.min.js"></script>
    <script src="{{ asset('rev') }}/admin/js/gdp-data.js"></script>
    <script src="{{ asset('rev') }}/admin/js/morris.min.js"></script>
    <script src="{{ asset('rev') }}/admin/js/sparklines.js"></script>
    <script src="{{ asset('rev') }}/admin/js/charts.js"></script>
    <script src="{{ asset('rev') }}/admin/js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
