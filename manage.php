<?php
        $connection=mysqli_connect('localhost','root','','restaurants');
    if(isset($_POST['submit'])){
        $adminid=mysqli_real_escape_string($connection,$_POST['e_id']);
        $adminpassword=mysqli_real_escape_string($connection,$_POST['e_password']);


        $query="select e_id,e_password from admin";
        $result=mysqli_query($connection,$query);
            if($result){
						if(mysqli_num_rows($result)>0){
							while($ans=mysqli_fetch_array($result)){
		                              if($ans['e_id']==$_POST['e_id'] && $ans['e_password']==$_POST['e_password']){
                                          include('update.php');
                                      }
    }
}
}
}
mysqli_close($connection);
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

            <?php
                if(!isset($_POST['submit'])){
            ?>
            <form action="#" method="post">
			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="ID" required="" name="e_id">
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="e_password">
			</div>
			<div>
				<input type="submit" value="submit" name="submit"/>
			</div>
		</form>
            <?php
                }
            ?>
        </center><!-- form -->

	</section><!-- content -->
</div><!-- container -->
</body>
</html>
