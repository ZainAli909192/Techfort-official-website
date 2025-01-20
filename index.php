<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">

    <meta http-equiv="Expires" content="0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Techfort">
    
    <!-- Search Engine Optimization (SEO) Meta Tags -->
    <title>techFort-IT|Digital,Solutions&Services|Canada|Web</title>

    <meta name="description" content="techfort provide best website design, logo design, app development, digital marketing and video editing solutions globally and in Canada.">
    <meta name="keywords" content="techfort, website design, logo design, app development, digital marketing, Canada, IT , video editor">
    
    <meta name="robots" content="index, follow">

    <link rel="canonical" href="https://www.techfort.ca">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.0/css/line.css" rel="stylesheet">

    <link
    href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    rel="stylesheet"
/>

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="popup.css">
    <link rel="stylesheet" href="process.css">
    <link rel="stylesheet" href="sub.css">
    <link rel="stylesheet" href="loader.css"> 
    <link rel="stylesheet" href="mediaquiries.css"> 
    <link rel="icon" type="image/x-icon" href="./img/favicon-16x16.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <meta name="google-site-verification" content="jKpUmu-O4yHlv10kwpoUZ9i04EeweC58g62YTZK7Z3s" />
</head>

<style>
    .navbar-button:hover{
        background-color: rgb(13, 13, 13); 
    }
    .btt{
      background:black;  
    }
</style>

<body>

    <!-- loader code html  -->

