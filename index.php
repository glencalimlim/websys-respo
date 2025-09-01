<?php 
$name ="Glen Paul T. Calimlim";
$title = "BS Information Technology Student (Web & App Development)";
$phone = "09513270514";
$email = "glenpaulcalimlim31@gmail.com";
$linkIn = "linkedin.com/in/glen-paul-calimlim";
$gitHub = "github.com/glencalimlim";
$address = "Payas, Santa Barbara Pangasinan";
$dateOfBirth = "January 29, 2004";
$gender = "Male";
$nationality = "Filipino";
$summary = "Enthusiastic Information Technology student specializing in Web and App Development. Dedicated to building innovative and practical digital solutions while continuously improving coding and problem-solving skills. Interested in exploring modern frameworks, database systems, and mobile technologies to create impactful applications that enhance user experience.";

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        .header{
            background: #0073b1;
            display: flex;
            align-items: center;
           padding: 20px
        }
        .header-info{
            color: #ffff
            ;
        }
        .header img{
            width: 200px;
            margin-right: 20px;
            border-radius: 10%;
        }
        .header-info h3 { 
            margin: 5px 0; 
            color: #ffffffff;
         }
        .contact{
            display: grid;
            grid-template-columns: repeat(2,1fr);
            margin-top: 10px;
        }
        .contact div { 
            margin: 10px ;
            font-size: 14px;
         }
         .section {
            margin: 20px;
         }
         .section h2{
            border-bottom: 2px solid #0073b1;
            color: #0073b1;
         }

    </style>

 </head>
 <body>
    <div class="header">
        <img src="glenpic.jpg" alt="">
     <div class="header-info">
        <h1>
            <?php 
            echo $name;
             ?>
        </h1>
         <h3><?php echo $title; ?></h3>
         <br>
         <div class="contact">
        <div><b>Phone:</b> <?php echo $phone; ?></div>
        <div><b>Address:</b> <?php echo $address; ?></div>
        <div><b>Email:</b> <?php echo $email; ?></div>
        <div><b>Date of birth:</b> <?php echo $dateOfBirth; ?></div>
        <div><b>LinkedIn:</b> <?php echo $linkIn; ?></div>
        <div><b>Gender:</b> <?php echo $gender; ?></div>
        <div><b>GitLab:</b> <?php echo $gitHub; ?></div>
        <div><b>Nationality:</b> <?php echo $nationality; ?></div>
      </div>
     </div>
    </div>

    <div class="section">
        <p>
            <?php
            echo $summary;
            ?>
        </p>
    </div>

     <div class="section">
        <h2>Education</h2>
        
        <p><b>2022 – Present</b><br>
         <b>Bachelor of Science in Information Technology</b><br>
         Major in Web and App Development<br>
         Ongoing Studies</p>
          <ul>
      <li>Focused on Web Development and Mobile Application Development</li>
      <li>Engaged in hands-on projects for academic and personal growth</li>
    </ul>
    </div>
       <br>
       <br>
        <div class="section experience">
    <h2>Experience</h2>
     
    <p><b>Academic Projects & Freelance Work</b></p>
    <ul>
    
      <li>N/A</li>
      <li>N/A</li>
    </ul>
  </div>
        <br>
        <br>
  <div class="section">
  <h2>Skills</h2>
  
    <ul>
      <li>HTMl</li>
      <li>Dart</li>
    </ul>
  </div>
 </body>
 </html>