@extends('frontend.layouts.master_layout')
@section('content') 
<!-- About Section -->
  <section class="py-5 ">
    <div class="container">
		<section class="page-header ">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<h1 class="display-4 fw-bold ">আমাদের সম্পর্কে</h1>
						<div class="border-bottom border-white border-3 mx-auto" style="width: 100px; background-color:#1A9B9F;"></div>
						<p class="mt-2 lead">আমাদের ইতিহাস, লক্ষ্য এবং কার্যক্রম</p>
					</div>
				</div>
			</div>
		</section>

      <div class="row g-5 align-items-center">
		<div class="col-lg-6">
          <h4 class="fw-bold mb-3">সমিতির কার্যক্রম</h4>
          <p class="text-muted">
            মণিপুরী যুব কল্যাণ সমিতি একটি সামাজিক সংগঠন, যার মূল লক্ষ্য তরুণদের উন্নয়ন, শিক্ষা, সাংস্কৃতিক কর্মকাণ্ড
            ও সমাজকল্যাণে অবদান রাখা। প্রতিষ্ঠালগ্ন থেকেই আমরা শিক্ষা বিস্তার, স্বাস্থ্যসেবা, সাংস্কৃতিক কার্যক্রম 
            ও ডিজিটাল সেবা প্রদানে কাজ করে যাচ্ছি।
          </p>
          <p class="text-muted">
            আমাদের কার্যক্রমের মাধ্যমে তরুণ সমাজকে দক্ষ করে গড়ে তোলা এবং সমাজে ইতিবাচক পরিবর্তন আনা আমাদের মূল উদ্দেশ্য।
          </p>
        </div>
		
        <div class="col-lg-6">
          <h4 class="fw-bold mb-3">আমাদের পরিচিতি</h4>
          <p class="text-muted">
            মণিপুরী যুব কল্যাণ সমিতি একটি সামাজিক সংগঠন, যার মূল লক্ষ্য তরুণদের উন্নয়ন, শিক্ষা, সাংস্কৃতিক কর্মকাণ্ড
            ও সমাজকল্যাণে অবদান রাখা। প্রতিষ্ঠালগ্ন থেকেই আমরা শিক্ষা বিস্তার, স্বাস্থ্যসেবা, সাংস্কৃতিক কার্যক্রম 
            ও ডিজিটাল সেবা প্রদানে কাজ করে যাচ্ছি।
          </p>
          <p class="text-muted">
            আমাদের কার্যক্রমের মাধ্যমে তরুণ সমাজকে দক্ষ করে গড়ে তোলা এবং সমাজে ইতিবাচক পরিবর্তন আনা আমাদের মূল উদ্দেশ্য।
          </p>
        </div>
      </div>

      <!-- Mission & Vision -->
      <div class="row g-4 mt-5">
        <div class="col-md-6">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body p-4">
              <div class="d-flex align-items-center mb-3">
                <i class="fas fa-bullseye text-primary fa-2x me-3"></i>
                <h5 class="fw-bold mb-0">আমাদের লক্ষ্য</h5>
              </div>
              <p class="text-muted mb-0">
                তরুণদের উন্নয়ন, শিক্ষা বিস্তার, কর্মসংস্থান সৃষ্টি, সাংস্কৃতিক ঐতিহ্য সংরক্ষণ এবং
                সমাজকল্যাণমূলক কর্মকাণ্ডে সক্রিয় ভূমিকা পালন করা।
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body p-4">
              <div class="d-flex align-items-center mb-3">
                <i class="fas fa-eye text-primary fa-2x me-3"></i>
                <h5 class="fw-bold mb-0">আমাদের ভিশন</h5>
              </div>
              <p class="text-muted mb-0">
                একটি উন্নত, শিক্ষিত ও সমৃদ্ধ সমাজ গঠন করা যেখানে প্রতিটি তরুণ নিজেকে দক্ষ ও সমাজের জন্য 
                অবদান রাখতে সক্ষম হবে।
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Core Values -->
      <div class="mt-5">
        <h4 class="fw-bold mb-4 text-center">আমাদের মূলনীতি</h4>
        <div class="row g-4">
          <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 text-center p-4">
              <i class="fas fa-handshake fa-2x text-primary mb-3"></i>
              <h6 class="fw-bold">সহযোগিতা</h6>
              <p class="text-muted small">সকল সদস্যদের মধ্যে পারস্পরিক সহযোগিতা নিশ্চিত করা।</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 text-center p-4">
              <i class="fas fa-lightbulb fa-2x text-primary mb-3"></i>
              <h6 class="fw-bold">সৃজনশীলতা</h6>
              <p class="text-muted small">নতুন ধারণা ও উদ্ভাবনী কার্যক্রমে তরুণদের উৎসাহিত করা।</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 text-center p-4">
              <i class="fas fa-users fa-2x text-primary mb-3"></i>
              <h6 class="fw-bold">অন্তর্ভুক্তি</h6>
              <p class="text-muted small">সমাজের সকল শ্রেণির মানুষের অংশগ্রহণ নিশ্চিত করা।</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
@endsection