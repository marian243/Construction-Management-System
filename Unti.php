<?php  
 $connect = mysqli_connect("localhost", "root", "", "construction management");  
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
      $myid = mysqli_real_escape_string($connect,$_POST['id']);
      $mypid = mysqli_real_escape_string($connect,$_POST['pid']);
     
     
      $query = "INSERT INTO tbl_images VALUES ($myid, $mypid, '$file')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';
            header('Location:Admin.php');
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title></title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Insert Image</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data">
                     <label>Image ID  :</label>
                     <input type = "text" name = "id" class = "box"/><br /><br />
                     <label>Project ID  :</label>
                     <input type = "text" name = "pid" class = "box" /><br/><br /> 
                     <label>Insert Image :</label>
                     <input type="file" name="image" id="image" />  
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                     <a href="Admin.php" class="w3-bar-item w3-button w3-padding-large">Back</a>
                </form>  
                <br />  
                <br />  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  