<?php
include('./header.php');
?>
    <div class="container-fluid">
        <p id="heading">Property Name</p>
    </div>
  
    <div class="container-xl viewingproperty">
      <div class="row">
        <div class="col-sm align-items-center justify-content-center">
          <div id="carouselExampleCaptions" class="carousel slide align-items-center justify-content-center" data-bs-ride="carousel">
            <ol class="carousel-indicators">
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner align-items-center justify-content-center">
              <div class="carousel-item active">
                <img src="images/1example.jpg" class=" w-100 align-items-center justify-content-center" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/1example.jpg" class=" w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/1example.jpg" class=" w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev slidebutton" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next slidebutton" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>
          </div>
        </div>
     
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100 propertyinfo">
          <img src="images/centarus_circle.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Locations Nearby</h5>
            <p class="card-text">Add locations near here.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Nearby</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 propertyinfo">
          <img src="images/centarus_circle.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Like this</h5>
            <p class="card-text">Add similar property here.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">More Like This</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 propertyinfo">
          <img src="images/centarus_circle.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">More</h5>
            <p class="card-text">add links here.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Check out more properties</small>
          </div>
        </div>
      </div>
    </div>
      <div class="container contactagent" id="contact_form">
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
                <label for="exampleFormControlTextarea1" class="form-label">Your message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </form>
        <button type="button" class="btn btn-warning">Done</button>
            </div>
        </div>
        </div>
        <?php
        include('./footer.php');
        ?>