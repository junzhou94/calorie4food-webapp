
<?php // content="text/plain; charset=utf-8"

    $q=$_POST['q'];
 $conf=$_POST['conf'];
  $age=$_POST['age'];  
    $gender=$_POST['gender'];
    $bmi=$_POST['bmi'];

    $acc=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
    $qaerr=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
    $qaerr[0]=($q[0]-200)/200;
    $qaerr[1]=($q[1]-300)/300;
    $qaerr[2]=($q[2]-200)/200;
    $qaerr[3]=($q[3]-300)/300;
    $qaerr[4]=($q[4]-420)/420;
    $qaerr[5]=($q[5]-300)/300;
    $qaerr[6]=($q[6]-270)/270;
    $qaerr[7]=($q[7]-310)/310;
    $qaerr[8]=($q[8]-720)/720;
    $qaerr[9]=($q[9]-136)/136;
    $qaerr[10]=($q[10]-100)/100;
    $qaerr[11]=($q[11]-200)/200;
    $qaerr[12]=($q[12]-200)/200;
    $qaerr[13]=($q[13]-200)/200;
    $qaerr[14]=($q[14]-200)/200;
    $qaerr[15]=($q[15]-300)/300;
    $qaerr[16]=($q[16]-590)/590;
    $qaerr[17]=($q[17]-240)/240;
    $qaerr[18]=($q[18]-510)/510;
    $qaerr[19]=($q[19]-251)/251;
     for($i = 0 ; $i < 20 ; $i++) {
        if(($qaerr[$i]<=0.2)&&($qaerr[$i]>=-0.2)) {        
            $acc[$i]=1;
        }         
    }
     $rate=($acc[0]+$acc[1]+$acc[2]+$acc[3]+$acc[4]+$acc[5]+$acc[6]+$acc[7]+$acc[8]+$acc[9]+$acc[10]+$acc[11]+$acc[12]+$acc[13]+$acc[14]+$acc[15]+$acc[16]+$acc[17]+$acc[18]+$acc[19]);
     $acc=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

     $x3=$rate;
    $x1=0;
    $x2=0;
      for($i = 0 ; $i < 20 ; $i++) {
        if($qaerr[$i]<-0.2) {        
            $x1++;
            $acc[$i]=1;
            
        }         
    }
     
    for($i = 0 ; $i < 20 ; $i++) {
        if($qaerr[$i]>0.2) {        
            $x2++;
            $acc[$i]=-1;
        }         
    }
    
    

    ?>


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

<body style="color:white">

	<div class="header1">
        <h4><a href="index.html">Calorie4Food</a></h4>
<center>
     <br></br>  
       <end>Thank you!</end>
        <br></br>
        <?php
             print '<font style="color:white;font-size:25px;">We consider a guess that is within 20% of the correct number of
calories to be accurate. According to this measure, you got </font>';
             print "<font color=\"white\" size=\"25px\">".$rate."</font>";
             print '<font style="color:white;font-size:25px;"> questions out of 20 right ( </font>';
              print "<font color=\"white\" size=\"25px\">".$x1."</font>";
             print '<font style="color:white;font-size:25px;"> underestimated, </font>';
             print "<font color=\"white\" size=\"25px\">".$x2."</font>";
             print '<font style="color:white;font-size:25px;"> overrestimated, </font>';
             print '<font style="color:white;font-size:25px;"> and </font>';
             print "<font color=\"white\" size=\"25px\">".$x3."</font>";
             print '<font style="color:white;font-size:25px;"> accurate). </font>';
    
   
   //Please use your localhost database
    $dsn='mysql:dbname=xxxx;host=xxxxxxxx';
    $user='xxxxxxxxxxxx';
    $password='xxxxxxxxxxxx';
    $dbh=new PDO($dsn,$user,$password);
    $dbh->query('SET NAMES utf8');
  //Please use your localhost database
    
    
    
    $sql='INSERT INTO quiz(q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15,q16,q17,q18,q19,q20,conf,age,gender,bmi,x1,x2,x3)VALUES("'.$q[0].'","'.$q[1].'","'.$q[2].'","'.$q[3].'","'.$q[4].'","'.$q[5].'","'.$q[6].'","'.$q[7].'","'.$q[8].'","'.$q[9].'","'.$q[10].'","'.$q[11].'","'.$q[12].'","'.$q[13].'","'.$q[14].'","'.$q[15].'","'.$q[16].'","'.$q[17].'","'.$q[18].'","'.$q[19].'","'.$conf.'","'.$age.'","'.$gender.'","'.$bmi.'","'.$x1.'","'.$x2.'","'.$x3.'")';  
    
    $stmt=$dbh->prepare($sql);
    $stmt->execute();
    $dbh=null;



             ?>
    <br></br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


    
    
    
    

    <br><br><br>
 
    <!-- 折り畳み展開ポインタ -->
<div onclick="obj=document.getElementById('open').style; obj.display=(obj.display=='none')?'block':'none';">
    