<!-- Loader container -->
<div class="loader-container" id="loaderContainer">
    <!-- Loader image -->
    <img src="../img/loader.svg" alt="Loader" class="loader-img">
  </div>  
  <script>
    function showloader(){
  // Get the loader container element
  var loaderContainer = document.getElementById('loaderContainer');
      // Display the loader container
      loaderContainer.style.display = 'block';
  
      // Hide the loader after 2 seconds
      setTimeout(function() {
        // Hide the loader container
        loaderContainer.style.display = 'none';
      }, 200);
    
    } ;
    window.onload=showloader;
    window.onscroll = function () {
    if (window.scrollY >= 50 && window.scrollY <= 100) {
        showloader();
    }
    else if (window.scrollY >=110 && window.scrollY <= 150) {
        showloader();
    }
    else if (window.scrollY >=180 && window.scrollY <= 210) {
        showloader();
    }
};
    </script>
    
    <!-- <header> -->
        <div class="popup-screen">
            <div class="popup-box">
                <!-- <i class="fas fa-times close-btn"></i> -->
                <img src="img/tick.png" height="40px" alt="Website web">
             
                <p>
                    Your message sent successfully
                </p>
                <button class=" btn close-btn">Ok</button>
                <!-- <a href="#" class="btn close-btn">Ok</a> -->
            </div>
        </div>

        <nav class="navbar" id="top">
            <div class="navbar-logo">
                <img src="./img/logo.jpg" alt="techfort logo">
            </div>
            <ul class="navbar-links">
                <li><a class="active" href="#home">
                    
                    <i class="fas fa-home"></i>
                    Home</a></li>
                <li>
                    <a href="#about">About</a></li>
                    <li class="services-menu">
                        <a href="#services" data-toggle="submenu">Services</a>
                        <ul class="submenu">
                            <!-- Group 1 -->
                            <div class="submenu-group">
                                <li><a href="#services" data-scroll="services">Website development</a></li>
                                <li><a href="#services" data-scroll="services">Software development</a></li>
                                <li><a href="#services" data-scroll="services">Custom Websites</a></li>
                                <li><a href="#services" data-scroll="services">E-commerce website development</a></li>
                                <li><a href="#services" data-scroll="services">CMS Systems</a></li>
                            </div>
                            <!-- Group 2 --> 
                            <div class="submenu-group">
                                <li><a href="#All" data-scroll="services">Content Management System (CMS)</a></li>
                                <li><a href="#services" data-scroll="services">Custom Coding</a></li>
                                <li><a href="#services" data-scroll="services">Custom Designed</a></li>
                                <li><a href="#services" data-scroll="services">Custom Email</a></li>
                                <li><a href="#services" data-scroll="services">SEO</a></li>
                            </div>
                            <!-- Group 3 -->
                            <div class="submenu-group">
                                <li><a href="#services" data-scroll="services">Front-End Web Developer</a></li>
                                <li><a href="#services" data-scroll="services">Back-End Web Development</a></li>
                                <li><a href="#services" data-scroll="services">Full Website Design</a></li>
                                <li><a href="#wordpress" data-scroll="services">Wordpress Websites</a></li>
                            </div>
                        </ul>
                    </li>
                    
                    
                <li><a href="#clients-feedback" >Clients Feedback</a></li> 
                <li><a href="#process" id="cli">Our Process</a></li>
            </ul>
            <a href="#contact">
                <button class="navbar-button btt">Contact us</button>
            </a>
            <div class="navbar-toggle">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </nav>
        
    <!-- </header> -->
    <main>

        <div class="banner-container">
            <h2>We offer: 
                <span class="typing"> Digital Success </span>
            </h2>
            <p>
                At Techfort, we create impactful digital brands through website design, logo design, app development, and effective digital marketing solutions. Transform your digital footprint and achieve lasting results with our expert guidance.

            </p>
           <a href="#about">

               <button>About Us</button>
           </a>
        </div>

          <!-- About section  -->
          <section class="about about2" id="about">
            <img src="./img/about2.jpg" class="side-in from-left" alt="techfort about">
            <video autoplay loop muted playsinline class="banner-video" title="techfort web video">
                <source src="video.mp4" type="video/mp4">
            </video>
        
            <div class="content side-in from-right">
                <h1>IT <span class="hidee">Web developer, SEO expert, Software developer, </span>  Company In     
                   <span> Canada </span> 
                </h1>
                <div class="sub-content">
                    <div class="about1">
                        <h3>Boost Your Business with an SEO-Friendly, Mobile-Responsive Website!</h3>
                        <p>
                            We specialize in designing websites, apps that enhance your business's online presence. Our SEO-friendly designs ensure your site ranks high in search results, while mobile responsiveness guarantees smooth performance on laptops, tablets, and smartphones. Let us help you reach a global audience and drive your business forward!
                        </p>
                    </div>
                    <div class="about2">
                        <h3>
                            Elevate Your Brand with Comprehensive IT solutions!

                        </h3>
                        <p>
                            We offer tailored digital marketing strategies to amplify your brand's online presence. From SEO to social media marketing, our expert team ensures your business reaches its full potential.
                        </p>
                    </div>
                </div>
                <a href="#contact">

                    <button class="navbar-button">Contact us</button>
                </a>
            </div>
        </section>

          <!-- Clients Feedback Section -->
    <section id="clients-feedback" class="clients-feedback">
        <h2>Clients <span>Feedback</span></h2>
        <div class="feedback-slider">
            <button class="slider-btn left-btn" onclick="slideLeft()">&#9664;</button>
            <div class="feedback-container">
                
                <!-- Feedback Items -->
                <div class="feedback-item">
                    <img src="img/c1.png" alt="web client">
                    <div class="feedback-content">
                        <!-- <span>2023-05-20</span> -->
                        <h3>Nizaam Trucking  </h3>
                        <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9734;</div>
                        <p>Great service and support throughout the project.
                            
                            <br> Highly recommend them for <em> website design and development</em>                      </p>
                        </div>
                </div>
                <div class="feedback-item">
                    <img src="img/c2.png" alt="mobile app client">
                    <div class="feedback-content">
                        <h3> Emily Wilson</h3>
                        <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                        <p>
                            Transformed our data into actionable insights, thank you.
                        </p>
                    </div>
                </div>
                <div class="feedback-item">
                    <img src="img/c3.png" alt="SEO client">
                    <div class="feedback-content">
                        <h3>Ethan Patel                        </h3>
                        <span>2023-07-10</span>
                        <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                        <p>Exceptional website, SEO, and marketing services. I look forward to our next collaboration. </p>
                    </div>
                </div>
                <div class="feedback-item">
                    <img src="img/c4.png" alt="Mobile app client">
                    <div class="feedback-content">
                        <h3>Alexander Lee                        </h3>
                        <span>2023-08-05</span>
                        <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9734;</div>
                        <p>Good experience overall. Impressed by the Techfort's innovative app development solution 
