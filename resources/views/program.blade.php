@extends('layouts.app')
@section('title', 'Services')
@section('header-content')
<div class="templatemo-welcome welcome-slider">
    <div class="container">
      <div class="row">
        <div class="flexslider">
          <ul class="slides">
            <li>
              <div class="about-slider">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                  <img src="{{ asset('assets/img/about/1.jpg') }}" class="img-responsive" alt="Image">
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 about-slider-description">
                  <h2 class="text-uppercase welcome-title">
                        <span class="welcome-title-1">Performance</span>
                        <span class="welcome-title-2">for the speed</span>
                  </h2>
                  <p class="welcome-message">Motor is free Bootstrap v3.3.4 responsive web template provided 
          by <span class="blue">template</span><span class="green">mo</span>.com website. You can download, 
          modify and use this for your website projects.
          
          Cumdent sociis natoque penatibus et magnis dis parturient montes, sor ind nascetur ridiculus mus. 
          Lorem ipsum dolor sit amet dipiscing elit dori</p>
                </div>              
              </div>  
            </li>
            <li>
              <div class="about-slider">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                  <img src="{{ asset('assets/img/about/1.jpg') }}" class="img-responsive" alt="Image">
                </div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 about-slider-description">
                  <h2 class="text-uppercase welcome-title">
                    <span class="welcome-title-1">Find to own</span>
                    <span class="welcome-title-2">the fast &amp; best</span>
                  </h2>
                  <p class="welcome-message">Lorem ipsum dolor sit amet, consectetuer adipiscing elit dori. Aenean commodo ligula eget. Aenean massa. Cumdent sociis natoque penatibus et magnis dis parturient montes, sor ind nascetur ridiculus mus. Lorem ipsum dolor sit amet dipiscing elit dori.</p>
                </div>              
              </div>  
            </li>
          </ul>
        </div>                          
      </div>    
    </div>
  </div>
</section>
<div class="container margin-bottom-50">
 <div class="row">
  <div class="col-lg-12 tm-overflow-hidden">
    <div class="tm-img-1-container">
      <img src="{{ asset('assets/img/4-1.jpg') }}" alt="Image description">
      <p class="tm-img-1-description">Benz</p>
    </div>
    <div class="tm-img-1-container">
      <img src="{{ asset('assets/img/4-2.jpg') }}" alt="Image description">
      <p class="tm-img-1-description">Mercedes</p>
    </div>
    <div class="tm-img-1-container">
      <img src="{{ asset('assets/img/4-3.jpg') }}" alt="Image description">
      <p class="tm-img-1-description">BMW</p>
    </div>
    <div class="tm-img-1-container">
      <img src="{{ asset('assets/img/4-4.jpg') }}" alt="Image description">
      <p class="tm-img-1-description">Lexus</p>
    </div>         
  </div>
</div>
</div>
@endsection

@section('content')
<div class="services-container-1">
    <h2 class="services-title">Customer Services</h2>
    <div class="services-blocks-container">
      <div class="services-block">
        <div class="services-header">
          <i class="fa fa-plus services-icon"></i>
          <h3 class="services-title-2">Morbi Accumsan</h3>  
        </div>          
        <p class="services-description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagiittis sem   nibh id elit. Duis sed odio sit amet nibh.a sit amet mauris um auctor, nisi elit. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
      </div>
      <div class="services-block">
        <div class="services-header">
          <i class="fa fa-plus services-icon"></i>
          <h3 class="services-title-2">Gravita Velit</h3>  
        </div>          
        <p class="services-description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagiittis sem   nibh id elit. Duis sed odio sit amet nibh.a sit amet mauris um auctor, nisi elit. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
      </div>                    
    </div>
    <div class="services-blocks-container">
      <div class="services-block">
        <div class="services-header">
          <i class="fa fa-plus services-icon"></i>
          <h3 class="services-title-2">aenean consequat</h3>  
        </div>          
        <p class="services-description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagiittis sem   nibh id elit. Duis sed odio sit amet nibh.a sit amet mauris um auctor, nisi elit. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
      </div>
      <div class="services-block">
        <div class="services-header">
          <i class="fa fa-plus services-icon"></i>
          <h3 class="services-title-2">duis sedodio</h3>  
        </div>          
        <p class="services-description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagiittis sem   nibh id elit. Duis sed odio sit amet nibh.a sit amet mauris um auctor, nisi elit. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
      </div>                    
    </div>  
  </div>    
  
  <div class="about-container-2">
    <div class="services-container-inner">
      <h3 class="about-title-2">aenean solcudin</h3>
      <img src="{{ asset('assets/img/services-1.jpg') }}" alt="Image" class="img-responsive margin-bottom-15">          
      <p class="about-description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
      <a href="#" class="about-link about-link-2">Details</a>
    </div>
    <div class="services-container-inner">
      <h3 class="about-title-2">aenean solcudin</h3>
      <img src="{{ asset('assets/img/services-1.jpg') }}" alt="Image" class="img-responsive margin-bottom-15">          
      <p class="about-description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
      <a href="#" class="about-link about-link-2">Details</a>
    </div>
    <div class="services-container-inner">
      <h3 class="about-title-2">morbi accumsan</h3>
      <img src="{{ asset('assets/img/services-1.jpg') }}" alt="Image" class="img-responsive margin-bottom-15">          
      <p class="about-description">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
      <a href="#" class="about-link about-link-2">Details</a>
    </div>
  </div>
@endsection
