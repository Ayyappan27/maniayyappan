@extends('front_office.layouts.app')
@section('content')
<section class="space-ptb">
  <div class="container">
    <div class="section-title center">
      <h2 class="title">Choose Your Sector</h2>
      <p class="mb-0">What made each of these people so successful? Motivation.</p>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="category-style text-center">
          @foreach($sectors as $sector)
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <img src="{{ $sector->url }}" class="sector-img">
            </div>
            <h6>{{ $sector->sector_name }}</h6>
            <span class="mb-0">{{ $sector->position }} Open Position </span>
          </a>
          @endforeach
        </div>
        {{ $sectors->links() }}
      </div>
    </div>
  </div>
</section>
@endsection