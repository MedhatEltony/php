<?php
// Outputing  Data to browser 
// echo , print , printf , sprintf

$welcome = 'Welcome to my website ';
echo $welcome . 'Medhat ';

echo '<style>
h1{
    color:red;
    
}</style>';
echo '<h1> Welcome to website</h1>';
$str = 'Welcome to my website %s';
printf($str, 'Medhat');
$str = 'Welcome to my website %d';
printf($str, 2.0);
$str = 'Welcome to my website %b Name is %s color %X';
//printf($str, 2.0, 'Medhat ');
$text = sprintf($str, 2.0, 'Medhat ', 1206688);
echo $text;
// https://www.php.net/manual/en/function.printf.php.

//String Interpolation
//Escape Sequences
// \n \\ \t \r
//Curly Braces 
echo "<br>My name is {$str}";
//Heredoc
echo <<<MYtext
Now you can browse privately, and other people who use this device won't see your activity. However, downloads and bookmarks will be saved. Learn more

Chrome won't save the following information:
Your browsing history
Cookies and site data
Information entered in forms
Your activity might still be visible to:
Websites you visit
Your employer or school
Your internet service provider

MYtext;

//Nowdoc
// PHP 5.3+ 

echo <<<'MYtext'
Now you can browse privately, and other people who use this device won't see your activity. However, downloads and bookmarks will be saved. Learn more

Chrome won't save the following information:
Your browsing history
Cookies and site data
Information entered in forms
Your activity might still be visible to:
Websites you visit
Your employer or school
Your internet service provider

MYtext;

//Control Structure
// if , elseif , else 
