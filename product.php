<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - DBT</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <!-- top navigation starts here -->
    <?php require "includes/navigation.php"; ?>
    <!-- top navigation ends here -->
<div class="header">
    <h1>About</h1>
</div>
<!-- the main content section starts here -->
<div class="row">
    <div class="content">
<h3>Main content</h3>

<table border="1">
    <tr>
        <th colspan="2">Item</th>
        <th>Quantity</th>
        <th>Price</th>
    </tr>
    <tr>
        <td>1.</td>
        <td>Pen</td>
        <td>10</td>
        <td>Ksh. 100</td>
    </tr>
    <tr>
        <td>2.</td>
        <td>Paper</td>
        <td>15</td>
        <td>Ksh. 10</td>
    </tr>
    <tr>
        <th colspan="3">Sub Total</th>
        <th>Ksh. 110</th>
    </tr>
</table>
<br>
<table border="1">
    <tr>
        <th colspan="2">Item</th>
        <th>Quantity</th>
 
    </tr>
    <tr>
        <td rowspan="2">Stationaries</td>
        <td>Pen</td>
        <td>10</td>

    </tr>
    <tr>
        <td>Paper</td>
        <td>15</td>

    </tr>
    <tr>
        <th colspan="2">Sub Total</th>
        <th>25</th>
    </tr>
</table>
    </div>
    <div class="sidebar">
<h3>Side Bar</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
</div>
<!-- the main content section ends here -->
<div class="footer">
copyright &copy; DBIT 2023
</div>
</body>
</html>