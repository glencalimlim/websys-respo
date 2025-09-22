<?php
if (isset($_POST['submit'])) {
    function clean($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    $position   = clean($_POST['position'] ?? '');
    $date       = clean($_POST['date'] ?? '');
    $name       = clean($_POST['name'] ?? '');
    $gender     = clean($_POST['gender'] ?? '');
    $city       = clean($_POST['city'] ?? '');
    $province   = clean($_POST['province'] ?? '');
    $telephone  = clean($_POST['telephone'] ?? '');
    $cellphone  = clean($_POST['cellphone'] ?? '');
    $email      = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    $elementary = clean($_POST['elementary'] ?? '');
    $highschool = clean($_POST['highschool'] ?? '');
    $college    = clean($_POST['college'] ?? '');
    $degree     = clean($_POST['degree'] ?? '');
    $skills     = clean($_POST['skills'] ?? '');

    $company1   = clean($_POST['company1'] ?? '');
    $position1  = clean($_POST['position1'] ?? '');
    $from1      = clean($_POST['from1'] ?? '');
    $to1        = clean($_POST['to1'] ?? '');

    $refname1   = clean($_POST['refname1'] ?? '');
    $refcompany1= clean($_POST['refcompany1'] ?? '');
    $refcontact1= clean($_POST['refcontact1'] ?? '');

  
    $photoPath = "";
    if (isset($_FILES["myfile"]) && $_FILES["myfile"]["error"] == 0) {
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $file_name = time() . "_" . basename($_FILES["myfile"]["name"]);
        $target_file = $target_dir . $file_name;
        $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $allowed = ["jpg","jpeg","png","gif"];
        if (in_array($fileType, $allowed) && $_FILES["myfile"]["size"] <= 2*1024*1024) {
            if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_file)) {
                $photoPath = $target_file;
            }
        }
    }
    ?>

    
    <html>
    <head>
        <title>BIO-DATA</title>
        <style>
            body { font-family: Arial, sans-serif; margin: 20px; }
            .container { width: 800px; margin: auto; border: 2px solid black; padding: 20px; }
            h2 { text-align: center; text-transform: uppercase; }
            .section { border: 1px solid black; margin-top: 15px; padding: 10px; position: relative; }
            .section h3 { background: black; color: white; padding: 5px; margin: -10px -10px 10px -10px; }
            .row { margin-bottom: 6px; }
            .row label { font-weight: bold; display: inline-block; width: 200px; }
            .photo { position: absolute; top: 15px; right: 15px; border: 1px solid black; padding: 3px; }
            .photo img { width: 120px; height: 140px; object-fit: cover; }
        </style>
    </head>
    <body>
    <div class="container">
        <h2>BIO-DATA</h2>

        
        <div class="section">
            <h3>Personal Data</h3>
            <?php if ($photoPath): ?>
                <div class="photo"><img src="<?php echo $photoPath; ?>" alt="Uploaded Photo"></div>
            <?php endif; ?>
            <div class="row"><label>Position Desired:</label> <?php echo $position; ?></div>
            <div class="row"><label>Date:</label> <?php echo $date; ?></div>
            <div class="row"><label>Name:</label> <?php echo $name; ?></div>
            <div class="row"><label>Gender:</label> <?php echo $gender; ?></div>
            <div class="row"><label>City Address:</label> <?php echo $city; ?></div>
            <div class="row"><label>Provincial Address:</label> <?php echo $province; ?></div>
            <div class="row"><label>Telephone:</label> <?php echo $telephone; ?></div>
            <div class="row"><label>Cellphone:</label> <?php echo $cellphone; ?></div>
            <div class="row"><label>Email:</label> <?php echo $email; ?></div>
        </div>

        
        <div class="section">
            <h3>Educational Background</h3>
            <div class="row"><label>Elementary:</label> <?php echo $elementary; ?></div>
            <div class="row"><label>High School:</label> <?php echo $highschool; ?></div>
            <div class="row"><label>College:</label> <?php echo $college; ?></div>
            <div class="row"><label>Degree Received:</label> <?php echo $degree; ?></div>
            <div class="row"><label>Special Skills:</label> <?php echo $skills; ?></div>
        </div>

        
        <div class="section">
            <h3>Employment Record</h3>
            <div class="row"><label>Company Name:</label> <?php echo $company1; ?></div>
            <div class="row"><label>Position:</label> <?php echo $position1; ?></div>
            <div class="row"><label>From:</label> <?php echo $from1; ?></div>
            <div class="row"><label>To:</label> <?php echo $to1; ?></div>
        </div>

        
        <div class="section">
            <h3>Character Reference</h3>
            <div class="row"><label>Name:</label> <?php echo $refname1; ?></div>
            <div class="row"><label>Company:</label> <?php echo $refcompany1; ?></div>
            <div class="row"><label>Contact No.:</label> <?php echo $refcontact1; ?></div>
        </div>
    </div>
    </body>
    </html>

<?php
} else {
    echo "No data submitted.";
}
?>
