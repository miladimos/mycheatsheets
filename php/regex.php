<?php

// function_name('/pattern/',subject);



$my_url = "www.php.com";
if (preg_match("/php/", $my_url))
{
	echo "the url $my_url contains guru";
}
else
{
	echo "the url $my_url does not contain guru";
}



$my_text="I Love Regular Expressions";

$my_array  = preg_split("/ /", $my_text);

print_r($my_array );


$text = "We at Guru99 strive to make quality education affordable to the masses. Guru99.com";

$text = preg_replace("/Guru/", '<span style="background:yellow">Guru</span>', $text);

echo $text;



$my_email = "name@company.com";
if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $my_email)) {
echo "$my_email is a valid email address";
}
else
{
  echo "$my_email is NOT a valid email address";
}