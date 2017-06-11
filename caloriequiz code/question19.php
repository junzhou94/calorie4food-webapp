
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<title>FOOD CALORIES</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body onload="form.q19.focus();">
    
    <div class="header1">
        <h4><a href="index.html">Calorie4Food</a></h4>

<article>
<center>
    

    <h5>How many calories are in
        the food pictured here? </h5>
    <h6>(Type a number in the box between 50 and 800)</h6>
     <num>Progress Bar</num>&nbsp&nbsp&nbsp&nbsp
    <label2><progress id="pro" value="90" max="100"></progress></label2>&nbsp&nbsp&nbsp&nbsp<num id="num">90</num><num>%</num>
    <br><br>

    
<img id="pic" src="images/TurkeyTomSandwich.jpg" width="400px" height="300px" border="0" alt="">
<section>
<form method="post" action="question20.php" id="form" onsubmit="checkform()">
    <?php
  $q=$_POST['q'];

  print '<form method="post" action="question20.php">';
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
?>
    <input type="text" name="q[]" onkeyup="this.value=this.value.replace(/\D/g,'')" id="q19"> 
    <word>cal</word> 
   
    <input type="submit" class="button-next" value="Next" id="btn1">
    </form>
</section>


<script>



function checkform(){ 
    if(document.getElementById('q19').value.length==""){    
        alert('Please input a number！');
        window.location.href="question19.php";
    }
}
    
var progressBar = document.getElementById('pro');
  function updateProgress(newValue) {
    progressBar.value = newValue;
      document.getElementById('num').textContent=newValue;

  }
 </script>
    
    <br></br>

</center>
</article>
</body>
</html>