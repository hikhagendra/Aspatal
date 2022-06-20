<?php

// @package aspataltheme

get_header(); ?>

<!-- Hero Slider -->
<div id="aspatal-hero-slider" class="carousel slide aspatal-hero-slider" data-bs-ride="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo get_template_directory_uri() . '/assets/images/Slider 1.png'; ?>" class="d-block w-100" alt="...">
      <div class="carousel-overlay"></div>
      <div class="carousel-caption d-none d-md-block text-start">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
        <button type="button" class="btn btn-primary rounded-pill px-3">
          <a href="#">Make an Appointment</a>
        </button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri() . '/assets/images/Slider 2.png'; ?>" class="d-block w-100" alt="...">
      <div class="carousel-overlay"></div>
      <div class="carousel-caption d-none d-md-block text-start">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
        <button type="button" class="btn btn-primary rounded-pill px-3">
          <a href="#">Make an Appointment</a>
        </button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri() . '/assets/images/Slider 3.png'; ?>" class="d-block w-100" alt="...">
      <div class="carousel-overlay"></div>
      <div class="carousel-caption d-none d-md-block text-start">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
        <button type="button" class="btn btn-primary rounded-pill px-3">
          <a href="#">Make an Appointment</a>
        </button>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#aspatal-hero-slider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#aspatal-hero-slider" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Hospital Opening Time -->
<div class="aspatal-business-hour p-5">
  <div class="row">
    <div class="col-7 left-col pe-5">
      <h2 class="py-2">Caring for the growing needs of our community.</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et amet magnam eaque facere dolor pariatur possimus iusto perspiciatis, nam, hic vel optio expedita eos illo ipsum corrupti. Iusto dolore ex quae enim cupiditate esse animi? Modi beatae quaerat obcaecati dignissimos. Dolore maxime sit facere inventore aspernatur harum sapiente adipisci iste!</p>
      <ul>
        <li>Experienced doctors in every specialty</li>
        <li>Simplify a company's legal project management approach</li>
        <li>Satisfied patients and an unparalleled experience</li>
      </ul>
    </div>
    <div class="col-5 right-col ps-5">
      <h4>Working Hours</h4>
      <p>Caring for patients, every day of the week.</p>
      <table>
        <tr>
          <td>Monday-Friday</td>
          <td>07:00 - 24:00</td>
        </tr>
        <tr>
          <td>Saturday</td>
          <td>09:00 - 24:00</td>
        </tr>
        <tr>
          <td>Sunday</td>
          <td>09:00 - 20:00</td>
        </tr>
      </table>

      <button type="button" class="btn btn-primary">
        <i class="bi bi-telephone"></i>
        Emergency Call: 0806 4807 777
      </button>
    </div>
  </div>
</div>

<!-- Hospital Departments -->
<div class="aspatal-departments p-5">
  <div class="section-header row">
    <div class="col-9 col-left">
      <h2>Departments</h2>
      <p>Highly skilled doctors awarded and certified by the most famous medical research universities around the globe, experienced by the most complicated cases they are here to help our patients.</p>
    </div>
    <div class="col-3 col-right text-end">
      <button class="btn btn-primary rounded-pill px-4">
        <a href="<?php echo get_site_url(); ?>/department/">
          All Departments <i class="bi bi-chevron-double-right"></i>
        </a>
      </button>
    </div>
  </div>
  <div class="row departments-list">
    <?php
      $args =  array(
        'post_type'       =>  'department',
        'post_per_page'   =>  4
      );
      $loop = new WP_Query( $args );

      if ( $loop->have_posts() ) :
        while( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="col-3">
            <a href="<?php echo get_the_permalink(); ?>">
              <div class="card">
                <div class="ratio ratio-16x9">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" class="card-img-top">
                </div>
      
                <div class="card-body">
                  <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                  <p class="card-text"><?php echo get_the_excerpt(); ?></p>
                </div>
              </div>
            </a>
          </div>
        <?php endwhile;
      endif;
    ?>
    
  </div>
</div>

<!-- Medical Services -->
<div class="aspatal-services px-5 pt-5 row">
  <div class="col-5 col-left px-5">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/doctor-home.png'; ?>" class="w-100" alt="Doctor">
  </div>
  <div class="col-7 col-right">
    <h3 class="section-title">Medical services</h3>
    <p class="section-desc">Our healthcare professionals are dedicated to providing the best possible care for patients, and are supported by complete radiology and imaging services provided at Kalium.</p>
    <div class="services">
      <div class="row">
        <div class="col-6">
          <div class="card mb-3 border-0">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/stethoscope.png'; ?>" class="img-fluid rounded-start" alt="Service Icon">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Check ups</h5>
                  <p class="card-text">Regular check-ups elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card mb-3 border-0">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/first-aid-kit.png'; ?>" class="img-fluid rounded-start" alt="Service Icon">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Medical Advices</h5>
                  <p class="card-text">Need advices for your health, consult any of our doctors by visiting our clinic.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card mb-3 border-0">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/emergency-call.png'; ?>" class="img-fluid rounded-start" alt="Service Icon">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">24/7 Emergency</h5>
                  <p class="card-text">We are available for you everyday throughout the year.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card mb-3 border-0">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/stretcher.png'; ?>" class="img-fluid rounded-start" alt="Service Icon">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">New Facilities</h5>
                  <p class="card-text">Our clinic is equipped with new high technology facilities.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card mb-3 border-0">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/doctor.png'; ?>" class="img-fluid rounded-start" alt="Service Icon">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Professional Doctors</h5>
                  <p class="card-text">Kalium Clinic doctors are among the best doctors in their department.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card mb-3 border-0">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/wheelchair.png'; ?>" class="img-fluid rounded-start" alt="Service Icon">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Patient Care</h5>
                  <p class="card-text">Our helpful staff takes care of each patient offering personal nurse.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Hospital Departments -->
<div class="aspatal-doctors p-5">
  <div class="section-header row">
    <div class="col-9 col-left">
      <h2>Doctors</h2>
      <p>Highly skilled doctors awarded and certified by the most famous medical research universities around the globe, experienced by the most complicated cases they are here to help our patients.</p>
    </div>
    <div class="col-3 col-right text-end">
      <button class="btn btn-primary rounded-pill px-4">
        <a href="<?php echo get_site_url(); ?>/doctor/">
          All Doctors <i class="bi bi-chevron-double-right"></i>
        </a>
      </button>
    </div>
  </div>
  <div class="row doctors-list">
    <?php
      $args =  array(
        'post_type'       =>  'doctor',
        'post_per_page'   =>  4
      );
      $loop = new WP_Query( $args );

      if ( $loop->have_posts() ) :
        while( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="col-3">
            <a href="<?php echo get_the_permalink(); ?>">
              <div class="card">
                <div class="ratio ratio-3x4">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" class="card-img-top">
                </div>
      
                <div class="card-body">
                  <h5 class="card-title"><?php echo get_the_title(); ?></h5>
                  <p class="card-text"><?php echo get_post_meta( get_the_ID(), '_doctor_position_value_key', true ); ?></p>
                </div>
              </div>
            </a>
          </div>
        <?php endwhile;
      endif;
    ?>
    
  </div>
</div>

<?php get_footer(); ?>