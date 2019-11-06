<html lang="en">
    <head>
    <title>
            Your mood today
        </title>
    <?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
        <style>
            section{
                border: gold .3rem solid;
                padding: 1.2rem;
            }
            article{
                padding: 1.4rem;
                margin-top: .5rem;
            }
            .moods{
                width: 15%;
                border-radius: 300px;
                border: thistle .3rem solid;
            }
            #joy{
                width: 20%;
                border-radius: 300px;
                border: thistle .3rem solid;
            }
        </style>
        <meta charset="utf-8">
    </head>
    <body style="background-color: thistle; text-align: center; padding: 3rem;">
        <section>
            <strong><em>“ Because of your smile, you make life more beautiful.” <br>– Thich Nhat Hanh.</em></strong>
            <br><br><br><br>
            <form method="post" action="" enctype="multipart/form-data">   
                <input type="file" name="image" id="img_file" />
                <input type="submit" class="submit_button" value="Submit" name="s">
            </form>
        </section>
        <article>
            <br><br>
            <strong>What's your mood today?</strong>
            <br><br>
            <a href="anger.html"><img class="moods" src="anger.jpg"></a>
            <a href="joy.html"><img  id="joy" src="joy.gif"></a>
            <a href="disgust.html"><img class="moods" src="disgust.jpg"></a>
            <a href="sad.html"><img class="moods" src="sadness.png"></a>
        </article>
        <button><a href="bot.htm">GO BACK</a></button>

    </body>
</html>