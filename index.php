<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Age Calculator</title>
</head>
<body>
    <div align="center">
        <br><br><br><br>
        <h3>Enter Your Birth Date</h3>

        <form method="post">
            <select name="day">
                <?php 
                    for($i=1; $i<=31; $i++):
                        echo "<option value=".$i.">".$i."</option>";
                    endfor;
                ?>  
            </select>
            </select>
 
            <select name="month">
                <option value="01" selected="selected">January</option>
                <option value="02">Febuary</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            <select name="year">
                <?php 
                    for($i=1960; $i<=2020; $i++):
                        echo "<option value=".$i.">".$i."</option>";
                    endfor;
                ?>  
            </select>
            <br><br>
            <button type="submit" name="submit" class="calculate">Calculate My Age!</button>
            <div id="result">
            <!-- tamplikan hasil dari proses  -->
                <p><?php include("process.php") ?></p>
            </div>
        </form>
    </div>
    
</body>
</html>