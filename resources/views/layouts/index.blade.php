@extends('layouts.app')

@section('content')
<main id="main">

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container-fluid">

    <div class="row">
      <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
        <a href="https://www.youtube.com/watch?v=StpBR2W8G5A" class="glightbox play-btn mb-4"></a>
      </div>

      <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
        <h3>Valour CRM App</h3>
        <p>
        Welcome to Valour CRM, the ultimate mobile app designed to revolutionize your business operation across all industry sectors. like microfinance, insurance, product  manufacturing and  processing, transportation and logistics, retail, automotive, health care etc.
        </p>
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon"><i class="bx bx-fingerprint"></i></div>
          <h4 class="title"><a href="">Quotation Module</a></h4>
          <p class="description">The main purpose of this module is to generate and share quotations to clients once they express interest for a certain product/service</p>
        </div>

        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon"><i class="bx bx-gift"></i></div>
          <h4 class="title"><a href="">Clients module(Leads/Customers)</a></h4>
          <p class="description">The main purpose of this module is to capture client details(any visited business). This data is important for mapping, keeping track of client details</p>
        </div>

        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon"><i class="bx bx-fingerprint"></i></div>
          <h4 class="title"><a href="">Sales Module</a></h4>
          <p class="description">This module will be able to facilitate in-app business sales and inventory management so that the user will be able to have basic sales information about the transactions made</p>
        </div>

        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon"><i class="bx bx-gift"></i></div>
          <h4 class="title"><a href="">Appointment Module</a></h4>
          <p class="description">Efficiently schedule appointments with clients and ensure seamless calendar syncing and automation. The module sends reminders to sales personnel to keep them on track.</p>
        </div>

      </div>
    </div>

  </div>
</section><!-- End About Section -->

<!-- ======= Features Section ======= -->
<section id="features" class="features">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Features</h2>
      <p>Check The Features</p>
    </div>

    <div class="row" data-aos="fade-left">
      <div class="col-lg-3 col-md-4">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
          <i class="ri-store-line" style="color: #ffbb2c;"></i>
          <h3><a href="">Sales Module</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
          <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
          <h3><a href="">Business Info</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
          <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
          <h3><a href="">Appointments</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
          <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
          <h3><a href="">Maintenance</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
          <i class="ri-database-2-line" style="color: #47aeff;"></i>
          <h3><a href="">Inventory</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
          <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
          <h3><a href="">Demo Module</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
          <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
          <h3><a href="">Contacts module</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
          <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
          <h3><a href="">Incentives</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="450">
          <i class="ri-anchor-line" style="color: #b2904f;"></i>
          <h3><a href="">Meeting Module</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
          <i class="ri-disc-line" style="color: #b20969;"></i>
          <h3><a href="">Audio recordings</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="550">
          <i class="ri-base-station-line" style="color: #ff5828;"></i>
          <h3><a href="">Route Planning</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 mt-4">
        <div class="icon-box" data-aos="zoom-in" data-aos-delay="600">
          <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
          <h3><a href="">Client Info</a></h3>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Features Section -->

<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
  <div class="container">

    <div class="row" data-aos="fade-up">

      <div class="col-lg-3 col-md-6">
        <div class="count-box">
          <i class="bi bi-emoji-smile"></i>
          <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
          <p>Happy Clients</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
        <div class="count-box">
          <i class="bi bi-journal-richtext"></i>
          <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
          <p>Projects</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="count-box">
          <i class="bi bi-headset"></i>
          <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
          <p>Hours Of Support</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="count-box">
          <i class="bi bi-people"></i>
          <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
          <p>Hard Workers</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Counts Section -->

