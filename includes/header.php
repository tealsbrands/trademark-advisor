<div style="display: none;" class="popupform" id="popupform">
    <h2>Start Your Project Right Away</h2>
    <div>
        <form action="/leads/" method="post" class=" signupForm">
       
                    <input type="hidden" name="route" value="<?= $_SERVER['REQUEST_URI'] ?>">   
                    <input type="hidden" name="brand" value="probookpublishing.com
">   
                    <input type="hidden" name="token" value="<?= $token;?>">   
                    <input type="hidden" name="tag" value="banner-right-form">
                    <input type="hidden" name="price" value="null">
                    <input type="hidden" name="news" value="submit">
<input type="text" class="jun"  name="gender" >>
             <div class="row pro-popup">
               <div class="col-md-12">
                 <input type="text" class="form-control" name="name" placeholder="Name" required="">
               </div>
               <div class="col-md-12">
                 <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
               </div>
               <div class="col-md-12 tel-mar">
                 <input type="number" class="form-control" name="phone" placeholder="Phone" required="">
               </div>
               <div class="col-md-12">
               <textarea name="brief" placeholder="Comments/Message*" type="text" class="form-control" id="comment" rows="6"></textarea>
               </div>
             </div>
                                  <!-- <div id="formResult"></div> -->
                     <button type="submit" value="submit" class="pro-submit"  name="">Submit</button>
            
        </form>
        <button data-fancybox-close="" class="fancybox-close-small"></button></div>
</div>
<div class="scroll-top-wrap">
  <a href="#top-head" class="scroll-top">
    <div class="scroll-span">
      <span>Scroll to top</span>
    </div>
    <div class="progress-container">
      <div class="progress-bar" id="myBar"></div>
    </div> 
  </a>
