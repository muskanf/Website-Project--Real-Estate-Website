<?php
include('./header.php');
?>
    <div class="container-fluid">
        <p id="heading">Payment for Soil Testing</p>
    </div>
    <div class="container-sm soilpay">
    <form>
        <div class="mb-2">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Name">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control is-invalid" id="floatingInputInvalid" placeholder="name@example.com" value="test@example.com">
      <label for="floatingInputInvalid">Invalid input</label>
          </div>
          <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">CNIC</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="CNIC">
        </div>
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
                  </div></div>
                  <div class="card border-warning mb-3" style="max-width: 18rem;">
                    <div class="card-header"><span>Note</span></div>
                    <div class="card-body">
                        Payment has to be done before we procress your request. You will be notified 
                        with a message from our team on your email and personal number that your payment has been received.
                        Soil testing report will be delivered in <span>10</span> days.
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>

                  <button type="button" class="btn btn-secondary">Submit</button>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </form></div>
    <?php
include('./footer.php');
?>