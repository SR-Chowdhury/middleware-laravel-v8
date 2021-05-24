@extends('template')

@section('content')

<div class="row py-3">
    <div class="col-lg-9 offset-lg-3">
        <a href="{{ route('main_page') }}" class="btn btn-lg mx-2 btn-outline-info">Home</a>
        <a href="{{ route('about_page') }}" class="btn btn-lg mx-2 btn-outline-info">About</a>
        <a href="{{ route('category_page') }}" class="btn btn-lg mx-2 btn-outline-info">Category</a>
        <a href="{{ route('blog_page') }}" class="btn btn-lg mx-2 btn-outline-info">Blog</a>
        <a href="{{ route('contact_page') }}" class="btn btn-lg mx-2 btn-primary">Contact</a>
    </div>
</div>

<div class="row">
    <div class="jumbotron">
        <h1 class="display-4 mt-3">Contact | Explore SuperStar World</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
            featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>
    </div>
</div>

@endsection