<a style="cursor:pointer;display:inline;font-size:20px;font-weight:900;color:lightgreen;">Click here for a detailed question-by-question report (blue for overestimated, red for underestimated, green for accurate).</a>
</div>
<!--// 折り畳み展開ポインタ -->
<!-- 折り畳まれ部分 -->
<div id="open" style="display:none;clear:both;">


    <div id="reading">
    <read><p>Q1</p></read>
    <figure><img src="images/Onions.jpg"></figure>
    <?php
        if($acc[0]==1){print '<font style="color:red;font-size:20px;">Your guess: </font>';
             print "<font color=\"red\" size=\"5px\">".$q[0]."</font>";
            print '<font style="color:red;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:red;font-size:20px;">Participant Average: </font>';
             print "<font color=\"red\" size=\"5px\">101 cal</font>";
                        echo '<br>';
        print '<font style="color:red;font-size:20px;">Correct Value: </font>';
             print "<font color=\"red\" size=\"5px\">200 cal</font>";
                  }
        
             if($acc[0]==-1){print '<font style="color:blue;font-size:20px;">Your guess: </font>';
             print "<font color=\"blue\" size=\"5px\">".$q[0]."</font>";
            print '<font style="color:blue;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:blue;font-size:20px;">Participant Average: </font>';
             print "<font color=\"blue\" size=\"5px\">101 cal</font>";
                        echo '<br>';
        print '<font style="color:blue;font-size:20px;">Correct Value: </font>';
             print "<font color=\"blue\" size=\"5px\">200 cal</font>";
                  }
            if($acc[0]==0){print '<font style="color:green;font-size:20px;">Your guess: </font>';
             print "<font color=\"green\" size=\"5px\">".$q[0]."</font>";
            print '<font style="color:green;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:green;font-size:20px;">Participant Average: </font>';
             print "<font color=\"green\" size=\"5px\">101 cal</font>";
                        echo '<br>';
        print '<font style="color:green;font-size:20px;">Correct Value: </font>';
             print "<font color=\"green\" size=\"5px\">200 cal</font>";
                  }
        
        
        ?>
        </div>
    <div id="reading">
    <read><p>Q2</p></read>
    <figure><img src="images/Cauliflower.jpg"></figure>
    <?php
        if($acc[1]==1){print '<font style="color:red;font-size:20px;">Your guess: </font>';
             print "<font color=\"red\" size=\"5px\">".$q[1]."</font>";
            print '<font style="color:red;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:red;font-size:20px;">Participant Average: </font>';
             print "<font color=\"red\" size=\"5px\">133 cal</font>";
                        echo '<br>';
        print '<font style="color:red;font-size:20px;">Correct Value: </font>';
             print "<font color=\"red\" size=\"5px\">300 cal</font>";
                  }
        
             if($acc[1]==-1){print '<font style="color:blue;font-size:20px;">Your guess: </font>';
             print "<font color=\"blue\" size=\"5px\">".$q[1]."</font>";
            print '<font style="color:blue;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:blue;font-size:20px;">Participant Average: </font>';
             print "<font color=\"blue\" size=\"5px\">133 cal</font>";
                        echo '<br>';
        print '<font style="color:blue;font-size:20px;">Correct Value: </font>';
             print "<font color=\"blue\" size=\"5px\">300 cal</font>";
                  }
            if($acc[1]==0){print '<font style="color:green;font-size:20px;">Your guess: </font>';
             print "<font color=\"green\" size=\"5px\">".$q[1]."</font>";
            print '<font style="color:green;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:green;font-size:20px;">Participant Average: </font>';
             print "<font color=\"green\" size=\"5px\">133 cal</font>";
                        echo '<br>';
        print '<font style="color:green;font-size:20px;">Correct Value: </font>';
             print "<font color=\"green\" size=\"5px\">300 cal</font>";
                  }
        
        
        ?>
        
        
</div>
    <div id="reading">
    <read><p>Q3</p></read>
    <figure><img src="images/Avocado.jpg"></figure>
    <?php
        if($acc[2]==1){print '<font style="color:red;font-size:20px;">Your guess: </font>';
             print "<font color=\"red\" size=\"5px\">".$q[2]."</font>";
            print '<font style="color:red;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:red;font-size:20px;">Participant Average: </font>';
             print "<font color=\"red\" size=\"5px\">244 cal</font>";
                        echo '<br>';
        print '<font style="color:red;font-size:20px;">Correct Value: </font>';
             print "<font color=\"red\" size=\"5px\">200 cal</font>";
                  }
        
             if($acc[2]==-1){print '<font style="color:blue;font-size:20px;">Your guess: </font>';
             print "<font color=\"blue\" size=\"5px\">".$q[2]."</font>";
            print '<font style="color:blue;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:blue;font-size:20px;">Participant Average: </font>';
             print "<font color=\"blue\" size=\"5px\">244 cal</font>";
                        echo '<br>';
        print '<font style="color:blue;font-size:20px;">Correct Value: </font>';
             print "<font color=\"blue\" size=\"5px\">200 cal</font>";
                  }
            if($acc[2]==0){print '<font style="color:green;font-size:20px;">Your guess: </font>';
             print "<font color=\"green\" size=\"5px\">".$q[2]."</font>";
            print '<font style="color:green;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:green;font-size:20px;">Participant Average: </font>';
             print "<font color=\"green\" size=\"5px\">244 cal</font>";
                        echo '<br>';
        print '<font style="color:green;font-size:20px;">Correct Value: </font>';
             print "<font color=\"green\" size=\"5px\">200 cal</font>";
                  }
        
        
        ?>
        
        
