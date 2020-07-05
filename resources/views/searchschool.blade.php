@include('hader_footer.hader')

<section id="services">
      <div class="container">
        <div class="section-header">
          <h2 style="text-align: center;">Best School Near "{{ $search_text}}"</h2>
        </div>
        <table class="table table-striped table-advance table-hover">
        <!-- left side school start -->
        <div class="row">
          <div class="col-md-12">
            @foreach($school_info as $school)

            <div class="box wow fadeInLeft"style="background:#2F4F4F;color:white;">
              <div class="icon"> <img style="display: block;" src="{{asset('file')}}/img/parenting-resources-a30cf0a42c8f63531933b1464394809b.png" alt="Parenting resources" />
              </div>

              <h4 class="title"><a style="color:white;" href="{{route('schooldetail', $school->school_id)}}">{{ $school->school_name}}</a></h4>
              <p class="description">{{ $school->s_address}}<br>Class: {{ $school->classRange}} <br>Rating: {{ $school->rating}}/5<br><br>
              <a style="padding: 5px; margin-left: 75px; text-align: center; border: solid; width: 30%;" class="" href="{{route('schooldetail', $school->school_id)}}">View Detail</a></p>
            </div>
              @endforeach
          </div>

        </div>
          </table>
      
      </div>
</section>
