@extends('frontend.layouts.master_layout')
@section('content')
<!-- Hero Section -->
    <div id="blogCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#blogCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#blogCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#blogCarousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <!-- ক্যারousel আইটেম 1 -->
            <div class="carousel-item ">
				<div class="position-relative d-inline-block w-100">
				  <!-- ছবি -->
				  <img src="{{asset('assets/images/carosel1.jpg')}}" class="d-block w-100 img-fluid" alt="প্রযুক্তি ব্লগ">

				  <!-- গ্রেডিং overlay -->
				  <div class="position-absolute top-0 start-0 end-0 bottom-0"
					   style="background: linear-gradient(45deg, rgba(26,155,159,0.1), rgba(242,193,78,0.1));">
				  </div>
				</div>

                
                <div class="carousel-caption">
                    <h2>আমার মানুর কুমেই</h2>
                    <p>আমার মানুর কুমেইর মাঝে হাবিত্ত জিংপা হান দূর্গা পূজা</p>
                </div>
            </div>
            
            <!-- ক্যারousel আইটেম 2 -->
            <div class="carousel-item">
				<div class="position-relative d-inline-block w-100">
				  <!-- ছবি -->
				  <img src="{{asset('assets/images/carosel2.jpg')}}" class="d-block w-100 img-fluid" alt="প্রযুক্তি ব্লগ">

				  <!-- গ্রেডিং overlay -->
				  <div class="position-absolute top-0 start-0 end-0 bottom-0"
					   style="background: linear-gradient(45deg, rgba(26,155,159,0.1), rgba(242,193,78,0.1));">
				  </div>
				</div>
                <div class="carousel-caption">
                    <h2>আমার মানুর এলা</h2>
                    <p>নুংশি নুংশি এলার মাঝে আমার এলা জবরদস্ত</p>
                </div>
            </div>
            
            <!-- ক্যারousel আইটেম 3 -->
            <div class="carousel-item active">
                <div class="position-relative d-inline-block w-100">
				  <!-- ছবি -->
				  <img src="{{asset('assets/images/carosel3.jpg')}}" class="d-block w-100 img-fluid" alt="প্রযুক্তি ব্লগ">

				  <!-- গ্রেডিং overlay -->
				  <div class="position-absolute top-0 start-0 end-0 bottom-0"
					   style="background: linear-gradient(45deg, rgba(26,155,159,0.1), rgba(242,193,78,0.1));">
				  </div>
				</div>
                <div class="carousel-caption">
                    <h2>বামজুকসর ইয়ারি</h2>
                    <p>মনিপুরি যুবকল্যান সমিতি 40 বছর আগে ফংইসিলা</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#blogCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">পূর্ববর্তী</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#blogCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">পরবর্তী</span>
        </button>
    </div>


      <!-- সেবা বিভাগ (স্লাইডার) -->
        <section class="service-section mt-4">
            <div class="container ">
                <div class="text-center ">
                    <h3 class="display-5 fw-bold">সেবা সমূহ</h3>
                    <div class="border-bottom border-3 mx-auto" style="width: 80px; background-color:#1A9B9F;"></div>
                </div>
                
                <div class="services-container">
                    <button class="nav-btn prev">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    
                    <div class="services-track">
                        <!-- সার্ভিস কার্ডগুলি -->
                        <div class="service-item">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="service-icon">
                                        <i class="fas fa-id-card fa-2x text-white"></i>
                                    </div>
                                    <h5 class="card-title fw-bold">বামজুকস সদস্য</h5>
                                    <p class="card-text text-muted">নতুন সদস্য আবেদন ও নবায়ন</p>
                                    <a href="#" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#myModal">👉 সেবা নিন</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="service-item">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="service-icon">
                                        <i class="fas fa-passport fa-2x text-white"></i>
                                    </div>
                                    <h5 class="card-title fw-bold">উপজাতি সনদ</h5>
                                    <p class="card-text text-muted">নতুন উপজাতি সনদ আবেদন</p>
                                    <a href="#" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#myModal">👉 সেবা নিন</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="service-item">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="service-icon">
                                        <i class="fas fa-car fa-2x text-white"></i>
                                    </div>
                                    <h5 class="card-title fw-bold">আর্থিক প্রনোদনা</h5>
                                    <p class="card-text text-muted">টাংগা লাগলে মাতেই</p>
                                    <a href="#" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#myModal">👉 সেবা নিন</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="service-item">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="service-icon">
                                        <i class="fas fa-graduation-cap fa-2x text-white"></i>
                                    </div>
                                    <h5 class="card-title fw-bold">অভিযোগ</h5>
                                    <p class="card-text text-muted">তিক সওয়িলে মাতেই</p>
                                    <a href="#" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#myModal">
                                        👉 সেকশন দেখুন
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="service-item">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="service-icon">
                                        <i class="fas fa-book fa-2x text-white"></i>
                                    </div>
                                    <h5 class="card-title fw-bold">শিক্ষা বৃত্তি</h5>
                                    <p class="card-text text-muted">শিক্ষা বৃত্তির জন্য আবেদন</p>
                                    <a href="#" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#myModal">👉 সেবা নিন</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="service-item">
                            <div class="card service-card">
                                <div class="card-body">
                                    <div class="service-icon">
                                        <i class="fas fa-home fa-2x text-white"></i>
                                    </div>
                                    <h5 class="card-title fw-bold">বাসস্থান সহায়তা</h5>
                                    <p class="card-text text-muted">বাসস্থান সংক্রান্ত সহায়তা</p>
                                    <a href="#" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#myModal">👉 সেবা নিন</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <button class="nav-btn next">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </section>
        
    <!-- News & Updates -->
    <section class="mb-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <h3 class="display-6 fw-bold text-primary mb-4">সাম্প্রতিক কার্যক্রম সমূহ</h3>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100 news-card">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-start">
                                        <div class="news-date me-3 text-center">
                                            <div class="bg-primary text-white rounded-top p-2">
                                                <div class="fw-bold">১৫</div>
                                                <small>ডিসে</small>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="fw-bold mb-2">২০২৪ সালের বাজেট ঘোষণা</h6>
                                            <p class="text-muted small mb-0">আগামী অর্থবছরের বাজেট ঘোষণা করা হয়েছে</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100 news-card">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-start">
                                        <div class="news-date me-3 text-center">
                                            <div class="bg-primary text-white rounded-top p-2">
                                                <div class="fw-bold">১২</div>
                                                <small>ডিসে</small>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="fw-bold mb-2">নতুন করোনা নিয়মাবলী</h6>
                                            <p class="text-muted small mb-0">করোনা মহামারি নিয়ন্ত্রণে নতুন নির্দেশনা</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100 news-card">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-start">
                                        <div class="news-date me-3 text-center">
                                            <div class="bg-primary text-white rounded-top p-2">
                                                <div class="fw-bold">১০</div>
                                                <small>ডিসে</small>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="fw-bold mb-2">শিক্ষা প্রতিষ্ঠান খোলার নির্দেশ</h6>
                                            <p class="text-muted small mb-0">সকল শিক্ষা প্রতিষ্ঠান খোলার নির্দেশনা জারি</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100 news-card">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-start">
                                        <div class="news-date me-3 text-center">
                                            <div class="bg-primary text-white rounded-top p-2">
                                                <div class="fw-bold">০৮</div>
                                                <small>ডিসে</small>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class="fw-bold mb-2">ডিজিটাল সেবা সম্প্রসারণ</h6>
                                            <p class="text-muted small mb-0">নতুন ডিজিটাল সেবা চালু করা হয়েছে</p>
                                        </div>
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