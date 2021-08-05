<?php
include('./header.php');
?>
    <div class="container-fluid">
        <p id="heading">Contact Us</p>
    </div> 
    <div class="container-sm px-4">
        <div class="row gx-5 contacthouse">
          <div class="col ">
            <img src="images/house0.png" class="img-fluid w-50" alt="...">
        </div>
      </div>
      
      <div class="container-xl" id="contact_form">
        <div class="row w-100 d-flex justify-content-center align-items-center main_div">
        <div class="col-12 col-md-8 col-xxl-5">
        <form>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Name">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control is-invalid" id="floatingInputInvalid" placeholder="name@example.com" value="test@example.com">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </form>
        <button type="button" class="btn btn-warning">Done</button>
            </div>
        </div>
        </div>

        <div class="container-lg">
            <section>
        <a class="method method--mobile" href="#">
                <div class="method__icon-con method__icon-con--mobile"><span class="icon"></span>
                  <span class="mobile-lines">
                    <span class="mobile-lines__line mobile-lines__line--small"></span>
                    <span class="mobile-lines__line mobile-lines__line--big"></span>
                  </span>
                </div>
              </a>
            
              <a class="method method--fb" href="#">
                <div class="method__icon-con method__icon-con--fb">
                  <span class="icon"><span></span></span>
                  <span class="bubble">
                    <span class="tail"></span>
                  </span>
                </div>
              </a>
            
              <a class="method method--email" href="#">
                <div class="method__icon-con method__icon-con--email"><span class="icon"></span></div>
              </a>
               </section></div>
               <?php
include('./footer.php');
?>