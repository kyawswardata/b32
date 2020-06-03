<?php 

include_once('db/config.php');
include('header.php');
$sql = "SELECT items.*,categories.category_name FROM items INNER JOIN categories ON items.category_id = categories.id";
// echo $sql; exit();
$result = mysqli_query($con,$sql);
?>
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="#">My SHOP</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">Action 1</a>
                    <a class="dropdown-item" href="#">Action 2</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<section>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">My Online Shop</h1>
            <p class="lead">Buy Now! get DELIVERY FREE</p>
            <hr class="my-2">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident et magnam minus cumque repellat voluptatibus repellendus quae quas quibusdam sunt! Quasi nostrum, quos iste tempora voluptas corporis sit hic beatae?</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Contact Here</a>
            </p>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
        <?php while($row = mysqli_fetch_assoc($result)){
                    ?>
            <div class="col-md-3">
                <div class="card text-left shadow-sm">
                  <img class="card-img-top" src="upload/<?php echo $row['item_image'];?>" alt="" style="width:100%;height:150px;">
                  <div class="card-body">
                    <h4 class="card-title text-uppercase"><?php echo $row['item_name'];?></h4>
                    <p class="card-text">
                        <a href="#" class="btn btn-primary w-100">Add to cart</a>
                    </p>
                  </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<section class="bg-secondary py-4 text-white">
<!-- add 'footer' snippet in css -->
<div class="footer-v1 bg-img">
    <div class="footer no-margin">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="headline"><p>Exams</p></div>
                    <ul class="list-unstyled link-list">
                        <li><a href="#" class="text-white">Exam1</a></li>
                        <li><a href="#" class="text-white">Exam2</a></li>
                        <li><a href="#" class="text-white">Exam3/a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="headline"><p>Resources</p></div>
                    <ul class="list-unstyled link-list">
                        <li><a href="#" class="text-white">Blog</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
          <div class="headline"><p>Support</p></div>
          <address>
            <ul class="list-unstyled link-list">
              <li><a href="#" class="text-white">Contact Us</a></li>
              <li>
                <a href="#" class="text-white"><i class="fa fa-envelope"></i>support@company.com</a>
              </li>
            </ul>
          </address>
        </div>
                <div class="col-md-3">
                    <div class="headline"><p>Company</p></div>
                    <ul class="list-unstyled link-list">
            <li><a href="#" class="text-white">About Us</a></li>
            <li> <a href="#" class="text-white">Privacy Policy</a></li>
            <li><a href="#" class="text-white">Terms of Use</a></li>
            <li><a href="#" class="text-white">FAQs</a></li>
            <li><a href="#" class="text-white">Cancellation/Rescheduling policy</a></li>
          </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php include('footer.php');?>