</p>
                    </div>
                </div>
                <div class="feedback-item">
                    <img src="img/c5.png" alt="Client 5">
                    <div class="feedback-content">
                        <h3>Benjamin Hall                        </h3>
                        <span>2023-09-01</span>
                        <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                        <p>Outstanding support and service. Techfort's team crafted a tailored marketig strategy that boosted our online presence</p>
                    </div>
                </div>
                <div class="feedback-item">
                    <img src="img/c6.png" alt="Client 6">
                    <div class="feedback-content">
                        <h3> Christopher Lewis                        </h3>
                        <span>2023-10-25</span>
                        <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                        <p>Love our new logo designed by Techfort.</p>
                    </div>
                </div>
                <div class="feedback-item">
                    <img src="img/c7.png" alt="Client 7">
                    <div class="feedback-content">
                        <h3>Ava Jenkins</h3>
                        <span>2023-11-15</span>
                        <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9734;</div>
                        <p>4.9/5! Video editing services were timely and professional.       </p>
                    </div>
                </div>
                <div class="feedback-item">
                    <img src="img/c8.png" alt="Client 8">
                    <div class="feedback-content">
                        <h3>Martin                        </h3>
                        <span>2023-12-05</span>
                        <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                        <p>Professional and reliable services. Techfort's creative team delivered a unique and modern design website that exceeded our expectations. 
                        </p>
                    </div>
                </div>
                <div class="feedback-item">
                    <img src="img/c9.png" alt="Client 9">
                    <div class="feedback-content">
                        <h3> Olivia Brown </h3>
                        <span>2023-12-05</span>
                        <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9734;</div>
                        <p>Transformed our online presence with modern website design and marketing services of Techfort</p>
                    </div>
                </div>
            </div>
            <button class="slider-btn right-btn" onclick="slideRight()">&#9654;</button>
        </div>
    </section>

        <!-- services  -->
<!-- 
        <section id="services" class="services">
    <h2>What we <span>Offer</span></h2> 
    <br>
    <p>Looking for the best IT solution services in Canada? Techfort leads the way with unmatched
        expertise and results. Elevate your brand with Techfort today!
    </p>
    <div class="services-container">
        <div class="service-card">
            <div class="service-icon">
                <i class="uil uil-desktop-alt"></i>
            </div>
            <h2>Website Design</h2>
            <p>We provide mobile responsive and SEO friendly website design, static and dynamic web design, as well as website audit and redesign services across Calgary.</p>
        </div>
        <div class="service-card">
            <div class="service-icon">
                <i class="uil uil-megaphone"></i>
            </div>
            <h2>Digital Marketing</h2>
            <p>Enhance your online presence with our search engine marketing, PPC ads, social media marketing, SEO, SMO, and lead generation services.</p>
        </div>
        <div class="service-card">
            <div class="service-icon">
                <i class="uil uil-palette"></i>
            </div>
            <h2>Logo & Graphic Design</h2>
            <p>Our professional graphic design services will meet all your branding, marketing, and advertising needs with creative and innovative designs.</p>
        </div>
        <div class="service-card">
            <div class="service-icon">
                <i class="uil uil-database"></i>
            </div>
            <h2>Data Management</h2>
            <p>Secure and efficient data management services to organize, upload, and analyze your business data, ensuring accuracy and accessibility.</p>
        </div>
    </div>
    <div class="services-container">
        <div class="service-card">
            <div class="service-icon">
                <i class="uil uil-mobile-android-alt"></i>
            </div>
            <h2>Mobile App Development</h2>
            <p>Develop user-friendly mobile applications for Android and iOS platforms tailored to your business needs, enhancing your digital presence.</p>
        </div>
        <div class="service-card">
            <div class="service-icon">
                <i class="uil uil-search"></i>
            </div>
            <h2>SEO</h2>
            <p>Boost your website's visibility on search engines with our effective SEO strategies, driving organic traffic and improving search engine rankings.</p>
        </div>
        <div class="service-card">
            <div class="service-icon">
                <i class="uil uil-wordpress"></i>
            </div>
            <h2>WordPress Sites</h2>
            <p>Custom WordPress site development, theme customization, and plugin integration to enhance your website functionality and user experience.</p>
        </div>
        <div class="service-card">
            <div class="service-icon">
                <i class="uil uil-thumbs-up"></i>
            </div>
            <h2>Social Media Handling</h2>
            <p>Professional social media management services to increase your brand presence and engagement on various platforms, boosting your online reputation.</p>
        </div>
    </div>
