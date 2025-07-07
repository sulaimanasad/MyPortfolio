<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio Sulaiman</title>
  <link
    rel="shortcut icon"
    href="img/Icon_Web-removebg-preview.png"
    type="image/x-icon" />
  <link rel="stylesheet" href="css/style.css" />
  <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet" />
</head>

<body>
  <!-- Header Start-->
  <header class="active">
    <a href="#" class="logo">Sulaiman.</a>

    <i class="bx bx-menu" id="menu-icon"></i>

    <nav class="navbar">
      <a href="#" class="active">Home</a>
      <a href="#">Service</a>
      <a href="#">Resume</a>
      <a href="#">Portfolio</a>
      <a href="#">Contact</a>
    </nav>
  </header>
  <!-- Header End-->

  <!-- Bars Background Start -->
  <div class="bars-box active">
    <div class="bar" style="--i: 6"></div>
    <div class="bar" style="--i: 5"></div>
    <div class="bar" style="--i: 4"></div>
    <div class="bar" style="--i: 3"></div>
    <div class="bar" style="--i: 2"></div>
    <div class="bar" style="--i: 1"></div>
  </div>
  <!-- Bars Background End -->

  <!-- Home Section Start -->
  <section class="home active">
    <div class="home-detail">
      <h1>Moch Sulaiman Asadullah</h1>
      <h2>
        I'm a
        <span style="--i: 4" data-text="Frontend Developer">Frontend Developer</span>
        <span style="--i: 3" data-text="Backend Developer">Backend Developer</span>
        <span style="--i: 2" data-text="Fullstack Developer">Fullstack Developer</span>
        <span style="--i: 1" data-text="UI/UX Designer">UI/UX Designer</span>
      </h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae
        natus minus dignissimos ipsam veritatis sunt excepturi ipsum illum in
        sit reiciendis illo quisquam, explicabo, odit quod iure placeat,
        quidem nulla!
      </p>
      <div class="btn-sci">
        <a href="img/CV Canva Sulaiman Asadullah.pdf" class="btn">Download CV</a>
        <div class="sci">
          <a href="https://github.com/sulaimanasad"><i class="bx bxl-github"></i></a>
          <a href="https://www.linkedin.com/in/sulaimanasadullah"><i class="bx bxl-linkedin"></i></a>
          <a href="https://www.instagram.com/sulcahsul"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.tiktok.com/@sulcahsul44"><i class="bx bxl-tiktok"></i></a>
        </div>
      </div>
    </div>

    <div class="home-img">
      <div class="img-box">
        <div class="img-item">
          <img src="img/home.png" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- Home Section End -->

  <!-- Service Section Start -->
  <section class="service">
    <h2 class="heading">My <span>Services</span></h2>
    <div class="services-container">
      <div class="services-box">
        <div class="icon">
          <i class="bx bx-code-alt"></i>
          <a href="#"><i class="bx bx-arrow-back"></i></a>
        </div>
        <h3>Web Development</h3>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero
          ducimus impedit sunt aliquid nulla repellat dignissimos animi.
        </p>
      </div>

      <div class="services-box">
        <div class="icon">
          <i class="bx bxs-paint"></i>
          <a href="#"><i class="bx bx-arrow-back"></i></a>
        </div>
        <h3>UI/UX Design</h3>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero
          ducimus impedit sunt aliquid nulla repellat dignissimos animi.
        </p>
      </div>

      <div class="services-box">
        <div class="icon">
          <i class="bx bx-palette"></i>
          <a href="#"><i class="bx bx-arrow-back"></i></a>
        </div>
        <h3>Grapic Design</h3>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero
          ducimus impedit sunt aliquid nulla repellat dignissimos animi.
        </p>
      </div>

      <div class="services-box">
        <div class="icon">
          <i class="bx bx-trending-up"></i>
          <a href="#"><i class="bx bx-arrow-back"></i></a>
        </div>
        <h3>SEO</h3>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero
          ducimus impedit sunt aliquid nulla repellat dignissimos animi.
        </p>
      </div>

      <div class="services-box">
        <div class="icon">
          <i class="bx bx-slideshow"></i>
          <a href="#"><i class="bx bx-arrow-back"></i></a>
        </div>
        <h3>Video Editor</h3>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero
          ducimus impedit sunt aliquid nulla repellat dignissimos animi.
        </p>
      </div>

      <div class="services-box">
        <div class="icon">
          <i class="bx bx-camera"></i>
          <a href="#"><i class="bx bx-arrow-back"></i></a>
        </div>
        <h3>Photograpy</h3>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero
          ducimus impedit sunt aliquid nulla repellat dignissimos animi.
        </p>
      </div>
    </div>
  </section>
  <!-- Service Section End -->

  <!-- Resume Section Start -->
  <section class="resume">
    <div class="resume-container">
      <div class="resume-box">
        <h2>Why Hire Me?</h2>
        <p class="desc">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit.
          Praesentium quasi accusamus porro.
        </p>
        <button class="resume-btn active">Experience</button>
        <button class="resume-btn">Education</button>
        <button class="resume-btn">Skills</button>
        <button class="resume-btn">About Me</button>
      </div>

      <div class="resume-box">
        <div class="resume-detail experience active">
          <h2 class="heading">My <span>Experience</span></h2>
          <!-- <p class="desc">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis
              distinctio et praesentium aliquam incidunt laudantium tempora
              minus.
            </p> -->
          <div class="resume-list">
            <div class="resume-item">
              <p class="year">2023 - Present</p>
              <h3>Frontend Developer</h3>
              <p class="company">Abc Corp.</p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Similique, harum.
              </p>
            </div>

            <div class="resume-item">
              <p class="year">2022 - 2023</p>
              <h3>Backend Developer</h3>
              <p class="company">YouTube</p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Similique, harum.
              </p>
            </div>

            <div class="resume-item">
              <p class="year">2021 - 2022</p>
              <h3>Full Stack Developer</h3>
              <p class="company">Google</p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Similique, harum.
              </p>
            </div>

            <div class="resume-item">
              <p class="year">2020 - 2021</p>
              <h3>Fotographer</h3>
              <p class="company">Xyz Inc.</p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Similique, harum.
              </p>
            </div>

            <div class="resume-item">
              <p class="year">2019 - 2020</p>
              <h3>UI/UX</h3>
              <p class="company">Abc Inc.</p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Similique, harum.
              </p>
            </div>

            <div class="resume-item">
              <p class="year">2018 - 2019</p>
              <h3>Junior Developer</h3>
              <p class="company">RGI.</p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Similique, harum.
              </p>
            </div>
          </div>
        </div>

        <div class="resume-detail education">
          <h2 class="heading">My <span>Education</span></h2>
          <!-- <p class="desc">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis
              distinctio et praesentium aliquam incidunt laudantium tempora
              minus.
            </p> -->

          <div class="resume-list">
            <div class="resume-item">
              <p class="year">2024</p>
              <h3>Programing Course</h3>
              <p class="company">Online Course</p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos,
                sapiente?
              </p>
            </div>

            <div class="resume-item">
              <p class="year">2022 - 2023</p>
              <h3>Web Development Bootcamp</h3>
              <p class="company">Online Course Platform</p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos,
                sapiente?
              </p>
            </div>

            <div class="resume-item">
              <p class="year">2020</p>
              <h3>Certified Web Development</h3>
              <p class="company">Online Course</p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos,
                sapiente?
              </p>
            </div>

            <div class="resume-item">
              <p class="year">2017 - 2018</p>
              <h3>Doctor of Engineering</h3>
              <p class="company">Codehal University</p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos,
                sapiente?
              </p>
            </div>

            <div class="resume-item">
              <p class="year">2015 - 2017</p>
              <h3>Master of Computer University</h3>
              <p class="company">Codepolitan</p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos,
                sapiente?
              </p>
            </div>

            <div class="resume-item">
              <p class="year">2012 - 2015</p>
              <h3>Bachelor of Data Science</h3>
              <p class="company">Dicoding</p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos,
                sapiente?
              </p>
            </div>
          </div>
        </div>

        <div class="resume-detail skills">
          <h2 class="heading">My <span>Skills</span></h2>
          <p class="desc">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis
            distinctio et praesentium aliquam incidunt laudantium tempora
            minus.
          </p>

          <div class="resume-list">
            <div class="resume-item">
              <i class="bx bxl-html5"></i>
              <span>HTML5</span>
            </div>
            <div class="resume-item">
              <i class="bx bxl-css3"></i>
              <span>CSS3</span>
            </div>
            <div class="resume-item">
              <i class="bx bxl-php"></i>
              <span>PHP</span>
            </div>
            <div class="resume-item">
              <i class="bx bxl-tailwind-css"></i>
              <span>Tailwind CSS</span>
            </div>
            <div class="resume-item">
              <i class="bx bxl-bootstrap"></i>
              <span>Bootstrap</span>
            </div>
            <div class="resume-item">
              <i class="bx bxl-javascript"></i>
              <span>Javascrip</span>
            </div>
            <div class="resume-item">
              <i class="bx bxl-jquery"></i>
              <span>Jquery</span>
            </div>
            <div class="resume-item">
              <i class="bx bxl-react"></i>
              <span>React.js</span>
            </div>
          </div>
        </div>

        <div class="resume-detail about">
          <h2 class="heading">About <span>Me</span></h2>
          <p class="desc">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis
            distinctio et praesentium aliquam incidunt laudantium tempora
            minus.
          </p>

          <div class="resume-list">
            <div class="resume-item">
              <p>Name :<span>Moch Sulaiman Asadulloh</span></p>
            </div>
            <div class="resume-item">
              <p>Gender :<span>Male</span></p>
            </div>
            <div class="resume-item">
              <p>Age :<span>21 Years Old</span></p>
            </div>
            <div class="resume-item">
              <p>Status :<span>Single</span></p>
            </div>
            <div class="resume-item">
              <p>City :<span>Pasuruan</span></p>
            </div>
            <div class="resume-item">
              <p>Nationality :<span>Indonesian</span></p>
            </div>
            <div class="resume-item">
              <p>Experience :<span>2+ Years</span></p>
            </div>
            <div class="resume-item">
              <p>Full Time :<span>Available</span></p>
            </div>
            <div class="resume-item">
              <p>Freelance :<span>Available</span></p>
            </div>
            <div class="resume-item">
              <p>Phone :<span>(+62) 859 8453 7117</span></p>
            </div>
            <div class="resume-item">
              <p>Email :<span>sulaimanasad04@gmail.com</span></p>
            </div>
            <div class="resume-item">
              <p>Languages :<span>Indonesian, English</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Resume Section End -->

  <!-- Portfolio Section Start -->
  <section class="portfolio">
    <h2 class="heading">Latest <span>Project</span></h2>
    <div class="portfolio-container">
      <div class="portfolio-box">
        <div class="portfolio-detail active">
          <p class="numb">01</p>
          <h3>Frontend Developer</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Molestiae, quae?
          </p>
          <div class="tech">
            <p>HTML5, CSS3, Javascript</p>
          </div>
          <div class="live-github">
            <a href="#"><i class="bx bx-arrow-back"></i><span>Live Project</span></a>
            <a href="#"><i class="bx bxl-github"></i><span>Github Repository</span></a>
          </div>
        </div>

        <div class="portfolio-detail">
          <p class="numb">02</p>
          <h3>Full Stack Project</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Molestiae, quae?
          </p>
          <div class="tech">
            <p>MongoDB, Express.js, React.js, Node.js</p>
          </div>
          <div class="live-github">
            <a href="#"><i class="bx bx-arrow-back"></i><span>Live Project</span></a>
            <a href="#"><i class="bx bxl-github"></i><span>Github Repository</span></a>
          </div>
        </div>

        <div class="portfolio-detail">
          <p class="numb">03</p>
          <h3>Backend Project</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Molestiae, quae?
          </p>
          <div class="tech">
            <p>PHP, MongoDB, React.js</p>
          </div>
          <div class="live-github">
            <a href="#"><i class="bx bx-arrow-back"></i><span>Live Project</span></a>
            <a href="#"><i class="bx bxl-github"></i><span>Github Repository</span></a>
          </div>
        </div>

        <div class="portfolio-detail">
          <p class="numb">04</p>
          <h3>Full Stack Project</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Molestiae, quae?
          </p>
          <div class="tech">
            <p>MongoDB, Express.js, AngularJS, Node.js</p>
          </div>
          <div class="live-github">
            <a href="#"><i class="bx bx-arrow-back"></i><span>Live Project</span></a>
            <a href="#"><i class="bx bxl-github"></i><span>Github Repository</span></a>
          </div>
        </div>

        <div class="portfolio-detail">
          <p class="numb">05</p>
          <h3>Frontend Project</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Molestiae, quae?
          </p>
          <div class="tech">
            <p>HTML5, CSS3, Javascript, Tailwind CSS</p>
          </div>
          <div class="live-github">
            <a href="#"><i class="bx bx-arrow-back"></i><span>Live Project</span></a>
            <a href="#"><i class="bx bxl-github"></i><span>Github Repository</span></a>
          </div>
        </div>

        <div class="portfolio-detail">
          <p class="numb">06</p>
          <h3>Full Stack Web Project</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Molestiae, quae?
          </p>
          <div class="tech">
            <p>Express.js, MongoDB, Vue.js, Node.js</p>
          </div>
          <div class="live-github">
            <a href="#"><i class="bx bx-arrow-back"></i><span>Live Project</span></a>
            <a href="#"><i class="bx bxl-github"></i><span>Github Repository</span></a>
          </div>
        </div>
      </div>

      <div class="portfolio-box">
        <div class="portfolio-carousel">
          <div class="img-slide">
            <div class="img-item">
              <img src="img/portfolio1.jpg" />
            </div>
            <div class="img-item">
              <img src="img/portfolio2.jpg" />
            </div>
            <div class="img-item">
              <img src="img/portfolio3.jpg" />
            </div>
            <div class="img-item">
              <img src="img/portfolio4.jpg" />
            </div>
            <div class="img-item">
              <img src="img/portfolio5.jpg" />
            </div>
            <div class="img-item">
              <img src="img/portfolio6.jpg" />
            </div>
          </div>
        </div>

        <div class="navigation">
          <button class="arrow-left disabled">
            <i class="bx bx-chevron-left"></i>
          </button>
          <button class="arrow-right">
            <i class="bx bx-chevron-right"></i>
          </button>
        </div>
      </div>
    </div>
  </section>
  <!-- Portfolio Section End -->

  <!-- Contact Section Start -->
  <section class="contact">
    <div class="contact-container">
      <div class="contact-box">
        <h2>Let's Work Togheter</h2>
        <p class="desc">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia,
          debitis harum! Beatae repellat aliquid voluptates accusamus iste
          quaerat aliquam minima.
        </p>

        <div class="contact-detail">
          <i class="bx bxs-phone"></i>
          <div class="detail">
            <p>Phone</p>
            <p>(+62) 859 5483 7117</p>
          </div>
        </div>

        <div class="contact-detail">
          <i class="bx bxs-envelope"></i>
          <div class="detail">
            <p>Email</p>
            <p>sulaimanasad04@gmail.com</p>
          </div>
        </div>

        <div class="contact-detail">
          <i class="bx bxs-map"></i>
          <div class="detail">
            <p>Address</p>
            <p>Sejo, Kejapanan, Pasuruan, Jawa Timur, Indonesia</p>
          </div>
        </div>
      </div>

      <div class="contact-box">
        <form action="">
          <h2 class="heading">Contact <span>Me!</span></h2>
          <div class="field-box">
            <input type="text" placeholder="Full Name" required />
            <input type="email" placeholder="Email Address" required />
            <input type="text" placeholder="Phone Number" required />
            <input type="text" placeholder="Email Subject" required />
            <textarea
              name=""
              id=""
              placeholder="Your Message"
              required></textarea>
          </div>
          <button type="submit" class="btn">Send Message</button>
        </form>
      </div>
    </div>
  </section>
  <!-- Contact Section End -->

  <script src="js/script.js"></script>
</body>

</html>