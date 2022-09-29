<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>VTU CALCULATOR</title>
</head>
<body>
    <!---------------Header----------------->
   <div class="header">
        <div class="navbar">
        <a href="index.html"><img src="logo-2.png" class="logo"></a>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="cgpa.php">CGPA</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
        </div>
        <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $first = $_POST['first'];
        $second = $_POST['second'];
        $third = $_POST['third'];
        $four = $_POST['four'];
        $five = $_POST['five'];
        $six = $_POST['six'];
        $seven = $_POST['seven'];
        $eight = $_POST['eight'];

        if(empty($first) || empty($second) || empty($third) || empty($four) || empty($five) || empty($six) || empty($seven) || empty($eight)){
            $msg = "<div class='alert alert-danger'>Feild must not be empty..!</div>";
        }else{
            $firstSemister = ($first/100)*5;
            $secondSemister = ($second/100)*5;
            $thirdSemister = ($third/100)*5;
            $fourSemister = ($four/100)*10;
            $fiveSemister = ($five/100)*15;
            $sixSemister = ($six/100)*20;
            $sevenSemister = ($seven/100)*25;
            $eightSemister = ($eight/100)*15;

            $result = ($firstSemister + $secondSemister + $thirdSemister + $fourSemister + $fiveSemister + $sixSemister + $sevenSemister + $eightSemister);
        }
    }
?>
     <div class="container1">
        <div class="card1">
            <h2 class="text-center text-success p-4">CGPA Calculator</h2>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="" class="w-50 m-auto" method="post">
                <?php if(isset($msg)){
                    echo $msg;
                } ?>
                <?php 
                        if(isset($result)){?>
                            <p class="text-center text-success">Your Result is : <strong><?php echo $result; ?></strong></p>
                    <?php }?>
                    <table class="table-border">
                        <tr>
                            <td><label for="" >First Semester</label></td>
                            <td><input class="form-control" type="text" name="first"></td>
                        </tr>
                        <tr>
                            <td><label for="">Second Semester</label></td>
                            <td><input class="form-control" type="text" name="second"></td>
                        </tr>
                        <tr>
                            <td><label for="">Third Semester</label></td>
                            <td><input class="form-control" type="text" name="third"></td>
                        </tr>
                        <tr>
                            <td><label for="">Four Semester</label></td>
                            <td><input class="form-control" type="text" name="four"></td>
                        </tr>
                        <tr>
                            <td><label for="">Five Semester</label></td>
                            <td><input class="form-control" type="text" name="five"></td>
                        </tr>
                        <tr>
                            <td><label for="">Six Semester</label></td>
                            <td><input class="form-control" type="text" name="six"></td>
                        </tr>
                        <tr>
                            <td><label for="">Seven Semester</label></td>
                            <td><input class="form-control" type="text" name="seven"></td>
                        </tr>
                        <tr>
                            <td><label for="">Eight Semester</label></td>
                            <td><input class="form-control" type="text" name="eight"></td>
                        </tr>
                    </table>
                    <input class="btn btn-success" type="submit" name="submit" value="Calculate">
                    
                </form>
            </div>
        </div>
    </div>   
 </body>
 </html>