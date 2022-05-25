<?php
get_header();
?>

<div class="container px-5 my-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card border-0 rounded-3 shadow-lg">
        <div class="card-body p-4">
          <div class="text-center">
            <div class="h1 fw-light">Formulaire de contact</div>
            
          </div>

         

          <form id="contactForm" action="" method="post">

            <!-- Name Input -->
            <div class="form-floating mb-3">
              <input class="form-control" id="name" type="text" placeholder="Nom" data-sb-validations="required" />
              <label for="name">Nom</label>
              
            </div>

            <!-- Email Input -->
            <div class="form-floating mb-3">
              <input class="form-control" id="emailAddress" type="email" placeholder="Email " data-sb-validations="required,email" />
              <label for="emailAddress">Email </label>
             
            </div>

            <!-- Message Input -->
            <div class="form-floating mb-3">
              <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
              <label for="message">Message</label>
              
            </div>

           

            

            <!-- Submit button -->
            <div class="d-grid">
              <button class="btn btn-style btn-lg " id="submitButton" type="submit">Soumettre</button>
            </div>
          </form>
          <!-- End of contact form -->

        </div>
      </div>
    </div>
  </div>
</div>



<?php

get_footer();



