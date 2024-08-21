<!-- Contact Section -->
 <style>
  /* Contact Section */
#contact {
  padding: 60px 0;
  background-color: #red;
}
.container
{
  text-align: center;
  margin-bottom: 40px;
  margin-left: 120px;
  margin-right: 120px;
}

.section-title {
  text-align: center;
  margin-bottom: 40px;
}

.section-title h2 {
  font-size: 32px;
  margin-bottom: 10px;
}

.section-title p {
  font-size: 18px;
  color: #666;
}

/* Info Items */
.info-item {
  background: skyblue;
  border: 1px solid #ddd;
  border-radius: 8px;
  padding: 20px;
  text-align: center;
}

.info-item i {
  font-size: 32px;
  color: #007bff;
  margin-bottom: 10px;
}

.info-item h3 {
  font-size: 20px;
  margin-bottom: 10px;
}

.info-item p {
  font-size: 16px;
  color: #666;
}

/* Contact Form */
.php-email-form {
  background: #fff;
  border: 1px solid #ddd;
  border-radius: 8px;
  padding: 20px;
}

.php-email-form .form-control {
  border-radius: 8px;
  padding: 15px;
  border: 1px solid #ddd;
  font-size: 16px;
  margin-bottom: 20px;
}

.php-email-form .form-control:focus {
  border-color: #007bff;
  box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
}

.php-email-form button {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 15px 30px;
  border-radius: 5px;
  font-size: 16px;
  text-transform: uppercase;
  cursor: pointer;
}

.php-email-form button:hover {
  background-color: #0056b3;
}

/* Response Messages */
.loading,
.error-message,
.sent-message {
  display: none;
  font-size: 16px;
}

.text-center {
  text-align: center;
}

/* Responsive Design */
@media (max-width: 768px) {
  .info-item {
    padding: 15px;
  }

  .php-email-form .form-control {
    font-size: 14px;
  }

  .php-email-form button {
    padding: 10px 20px;
    font-size: 14px;
  }
}

 </style>
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-6">

        <div class="row gy-4">
          <div class="col-md-6">
            <div class="info-item" data-aos="fade" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <p>A108 Adam Street</p>
              <p>New York, NY 535022</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item" data-aos="fade" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
              <p>+1 6678 254445 41</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item" data-aos="fade" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>info@example.com</p>
              <p>contact@example.com</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item" data-aos="fade" data-aos-delay="500">
              <i class="bi bi-clock"></i>
              <h3>Open Hours</h3>
              <p>Monday - Friday</p>
              <p>9:00AM - 05:00PM</p>
            </div>
          </div><!-- End Info Item -->

        </div>

      </div>

      
            </div>

          </div>
        </form>
      </div><!-- End Contact Form -->

    </div>

  </div>
  @include('layouts.usr')

</section><!-- /Contact Section -->