</div>
    <div id="reading">
    <read><p>Q4</p></read>
    <figure><img src="images/CheeseGouda.jpg"></figure>
    <?php
        if($acc[3]==1){print '<font style="color:red;font-size:20px;">Your guess: </font>';
             print "<font color=\"red\" size=\"5px\">".$q[3]."</font>";
            print '<font style="color:red;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:red;font-size:20px;">Participant Average: </font>';
             print "<font color=\"red\" size=\"5px\">350 cal</font>";
                        echo '<br>';
        print '<font style="color:red;font-size:20px;">Correct Value: </font>';
             print "<font color=\"red\" size=\"5px\">300 cal</font>";
                  }
        
             if($acc[3]==-1){print '<font style="color:blue;font-size:20px;">Your guess: </font>';
             print "<font color=\"blue\" size=\"5px\">".$q[3]."</font>";
            print '<font style="color:blue;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:blue;font-size:20px;">Participant Average: </font>';
             print "<font color=\"blue\" size=\"5px\">350 cal</font>";
                        echo '<br>';
        print '<font style="color:blue;font-size:20px;">Correct Value: </font>';
             print "<font color=\"blue\" size=\"5px\">300 cal</font>";
                  }
            if($acc[3]==0){print '<font style="color:green;font-size:20px;">Your guess: </font>';
             print "<font color=\"green\" size=\"5px\">".$q[3]."</font>";
            print '<font style="color:green;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:green;font-size:20px;">Participant Average: </font>';
             print "<font color=\"green\" size=\"5px\">350 cal</font>";
                        echo '<br>';
        print '<font style="color:green;font-size:20px;">Correct Value: </font>';
             print "<font color=\"green\" size=\"5px\">300 cal</font>";
                  }
        
        
        ?>
        
        
</div>
    <div id="reading">
    <read><p>Q5</p></read>
    <figure><img src="images/BrownRice.jpg"></figure>
    <?php
        if($acc[4]==1){print '<font style="color:red;font-size:20px;">Your guess: </font>';
             print "<font color=\"red\" size=\"5px\">".$q[4]."</font>";
            print '<font style="color:red;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:red;font-size:20px;">Participant Average: </font>';
             print "<font color=\"red\" size=\"5px\">384 cal</font>";
                        echo '<br>';
        print '<font style="color:red;font-size:20px;">Correct Value: </font>';
             print "<font color=\"red\" size=\"5px\">420 cal</font>";
                  }
        
             if($acc[4]==-1){print '<font style="color:blue;font-size:20px;">Your guess: </font>';
             print "<font color=\"blue\" size=\"5px\">".$q[4]."</font>";
            print '<font style="color:blue;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:blue;font-size:20px;">Participant Average: </font>';
             print "<font color=\"blue\" size=\"5px\">384 cal</font>";
                        echo '<br>';
        print '<font style="color:blue;font-size:20px;">Correct Value: </font>';
             print "<font color=\"blue\" size=\"5px\">420 cal</font>";
                  }
            if($acc[4]==0){print '<font style="color:green;font-size:20px;">Your guess: </font>';
             print "<font color=\"green\" size=\"5px\">".$q[4]."</font>";
            print '<font style="color:green;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:green;font-size:20px;">Participant Average: </font>';
             print "<font color=\"green\" size=\"5px\">384 cal</font>";
                        echo '<br>';
        print '<font style="color:green;font-size:20px;">Correct Value: </font>';
             print "<font color=\"green\" size=\"5px\">420 cal</font>";
                  }
        
        
        ?>
        
        
</div>
    <div id="reading">
    <read><p>Q6</p></read>
    <figure><img src="images/Ham.jpg"></figure>
    <?php
        if($acc[5]==1){print '<font style="color:red;font-size:20px;">Your guess: </font>';
             print "<font color=\"red\" size=\"5px\">".$q[5]."</font>";
            print '<font style="color:red;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:red;font-size:20px;">Participant Average: </font>';
             print "<font color=\"red\" size=\"5px\">296 cal</font>";
                        echo '<br>';
        print '<font style="color:red;font-size:20px;">Correct Value: </font>';
             print "<font color=\"red\" size=\"5px\">300 cal</font>";
                  }
        
             if($acc[5]==-1){print '<font style="color:blue;font-size:20px;">Your guess: </font>';
             print "<font color=\"blue\" size=\"5px\">".$q[5]."</font>";
            print '<font style="color:blue;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:blue;font-size:20px;">Participant Average: </font>';
             print "<font color=\"blue\" size=\"5px\">296 cal</font>";
                        echo '<br>';
        print '<font style="color:blue;font-size:20px;">Correct Value: </font>';
             print "<font color=\"blue\" size=\"5px\">300 cal</font>";
                  }
            if($acc[5]==0){print '<font style="color:green;font-size:20px;">Your guess: </font>';
             print "<font color=\"green\" size=\"5px\">".$q[5]."</font>";
            print '<font style="color:green;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:green;font-size:20px;">Participant Average: </font>';
             print "<font color=\"green\" size=\"5px\">296 cal</font>";
                        echo '<br>';
        print '<font style="color:green;font-size:20px;">Correct Value: </font>';
             print "<font color=\"green\" size=\"5px\">300 cal</font>";
                  }
        
        
        ?>
        
        
