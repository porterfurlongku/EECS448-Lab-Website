<DOCTYPE HTML>
<html>
 
<head>
	<title>PHP Quiz</title>
</head>
 
<body>
 
	<div>
        <h2>Questions<h2>
            <div>
                <p> 1) 2+2=? </p> <br>
                  <p>  2) 3+3=? </p><br>
                  <p>  3) 1+1=? </p><br>
                   <p> 4) 4+4=? </p><br>
                   <p> 5) 5+5=? </p><br>
            </div>
		<h2>Results</h2>
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "D") { $totalCorrect++; }
            if ($answer2 == "C") { $totalCorrect++; }
            if ($answer3 == "B") { $totalCorrect++; }
            if ($answer4 == "C") { $totalCorrect++; }
            if ($answer5 == "C") { $totalCorrect++; }
            $total = $totalCorrect / 5 *100;
            echo "Your Answers <br>";
            echo "1) 2+2=?<br>";
            echo "You answered: $answer1 <br>";
            echo "Correct Answer D <br>";
            echo "2) 3+3=?<br>";
            echo "You answered: $answer2 <br>";
            echo "Correct Answer C <br>";
            echo "3) 1+1=?<br>";
            echo "You answered: $answer3 <br>";
            echo "Correct Answer B <br>";
            echo "4) 4+4=?<br>";
            echo "You answered: $answer4 <br>";
            echo "Correct Answer C <br>";
            echo "5) 5+5=?<br>";
            echo "You answered: $answer5 <br>";
            echo "Correct Answer C <br>";
            echo "<br> Correct Answers <br>";
            echo "D <br> C <br> B <br> C <br> C <br>";
            echo "<div id='results'> You got $totalCorrect / 5 correct</div>";
            echo "Which is $total%";
            
        ?>
	
	</div>
 
</body>
 
</html>