</section>
 --> 

 <!-- Services section  -->
<section id="services" class="services-section">
    <div class="container">
      <h2>What we <span>Offer</span></h2>
      <p>
        Looking for the best IT solution services in <b> Canada</b> ? Techfort leads the way with unmatched
        expertise and results. Elevate your brand with Techfort today!
      </p>
      <br><br>
      <div class="flip-card-container ">
        <!-- Card 1 -->
        <div class="flip-card  ">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <i class="uil uil-desktop"></i>
              <h3>Website Design</h3>
              <button class="flip-button">Learn More</button>
            </div>
            <div class="flip-card-back">
              <p>We provide mobile responsive and SEO-friendly website designs, static and dynamic web designs, as well as website audits and redesign services.</p>
              <button class="flip-button-back">Go Back</button>
            </div>
          </div>
        </div>
  
        <!-- Card 2 -->
        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <i class="uil uil-file"></i>
                <h3>Content Management System</h3>
                <button class="flip-button">Learn More</button>
              </div>
              <div class="flip-card-back">
                <p>Custom CMS solutions to help you easily manage and update your website content without technical knowledge.</p>
                <button class="flip-button-back">Go Back</button>
              </div>
            </div>
          </div>
  
        <!-- Card 3 -->
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
                <i class="uil ">PHP</i> 
                <h3>PHP Development</h3>
              <button class="flip-button">Learn More</button>
            </div>
            <div class="flip-card-back">
              <p>Build dynamic and feature-rich websites with custom PHP development tailored to your business needs.</p>
              <button class="flip-button-back">Go Back</button>
            </div>
          </div>
        </div>
  
        <!-- Card 4 -->
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <i class="uil uil-store"></i>
              <h3>Point of Sale System</h3>
              <button class="flip-button">Learn More</button>
            </div>
            <div class="flip-card-back">
              <p>Develop and implement POS systems to streamline your business transactions and inventory management.</p>
              <button class="flip-button-back">Go Back</button>
            </div>
          </div>
        </div>
  
        <!-- Card 5 -->
       
        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <i class="uil uil-megaphone"></i>
                <h3>Digital Marketing</h3>
                <button class="flip-button">Learn More</button>
              </div>
              <div class="flip-card-back">
                <p>Enhance your brand's visibility with PPC ads, social media marketing, SEO, SMO, and lead generation services.</p>
                <button class="flip-button-back">Go Back</button>
              </div>
            </div>
          </div>
  
        <!-- Card 6 -->
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <i class="uil uil-code-branch"></i>
              <h3>Front-end & Back-end Development</h3>
              <button class="flip-button">Learn More</button>
            </div>
            <div class="flip-card-back">
              <p>Get robust and scalable front-end and back-end development for seamless and functional web applications.</p>
              <button class="flip-button-back">Go Back</button>
            </div>
          </div>
        </div>
  
        <!-- Card 7 -->
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <i class="uil uil-search"></i>
              <h3>Search Engine Optimization</h3>
              <button class="flip-button">Learn More</button>
            </div>
            <div class="flip-card-back">
              <p>Boost your website's visibility and ranking with effective on-page and off-page SEO strategies.</p>
              <button class="flip-button-back">Go Back</button>
            </div>
          </div>
        </div>
  
        <!-- Card 8 -->
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <i class="uil uil-shopping-cart"></i>
              <h3>E-Commerce Websites</h3>
              <button class="flip-button">Learn More</button>
            </div>
            <div class="flip-card-back">
              <p>Design and develop user-friendly e-commerce platforms to help you manage online sales efficiently.</p>
              <button class="flip-button-back">Go Back</button>
            </div>
          </div>
        </div>

     <!-- Card 9 -->
    <div class="flip-card">
        <div class="flip-card-inner">
        <div class="flip-card-front">
            <i class="fa-solid fa-code"></i>         
             <h3>Custom Coding</h3>
            <button class="flip-button">Learn More</button>
        </div>
        <div class="flip-card-back">
            <p>Get tailored solutions with custom coding to meet your unique business requirements, ensuring scalability and efficiency.</p>
            <button class="flip-button-back">Go Back</button>
        </div>
        </div>
    </div>
  
  <!-- Card 10 -->
    <div class="flip-card " id="All">
        <div class="flip-card-inner">
        <div class="flip-card-front">
            <i class="uil uil-envelope"></i> <!-- Icon for custom email -->
            <h3>Custom Email Solutions</h3>
            <button class="flip-button">Learn More</button>
        </div>
        <div class="flip-card-back">
            <p>Develop personalized email solutions that integrate seamlessly with your systems for improved communication and branding.</p>
            <button class="flip-button-back">Go Back</button>
        </div>
        </div>
    </div>
  
  <!-- Card 11 -->
    <div class="flip-card" >
        <div class="flip-card-inner">
        <div class="flip-card-front">  
            <i class="fa-solid fa-desktop"></i>      
                 <h3>All type Software Development</h3>
            <button class="flip-button">Learn More</button>
        </div>   
        <div class="flip-card-back">
            <p>Create robust, scalable, and user-centric software solutions tailored to your business processes and goals.</p>
            <button class="flip-button-back">Go Back</button>
        </div>
        </div>
    </div>
  
  <!-- Card 12 -->
    <div class="flip-card" id="wordpress">
        <div class="flip-card-inner">
        <div class="flip-card-front">  
            <i class="uil uil-wordpress"></i>
                 <h3>Wordpress sites</h3> 
            <button class="flip-button">Learn More</button>
        </div>   
        <div class="flip-card-back">
            <p>Custom WordPress site development, theme customization, and plugin integration to enhance your website functionality and user experience.</p>
            <button class="flip-button-back">Go Back</button>
        </div>
        </div>
    </div>
    
      </div>
    </div>
  </section>
    
