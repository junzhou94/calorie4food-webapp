
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

 
    
<link rel="stylesheet" href="quiz.css">
</head>

<body>

	<div class="header1">
        <h4><a href="index.html">Calorie4Food</a></h4>
<center>
       
        <h5>Please input your BMI, or calculate it by the calculator below,Thank you!</h5>
   <form method="post" action="endf.php">
   <word>Your BMI: </word> 
       <input type="text" name="bmi" size="4" maxlength="4" id="bminum"> 
    
    <input type="submit" class="button-next" value="Next">
     <?php
  $q=$_POST['q'];
 $conf=$_POST['conf'];
  $age=$_POST['age']; 
       $gender=$_POST['gender'];   
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
       print '<input name="gender" type="hidden" value="'.$gender.'">';
?>
    </form>
        <br></br>

 
<div id="calculator">
<input id="toUS" type="button" class="btnsml" value="US" onclick="metrictous();" style="display:none;">
<input id="tometric" type="button" class="btnsml" value="metric" onclick="ustometric();" style="display:inline;">
    <br></br>
<p id="height"></p>
<div id="usheight" style="display:inline;">
    <c>Height:</c>
<input type="text" name="ft" id="ft" size="1" maxlength="1" onkeyup="updateBMI();" value="0">
    <c>ft</c>
<input type="text" name="in" id="in" size="2" maxlength="2" onkeyup="updateBMI();" value="0">
    <c>in</c>
</div>
<div id="metricheight" style="display:none;">
    <c>Height:</c>
<input type="text" name="cm" id="cm" size="3" maxlength="3" onkeyup="updateBMI();" value="0">
    <c>cm</c>
    </div>
<br></br>
<p id="weight"></p>
<div id="usweight" style="display:inline;">
    <label for="lbs"><c>Weight:</c></label>
<input type="text" name="lbs" id="lbs" size="3" maxlength="3" onkeyup="updateBMI();" value="0">
    <c>lbs</c>
          </div>

<div id="metricweight" style="display:none;">
    <label for="kg"><c>Weight:</c></label>
<input type="text" name="kg" id="kg" size="3" maxlength="3" onkeyup="updateBMI();" value="0">
    <c>kg</c>
    </div>
    <br></br>
<div id="bmi">
    <p><c>Your BMI:</c></p>
    <div id="bmiDisplay"><c>0</c></div>
<p></p>
    </div>
    </div>









<script src="d3.min.js"></script>


    </div>
</div>
</center>

<script>
var responses = {};
var metric = false;
var bmi = 0.0;

window.onload = function(){
  $("body").on("click", "#tometric", function() {
    toggle('#usheight','#metricheight','#usweight','#metricweight','#tometric','#toUS');
    metric = !metric;
  });
  $("body").on("click", "#toUS", function() {
    toggle('#usheight','#metricheight','#usweight','#metricweight','#tometric','#toUS');
    metric = !metric;
  });
};

// http://www.dustindiaz.com/seven-togglers/
function toggle() {
  for ( var i=0; i < arguments.length; i++ ) {
    $(arguments[i]).css( 'display', $(arguments[i]).css('display') !== 'none' ? 'none' : 'inline' );
  }
}

function round(value, exp) {
  if (typeof exp === 'undefined' || +exp === 0) {
    return Math.round(value);
  }

  value = +value;
  exp  = +exp;

  if (isNaN(value) || !(typeof exp === 'number' && exp % 1 === 0)) {
    return NaN;
  }

  // Shifts
  value = value.toString().split('e');
  value = Math.round(+(value[0] + 'e' + (value[1] ? (+value[1] + exp) : exp)));

  // Shift back
  value = value.toString().split('e');
  return +(value[0] + 'e' + (value[1] ? (+value[1] - exp) : -exp));
}

function updateBMI() {
  var mheight = parseFloat(document.getElementById("cm").value);
  var mweight = parseFloat(document.getElementById("kg").value);
  var uheight = (parseFloat(document.getElementById("ft").value) * 12) + parseFloat(document.getElementById("in").value);
  var uweight = parseFloat(document.getElementById("lbs").value);

  if (metric && mheight > 0 && mweight > 0) {
    responses["cm"] = mheight;
    responses["kg"] = mweight;
    meterheight = mheight / 100.0;
    bmi = round(mweight / (meterheight * meterheight), 1);
  } else if (!metric && uheight > 0 && uweight > 0) {
    responses["cm"] = 2.54 * uheight;
    responses["kg"] = 0.453592 * uweight;
    meterheight = 0.0254 * uheight;
    bmi = round((uweight * 0.453592) / (meterheight * meterheight), 1);
  }

  document.getElementById('bmiDisplay').innerHTML = bmi.toString();
    document.getElementById("bminum").value = bmi;
}





</script>
</body>
</html>
