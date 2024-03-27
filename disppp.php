

<?php
include("connection.php");
session_start();
$user=$_SESSION['user'];

if($user==true){
    
}
else{
    header('Location: /data/revising/revise.php');
}
$sel = "SELECT * FROM governn";
$result = mysqli_query($con,$sel);
$n = mysqli_num_rows($result);

$sql="SELECT * FROM governn where email='$user'";
$res=mysqli_query($con,$sql);
$dis=mysqli_fetch_assoc($res);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link rel="stylesheet" href="style.css">
    <!-- font awasome cdn - we goes to google and searched a css star rating and the we school came over and the cdn is tiin th -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


<div class="container">
        <div class="header">

            <div class="logosite"><i class="fa fa-shopping-basket" aria-hidden="true"></i> <a>Grocessory</a></div>
            <div class="nav">
                <ol>
                    <li><a href="#">Home</a><line></line></li>
                    <li><a href="#">Features</a><line></line></li>
                    <li><a href="#">Products</a><line></line></li>
                    <li><a href="#">Catagories</a><line></line></li>
                    <li><a href="#">Review</a><line></line></li>
                </ol>
            </div>
          
            <div class="searchbar">
                <div class="fa fa-search"id="searchbtn" ></div>
                <div class="fa fa-user"  id="userlogin"></div>
                <div class="fa fa-shopping-cart" id="cartbtn"></div>
                <!-- <div  id="user"> 
                    <img src="<?php
                     echo $dis['std_images'];?>"  width=50px height=50px>  </div>
                     <div><?php echo $dis['name']; ?></div> -->
            </div>

            <form class="searchform">
                <input type="search" id="searchbar" name="searchbar" placeholder="search here...">
                <label><i class="fa fa-search" aria-hidden="true"></i></label>
            </form>

            <div class="shopping-cart">
                <div class="box">
                    <img src="/photos/cyberwarrior/cart-img-1.png">
                    <div class="content">
                        <h3>watermelon</h3>
                        <span>quantity:1 </span>
                        <span>price:3$</span>
                    </div>
                    <div class="fa fa-trash"></div>
            </div>
            <div class="box">
                    <img src="/programming/photos/cyberwarrior/cart-img-2.png">
                    <div class="content">
                        <h3>onion</h3>
                        <span>quantity:1 </span>
                        <span>price:2.99$</span>
                    </div>
                    <div class="fa fa-trash" ></div>
                </div>
                <div class="box">
                    <img src="/programming/photos/cyberwarrior/cart-img-3.png">
                    <div class="content">
                        <h3>chicken</h3>
                        <span>quantity:1 </span>
                        <span>price:4.5$</span>
                    </div>
                    <div class="fa fa-trash"></div>
                </div>
                <div class="total">total = 19.3$</div>
             <div class="orderncncl">
                <div ><a href="#">clear all</a></div>
                <div ><a href="#">order list</a></div>


             </div>
            </div>
            <form action="#" method="post" enctype="multipart/form-data"  class="login-form">
                <h3>log out</h3>
                <div  id="user"> 
                    <img src="<?php
                     echo $dis['std_images'];?>"  width=50px height=50px>  </div>
                     <h1><?php echo $dis['name']; ?></h1>


            <p>forget password ? <a href="#">click here.</a></p>
            <p>dont have an account ?  <a href="#">create now.</a></p>
            
            <!-- <input type="submit" value="login" name="login" class="btn"> -->
            <button value="login" name="login" class="btn"><a href="logout.php">Log out</a></button>
            <button value="login" name="login" class="btn"><a href="insert.php">New data</a></button>
            </form>
            
        </div>
     
<div class="list">



    <table  width="95%" cellspacing ="2" >
        <tr>
            <th width="10%">id</th>
            <th width="10%">photo</th>
            <th width="20%">name</th>
            <th width="10%">location</th>
            <th width="20%">phone</th>
            <th width="20%">email</th>
            <th width="20%">operation</th>
        </tr>

        </div>
   
 </div>
    <script src="style.js"></script>
    
</body>
</html>

<?php







if($n !=0)
{
while($display=mysqli_fetch_assoc($result)){//we have already learned abpout hpe o print till end in file handling
    echo "

    <tr>
    <td> ".$display['id']."</td>
    <td> <img src=".$display['std_images']." width=100px height=100px></td>
<td> ".$display['name']."</td>
<td> ".$display['location']."</td>
<td> ".$display['phone']."</td>
<td> ".$display['email']."</td>
<td id='operation' >
<button  class='btn'id='update'><a href='update.php? Uid=$display[id]'>update</a></button>
<button  class='btn' id='delet'><a href=' delete.php?Did=$display[id]'>delete</a></button>
 </td>
    </tr>


    ";
    
}

}

  
?>