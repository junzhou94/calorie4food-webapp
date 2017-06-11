
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">


<style type="text/css">
.demo{width:600px; margin:60px auto 10px auto}
#g1,#g2{margin-top:50px}
</style>
<script type="text/javascript" src="http://libs.useso.com/js/jquery/1.7.2/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>

	<div class="header1">
        <h4><a href="index.html">Calorie4Food</a></h4>
<center>
    <br><br>
    <h5>Please indicate your gender. Thanks!</h5>

            <form method="post" action="end3.php">
<input type="submit" class="button-next" value=" male ">
<input type="hidden" name="gender" value="1">
        <?php
  $q=$_POST['q'];
 $conf=$_POST['conf'];
  $age=$_POST['age'];              
  print '<form method="post" action="end3.php">';
  print '<input name="q[]" type="hidden" value="'.$q[0].'">';
  print '<input name="q[]" type="hidden" value="'.$q[1].'">';
    print '<input name="q[]" type="hidden" value="'.$q[2].'">';
     print '<input name="q[]" type="hidden" value="'.$q[3].'">';
      print '<input name="q[]" type="hidden" value="'.$q[4].'">';
       print '<input name="q[]" type="hidden" value="'.$q[5].'">';
    print '<input name="q[]" type="hidden" value="'.$q[6].'">';
     print '<input name="q[]" type="hidden" value="'.$q[7].'">';
     print '<input name="q[]" type="hidden" value="'.$q[8].'">';
    print '<input name="q[]" type="hidden" value="'.$q[9].'">';
      print '<input name="q[]" type="hidden" value="'.$q[10].'">';
     print '<input name="q[]" type="hidden" value="'.$q[11].'">';
      print '<input name="q[]" type="hidden" value="'.$q[12].'">';
      print '<input name="q[]" type="hidden" value="'.$q[13].'">';
    print '<input name="q[]" type="hidden" value="'.$q[14].'">';
    print '<input name="q[]" type="hidden" value="'.$q[15].'">';
    print '<input name="q[]" type="hidden" value="'.$q[16].'">';
   print '<input name="q[]" type="hidden" value="'.$q[17].'">';
    print '<input name="q[]" type="hidden" value="'.$q[18].'">';
        print '<input name="q[]" type="hidden" value="'.$q[19].'">';
      print '<input name="conf" type="hidden" value="'.$conf.'">';
                print '<input name="age" type="hidden" value="'.$age.'">';
?>
        </form>
    <br><br>
    <form method="post" action="end3.php">
<input type="submit" class="button-next" value="female">
<input type="hidden" name="gender" value="2">
                  <?php
  $q=$_POST['q'];
 $conf=$_POST['conf'];
  $age=$_POST['age'];              
  print '<form method="post" action="end3.php">';
  print '<input name="q[]" type="hidden" value="'.$q[0].'">';
  print '<input name="q[]" type="hidden" value="'.$q[1].'">';
    print '<input name="q[]" type="hidden" value="'.$q[2].'">';
     print '<input name="q[]" type="hidden" value="'.$q[3].'">';
      print '<input name="q[]" type="hidden" value="'.$q[4].'">';
       print '<input name="q[]" type="hidden" value="'.$q[5].'">';
    print '<input name="q[]" type="hidden" value="'.$q[6].'">';
     print '<input name="q[]" type="hidden" value="'.$q[7].'">';
     print '<input name="q[]" type="hidden" value="'.$q[8].'">';
    print '<input name="q[]" type="hidden" value="'.$q[9].'">';
      print '<input name="q[]" type="hidden" value="'.$q[10].'">';
     print '<input name="q[]" type="hidden" value="'.$q[11].'">';
      print '<input name="q[]" type="hidden" value="'.$q[12].'">';
      print '<input name="q[]" type="hidden" value="'.$q[13].'">';
    print '<input name="q[]" type="hidden" value="'.$q[14].'">';
    print '<input name="q[]" type="hidden" value="'.$q[15].'">';
    print '<input name="q[]" type="hidden" value="'.$q[16].'">';
   print '<input name="q[]" type="hidden" value="'.$q[17].'">';
    print '<input name="q[]" type="hidden" value="'.$q[18].'">';
        print '<input name="q[]" type="hidden" value="'.$q[19].'">';
      print '<input name="conf" type="hidden" value="'.$conf.'">';
                print '<input name="age" type="hidden" value="'.$age.'">';
?>
        
        </form>

        <br></br>

    </div>
</div>
</center>


</body>
</html>
