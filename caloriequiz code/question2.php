
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<title>FOOD CALORIES</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body onload="form.q2.focus();">
    
    <div class="header1">
        <h4><a href="index.html">Calorie4Food</a></h4>

<article>
<center>
    

    <h5>How many calories are in
        the food pictured here? </h5>
    <h6>(Type a number in the box between 50 and 800)</h6>
     <num>Progress Bar</num>&nbsp&nbsp&nbsp&nbsp
    <label2><progress id="pro" value="5" max="100"></progress></label2>&nbsp&nbsp&nbsp&nbsp<num id="num">5</num><num>%</num>
    <br><br>

    
<img id="pic" src="images/Cauliflower.jpg" width="400px" height="300px" border="0" alt="">
<section>
<form method="post" action="question3.php" id="form" onsubmit="checkform()">
        <?php
  $q=$_POST['q'];

  print '<form method="post" action="question3.php">';
  print '<input name="q[]" type="hidden" value="'.$q[0].'">';

?>
    <input type="text" name="q[]" onkeyup="this.value=this.value.replace(/\D/g,'')" id="q2"> 
    <word>cal</word>

    <input type="submit" class="button-next" value="Next" id="btn1">
    </form>
</section>


<script>



function checkform(){ 
    if(document.getElementById('q2').value.length==""){    
        alert('Please input a number！');
        window.location.href="question2.php";
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