@include('hader_footer.hader')

<section id="services">
      <div class="container">
        <div class="section-header">
          <h2 style="text-align: center;">Best School Near "{{ $search_text}}"</h2>
        </div>

        <!-- left side school start -->
        <div class="row">
          <div class="col-md-12">
            <div class="box wow fadeInLeft"style="background:	#2F4F4F;color:white;height:300px;margin-left:50px;">

              <div class="icon"> 
                <img style="display: block;width:100px;margin-left:400px; height:100px;" src="{{asset('file')}}/img/warning.png" alt="Image" />
              </div>
              <br>
              <div>
                <h4 class="title"><a style="color:red;width:400px;height:400px; text-align: center;" >"{{ $search_text}}" Not Found!</a></h4>
              </div>
              <br>
            </div>
          </div>
        </div>
      </div>
</section>
<!-- #services -->