<!-- ======= Details Section ======= -->
<section id="details" class="details">
  <div class="container">

    <div class="row content">
      <div class="col-md-4" data-aos="fade-right">
        <img src="{{ asset('assets/img/details-1.png') }}" class="img-fluid" alt="">
      </div>
      <div class="col-md-8 pt-4" data-aos="fade-up">
        <h3>Quotation Module.</h3>
        <p class="fst-italic">
       <span>Module Details :- </span>
        
        The main purpose of this module is to generate and share quotations to clients once they express interest for a certain product/service. The quotation is generated by filling a form with the following field;

        </p>
        <ul>
          <li><i class="bi bi-check"></i> Sending quotations to businesses.</li>
          <li><i class="bi bi-check"></i> Monitoring customer interest(if they accepted/rejected).</li>
          <li><i class="bi bi-check"></i> Update quotations.</li>
        </ul>
        <p>
        Except for the above information, the quotation includes the business header(business information like business name, contacts, address, logo, etc).
        </p>
      </div>
    </div>

    <div class="row content">
      <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
        <img src="{{ asset('assets/img/details-2.png')}}" class="img-fluid" alt="">
      </div>
      <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
        <h3>Maintenance Module</h3>
        <p class="fst-italic">
        Module Description :-
        
        The main purpose of this module is to help the business carry out periodic maintenance for the sold product. When a sale is made, the system will set a specific maintenance period e.g after 30 days, etc. a form with the following details is filled;
        </p>
        <ul>
          <li><i class="bi bi-check"></i> Product(s) being maintained.</li>
          <li><i class="bi bi-check"></i> Date of maintenance.</li>
          <li><i class="bi bi-check"></i> Maintenance comment.</li>
          <li><i class="bi bi-check"></i> Visit notes.</li>
        </ul>
      </div>
    </div>

    <div class="row content">
      <div class="col-md-4" data-aos="fade-right">
        <img src="{{ asset('assets/img/details-3.png') }}" class="img-fluid" alt="">
      </div>
      <div class="col-md-8 pt-5" data-aos="fade-up">
        <h3>Demo Module</h3>
        <p class="fst-italic"><span> Module Description :- </span> This module is important when a client requires to understand how the product they want to buy works. The business can schedule either an online meeting or to meet the client on the business places. A form with the following details is filled</p>
        <ul>
          <li><i class="bi bi-check"></i> Demo date. The date on which the demo is done.</li>
          <li><i class="bi bi-check"></i> Demo notes(what is the demo about?, what products are being demonstrated?, etc). </li>
          <li><i class="bi bi-check"></i> Visit notes. Visit details.</li>
        </ul>
    
      </div>
    </div>

    <div class="row content">
      <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
        <img src="{{ asset('assets/img/details-4.png') }}" class="img-fluid" alt="">
      </div>
      <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
        <h3>Appointment Module</h3>
        <p class="fst-italic">
        This module in the application is meant to collect data pertaining to meetings between the user and the prospect. 
        It collects data on the following;
        </p>
        <ul>
          <li><i class="bi bi-check"></i> Schedule appointments with clients. Syncing and automating with the calendar.</li>
          <li><i class="bi bi-check"></i> Reminders for the sales personnel.</li> 
        </ul>
        <ul>
          <li><i class="bi bi-check"></i>Business information. This information will be related to details about the business such as; Business name, Contact information, Business location and Product categories etc.</li>
          <li><i class="bi bi-check"></i> About meeting. This information will be related to the agenda and the purpose of the meeting, the date and the time when the meeting will be held between the user and the prospect.Time of the meeting(start and end time)</li>
          <li><i class="bi bi-check"></i> Meeting notes. This data will be concerned with the purpose of the meeting and how it came to be.</li>
        </ul>
      </div>
    </div>

  </div>
</section><!-- End Details Section -->

<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Gallery</h2>
      <p>Check our Gallery</p>
    </div>

    <div class="row g-0" data-aos="fade-left">

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
          <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox">
            <img src="{{ asset('assets/img/gallery/gallery-1.jpg') }}" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
          <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox">
            <img src="{{ asset('assets/img/gallery/gallery-2.jpg') }}" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
          <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox">
            <img src="{{ asset('assets/img/gallery/gallery-3.jpg') }}" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
          <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox">
            <img src="{{ asset('assets/img/gallery/gallery-4.jpg') }}" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
          <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox">
            <img src="{{ asset('assets/img/gallery/gallery-5.jpg') }}" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
          <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox">
            <img src="{{ asset('assets/img/gallery/gallery-6.jpg') }}" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
          <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox">
            <img src="{{ asset('assets/img/gallery/gallery-7.jpg') }}" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
          <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox">
            <img src="{{ asset('assets/img/gallery/gallery-8.jpg') }}" alt="" class="img-fluid">
          </a>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Gallery Section -->



