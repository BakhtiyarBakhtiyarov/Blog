@extends('layouts.master')
@section('content')
    <div class="main-content">
        <div class="main-content-inner">

            <!-- About div Start -->
            <div class="home-section" id="home">
                <div class="particals"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="home-content">
                                <div class="home-image">
                                    <img src="{{ asset('img/about_images') . '/' . $about->image}}" alt="" class="wow zoomIn"
                                        data-wow-delay="0.2s">
                                </div>
                                <div class="home-main-content">
                                    <h4 class="heading wow fadeInUp" data-wow-delay="0.3s">
                                        Bakhtiyar Bakhtiyarov
                                    </h4>
                                    <div class="designation wow zoomIn" data-wow-delay="0.4s">
                                        <span>
                                            I'm a <span class="typed"></span>
                                        </span>
                                    </div>
                                    <div class="social-info wow fadeInUp" data-wow-delay="0.5s">
                                        <ul>
                                            <li>
                                                <a href="{{ $contact->facebook }}">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ $contact->linkedin }}">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ $contact->github }}">
                                                    <i class="fab fa-github"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ $contact->instagram }}">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="about-links wow fadeInUp" data-wow-delay="0.6s">
                                        <a href="#contact" class="mybtn3 mybtn-bg"> <span>Contact Me</span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About div End -->

            <!-- About div Start -->
            <div class="about-section" id="about">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="section-heading wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="title">
                                    About <span class="color">Me</span>
                                    <span class="bg-text">About</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="about">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="about-image wow fadeInUp" data-wow-delay="0.3s">
                                            <img src="{{ asset('images/profile_photo.jpeg') }}" alt="">
                                        </div>

                                    </div>
                                    <div class="col-lg-8 align-self-center">
                                        <div class="short-description wow fadeInUp">
                                            <p>
                                                Randon Text Received shutters expenses ye he pleasant. Drift as blind above
                                                at up. No up simple county stairs do should praise as. Drawings sir gay
                                                together landlord had law smallest. Formerly welcomed attended declared met
                                                say unlocked. Jennings outlived no dwelling denoting in peculiar as he
                                                believed.
                                            </p>
                                            <p>
                                                Left till here away at to whom past. Feelings laughing at no wondered
                                                repeated provided finished. It acceptance thoroughly my advantages
                                                everything as.
                                            </p>
                                            <div class="about-links">
                                                <a href="#" class="mybtn3 mybtn-bg"> <span>Download CV</span> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="about-content wow fadeInUp">
                                            <div class="personal-info">
                                                <ul>
                                                    <li>
                                                        <span><label>Birthday:</label> {{ $about->birthday }} </span>
                                                    </li>
                                                    <li>
                                                        <span><label>Age:</label> {{ $age }} </span>
                                                    </li>
                                                    <li>
                                                        <span><label>City:</label> {{ $about->city }} </span>
                                                    </li>
                                                    <li>
                                                        <span><label>Interests:</label> {{ $about->interests }} </span>
                                                    </li>
                                                    <li>
                                                        <span><label>Study:</label> {{ $about->study }} </span>
                                                    </li>
                                                    <li>
                                                        <span><label>Degree:</label> Master</span>
                                                    </li>
                                                    <li>
                                                        <span><label>Website:</label> <a
                                                                href=" {{ $about->website }} ">{{ $about->website }}</a></span>
                                                    </li>
                                                    <li>
                                                        <span><label>Mail:</label> {{ $contact->email }} </span>
                                                    </li>
                                                    <li>
                                                        <span><label>Phone:</label> {{ $contact->phone }} </span>
                                                    </li>
                                                    <li>
                                                        <span><label>Github:</label> <a
                                                                href=" {{ $contact->github }} ">BakhtiyarBakhtiyarov</a></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- About div End -->
            <!-- My service Start -->
            <div class="service-wrapper" id="service">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="section-heading wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="title">
                                    My <span class="color">Services</span>
                                    <span class="bg-text">Services</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <a href="service-details.html" class="single-feature wow fadeInUp">
                                <img src="assets/images/icon/024-server.png" alt="">
                                <div class="content">
                                    <h4 class="title">
                                        Amazon AWS
                                    </h4>
                                    <p>
                                        Clarinet accustomed. Would legs of framework officers. We've to morning like a
                                        contracting
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <a href="service-details.html" class="single-feature wow fadeInUp">
                                <img src="assets/images/icon/062-code-1.png" alt="">
                                <div class="content">
                                    <h4 class="title">
                                        Web Development
                                    </h4>
                                    <p>
                                        Clarinet accustomed. Would legs of framework officers. We've to morning like a
                                        contracting
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <a href="service-details.html" class="single-feature wow fadeInUp">
                                <img src="assets/images/icon/064-vector.png" alt="">
                                <div class="content">
                                    <h4 class="title">
                                        Creative design
                                    </h4>
                                    <p>
                                        Clarinet accustomed. Would legs of framework officers. We've to morning like a
                                        contracting
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <a href="service-details.html" class="single-feature wow fadeInUp">
                                <img src="assets/images/icon/043-analytics.png" alt="">
                                <div class="content">
                                    <h4 class="title">
                                        App Development
                                    </h4>
                                    <p>
                                        Clarinet accustomed. Would legs of framework officers. We've to morning like a
                                        contracting
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <a href="service-details.html" class="single-feature wow fadeInUp">
                                <img src="assets/images/icon/033-rocket.png" alt="">
                                <div class="content">
                                    <h4 class="title">
                                        Fast & Optimized
                                    </h4>
                                    <p>
                                        Clarinet accustomed. Would legs of framework officers. We've to morning like a
                                        contracting
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <a href="service-details.html" class="single-feature wow fadeInUp">
                                <img src="assets/images/icon/054-puzzle.png" alt="">
                                <div class="content">
                                    <h4 class="title">
                                        Pixel Precision
                                    </h4>
                                    <p>
                                        Clarinet accustomed. Would legs of framework officers. We've to morning like a
                                        contracting
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- My service End -->

            <!-- Resume Area Start -->
            <div class="resume-wrapper" id="resume">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="section-heading wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="title">
                                    My <span class="color">Resume</span>
                                    <span class="bg-text">Resume</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="resume-box">
                                <div class="resume-title">
                                    <h4 class="title">
                                        Education
                                    </h4>
                                </div>
                                @foreach ($educations as $education )
                                <div class="education-list">
                                    <div class="single-education  wow fadeInUp">
                                        <div class="year">
                                            <span> {{$education->start_date}} - {{$education->end_date}}</span>
                                        </div>
                                        <h4 class="university-name">
                                            {{ $education->title}}
                                        </h4>
                                        <p class="degree"> {{ $education->description }} </p>
                                    </div>
                                </div>         
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="resume-box">
                                <div class="resume-title">
                                    <h4 class="title">
                                        Experience
                                    </h4>
                                </div>
                                @foreach ($experiences as $experience)
                                <div class="education-list">
                                    <div class="single-education wow fadeInUp">
                                        <div class="year">
                                            <span>{{$experience->start_date}} - {{$experience->end_date}}</span>
                                        </div>
                                        <h4 class="university-name">
                                            {{ $experience->title}}
                                        </h4>
                                        <p class="degree">{{ $experience->description }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="resume-box">
                                <div class="resume-title">
                                    <h4 class="title">
                                        Coding Skills
                                    </h4>
                                </div>
                                <div class="skill-list">
                                    <div class="single-skill wow fadeInUp">
                                        <div class="heading">
                                            <h4 class="name">
                                                HTML
                                            </h4>
                                            <h5 class="value">
                                                75%
                                            </h5>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 85%"></div>
                                        </div>
                                    </div>
                                    <div class="single-skill wow fadeInUp">
                                        <div class="heading">
                                            <h4 class="name">
                                                JS
                                            </h4>
                                            <h5 class="value">
                                                75%
                                            </h5>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 95%"></div>
                                        </div>
                                    </div>
                                    <div class="single-skill wow fadeInUp">
                                        <div class="heading">
                                            <h4 class="name">
                                                PHP
                                            </h4>
                                            <h5 class="value">
                                                75%
                                            </h5>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 65%"></div>
                                        </div>
                                    </div>
                                    <div class="single-skill wow fadeInUp">
                                        <div class="heading">
                                            <h4 class="name">
                                                JAVA
                                            </h4>
                                            <h5 class="value">
                                                75%
                                            </h5>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 75%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="resume-box">
                                <div class="resume-title">
                                    <h4 class="title">
                                        Language Skills
                                    </h4>
                                </div>
                                <div class="skill-list">
                                    <div class="single-skill wow fadeInUp">
                                        <div class="heading">
                                            <h4 class="name">
                                                English
                                            </h4>
                                            <h5 class="value">
                                                75%
                                            </h5>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 95%"></div>
                                        </div>
                                    </div>
                                    <div class="single-skill wow fadeInUp">
                                        <div class="heading">
                                            <h4 class="name">
                                                Hindi
                                            </h4>
                                            <h5 class="value">
                                                75%
                                            </h5>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 85%"></div>
                                        </div>
                                    </div>
                                    <div class="single-skill wow fadeInUp">
                                        <div class="heading">
                                            <h4 class="name">
                                                Spanis
                                            </h4>
                                            <h5 class="value">
                                                75%
                                            </h5>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 75%"></div>
                                        </div>
                                    </div>
                                    <div class="single-skill wow fadeInUp">
                                        <div class="heading">
                                            <h4 class="name">
                                                Arabic
                                            </h4>
                                            <h5 class="value">
                                                75%
                                            </h5>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                                aria-valuemax="100" style="width: 65%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="resume-box">
                                <div class="resume-title">
                                    <h4 class="title">
                                        Professional Skills
                                    </h4>
                                </div>
                                <div class="skill-list2">
                                    <div class="single-skill2 wow fadeInUp">
                                        <div class="circle-progress" data-percent="80"></div>
                                        <h4 class="name">
                                            Web Design
                                        </h4>
                                    </div>
                                    <div class="single-skill2 wow fadeInUp">
                                        <div class="circle-progress" data-percent="90"></div>
                                        <h4 class="name">
                                            Web Devlopment
                                        </h4>
                                    </div>
                                    <div class="single-skill2 wow fadeInUp">
                                        <div class="circle-progress" data-percent="70"></div>
                                        <h4 class="name">
                                            Graphic Design
                                        </h4>
                                    </div>
                                    <div class="single-skill2 wow fadeInUp">
                                        <div class="circle-progress" data-percent="85"></div>
                                        <h4 class="name">
                                            Auto CAD
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="resume-box">
                                <div class="resume-title">
                                    <h4 class="title">
                                        Knowledge
                                    </h4>
                                </div>
                                <div class="knowledge-list wow fadeInUp">
                                    <div class="single-knowledge">
                                        <p>
                                            Search engine marketing
                                        </p>
                                    </div>
                                    <div class="single-knowledge">
                                        <p>
                                            iOS and android apps
                                        </p>
                                    </div>
                                    <div class="single-knowledge">
                                        <p>
                                            Spreadsheets (Excel, Google Spreadsheets, etc.)
                                        </p>
                                    </div>
                                    <div class="single-knowledge">
                                        <p>
                                            Email Communication
                                        </p>
                                    </div>
                                    <div class="single-knowledge">
                                        <p>
                                            Presentation software (PowerPoint, Keynote)
                                        </p>
                                    </div>
                                    <div class="single-knowledge">
                                        <p>
                                            Office suites (Microsoft Office, G Suite)
                                        </p>
                                    </div>
                                    <div class="single-knowledge">
                                        <p>
                                            Operating systems (Windows and MacOS)
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Resume Area End -->


            <!-- Contact Area Start -->
            <div class="contact" id="contact">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="section-heading wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="title">
                                    Get In <span class="color">Touch</span>
                                    <span class="bg-text">Contact</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <!-- Single Info -->
                            <div class="single-info wow fadeInUp">
                                <div class="info-icon">
                                    <i class="flaticon-placeholder"></i>
                                </div>
                                <div class="info-content">
                                    <h5>My Location:</h5>
                                    <p>{{ $contact->address }}</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- Single Info -->
                            <div class="single-info wow fadeInUp">
                                <div class="info-icon">
                                    <i class="flaticon-telephone"></i>
                                </div>
                                <div class="info-content">
                                    <h5>Phone Number:</h5>
                                    <p>{{ $contact->phone }}</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- Single Info -->
                            <div class="single-info wow fadeInUp">

                                <div class="info-icon">
                                    <i class="flaticon-email-2"></i>
                                </div>
                                <div class="info-contentr">
                                    <h5>Email Address:</h5>
                                    <p>{{ $contact->email }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row cAndm">
                        <div class="col-lg-6">
                            <div class="home-page-form">
                                <div class="contact-form">

                                    <form id="contact-form" method="POST" action="{{ route('user_messages') }}">
                                        @csrf
                                        <div class="controls">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input id="name" type="text" name="name"
                                                            class="form-control" placeholder="Name*" required="required"
                                                            data-error="Name is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input id="email" type="email" name="email"
                                                            class="form-control" placeholder="Email*" required="required"
                                                            data-error="Valid email is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input id="subject" type="text" name="subject"
                                                            class="form-control" placeholder="Subject*"
                                                            required="required" data-error="Subject is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea id="message" name="message" class="form-control" placeholder="Message*" rows="7"
                                                            required="required" data-error="Please,leave us a message."></textarea>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="mybtn3 mybtn-bg"><span>Send
                                                            Message</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form> <!-- End Contact From -->
                                </div>
                            </div>
                        </div>


                    </div>
                    <!--/.row-->
                </div>
                <!--/.container-->
            </div>
            <!-- Contact Area End -->

        </div>
    </div>
    <!-- Main Content Area End -->






    <!-- Back to Top Start -->
    <div class="bottomtotop">
        <i class="fas fa-chevron-right"></i>
    </div>
    <!-- Back to Top End -->
@endsection
