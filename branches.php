<?php 
$page_title = 'Welcome to BRP';
include ('assets/html/header.html');
?>

<section id="branches">
    <div class="container-fluid">
    <h1 class="branches-header">Kuils River Hospital</h1>
        <div class="row">
            <div class="col-lg-4 col-12">
            <h3 class="procedures-menu_header">Procedures</h3>
                <ul class="procedures-menu_list">
                    <li class="procedures-menu_list-item">x-Rays</li>
                    <li class="procedures-menu_list-item">Ultrasounds</li>
                    <li class="procedures-menu_list-item">Musculoskeletal Ultrasound</li>
                    <li class="procedures-menu_list-item">Cardiac CT</li>
                    <li class="procedures-menu_list-item">Occupational Health</li>
                    <li class="procedures-menu_list-item">Fluoroscopy</li>
                    <li class="procedures-menu_list-item">Cardiac MRI</li>
                    <li class="procedures-menu_list-item">Mammogram</li>
                </ul>
            </div>

             <div class="col-lg-4 col-12">
                <h3>Find Us</h3>
                <p class="address">33 Van Riebeeck Road Kuils River, 7580</p>
                <div style="width: 100%"><iframe width="100%" height="300" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=33%20van%20Riebeeck%20Road%20Kuils%20River%2C%207580+(Kuils%20River%20Hospital)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Google map generator</a></iframe></div><br />
            </div>

             <div class="col-lg-4">
               
                    <div class="col-lg-6 offset-lg-3">
                    <h3>Contact us</h3>
                    <p>+27 (0)21 900 6600</p>
                <h4>Queries</h4>
                    <form id="form-queries" action="">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nameInput" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                        
                        <input type="email" class="form-control" id="emailinput" placeholder="Enter Your Email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        
                        <textarea class="form-control" id="messageInputArea" rows="3" placeholder="Write Your message here"></textarea>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Submit</button>
                
                
                </form>
                    </div>
                


            </div>
        </div>
    </div><!-- end container -->
</section><!-- end section -->

<?php include ('assets/html/footer.html'); ?>