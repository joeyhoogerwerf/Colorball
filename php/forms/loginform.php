<div id="loginform">

	<h1>L<span class="italic">o</span>gin With Y<span class="italic">o</span>ur PX3L Acc<span class="italic">o</span>unt</h1>

			<form method="post" action="play.php">
						
				<p>Username:
					<input type="text" name="userName" />
				</p>
				
				<p>Password:
					<input type="password" name="password" />
				</p>
								
				<p>
					<input type="submit" name="login_btn" value="Login" />
				</p>
						
			</form>
			
			
				<p class="errorLog">
<?php
if(isset($_POST['login_btn']))
{
	echo $error->getMessage();
}
?>
				<!-- END ERROR LOG -->
				</p>
	
					<!-- Register -->
					<p class="link"><a href="register.php">New? Register yourself in a second, 100% free!</a></p>
					
					<!-- Forgot password -->
					<p class="link"><a href="play.php">forgot password?</a></p>
			
</div>