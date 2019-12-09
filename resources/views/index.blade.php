@extends('layouts/design')
@section('content')
<div class="center">
@foreach($berita as $news)
<!-- Start Fullpage Hero -->
<figure class="ampstart-image-fullpage-hero m0 relative mb4">
  <amp-img width="404" height="720" alt="SehatQ sebagai asisten kesehatan keluarga Anda" layout="responsive" src="{{$news->img_url}}" media="(max-width: 415px)"></amp-img>
  <amp-img height="720" alt="SehatQ sebagai asisten kesehatan keluarga Anda" layout="fixed-height" src="{{$news->img_url}}" media="(min-width: 416px)"></amp-img>
  <figcaption class="absolute top-0 right-0 bottom-0 left-0">
    <header class="p3">
      <h1 class="ampstart-fullpage-hero-heading mb3">
        <span class="ampstart-fullpage-hero-heading-text">
          <h2>{{$news->judul}}</h2>
        </span>
      </h1>

        <span class="ampstart-image-credit h4">
          By <a href="#" role="author" class="text-decoration-none">
      <h5>{{$news->author}}</h5></a><br> Title Description, {{$news->updated_at}}
        </span>
  </header>
  <footer class="absolute left-0 right-0 bottom-0">
    <a class="ampstart-readmore py3 caps line-height-2 text-decoration-none center block h5" href="#content"><span class="ampstart-readmore-text px1"></span></a>
  </footer>
  </figcaption>
</figure>
<!-- End Fullpage Hero -->
</div>
<main id="content" role="main">
    <article class="photo-article">
        <h2 class="m3 center h4">TITLE HEADING</h2>
        <p class="m3 h3 bold">Subtitle Vivamus viverra augue libero, vitae dapibus lectus accumsan eget. Pellentesque eget ipsum purus. Maecenas leo odio, ornare nec ex id, suscipit porta ipsum. Ut fringilla semper cursus.</p>
            <p class="m3  ampstart-dropcap">{{$news->detail}}</p>
  <!-- Start Image with Caption -->
  <figure class="ampstart-image-with-caption m0 relative mb4">
    <amp-img src="{{$news->img_url}}" width="800" height="400" alt="SehatQ sebagai asisten kesehatan keluarga Anda" layout="responsive" class=""></amp-img>
    <figcaption class="h5 mt1 px3">
      Title Description,  {{$news->updated_at}}
        <span class="ampstart-image-credit block bold">
          By {{$news->author}}
        </span>
    </figcaption>
  </figure>
  <!-- End Image with Caption -->
</article></main>
@endforeach
@endsection
