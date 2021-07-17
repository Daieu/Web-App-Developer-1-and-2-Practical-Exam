<html>
    <body>
        <form action="index.php" method="get">
            Input String: <input type="text" name="input">
            <br>
            <input type="submit">
            <br>
        </form>
        <br>
        <?php
        function Palindrome($string){
            $input = $string;                           //getting the string from input.
            $nospc = str_replace(' ', '', $input);      //removes spaces.
            if (strrev($nospc) == $nospc){              //this reverses the string and checks the reversed input if it's equal to the input.
                echo "$input is a palindrome.";
            }
            else{
                echo "$input is not a palindrome."; 
            }
        }
        if (!empty($_GET["input"])){                    //Determine if the variable is empty
            $string = $_GET["input"];                   //declares variable string.
            Palindrome($string);                        //Palindrome function
        }
        else{
            echo "Input a String.";
        }
        ?>
    </body>
</html>