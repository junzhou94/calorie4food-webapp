
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
       
    <h5>Please indicate your age. Thanks!</h5>

            <form method="post" action="end2.php">
<input type="submit" class="button-next" value=" < 10 years old  ">
<input type="hidden" name="age" value="0">
            <?php
  $q=$_POST['q'];
 $conf=$_POST['conf'];
  print '<form method="post" action="end2.php">';
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
?>
    
 
  
    

        </form>
    <form method="post" action="end2.php">
<input type="submit" class="button-next" value="10-20 years old">
<input type="hidden" name="age" value="10">
                       <?php
  $q=$_POST['q'];
 $conf=$_POST['conf'];
  print '<form method="post" action="end2.php">';
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
?>
        </form>

    <form method="post" action="end2.php">
<input type="submit" class="button-next" value="20-30 years old">
<input type="hidden" name="age" value="20">
                          <?php
  $q=$_POST['q'];
 $conf=$_POST['conf'];
  print '<form method="post" action="end2.php">';
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
?>
        </form>

    <form method="post" action="end2.php">
<input type="submit" class="button-next" value="30-40 years old">
<input type="hidden" name="age" value="30">
                          <?php
  $q=$_POST['q'];
 $conf=$_POST['conf'];
  print '<form method="post" action="end2.php">';
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
?>
        </form>

    <form method="post" action="end2.php">
<input type="submit" class="button-next" value="40-50 years old">
<input type="hidden" name="age" value="40">   
                       <?php
  $q=$_POST['q'];
 $conf=$_POST['conf'];
  print '<form method="post" action="end2.php">';
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
?>
    </form>
  <form method="post" action="end2.php">
<input type="submit" class="button-next" value="50-60 years old">
<input type="hidden" name="age" value="50">  
                     <?php
  $q=$_POST['q'];
 $conf=$_POST['conf'];
  print '<form method="post" action="end2.php">';
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
?>
    </form>
  <form method="post" action="end2.php">
<input type="submit" class="button-next" value=" > 60 years old  ">
<input type="hidden" name="age" value="60"> 
                       <?php
  $q=$_POST['q'];
 $conf=$_POST['conf'];
  print '<form method="post" action="end2.php">';
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
?>
    </form>
        <br></br>

    </div>
</div>
</center>


</body>
</html>
