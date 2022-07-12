<?php
include 'DBController.php';
$db_handle = new DBController();
$countryResult = $db_handle->runQuery("SELECT DISTINCT Class FROM student_insert ORDER BY Class ASC");
?>
<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<title>Class-wise</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary col-md-6" style="width:1500px;position: relative;height: 80px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</div>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
        <h1 style="font-weight:800;text-shadow: 2px 2px white;"><svg style="height: 50px;width: 50px;margin-right: 5px;margin-left: 10px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="users" class="svg-inline--fa fa-users fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path></svg>Student<span style="color:white;text-shadow: 2px 2px black;">-List</span></h1>
      </li>
      <li>
        <a class="nav-link" href="" style="margin-left:950px;"><img src="img/icons/gmail.png" style="height:30px;width: 30px;"></a>
      </li>
       <li class="nav-item-dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons"><img src="img/notification.png" style="height:30px;width: 30px;"></i>
                  
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" style="margin-left:600px">
                  <h5 style="margin-left:10px;margin-top: 10px;">Notification</h5><hr>

                  <!--1-->
                  <a class="dropdown-item" href="#"><svg style="height: 30px;width: 30px;display: inline;margin-right: 7px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paper-plane" class="svg-inline--fa fa-paper-plane fa-w-16" role="img"  viewBox="0 0 512 512"><path fill="currentColor" d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z"></path></svg>Groups & Messages</a>

                  <!--2-->

                  <a class="dropdown-item" href="#"><svg style="height: 30px;width: 30px;display: inline;margin-right: 7px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clipboard-list" class="svg-inline--fa fa-clipboard-list fa-w-12" role="img" viewBox="0 0 384 512"><path fill="currentColor" d="M336 64h-80c0-35.3-28.7-64-64-64s-64 28.7-64 64H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM96 424c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm0-96c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm0-96c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm96-192c13.3 0 24 10.7 24 24s-10.7 24-24 24-24-10.7-24-24 10.7-24 24-24zm128 368c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-96c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-96c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16z"></path></svg>Salary-Details</a>


                  <!--3-->

                  <a class="dropdown-item" href="#"><svg style="height: 30px;width: 30px;display: inline;margin-right: 7px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="wallet" class="svg-inline--fa fa-wallet fa-w-16" role="img"  viewBox="0 0 512 512"><path fill="currentColor" d="M461.2 128H80c-8.84 0-16-7.16-16-16s7.16-16 16-16h384c8.84 0 16-7.16 16-16 0-26.51-21.49-48-48-48H64C28.65 32 0 60.65 0 96v320c0 35.35 28.65 64 64 64h397.2c28.02 0 50.8-21.53 50.8-48V176c0-26.47-22.78-48-50.8-48zM416 336c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32z"></path></svg>Bill Desk</a>

                  <!--4-->

                  <a class="dropdown-item btn-warning" href="#"><svg style="height: 30px;width: 30px;display: inline;margin-right: 7px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="images" class="svg-inline--fa fa-images fa-w-18" role="img" viewBox="0 0 576 512"><path fill="currentColor" d="M480 416v16c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V176c0-26.51 21.49-48 48-48h16v208c0 44.112 35.888 80 80 80h336zm96-80V80c0-26.51-21.49-48-48-48H144c-26.51 0-48 21.49-48 48v256c0 26.51 21.49 48 48 48h384c26.51 0 48-21.49 48-48zM256 128c0 26.51-21.49 48-48 48s-48-21.49-48-48 21.49-48 48-48 48 21.49 48 48zm-96 144l55.515-55.515c4.686-4.686 12.284-4.686 16.971 0L272 256l135.515-135.515c4.686-4.686 12.284-4.686 16.971 0L512 208v112H160v-48z"></path></svg>Gallery</a><hr>

                  <!--5-->

                  <a class="dropdown-item bg-light" href="#"> <svg style="height: 30px;width: 30px;display: inline;margin-right: 7px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-clock" class="svg-inline--fa fa-user-clock fa-w-20" role="img"  viewBox="0 0 640 512"><path fill="currentColor" d="M496 224c-79.6 0-144 64.4-144 144s64.4 144 144 144 144-64.4 144-144-64.4-144-144-144zm64 150.3c0 5.3-4.4 9.7-9.7 9.7h-60.6c-5.3 0-9.7-4.4-9.7-9.7v-76.6c0-5.3 4.4-9.7 9.7-9.7h12.6c5.3 0 9.7 4.4 9.7 9.7V352h38.3c5.3 0 9.7 4.4 9.7 9.7v12.6zM320 368c0-27.8 6.7-54.1 18.2-77.5-8-1.5-16.2-2.5-24.6-2.5h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h347.1c-45.3-31.9-75.1-84.5-75.1-144zm-96-112c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128z"></path></svg><div onload=display_ct();>
<span id='ct' style="margin-top:70px;"></span>
 <div onload=display_ct();>
