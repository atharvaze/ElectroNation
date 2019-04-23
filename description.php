
<!DOCTYPE html>
<html>
<head>
    <title></title>
<style type="text/css">
    .boxed {
  border: 1px solid green ;
  background-color: white;
}
 body{
    background: white url("def.jpg");
}
<style>
* {
  box-sizing: border-box;
}

    body{
    background: white url("def.jpg");
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  background: #1abc9c;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</style>

    

</head>
<div class="header">

  <h1>ElectroNation</h1>
  <p>A <b>Review</b> website for <b>Electronics</b>.</p>
  
</div>
<?php
session_start();
if(isset($_SESSION['uid']))
{
  echo " <div class='navbar'>
        <a href='home.php'>Home</a>
        <a href='logout.php' class='right'>Logout</a> 
        </div>
        "
        ;
}
else
{
  echo"<div class='navbar'>
        <a href='home.php'>Home</a>
        <a href='userlogin.php'>User Login</a>
    
        </div>";
  
}
?>

<body>
    <div>
    <?php
    include('dbconnect.php');
    @$uid = $_SESSION['uid'];
    @$uname = $_SESSION['uname'];
    $pid;
    if (isset($_GET['id'])) {
            $pid = $_GET['id'];
        } else {
            $pid = 1;
        }

        $sql = "SELECT * FROM product Where pid='$pid'";
        $res_data = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($res_data))
        {
            echo "<img src=".$row['image']." alt=".$row['image'].">"."<br>";
            echo $row['description'].'<br>';
            echo $row['name'].'<br>';
            echo "Brand :".' '.$row['brand'].'<br>';
            echo "Cost :".' '.$row['cost'].'<br>';
            echo "";
     
        }


        
        mysqli_close($conn);
?> 
    </div>
    <div  class="boxed">
        <?php
        include 'dbconnect.php';
        $review="SELECT * FROM review Where pid='$pid' and authorize='1'";
        $res_data = mysqli_query($conn,$review);
        while($row = mysqli_fetch_array($res_data))
        {
            echo " ".$row['review']."<br>";
            echo "posted by ".$row['uname']."<br>";
            echo $row['add_time']."<br>"."<br>"."<br>";
        }
        mysqli_close($conn);   
        ?>

     
    </div>

    <div>
    <?php
    @$a=$_SESSION['uid'];
    if($a != null)
    {   echo '<br>'.'<br>';
        echo '  <form action="addreview.php" method="post">
                <input type="hidden" name="pid" value="'.$pid.'">
                <input type="hidden" name="uid" value="'.$uid.'">
                <input type="hidden" name="uname" value="'.$uname.'">
                <textarea name="review"></textarea>
                <input type="submit" name="submit" value="Add Review">
                </div>
                </form>
                ';
    }
    else
    {   
        echo '<br>'.'<br>';
        echo '<textarea name="review"></textarea>
              <a  href="userlogin.php"><button>Plz login to add review!</button></a>';    
    }    
    ?>
    

</body>
</html>