<!-- ======= Team Section ======= -->
<section id="team" class="team">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Team</h2>
      <p>Our Great Team</p>
    </div>

    <div class="row" data-aos="fade-left">

      <div class="col-lg-3 col-md-6">
        <div class="member" data-aos="zoom-in" data-aos-delay="100">
          <div class="pic"><img src="{{ asset('assets/img/team/Gideon-Nkurungungi.webp') }}" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Nkurunungi Gideon</h4>
            <span>Chief Executive Officer</span>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
        <div class="member" data-aos="zoom-in" data-aos-delay="200">
          <div class="pic"><img src="{{ asset('assets/img/team/eliab.jpg') }}" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Nuwagaba Eliab</h4>
            <span>Product Manager</span>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="member" data-aos="zoom-in" data-aos-delay="300">
          <div class="pic"><img src="{{ asset('assets/img/team/wilberforce.jpg') }}" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Nsengiyumva wilberforce</h4>
            <span>Senior Dev</span>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="member" data-aos="zoom-in" data-aos-delay="400">
          <div class="pic"><img src="{{ asset('assets/img/team/david.jpg') }}" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Ochwo David</h4>
            <span>Junior Dev</span>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Team Section -->

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Pricing</h2>
      <p>Check our Pricing</p>
    </div>

    <div class="row" data-aos="fade-left">

      <div class="col-lg-3 col-md-6">
        <div class="box" data-aos="zoom-in" data-aos-delay="100">
          <h3>Free</h3>
          <h4><sup>$</sup>0<span> / month</span></h4>
          <ul>
            <li>Aida dere</li>
            <li>Nec feugiat nisl</li>
            <li>Nulla at volutpat dola</li>
            <li class="na">Pharetra massa</li>
            <li class="na">Massa ultricies mi</li>
          </ul>
          <div class="btn-wrap">
            <a href="#" class="btn-buy">Buy Now</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
        <div class="box featured" data-aos="zoom-in" data-aos-delay="200">
          <h3>Business</h3>
          <h4><sup>$</sup>19<span> / month</span></h4>
          <ul>
            <li>Aida dere</li>
            <li>Nec feugiat nisl</li>
            <li>Nulla at volutpat dola</li>
            <li>Pharetra massa</li>
            <li class="na">Massa ultricies mi</li>
          </ul>
          <div class="btn-wrap">
            <a href="#" class="btn-buy">Buy Now</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
        <div class="box" data-aos="zoom-in" data-aos-delay="300">
          <h3>Developer</h3>
          <h4><sup>$</sup>29<span> / month</span></h4>
          <ul>
            <li>Aida dere</li>
            <li>Nec feugiat nisl</li>
            <li>Nulla at volutpat dola</li>
            <li>Pharetra massa</li>
            <li>Massa ultricies mi</li>
          </ul>
          <div class="btn-wrap">
            <a href="#" class="btn-buy">Buy Now</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
        <div class="box" data-aos="zoom-in" data-aos-delay="400">
          <span class="advanced">Advanced</span>
          <h3>Ultimate</h3>
          <h4><sup>$</sup>49<span> / month</span></h4>
          <ul>
            <li>Aida dere</li>
            <li>Nec feugiat nisl</li>
            <li>Nulla at volutpat dola</li>
            <li>Pharetra massa</li>
            <li>Massa ultricies mi</li>
          </ul>
          <div class="btn-wrap">
            <a href="#" class="btn-buy">Buy Now</a>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Pricing Section -->

