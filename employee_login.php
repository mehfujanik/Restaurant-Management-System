<?php
            session_start();
            $connection=mysqli_connect('localhost','root','','restaurants');
        if(isset($_POST['go']))
        {
            $existing_emp_id=mysqli_real_escape_string($connection,$_POST['emp_id']);
            $existing_emp_password=mysqli_real_escape_string($connection,$_POST['emp_password']);


            $query="select eid, password from employee";
            $result=mysqli_query($connection,$query);
                if($result)
                {
                if(mysqli_num_rows($result)>0)
                {
                  while($ans=mysqli_fetch_array($result))
                  {
                                      if($ans['eid']==$_POST['emp_id'] && $ans['password']==$_POST['emp_password'])
                                      {
                                              include('deliver.php');
                                          }



        }

    }

    }
    }

    ?>


    <html>
<head>
                <meta charset="utf-8">
                <title>Login</title>

</head>
<body>
<div class="container">
	<section id="content">

		<center>

            <form method="post" action="#">
			<h1>Employee Login</h1>
			<div>
				<input type="text" placeholder="ID" required="" name="emp_id">
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="emp_password">
			</div>
			<div>
				<input type="submit" value="submit" name="go"/>
			</div>
		</form>

        </center><!-- form -->

	</section><!-- content -->
</div><!-- container -->
</body>
</html>
