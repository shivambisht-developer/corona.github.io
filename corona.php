<!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;1,200&display=swap" rel="stylesheet"> 

    <title>COVID-19</title>
  </head>
  <body>

    <!-- nav bar -->

    <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-dark nav_style p-2">
      <a class="navbar-brand pl-5" href="#">COVID-19</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto pr-5">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#aboutid">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#sympid">Symptoms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#prevenid">Prevention</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contactid">Contact</a>
          </li>
        </ul>

      </div>
    </nav>

    <!-- main heading -->

    <div class="pt-3">
      <div  class="row w-100 h-100">
        <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
          <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
            <img src="project image/earth.png" alt="eath with mask" width="300" height="300">
          </div>


        </div>
        <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
          <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
            <h1>Let' s Stay Safe & Fight Together Against Cor<span class="corona_rot"><img src="project image/covid.png" alt="o" height="10%" width="10%"></span>na Virus</h1>
          </div>

        </div>

      </div>

    </div>

    <!-- corona live count -->

    <section class="corona-update container-fluid">
      <div class="mb-3">
        <h3 class="text-uppercase text-center">covid-19 live count of the worldwide</h3>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered table-striped text-center" id="tbval">
          <tr>
            <th>Country</th>
            <th>TotalConfirmed</th>
            <th>TotalRecovered</th>
            <th>TotalDeaths</th>
            <th>NewConfirmed</th>
            <th>NewRecovered</th>
            <th>NewDeaths</th>
            <th>Date And Time</th>
          </tr>

          <!-- php code for live count -->

          <?php
          $data=file_get_contents('https://api.covid19api.com/summary');
          $coronadata=json_decode($data,true); 
          $totalcountry= count($coronadata['Countries']);

          $i=0;
          while ($i < $totalcountry) {

            ?>
            <tr>
              <td style="color:#fff; background-color: #7a4a91"><?php echo  $coronadata['Countries'][$i]['Country'] ?></td>
              <td style="background-color: #f36e23"><?php echo  $coronadata['Countries'][$i]['TotalConfirmed'] ?></td>
              <td style="background-color: #4bb7d8"><?php echo  $coronadata['Countries'][$i]['TotalRecovered'] ?></td>
              <td style="background-color: #af5160"><?php echo  $coronadata['Countries'][$i]['TotalDeaths'] ?></td>
              <td style="background-color: #f36e23"><?php echo  $coronadata['Countries'][$i]['NewConfirmed'] ?></td>
              <td style="background-color: #9cc850"><?php echo  $coronadata['Countries'][$i]['NewRecovered'] ?></td>
              <td style="background-color: #FF4019"><?php echo  $coronadata['Countries'][$i]['NewDeaths'] ?></td>
              <td style="background-color: #FFEA80"><?php echo  $coronadata['Countries'][$i]['Date'] ?></td>

            </tr>

            <?php 

            $i++;
          }

          ?>
        </table>

      </div>

    </section>

    <!-- -------------------about section------------------------- -->

    <div class="container-fluid about pt-5 pb-5" id="aboutid">
      <div class="section_header text-center mb-5 mt-4">
        <h1>About COVID-19</h1>

      </div>
      <div class="row pt-5 ">
        <div class="col-lg-5 col-md-6 col-10 ml-5">
          <img src="project image/th.jpeg" alt="corona details image " class="img-fluid" width="100%">

        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2>What is COVID-19 (Corona-Virus)</h2>
          <p>COVID-19 is the illness that presents on being infected by a deadly coronavirus called SARS-CoV-2. This SARS-related virus was first identified in the Chinese city of Wuhan in late 2019.</p>

          <p>Coronaviruses are a family of viruses that can cause illnesses such as the common cold, severe acute respiratory syndrome (SARS) and Middle East respiratory syndrome (MERS). In 2019, a new coronavirus was identified as the cause of a disease outbreak that originated in China. The virus is now known as the severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2). The disease it causes is called coronavirus disease 2019 (COVID-19).</p>

        </div>
      </div>

    </div>

    <!-- ---------------------CORONAVIRUS SYMPTOMS------------------------ -->

    <div class="container-fluid pt-5 pb-5" id="sympid">
      <div class="section_header text-center mb-5 mt-4">
        <h1>Coronavirus Symptoms</h1>

      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12  mt-5">
            <figure class="text-center">  
              <img src="project image/cough.png" alt="" class="img-fluid" width="120" height="120">
              <figcaption>Cough</figcaption>
            </figure>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">  
              <img src="project image/sore throat.png" alt="" class="img-fluid" width="120" height="120">
              <figcaption>Sore Throat</figcaption>
            </figure>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">  
              <img src="project image/fever.png" alt="" class="img-fluid" width="120" height="120">
              <figcaption>Fever</figcaption>
            </figure>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">  
              <img src="project image/decrease in sense of smell or taste.png" alt="" class="img-fluid" width="120" height="120">
              <figcaption>Decrease In Sense Of Smell or Taste</figcaption>
            </figure>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">  
              <img src="project image/muscle aches and pains.png" alt="" class="img-fluid" width="120" height="120">
              <figcaption>Muscle Aches And Pains</figcaption>
            </figure>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">  
              <img src="project image/shortness of breath.png" alt="" class="img-fluid" width="120" height="120">
              <figcaption>Shortness Breath</figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>

    <!-- ---------PREVENTION AGAINST CORONAVIRUS---------- -->

    <div class="container-fluid pt-5 pb-5 about" id="prevenid">
      <div class="section_header text-center mb-5 mt-4">
        <h1>Prevention Against Coronavirus</h1>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">  
                  <img src="project image/handswash.png" alt="" class="img-fluid" width="90" height="90">
                </figure>

              </div>
              <div class="col-lg-8 col-md-8 col-12">
                <p>Wash your hands regularly for 20 seconds, with soap and water or alcohol-based hand rub </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">  
                  <img src="project image/wear a mask.png" alt="" class="img-fluid" width="90" height="90">
                </figure>

              </div>
              <div class="col-lg-8 col-md-8 col-12">
                <p>Everyone wears a cloth face mask in public settings where physical distancing may be difficult, such as grocery stores.  </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">  
                  <img src="project image/avoidcontact.png" alt="" class="img-fluid" width="90" height="90">
                </figure>

              </div>
              <div class="col-lg-8 col-md-8 col-12">
                <p>Avoid touching other people. Skin-to-skin contact can transmit SARS-CoV-2 from one person to another. </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">  
                  <img src="project image/avoidcrowds.png" alt="" class="img-fluid" width="90" height="90">
                </figure>

              </div>
              <div class="col-lg-8 col-md-8 col-12">
                <p>If you must go out for necessities, keep a distance of 6 feet (2 m) from other people. You can transmit the virus by speaking to someone in close contact to you.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">  
                  <img src="project image/avoidtouchingyourface.png" alt="" class="img-fluid" width="90" height="90">
                </figure>

              </div>
              <div class="col-lg-8 col-md-8 col-12">
                <p>Avoid touching any part of your face or head, including your mouth, nose, and eyes. Also avoid biting your fingernails.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <figure class="text-center">  
                  <img src="project image/cough and sneeze.png" alt="" class="img-fluid" width="90" height="90">
                </figure>

              </div>
              <div class="col-lg-8 col-md-8 col-12">
                <p>Use a tissue or sneeze into your elbow to keep your hands as clean as possible. Wash your hands carefully after you sneeze or cough, regardless.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- ---------------------Contact form------------------------ -->

    <div class="container-fluid pt-5 pb-5" id="contactid">
      <div class="section_header text-center mb-5 mt-4">
        <h1>Contact Us</h1>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 col-12">
            <form action="corona.php" method="post" accept-charset="utf-8">


              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
              </div>

              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off" required>
              </div>

              <div class="form-group">
                <label>Mobile number</label>
                <input type="number" class="form-control" name="mobile" placeholder="mobile number" autocomplete="off" required>
              </div>

              <div class="form-group">
                <label>Select Symptoms</label> <br>
                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                  <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
                  <label class="custom-control-label" for="customcheckbox1">Cold</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                  <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
                  <label class="custom-control-label" for="customcheckbox2">Fever</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                  <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
                  <label class="custom-control-label" for="customcheckbox3">Difficulty in breath</label>
                </div>

                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                  <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
                  <label class="custom-control-label" for="customcheckbox4">Feeling weak</label>
                </div>
              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
              </div>

              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>


          </div>
        </div>
      </div>
    </div>


    <!-- //////////////// scroll top button  /////////// -->

    <div class="container float-right pr-5">
      <a class="fa fa-arrow-up" id="mybtn" href="#"></a>
      
    </div>


    <!-- -------------footer-------------->

    <footer class="mt-5">
     <div class="footer-style text-white text-center container-fluid">
      <p>All rights reserved by &copy;copyright 2021</p>

    </div> 

  </footer>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>



<!-- //////// php code to connect the database ////// -->


<?php 
if(isset($_POST['submit'])) {
 
    //set connection variable

  $server="localhost";
  $username="root";
  $password="";
  $db="coronavirus";

  //create a daatabase connnection

  $con=mysqli_connect($server,$username,$password,$db);

  
   //collect post variables
  $username= $_POST['username'];
  $email= $_POST['email'];
  $mobile= $_POST['mobile'];
  $symtoms= $_POST['coronasym'];
  $msg= $_POST['msg'];
  

    // it hold all check box 
  $chk = "";
  foreach ($symtoms as $chk1) {
    $chk .=$chk1.",";
  }

  $sql = "INSERT INTO `corona`(`username`, `email`, `mobile`, `symtoms`, `message`) VALUES ('$username','$email','$mobile','$chk','$msg');";

   // execute the query
  $query = mysqli_query($con,$sql);

  if ($con) {

   ?>
   <script>
     alert("Inserted successfully");
   </script>
   <?php 
 }
 else{

   ?>
   <script>
     alert("Not inserted successfully");
   </script>
   <?php 
 }


}
?>
