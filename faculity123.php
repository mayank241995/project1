<html>
<head>
    <title>faculity page</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="js/carousfredsel.js" type="text/javascript" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
   <header>
       <div class="container">
           <div class="row">
               <a href=""><img src="image/uem1.png"></a>
               <nav>
                   <ul>
                       
                        <li><a href="">Home</a></li>
                        <li><a href="">Work</a></li>
                        <li><a href="">Service</a></li>
                        <li><a href="">Client</a></li>
                        <li><a href="#Ourteam">Our Team</a></li>
                        <li><a href="">Contact</a></li>
                       
                   </ul>
               </nav>
           </div>
       </div>
   </header>
   
  <?php
$yourfoldername="examples";
$no_of_images=50;
$counter=0;
$imagenumber_s="C:\wamp64\www\project1".$examples."/";

 for($i = 1; $i <= $no_of_images; $i++)
    { 
        $counter++; // using this counter to check the last round of the loop to add  the - only when it is not the last counter
           if($counter ==$no_of_images){
                         $imagenumber_s=$imagenumber_s.'00'.$i;
               }
             else{
                   $imagenumber_s=$imagenumber_s.'00'.$i.'-';
              }

     } 
echo $imagenumber_s." width=50%";
   ?>
   
   
   <script src="js/main.js"></script>
    </body>
</html>
