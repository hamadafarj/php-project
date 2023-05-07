<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    ////////////////// "rtrim"
        //rtrim(): This function removes whitespace or other specified characters from the end of a string
      $str="Hello World    ";
      $str=rtrim($str);

      echo $str; //outout == "Hello World"


     ////////////////// "similar_text"
        //similar_text(): This function calculates the similarity between two strings as a percentage. 
        $str1="Hello World"; 
        $str2="Hello";
        $simillarity =similar_text($str1,$str2);
  
        echo $simillarity; //outout == 5


    ////////////////// "str_split"
        //str_split(): This function splits a string into an array of characters. The second parameter specifies the length of each substring
        $str="Hello World"; 
        $chars=str_split($str,1);
  
        print_r($chars); // Output: Array ( [0] => H [1] => e [2] => l [3] => l [4] => o [5] =>   [6] => W [7] => o [8] => r [9] => l [10] => d )



    /////////// "str_word_count"
        //str_word_count(): This function counts the number of words in a string.
        $str = "Hello World";
        $count = str_word_count($str);
        echo $count; // Output: 2




    /////////// "str_shuffle"
        //str_shuffle(): This function shuffles the characters in a string randomly. 
        $str = "Hello World";
        $shuffled = str_shuffle($str);
        echo $shuffled; // Output: "dloHolleW r"





    /////////// "substr"
        //substr(): This function returns a portion of a string starting at a specified index and with a specified length.
        $str = "Hello World";
        $sub = substr($str, 6, 5);
        echo $sub; // Output: "World"
        
        



        ?>
</body>
</html>