</div>
    <div id="reading">
    <read><p>Q7</p></read>
    <figure><img src="images/Cheeseburger.png"></figure>
    <?php
        if($acc[6]==1){print '<font style="color:red;font-size:20px;">Your guess: </font>';
             print "<font color=\"red\" size=\"5px\">".$q[6]."</font>";
            print '<font style="color:red;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:red;font-size:20px;">Participant Average: </font>';
             print "<font color=\"red\" size=\"5px\">496 cal</font>";
                        echo '<br>';
        print '<font style="color:red;font-size:20px;">Correct Value: </font>';
             print "<font color=\"red\" size=\"5px\">270 cal</font>";
                  }
        
             if($acc[6]==-1){print '<font style="color:blue;font-size:20px;">Your guess: </font>';
             print "<font color=\"blue\" size=\"5px\">".$q[6]."</font>";
            print '<font style="color:blue;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:blue;font-size:20px;">Participant Average: </font>';
             print "<font color=\"blue\" size=\"5px\">496 cal</font>";
                        echo '<br>';
        print '<font style="color:blue;font-size:20px;">Correct Value: </font>';
             print "<font color=\"blue\" size=\"5px\">270 cal</font>";
                  }
            if($acc[6]==0){print '<font style="color:green;font-size:20px;">Your guess: </font>';
             print "<font color=\"green\" size=\"5px\">".$q[6]."</font>";
            print '<font style="color:green;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:green;font-size:20px;">Participant Average: </font>';
             print "<font color=\"green\" size=\"5px\">496 cal</font>";
                        echo '<br>';
        print '<font style="color:green;font-size:20px;">Correct Value: </font>';
             print "<font color=\"green\" size=\"5px\">270 cal</font>";
                  }
        
        
        ?>
        
        
</div>
    <div id="reading">
    <read><p>Q8</p></read>
    <figure><img src="images/ClassicGrilledHotDog.jpg"></figure>
    <?php
        if($acc[7]==1){print '<font style="color:red;font-size:20px;">Your guess: </font>';
             print "<font color=\"red\" size=\"5px\">".$q[7]."</font>";
            print '<font style="color:red;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:red;font-size:20px;">Participant Average: </font>';
             print "<font color=\"red\" size=\"5px\">424 cal</font>";
                        echo '<br>';
        print '<font style="color:red;font-size:20px;">Correct Value: </font>';
             print "<font color=\"red\" size=\"5px\">310 cal</font>";
                  }
        
             if($acc[7]==-1){print '<font style="color:blue;font-size:20px;">Your guess: </font>';
             print "<font color=\"blue\" size=\"5px\">".$q[7]."</font>";
            print '<font style="color:blue;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:blue;font-size:20px;">Participant Average: </font>';
             print "<font color=\"blue\" size=\"5px\">424 cal</font>";
                        echo '<br>';
        print '<font style="color:blue;font-size:20px;">Correct Value: </font>';
             print "<font color=\"blue\" size=\"5px\">310 cal</font>";
                  }
            if($acc[7]==0){print '<font style="color:green;font-size:20px;">Your guess: </font>';
             print "<font color=\"green\" size=\"5px\">".$q[7]."</font>";
            print '<font style="color:green;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:green;font-size:20px;">Participant Average: </font>';
             print "<font color=\"green\" size=\"5px\">424 cal</font>";
                        echo '<br>';
        print '<font style="color:green;font-size:20px;">Correct Value: </font>';
             print "<font color=\"green\" size=\"5px\">310 cal</font>";
                  }
        
        
        ?>
        
        
</div>
    <div id="reading">
    <read><p>Q9</p></read>
    <figure><img src="images/TotallyTunaSandwich.jpg"></figure>
    <?php
        if($acc[8]==1){print '<font style="color:red;font-size:20px;">Your guess: </font>';
             print "<font color=\"red\" size=\"5px\">".$q[8]."</font>";
            print '<font style="color:red;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:red;font-size:20px;">Participant Average: </font>';
             print "<font color=\"red\" size=\"5px\">569 cal</font>";
                        echo '<br>';
        print '<font style="color:red;font-size:20px;">Correct Value: </font>';
             print "<font color=\"red\" size=\"5px\">720 cal</font>";
                  }
        
             if($acc[8]==-1){print '<font style="color:blue;font-size:20px;">Your guess: </font>';
             print "<font color=\"blue\" size=\"5px\">".$q[8]."</font>";
            print '<font style="color:blue;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:blue;font-size:20px;">Participant Average: </font>';
             print "<font color=\"blue\" size=\"5px\">569 cal</font>";
                        echo '<br>';
        print '<font style="color:blue;font-size:20px;">Correct Value: </font>';
             print "<font color=\"blue\" size=\"5px\">720 cal</font>";
                  }
            if($acc[8]==0){print '<font style="color:green;font-size:20px;">Your guess: </font>';
             print "<font color=\"green\" size=\"5px\">".$q[8]."</font>";
            print '<font style="color:green;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:green;font-size:20px;">Participant Average: </font>';
             print "<font color=\"green\" size=\"5px\">569 cal</font>";
                        echo '<br>';
        print '<font style="color:green;font-size:20px;">Correct Value: </font>';
             print "<font color=\"green\" size=\"5px\">720 cal</font>";
                  }
        
        
        ?>
        
        
