<html>
  <?php include('sections/head.php')?>
  <body>

    <?php include('sections/nav.php')?>

    <div class="container-fluid contact">
      <div class="container">
        <div class="col-md-12 contact-header">
          <h1 class="center-text contact-title">Get in Touch with Ez-Lawncare!</h1>
          <p class="center-text contact-sub-title">We would love to hear from you</p>
          <div class="col-md-6 center-block"><hr></div>
        </div>
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                  <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                  <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                  <textarea class="form-control message-box" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button type="submit" class="btn btn-1">Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <?php include('sections/scripts.php')?>

  </body>
</html>