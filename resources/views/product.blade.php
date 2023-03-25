@extends('layouts.app')
@section('title', 'Product')
@section('header-content')
<div class="templatemo-welcome">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
          <img src="{{ asset('assets/img/welcome-img.png') }}" class="img-responsive welcome-img" alt="Welcome">
        </div>
        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
          <h2 class="text-uppercase">
            <span class="welcome-title-1">We love your</span>
            <span class="welcome-title-2">satisfaction</span>
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
  <p class="col-lg-12 text-center margin-bottom-30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.</p>
  <div class="col-lg-12 tm-overflow-hidden">
    <div class="tm-img-1-container">
      <img src="{{ asset('assets/img/0.jpg') }}" alt="Image description">
      <p class="tm-img-1-description">Porsche</p>
    </div>
    <div class="tm-img-1-container">
      <img src="{{ asset('assets/img/1.jpg') }}" alt="Image description">
      <p class="tm-img-1-description">Mercedes</p>
    </div>
    <div class="tm-img-1-container">
      <img src="{{ asset('assets/img/0.jpg') }}" alt="Image description">
      <p class="tm-img-1-description">BMW</p>
    </div>
    <div class="tm-img-1-container">
      <img src="{{ asset('assets/img/1.jpg') }}" alt="Image description">
      <p class="tm-img-1-description">Lexus</p>
    </div>         
  </div>
  </div>
</section>    
@endsection

