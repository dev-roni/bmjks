    <!-- Footer -->
<footer class="bg-dark text-white py-5">
  <div class="container">
    <div class="row g-4 text-center text-md-start">
      
      <!-- যোগাযোগ -->
      <div class="col-12 col-md-6 col-lg-4">
        <h5  class="text-accent mb-3">যোগাযোগ</h5>
        <div class="mb-2">
          <i class="fas fa-map-marker-alt text-accent me-2"></i>
          <span>ঠিকানা দিন</span>
        </div>
        <div class="mb-2">
          <i  class="fas fa-phone text-accent me-2"></i>
          <span>+৮৮০-২-৯৫৫৫৫৫৫</span>
        </div>
        <div class="mb-2">
          <i class="fas fa-envelope text-accent me-2"></i>
          <span>info@gov.bd</span>
        </div>
      </div>

      <!-- গুরুত্বপূর্ণ লিংক -->
      <div class="col-12 col-md-6 col-lg-4">
        <h5  class="text-accent mb-3">গুরুত্বপূর্ণ লিংক</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#" class="text-white text-decoration-none">কার্যালয়</a></li>
          <li class="mb-2"><a href="#" class="text-white text-decoration-none">কার্যালয়</a></li>
          <li class="mb-2"><a href="#" class="text-white text-decoration-none">সংসদ</a></li>
        </ul>
      </div>

		<!-- সামাজিক মাধ্যম -->
		<div class="col-12 col-lg-4">
		  <h5 class="text-accent mb-3">সামাজিক মাধ্যম</h5>
		  <div class="d-flex flex-nowrap overflow-auto justify-content-center justify-content-lg-start gap-2 p-2 ">
			<a href="#" class="btn btn-outline-light rounded-circle flex-shrink-0 ">
			  <i class="fab fa-facebook-f"></i>
			</a>
			<a href="#" class="btn btn-outline-light rounded-circle flex-shrink-0">
			  <i class="fab fa-twitter"></i>
			</a>
			<a href="#" class="btn btn-outline-light rounded-circle flex-shrink-0">
			  <i class="fab fa-youtube"></i>
			</a>
			<a href="#" class="btn btn-outline-light rounded-circle flex-shrink-0">
			  <i class="fab fa-instagram"></i>
			</a>
		  </div>
		</div>


    </div>

    <hr class="my-4">
    <div class="text-center">
      <p class="mb-0 text-muted">&copy; ২০২৪ বাংলাদেশ সরকার। সর্বস্বত্ব সংরক্ষিত।</p>
    </div>
  </div>
</footer>

<!-- Font Awesome (Social Icons) -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


	
<!-- Bootstrap Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title">What is Lorem Ipsum</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      
      <div class="modal-body">
        <!-- 👉 এখানে আপনার সেকশন কপি করবেন -->
        <section id="mySection">
          <h3 class="text-success">What is Lorem Ipsum</h3>
          <p>
			  Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
			  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
			  when an unknown printer took a galley of type and scrambled it to make a type 
			  specimen book. It has survived not only five centuries, but also the leap into 
			  electronic typesetting, remaining essentially unchanged. It was popularised in 
			  the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
			  and more recently with desktop publishing software like Aldus PageMaker 
			  including versions of Lorem Ipsum.
		  </p>
        </section>
      </div>
      
    </div>
  </div>
</div>
	
<!-- bootstrap modal for popup show এখানে জে এস ফাইলে লিঙ্ক দিতে হবে -->

	<div class="modal fade" id="pageModal" tabindex="-1" aria-hidden="true">
	  <div class="modal-dialog modal-xl"> <!-- modal-xl মানে extra large -->
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title">পেজ প্রিভিউ</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
		  </div>
		  <div class="modal-body p-0" style="height: 80vh;">
			<!-- এখানে iframe এ লোড হবে -->
			<iframe id="popupFrame" src="" style="width:100%; height:100%; border:none;"></iframe>
		  </div>
		</div>
	  </div>
	</div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
	<script src="custom.js"></script>

    <script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html> 