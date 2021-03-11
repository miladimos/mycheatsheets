<?php

// function_name('/pattern/',subject);


// preg_match()    The preg_match() function searches string for pattern, returning true if pattern exists, and false otherwise.
// preg_match_all()    The preg_match_all() function matches all occurrences of pattern in string. Useful for search and replace.
// preg_replace()  The preg_replace() function operates just like ereg_replace(), except that regular expressions can be used in the pattern and replacement input parameters.
// preg_split()    Preg Split (preg_split()) operates exactly like the split() function, except that regular expressions are accepted as input parameters.
// preg_grep() The preg_grep() function searches all elements of input_array, returning all elements matching the regex pattern within a string.
// preg_ quote()   Quote regular expression characters


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
