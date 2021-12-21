<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include 'link/link.php'; ?>
  <?php include 'css/style.php'; ?>
  

</head>

<body onload="fetch()">
  <nav class="navbar navbar-expand-lg nav_style p-3 mr-0">
    <a class="navbar-brand pl-5" href="#">Covid-19 Tracker</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
          <a class="nav-link" href="#symptomsid">Symptoms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#preventionsid">Prevention</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            World
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#updates">World</a>
            <a class="dropdown-item" href="#">India</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contactid">Contact Us</a>
        </li>

      </ul>

    </div>
  </nav>

  <div class="main_header">
    <div class="row w-100 h-100">
      <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
        <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
          <img src="images\eksath.png" alt="" width="300" height="300">
        </div>

      </div>
      <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1 ">
        <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
          <h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rot"><img src="images\covid.png"
                width="45" height="45" alt=""></span>na Virus..!!</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- *****************CORONA LATEST UPDATES********************-->
  <section class="corona_updates container-fluid" id="updates">
    <div class="mb-3">
      <h3 class="text-uppercase text-center">Covid-19 Updates</h3>
    </div>
    

    <div class="table-responsive">
      <table class="table table-bordered table-striped text-center" id="tbval">
        <tr>
          <th>Country</th>
          <th>Total Confirmed</th>
          <th>Total Recovered</th>
          <th>Total Deaths</th>
          <th>New Confirmed</th>
          <th>New Recovered</th>
          <th>New Deaths</th>
          <!-- <th>New Deaths</th> -->
        </tr>
      </table>
    </div>
  </section>
  <!-- **********************About section****************** -->
  <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
    <div class="section_header text-center mb-5 mt-4">
      <h1>About COVID-19</h1>
    </div>
    <div class="row pt-5">
      <div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
        <img src="images/about1.jpg" class="img-fluid">
      </div>
      <div class="col-md-6 col-md-6 col-12">
        <h2>What is COVID-19 ?</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab animi commodi nihil maiores ut temporibus? Magnam
          esse repudiandae atque porro et eligendi minus at amet doloribus. Laudantium eius reprehenderit quibusdam!
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo dignissimos </p>
        <p>cum harum mollitia necessitatibus optio accusantium, quod sunt porro temporibus iusto modi doloremque
          quaerat, facilis distinctio aut at doloribus pariatur ratione, sapiente laudantium hic! Illum sequi porro
          totam qui veniam non, saepe nobis possimus incidunt ex quibusdam asperiores? Voluptatem, cum.</p>
      </div>
    </div>
  </div>
  <!-- *****************SYMPTOMS SECTION********************-->
  <div class="container-fluid  pt-5 pb-5" id="symptomsid">
    <div class="section_header text-center mb-5 mt-4">
      <h1>Coronavirus Symptoms</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12 text-center mt-5">
          <img src="images/1.jpg" class="img-fluid" width="120" height="120">
          <h3>Chest Pain</h3>
        </div>
        <div class="col-lg-4 col-md-4 col-12 text-center mt-5">
          <img src="images/2.jpg" class="img-fluid" width="120" height="120">
          <h3>Headahe</h3>
        </div>
        <div class="col-lg-4 col-md-4 col-12 text-center mt-5">
          <img src="images/3.jpg" class="img-fluid" width="120" height="120">
          <h3>Fever</h3>
        </div>
        <div class="col-lg-4 col-md-4 col-12 text-center mt-5 ">
          <img src="images/4.jpg" class="img-fluid" width="120" height="120">
          <h3>Cough</h3>
        </div>
        <div class="col-lg-4 col-md-4 col-12 text-center mt-5">
          <img src="images/5.jpg" class="img-fluid" width="120" height="120">
          <h3>Sore Throat</h3>
        </div>
        <div class="col-lg-4 col-md-4 col-12 text-center mt-5">
          <img src="images/6.jpg" class="img-fluid" width="120" height="120">
          <h3>Running Nose</h3>
        </div>
      </div>
    </div>
  </div>

  <!-- ****************************PREVENTIONS***************************** -->
  <div class="container-fluid sub_section pt-5 pb-0" id="preventionsid">
    <div class="section_header text-center mb-5 mt-4">
      <h1>6 Steps Prevention Against Corona Virus</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12 text-center mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 ">
              <img src="images/11.jpg" class="img-fluid" width="120" height="120">
            </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, est ex voluptatem maxime nostrum.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 text-center mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 ">
              <img src="images/22.jpg" class="img-fluid" width="120" height="120">
            </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, est ex voluptatem maxime nostrum.</p>
            </div>
          </div>
        </div>



        <div class="col-lg-4 col-md-4 col-12 text-center mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 ">
              <img src="images/33.jpg" class="img-fluid" width="120" height="120">
            </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, est ex voluptatem maxime nostrum.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 text-center mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 ">
              <img src="images/44.jpg" class="img-fluid" width="120" height="120">
            </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, est ex voluptatem maxime nostrum.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 text-center mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 ">
              <img src="images/55.jpg" class="img-fluid" width="120" height="120">
            </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, est ex voluptatem maxime nostrum.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 text-center mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 ">
              <img src="images/66.jpg" class="img-fluid" width="120" height="120">
            </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, est ex voluptatem maxime nostrum.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