<!-- Process Section -->
 <div id="process"></div>
 <div id="process"></div>
<section id="process" class="process-section">
    <div class="container">
        <h2>Our <span>Process</span></h2>
        <div class="timeline">
            <!-- Planning -->
            <div class="timeline-item">
                <div class="icon">
                    <i class="uil uil-calendar-alt"></i>
                </div>
                <h3>Planning</h3>
                <p>Understanding what you want out of your site and how you plan to implement it.</p>
                <i class="uil uil-arrow-right"></i>
  
            </div>
            <!-- Arrow -->
            <div class="arrow">
                <i class="uil uil-arrow-right"></i>
            </div>
            <!-- Design & Development -->
            <div class="timeline-item">
                <div class="icon">
                    <i class="uil uil-desktop"></i>
                </div>
                <h3>Design & Development</h3>
                <p>We will create a beautiful, affordable website design for your creative marketing project.</p>
   
            </div>
            <!-- Arrow -->
            <div class="arrow">
                <i class="uil uil-arrow-right"></i>
            </div>
            <!-- SEO -->
            <div class="timeline-item">
                <div class="icon">
                    <i class="uil uil-search"></i>
                </div>
                <h3>SEO</h3>
                <p>The goal of on-page and off-page optimization is to generate a theme consistent with your targeted keywords.</p>
                <i class="uil uil-arrow-right"></i>
  
            </div>
            <!-- Arrow -->
            <div class="arrow">
                <i class="uil uil-arrow-right"></i>
            </div>
            <!-- Launch -->
            <div class="timeline-item">
                <div class="icon">
                    <i class="fas fa-paper-plane"></i>
                </div>
                <h3>Testing & Launch</h3>
                <p>After successful testing, the product is delivered/deployed to the customer for their use.</p>
   
            </div>
            <!-- Arrow -->
            <div class="arrow">
                <i class="uil uil-arrow-right"></i>
            </div>
            <!-- Maintenance -->
            <div class="timeline-item">
                <div class="icon">
                    <i class="uil uil-setting"></i>
                </div>
                <h3>Maintenance</h3>
                <p>It is an important step that ensures your site works efficiently all the time.</p>
            </div>
        </div>
    </div>
</section>