</div>
<header id="top-head" class="head-menu">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand logo" href="/"><img loading="lazy" src="images/probookwhite.png" alt="" class="img-fluid"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse top-menu justify-content-end main-menu" id="navbarNav">
        <ul class="navbar-nav" style="--line-num: 00;">
          <!-- <li class="nav-item"><a class="nav-link" href="/">Home</a></li> -->
          <!-- <li class="nav-item"><a class="nav-link" href="about.php">About</a></li> -->
          
          <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
          <li class="nav-item megamenu desktop">
            <a class="nav-link" href="#" role="button">Services</a>
            <div class="submenuwrap">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                        <div class="menu_box">
                          <div class="row">
                            <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <div class="menu_box_icon">
                                <img src="images/menu_icon1.png" alt="Branded Content">
                              </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 no_space">
                              <div class="menu_box_text">
                                <h5>Marketing Content</h5>
                              </div>
                            </div> -->
                            <div class="col-sm-4">
                              <div class="menu_box_list">
                                <ul>


                                 

                                   <li><img src="images/menu-icons/menu-icons-6.png"><a href="book-promotion/">Book Promotions</a></li>
                                    <li><img src="images/menu-icons/menu-icons-7.png"><a href="ebook-writing/">E-book Writing</a></li>
                                    <li><img src="images/menu-icons/menu-icons-8.png"><a href="editing/" >Editing</a></li>
                                    <li><img src="images/menu-icons/menu-icons-11.png"><a href="proofreading/">Proofreading</a></li>
                                    <li><img src="images/menu-icons/menu-icons-12.png"><a href="publishing/">Publishing</a></li>
                                    


                                <!--   <li><a href="ghost-writing.php">Ghostwriting</a></li>
                                  <li><a href="editing.php">Editing</a></li>
                                  <li><a href="publishing.php">Publishing</a></li>
                                  <li><a href="proofreading.php">Proofreading</a></li>
                                  <li><a href="audio-book.php">Audio Book</a></li> -->
                                 <!--  <li><a href="book-copyrights.php">Book Copyrights</a></li> -->
                                  

                                </ul>
                              </div>
                            </div>

                            <div class="col-sm-4">
                              <div class="menu_box_list">
                                <ul>

                                  <li><img src="images/menu-icons/menu-icons-1.png"><a href="article-writing/">Article Writing</a></li>
                                  <li><img src="images/menu-icons/menu-icons-2.png"><a href="audio-book/">Audio Book</a></li>
                                  <li><img src="images/menu-icons/menu-icons-3.png"><a href="author-website/">Author Website</a></li>
                                  <li><img src="images/menu-icons/menu-icons-4.png"><a href="blog-writing/">Blog Writng</a></li>
                                  <li><img src="images/menu-icons/menu-icons-5.png"><a href="book-cover/">Book Cover</a></li>

                               <!--    <li><a href="book-cover.php">Book Cover</a></li>
                                  <li><a href="book-promotion.php">Book Promotion</a></li>
                                  <li><a href="formatting.php">Formatting</a></li>
                                  <li><a href="ebook-writing.php">EBook Writing</a></li>
                                  <li><a href="blog-writing.php">Blog Writing</a></li> -->
                                  

                                </ul>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="menu_box_list">
                                <ul>
                                  <li><img src="images/menu-icons/menu-icons-9.png"><a href="formatting/">Formating</a></li>
                                    <li><img src="images/menu-icons/menu-icons-10.png"><a href="ghost-writing/">Ghostwriting</a></li>
                                    <li><img src="images/menu-icons/menu-icons-13.png"><a href="book-video-trailer/">Video Book Trailer</a></li>
                                    <li><img src="images/menu-icons/menu-icons-14.png"><a href="web-design-seo/">Web Design SEO</a></li>
                                    <li><img src="images/menu-icons/menu-icons-15.png"><a href="website-content-writing/">Website Content</a></li>


                                 <!--  <li><a href="website-content-writing.php">Website Content Writing</a></li>
                                  <li><a href="web-design-seo.php">Web Design & Seo</a></li>
                                  <li><a href="article-writing.php">Article Writing</a></li>
                                  <li><a href="book-video-trailer.php">Book Video Trailer</a></li>
                                  <li><a href="author-website.php">Author Website</a></li> -->

                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
                
                </div>
              </div>
            </div>
          </li>
          <li class="mobile_mega">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown " role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
            <div class="dropdown-menu">
                <ul class="navbar-nav submenu">
                    <li class="nav-item dropdown">
                        <!-- <a class="nav-link dropdown-toggle" href="http://example.com" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a> -->
                       <ul class="dropdown-menu navbar-nav submenu" aria-labelledby="navbarDropdownMenuLink">
                         
                          <li class="dropdown-submenu"><a class="dropdown-item" href="ghost-writing/">Ghostwriting</a></li>
                          <li class="dropdown-submenu"><a class="dropdown-item" href="editing/">Editing</a></li>
                          <li class="dropdown-submenu"><a class="dropdown-item" href="publishing/">Publishing</a></li>
                          <li class="dropdown-submenu"><a class="dropdown-item" href="proofreading/">Proofreading</a></li>
                          <li class="dropdown-submenu"><a class="dropdown-item" href="audio-book/">Audio Book</a></li>
                          <!-- <li class="dropdown-submenu"><a class="dropdown-item" href="book-copyrights.php">Book Copyrights</a></li> -->
                          <li class="dropdown-submenu"><a class="dropdown-item" href="book-cover/">Book Cover</a></li>
                          <li class="dropdown-submenu"><a class="dropdown-item" href="book-promotion/">Book Promotion</a></li>
                          <li class="dropdown-submenu"><a class="dropdown-item"  href="formatting/">Formatting</a></li>
                          <li class="dropdown-submenu"><a class="dropdown-item"  href="ebook-writing/">EBook Writing</a></li>
                          <li class="dropdown-submenu"><a class="dropdown-item"  href="blog-writing/">Blog Writing</a></li>
                          <li class="dropdown-submenu"><a class="dropdown-item"  href="website-content-writing/">Website Content Writing</a></li>
                          <li class="dropdown-submenu"><a class="dropdown-item"  href="web-design-seo/">Web Design & Seo</a></li>
                          <li class="dropdown-submenu"><a class="dropdown-item"  href="article-writing/">Article Writing</a></li>
                          <li class="dropdown-submenu"><a class="dropdown-item"  href="book-video-trailer/">Book Video Trailer</a></li>
                          <li class="dropdown-submenu"><a class="dropdown-item"  href="author-website/">Author Website</a></li>
                       </ul>
                    </li>
                    
                </ul>
            </div>
          </li>
          
          <!-- <li class="nav-item"><a class="nav-link" href="pricing.php">Packages</a></li> -->
          <li class="nav-item kindle_vella_nav"><a  class="nav-link" href="kindle-vella/"><small>NEW</small>Kindle Vella</a></li>
          <li class="nav-item"><a class="nav-link" href="testimonials/">Reviews</a></li>
          <li class="nav-item"><a class="nav-link" href="contact/">Contact</a></li>
        </ul>
      </div>
      <div class="chat-btn chatt">
        <a href="tel:+1 (650) 242-7651" class="tel-hd-btn"><i class="fa fa-phone" aria-hidden="true"></i>+1 (650) 242-7651</a>
        <a href="mailto: query@probookpublishing.com;" class="mail-hd-btn"><i class="fa fa-envelope" aria-hidden="true"></i><span  >Query@probookpublishing.com
</span></a>
        <a href="javascript:void(0)">Let's Talk</a>
      </div>
    </nav>
  </div>
</header>