<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq section-bg">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>F.A.Q</h2>
      <p>Frequently Asked Questions</p>
    </div>

    <div class="faq-list">
      <ul>
        <li data-aos="fade-up">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">What tdo we mean by data? what do we mean by technology ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
            <p>
            We define data as information that needs to be processed, organised and structured for the sake of usability. In other words, by data we mean the information that you hold, such as details about the communities you work with, findings from research you have done, results from surveys, email addresses and contact information for supporters, and so on.
            <br>
            We understand technology as the tools, systems, methods and processes that capitalise on the computational power to manage, analyse and communicate information. For this resource, when we talk about technology, we mean digital tools, broadly. Anything from email platforms and messenger apps to website hosts, email newsletter platforms, CRMs, databases, algorithmic processes and more.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="100">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">What are the limits of AI in terms of development? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
            <p>
            AI is a fascinating technology that can accomplish incredible tasks, but it also has its limits. Understanding these limitations is essential to having realistic expectations of what AI can accomplish.
            <br>
            First, AI relies heavily on data. It needs large amounts of data to learn and make decisions, which can be a challenge for companies that do not have access to large data sets. Another limitation is the lack of contextual understanding. If an AI is trained to perform a specific task, it can do so with great precision, but it can be lost in new or unpredictable situations. Moreover, AI is not creative and has no consciousness. She follows instructions and performs tasks based on these instructions, but she cannot think autonomously or feel emotions. Complex tasks that require deep understanding, such as solving complex problems or making ethical decisions, remain a challenge for AI. It has difficulty dealing with these issues satisfactorily. With respect to security and privacy, the use of AI in sensitive areas, such as medicine, raises data security and privacy concerns. Finally, AI is evolving rapidly, which means that AI professionals must constantly stay up to date to stay competent.
            <br>
            Understanding these limitations while exploring the possibilities of AI is essential to use this technology effectively and ethically.
            </p>
           
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="200">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">What is Social Engineering?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
            <p>
            Social Engineering is the designation given to the set of persuasion techniques which purpose is getting users to execute or leverage actions in line with the attackers' goals.
            <br>
            Social engineering attacks are applicable in the context of cybersecurity as they can be applied in combination with attacks of technological nature. An example of this is the Phishing attack, in which a given user is induced to provide information or access to resources, under the illusion of being in contact with a trustworthy entity.            </p>
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="300">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">How do i work with external developers and/or technologists? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
            <p>
            There are many different types of external experts you can work with. Common types of external consultants/experts who interact with technology or data include:
                <br>
            User experience (UX) designer: Works with both clients (in this case, that’s you!) and users to design a product that satisfies multiple needs and is easy to understand and operate.
            Visual or Graphic Designer: Oversees the graphic elements that a website, tool, app or publication will use, and is responsible for designing the visual identity (or branding). They often work with the UX designer to make sure that the visual identity works well for users, too.
            Illustrator: Creates illustrations, icons, infographics and more, which will live within the larger structure that the Visual Designer and UX Designer have created.
            Frontend Developer: Implements the design on a website, tool or app. In particular, is able to code the aspects that users will see and interact with.
            Backend Developer: Develops and connects a database to the frontend (the parts of the website, app or tool that a user can see) and does all the non-visible tasks that will fill the frontend with dynamic content.
            Data Analyst/Scientist: Extracts patterns from large volumes of data. They may also be equipped with the tools and knowledge to create visualisations of data in order to communicate important patterns.
            Sysadmin/DevOps: Maintains the servers where the website, tool or app lives. They’re often responsible for coordinating the troubleshooting necessary if users encounter bugs or errors.
            Sometimes roles can overlap: for example, you could hire a consultant who leads the design and development of a website, or a developer who is capable of working on both the frontend and backend.
                <br>
            Before hiring external developers and technologists, it’s helpful to: 
            <br>
            Be clear about why you want to build or adopt new tools.
            Identify the resources you have and those you will need.
            Remember to plan for long-term maintenance.
            At the beginning of your work together, it’s important to establish common ground and a shared terminology about needs and expectations. We recommend developing a ToR (Terms of Reference) in order to document and share project needs and requirements. The ToR should cover at minimum:
            <br>
            The available project budget
            The necessary timeline
            Your goals
            Your expectations for the external partner
            Any additional information
            You should also agree on tools, channels for communication, and roles and responsibilities.
            <br>
            All of this can greatly contribute to project success early on. Some “do’s” when working with consultants once the work is underway are:
            <br>
            Focus on clarity of organisational goals, big processes and milestones in order to better support the team/project.
            Provide relevant and timely feedback.
            Provide space and respect for the consultant’s expertise.
            Try to be responsive with communications.
            </p>
          </div>
        </li>

        <li data-aos="fade-up" data-aos-delay="400">
          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">What is the expected evolution of Cybercrime? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
            <p>
            It is expected that with the increasing use of information technologies that we have been observing, cybercrime will also follow this growing trend.
            <br>
            In addition to the growing pattern of cybercrime, it is also expected that attackers will become increasingly organised, structured and specialized, as it happens with traditional crime.
            <br>
            During the 90s and the 2000 decades, the preferred targets were the corporate, banking and insurance sectors. Currently, Cybercriminals have been diversifying their practices far beyond those target areas, and presently any entity or person can be a Cybercrime target.
            </p>
          </div>
        </li>

      </ul>
    </div>

  </div>
</section><!-- End F.A.Q Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Contact</h2>
      <p>Contact Us</p>
    </div>

    <div class="row">

      <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Location:</h4>
            <p>Plot 40 Matyrs Way, Kampala</p>
            <p>Opposite UNEB Uganda</p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>info@impactoutsourcing.co.ug</p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p>+256752364557 / +256778766500</p>
          </div>

        </div>

      </div>

      <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

        <form action="{{ url('/contact/send_email') }}" method="post" role="form" class="php-email-form">
        @csrf
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
              <!-- Success Message -->
              @if (session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              @endif
              @if (session('error'))
                  <div class="alert alert-danger">
                      {{ session('error') }}
                  </div>
              @endif
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection