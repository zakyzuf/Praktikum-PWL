@extends('layouts.app')
@section('title', 'Gallery')
@section('header-content')
<div class="templatemo-welcome">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
          <img src="{{ asset('assets/img/welcome-img.png') }}" class="img-responsive welcome-img" alt="Welcome">
        </div>
        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
          <h2 class="text-uppercase">
            <span class="welcome-title-1">Performance</span>
            <span class="welcome-title-2">Auto</span>
          </h2>
          <p class="welcome-message">Motor is free Bootstrap v3.3.4 responsive web template provided 
          by <span class="blue">template</span><span class="green">mo</span>.com website. You can download, 
          modify and use this for your website projects.</p>
          <a href="#" class="welcome-read-more">Read More</a>
        </div>
      </div>    
    </div>
  </div>
</section>
<section class="container margin-bottom-50">
 <div class="row">
  <h2 class="col-lg-12 text-center text-uppercase margin-bottom-30">Donec pede justo fringilla ulputate eget</h2>
  <p class="col-lg-12 text-center margin-bottom-30">Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
  <img src="{{ asset('assets/img/gallery-header.jpg') }}" alt="Image description" class="img-responsive col-lg-12">        
</div>
</section>
@endsection

@section('content')
<div class="row">
    <div class="tm-gallery col-lg-12">
      <div class="tm-item-container">
        <img src="{{ asset('assets/img/gallery/0.jpg') }}" alt="Image">
        <div class="tm-item-price-container tm-gallery-item-info">
          <span class="tm-item-price">A Class</span>
          <a href="#" class="tm-item-link">
            <span class="tm-item-action">View More</span>
            <img src="{{ asset('assets/img/plus.png') }}" class="tm-item-add-icon" alt="Image">
          </a>
        </div>
      </div>
      <div class="tm-item-container">
        <img src="{{ asset('assets/img/gallery/1.jpg') }}" alt="Image">
        <div class="tm-item-price-container tm-gallery-item-info">
          <span class="tm-item-price">B Class</span>
          <a href="#" class="tm-item-link">
            <span class="tm-item-action">View More</span>
            <img src="{{ asset('assets/img/plus.png') }}" class="tm-item-add-icon" alt="Image">
          </a>
        </div>
      </div>
      <div class="tm-item-container">
        <img src="{{ asset('assets/img/gallery/0.jpg') }}" alt="Image">
        <div class="tm-item-price-container tm-gallery-item-info">
          <span class="tm-item-price">C Class</span>
          <a href="#" class="tm-item-link">
            <span class="tm-item-action">View More</span>
            <img src="{{ asset('assets/img/plus.png') }}" class="tm-item-add-icon" alt="Image">
          </a>
        </div>
      </div>
      <div class="tm-item-container">
        <img src="{{ asset('assets/img/gallery/1.jpg') }}" alt="Image">
        <div class="tm-item-price-container tm-gallery-item-info">
          <span class="tm-item-price">E Class</span>
          <a href="#" class="tm-item-link">
            <span class="tm-item-action">View More</span>
            <img src="{{ asset('assets/img/plus.png') }}" class="tm-item-add-icon" alt="Image">
          </a>
        </div>
      </div>
      <div class="tm-item-container">
        <img src="{{ asset('assets/img/gallery/1.jpg') }}" alt="Image">
        <div class="tm-item-price-container tm-gallery-item-info">
          <span class="tm-item-price">S Class</span>
          <a href="#" class="tm-item-link">
            <span class="tm-item-action">View More</span>
            <img src="{{ asset('assets/img/plus.png') }}" class="tm-item-add-icon" alt="Image">
          </a>
        </div>
      </div>
      <div class="tm-item-container">
        <img src="{{ asset('assets/img/gallery/0.jpg') }}" alt="Image">
        <div class="tm-item-price-container tm-gallery-item-info">
          <span class="tm-item-price">G Class</span>
          <a href="#" class="tm-item-link">
            <span class="tm-item-action">View More</span>
            <img src="{{ asset('assets/img/plus.png') }}" class="tm-item-add-icon" alt="Image">
          </a>
        </div>
      </div>
      <div class="tm-item-container">
        <img src="{{ asset('assets/img/gallery/1.jpg') }}" alt="Image">
        <div class="tm-item-price-container tm-gallery-item-info">
          <span class="tm-item-price">Benz</span>
          <a href="#" class="tm-item-link">
            <span class="tm-item-action">View More</span>
            <img src="{{ asset('assets/img/plus.png') }}" class="tm-item-add-icon" alt="Image">
          </a>
        </div>
      </div>
      <div class="tm-item-container">
        <img src="{{ asset('assets/img/gallery/0.jpg') }}" alt="Image">
        <div class="tm-item-price-container tm-gallery-item-info">
          <span class="tm-item-price">Benz</span>
          <a href="#" class="tm-item-link">
            <span class="tm-item-action">View More</span>
            <img src="{{ asset('assets/img/plus.png') }}" class="tm-item-add-icon" alt="Image">
          </a>
        </div>
      </div>
      <div class="tm-item-container">
        <img src="{{ asset('assets/img/gallery/0.jpg') }}" alt="Image">
        <div class="tm-item-price-container tm-gallery-item-info">
          <span class="tm-item-price">Benz</span>
          <a href="#" class="tm-item-link">
            <span class="tm-item-action">View More</span>
            <img src="{{ asset('assets/img/plus.png') }}" class="tm-item-add-icon" alt="Image">
          </a>
        </div>
      </div>
      <div class="tm-item-container">
        <img src="{{ asset('assets/img/gallery/1.jpg') }}" alt="Image">
        <div class="tm-item-price-container tm-gallery-item-info">
          <span class="tm-item-price">Benz</span>
          <a href="#" class="tm-item-link">
            <span class="tm-item-action">View More</span>
            <img src="{{ asset('assets/img/plus.png') }}" class="tm-item-add-icon" alt="Image">
          </a>
        </div>
      </div>
      <div class="tm-item-container">
        <img src="{{ asset('assets/img/gallery/0.jpg') }}" alt="Image">
        <div class="tm-item-price-container tm-gallery-item-info">
          <span class="tm-item-price">Benz</span>
          <a href="#" class="tm-item-link">
            <span class="tm-item-action">View More</span>
            <img src="{{ asset('assets/img/plus.png') }}" class="tm-item-add-icon" alt="Image">
          </a>
        </div>
      </div>                    
      <div class="tm-item-container">
        <img src="{{ asset('assets/img/gallery/1.jpg') }}" alt="Image">
        <div class="tm-item-price-container tm-gallery-item-info">
          <span class="tm-item-price">Benz</span>
          <a href="#" class="tm-item-link">
            <span class="tm-item-action">View More</span>
            <img src="{{ asset('assets/img/plus.png') }}" class="tm-item-add-icon" alt="Image">
          </a>
        </div>
      </div>
    </div>        
  </div>
@endsection
