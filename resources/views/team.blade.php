<!-- Team Section -->

<style>
  /* Team Section */
#team {
  position: relative;
  padding: 60px 0;
  background-color: #f7f7f7; /* Light background for the section */
}

/* Section Title Styles */
#team .section-title {
  text-align: center;
  margin-bottom: 40px;
}

#team .section-title h2 {
  font-size: 36px;
  font-weight: 700;
  color: #333; /* Dark text color for readability */
}

#team .section-title p {
  font-size: 16px;
  color: #555; /* Slightly lighter color for the subtitle */
}

/* Team Members */
.member {
  text-align: center;
  border-radius: 10px;
  overflow: hidden;
  background: #fff; /* White background for each member card */
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s, box-shadow 0.3s;
}

.member:hover {
  transform: translateY(-10px); /* Lift effect on hover */
  box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2); /* Enhanced shadow on hover */
}

.member-img {
  overflow: hidden;
}

.member-img img {
  display: block;
  width: 70%;
  height: auto;
  transition: transform 0.3s;
}

.member:hover .member-img img {
  transform: scale(1.05); /* Slight zoom effect on hover */
}

.member-info {
  padding: 20px;
}

.member-info h4 {
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 10px;
  color: #333;
}

.member-info span {
  display: block;
  font-size: 16px;
  color: #007bff; /* Primary color for roles */
  margin-bottom: 10px;
}

.member-info p {
  font-size: 14px;
  line-height: 1.5;
  color: #666; /* Slightly lighter color for the description */
}

/* Responsive Design */
@media (max-width: 992px) {
  #team .section-title h2 {
    font-size: 30px;
  }

  #team .section-title p {
    font-size: 14px;
  }

  .member-info h4 {
    font-size: 18px;
  }

  .member-info span {
    font-size: 14px;
  }

  .member-info p {
    font-size: 12px;
  }
  .col-lg-4 col-md-6 member
  {
    align: center;
    margin-left: 20px;
    margin-right:40px;
  }
}

</style>
<section id="team" class="team section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Team</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container" style=align-center; width=40%;>

    <div class="row gy-5">

      <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="10" >
        <div class="member-img">
          <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
      
        </div>
        <div class="member-info text-center">
          <h4>Walter White</h4>
          <span>Chief Executive Officer</span>
          <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio dire flow</p>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
        <div class="member-img">
          <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
      
        </div>
        <div class="member-info text-center">
          <h4>Maksud ali Khan</h4>
          <span>Product Manager</span>
          <p>Our Maksad Is to Make ur Life easier No need to stay in traffice we are active for 24hrs contact us</p>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
        <div class="member-img">
          <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
        </div>
        <div class="member-info text-center">
          <h4>Harisankar Sah</h4>
          <span>CTO</span>
          <p>We are with You lets grow together in Japan</p>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
        <div class="member-img">
          <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
        </div>
        <div class="member-info text-center">
          <h4>Narendra pal</h4>
          <span>Accountant</span>
          <p> we are only supposed to take ur money after your visa get garanted</p>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
        <div class="member-img">
          <img src="assets/img/team/team-5.jpg" class="img-fluid" alt="">
       
        </div>
        <div class="member-info text-center">
          <h4>Brian Doe</h4>
          <span>Marketing</span>
          <p>Qui consequuntur quos accusamus magnam quo est molestiae eius laboriosam sunt doloribus quia impedit laborum velit</p>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
        <div class="member-img">
          <img src="assets/img/team/team-6.jpg" class="img-fluid" alt="">
          
        </div>
        <div class="member-info text-center">
          <h4>Josepha Palas</h4>
          <span>Operation</span>
          <p>Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit eligendi cupiditate vel</p>
        </div>
      </div><!-- End Team Member -->
      @include('layouts.usr')

    </div>

  </div>

</section><!-- /Team Section -->