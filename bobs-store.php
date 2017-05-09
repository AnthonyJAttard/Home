<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Bob's Auto Parts</title>
</head>
<body>
    <header>
        <h1>Bob's Auto Parts Order Form</h1>
    </header>
    <div>
        <form action="processorder.php" method="post">
            <table style="border: 0;">
                <tr style="background: #cccccc;">
                    <td style="width: 150px; text-align: center">Item</td>
                    <td style="width: 15px; text-align: center">
                        Quantity</td>
                </tr>
                <tr>
                    <td>Tyres</td>
                    <td><label> <input type="text" name="tireqty"
                            size="3" maxlength="3" />
                    </label></td>
                </tr>
                <tr>
                    <td>Oil</td>
                    <td><label> <input type="text" name="oilqty"
                            size="3" maxlength="3" />
                    </label></td>
                </tr>
                <tr>
                    <td>Spark Plugs</td>
                    <td><label> <input type="text" name="sparkqty"
                            size="3" maxlength="3" />
                    </label></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;"><input
                        type="submit" value="Submit Order"></td>
                </tr>
            </table>
        </form>
    </div>
    <footer>
        <p>Copyright 2017 Anthony Attard</p>
    </footer>
</body>

</html>