# calorie4food-webapp
## Overview ##

To measure how accurate people are at estimating calories in static pictures of food, we crowdsourced the problem to 2,028 participants, via a reddit post. Participants guessed the number of calories in 20 images of food for which we had ground truth (images of food for which we know the calories). We confirmed that this a diffcult task, even for nutritional experts.
We observed the “wisdom of crowds” phenomenon, such that even a small crowd of 10 individuals achieves an accuracy (where a calorie guess was considered accurate if it was within 20% of the correct calorie count) exceeding that of the expert annotators. It is suggests that semi-automated food labeling apps can be implemented at a low cost by harnessing the wisdom of crowds, even when the crowd is small.
We believe this is an important task, as many of us make dietary choices based on pictures of food, e.g., when ordering food in restaurants. Our study highlights several important patterns, which may be opened to public after our paper is published in ACM.
Our data and results provide new information about the way we process food information, and will drive the design of calorie-estimation mobile apps.

## Run on the local server

You may see the tutorial of Apache setup: https://jason.pureconcepts.net/2012/10/install-apache-php-mysql-mac-os-x/
After you got Apache and mysql prepared, please change the code in endf.php into the dbname, host, user, password of yours:
    
    $dsn='mysql:dbname=xxxx;host=xxxxxxxx';
    $user='xxxxxxxxxxxx';
    $password='xxxxxxxxxxxx';
    $dbh=new PDO($dsn,$user,$password);
    $dbh->query('SET NAMES utf8');

## WebSite
You may see the demo online here: http://zephyr.sista.arizona.edu/caloriequiz/index.html

The users review on the Reddit: https://www.reddit.com/r/SampleSize/comments/4y6d9m/academic_how_accurately_can_you_estimate_the/

## Quiz's Result and Paper
Coming soon...

