<?php
include('./header.php');
?>
    <div class="container-fluid">
        <p id="heading">ebtada estimate</p>
    </div>
    <div class="container-md">
    <div class="row row-cols-1 row-cols-md-3 g-4 align-items-center justify-content-center">
      <div class="col align-items-center justify-content-center estimatebg">
        <div class="card h-100">
          <img src="images/newhome.png" class="card-img-top w-100" alt="house">
          <div class="card-body estimatecard  ">
            <h5 class="card-title">Welcome</h5>
            <p class="card-text">ebtada Estimate is an approximate calculation of a home's market value. <br> It is not an appraisal; it is a starting point in determining a home’s and plots value.

              Check out our FAQ page for more details! </p>
              <button type="button" class="btn btn-outline-warning"><a href="faq.php">FAQ</a></button>

          </div>
        </div>
      </div>
      <div class="col align-items-center justify-content-center estimatebg">
        <div class="card h-100">
          
          <div class="card-body estimatecard  ">
            <h5 class="card-title">More Info</h5>
            <p class="card-text">The estimates are based on publicly available information and agent-reported
              transactions, including: property tax information, recent sales of similar nearby homes. Currently, ebtada Estimates are available for single-family homes, condos, and
                  town homes across Rawalpindi and Islamabad.
            
            </p> </div>
            <img src="images/newhome2.png" class="card-img-top w-100" alt="house">
        </div>
      </div>
    </div>
  </div> 
<div class="container-xl ebtadaestimate-box  g-4 align-items-center justify-content-center">
<div class="row w-100 d-flex justify-content-center align-items-center main_div">
<div class="col-12 col-md-8 col-xxl-5">
<form>
  <div class="mb-3">
    <h1 class="display-6">Form</h1>
  </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Name">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control is-invalid" id="floatingInputInvalid" placeholder="name@example.com" value="test@example.com">
      </div>
      <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">CNIC</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="CNIC">
    </div>
    <div class="mb-3">
    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option selected>Estimate type</option>
        <option value="1">Plot estimate</option>
        <option value="2">House estimate</option>
        <option value="3">Rakba estimate</option>
        <option value="4">Commercial estimate</option>
        <option value="5">Rakba estimate</option>
      </select></div>
      <div class="mb-3">
      <select class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option selected>Payment type</option>
        <option value="1">Mobi Cash: +92303-3133389</option>
    </select></div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Any Comments</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <span> Possession letter</span>
    <div class="input-group">
        <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
        <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Confirm</button>
      </div></div>
      <div class="mb-3">
        <span>Allotment letter</span>
        <div class="input-group">
            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Confirm</button>
          </div></div>
          <div class="mb-3">
            <span>Affidavit</span>
            <div class="input-group">
                <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Confirm</button>
              </div>
             </div>
            <div class="mb-3">
              <button type="button" class="btn btn-outline-primary">Done</button>
            </div>
            


</form>

    </div>
</div>
</div>
</div>

<?php
include('./footer.php');
?>
