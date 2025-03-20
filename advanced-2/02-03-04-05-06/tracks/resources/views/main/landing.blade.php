@extends('layouts.app')

@section('title', 'Landing Page')

@section('content')
<div
class="min-h-screen hero"
style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);">
<div class="hero-overlay bg-opacity-60"></div>
<div class="text-center hero-content text-neutral-content">
  <div class="max-w-md">
    <h1 class="mb-5 text-5xl font-bold">Hello there!</h1>
    <p class="mb-5">
      Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
      quasi. In deleniti eaque aut repudiandae et a id nisi.
    </p>
    <button class="btn btn-primary">Get Started</button>
  </div>
</div>
</div>
@endsection