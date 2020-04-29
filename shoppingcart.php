
<?php
session_start();
	//for product adding
	$connection=mysqli_connect('localhost','root','','restaurants');
	$product_ids=array();
	//session_destroy();
	//check if add to cart button has benn submitted
	if(filter_input(INPUT_POST,'add_to_cart')){


		if(isset($_SESSION['shopping_cart'])){
            $_SESSION['shop']=$_SESSION['shopping_cart'];
				$count=count($_SESSION['shopping_cart']);
        $product_ids=array_column($_SESSION['shopping_cart'], 'id');
				if(!in_array(filter_input(INPUT_GET,'id'),$product_ids)){
					$_SESSION['shopping_cart'][$count]=array(
				'id'=>filter_input(INPUT_GET, 'id'),
				'name'=>$_POST['name'],
				'price'=>filter_input(INPUT_POST, 'price'),
                 'quantity'=>$_POST['quantity']

			);
				}
			else{
				for($i=0;$i<count($product_ids);$i++){
					if($product_ids[$i]==filter_input(INPUT_GET,'id')){
							$_SESSION['shopping_cart'][$i]['quantity']+=$_POST['quantity'];
					}
				}
			}
		}
		else{
			$_SESSION['shopping_cart'][0]=array(
				'id'=>filter_input(INPUT_GET, 'id'),
				'name'=>$_POST['name'],
				'price'=>filter_input(INPUT_POST, 'price'),

				'quantity'=>filter_input(INPUT_POST, 'quantity')
			);

		}
	}






//for delete a item
if(filter_input(INPUT_GET, 'action')=='delete'){
	foreach($_SESSION['shopping_cart'] as $key=>$product) {
		if($product['id']==filter_input(INPUT_GET,'id')){
			unset($_SESSION['shopping_cart'][$key]);

		}
	}
$_SESSION['shopping_cart']=array_values($_SESSION['shopping_cart']);



}
//for submit a item into data base
        if(filter_input(INPUT_GET, 'action')=='delete1'){
        foreach($_SESSION['shopping_cart'] as $key=>$product){
                    $customer_id=$_SESSION['customer_id'];
                    $product_id=$product['id'];
                    $product_quantity=$product['quantity'];

                     $insert1= "insert into order_details values('$customer_id','$product_id','$product_quantity')";
                if(mysqli_query($connection, $insert1)){
                            echo "inserted";

                    }
                    else{
                                echo "ERROR: Could not able to execute $insert1. " . mysqli_error($connection);
                          }
            //unset($_SESSION['shopping_cart'][$key]);

                }

        }











//pre_r($_SESSION);
function pre_r($array){
	echo '<pre>';
	print_r($array);
	echo '</pre>';
};
//session_destroy();
//product adding end
?>





<html>
    <head>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="connect.css">

             <link rel="stylesheet" href="css/bootstrap.min.css">
             <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">


     <!-- MAIN CSS -->


     <!-- MAIN CSS -->

    </head>
    <body>

        <div class="split left">

                <div class="container">
                    <div class="col-lg-9">

			<?php
					$connect=mysqli_connect('localhost','root','','restaurants');
					$query="select * from products order by id asc";
					$result=mysqli_query($connect,$query);
					if($result){
						if(mysqli_num_rows($result)>0){
							while($product=mysqli_fetch_assoc($result)){
								?>
										<div class=" col-sm-4 col-md-3">
											<form method="post" action="shoppingcart.php?action=add&id=<?php echo $product['id']; ?>">
												<div class="products">
													<img class="img-responsive" src="<?php echo $product['image'];?>" />
													<h4 style="color:white;" class="text-info"><center><?php echo $product['name']?></center></h4>
													<h4><center>TK<?php echo " ".$product['price']?></center></h4>
													<input type="text" name="quantity" class="form-control" value="0">
													<input type="hidden" name="name" value="<?php echo $product['name'];?>">
                          <input type="hidden" name="customer_id" value="<?php echo $_SESSION['customer_id'];?>">




													<input type="hidden" name="price" value="<?php echo $product['price'];?>">
													<center><input type="submit" name="add_to_cart" class="btn btn-info" value="ORDER" style="margin-top:3px;"></center>


												</div>

											</form>


										</div>

								<?php
						}
					}
				}
			?>
    </div>
        </div>
            </div>



        <!--Split right-->





            <div class="split right">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <form method="post" action="shoppingcart.php">

				<table>
					<tr>
                        <td colspan="5">
                        <center><h3>ORDER</h3></center>

                             <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-nav-first">
                                <li><a href="register.php" class="smoothScroll">Log Out</a></li>


                            </ul>

                                    <!--<ul class="nav navbar-nav navbar-right">
                                         <li><a href="#">Call Now! <i class="fa fa-phone"></i> 010 020 0340</a></li>
                                         <a href="#footer" class="section-btn">Reserve a table</a>
                                    </ul>-->
                            </div>
                        </td>


                    </tr>
					<tr>
						<th width="15%">NAME</th>
						<th width="15%">ID</th>
						<th width="15%">QUANTITY</th>
						<th width="15%">PRICE</th>
						<th width="15%">TOTAL</th>

					</tr>
					<?php

						if(!empty($_SESSION['shopping_cart'])){
							$total=0;
							foreach($_SESSION['shopping_cart'] as $key=>$product){

					?>

							<tr>

								<td><?php echo $product['name'];?></td>
								<td><?php echo $product['id']; ?></td>
								<td><?php echo $product['quantity']; ?></td>
								<td>TK<?php echo $product['price']; ?></td>
								<td>
                                    Tk
                                    <?php
                                        echo number_format($product['quantity']*$product['price'],2);
                                    ?>
                                </td>
								<td>
									<button style="border-radius:50%;">
                                <a style="text-decoration:none; color:red;" href="shoppingcart.php?action=delete&id=<?php echo $product['id']; ?>"/>
                                X
                            </button>


								</td>
                                <td>

                                </td>


							</tr>
								<?php
									$total=$total+($product['quantity']*$product['price']);



																$_SESSION['quan']= $product['quantity'];
																$_SESSION['pri']= $product['price'];

                                $_SESSION['tota']=number_format($product['quantity']*$product['price'],2);

                                ?>

                                    <input type="hidden" name="p_id" value="<?php echo $product['id'];?>">
                                    <input type="hidden" name="p_q" value="<?php echo $c;?>">
                                    <input type="hidden" name="p_p" value="<?php echo $d;?>">
                                    <input type="hidden" name="t_p" value="<?php echo $e;?>">
                                    <input type="hidden" name="t" value="<?php echo $time;?>">
                                <?php
								}
								 ?>

								<tr>
									<td colspan="2" align="center">Total</td>
									<td align="center"><?php echo number_format($total,2);?>TK</td>
									<td></td>
								</tr>
								<?php
							}
							?>

                </table>

                            <?php
                                    if(!empty($_SESSION['shopping_cart']))
																		{
                                        ?>

                                        <center><button type="submit" name="order" style="border-radius:50%;">
                                <a style="text-decoration:none; color:red;" href="shoppingcart.php?action=delete1&id = <?php echo $product['id'];?>"/>
                                Purchased
                            </button>
                        </center>


										<?php
																}
										?>

            </form>

        </div>

    </div>
 </div>
</body>
</html>
