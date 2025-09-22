<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BIO-DATA</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    .container {
      width: 800px;
      margin: auto;
      border: 2px solid black;
      padding: 20px;
    }
    h2 {
      text-align: center;
      text-transform: uppercase;
    }
    .section {
      border: 1px solid black;
      margin-top: 15px;
      padding: 10px;
    }
    .section h3 {
      background: black;
      color: white;
      padding: 5px;
      margin: -10px -10px 10px -10px;
    }
    .form-row {
      display: flex;
      justify-content: space-between;
      margin-bottom: 8px;
    }
    .form-row label {
      width: 200px;
      font-weight: bold;
    }
    .form-row input {
      flex: 1;
      padding: 5px;
    }
    textarea {
      width: 100%;
      height: 60px;
      margin-top: 5px;
    }
    .upload {
      margin-top: 10px;
    }
    .submit-btn {
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Bio-Data</h2>

    <form action="process.php" method="post" enctype="multipart/form-data">
      
      <!-- PERSONAL DATA -->
      <div class="section">
        <h3>Personal Data</h3>
        <div class="form-row">
          <label for="position">Position Desired:</label>
          <input type="text" name="position" id="position">
        </div>
        <div class="form-row">
          <label for="date">Date:</label>
          <input type="date" name="date" id="date">
        </div>
        <div class="form-row">
          <label for="name">Full Name:</label>
          <input type="text" name="name" id="name">
        </div>
        <div class="form-row">
          <label for="gender">Gender:</label>
          <input type="text" name="gender" id="gender">
        </div>
        <div class="form-row">
          <label for="city">City Address:</label>
          <input type="text" name="city" id="city">
        </div>
        <div class="form-row">
          <label for="province">Provincial Address:</label>
          <input type="text" name="province" id="province">
        </div>
        <div class="form-row">
          <label for="telephone">Telephone:</label>
          <input type="text" name="telephone" id="telephone">
        </div>
        <div class="form-row">
          <label for="cellphone">Cellphone:</label>
          <input type="text" name="cellphone" id="cellphone">
        </div>
        <div class="form-row">
          <label for="email">E-mail Address:</label>
          <input type="email" name="email" id="email">
        </div>

       
        <div class="upload">
          <label for="photo">Upload Photo:</label>
          <input type="file" name="myfile" id="photo">
        </div>
      </div>

      <!-- EDUCATIONAL BACKGROUND -->
      <div class="section">
        <h3>Educational Background</h3>
        <div class="form-row">
          <label for="elementary">Elementary:</label>
          <input type="text" name="elementary" id="elementary">
        </div>
        <div class="form-row">
          <label for="highschool">High School:</label>
          <input type="text" name="highschool" id="highschool">
        </div>
        <div class="form-row">
          <label for="college">College:</label>
          <input type="text" name="college" id="college">
        </div>
        <div class="form-row">
          <label for="degree">Degree Received:</label>
          <input type="text" name="degree" id="degree">
        </div>
        <div class="form-row">
          <label for="skills">Special Skills:</label>
          <textarea name="skills" id="skills"></textarea>
        </div>
      </div>

      <!-- EMPLOYMENT RECORD -->
      <div class="section">
        <h3>Employment Record</h3>
        <div class="form-row">
          <label for="company1">Company Name:</label>
          <input type="text" name="company1" id="company1">
        </div>
        <div class="form-row">
          <label for="position1">Position:</label>
          <input type="text" name="position1" id="position1">
        </div>
        <div class="form-row">
          <label for="from1">From:</label>
          <input type="date" name="from1" id="from1">
        </div>
        <div class="form-row">
          <label for="to1">To:</label>
          <input type="date" name="to1" id="to1">
        </div>
      </div>

      <!-- CHARACTER REFERENCE -->
      <div class="section">
        <h3>Character Reference</h3>
        <div class="form-row">
          <label for="refname1">Name:</label>
          <input type="text" name="refname1" id="refname1">
        </div>
        <div class="form-row">
          <label for="refcompany1">Company:</label>
          <input type="text" name="refcompany1" id="refcompany1">
        </div>
        <div class="form-row">
          <label for="refcontact1">Contact No.:</label>
          <input type="text" name="refcontact1" id="refcontact1">
        </div>
      </div>

      <!-- Submit -->
      <div class="submit-btn">
        <button type="submit" name="submit">Submit</button>
      </div>
    </form>
  </div>
</body>
</html>