</div>
    <div id="reading">
    <read><p>Q10</p></read>
    <figure><img src="images/MatchaCake.jpg"></figure>
    <?php
        if($acc[9]==1){print '<font style="color:red;font-size:20px;">Your guess: </font>';
             print "<font color=\"red\" size=\"5px\">".$q[9]."</font>";
            print '<font style="color:red;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:red;font-size:20px;">Participant Average: </font>';
             print "<font color=\"red\" size=\"5px\">480 cal</font>";
                        echo '<br>';
        print '<font style="color:red;font-size:20px;">Correct Value: </font>';
             print "<font color=\"red\" size=\"5px\">136 cal</font>";
                  }
        
             if($acc[9]==-1){print '<font style="color:blue;font-size:20px;">Your guess: </font>';
             print "<font color=\"blue\" size=\"5px\">".$q[9]."</font>";
            print '<font style="color:blue;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:blue;font-size:20px;">Participant Average: </font>';
             print "<font color=\"blue\" size=\"5px\">480 cal</font>";
                        echo '<br>';
        print '<font style="color:blue;font-size:20px;">Correct Value: </font>';
             print "<font color=\"blue\" size=\"5px\">136 cal</font>";
                  }
            if($acc[9]==0){print '<font style="color:green;font-size:20px;">Your guess: </font>';
             print "<font color=\"green\" size=\"5px\">".$q[9]."</font>";
            print '<font style="color:green;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:green;font-size:20px;">Participant Average: </font>';
             print "<font color=\"green\" size=\"5px\">480 cal</font>";
                        echo '<br>';
        print '<font style="color:green;font-size:20px;">Correct Value: </font>';
             print "<font color=\"green\" size=\"5px\">136 cal</font>";
                  }
        
        
        ?>
        
        
</div>
    <div id="reading">
    <read><p>Q11</p></read>
    <figure><img src="images/BakedPotato.jpg"></figure>
    <?php
        if($acc[10]==1){print '<font style="color:red;font-size:20px;">Your guess: </font>';
             print "<font color=\"red\" size=\"5px\">".$q[10]."</font>";
            print '<font style="color:red;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:red;font-size:20px;">Participant Average: </font>';
             print "<font color=\"red\" size=\"5px\">220 cal</font>";
                        echo '<br>';
        print '<font style="color:red;font-size:20px;">Correct Value: </font>';
             print "<font color=\"red\" size=\"5px\">100 cal</font>";
                  }
        
             if($acc[10]==-1){print '<font style="color:blue;font-size:20px;">Your guess: </font>';
             print "<font color=\"blue\" size=\"5px\">".$q[10]."</font>";
            print '<font style="color:blue;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:blue;font-size:20px;">Participant Average: </font>';
             print "<font color=\"blue\" size=\"5px\">220 cal</font>";
                        echo '<br>';
        print '<font style="color:blue;font-size:20px;">Correct Value: </font>';
             print "<font color=\"blue\" size=\"5px\">100 cal</font>";
                  }
            if($acc[10]==0){print '<font style="color:green;font-size:20px;">Your guess: </font>';
             print "<font color=\"green\" size=\"5px\">".$q[10]."</font>";
            print '<font style="color:green;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:green;font-size:20px;">Participant Average: </font>';
             print "<font color=\"green\" size=\"5px\">220 cal</font>";
                        echo '<br>';
        print '<font style="color:green;font-size:20px;">Correct Value: </font>';
             print "<font color=\"green\" size=\"5px\">100 cal</font>";
                  }
        
        
        ?>
        
        
</div>
    <div id="reading">
    <read><p>Q12</p></read>
    <figure><img src="images/Broccoli.jpg"></figure>
    <?php
        if($acc[11]==1){print '<font style="color:red;font-size:20px;">Your guess: </font>';
             print "<font color=\"red\" size=\"5px\">".$q[11]."</font>";
            print '<font style="color:red;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:red;font-size:20px;">Participant Average: </font>';
             print "<font color=\"red\" size=\"5px\">112 cal</font>";
                        echo '<br>';
        print '<font style="color:red;font-size:20px;">Correct Value: </font>';
             print "<font color=\"red\" size=\"5px\">200 cal</font>";
                  }
        
             if($acc[11]==-1){print '<font style="color:blue;font-size:20px;">Your guess: </font>';
             print "<font color=\"blue\" size=\"5px\">".$q[11]."</font>";
            print '<font style="color:blue;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:blue;font-size:20px;">Participant Average: </font>';
             print "<font color=\"blue\" size=\"5px\">112 cal</font>";
                        echo '<br>';
        print '<font style="color:blue;font-size:20px;">Correct Value: </font>';
             print "<font color=\"blue\" size=\"5px\">200 cal</font>";
                  }
            if($acc[11]==0){print '<font style="color:green;font-size:20px;">Your guess: </font>';
             print "<font color=\"green\" size=\"5px\">".$q[11]."</font>";
            print '<font style="color:green;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:green;font-size:20px;">Participant Average: </font>';
             print "<font color=\"green\" size=\"5px\">112 cal</font>";
                        echo '<br>';
        print '<font style="color:green;font-size:20px;">Correct Value: </font>';
             print "<font color=\"green\" size=\"5px\">200 cal</font>";
                  }
        
        
        ?>
        
        
