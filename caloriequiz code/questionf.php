
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
       
    <h5>Please estimate how accurate you think you were
</h5>
    <h5>(We will show you your result in the end)</h5>
       

      
                
<label>Very inaccurate</label>
    
    &nbsp&nbsp&nbsp&nbsp&nbsp
    <label3>Very accurate</label3>
 <form method="post" action="end.php">

     <div id="slider">
	
         <input class="bar" type="range" id="rangeinput" value="50" onchange="rangevalue.value=value" name="conf"/>
	<span class="highlight"></span>
	<output id="rangevalue">50</output>
</div>
     <br></br>
<input type="submit" class="button-next" value="Next">
         
      </div>          
                
                
                
                
                <?php
  $q=$_POST['q'];

  print '<form method="post" action="end.php">';
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
?>
        </form>
   
        <br></br>

    </div>
</div>
</center>


</body>
</html>



