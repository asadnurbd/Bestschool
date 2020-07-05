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
              <li><i class="fa fa-laptop"></i>Update New School</li>
            </ol>
          </div>
        </div>


        <div class="row">

          <div class="col-md-6 portlets" style="width: 100%;">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left">Update New School</div>


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



    @foreach($id as $school)

    @endforeach


                    <form class="form-horizontal" name="edit_form"action="{{route('admin.school_update',$school->school_id) }}"  method="post"  enctype="multipart/form-data">
                      @csrf
                      <!-- name -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">School Name:</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" value="{{$school->school_name}}"  name="school_name">
                        </div>
                      </div>
                       <!-- email -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Email:</label>
                        <div class="col-lg-10">
                          <input type="email" class="form-control"  value="{{$school->email}}" name="email">
                        </div>
                      </div>

                      <!-- website  -->
                         <div class="form-group">
                           <label class="control-label col-lg-2" for="title">Website:</label>
                           <div class="col-lg-10">
                             <input type="text" class="form-control" value="{{$school->website}}" name="website">
                           </div>
                         </div>


                        <!-- type  -->

                        <div class="form-group">
                          <label class="control-label col-lg-2">Type:</label>
                          <div class="col-lg-10">
                            <select class="form-control" name="type">
                                                    <option value="">-current status-</option>
                                                    <option value="Privet">Privet</option>
                                                    <option value="Public">Public</option>
                                                  </select>
                          </div>
                        </div>
                   <!-- phone  -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Phone:</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" value="{{$school->phone}}" name="phone">
                        </div>
                      </div>
      '                <!--  Amount-->'
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">Amount:</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" value="{{$school->cost}}" name="cost">
                        </div>
                      </div>

                      <!-- Total student-->'
                         <div class="form-group">
                           <label class="control-label col-lg-2" for="title">Total student:</label>
                           <div class="col-lg-10">
                             <input type="text" class="form-control" value="{{$school->totalStudent}}" name="totalStudent">
                           </div>
                         </div>

                      <!-- Content -->
                      <!-- <div class="form-group">
                        <label class="control-label col-lg-2" for="content">Amount:</label>
                        <div class="col-lg-10">
                          <textarea class="form-control" id="content"></textarea>
                        </div>
                      </div> -->
                      <!-- address -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="title">School address:</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" value="{{$school->s_address}}" name="s_address">
                        </div>
                      </div>
                      <!-- School_address-->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Area:</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="area">
                                                  <option value="">-Address status-</option>

                                                  <option value="Dhanmondi">Dhanmondi</option>
                                                  <option value="Mirpur">Mirpur</option>
                                                  <option value="Mohakhali">Mohakhali</option>
                                                  <option value="Badda">Badda</option>


                                                </select>
                        </div>
                      </div>

                      <!-- class range-->
                      <div class="form-group">
                        <label class="control-label col-lg-2">classRange</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="classRange">
                                              <option value="">-select classRange-</option>
                                              <option value="I-X">I-X</option>

                                                </select>
                        </div>
                      </div>


                         <!-- Rating-->
                      <div class="form-group">
                        <label class="control-label col-lg-2">Rating</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="rating">

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
                          <select class="form-control"  name="available">


                                                  <option value="1">Active</option>
                                                  <option value="0">deactivate</option>
                                                </select>
                        </div>
                      </div>

                   <!-- image Upload -->
                   <div class="form-group">
                     <label class="control-label col-lg-2">Image upload</label>
                     <div class="col-lg-10">
                       <div class="custom-file">
                            <input type="file" class="custom-file-input btn btn-primary" name="image" value="{{$school->image}}" >
                             <img src="{{asset($school->image)}}" style="height:40px ;width:80px;">

                          </div>
                     </div>
                   </div>
                   <!-- image Upload2 -->
                   <div class="form-group">
                     <label class="control-label col-lg-2">Academic Image upload</label>
                     <div class="col-lg-10">
                       <div class="custom-file">
                            <input type="file" class="custom-file-input btn btn-primary" value="{{$school->feeStructureImg}}" required name="feeStructureImg">

                          </div>
                     </div>
                   </div>


                      <!-- longitude -->


                      <div class="form-group">
                        <label class="control-label col-lg-2" for="tags">Longitude</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" value="{{$school->longi}}" name="longi">
                        </div>
                      </div>
                      <!--  latitude -->


                      <div class="form-group">
                        <label class="control-label col-lg-2" for="tags"> Latitude</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control"value="{{$school->lati}}" name="lati">
                        </div>
                      </div>

                      <!-- Buttons -->

                      <input type="hidden" name="school_id" value="{{$school->school_id}}">
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary">Update</button>
                          <!-- <button type="submit" class="btn btn-danger">Save Draft</button>
                          <button type="reset" class="btn btn-default">Reset</button> -->
                        </div>
                      </div>
                    </form>


                  </div>

                  <script type="text/javascript">
                    document.forms['edit_form'].elements['available'].value='{{$school->available}}'
                    document.forms['edit_form'].elements['type'].value='{{$school->type}}'
                    document.forms['edit_form'].elements['classRange'].value='{{$school->classRange}}'
                    document.forms['edit_form'].elements['rating'].value='{{$school->rating}}'
                    document.forms['edit_form'].elements['area'].value='{{$school->area}}';

                  </script>


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