</div>
    <div id="reading">
    <read><p>Q13</p></read>
    <figure><img src="images/KiwiFruit.jpg"></figure>
    <?php
        if($acc[12]==1){print '<font style="color:red;font-size:20px;">Your guess: </font>';
             print "<font color=\"red\" size=\"5px\">".$q[12]."</font>";
            print '<font style="color:red;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:red;font-size:20px;">Participant Average: </font>';
             print "<font color=\"red\" size=\"5px\">160 cal</font>";
                        echo '<br>';
        print '<font style="color:red;font-size:20px;">Correct Value: </font>';
             print "<font color=\"red\" size=\"5px\">200 cal</font>";
                  }
        
             if($acc[12]==-1){print '<font style="color:blue;font-size:20px;">Your guess: </font>';
             print "<font color=\"blue\" size=\"5px\">".$q[12]."</font>";
            print '<font style="color:blue;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:blue;font-size:20px;">Participant Average: </font>';
             print "<font color=\"blue\" size=\"5px\">160 cal</font>";
                        echo '<br>';
        print '<font style="color:blue;font-size:20px;">Correct Value: </font>';
             print "<font color=\"blue\" size=\"5px\">200 cal</font>";
                  }
            if($acc[12]==0){print '<font style="color:green;font-size:20px;">Your guess: </font>';
             print "<font color=\"green\" size=\"5px\">".$q[12]."</font>";
            print '<font style="color:green;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:green;font-size:20px;">Participant Average: </font>';
             print "<font color=\"green\" size=\"5px\">160 cal</font>";
                        echo '<br>';
        print '<font style="color:green;font-size:20px;">Correct Value: </font>';
             print "<font color=\"green\" size=\"5px\">200 cal</font>";
                  }
        
        
        ?>
        
        
</div>
    <div id="reading">
    <read><p>Q14</p></read>
    <figure><img src="images/CheddarCheese.jpg"></figure>
    <?php
        if($acc[13]==1){print '<font style="color:red;font-size:20px;">Your guess: </font>';
             print "<font color=\"red\" size=\"5px\">".$q[13]."</font>";
            print '<font style="color:red;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:red;font-size:20px;">Participant Average: </font>';
             print "<font color=\"red\" size=\"5px\">260 cal</font>";
                        echo '<br>';
        print '<font style="color:red;font-size:20px;">Correct Value: </font>';
             print "<font color=\"red\" size=\"5px\">200 cal</font>";
                  }
        
             if($acc[13]==-1){print '<font style="color:blue;font-size:20px;">Your guess: </font>';
             print "<font color=\"blue\" size=\"5px\">".$q[13]."</font>";
            print '<font style="color:blue;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:blue;font-size:20px;">Participant Average: </font>';
             print "<font color=\"blue\" size=\"5px\">260 cal</font>";
                        echo '<br>';
        print '<font style="color:blue;font-size:20px;">Correct Value: </font>';
             print "<font color=\"blue\" size=\"5px\">200 cal</font>";
                  }
            if($acc[13]==0){print '<font style="color:green;font-size:20px;">Your guess: </font>';
             print "<font color=\"green\" size=\"5px\">".$q[13]."</font>";
            print '<font style="color:green;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:green;font-size:20px;">Participant Average: </font>';
             print "<font color=\"green\" size=\"5px\">260 cal</font>";
                        echo '<br>';
        print '<font style="color:green;font-size:20px;">Correct Value: </font>';
             print "<font color=\"green\" size=\"5px\">200 cal</font>";
                  }
        
        
        ?>
        
        
</div>
    <div id="reading">
    <read><p>Q15</p></read>
    <figure><img src="images/Cereal.jpg"></figure>
    <?php
        if($acc[14]==1){print '<font style="color:red;font-size:20px;">Your guess: </font>';
             print "<font color=\"red\" size=\"5px\">".$q[14]."</font>";
            print '<font style="color:red;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:red;font-size:20px;">Participant Average: </font>';
             print "<font color=\"red\" size=\"5px\">177 cal</font>";
                        echo '<br>';
        print '<font style="color:red;font-size:20px;">Correct Value: </font>';
             print "<font color=\"red\" size=\"5px\">200 cal</font>";
                  }
        
             if($acc[14]==-1){print '<font style="color:blue;font-size:20px;">Your guess: </font>';
             print "<font color=\"blue\" size=\"5px\">".$q[14]."</font>";
            print '<font style="color:blue;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:blue;font-size:20px;">Participant Average: </font>';
             print "<font color=\"blue\" size=\"5px\">177 cal</font>";
                        echo '<br>';
        print '<font style="color:blue;font-size:20px;">Correct Value: </font>';
             print "<font color=\"blue\" size=\"5px\">200 cal</font>";
                  }
            if($acc[14]==0){print '<font style="color:green;font-size:20px;">Your guess: </font>';
             print "<font color=\"green\" size=\"5px\">".$q[14]."</font>";
            print '<font style="color:green;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:green;font-size:20px;">Participant Average: </font>';
             print "<font color=\"green\" size=\"5px\">177 cal</font>";
                        echo '<br>';
        print '<font style="color:green;font-size:20px;">Correct Value: </font>';
             print "<font color=\"green\" size=\"5px\">200 cal</font>";
                  }
        
        
        ?>
        
        
