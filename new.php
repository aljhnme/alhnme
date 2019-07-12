
<html>
<head>
   <title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style=":">


   <div class="container">

      <h2 class="text-center text-white bg-dark">صور المعرض </h2>
      <br>
        <div class="table-responsive">

         <table class="table table-bordered table-striped table-hover">

            <thead>
               <th>ID</th>
               <th>Username</th>
               <th>age</th>
               <th>profile pic</th>
            </thead>

            <tbody>

              <?php


              $con=mysqli_connect("localhost","root","","strstr");

              if (isset($_POST['submit']))
              {

                 
                   $name=$_POST['username'];
                   $file=$_FILES['file'];
                   $age= $_POST['age'];

                    $filename=$file['name'];

                    $fileerrot=$file['error'];

                    $filetmp=$file['tmp_name'];



                    $strfile=explode('.', $filename);

                    
                     $filecabtl =strtoupper(end($strfile));
                    

                     $newarray= array('PNG','png');


                    if (in_array($filecabtl , $newarray))
                    {
                      
                        $fileimge ='imgefile/'.$filename;

                        move_uploaded_file($filetmp , $fileimge);

                      
                        $qr="INSERT into str(name , imge)VALUES('$name','$fileimge')";

                        $qer=mysqli_query($con, $qr);


                        $qr1="SELECT * FROM str";

                        $val =  mysqli_query($con , $qr1);

                        while ($data = mysqli_fetch_array($val)){

                        ?>

                        <tr>
                        
                        <td><?php echo $data['id'];  ?></td>
                        <td><?php echo $data['name'];  ?></td>
                        <td><?php echo $age;  ?></td>
                        <td><img src="<?php echo $data['imge'];?>"   height=200px width=200px></td>

                        </tr>

                        <?php


                        }


                    }else{

                   echo"
                  <script>
                    alert('in this file not png');
                    window.location.href='indes.php';
                  </script>
                  
                  ";

                }

              }     

             
              ?>
  
        
            </tbody>
         
          </table >
        </div>
      


      

   </div>

</body>
</html>