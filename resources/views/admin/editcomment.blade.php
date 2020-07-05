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
              <li><i class="fa fa-university"></i>Comments Section</li>
              <li><i class="fa fa-laptop"></i>Edit | Remove  Review:</li>
            </ol>
          </div>
        </div>


        <div class="panel-body">
          <header>
            <form class="example" action="{{route('admin.post_search')}}" style="margin:auto;max-width:300px "method="get">

              <input type="text" placeholder="Search.." name="search">
              <button type="submit" value="search"><i class="fa fa-search"></i></button>
            </form>
          </header>
          </div>

          <br>

          <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Review Table
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i> id</th>
                    <th><i class="icon alt"></i>comment </th>

                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>

                  @foreach($editcomment as $comment_show)
                  <tr>
                    <td>{{$comment_show->comment_id}}</td>
                    <td>{{Str::limit($comment_show->comment,'100')}} </td>


                    <td>
                      <div class="btn-group" style="margin-ri:20px;">
                        <a class="btn btn-primary" href="{{ route('admin.comment_edit',$comment_show->comment_id) }}">Edit</a>


                        <a class="btn btn-danger" data-toggle="modal" href="#myModal2">Delete</a>
                          <!-- modal -->
                          <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Really want to delete?</h4>
                              </div>
                              <div class="modal-body">

                                Confirm Delete...

                              </div>
                              <div class="modal-footer">
                                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                              <a class="btn btn-danger" class="btn btn-danger" type="button" href="{{ route('admin.comment_delete',$comment_show->comment_id) }}"> Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      <!-- modal -->
                      </div></td>
                  </tr>

                  @endforeach




                </tbody>


              </table>
               <center>  {{ $editcomment->links() }}</center>

            </section>
          </div>
        </div>
        <!-- page end-->





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

    // <!-- messege show -->
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
