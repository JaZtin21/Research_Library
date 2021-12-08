

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Products</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" 
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet"  href="CETproj.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
  <script src="assets/owlcarousel/owl.carousel.js"></script>
  <script src="CETproj.js"></script>


<style>



</style>

</head>

<body style="background-color:white;background-size:cover;background-attachment:fixed;" >



<nav class="navbar-expand-md sticky-top py-1" style="background-color:#A31F1F;box-shadow: 0px 0 18px rgba(55, 66, 59, 0.08);box-shadow:   0px 0.1px 5px 0px white; z-index:5;" >
<div class="container" style="max-width:1150px;">
<div class="d-flex" > 

<div class="d-inline-flex align-items-center " style="">
  <button onclick="Opensidenav()" class=" ml-2 mr-1 ml-md-0 d-sm-block d-md-none my-0 align-items-center d-flex " type="button"  style="background-color:white;font-size:25px;border:1px solid #F2FCFF;border-radius:3px;">   
    <span class="fas fa-bars my-1 opensidenav " style="background-color:white;color:black;line-height:1.1!important" ></span>
  </button> 
 <a class="navbar-brand justify-content-center py-0 my-0 px-0 mr-1 d-none d-md-block" href="CETproj.html" style="width:100%;">
    <img class="d-flex justify-content-center " src="assets/images/puplogo.png" alt="Logo" style="height:38px;">
  </a>
</div>


<div class="d-flex " style="">
<div class="collapse navbar-collapse ml-0  " id="collapsibleNavbar"   >
    <ul class="navbar-nav "  >
      <li class="nav-item ">
        <a class="nav-link"  style="color:white;text-decoration:none;" href="CETproj.html">Welcome Visitor</a>
      </li>



    </ul>
</div>
</div>


<div class="collapse navbar-collapse ml-1   " id="collapsibleNavbar"  >
<div class=" d-flex ml-auto " style="">


    <ul class="navbar-nav "  >
  
      <span class="navline my-1 " ></span>
      <li class="nav-item bg-sm-dark">
        <a class="nav-link navlinkbuttons" href="CETprojCartpage.html">Other Resources</a>
      </li>	  
	  <li class="nav-item">
        <a class="nav-link navlinkbuttons" href="#" data-toggle="modal" data-target="#myModal">Contact Us</a>
      </li>
    </ul>

</div>
</div>



</div>
</div>
</nav>







<div class="container mt-0 px-lg-3  px-md-2 px-1 navchange h-25 " style="max-width:1150px;">

<div class="d-inline-flex w-100" >

<div class="leftblock d-none d-lg-block mt-3 " >

<div class="logo d-flex align-items-center justify-content-center mb-3 w-100 bg-dark">
<div class="logobox d-flex align-items-center justify-content-center w-100 bg-dark  px-4 py-4">
<img class="logoimg " src="assets/images/puplogo.png" alt="Card image"  >
</div>
<div class="logoname d-flex align-items-center justify-content-center mb-4 w-100 bg-dark text-light">

<h4 class="" >PUP CEA</h4>
<h3 class="" >Web Library</h3>
</div>

</div>
<ul class="homebuttons" style="padding: 0;list-style-type: none;">
<?php echo "<a class='bookdescriptioncontainerhome text-decoration-none ' href ='LibraryHome.php'>"; ?>
<li class="homebutton  d-flex align-items-center mt-2  w-100 " >
<i class="fas fa-home h-10 mr-2 align-items-center "></i><h5 class=" buttontext align-items-center mt-2 justify-content-center" >Home</h5>
</li>
</a>

<?php echo "<a class='bookdescriptioncontainerhome text-decoration-none d-flex' href ='AdvanceSearch.php'>"; ?>
<li class="homebutton d-flex align-items-center mt-2 w-100 ">
<i class="fas fa-search mr-2 align-items-center  "></i><h5 class="buttontext align-items-center mt-2 justify-content-center" >Browse</h5>
</li>
</a>
<?php echo "<a class='bookdescriptioncontainerhome text-decoration-none d-flex' href ='LoginPage.php'>"; ?>
<li class="homebutton d-flex align-items-center mt-2 w-100 ">
<i class="fas fa-sign-in-alt mr-2 align-items-center  "></i><h5 class="buttontext align-items-center mt-2 justify-content-center" >Login</h5>
</li>
</a>
</ul>