</div>
    <div id="reading">
    <read><p>Q16</p></read>
    <figure><img src="images/SalamiPork.jpg"></figure>
    <?php
        if($acc[15]==1){print '<font style="color:red;font-size:20px;">Your guess: </font>';
             print "<font color=\"red\" size=\"5px\">".$q[15]."</font>";
            print '<font style="color:red;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:red;font-size:20px;">Participant Average: </font>';
             print "<font color=\"red\" size=\"5px\">349 cal</font>";
                        echo '<br>';
        print '<font style="color:red;font-size:20px;">Correct Value: </font>';
             print "<font color=\"red\" size=\"5px\">300 cal</font>";
                  }
        
             if($acc[15]==-1){print '<font style="color:blue;font-size:20px;">Your guess: </font>';
             print "<font color=\"blue\" size=\"5px\">".$q[15]."</font>";
            print '<font style="color:blue;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:blue;font-size:20px;">Participant Average: </font>';
             print "<font color=\"blue\" size=\"5px\">349 cal</font>";
                        echo '<br>';
        print '<font style="color:blue;font-size:20px;">Correct Value: </font>';
             print "<font color=\"blue\" size=\"5px\">300 cal</font>";
                  }
            if($acc[15]==0){print '<font style="color:green;font-size:20px;">Your guess: </font>';
             print "<font color=\"green\" size=\"5px\">".$q[15]."</font>";
            print '<font style="color:green;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:green;font-size:20px;">Participant Average: </font>';
             print "<font color=\"green\" size=\"5px\">349 cal</font>";
                        echo '<br>';
        print '<font style="color:green;font-size:20px;">Correct Value: </font>';
             print "<font color=\"green\" size=\"5px\">300 cal</font>";
                  }
        
        
        ?>
        
        
</div>
    <div id="reading">
    <read><p>Q17</p></read>
    <figure><img src="images/ExtraLongCheeseburger.png"></figure>
    <?php
        if($acc[16]==1){print '<font style="color:red;font-size:20px;">Your guess: </font>';
             print "<font color=\"red\" size=\"5px\">".$q[16]."</font>";
            print '<font style="color:red;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:red;font-size:20px;">Participant Average: </font>';
             print "<font color=\"red\" size=\"5px\">771 cal</font>";
                        echo '<br>';
        print '<font style="color:red;font-size:20px;">Correct Value: </font>';
             print "<font color=\"red\" size=\"5px\">590 cal</font>";
                  }
        
             if($acc[16]==-1){print '<font style="color:blue;font-size:20px;">Your guess: </font>';
             print "<font color=\"blue\" size=\"5px\">".$q[16]."</font>";
            print '<font style="color:blue;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:blue;font-size:20px;">Participant Average: </font>';
             print "<font color=\"blue\" size=\"5px\">771 cal</font>";
                        echo '<br>';
        print '<font style="color:blue;font-size:20px;">Correct Value: </font>';
             print "<font color=\"blue\" size=\"5px\">590 cal</font>";
                  }
            if($acc[16]==0){print '<font style="color:green;font-size:20px;">Your guess: </font>';
             print "<font color=\"green\" size=\"5px\">".$q[16]."</font>";
            print '<font style="color:green;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:green;font-size:20px;">Participant Average: </font>';
             print "<font color=\"green\" size=\"5px\">771 cal</font>";
                        echo '<br>';
        print '<font style="color:green;font-size:20px;">Correct Value: </font>';
             print "<font color=\"green\" size=\"5px\">590 cal</font>";
                  }
        
        
        ?>
        
        
</div>
    <div id="reading">
    <read><p>Q18</p></read>
    <figure><img src="images/SpicyItalianpizza.jpg"></figure>
    <?php
        if($acc[17]==1){print '<font style="color:red;font-size:20px;">Your guess: </font>';
             print "<font color=\"red\" size=\"5px\">".$q[17]."</font>";
            print '<font style="color:red;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:red;font-size:20px;">Participant Average: </font>';
             print "<font color=\"red\" size=\"5px\">338 cal</font>";
                        echo '<br>';
        print '<font style="color:red;font-size:20px;">Correct Value: </font>';
             print "<font color=\"red\" size=\"5px\">240 cal</font>";
                  }
        
             if($acc[17]==-1){print '<font style="color:blue;font-size:20px;">Your guess: </font>';
             print "<font color=\"blue\" size=\"5px\">".$q[17]."</font>";
            print '<font style="color:blue;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:blue;font-size:20px;">Participant Average: </font>';
             print "<font color=\"blue\" size=\"5px\">338 cal</font>";
                        echo '<br>';
        print '<font style="color:blue;font-size:20px;">Correct Value: </font>';
             print "<font color=\"blue\" size=\"5px\">240 cal</font>";
                  }
            if($acc[17]==0){print '<font style="color:green;font-size:20px;">Your guess: </font>';
             print "<font color=\"green\" size=\"5px\">".$q[17]."</font>";
            print '<font style="color:green;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:green;font-size:20px;">Participant Average: </font>';
             print "<font color=\"green\" size=\"5px\">338 cal</font>";
                        echo '<br>';
        print '<font style="color:green;font-size:20px;">Correct Value: </font>';
             print "<font color=\"green\" size=\"5px\">240 cal</font>";
                  }
        
        
        ?>
        
        
