@extends('layouts.app')
@section('content')
<section class="about-section">
    <div class="section-about-title">
    @section('title', $viewData['title'])
    @section('subtitle', $viewData['subtitle'])
    </div>
 <div class="container">
 <div class="row">
 <div class="col-lg-4 ms-auto">
 <p class="lead">{{ $viewData['description'] }}</p>
 </div>
 <div class="col-lg-4 me-auto">
 <p class="lead">{{ $viewData['author'] }}</p>
 </div>
 </div>
 </div>
</section>
 @endsection
