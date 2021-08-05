<?php
include('./header.php');
?>
    <div class="container-fluid">
        <p id="heading">Browse through hundreds of deals.</p>
    </div> 
    <nav class="navbar navbar-light" style="background-color: #75ff81;">
        <div class="container-fluid">
          <a class="navbar-brand filtertext" href="#">Filter before you search</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline my-2">
                  <div class="col-sm-3">
                    <label class="visually-hidden" for="specificSizeSelect">Goal</label>
                    <select class="form-select" id="specificSizeSelect">
                      <option selected>Buy</option>
                      <option value="1">Rent</option>
                    </select>
                  </div>
                  <div class="col-sm-3">
                    <label class="visually-hidden" for="specificSizeSelect">Type</label>
                    <select class="form-select" id="specificSizeSelect">
                      <option selected>Type</option>
                      <option value="1">House</option>
                      <option value="2">Apartment</option>
                      <option value="2">Plot</option>
                      <option value="2">Rentals</option>
                    </select>
                  </div>
                  <div class="col-sm-3">
                    <label class="visually-hidden" for="specificSizeSelect">City</label>
                    <select class="form-select" id="specificSizeSelect">
                      <option selected>City</option>
                      <option value="1">Islamabad</option>
                      <option value="2">Rawalpindi</option>
                    </select>
                  </div></form>
                  <form class="form-inline my-2">
                  <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Location" aria-label="Zip">
                  </div>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Price" aria-label="Zip">
                  </div>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Keyword" aria-label="Zip">
                  </div>
                  <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Search</button>
                  </div>
                  </form>
          </div>
        </div>
      </nav>






<div class="container propertyboxes">
<div class="row  justify-content-center">
        <div class="col-md-4 product-grid">
        <div class="image">
            <a href="#">
                <img src="images/estimate_house.png" class="w-100">
                <div class="overlay">
                    <div class="detail">View Details</div>
                </div>
            </a>
        </div>
        <h5 class="text-center">Property for Users</h5>
        <h6 class="text-center">Price: <span>$000</span></h6>
        <h6 class="text-center">Location: <span>Islamabad</span></h6>
        <h6 class="text-center">Size: <span>Marla</span></h6>
        <button type="button" class="btn btn-dark"><a href="viewingproperty.php">View</a></button></div>

    <div class="col-md-4 product-grid">
        <div class="image">
            <a href="#">
                <img src="images/estimate_house.png" class="w-100">
                <div class="overlay">
                    <div class="detail">View Details</div>
                </div>
            </a>
        </div>
        <h5 class="text-center">Property for Users</h5>
        <h6 class="text-center">Price: <span>$000</span></h6>
        <h6 class="text-center">Location: <span>Islamabad</span></h6>
        <h6 class="text-center">Size: <span>Marla</span></h6>
        <button type="button" class="btn btn-dark"><a href="viewingproperty.php">View</a></button></div>
        <div class="col-md-4 product-grid">
            <div class="image">
                <a href="#">
                    <img src="images/estimate_house.png" class="w-100">
                    <div class="overlay">
                        <div class="detail">View Details</div>
                    </div>
                </a>
            </div>
            <h5 class="text-center">Property for Users</h5>
            <h6 class="text-center">Price: <span>$000</span></h6>
            <h6 class="text-center">Location: <span>Islamabad</span></h6>
            <h6 class="text-center">Size: <span>Marla</span></h6>
            <button type="button" class="btn btn-dark">View</button></div>
            
            <div class="col-md-4 product-grid">
                <div class="image">
                    <a href="#">
                        <img src="images/estimate_house.png" class="w-100">
                        <div class="overlay">
                            <div class="detail">View Details</div>
                        </div>
                    </a>
                </div>
                <h5 class="text-center">Property for Users</h5>
                <h6 class="text-center">Price: <span>$000</span></h6>
                <h6 class="text-center">Location: <span>Islamabad</span></h6>
                <h6 class="text-center">Size: <span>Marla</span></h6>
                <button type="button" class="btn btn-dark"><a href="viewingproperty.php">View</a></button></div>
</div>


</div>

<?php
include('./footer.php');
?>