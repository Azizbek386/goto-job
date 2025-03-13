@extends('layouts.app')
@section('content')

<main>

<section class="hero-section d-flex justify-content-center align-items-center">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                <div class="hero-section-text mt-5">
                    <h6 class="text-white">Are you looking for your dream job?</h6>

                    <h1 class="hero-title text-white mt-4 mb-4">Online Platform. <br> Best Job portal</h1>

                    <a href="#categories-section" class="custom-btn custom-border-btn btn">Browse Categories</a>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <form class="custom-form hero-form" action="#" method="get" role="form">
                    <h3 class="text-white mb-3">Search your dream job</h3>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><i class="bi-person custom-icon"></i></span>

                                <input type="text" name="job-title" id="job-title" class="form-control" placeholder="Job Title" required>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon2"><i class="bi-geo-alt custom-icon"></i></span>

                                <input type="text" name="job-location" id="job-location" class="form-control" placeholder="Location" required>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12">
                            <button type="submit" class="form-control">
                                Find a job
                            </button>
                        </div>

                        <div class="col-12">
                            <div class="d-flex flex-wrap align-items-center mt-4 mt-lg-0">
                                <span class="text-white mb-lg-0 mb-md-0 me-2">Popular keywords:</span>

                                <div>
                                    <a href="{{ route("job_listings") }}" class="badge">Web design</a>

                                    <a href="{{ route("job_listings") }}" class="badge">Marketing</a>

                                    <a href="{{ route("job_listings") }}" class="badge">Customer support</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>


