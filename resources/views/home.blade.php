@extends('Layout.layout')

@section('title')
<title>Home</title>
@endsection

@section('cnt')
<main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://img01.rl0.ru/afisha/e1500x600i/daily.afisha.ru/uploads/images/6/a7/6a7c03354f4649458a1a39fd35d75bf7.jpg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"></img>

                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Buy an elephant.</h1>
                        <p>Everybody says, but you buy.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Do it.</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://tolkunov.com/uploads/portfolio/c6151cfafe84dd05f13b2bcca0d94bf4.jpg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"></img>

                <div class="container">
                    <div class="carousel-caption">
                        <h1>Product list.</h1>
                        <p>Choose and buy.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://img02.rl0.ru/afisha/e1500x600i/daily.afisha.ru/uploads/images/9/d2/9d2ebcdac0e549fa832fd30b9167b125.jpg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777" /></img>

                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>Top sales.</h1>
                        <p>Best of the best.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
        <h1 class="h1 text-center mb-5">Top Sales</h1>

        <!-- Three columns of text below the carousel -->
        <div class="row justify-content-center mb-5">
            @foreach($products as $product)
           <div class="card border p-0 m-3" style="width: 18rem;">
            <a href="/product/{{ $product->id }}">
                <div class="scale"><img src="{{ $product->image }}" class="card-img-top" alt="..." width="" height="">
                </div>
            </a>
            <div class="card-body">
                <h5 class="card-title text-end">{{ $product->price }} RUB.</h5>
                <p class="card-text text-center" style="white-space: nowrap; overflow: hidden;">{{ $product->name }}</p>
                <a href="/product/{{ $product->id }}"><button class="btn btn-primary w-100">More..</button></a>
            </div>
        </div>
            @endforeach
        </div><!-- /.row -->
    </div><!-- /.container -->
</main>
@endsection
