<?php
include 'DBController.php';
$db_handle = new DBController();
$countryResult = $db_handle->runQuery("SELECT DISTINCT Class FROM student_insert ORDER BY Class ASC");
?>
<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<title>student Full Details</title>
 <link rel="shortcut icon" href="img/employee.png" style="height:20px;">
</head>
<section style="width: 1650px;">
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home.php" style="font-size:30px; margin-left: 20px;"><img src="img/profile.png"> Teacher</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php" style="margin-top:5px;font-size: 20px;margin-left: 760px;">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="attendence.php" style="margin-top: 5px; font-size: 20px;">Attendance</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="student.php" style="font-size:20px;margin-top: 5px;">Student</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="teacher.php" style="font-size:20px;margin-top: 5px;">Teacher</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="event.php" style="font-size:20px;margin-top: 5px;">Event</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/test.png" style="height: 40px;width: 40px;">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="height:60px;width:10px;">
          <a class="dropdown-item" href="logout.php" class="btn btn-secondary"><button class=" btn btn-secondary">Logout</button></a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</section>
<h1 style="font-weight: 900; font-size: 46px; margin-top: 20px;">Student List <span style="color:#0080ff;">Here!</span></h1>


<body style="background-color:#F0F1F6">
    <form method="POST" name="search" action="studentfulldetail.php">
        <div id="demo-grid">
            <div class="search-box" style="background-color:#F0F1F6;">
                <select id="Place" name="class[]" multiple="multiple" style="height:150px;width: 350px;background-color:#F0F1F6;font-size: 20px;"class="form-select">
                    <option value="0" selected="selected">Select Class</option>
                        <?php
                        if (! empty($countryResult)) {
                            foreach ($countryResult as $key => $value) {
                                echo '<option value="' . $countryResult[$key]['Class'] . '">' . $countryResult[$key]['Class'] . '</option>';
                            }
                        }
                        ?>
                </select><br>
                <button id="Filter" style="background-color: green;">Search</button>
                <a href="studentlist.php" type="button" class="btn btn-primary" style="height: 37px;margin-bottom: 5px; margin-left: 3px;">Back</a>
            </div>
            
                <?php
                if (! empty($_POST['class'])) {
                    ?>
                    <table class="table table-dark table-striped table-bordered" style="width: 1200px;margin-left: 20px;">

                <thead>
                    <tr>
                        <th><strong>ID</strong></th>
                        <th><strong>Name</strong></th>
                        <th><strong>Age</strong></th>
                        <th><strong>Class</strong></th>
                        <th><strong>Date Of Birth</strong></th>
                        <th><strong>E-mail</strong></th>
                        <th><strong>Gender</strong></th>
                        <th><strong>FatherName</strong></th>
                         <th><strong>MotherName</strong></th>
                          <th><strong>Address</strong></th>
                           <th><strong>City</strong></th>
                            <th><strong>State</strong></th>
                             <th><strong>Zip</strong></th>
                        <th><strong>Contact</strong></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $query = "SELECT * from student_insert";
                    $i = 0;
                    $selectedOptionCount = count($_POST['class']);
                    $selectedOption = "";
                    while ($i < $selectedOptionCount) {
                        $selectedOption = $selectedOption . "'" . $_POST['class'][$i] . "'";
                        if ($i < $selectedOptionCount - 1) {
                            $selectedOption = $selectedOption . ", ";
                        }
                        
                        $i ++;
                    }
                    $query = $query . " WHERE class in (" . $selectedOption . ")";
                    
                    $result = $db_handle->runQuery($query);
                }
                if (! empty($result)) {
                    foreach ($result as $key => $value) {
                        ?>
                <tr>
                        <td><div class="col-md-6" id="user_data_0"><?php echo $result[$key]['id']; ?></div></td>
                        <td><div class="col-md-6" id="user_data_1"><?php echo $result[$key]['Name']; ?></div></td>
                        <td><div class="col-md-6" id="user_data_2"><?php echo $result[$key]['Age']; ?> </div></td>
                        <td><div class="col-md-6" id="user_data_3"><?php echo $result[$key]['Class']; ?> </div></td>
                        <td><div class="col-md-6" id="user_data_4"><?php echo $result[$key]['DateofBirth']; ?> </div></td>
                        <td><div class="col-md-6" id="user_data_5"><?php echo $result[$key]['Email']; ?> </div></td>
                        <td><div class="col-md-6" id="user_data_6"><?php echo $result[$key]['Gender']; ?> </div></td>
                        <td><div class="col-md-6" id="user_data_7"><?php echo $result[$key]['FatherName']; ?> </div></td>
                        <td><div class="col-md-6" id="user_data_8"><?php echo $result[$key]['MotherName']; ?> </div></td>
                        <td><div class="col-md-6" id="user_data_9"><?php echo $result[$key]['Address']; ?> </div></td>
                        <td><div class="col-md-6" id="user_data_10"><?php echo $result[$key]['City']; ?> </div></td>
                        <td><div class="col-md-6" id="user_data_11"><?php echo $result[$key]['State']; ?> </div></td>
                        <td><div class="col-md-6" id="user_data_12"><?php echo $result[$key]['Zip']; ?> </div></td>
                        <td><div class="col-md-6" id="user_data_13"><?php echo $result[$key]['Contact']; ?> </div></td>
                    </tr>
                <?php
                    }
                    ?>
                    
                </tbody>
            </table>
            <?php
                }
                ?>  
        </div>
    </form>
</body>
</html>