</div>
    <div id="reading">
    <read><p>Q19</p></read>
    <figure><img src="images/TurkeyTomSandwich.jpg"></figure>
    <?php
        if($acc[18]==1){print '<font style="color:red;font-size:20px;">Your guess: </font>';
             print "<font color=\"red\" size=\"5px\">".$q[18]."</font>";
            print '<font style="color:red;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:red;font-size:20px;">Participant Average: </font>';
             print "<font color=\"red\" size=\"5px\">474 cal</font>";
                        echo '<br>';
        print '<font style="color:red;font-size:20px;">Correct Value: </font>';
             print "<font color=\"red\" size=\"5px\">510 cal</font>";
                  }
        
             if($acc[18]==-1){print '<font style="color:blue;font-size:20px;">Your guess: </font>';
             print "<font color=\"blue\" size=\"5px\">".$q[18]."</font>";
            print '<font style="color:blue;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:blue;font-size:20px;">Participant Average: </font>';
             print "<font color=\"blue\" size=\"5px\">474 cal</font>";
                        echo '<br>';
        print '<font style="color:blue;font-size:20px;">Correct Value: </font>';
             print "<font color=\"blue\" size=\"5px\">510 cal</font>";
                  }
            if($acc[18]==0){print '<font style="color:green;font-size:20px;">Your guess: </font>';
             print "<font color=\"green\" size=\"5px\">".$q[18]."</font>";
            print '<font style="color:green;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:green;font-size:20px;">Participant Average: </font>';
             print "<font color=\"green\" size=\"5px\">474 cal</font>";
                        echo '<br>';
        print '<font style="color:green;font-size:20px;">Correct Value: </font>';
             print "<font color=\"green\" size=\"5px\">510 cal</font>";
                  }
        
        
        ?>
        
        
</div>
    <div id="reading">
    <read><p>Q20</p></read>
    <figure><img src="images/SwissRoll.jpg"></figure>
    <?php
        if($acc[19]==1){print '<font style="color:red;font-size:20px;">Your guess: </font>';
             print "<font color=\"red\" size=\"5px\">".$q[19]."</font>";
            print '<font style="color:red;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:red;font-size:20px;">Participant Average: </font>';
             print "<font color=\"red\" size=\"5px\">343 cal</font>";
                        echo '<br>';
        print '<font style="color:red;font-size:20px;">Correct Value: </font>';
             print "<font color=\"red\" size=\"5px\">251 cal</font>";
                  }
        
             if($acc[19]==-1){print '<font style="color:blue;font-size:20px;">Your guess: </font>';
             print "<font color=\"blue\" size=\"5px\">".$q[19]."</font>";
            print '<font style="color:blue;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:blue;font-size:20px;">Participant Average: </font>';
             print "<font color=\"blue\" size=\"5px\">343 cal</font>";
                        echo '<br>';
        print '<font style="color:blue;font-size:20px;">Correct Value: </font>';
             print "<font color=\"blue\" size=\"5px\">251 cal</font>";
                  }
            if($acc[19]==0){print '<font style="color:green;font-size:20px;">Your guess: </font>';
             print "<font color=\"green\" size=\"5px\">".$q[19]."</font>";
            print '<font style="color:green;font-size:20px;"> cal</font>';
                       echo '<br>';
                      print '<font style="color:green;font-size:20px;">Participant Average: </font>';
             print "<font color=\"green\" size=\"5px\">343 cal</font>";
                        echo '<br>';
        print '<font style="color:green;font-size:20px;">Correct Value: </font>';
             print "<font color=\"green\" size=\"5px\">251 cal</font>";
                  }
        
        
        ?>
        
        
</div>
    
    
    
    <!--ここの部分が折りたたまれる＆展開される部分になります。
自由に記述してください。-->
</div>
<!--// 折り畳まれ部分 -->
    
    

       <br><br><br>
    
    
    
    
    
<div id="reading">
    <read><p>Read more about our work on social media and food:</p></read>
<ul>
    <li><a href="https://sites.google.com/site/twitter4food/paper">D. Fried, M. Surdeanu, S. Kobourov, M. Hingle, and D. Bell, "Analyzing
the Language of Food on Social Media,"  IEEE Big Data, 2014.</a></li>
    <li><a href="https://arxiv.org/pdf/1603.03784.pdf">D. Bell, D. Fried, L. Huangfu, M. Surdeanu, S. Kobourov, "Towards
Using Social Media to Identify Individuals at Risk for Preventable
Chronic Illness," 10th International Conference on Language Resources
and Evaluation, 2016.</a></li>
     
    
    </ul>
</div>
    <br><br>
    
    
  <a class="button" href="index.html">Go to the Top Page</a>
    
    <br><br><br><br><br><br>
    </div>
</div>
</center>

<script>
var responses = {};
var metric = false;
var bmi = 0.0;
    
function ustometric(){
    document.getElementById("toUS").style="display:inline;";
    document.getElementById("metricheight").style="display:inline;";
    document.getElementById("metricweight").style="display:inline;";
    document.getElementById("tometric").style="display:none;";
    document.getElementById("usheight").style="display:none;";
    document.getElementById("usweight").style="display:none;";
    metric=true;
}
function metrictous(){
    document.getElementById("tometric").style="display:inline;";
    document.getElementById("metricheight").style="display:none;";
    document.getElementById("metricweight").style="display:none;";
    document.getElementById("toUS").style="display:none;";
    document.getElementById("usheight").style="display:inline;";
    document.getElementById("usweight").style="display:inline;";
    metric=false;
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
}





</script>
</body>
</html>
