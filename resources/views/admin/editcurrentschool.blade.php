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
              <li><i class="fa fa-university"></i>School Section</li>
              <li><i class="fa fa-laptop"></i>Edit School</li>
            </ol>
          </div>
        </div>




        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                School Table
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i> School Name</th>
                    <th><i class="icon_mail_alt"></i> Email</th>
                    <th><i class="icon_pin_alt"></i> Address</th>
                    <th><i class="icon_mobile"></i> Mobile</th>
                  </tr>
                  <tr>
                    <td>Angeline Mcclain</td>
                    <td>dale@chief.info</td>
                    <td>Rosser</td>
                    <td>176-026-5992</td>

                  </tr>
                </tbody>
              </table>
            </section>
          </div>
        </div>

        
        <div class="row">

          <div class="col-md-6 portlets" style="width: 100%;">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Update School Information</div>
                
                
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
