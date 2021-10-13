<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/style.css" />

    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Moonlight Apparel</title>
</head>

<body>
    <div class="container" id="section-one">
        <section class="section-one">
            <div class="content">
                <h1>Welcome To<br>Moonlight Apparel</h1>             
            </div>
        </section>
        <div id="sidenav">
            <nav>
              <ul>
                <li><a href="#section-one">HOME</a></li>
                <li><a href="#section-two">ABOUT</a></li>
                <li><a href="#section-three">CATEGORY</a></li>
                <li><a href="#testimonial">TESTIMONIALS</a></li>
                <li><a href="#footer">CONTACT US</a></li>
                <li><a href="/login">LOG IN</a></li>
                <li><a href="/register">SIGN UP</a></li>
              </ul>
            </nav>
          </div>
          <div id="menuBtn">
            <img src="/assets/images/menu.png" alt="" id="menu">
         </div>
         <section class="section-two" id="section-two" >
                <div>
                    <h1>About us</h1>
                </div>
                <div class="section-two-content" >
                    <div class="section-two-content-image">
                        <img src="/assets/images/blue-clothes.png" alt="clothes">
                    </div>
                    <div class="section-two-content-words">
                        <div class="section-two-content-words-subcategory">
                            <h2>Experienced Staff</h2>
                            <div class="icon-and-words">
                                <i class="fa fa-shield" aria-hidden="true"></i>
                                <p>Our staff are trained to provide world class<br> service</p>
                            </div>
                        </div>
                        <div class="section-two-content-words-subcategory">
                            <h2>Affordable Prices</h2>
                            <div class="icon-and-words">
                                <i class="fa fa-money" aria-hidden="true"></i>
                                <p>We offer discounts seasonally to motivate our<br> customers</p>
                            </div>
                        </div>
                        <div class="section-two-content-words-subcategory">
                            <h2>Quality Products</h2>
                            <div class="icon-and-words">
                                <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                <p>We only give you the best, our clothes last<br> long</p>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <section class="section-three" id="section-three"  >
                <div class="title-text">
                    <h1>Categories</h1>
                </div>
                <h2>Men's Category</h2>
                <div class="service-box">
                    <div class="part">
                        <img id="slides" src="/assets/images/man2.png" alt="">
                        <p>Formal</p>
                        <p><button onclick="prev()">Previous</button><button onclick="next()">Next</button></p>
                     </div>
                     <div class="part">
                        <img src="/assets/images/man3.png" alt="">
                        <p>Casual</p>
                     </div>
                     <div class="part">
                        <img src="/assets/images/mensp.jpg" alt="">
                        <p>Sports</p>
                     </div>
                </div>
                <h2>Women's Category</h2>
                <div class="service-box">
                <div class="part">
                        <img src="/assets/images/offw.jpg" alt="">
                        <p>Formal</p>
                     </div>
                     <div class="part">
                        <img src="/assets/images/womanc.jpg" alt="">
                        <p>Casual</p>
                     </div>
                     <div class="part">
                        <img src="/assets/images/sportw.jpg" alt="">
                        <p>Sports</p>
                     </div>
                </div>
                <h2>Children's Category</h2>
                <div class="service-box">
                <div class="part">
                        <img src="/assets/images/csuit.jpg" alt="">
                        <p>Formal</p>
                     </div>
                     <div class="part">
                        <img src="/assets/images/ccasual.jpg" alt="">
                        <p>Casual</p>
                     </div>
                     <div class="part">
                        <img src="/assets/images/csport.jpg" alt="">
                        <p>Sports</p>
                     </div>
                </div>
                <h2>Pet's Category</h2>
                <div class="service-box">
                <div class="part">
                        <img src="/assets/images/dogi.jpg" alt="">
                        <p>Dogs</p>
                     </div>
                     <div class="part">
                        <img src="/assets/images/cati.jpg" alt="">
                        <p>Cats</p>
                     </div>
                     <div class="part">
                        <img src="/assets/images/parrot.jpg" alt="">
                        <p>Others</p>
                     </div>
                </div>
          </section>
          <section id="testimonial">
            <div class="title-text">
                <h1>Testimonials</h1>
                <h3>From some of our satisfied customers</h3>
                </div>
        
                <div class="testimonial-row">
                <div class="testimonial-col">
                    <div  class="user">
                    <img src="/assets/images/woman1.png" alt="" width="40px" height="40px">
                    <div class="user-info">
                        <h4>Marvin Gaye <i class="fa fa-twitter" style="color: royalblue;"></i></h4>
                        <small style="color: royalblue;">@gayeMarvin</small>
                    </div>
                    </div>
                    <p>I had a blast using this website, the products were shipped on time and they all arrived in prime condition. I would give this website five stars. Signed Marvin</p>
                </div>
                <div class="testimonial-col">
                <div  class="user">
                    <img src="/assets/images/img-2.jpg" alt="" width="40px" height="40px">
                    <div class="user-info">
                    <h4>Abigael Kirwa
                        <i class="fa fa-twitter" style="color: royalblue;"></i>
                        
                    </h4>
                    <small style="color: royalblue;">@KirwaAbigael</small>
                    </div>
                </div>
                    <p>I would like to thank all the staff of this company. They answered all my questions and even gave me a few pointers while shopping. I am truly grateful</p>
                </div>
                <div class="testimonial-col">
                <div  class="user">
                    <img src="/assets/images/img-3.jpg" alt="" width="40px" height="40px">
                    <div class="user-info">
                    <h4>Samson Mokaya  <i class="fa fa-twitter" style="color: royalblue;"></i></h4>
                    <small style="color: royalblue;">@sammyMokaya</small>
                    </div>
                </div>
                    <p>This website is fantastic! There are many products to choose from and the response to enquiries is fast and easy. Kudos to the staff. The process was very smooth</p>
                </div>
            </div>
        </section>
        <section id="footer">
              <div class="title-text">
                <h1>Contact Us</h1>
             </div>
             <div class="footer-row">
               <div class="footer-left">
                  <h2>Opening Hours</h2>
                  <p><i class="fa fa-clock-o" style="color: rgb(55, 201, 177);"></i>Monday to Friday - 9am to 9pm</p>
                  <p><i class="fa fa-clock-o" style="color: rgb(55, 201, 177);"></i>Saturday and Sunday-8am to 11pm</p>
               </div>
               <div class="footer-right">
                <h2>Get In Touch</h2>
                <p><i class="fa fa-paper-plane" style="color: rgb(55, 201, 177); margin-top: 2%;"></i> mokaya@gmail.com</p>
                <p><i class="fa fa-phone" style="color: rgb(55, 201, 177); margin-top: 12%;"></i>+254794863933</p>
               </div>
               <div class="social-media">
                <h2>Social media</h2>
                <div class="social-links">
                <a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter" style="color: rgb(55, 201, 177);"></i></a>
                <a target="_blank" href="https://https://whatsapp.com//"><i class="fa fa-whatsapp" style="color: rgb(55, 201, 177);"></i></a>
                <a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook" style="color: rgb(55, 201, 177);"></i></a>
                <a target="_blank" href="https://www.instagram.com/"><i class="fa fa-instagram" style="color: rgb(55, 201, 177);"></i></a>
                <a target="_blank" href="https://www.youtube.com/"><i class="fa fa-youtube-play" style="color: rgb(55, 201, 177);"></i></a>
                </div>
            </div>
             </div>
          </section>
      
    </div>

    <script>

        var images = [
            '/assets/images/man2.png',
            '/assets/images/man3.png',
            '/assets/images/mensp.jpg',
        ]

        var num=0
        
        function next(){
           
            var slide = document.getElementById("slides")
            num ++;
            if(num >= images.length){
                num = 0
            }
            slide.src = images[num]

        }
        function prev(){
           
           var slide = document.getElementById("slides")
           num --;
           if(num <0 ){
               num = images.length - 1
           }
           slide.src = images[num]

       }

        var sideNav = document.getElementById("sidenav")
        var menuBtn = document.getElementById("menuBtn")
        var menu = document.getElementById("menu")



        menuBtn.onclick=  function(){
            if(sideNav.style.right == "-250px"){
                
                sideNav.style.right = "0"
                menu.src = "/assets/images/close.png"
            }else{
                sideNav.style.right = "-250px"
                menu.src = "/assets/images/menu.png"
            }
        }

//makes page reload on scrolling
        AOS.init();


        var scroll = new SmoothScroll('a[href*="#"]',{
            speed:1000,
            speedAsDuration:true
        });


    </script>
    <!--AOS-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script href="/assets/js/script.js"></script>

</body>

</html>