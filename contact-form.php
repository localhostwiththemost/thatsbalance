<?php
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$routine = $_POST['routine'];
$diet = $_POST['diet'];
$injuries = $_POST['injuries'];
$goals = $_POST['goals'];
$progress = $_POST['progress'];
$roadblocks = $_POST['roadblocks'];
$trainer = $_POST['trainer'];
$fitprog = $_POST['fitprog'];
$fast = $_POST['fast'];
$fit = $_POST['fit'];



$email_from = 'jpowelldev@gmail.com';

$email_subject = "New Form submission";

$email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message"


$to = 'jpowelldev@gmail.com';

$headers = "From: $email_from \r\n";
                          
$headers .= "Reply-To: $visitor_email \r\n";
                          
mail($to,$email_subject,$email_body,$headers);



// Prevents SQL Injection
function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
               
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

if(IsInjected($email))
{
    echo "Bad email value!";
    exit;
}
?>