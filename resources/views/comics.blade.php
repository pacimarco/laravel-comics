@extends ('layout.app')

@section('page-title','prodotti comics!')

@section('content')
<h1>prodotti comics</h1>
<section class="section-1">
          
          <div class="jambo">

          </div>
          <div class="container comics-list">
              @foreach ($posters as $singlePoster)
              <div class="comics-card">
                  <img src="{{$singlePoster['thumb']}}" alt="{{$singlePoster['title']}}">
              <h3 class="title-comics">{{ $singlePoster['series'] }}</h3>
              </div>
              <a href="#" class="load-more">LOAD MORE</a>
          </div>
      </section>

      <!--<section class="section-2">
          <div class="main-menu" >
              <img src="menu.src" alt="menu">
              

          </div>

      </section> -->
@endsection  