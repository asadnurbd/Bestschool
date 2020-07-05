@include('admin.hader');

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
              <li><i class="fa fa-laptop"></i>Add New School</li>
            </ol>
          </div>
        </div>


        <div class="row">

          <div class="col-md-6 portlets" style="width: 100%;">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Add New School</div>


              </div>
              <div class="panel-body">

                <!-- validation code -->
                @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                 @endif
                   <!-- validation end code -->
                <div class="padd">



                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->



                    <form class="form-horizontal" action="{{ route('store_school_info') }}" method="post" enctype="multipart/form-data">
                      @csrf
                      <!-- name -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">School Name:</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control"  name="school_name">
                        </div>
                      </div>
                       <!-- email -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Email:</label>
                        <div class="col-lg-10">
                          <input type="email" class="form-control"  name="email">
                        </div>
                      </div>
                   <!-- phone  -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Phone:</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control"  name="phone">
                        </div>
                      </div>

                      <!-- website  -->
                         <div class="form-group">
                           <label class="control-label col-lg-2" for="title">Website:</label>
                           <div class="col-lg-10">
                             <input type="text" class="form-control"  name="website">
                           </div>
                         </div>


                       <!-- type  -->

                       <div class="form-group">
                         <label class="control-label col-lg-2">Type:</label>
                         <div class="col-lg-10">
                           <select class="form-control" name="type">
                                                   <option value="">Select Type</option>
                                                   <option value="Privet">Private</option>
                                                   <option value="Public">Public</option>
                                                 </select>
                         </div>
                       </div>


                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Amount:</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="cost">
                        </div>
                      </div>

                      <!-- Total student-->
                         <div class="form-group">
                           <label class="control-label col-lg-2" for="title">Total student:</label>
                           <div class="col-lg-10">
                             <input type="text" class="form-control" name="totalStudent">
                           </div>
                         </div>

                         <!-- address -->
                         <div class="form-group">
                           <label class="control-label col-lg-2" for="title">School address:</label>
                           <div class="col-lg-10">
                             <input type="text" class="form-control" name="s_address">
                           </div>
                         </div>

                      <!-- Content -->
                      <!-- <div class="form-group">
                        <label class="control-label col-lg-2" for="content">Amount:</label>
                        <div class="col-lg-10">
                          <textarea class="form-control" id="content"></textarea>
                        </div>
                      </div> -->
                      <!-- School_address-->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Area:</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="area">
                                                  <option value="">Select Area </option>
                                                  <option value="Adabor">Adabor</option>
                                                  <option value="Badda">Badda</option>
                                                  <option value="Banani">Banani</option>
                                                  <option value="Bangshal">Bangshal</option>
                                                  <option value="Baridhara">Baridhara</option>
                                                  <option value="Basabo">Basabo</option>
                                                  <option value="Basundhara">Basundhara</option>
                                                  <option value="Cantonment">Cantonment</option>
                                                  <option value="Chaukbazar">Chaukbazar</option>
                                                  <option value="Darus Salam">Darus Salam</option>
                                                  <option value="Dhanmondi">Dhanmondi</option>
                                                  <option value="Farmgate">Farmgate</option>
                                                  <option value="Gulshan">Gulshan</option>
                                                  <option value="Hazaribagh">Hazaribagh</option>
                                                  <option value="Jatrabari">Jatrabari</option>
                                                  <option value="Kafrul">Kafrul</option>
                                                  <option value="Kamrangirchar">Kamrangirchar</option>
                                                  <option value="Kalabagan">Kalabagan</option>
                                                  <option value="Khilgaon">Khilgaon</option>
                                                  <option value="Khilkhet">Khilkhet</option>
                                                  <option value="Lalbag">Lalbag</option>
                                                  <option value="Malibag">Malibag</option>
                                                  <option value="Mogbazar">Mogbazar</option>
                                                  <option value="Mohakhali">Mohakhali</option>
                                                  <option value="Mirpur">Mirpur</option>
                                                  <option value="Motijheel">Motijheel</option>
                                                  <option value="Nawabganj">Nawabganj</option>
                                                  <option value="New Market">New Market</option>
                                                  <option value="Paltan">Paltan</option>
                                                  <option value="Purbachal">Purbachal</option>
                                                  <option value="Ramna">Ramna</option>
                                                  <option value="Rampura">Rampura</option>
                                                  <option value="Tejgaon">Tejgaon</option>
                                                  <option value="Uttara">Uttara</option>
                                                  <option value="Wari">Wari</option>
                            </select>
                        </div>
                      </div>
                      <!-- class range-->
                      <div class="form-group">
                        <label class="control-label col-lg-2">classRange:</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="classRange">
                                                  <option value="">Select Class Range</option>
                                                  <option value="I-X">I-X</option>



                                                </select>
                        </div>
                      </div>




                         <!-- Rating-->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Rating</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="rating">
                                                  <option value="">Rating</option>

                                                  <option value="1">*</option>
                                                  <option value="2">**</option>
                                                  <option value="3">***</option>
                                                  <option value="4">****</option>
                                                  <option value="5">*****</option>

                                                </select>
                        </div>
                      </div>




                      <!-- Rating-->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Available</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="available">
                                                  <option value="">Current Status</option>

                                                  <option value="1">Avaliable</option>
                                                  <option value="0">Not Avaliable</option>
                                                </select>
                        </div>
                      </div>
                   <!-- image Upload -->
                   <div class="form-group">
                     <label class="control-label col-lg-2">School Image</label>
                     <div class="col-lg-10">
                       <div class="custom-file">
                            <input type="file" class="custom-file-input btn btn-primary"  required name="image">

                          </div>
                     </div>
                   </div>

                   <!-- image Upload2 -->
                   <div class="form-group">
                     <label class="control-label col-lg-2">Fee Image</label>
                     <div class="col-lg-10">
                       <div class="custom-file">
                            <input type="file" class="custom-file-input btn btn-primary"  required name="feeStructureImg">

                          </div>
                     </div>
                   </div>


                      <!-- longitude -->


                      <div class="form-group">
                        <label class="control-label col-lg-2" for="tags">Longitude</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="longi">
                        </div>
                      </div>
                      <!--  latitude -->


                      <div class="form-group">
                        <label class="control-label col-lg-2" for="tags"> Latitude</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" name="lati">
                        </div>
                      </div>

                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary">Publish</button>
                          <!-- <button type="submit" class="btn btn-danger">Save Draft</button>
                          <button type="reset" class="btn btn-default">Reset</button> -->
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

   <!-- messege show -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <!-- Custom scripts for this template -->
   <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
  <script src="{{ asset('public/frontend/js/clean-blog.min.js') }}"></script>
    <script>
        @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
     </script>



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
