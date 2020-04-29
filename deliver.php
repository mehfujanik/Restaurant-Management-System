<?php

        $connection=mysqli_connect('localhost','root','','restaurants');

        $query="select * from order_details";
        $result=mysqli_query($connection,$query);
            if($result){
						if(mysqli_num_rows($result)>0){
                            echo "<table border='1'>
                                <tr>
                                    <td>
                                        Customer ID
                                    </td>
                                    <td>
                                        Product ID
                                    </td>
                                    <td>
                                        Product Quantity
                                    </td>
                                    <td>
                                        Delivered?
                                    </td>


                                </tr>
                                ";
							while($ans=mysqli_fetch_array($result))
              {
                                echo "<tr>";

                                            echo "<td>". $ans['customer_id'] ."</td>";

                                            echo "<td>". $ans['product_id'] ."</td>";
                                            echo "<td>". $ans['p_quantity'] ."</td>";
                                            echo "<td>";?>
                                            <input type="submit" name="done" action="post" value="<?php echo $ans['product_id'];?> ">




<?php
                                echo "</tr>";
                }

                            echo "</table>";


    }
  }




?>

<html>
    <head>
        <title>This is Management page</title>
    </head>
    <body>
        <form method="POST" action="deliver.php">
          <input type="hidden" name="product_id" value="<?php echo $ans['product_id'];?>">
                <input type="submit" value="DONE!" name="done">

        </form>

        <ul class="nav navbar-nav navbar-nav-first">
            <li><a href="rms.php" class="smoothScroll">Log Out</a></li>


        </ul>
    </body>
</html>


<?php

        if(isset($_POST['done']))
        {
            $deliverd_item=mysqli_real_escape_string($connection,$ans['product_id']);
            $query="delete all from order_details where product_id='$deliverd_item'";
            $result=mysqli_query($connection,$query);
                if($result)
                {
                if(mysqli_num_rows($result))
                {

                                              include('deliver.php');

    }

    }
    }
    mysqli_close($connection);

    ?>
