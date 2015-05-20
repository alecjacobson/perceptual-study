<!DOCTYPE html>
<html>
  <head>
    <link rel=stylesheet href="reset.css" type="text/css" media=screen>
    <link rel=stylesheet href="article.css" type="text/css" media=screen>
    <title>Ink and Ray - User Study</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
    </script>
    <script src="survey.js"> </script>
  </head>
  <body>
    <div id=container>
      <div id=article>
<?php
file_put_contents("./data/".$_POST["experiment"]."/".$_POST["unique_id"].".txt",json_encode($_POST));
//print_r($_POST);
//echo "<br>";
?>
        <h1>Thank you for your time.</h1>
        <p>
        If you have any questions, please contact Alec Jacobson at <a
        href=mailto:alecjacobson@gmail.com>alecjacobson@gmail.com</a>.
        </p>
        <p>
        Please ask your friends to take this survey, too. Here's a form letter
        you could use:
        </p>
        <textarea readonly=true cols=80 rows=6>
My friends are conducting a user study to evaluate their research on rendering drawings with 3D effects. Please take 15 minutes to complete their survey:

http://igl.ethz.ch/projects/ink-and-ray/user-study/?experiment=<?php print $_POST["experiment"];?>
</textarea>
      </div>
    </div>
  </body>
</html>