</div>

<div class="rightblock d-block ml-0 ml-lg-3 mt-0" >
<div class="searchbox d-flex align-items-center mt-2 d-block d-lg-none">
<div class="input-group ml-2 d-inline-flex" style="">
<i class="fas fa-search mr-2 align-items-center  my-auto"></i>
<input type="text" class="form-control my-auto" placeholder="Search " style="border:0;height:30px;padding-left:2px; outline:none;box-shadow:none;">
<div class="input-group-append">
      <button class="btn " type="submit" style="box-shadow:none;outline:none;">
        <i class="fa fa-arrow-right"></i>
      </button>
    </div>
</div>
</div>
<div class="pt-3 sticktodapat d-none d-lg-block">
<div class="searchbox d-flex align-items-center">
<form class="input-group ml-2 d-inline-flex" action="search.php" method="GET" >

<i class="fas fa-search mr-2 align-items-center  my-auto"></i>
<input type="text" class="form-control my-auto" name="searchtext" placeholder="Search " style="border:0;height:30px;padding-left:2px; outline:none;box-shadow:none;">
<div class="input-group-append">
      <button class="btn " type="submit" style="box-shadow:none;outline:none;">
        <i class="fa fa-arrow-right"></i>
      </button>
    </div>

</form>
</div>
</div>
<div class="searchfeaturebox ">

<div class="featuredbox mt-3 ">

<div class="d-inline-flex w-100 h-100">
<?php
include('database.php');



$random = "SELECT t.*
FROM books AS t
INNER JOIN
    (SELECT ROUND(
       RAND() * 
      (SELECT MAX(id) FROM books )) AS id
     ) AS x
WHERE
    t.id >= x.id
LIMIT 1;";
$rs_result = mysqli_query($conn, $random);

while($row = mysqli_fetch_assoc($rs_result)) {

?>


<?php echo "<a class='bookimagecontainerhome text-decoration-none text-dark justify-content-center d-block-flex h-100' href ='Openbook.php?id=".$row["id"]."'>"; ?>

<div class="d-flex pt-4 pl-4" style="height:20%;">
<h3 style="color:#A31F1F;" >Featured</h3>
</div>
<div class="bookdescriptionhome text-decoration-none d-block-flex pt-4 mx-auto mb-0 ">
<h2><?php echo $row["title"]; ?></h2>
<h4>-<?php echo $row["author"]; ?></h4>




</div>
</a>


<?php echo "<a class='bookdescriptioncontainerhome text-decoration-none d-flex' href ='Openbook.php?id=".$row["id"]."'>"; ?>

<div class="bookimagehome  px-2 pt-2">
<div class="bookimagebox d-flex align-items-center justify-content-center h-100  ">
<?php
echo '<img class="bookimg text-center"  alt="No Image Preview" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
?>

</div>
<?php
}
?>


</div>

</a>

</div>
</div>
</div>


<div class="recentlyadded" style="margin-top:18px;">
<h3 class="d-flex align-items-center" style="font-family:cambria;font-weight:700;margin-bottom:0!important;"> Recently Added </h3>
<div class="recentadded mt-0  h-100 w-100">

<div class="owl-carousel owlnew row mt-1 mx-0 low "  >
<?php
include('database.php');



$recentadded = "SELECT * FROM books ORDER BY id DESC LIMIT 5;";
$recently = mysqli_query($conn, $recentadded);

while ($row = mysqli_fetch_array($recently)) {
extract($row);
    ?>
    
	<?php echo "<a class=' d-block text-decoration-none p-1 w-100' href ='Openbook.php?id=".$row["id"]."'>"; ?>
	<div class="card newitems w-100 py-1 px-1" >
	<div class="card-img-top d-flex mx-auto w-100 align-items-center justify-content-center" >
	<?php echo '<img class="cardimg text-light"  alt="No Image Preview " src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';  ?>

	</div>
    <div class="card-body pt-1 pb-0 px-0 ">
      <p class="card-title newitemname mb-0"><?php echo $title; ?></p>
      <p class="card-text itemauthor mb-0">-<?php echo $author; ?> </p>
    </div>
	</div>
	</a>	
	
    <?php
    }
mysqli_close($conn);
?>


</div>
</div>
</div>

</div>


</div>

</div>


</body>

</html>