<section class="categories-section section-padding" id="categories-section">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-lg-12 col-12 text-center">
                <h2 class="mb-5">Browse by <span>Categories</span></h2>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="categories-block">
                    <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="categories-icon bi-window"></i>
                    
                        <small class="categories-block-title">Web design</small>

                        <div class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                            <span class="categories-block-number-text">320</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="categories-block">
                    <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="categories-icon bi-twitch"></i>
                    
                        <small class="categories-block-title">Marketing</small>

                        <div class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                            <span class="categories-block-number-text">180</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="categories-block">
                    <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="categories-icon bi-play-circle-fill"></i>
                    
                        <small class="categories-block-title">Video</small>

                        <div class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                            <span class="categories-block-number-text">340</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="categories-block">
                    <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="categories-icon bi-globe"></i>
                    
                        <small class="categories-block-title">Websites</small>

                        <div class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                            <span class="categories-block-number-text">140</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="categories-block">
                    <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="categories-icon bi-people"></i>
                    
                        <small class="categories-block-title">Customer Support</small>

                        <div class="categories-block-number d-flex flex-column justify-content-center align-items-center">
                            <span class="categories-block-number-text">84</span>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="about-section">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-12">
                <div class="about-image-wrap custom-border-radius-start">
                    <img src="images/professional-asian-businesswoman-gray-blazer.jpg" class="about-image custom-border-radius-start img-fluid" alt="">

                    <div class="about-info">
                        <h4 class="text-white mb-0 me-2">Julia Ward</h4>

                        <p class="text-white mb-0">Investor</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="custom-text-block">
                    <h2 class="text-white mb-2">Introduction Gotto</h2>

                    <p class="text-white">Gotto Job is a free website template for job portals. This layout is based on Bootstrap 5 CSS framework. Thank you for visiting <a href="https://www.tooplate.com" target="_parent">Tooplate website</a>. Images are from <a href="https://www.freepik.com/" target="_blank">FreePik</a> website.</p>

                    <div class="custom-border-btn-wrap d-flex align-items-center mt-5">
                        <a href="{{ route("about") }}" class="custom-btn custom-border-btn btn me-4">Get to know us</a>

                        <a href="#job-section" class="custom-link smoothscroll">Explore Jobs</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-12">
                <div class="instagram-block">
                    <img src="images/horizontal-shot-happy-mixed-race-females.jpg" class="about-image custom-border-radius-end img-fluid" alt="">

                    <div class="instagram-block-text">
                        <a href="https://www.instagram.com/" class="custom-btn btn">
                            <i class="bi-instagram"></i>
                            @Gotto
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="job-section job-featured-section section-padding" id="job-section">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 text-center mx-auto mb-4">
                <h2>Featured Jobs</h2>

                <p><strong>Over 10k opening jobs</strong> Feel free to download and use our free HTML templates from Tooplate website.</p>
            </div>

            <div class="col-lg-12 col-12">
                <div class="job-thumb d-flex">
                    <div class="job-image-wrap bg-white shadow-lg">
                        <img src="images/logos/google.png" class="job-image img-fluid" alt="">
                    </div>

                    <div class="job-body d-flex flex-wrap flex-auto align-items-center ms-4">
                        <div class="mb-3">
                            <h4 class="job-title mb-lg-0">
                                <a href="{{ route("job_details") }}" class="job-title-link">Technical Lead</a>
                            </h4>

                            <div class="d-flex flex-wrap align-items-center">
                                <p class="job-location mb-0">
                                    <i class="custom-icon bi-geo-alt me-1"></i>
                                    Kuala, Malaysia
                                </p>

                                <p class="job-date mb-0">
                                    <i class="custom-icon bi-clock me-1"></i>
                                    10 hours ago
                                </p>

                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-cash me-1"></i>
                                    $20k
                                </p>

                                <div class="d-flex">
                                    <p class="mb-0">
                                        <a href="{{ route("job_details") }}" class="badge badge-level">Internship</a>
                                    </p>

                                    <p class="mb-0">
                                        <a href="{{ route("job_details") }}" class="badge">Freelance</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="job-section-btn-wrap">
                            <a href="{{ route("job_details") }}" class="custom-btn btn">Apply now</a>
                        </div>
                    </div>
                </div>

                <div class="job-thumb d-flex">
                    <div class="job-image-wrap bg-white shadow-lg">
                        <img src="images/logos/apple.png" class="job-image img-fluid" alt="">
                    </div>

                    <div class="job-body d-flex flex-wrap flex-auto align-items-center ms-4">
                        <div class="mb-3">
                            <h4 class="job-title mb-lg-0">
                                <a href="{{ route("job_details") }}" class="job-title-link">Business Director</a>
                            </h4>

                            <div class="d-flex flex-wrap align-items-center">
                                <p class="job-location mb-0">
                                    <i class="custom-icon bi-geo-alt me-1"></i>
                                    California, USA
                                </p>

                                <p class="job-date mb-0">
                                    <i class="custom-icon bi-clock me-1"></i>
                                    1 day ago
                                </p>

                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-cash me-1"></i>
                                    $90k
                                </p>

                                <div class="d-flex">
                                    <p class="mb-0">
                                        <a href="{{ route("job_details") }}" class="badge badge-level">Senior</a href="{{ route("job_details") }}">
                                    </p>

                                    <p class="mb-0">
                                        <a href="{{ route("job_details") }}" class="badge">Full Time</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="job-section-btn-wrap">
                            <a href="{{ route("job_details") }}" class="custom-btn btn">Apply now</a>
                        </div>
                    </div>
                </div>

                <div class="job-thumb d-flex">
                    <div class="job-image-wrap bg-white shadow-lg">
                        <img src="images/logos/meta.png" class="job-image img-fluid" alt="">
                    </div>

                    <div class="job-body d-flex flex-wrap flex-auto align-items-center ms-4">
                        <div class="mb-3">
                            <h4 class="job-title mb-lg-0">
                                <a href="{{ route("job_details") }}" class="job-title-link">HR Manager</a>
                            </h4>

                            <div class="d-flex flex-wrap align-items-center">
                                <p class="job-location mb-0">
                                    <i class="custom-icon bi-geo-alt me-1"></i>
                                    Tower, Paris
                                </p>

                                <p class="job-date mb-0">
                                    <i class="custom-icon bi-clock me-1"></i>
                                    22 hours ago
                                </p>

                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-cash me-1"></i>
                                    $50k
                                </p>

                                <div class="d-flex">
                                    <p class="mb-0">
                                        <a href="{{ route("job_listings") }}" class="badge badge-level">Junior</a>
                                    </p>

                                    <p class="mb-0">
                                        <a href="{{ route("job_listings") }}" class="badge">Contract</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="job-section-btn-wrap">
                            <a href="{{ route("job_details") }}" class="custom-btn btn">Apply now</a>
                        </div>
                    </div>
                </div>

                <div class="job-thumb d-flex">
                    <div class="job-image-wrap bg-white shadow-lg">
                        <img src="images/logos/slack.png" class="job-image img-fluid" alt="">
                    </div>

                    <div class="job-body d-flex flex-wrap flex-auto align-items-center ms-4">
                        <div class="mb-3">
                            <h4 class="job-title mb-lg-0">
                                <a href="{{ route("job_details") }}" class="job-title-link">Dev Ops</a>
                            </h4>

                            <div class="d-flex flex-wrap align-items-center">
                                <p class="job-location mb-0">
                                    <i class="custom-icon bi-geo-alt me-1"></i>
                                    Bangkok, Thailand
                                </p>

                                <p class="job-date mb-0">
                                    <i class="custom-icon bi-clock me-1"></i>
                                    40 minutes ago
                                </p>

                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-cash me-1"></i>
                                    $75k - 80k
                                </p>

                                <div class="d-flex">
                                    <p class="mb-0">
                                        <a href="{{ route("job_listings") }}" class="badge badge-level">Senior</a>
                                    </p>

                                    <p class="mb-0">
                                        <a href="{{ route("job_listings") }}" class="badge">Part Time</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="job-section-btn-wrap">
                            <a href="{{ route("job_details") }}" class="custom-btn btn">Apply now</a>
                        </div>
                    </div>
                </div>

                <div class="job-thumb d-flex">
                    <div class="job-image-wrap bg-white shadow-lg">
                        <img src="images/logos/creative-market.png" class="job-image img-fluid" alt="">
                    </div>

                    <div class="job-body d-flex flex-wrap flex-auto align-items-center ms-4">
                        <div class="mb-3">
                            <h4 class="job-title mb-lg-0">
                                <a href="{{ route("job_details") }}" class="job-title-link">UX Designer</a>
                            </h4>

                            <div class="d-flex flex-wrap align-items-center">
                                <p class="job-location mb-0">
                                    <i class="custom-icon bi-geo-alt me-1"></i>
                                    Bangkok, Thailand
                                </p>

                                <p class="job-date mb-0">
                                    <i class="custom-icon bi-clock me-1"></i>
                                    2 hours ago
                                </p>

                                <p class="job-price mb-0">
                                    <i class="custom-icon bi-cash me-1"></i>
                                    $100k
                                </p>

                                <div class="d-flex">
                                    <p class="mb-0">
                                        <a href="{{ route("job_listings") }}" class="badge badge-level">Entry</a>
                                    </p>

                                    <p class="mb-0">
                                        <a href="{{ route("job_listings") }}" class="badge">Remote</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="job-section-btn-wrap">
                            <a href="{{ route("job_details") }}" class="custom-btn btn">Apply now</a>
                        </div>
                    </div>
                </div>

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mt-5">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">Prev</span>
                            </a>
                        </li>

                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">1</a>
                        </li>
                        
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li>
                        
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12">
                <div class="custom-text-block custom-border-radius-start">
                    <h2 class="text-white mb-3">Gotto helps you an easier way to get new job</h2>

                    <p class="text-white">You are not allowed to redistribute the template ZIP file on any other template collection website. Please contact us for more info. Thank you.</p>

                    <div class="d-flex mt-4">
                        <div class="counter-thumb"> 
                            <div class="d-flex">
                                <span class="counter-number" data-from="1" data-to="12" data-speed="1000"></span>
                                <span class="counter-number-text">M</span>
                            </div>

                            <span class="counter-text">Daily active users</span>
                        </div> 

                        <div class="counter-thumb">    
                            <div class="d-flex">
                                <span class="counter-number" data-from="1" data-to="450" data-speed="1000"></span>
                                <span class="counter-number-text">k</span>
                            </div>

                            <span class="counter-text">Opening jobs</span>
                        </div> 
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="video-thumb">
                    <img src="images/people-working-as-team-company.jpg" class="about-image custom-border-radius-end img-fluid" alt="">

                    <div class="video-info">
                        <a href="https://www.youtube.com/tooplate" class="youtube-icon bi-youtube"></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="job-section recent-jobs-section section-padding">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 col-12 mb-4">
                <h2>Recent Jobs</h2>

                <p><strong>Over 10k opening jobs</strong> Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito adipcingi elit eismuod larehai</p>
            </div>

            <div class="clearfix"></div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="job-thumb job-thumb-box">
                    <div class="job-image-box-wrap">
                        <a href="{{ route("job_details") }}">
                            <img src="images/jobs/it-professional-works-startup-project.jpg" class="job-image img-fluid" alt="">
                        </a>

                        <div class="job-image-box-wrap-info d-flex align-items-center">
                            <p class="mb-0">
                                <a href="{{ route("job_listings") }}" class="badge badge-level">Internship</a>
                            </p>

                            <p class="mb-0">
                                <a href="{{ route("job_listings") }}" class="badge">Freelance</a>
                            </p>
                        </div>
                    </div>

                    <div class="job-body">
                        <h4 class="job-title">
                            <a href="{{ route("job_details") }}" class="job-title-link">Technical Lead</a>
                        </h4>

                        <div class="d-flex align-items-center">
                            <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                <img src="images/logos/salesforce.png" class="job-image me-3 img-fluid" alt="">

                                <p class="mb-0">Salesforce</p>
                            </div>

                            <a href="#" class="bi-bookmark ms-auto me-2">
                            </a>

                            <a href="#" class="bi-heart">
                            </a>
                        </div>

                        <div class="d-flex align-items-center">
                            <p class="job-location">
                                <i class="custom-icon bi-geo-alt me-1"></i>
                                Kuala, Malaysia
                            </p>

                            <p class="job-date">
                                <i class="custom-icon bi-clock me-1"></i>
                                10 hours ago
                            </p>
                        </div>

                        <div class="d-flex align-items-center border-top pt-3">
                            <p class="job-price mb-0">
                                <i class="custom-icon bi-cash me-1"></i>
                                $50k
                            </p>

                            <a href="{{ route("job_details") }}" class="custom-btn btn ms-auto">Apply now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="job-thumb job-thumb-box">
                    <div class="job-image-box-wrap">
                        <a href="job-details.html">
                            <img src="images/jobs/marketing-assistant.jpg" class="job-image img-fluid" alt="marketing assistant">
                        </a>

                        <div class="job-image-box-wrap-info d-flex align-items-center">
                            <p class="mb-0">
                                <a href="{{ route("job_listings") }}" class="badge badge-level">Senior</a>
                            </p>

                            <p class="mb-0">
                                <a href="{{ route("job_listings") }}" class="badge">Part Time</a>
                            </p>
                        </div>
                    </div>

                    <div class="job-body">
                        <h4 class="job-title">
                            <a href="{{ route("job_details") }}" class="job-title-link">Marketing Assistant</a>
                        </h4>

                        <div class="d-flex align-items-center">
                            <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                <img src="images/logos/spotify.png" class="job-image me-3 img-fluid" alt="">

                                <p class="mb-0">Spotify</p>
                            </div>

                            <a href="#" class="bi-bookmark ms-auto me-2">
                            </a>

                            <a href="#" class="bi-heart">
                            </a>
                        </div>

                        <div class="d-flex align-items-center">
                            <p class="job-location">
                                <i class="custom-icon bi-geo-alt me-1"></i>
                                California, USA
                            </p>

                            <p class="job-date">
                                <i class="custom-icon bi-clock me-1"></i>
                                8 days ago
                            </p>
                        </div>

                        <div class="d-flex align-items-center border-top pt-3">
                            <p class="job-price mb-0">
                                <i class="custom-icon bi-cash me-1"></i>
                                $20k
                            </p>

                            <a href="job-details.html" class="custom-btn btn ms-auto">Apply now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="job-thumb job-thumb-box">
                    <div class="job-image-box-wrap">
                        <a href="job-details.html">
                            <img src="images/jobs/coding-man.jpg" class="job-image img-fluid" alt="">
                        </a>

                        <div class="job-image-box-wrap-info d-flex align-items-center">
                            <p class="mb-0">
                                <a href="{{ route("job_listings") }}" class="badge badge-level">Junior</a>
                            </p>

                            <p class="mb-0">
                                <a href="job-listings.html" class="badge">Contract</a>
                            </p>
                        </div>
                    </div>

                    <div class="job-body">
                        <h4 class="job-title">
                            <a href="job-details.html" class="job-title-link">Programmer</a>
                        </h4>
                            
                        <div class="d-flex align-items-center">
                            <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                <img src="images/logos/twitter.png" class="job-image me-3 img-fluid" alt="">

                                <p class="mb-0">Twiter</p>
                            </div>

                            <a href="#" class="bi-bookmark ms-auto me-2">
                            </a>

                            <a href="#" class="bi-heart">
                            </a>
                        </div>

                        <div class="d-flex align-items-center">
                            <p class="job-location">
                                <i class="custom-icon bi-geo-alt me-1"></i>
                                California, USA
                            </p>

                            <p class="job-date">
                                <i class="custom-icon bi-clock me-1"></i>
                                23 hours ago
                            </p>
                        </div>

                        <div class="d-flex align-items-center border-top pt-3">
                            <p class="job-price mb-0">
                                <i class="custom-icon bi-cash me-1"></i>
                                $68k
                            </p>

                            <a href="job-details.html" class="custom-btn btn ms-auto">Apply now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="job-thumb job-thumb-box">
                    <div class="job-image-box-wrap">
                        <a href="job-details.html">
                            <img src="images/jobs/pretty-blogger-posing-cozy-apartment.jpg" class="job-image img-fluid" alt="">
                        </a>

                        <div class="job-image-box-wrap-info d-flex align-items-center">
                            <p class="mb-0">
                                <a href="job-listings.html" class="badge badge-level">Junior</a>
                            </p>

                            <p class="mb-0">
                                <a href="job-listings.html" class="badge">Contract</a>
                            </p>
                        </div>
                    </div>

                    <div class="job-body">
                        <h4 class="job-title">
                            <a href="job-details.html" class="job-title-link">HR Manager</a>
                        </h4>

                        <div class="d-flex align-items-center">
                            <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                <img src="images/logos/yelp.png" class="job-image me-3 img-fluid" alt="">

                                <p class="mb-0">Yelp</p>
                            </div>

                            <a href="#" class="bi-bookmark ms-auto me-2">
                            </a>

                            <a href="#" class="bi-heart">
                            </a>
                        </div>

                        <div class="d-flex align-items-center">
                            <p class="job-location">
                                <i class="custom-icon bi-geo-alt me-1"></i>
                                California, USA
                            </p>

                            <p class="job-date">
                                <i class="custom-icon bi-clock me-1"></i>
                                15 hours ago
                            </p>
                        </div>

                        <div class="d-flex align-items-center border-top pt-3">
                            <p class="job-price mb-0">
                                <i class="custom-icon bi-cash me-1"></i>
                                $35k - 45k
                            </p>

                            <a href="job-details.html" class="custom-btn btn ms-auto">Apply now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="job-thumb job-thumb-box">
                    <div class="job-image-box-wrap">
                        <a href="job-details.html">
                            <img src="images/jobs/paper-analysis.jpg" class="job-image img-fluid" alt="">
                        </a>

                        <div class="job-image-box-wrap-info d-flex align-items-center">
                            <p class="mb-0">
                                <a href="job-listings.html" class="badge badge-level">Junior</a>
                            </p>

                            <p class="mb-0">
                                <a href="job-listings.html" class="badge">Contract</a>
                            </p>
                        </div>
                    </div>

                    <div class="job-body">
                        <h4 class="job-title">
                            <a href="job-details.html" class="job-title-link">Sales Representative</a>
                        </h4>
                            
                        <div class="d-flex align-items-center">
                            <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                <img src="images/logos/paypal.png" class="job-image me-3 img-fluid" alt="">

                                <p class="mb-0">Paypal</p>
                            </div>

                            <a href="#" class="bi-bookmark ms-auto me-2">
                            </a>

                            <a href="#" class="bi-heart">
                            </a>
                        </div>

                        <div class="d-flex align-items-center">
                            <p class="job-location">
                                <i class="custom-icon bi-geo-alt me-1"></i>
                                Bangkok, Thailand
                            </p>

                            <p class="job-date">
                                <i class="custom-icon bi-clock me-1"></i>
                                30 mins ago
                            </p>
                        </div>

                        <div class="d-flex align-items-center border-top pt-3">
                            <p class="job-price mb-0">
                                <i class="custom-icon bi-cash me-1"></i>
                                $20k - 35k
                            </p>

                            <a href="job-details.html" class="custom-btn btn ms-auto">Apply now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="job-thumb job-thumb-box">
                    <div class="job-image-box-wrap">
                        <a href="job-details.html">
                            <img src="images/jobs/logo-designer-working-computer-desktop.jpg" class="job-image img-fluid" alt="">
                        </a>

                        <div class="job-image-box-wrap-info d-flex align-items-center">
                            <p class="mb-0">
                                <a href="job-listings.html" class="badge badge-level">Mid Level</a>
                            </p>

                            <p class="mb-0">
                                <a href="job-listings.html" class="badge">Full Time</a>
                            </p>
                        </div>
                    </div>

                    <div class="job-body">
                        <h4 class="job-title">
                            <a href="job-details.html" class="job-title-link">Graphic Designer</a>
                        </h4>
                            
                        <div class="d-flex align-items-center">
                            <div class="job-image-wrap d-flex align-items-center bg-white shadow-lg mt-2 mb-4">
                                <img src="images/logos/envato.png" class="job-image me-3 img-fluid" alt="">

                                <p class="mb-0">Envato</p>
                            </div>

                            <a href="#" class="bi-bookmark ms-auto me-2">
                            </a>

                            <a href="#" class="bi-heart">
                            </a>
                        </div>

                        <div class="d-flex align-items-center">
                            <p class="job-location">
                                <i class="custom-icon bi-geo-alt me-1"></i>
                                Melbourne, Australia
                            </p>

                            <p class="job-date">
                                <i class="custom-icon bi-clock me-1"></i>
                                2 days ago
                            </p>
                        </div>

                        <div class="d-flex align-items-center border-top pt-3">
                            <p class="job-price mb-0">
                                <i class="custom-icon bi-cash me-1"></i>
                                $20k
                            </p>

                            <a href="{{ route("job_details") }}" class="custom-btn btn ms-auto">Apply now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 recent-jobs-bottom d-flex ms-auto my-4">
                <a href="job-listings.html" class="custom-btn btn ms-lg-auto">Browse Job Listings</a>
            </div>

        </div>
    </div>
