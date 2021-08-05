<?php
include('./header.php');
?>
    <div class="container-fluid">
        <p id="heading">Our Furniture Deals.</p>
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
                    </select>
                  </div>
                  <div class="col-sm-3">
                    <label class="visually-hidden" for="specificSizeSelect">Type</label>
                    <select class="form-select" id="specificSizeSelect">
                      <option selected>Type</option>
                      <option value="1">Office Furniture</option>
                      <option value="2">House Furniture</option>
                      <option value="2">Accessories</option>
                      <option value="2">Sale</option>
                    </select>
                  </div>
                </form>
                  <form class="form-inline my-2">
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
        <h5 class="text-center">Furniture Name</h5>
        <h6 class="text-center">Price: <span>$000</span></h6>
        <h6 class="text-center">Type: <span>type</span></h6>
  
        <button type="button" class="btn btn-dark"><a href="viewingfurniture.php">View</a></button></div>

    <div class="col-md-4 product-grid">
        <div class="image">
            <a href="#">
                <img src="images/estimate_house.png" class="w-100">
                <div class="overlay">
                    <div class="detail">View Details</div>
                </div>
            </a>
        </div>
        <h5 class="text-center">Furniture Name</h5>
        <h6 class="text-center">Price: <span>$000</span></h6>
        <h6 class="text-center">Type: <span>type</span></h6>
        <button type="button" class="btn btn-dark"><a href="viewingfurniture.php">View</a></button></div>
        <div class="col-md-4 product-grid">
            <div class="image">
                <a href="#">
                    <img src="images/estimate_house.png" class="w-100">
                    <div class="overlay">
                        <div class="detail">View Details</div>
                    </div>
                </a>
            </div>
            <h5 class="text-center">Furniture Name</h5>
        <h6 class="text-center">Price: <span>$000</span></h6>
        <h6 class="text-center">Type: <span>type</span></h6>
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
                <h5 class="text-center">Furniture Name</h5>
        <h6 class="text-center">Price: <span>$000</span></h6>
        <h6 class="text-center">Type: <span>type</span></h6>
                <button type="button" class="btn btn-dark"><a href="viewingfurniture.php">View</a></button></div>
</div>


</div>

<?php
include('./footer.php');
?>