     <!-- Footer Section -->
     <footer class="footer-section">
            <div class="container">
                <div class="row align">
                <div class="col-md-2">
                  <div class="footer-image-wrapper">
                    <img src="/assets/images/trademark-logo.png" alt="">
                  </div>
                        <h4 class="forange">Follow Us On</h4>
                        <div class="icons1 logo">
                            <a href="https://www.facebook.com/amzinventors/" class="bi bi-facebook" target="_blank"></a>
                            <a href="https://www.instagram.com/amzinventors/" class="bi bi-instagram" target="_blank"></a>
                           </div>
                    </div>
                    <div class="col-md-3">
                        <h4 class="forange">Quick Links</h4>
                        <ul class="contact-info">
                            <li><a href="#">Home</a></li>
                            <li><a href="about/">About Us</a></li>
                            <li><a href="case-studies/">Case Studies</a></li>
                            <li><a href="privacy-policy/">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4 class="forange">Services</h4>
                        <ul class="contact-info">
                            <li><a href="amazon/">Amazon FBA Wholesale</a></li>
                            <li><a href="shopify/">Shopify Dropshipping</a></li>
                            <li><a href="tiktok/">TikTok Shop</a></li>
                            <li><a href="walmart/">Walmart Dropshipping</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4 class="forange">Lets Talk</h4>
                        <ul class="contact-info">
                            <li > <i class="bi bi-envelope"></i><a href="mailto:info@trademarkadvisor.com" ><span>info@trademarkadvisor.com</span></a></li>
                            <li><i class="bi bi-telephone"></i><a href="tel:+1 1111222233333">+1 1111222233333</a></li>
                            <li><i class="bi bi-geo-alt-fill"></i>Lorem ipsum dolor sit amet.</li>
                        </ul>
                    </div>
                    
                </div>
                <hr  class="horizontal-line">
                <div class="copyright text-center">
                    <p>© 2024 Copyrights <span style="color: #fb2201;"><b>Trademark Advisor</b></span> All Rights Reserved.</p>
                </div>
            </div>
        </footer>
        <div id="quoteModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
   <div class="row">
    <div class="col-lg-6">
      <div class="modal-first">
      <div class="modal-image-wrapper">
        <img src="../img/amz-inventors-logo.webp" alt="">
      </div>
      <h3>GET FREE Analysis</h3>
      <p>
      At Trademark Advisor, we are committed to delivering outstanding service and support to our clients. Whether you have questions about our offerings, wish to collaborate, or need assistance, we are here to help.
      </p>
      </div>
    </div>
    <div class="col-lg-6">
    <div class="modal-lines text-center">
      <h2 class="modal-heading">Request an <span>Appointment</span></h2>
      <p class="modal-subheading">Signup and get free consultation</p>
    </div>
      <form class="animate__animated animate__pulse" id="contact" action="/leads/" method="POST">
        <div class="row">
            <div class="">
              <fieldset>
                <input placeholder="Your Name" type="text" tabindex="1" name="name" required>
              </fieldset>
            </div>
            <div class="">
              <fieldset>
                <input placeholder="Email Address" type="email" tabindex="2" name="email" required>
              </fieldset>
            </div>
            <div class="">
              <fieldset>
                <input placeholder="Phone" type="tel" tabindex="3" name="phone" required>
              </fieldset>
            </div>
            <div class="">
              <fieldset>
                <textarea placeholder="Project description" tabindex="5" name="brief" required rows="4" cols="20" class="modal-text"></textarea>
              </fieldset>
              <fieldset>
                <div class="modal-button-div">
                <button name="submit" class="amz-button" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                </div>
              </fieldset>
            </div>
        </div>
        <input type="hidden" name="route" value="form/">
        <input type="hidden" name="brand" value="AmzInventors">
        <input type="hidden" name="token" value="<?= $token; ?>">
        <input type="hidden" name="tag" value="sidepanel form in landing-page">
        <input type="hidden" name="price" value="null">
        <input type="hidden" name="news" value="1">
        <input type="hidden" class="jun" name="gender">
      </form>
    </div>
   </div>
  </div>
</div>


        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 
<script>
  AOS.init();
</script>

 <script>

var modal = document.getElementById("quoteModal");


var buttons = document.getElementsByClassName("quote-button");


var span = document.getElementsByClassName("close")[0];


function openModal() {
  modal.style.display = "block";
}


function closeModal() {
  modal.style.display = "none";
}


for (var i = 0; i < buttons.length; i++) {
  buttons[i].onclick = openModal;
}


span.onclick = closeModal;


window.onclick = function(event) {
  if (event.target == modal) {
    closeModal();
  }
}

  $(".phone-country").intlTelInput({
    geoIpLookup: function(s) {
      $.get("https://ipinfo.io", function() {}, "jsonp").always(function(i) {
        s(i && i.country ? i.country : ""), (e = i.ip);

        

      });
    },
    initialCountry: "auto",
    nationalMode: !0,
    separateDialCode: !0,
  });
</script>

<script>
  $('.telsubmit').on('submit', function(e) {
    if ($('.selected-flag').length > 0) {
      var countrycode = $('.selected-flag').attr('title');
      $('.telsubmit').append($(`<input type="hidden" name="countrycode" value="${countrycode}" />`))
      $(this).submit();
    }
    return true;
  })
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('.testimonial-card-slider').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      dots: false,
      arrows: true,
      prevArrow: '<button type="button" class="slick-prev">❮</button>',
      nextArrow: '<button type="button" class="slick-next">❯</button>',
      responsive: [
        {
          breakpoint: 1025,  // Tablet size and above
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 768,  // Mobile size
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 480,  // Extra small mobile devices
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,  // Hide arrows on very small screens
          }
        }
      ]
    });
  });
</script>