<?php include 'includes/header.php';
      include 'includes/navbar.php';
?>

<h1 class="text-left">Get in touch</h1>
  <div class="row align-center contact-div">
    <div class="columns small-12 medium-7">

      <p class="text-justify contact-p">
      I find lost items in lakes all over Michigan. If you would like to hire me, up front I ask for gas and one tank of air which is $6.00. If the item is located I would like some compensation for my time. Otherwise I look for free. If you're out on a boat in one of the big lakes and have access to a GPS, the coordinates would be very helpful.
      Please leave your contact information and a phone number in a message and I will be happy to get in touch with you. Thank you. </p>
    </div>

    <div class="contact columns medium-5 small-12">

        <div class="row">
          <div class="columns medium-12"> <p class="text-right"><i class="fi-marker float-left">

          </i><h4 class="contact-text ">Port Huron, UT</h4></p>
          </div>
        </div>
        <div class="row">
          <div class="columns medium-12">
            <p class="text-right"><i class="fi-telephone float-left"></i><h4 class="contact-text"> +1-234-567-8910</h4></p>
          </div>
        </div>
          <div class="row">
            <div class="columns medium-12">
              <p class="text-right"><i class="fi-mail float-left"></i><h4 class="contact-text">scubadetector@yahoo.com</h4></p>
            </div>
          </div>
    </div>
  </div>
<hr>
    <form action="" class="email">
      <div class="row">

        <div class="columns medium-4">
          <div class="row">
            <div class="columns medium-3  text-right">
              <label for="name" class="inline middle left">Name:</label>
            </div>
            <div class="columns medium-9">
              <input type="text" name="name" id="name" placeholder="Bobby Joe" required>
            </div>
          </div>
          <div class="row">
            <div class="columns medium-3 text-right">
              <label for="emailAddress" class="inline middle left">Email:</label>
            </div>
            <div class="columns medium-9">
              <input type="email" name="email_address" id="emailAddress" placeholder="bobbyjoe@mail.com" required>
            </div>
          </div>
          <div class="row">
            <div class="columns medium-3  text-right">
              <label class="inline middle left" for="subject">Subject:</label>
            </div>
            <div class="columns medium-9">
              <input type="text" name="subject" id="subject" placeholder="Lost ring...">
            </div>
          </div>
        </div>
          <div class="columns medium-8">
            <div class="row">
              <div class="columns medium-2">
                <label for="messageInput" class=" inline middle text-right">Message:</label>
              </div>
              <div class="columns medium-10">
              <textarea type="text" name="message" class="message-input" id="messageInput" required rows="6"

              ></textarea>
            </div>
            </div>
          </div>
          <div class="columns medium-12">
        <input type="submit" value="Submit" class="float-right button submit-button">
      </div>
      </div>
    </form>




<?php include 'includes/footer.php'; ?>
