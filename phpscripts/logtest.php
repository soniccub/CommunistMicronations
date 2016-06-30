<?php

$questions = array($_POST['q1'],$_POST['q2'],$_POST['q3'],$_POST['q4'],$_POST['q5'],$_POST['q6'],$_POST['q7']);
$score = 0;
foreach ($questions as $answer){
$score+=$answer;
}
if ($score >= 7){
echo 'congrats you are not a failure.';
}


elif ($score >= 3){
echo 'congrats you got a few right.';
}

elif ($score >= 0){
echo 'congrats you are a failure.';
}

else {

echo 'just get off the website already.';
}





?>