<!-- *********************Contact US****************** -->
<div class="container-fluid  pt-5 pb-5" id="contactid">
    <div class="section_header text-center mb-5 mt-4">
      <h1>Contact Us</h1>
     </div>
     <div class="container">
       <div class="row">
         <div class="col-lg-8 offset-lg-2 col-12">
           <form action="" method="POST">
            <div class="form-group">
    <label>Username</label>
    <input type="name" class="form-control" name="username" placeholder="Username" required >
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
  </div>
   <div class="form-group">
    <label>Mobile NO.</label>
    <input type="number" class="form-control" name="mobile" placeholder="Username" required >
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
      <label class="custom-control-label" for="customcheckbox3">Difficulty in Breath</label> 
    </div>

     <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
      <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired"> 
      <label class="custom-control-label" for="customcheckbox4">Feeling weak</label> 
    </div>
  </div>
  
  <div class="form-group">
    <label>Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="msg" rows="3"></textarea>
  </div>

  <button type="submit" class="btn text-center btn-primary" name="submit">Submit</button>
</form>
         </div>
       </div>
     </div>
</div>
<!-- **********************TOP CURSOR************** -->
<div class="container scrolltotop float-right pr-5">
  <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>
<script type="text/javascript">

$('.count').counterUp({
  delay:10,
  time:3000
})

  mybutton=document.getElementById("myBtn");
  window.onscroll=function() {scrollFunction()};
  function scrollFunction() {
    if(document.body.scrollTop > 350 || document.documentElement.scrollTop > 350) {
      mybutton.style.display = "block";
    }
    else{
      mybutton.style.display ="none";
    }
  }
  function topFunction() {
    document.body.scrollTop =0;
    document.documentElement.scrollTop =0;
  }

  function fetch(){
    $.get("https://api.covid19api.com/summary",
        function(data){
          // console.log(data['Countries'].length)
          var tbval= document.getElementById('tbval');
          for(var i=1; i<(data['Countries'].length);i++){
              var x= tbval.insertRow();

              x.insertCell(0);

              tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
              tbval.rows[i].cells[0].style.background = '#7a4a91';
              tbval.rows[i].cells[0].style.color = '#fff';

              x.insertCell(1);

              tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
              tbval.rows[i].cells[1].style.background = '#4bb7d8';
              
              x.insertCell(2);
              tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
              tbval.rows[i].cells[2].style.background = '#ffabab';

              x.insertCell(3);
              tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
              tbval.rows[i].cells[3].style.background = '#f36e26';

              x.insertCell(4);
              tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
              tbval.rows[i].cells[4].style.background = '#4bb7d8';
              
              x.insertCell(5);
              tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
              tbval.rows[i].cells[5].style.background = '#83ff36';

              x.insertCell(6);
              tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
              tbval.rows[i].cells[6].style.background = '#ffc175';

          }
        }
      );
  }
</script>

<!-- ************************FOOTER***********************-->
<footer class="mt-5">
  <div class="footer_style text-white text-center container-fluid">
    <p>Copyright by Prathamesh Patil</p>
  </div>
  <!-- <div class="footer text-white text-center container-fluid">
    <p>copyright</p>
  </div>
   -->
</footer>

</body>

</html>

<?php 



include 'dbcon.php';

if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $symp=$_POST['coronasym'];
  $msg=$_POST['msg'];

      $chk='';
      foreach($symp as $chk1){
      $chk .=$chk1.",";
      }   
   $insertquery = "insert into coronacase(username, email ,mobile, symp, message) values('$username', '$email','$mobile','$chk','$msg')";

   $query=mysqli_query($con ,$insertquery);
   if($con){
  ?>
  <script>
    alert("connection successful");
  </script>
  <?php
}else{
  ?>
  <script>
    alert("connection NOT successful");
  </script>
  <?php
}

}


?>