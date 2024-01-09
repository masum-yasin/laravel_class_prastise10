@extends('frontend.layouts.app')
@section('content')
 <!-- BreadCrumb Starts -->  
 <section class="breadcrumb-main" style="background-image:url({{asset('frontend/assets/images/pexels-wendy-wei-1190297.jpg')}});">
    <div class="breadcrumb-outer">
        <div class="container">
            <div class="breadcrumb-content text-center pt-14 pb-2">
                <h5 class="theme mb-0">Eventiz</h5>
                <h1 class="mb-0 white">Contact us</h1>
            </div>
        </div>
    </div>
    <div class="bread-overlay"></div>
</section>
<!-- BreadCrumb Ends --> 

<section class="contact-main pb-8" style="background-image: url({{asset('frontend/assets/images/testimonial-1.png')}});">
    <div class="container">
        <div class="contact-info-main mt-0">
            <div class="section-title mb-5 w-75 mx-auto text-center">
                <h3 class="h-title">Contact</h3>
                <h4 class="theme">Touch WIth Us</h4>
                <div class="selector4" style="display: flex; justify-content: center;">
                    <h2 class="ah-headline mb-0">
                        <span>How Can We </span>
                        <span class="ah-words-wrapper white theme">
                        <b class="is-visible textcap">help?</b>
                        <b>help?</b>
                        </span>
                    </h2>
                </div>
            </div>
            <div class="contact-info">
                <div class="contact-info-content row mb-1">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="info-item bg-grey px-4 py-5 border-all text-center">
                            <div class="info-icon mb-2 bg-theme rounded-circle mx-auto">
                                <i class="fa fa-map-marker-alt white"></i>
                            </div>
                            <div class="info-content">
                                <h5>Galleria Conference Hall</h5>
                                <p class="mb-0">19 By Pass Main Street, Bali, Indonesia, BC 22196</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="info-item bg-grey px-4 py-5 border-all text-center">
                            <div class="info-icon mb-2 bg-theme rounded-circle mx-auto">
                                <i class="fa fa-phone white"></i>
                            </div>
                            <div class="info-content">
                                <h5>Ticket Info</h5>
                                <p class="m-0">Phone No. : (+977) 524-191-2022</p>
                                <p class="m-0">Email Address: eventiz@mail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="info-item bg-grey px-4 py-5 border-all text-center">
                            <div class="info-icon mb-2 bg-theme rounded-circle mx-auto">
                                <i class="fa fa-envelope white"></i>
                            </div>
                            <div class="info-content ps-4">
                                <h5>Event Schedule</h5>
                                <p class="m-0">Sept 12 - 14 Sept 2023 Starts 09:00am to 06:00 pm</p>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
                <!-- Errors message ending -->
                <!-- Success Data -->
                @if(session('msg'))
                <div class="alert alert-success">
                  {{session('msg')}}
        
                </div>
                @endif
                 <div id="contact-form1" class="contact-form">
                    <div class="row">
                        <div class="col-lg-8 pe-lg-4 mb-4">
                            
                            <div id="contactform-error-msg"></div>

                            <form method="post" action="contact/store/"  >
                                @csrf
                                <div class="form-group mb-2">
                                    <input type="text" name="first_name" class="form-control" id="fullname" placeholder="First Name" value="{{old('First_Name')}}">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="email" name="email"  class="form-control" id="email" placeholder="Email" value="{{old('email')}}">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="number" name="phone" class="form-control" id="phnumber" placeholder="Phone" value="{{old('phone')}}">
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" name="subject" class="form-control" id="llastname" placeholder="subject" value="{{old('subject')}}">
                                </div>
                                <div class="textarea mb-2">
                                    <textarea name="comments" value='{{old('comments')}}' placeholder="Enter a message"></textarea>
                                </div>
                                <div class="comment-btn text-center text-lg-start">
                                    <input type="submit" class="nir-btn" id="submit2" value="Send Message">
                                </div>
                               
                            </form>
                        </div>
                        {{-- <section class="contact-from-section spad">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-title">
                                            <h2>Contact Us By Email!</h2>
                                            <p>Fill out the form below to recieve a free and confidential intial consultation.</p>
                                        </div>
                                    </div>
                                </div>
                           
                                @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            
                             @if(session('msg'))
                             <div class="alert alert-danger">
                                {{session('msg')}};
                             </div>
                            @endif
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form action="contact.store" method="post" class="comment-form contact-form">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <input type="text" placeholder="Name" name="name" value="{{old('name')}}">
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" placeholder="Email" name="email" value="{{old('email')}}">
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" placeholder="Phone" name="phone" value="{{old('phone')}}">
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="text" placeholder="subject" name="subject" value="{{old('phone')}}">
                                                </div>
                                                <div class="col-lg-12 text-center">
                                                    <textarea placeholder="Messages" value='{{old('message')}}' name="message"></textarea>
                                                    <button type="submit" class="site-btn">Send Message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section> --}}
                        <div class="col-lg-4 ps-lg-4 mb-4">
                            <div class="map">
                                <div style="width: 100%">
                                    <iframe height="500" style="filter: grayscale(1);" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=+(mangal%20bazar)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
           
        </div>
    </div>
</section>

@endsection