<!-- customer requirements  -->
<section id="custom-requirements" class="custom-requirements-section">
    <div class="container">
        <h2>Customer<span> Requirements</span></h2>
        <p>
            <span class="hide">
             One of these options may suit your business goals and budget and offer you a great return on your online business investment. 
            However,  
            </span>
            We do offer custom web/mobile apps development and requests. Please contact us now for a personalized online business solution that fits your needs.
        </p>
    </div>
    <div class="statistics">
        <div class="stat-item">
            <i class="fas fa-medal"></i>
            <h3><span class="counter" data-target="99">05</span>%</h3>
            <p>HAPPY CUSTOMERS</p> 
        </div>
        <div class="stat-item">
            <i class="fas fa-trophy"></i>
            <h3><span class="counter" data-target="18">1</span></h3>
            <p>AWARDS WON</p>
        </div>
        <div class="stat-item">
            <i class="fas fa-layer-group"></i> 
            <h3><span class="counter" data-target="36">1</span></h3>
            <p>SEO CAMPAIGNS</p>
        </div>
        <div class="stat-item">
            <i class="fas fa-laptop-code"></i>
            <h3><span class="counter" data-target="87">1</span></h3>
            <p>WEBSITES DEVELOPED</p>
        </div>
    </div>
</section>



        <!-- contact section  -->
        <section id="contact" class="contact-section">
            <div class="container">

<div>
    <i class="uil uil-phone"></i>

    <span onclick="location.href='tel:+15872229114'" class="tel"> +1 (587) 222-9114</span>
</div>


                <div> &#9993;      
                    : &nbsp;
                    <a href="mailto:info@techfort.ca">

                          info@techfort.ca
                    </a>
                </div>

                <div>
                    &#128308;
                    : 208 Millview Pl SW.  Alberta, Calgary
                        postal code: T2Y 2X6 
                </div>
                </div>

            <!-- </div> -->
            <div class="contact-form">  
                <h2>Questions? <span>Let's Talk</span></h2>
                <form id="contact-form" method="post">
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="tel" name="phone" placeholder="Phone" required>
                    <textarea name="message" placeholder="Message" rows="6" columns="6" required></textarea>
                    <button type="submit">Send message</button>
                </form>
                <div class="mainn">

                    <p>Social media: </p>
                    <div class="media">

                        <a href="https://wa.me/+15872229114" target="_blank" title="WhatsApp">
                            <i class="uil uil-whatsapp whatsapp"></i>
                        </a>

                        <a href="https://www.instagram.com/tech_fort90" target="_blank" title="Instagram">
                            <i class="uil uil-instagram instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </section>

      
    </main>
 

    <footer>
        <a href="#top">
            © <span> Techfort</span> All Rights Reserved  
            
        </a>
        
    </footer>


    <script type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
</script>

<script type="text/javascript">
(function(){
  emailjs.init({
    publicKey: "wIYAqUOjnI_XTKRJ3",
  });
})();
</script>

<script>
const form = document.getElementById('contact-form');

form.addEventListener('submit', (e) => {
e.preventDefault();

const name = form.name.value;
const email = form.email.value;
const phone = form.phone.value;
const message = form.message.value;

if (!/^[a-zA-Z ]+$/.test(name)) {
    alert('Name should only contain letters and spaces.');
    return;
  }

  if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email)) {
    alert('Invalid email address.');
    return;
  }

  if (!/^[0-9]+$/.test(phone)) {
    alert('Phone number should only contain numbers.');
    return;
  }



const templateParams = {
from_name: name,
from_email: email,
phone_number: phone,
message: message
};



emailjs.send('service_4xj55v4', 'template_25i30du', templateParams)
.then((response) => {
console.log('SUCCESS!', response.status, response.text);
// spot();
form.reset();
}, (err) => {
console.log('FAILED...', err);
alert('Failed to send email. Please try again.');
});
});
</script>

<script type="text/javascript">
    const popupScreen = document.querySelector(".popup-screen");
    const popupBox = document.querySelector(".popup-box");
    const closeBtn = document.querySelector(".close-btn");
    const btn = document.querySelector(".btn");

    function spot(){
            setTimeout(() => {
                popupScreen.classList.add("active");
                
            }, 50); //Popup the screen in 02 seconds after the page is loaded.
                
            closeBtn.addEventListener("click", () => {
                popupScreen.classList.remove("active"); //Close the popup screen on click the close button.
                
                //Create a cookie for a day (to expire within a day) on click the close button.
                //     document.cookie = "WebsiteName=testWebsite; max-age=" + 24 * 60 * 60; //1 day = 24 hours = 24*60*60
            });
            
            setTimeout(() => {
                popupScreen.classList.remove("active"); //Close the popup screen on click the close button.

            }, 2000); //Popup the screen in 02 seconds after the page is loaded.       
            
         
    }
</script>


    <script src="script.js"></script>
</body>

</html>