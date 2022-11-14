<html>
<header>
    <h1> Thank you for submitting your order</h1>
    <link rel="stylesheet" href="customerstyle.css">
</header>

<body>
    <h2> This is your user information.</h2>
    <?php 
    error_reporting(E_ALL); 
    ini_set("display_errors", 1); 
    //access the global array called $_POST to get the values from the text fields 
 
    $username = $_POST["username"]; 
    $password = $_POST["password"]; 
    $dog = $_POST["dog"];
    $cat = $_POST["cat"];
    $shipping = $_POST["ship"];
    $hamster = $_POST["hamster"];
    $price_dog = 50;
    $price_cat = 35;
    $price_hamster = 10;
    $total_dog = $price_dog * $dog;
    $total_cat = $price_cat * $cat;
    $total_hamster = $price_hamster * $hamster;
    $Scost = 0;

    if ($shipping == "Free-7-Day") { $Scost = 0; }
    elseif ($shipping == "Overnight") { $Scost = 50; }
    elseif ($shipping == "Three-day") { $Scost = 5; }
    $total = $total_dog + $total_cat + $total_hamster + $Scost;

    echo "<h4>";
    echo "Userame: " . $username . "<br>"; 
    echo "Password: " . $password . "<br>"; 
    echo "</h4>";
    echo "<br> <h2> This is what you ordered </h2>";
    echo "You ordered $dog dogs<br>";
    echo "You ordered $cat cats<br>";
    echo "You ordered $hamster hamsters<br>";
    ?>
    <table class="tg">
<thead>
  <tr>
    <th class="tg-0lax"></th>
    <th class="tg-0lax">Quantity</th>
    <th class="tg-0lax">Cost</th>
    <th class="tg-0lax">Sub Total</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-0lax">Dog</td>
    <td class="tg-0lax"><?php echo "$dog"; ?></td>
    <td class="tg-0lax">$50</td>
    <td class="tg-0lax"><?php echo "$total_dog"; ?></td>
  </tr>
  <tr>
    <td class="tg-0lax">Cat</td>
    <td class="tg-0lax"><?php echo "$cat"; ?></td>
    <td class="tg-0lax">$35</td>
    <td class="tg-0lax"><?php echo "$total_cat"; ?></td>
  </tr>
  <tr>
    <td class="tg-0lax">Hamster</td>
    <td class="tg-0lax"><?php echo "$hamster"; ?></td>
    <td class="tg-0lax">$10 </td>
    <td class="tg-0lax"><?php echo "$total_hamster"; ?></td>
  </tr>
  <tr>
    <td class="tg-0lax">Shipping</td>
    <td class="tg-0lax" colspan="2"><?php echo "$shipping"; ?></td>
    <td class="tg-0lax"><?php echo "$Scost"; ?></td>
  </tr>
  <tr>
    <td class="tg-0lax" colspan="3">Total Cost</td>
    <td class="tg-0lax"><?php echo "$total"; ?></td>
  </tr>
</tbody>
</table>
</body>

</html>