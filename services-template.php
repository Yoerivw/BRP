<?php 
$page_title = 'Welcome to BRP';
include ('assets/html/header.html');
?>

<section> 
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <h1>Ultrasound</h1>
                <p>An Ultrasound is a radiation-free form of imaging and is, therefore, safe to screen pregnancies. However, it is also used for a variety of other conditions. It is a low-cost and pain-free procedure with zero recovery time.</p>
                <br>
                <p>What you should know:</p>

                <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Before The procedure
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          During the procedure
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          After the procedure
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
      </div>
    </div>
  </div>
</div>

            </div> <!-- end column -->
            <div id="sidebar-info" class="offset-xl-2 col-xl-4 offset-lg-2 col-lg-4">
                <h4>Branches that offer this procedure:</h4>
                    <ul class="ul">
                        <a class="ul-item" href=""><li>Cape Town</li> </a>
                        <a class="ul-item"href=""><li>N1 City Hospital</li> </a>
                        <a class="ul-item" href=""><li>Kuils River Hospital</li> </a>
                        <a class="ul-item"href=""><li>Sea Point</li> </a>
                    </ul>
                <br>
                <h4>Want more information?</h4>
                    <ul class="ul">
                        <a class="ul-item"href=""><li>What is an Ultrasound?</li> </a>
                        <a class="ul-item"href=""><li>What is an ultrasound used for?</li> </a>
                        <a class="ul-item"href=""><li>How does it work ?</li> </a>
                    </ul>
            </div>
        </div>
    </div>
</section>
<section id="ultrasound">
  <div class="container">
    <img src="assets/img/brp-office.jpg" alt="">
  </div>
  
   
</section>

<?php include ('assets/html/footer.html'); ?>