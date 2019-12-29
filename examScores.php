<html>
<title>examsScores.php</title>
<link rel="stylesheet" type="text/css" href="style.css">
    <body>
          <h1>Student Grading Portal</h1>
         <div class = "my-form">
        <form action="examScores.php" method="post">
            <center>
                <table border=0>
                    <tr>
                        <td>
                            Student Name
                        </td>
                        <td>
                            <input type=text name="t1" placeholder= "enter student name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Marks for Physics
                        </td>
                        <td>
                            <input type=text name="t2" placeholder= "enter exact value">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Marks for Chemistry
                        </td>
                        <td>
                            <input type=text name="t3" placeholder= "enter exact value">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Marks for Math
                        </td>
                        <td>
                            <input type=text name="t4" placeholder= "enter exact value">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Marks for English
                        </td>
                        <td>
                            <input type=text name="t5" placeholder= "enter exact value">
                        </td>
                    </tr>
                </table>
                <br>
                <br>
                <input type=submit name="s" value="Result">
            </center>
            <?php
if(isset($_POST['s']))////checking whether the input element is set or not
{
    $a=$_POST['t1']; //accessing value from 1st text box
    $a1=$_POST['t2']; //accessing value from 2nd text field
    $a2=$_POST['t3']; //accessing value from 3rd text field
    $a3=$_POST['t4']; //accessing value from 4th text field
    $a4=$_POST['t5']; //accessing value from 5th text field
    $sum=$a1+$a2+$a3+$a4; //total marks
    if($sum>=0&&$sum<=50)
        $grade="Fail";
    if($sum>50&&$sum<=100)
        $grade="Pass";
    if($sum>100&&$sum<=150)
        $grade="Credit";
    if($sum>150&&$sum<=200)
        $grade="V.Good";
    if($sum>200)
        $grade="Excellent";
    echo "<br>";
    echo "<font size=4><center>Student is:-".$a."</center><br>"; 
    echo "<font size=4><center>Total marks:-".$sum."</center><br>"; 
    echo "<font size=4><center>Grade is:-".$grade."</center>"; 
}
            ?>
        </form>
        </div>
    </body>
</html>