@section('content')
<div class="tm-overflow-hidden row">
    <div class="tm-gallery col-lg-9 col-md-9 col-sm-8 col-xs-12">
      <h3 class="tm-gallery-title">Toyota (53)</h3>          
      <div class="tm-item-container">
        <img src="{{ asset('assets/img/2.jpg') }}" alt="Image">
        <p class="tm-item-description">pellentesque eu, pretium quissem</p><hr>
        <div class="tm-item-price-container">
          <span class="tm-item-price">$ 50,000</span>
          <a href="#" class="tm-item-link">
            <span class="tm-item-action">Add to Cart</span>
            <img src="{{ asset('assets/img/plus.png') }}" class="tm-item-add-icon" alt="Image">
          </a>
        </div>
      </div>
      <div class="tm-item-container">
        <img src="{{ asset('assets/img/2.jpg') }}" alt="Image">
        <p class="tm-item-description">pellentesque eu, pretium quissem</p><hr>
        <div class="tm-item-price-container">
          <span class="tm-item-price">$ 34,000</span>
          <a href="#" class="tm-item-link">
            <span class="tm-item-action">Add to Cart</span>
            <img src="{{ asset('assets/img/plus.png') }}" class="tm-item-add-icon" alt="Image">
          </a>
        </div>   
      </div>
      <div class="tm-item-container">
        <img src="{{ asset('assets/img/2.jpg') }}" alt="Image">
        <p class="tm-item-description">pellentesque eu, pretium quissem</p><hr>
        <div class="tm-item-price-container">
          <span class="tm-item-price">$ 65,000</span>
          <a href="#" class="tm-item-link">
            <span class="tm-item-action">Add to Cart</span>
            <img src="{{ asset('assets/img/plus.png') }}" class="tm-item-add-icon" alt="Image">
          </a>
        </div>         
      </div>
      <div class="tm-item-container">
        <img src="{{ asset('assets/img/2.jpg') }}" alt="Image">
        <p class="tm-item-description">pellentesque eu, pretium quissem</p><hr>
        <div class="tm-item-price-container">
          <span class="tm-item-price">$ 20,000</span>
          <a href="#" class="tm-item-link">
            <span class="tm-item-action">Add to Cart</span>
            <img src="{{ asset('assets/img/plus.png') }}" class="tm-item-add-icon" alt="Image">
          </a>
        </div>            
      </div>
      <div class="tm-item-container">
        <img src="{{ asset('assets/img/2.jpg') }}" alt="Image">
        <p class="tm-item-description">pellentesque eu, pretium quissem</p><hr>
        <div class="tm-item-price-container">
          <span class="tm-item-price">$ 134,000</span>
          <a href="#" class="tm-item-link">
            <span class="tm-item-action">Add to Cart</span>
            <img src="{{ asset('assets/img/plus.png') }}" class="tm-item-add-icon" alt="Image">
          </a>
        </div>            
      </div>
      <div class="tm-item-container">
        <img src="{{ asset('assets/img/2.jpg') }}" alt="Image">
        <p class="tm-item-description">pellentesque eu, pretium quissem</p><hr>
        <div class="tm-item-price-container">
          <span class="tm-item-price">$ 55,000</span>
          <a href="#" class="tm-item-link">
            <span class="tm-item-action">Add to Cart</span>
            <img src="{{ asset('assets/img/plus.png') }}" class="tm-item-add-icon" alt="Image">
          </a>
        </div>            
      </div>
      <div class="tm-item-container">
        <img src="{{ asset('assets/img/2.jpg') }}" alt="Image">
        <p class="tm-item-description">pellentesque eu, pretium quissem</p><hr>
        <div class="tm-item-price-container">
          <span class="tm-item-price">$ 20,000</span>
          <a href="#" class="tm-item-link">
            <span class="tm-item-action">Add to Cart</span>
            <img src="{{ asset('assets/img/plus.png') }}" class="tm-item-add-icon" alt="Image">
          </a>
        </div>            
      </div>
      <div class="tm-item-container">
        <img src="{{ asset('assets/img/2.jpg') }}" alt="Image">
        <p class="tm-item-description">pellentesque eu, pretium quissem</p><hr>
        <div class="tm-item-price-container">
          <span class="tm-item-price">$ 134,000</span>
          <a href="#" class="tm-item-link">
            <span class="tm-item-action">Add to Cart</span>
            <img src="{{ asset('assets/img/plus.png') }}" class="tm-item-add-icon" alt="Image">
          </a>
        </div>            
      </div>
      <div class="tm-item-container">
        <img src="{{ asset('assets/img/2.jpg') }}" alt="Image">
        <p class="tm-item-description">pellentesque eu, pretium quissem</p><hr>
        <div class="tm-item-price-container">
          <span class="tm-item-price">$ 55,000</span>
          <a href="#" class="tm-item-link">
            <span class="tm-item-action">Add to Cart</span>
            <img src="{{ asset('assets/img/plus.png') }}" class="tm-item-add-icon" alt="Image">
          </a>
        </div>            
      </div>
    </div>
    <aside class="tm-gallery-aside col-lg-3 col-md-3 col-sm-4 col-xs-12">
      <nav class="tm-gallery-nav">
        <h2 class="tm-gallery-nav-title">Category <i class="fa fa-caret-up"></i></h2>
        <ul>
          <li class="active">
            <a href="#">
              <img src="{{ asset('assets/img/gallery-list-icon.png') }}" class="tm-gallery-list-img" alt="Image">Toyota
              <i class="fa fa-caret-right tm-gallery-list-fa"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="{{ asset('assets/img/gallery-list-icon.png') }}" class="tm-gallery-list-img" alt="Image">Honda
              <i class="fa fa-caret-right tm-gallery-list-fa"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="{{ asset('assets/img/gallery-list-icon.png') }}" class="tm-gallery-list-img" alt="Image">Nissan
              <i class="fa fa-caret-right tm-gallery-list-fa"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="{{ asset('assets/img/gallery-list-icon.png') }}" class="tm-gallery-list-img" alt="Image">BMW
              <i class="fa fa-caret-right tm-gallery-list-fa"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="{{ asset('assets/img/gallery-list-icon.png') }}" class="tm-gallery-list-img" alt="Image">Audi
              <i class="fa fa-caret-right tm-gallery-list-fa"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="{{ asset('assets/img/gallery-list-icon.png') }}" class="tm-gallery-list-img" alt="Image">Mercedes
              <i class="fa fa-caret-right tm-gallery-list-fa"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="{{ asset('assets/img/gallery-list-icon.png') }}" class="tm-gallery-list-img" alt="Image">Lexus
              <i class="fa fa-caret-right tm-gallery-list-fa"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="{{ asset('assets/img/gallery-list-icon.png') }}" class="tm-gallery-list-img" alt="Image">Ford
              <i class="fa fa-caret-right tm-gallery-list-fa"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="{{ asset('assets/img/gallery-list-icon.png') }}" class="tm-gallery-list-img" alt="Image">Ferrari
              <i class="fa fa-caret-right tm-gallery-list-fa"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="{{ asset('assets/img/gallery-list-icon.png') }}" class="tm-gallery-list-img" alt="Image">Lamborghini
              <i class="fa fa-caret-right tm-gallery-list-fa"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="{{ asset('assets/img/gallery-list-icon.png') }}" class="tm-gallery-list-img" alt="Image">Porsche
              <i class="fa fa-caret-right tm-gallery-list-fa"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="{{ asset('assets/img/gallery-list-icon.png') }}" class="tm-gallery-list-img" alt="Image">Land Rover
              <i class="fa fa-caret-right tm-gallery-list-fa"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="{{ asset('assets/img/gallery-list-icon.png') }}" class="tm-gallery-list-img" alt="Image">Chevrolet
              <i class="fa fa-caret-right tm-gallery-list-fa"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <img src="{{ asset('assets/img/gallery-list-icon.png') }}" class="tm-gallery-list-img" alt="Image">More...
              <i class="fa fa-caret-right tm-gallery-list-fa"></i>
            </a>
          </li>
        </ul>
      </nav>
      <div class="tm-call-us">
        <h3 class="text-uppercase tm-call-us-title">Call us</h3>
        <a href="tel:" class="tm-call-us-link">+11 565 789 57</a>
      </div>    
    </aside>
  </div>
@endsection