<span id='ct' ></span>
<script>function display_ct7() {
var x = new Date()
var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
hours = x.getHours( ) % 12;
hours = hours ? hours : 12;
hours=hours.toString().length==1? 0+hours.toString() : hours;

var minutes=x.getMinutes().toString()
minutes=minutes.length==1 ? 0+minutes : minutes;

var seconds=x.getSeconds().toString()
seconds=seconds.length==1 ? 0+seconds : seconds;

var month=(x.getMonth() +1).toString();
month=month.length==1 ? 0+month : month;

var dt=x.getDate().toString();
dt=dt.length==1 ? 0+dt : dt;

var x1=month + "/" + dt + "/" + x.getFullYear(); 
x1 = x1 + " - " +  hours + ":" +  minutes + ":" +  seconds + " " + ampm;
document.getElementById('ct7').innerHTML = x1;
display_c7();
 }
 function display_c7(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct7()',refresh)
}
display_c7()
</script>
<h5 style="color:black">Time / <span style="color: #9C27B0;">Calender</span></h5>
<span id='ct7' style="color: black; font-size: 23px; font-weight: 900;padding-bottom: 40px;"></span></a>
                </div>
              </li>
      <li class="nav-item1-dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons"><img src="img/user (1).png" style="height: 30ox;width: 30px;"></i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">

                  <!--teacher-->

                  <a class="dropdown-item" href="#"> <svg style="height: 30px;width: 30px;display: inline;margin-right: 7px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-circle" class="svg-inline--fa fa-user-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z"></path></svg>Teacher</a>
                  <!--setting-->
                   <a class="dropdown-item" href="#"> <svg style="height: 30px;width: 30px;display: inline;margin-right: 7px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cog" class="svg-inline--fa fa-cog fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"></path></svg> Settings</a>

                   <!--logout-->
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout.php" class="btn btn-primary"> <svg style="height: 30px;width: 30px;display: inline;margin-right: 7px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sign-out-alt" class="svg-inline--fa fa-sign-out-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z"></path></svg> Logout</button></a>
                </div>
              </li>  
        </div>
      </li>
    </ul>
  </div>
</nav>
    <form method="POST" name="search" action="classwise.php">
        <div id="demo-grid">
            <div class="search-box" style="background-color: white;">
                <select id="Place" name="class[]" multiple="multiple" style="height:180px;width:450px;background-color:#F0F1F6;font-size: 20px;"class="form-select">
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
                     <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"style="margin-bottom: 5px;"><img src="img/menu.png" style="height: 20px;width: 20px;"> Options</button>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Option</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body bg-dark">
    <!--Content-->
    <div class="list-group">
  <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
    Student
  </button>
  <a href="student1.php" style="text-decoration: none;"><button type="button" class="list-group-item list-group-item-action">Student List</button></a>
  <a href="studentedit.php" style="text-decoration:none;"><button type="button" class="list-group-item list-group-item-action">Edit & Delete</button></a>
  <button type="button" class="list-group-item list-group-item-action">Class Wise Details!</button>
  <hr style="color:white;">
  <!--2nd-->
   <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
    Jump-Into
  </button>
  <a href="home.php" style="text-decoration: none;"><button type="button" class="list-group-item list-group-item-action">Dashboard</button></a>
  <a href="attendence.php" style="text-decoration:none;"><button type="button" class="list-group-item list-group-item-action">Attendance</button></a>
  <a href="event.php" style="text-decoration:none;"><button type="button" class="list-group-item list-group-item-action">Event</button></a>
  <a href="eventreport.php" style="text-decoration:none;"><button type="button" class="list-group-item list-group-item-action">Event Report</button></a>
  <hr style="color:white;">
  <a href="classwise.php"><button class="btn btn-success" aria-current="true" style="width:370px">Close</button></a>

</div>
</div>

</div>
 <button class="btn btn-primary hidden-print" onclick="myFunction()" style="margin-bottom: 7px;"><span class="glyphicon glyphicon-print" aria-hidden="true"></span><img src="img/printer.png" style="height:20px;width: 20px;"> Print</button>
        <script>
            function myFunction() {
    window.print();
}
</script>
            </div>
            
                <?php
                if (! empty($_POST['class'])) {
                    ?>
                    <table class="table table-striped">

                <thead>
                    <tr>
                    <th>S/No</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>DateofBirth</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>FatherName</th>
                    <th>MotherName</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>                    
                    <th>Zip</th>
                    <th>Contact</th>
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
                         <td><div class="col-md-12" id="user_data_0"><img src="img/admin-default.png" style="height:30px;width: 30px;"></div></td>
                        <td><div class="col-md-12" id="user_data_1"><?php echo $result[$key]['Name']; ?></div></td>
                        <td><div class="col-md-12" id="user_data_3"><?php echo $result[$key]['Class']; ?> </div></td>
                         <td><div class="col-md-12" id="user_data_4"><?php echo $result[$key]['DateofBirth']; ?> </div></td>
                          <td><div class="col-md-12" id="user_data_5"><?php echo $result[$key]['Age']; ?> </div></td>
                          <td><div class="col-md-12" id="user_data_5"><?php echo $result[$key]['Email']; ?> </div></td>
                          <td><div class="col-md-12" id="user_data_5"><?php echo $result[$key]['FatherName']; ?> </div></td>
                          <td><div class="col-md-12" id="user_data_5"><?php echo $result[$key]['MotherName']; ?> </div></td>
                          <td><div class="col-md-12" id="user_data_5"><?php echo $result[$key]['Address']; ?> </div></td>
                          <td><div class="col-md-12" id="user_data_5"><?php echo $result[$key]['City']; ?> </div></td>
                          <td><div class="col-md-12" id="user_data_5"><?php echo $result[$key]['State']; ?> </div></td>
                          <td><div class="col-md-12" id="user_data_5"><?php echo $result[$key]['Zip']; ?> </div></td>
                          <td><div class="col-md-12" id="user_data_5"><?php echo $result[$key]['Contact']; ?> </div></td>
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
</head>
</html>
<a href="studentlist.php"><button class="btn btn-success" style="margin-left: 30px;"><img src="img/previous.png" style="height: 25px;width: 25px;">Back</button></a>

