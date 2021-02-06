@section('content')
<!--=================================
Browse listing -->
<section class="space-ptb bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title center">
          <h2 class="title">Candidates</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 order-lg-2 mb-3 mb-lg-0">
        <div class="row mt-4">
            @foreach($candidates as $candidate)
              <div class="col-lg-3 col-sm-4 display-grid">
                <div class="job-list job-grid cursor-pointer">
                  <div class="job-list-logo ">
                    <img class="img-fluid" src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?size=338&ext=jpg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h6><a href="job-detail.html">{{ $candidate->first_name }}</a></h6>
                      </div>
                      <div class="job-list-option">
                        @if( $candidate->address == null )
                          <p class="mb-1"><i class="fas fa-map-marker-alt pr-1"></i>N/A</p>
                        @else
                          <p class="mb-1"><i class="fas fa-map-marker-alt pr-1"></i>{{ $candidate->address }}</p>
                        @endif
                        @if( $candidate->nationality == null )
                          <p class="mb-1"><i class="fas fa-filter pr-1"></i>N/A</p>
                        @else
                          <p class="mb-1"><i class="fas fa-filter pr-1"></i>{{ $candidate->nationality }}</p>
                        @endif
                        <p class="mb-1 temporary"> <i class="fas fa-suitcase pr-1"></i>Temporary</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
        </div>
        {{ $candidates->links() }}
      </div>
    </div>
  </div>
</section>
<!--=================================
Browse listing -->

@endsection