@extends('front_office.layouts.app')
@section('content')
<div class="header-inner bg-light text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-primary">{{ __('menu.Privacy Policy') }}</h2>
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/">{{ __('menu.Home') }}</a></li>
          <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span>{{ __('menu.Privacy Policy') }}</span></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--=================================
inner banner -->
 
<!--=================================
Terms and conditions -->
<section class="space-ptb">  
  <div class="container">
    <div class="row">
      <div class="col-12">
        @foreach($data as $dataa)
          {!! html_entity_decode($dataa['content']) !!}
        @endforeach
      </div>
    </div>
  </div>
</section>
<!--=================================
Terms and conditions -->
@endsection