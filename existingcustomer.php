
      <?php
              session_start();
              $connection=mysqli_connect('localhost','root','','restaurants');
          if(isset($_POST['submit']))
          {
              $existing_customer_id=mysqli_real_escape_string($connection,$_POST['customer_id']);
              $existing_customer_password=mysqli_real_escape_string($connection,$_POST['customer_password']);
              $_SESSION['customer_id']=$existing_customer_id;

              $query="select customer_id,customer_password from customer";
              $result=mysqli_query($connection,$query);
                  if($result)
                  {
      						if(mysqli_num_rows($result)>0)
                  {
      							while($ans=mysqli_fetch_array($result))
                    {
      		                              if($ans['customer_id']==$_POST['customer_id'] && $ans['customer_password']==$_POST['customer_password'])
                                        {

                                                include('shoppingcart.php');
                                            }



          }

      }

      }
      }

      mysqli_close($connection);


      ?>
