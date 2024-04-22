<?php include('db_conn.php') ;?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        .navbar {
    background-color:black;
    overflow: hidden;
    height: 75px;
  }
  
  .navbar-nav {
    list-style-type: none;
    padding: 0;
    display: flex;
    justify-content: space-around;
  }
  
  .nav-item {
    padding: 10px;
  }
  
  .nav-link {
    color: white;
    text-decoration: none;
  }
  
  .nav-link:hover {
    color: blue;
  }
  #b1{
        background-image: url("image/abc.jpg");
        background-size: cover;
        background-position: center;
        height: 400px;
        width: 1235px;
      
  }
  #i1{
    display: flex;
    justify-content: space-evenly;
  }
  #id1{
    background-image: url("image/book.jpg");
        background-size: cover;
     
        height: 200px;
        width: 400px;
        
  }
  #id2{
    
    background-image: url("image/id2.jpg");
        background-size: cover;

        height: 200px;
        width: 400px;
        
  }
  #id3{
       
        background-image: url("image/id3.jpg");
            background-size: cover;
    
            height: 200px;
            width: 400px;
  }
  #i2{
    display: flex;
    justify-content: space-evenly;
  }
  #id4{
    background-image: url("image/id4.jpg");
            background-size: cover;
    
            height: 200px;
            width: 400px;
  }
  #id5{
    background-image: url("image/id5.jpg");
            background-size: cover;
    
            height: 200px;
            width: 400px;
  }
  #id6{
    background-image: url("image/id6.jpg");
            background-size: cover;
    
            height: 200px;
            width: 400px;
  }
  #a1
{
  background-color:black;
  height: 500px;
  width: 1235px;
  color: whitesmoke;
  text-align: center;
}
#icon1{
  display: flex;
align-items: center;
align-content: center;
margin-top: 10px;
margin-left: 560px;
}

#icon2{
  display: flex;
  align-items: center;
  align-content: center;
  margin-top: 15px;
  margin-left: 520px;
}
#icon3{
  display: flex;
  align-items: center;
  align-content: center;
  margin-top: 20px;
margin-left: 560px;
}
#book-btn
{
    background-color: blue;
    border: black solid 1px;
    border-radius: 5px;
    color: white;
    width: 200px;
    height: 45px;
   margin: 260px 45%;
   font-size: 19px;
}
    </style>
</head>
<body>


<button onclick="location.href='bookings.php'"><h1>Book Appointment</h1></button>

</body>
</html>