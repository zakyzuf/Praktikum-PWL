@extends('layouts.app')
@section('title', 'Contact Us')
@section('header-content')
<div class="templatemo-welcome welcome-slider" style="padding-bottom: 150px">
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
                modify and use this for your website projects. Please tell your friends about our templates. 
                Thank you for visiting.</p>
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
@endsection

@section('content')
<div class="row">
    <div id="google-map"></div>
  </div>
  <div class="row">
    <div class="contact-form-container">
      <h2 class="contact-title">Contact Us</h2>
      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Drbi accumsan ipsum velit.</p>
      <form action="#" method="post" class="tm-contact-form">
          <div class="col-lg-5 col-md-5 contact-form-left">
            <div class="form-group">
                <input type="text" id="contact_name" class="form-control" placeholder="NAME" />
            </div>
            <div class="form-group">
                <input type="email" id="contact_email" class="form-control" placeholder="EMAIL" />
            </div>
            <div class="form-group">
                <input type="text" id="contact_subject" class="form-control" placeholder="SUBJECT" />
            </div>                
          </div>
          <div class="col-lg-7 col-md-7 contact-form-right">
            <div class="form-group margin-bottom-0">
                <textarea id="contact_message" class="form-control" rows="6" placeholder="MESSAGE"></textarea>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 submit-btn-container">
            <button type="submit" name="submit" class="btn text-uppercase templatemo-submit-btn">Send Message</button>  
          </div>                        
      </form>
    </div>
  </div>
@endsection