</section>


<section class="reviews-section section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <h2 class="text-center mb-5">Happy customers</h2>

                <div class="owl-carousel owl-theme reviews-carousel">
                    <div class="reviews-thumb">
                    
                        <div class="reviews-info d-flex align-items-center">
                            <img src="images/avatar/portrait-charming-middle-aged-attractive-woman-with-blonde-hair.jpg" class="avatar-image img-fluid" alt="">

                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                <p class="mb-0">
                                    <strong>Susan L</strong>
                                    <small>Product Manager</small>
                                </p>

                                <div class="reviews-icons">
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                </div>
                            </div>
                        </div>

                        <div class="reviews-body">
                            <img src="images/left-quote.png" class="quote-icon img-fluid" alt="">

                            <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                        </div>
                    </div>

                    <div class="reviews-thumb">
                        <div class="reviews-info d-flex align-items-center">
                            <img src="images/avatar/medium-shot-smiley-senior-man.jpg" class="avatar-image img-fluid" alt="">

                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                <p class="mb-0">
                                    <strong>Jack</strong>
                                    <small>Technical Lead</small>
                                </p>

                                <div class="reviews-icons">
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star"></i>
                                    <i class="bi-star"></i>
                                </div>
                            </div>
                        </div>

                        <div class="reviews-body">
                            <img src="images/left-quote.png" class="quote-icon img-fluid" alt="">

                            <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                        </div>
                    </div>

                    <div class="reviews-thumb">

                        <div class="reviews-info d-flex align-items-center">
                            <img src="images/avatar/portrait-beautiful-young-woman.jpg" class="avatar-image img-fluid" alt="">

                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                <p class="mb-0">
                                    <strong>Haley</strong>
                                    <small>Sales & Marketing</small>
                                </p>

                                <div class="reviews-icons">
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                </div>
                            </div>
                        </div>

                        <div class="reviews-body">
                            <img src="images/left-quote.png" class="quote-icon img-fluid" alt="">

                            <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                        </div>
                    </div>

                    <div class="reviews-thumb">
                        <div class="reviews-info d-flex align-items-center">
                            <img src="images/avatar/blond-man-happy-expression.jpg" class="avatar-image img-fluid" alt="">

                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                <p class="mb-0">
                                    <strong>Jackson</strong>
                                    <small>Dev Ops</small>
                                </p>

                                <div class="reviews-icons">
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star"></i>
                                    <i class="bi-star"></i>
                                </div>
                            </div>
                        </div>

                        <div class="reviews-body">
                            <img src="images/left-quote.png" class="quote-icon img-fluid" alt="">

                            <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                        </div>
                    </div>

                    <div class="reviews-thumb">
                        <div class="reviews-info d-flex align-items-center">
                            <img src="images/avatar/university-study-abroad-lifestyle-concept.jpg" class="avatar-image img-fluid" alt="">

                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100 ms-3">
                                <p class="mb-0">
                                    <strong>Kevin</strong>
                                    <small>Internship</small>
                                </p>

                                <div class="reviews-icons">
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                </div>
                            </div>
                        </div>

                        <div class="reviews-body">
                            <img src="images/left-quote.png" class="quote-icon img-fluid" alt="">

                            <h4 class="reviews-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="cta-section">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-10">
                <h2 class="text-white mb-2">Over 10k opening jobs</h2>

                <p class="text-white">If you are looking for free HTML templates, you may visit Tooplate website. If you need a collection of free templates, you can visit Too CSS website.</p>
            </div>

            <div class="col-lg-4 col-12 ms-auto">
                <div class="custom-border-btn-wrap d-flex align-items-center mt-lg-4 mt-2">
                    <a href="#" class="custom-btn custom-border-btn btn me-4">Create an account</a>

                    <a href="#" class="custom-link">Post a job</a>
                </div>
            </div>

        </div>
    </div>
</section>
</main>
@endsection
                                