@extends('main') @section('content')

<div class="row">
  <div class="col-md-12">
    <div class="page-title title-center">
      <h2>Home</h2>
    </div>
  </div>
</div>

<div class="col-md-4 col-md-push-8 col-sm-4 col-sm-push-8 col-xs-12">
  <div class="row">
    <div class="col-md-12">
      <div class="post-container">
        <div class="post-content">
          <div class="widget-title">
            <h3>Logo</h3>
          </div>
          <img src="img/partners01.png">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-md-8 col-md-pull-4 col-sm-8 col-sm-pull-4 col-xs-12">
  <div class="post-container">
    <div class="post-content">
      <!-- begin:article -->
      <div class="row">
        <div class="col-md-12">
          <div class="blog-title">
            <div class="meta-date">
              <span class="meta-date-day">04</span>
              <span class="meta-date-month">Nov</span>
              <span class="meta-date-year">2014</span>
            </div>
            <h2>{{ $match->match_name }}</h2>
            <p>{{ $match->match_description }}</p>
            <div class="col-md-2">
            <a href="{{ route('gallery') }}" class="btn btn-lg btn-primary btn-h1-spacing">Create New matches</a>
          </div>
          </div>



        </div>
      </div>
      <!-- end:article -->

    </div>
  </div>
</div>

@endsection