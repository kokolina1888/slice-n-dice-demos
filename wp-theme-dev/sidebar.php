<div class="aside">
<?php if(!dynamic_sidebar('left-sidebar')):?>

	<div class="indent">
		<h3>Categories</h3>
		<ul class="list1">
			<li><a href="#">Sed ut perspiciatis</a></li>
			<li><a href="#">Unde omnisiste</a></li>
			<li><a href="#">Natus errorsit</a></li>
			<li><a href="#">Voluptatem</a></li>
			<li><a href="#">Doloremque lauda</a></li>
			<li><a href="#">Accusantium</a></li>
			<li><a href="#">Totamrem aperiam</a></li>
			<li><a href="#">Eaque ipsa quae</a></li>
			<li><a href="#">Lnventore veritatis</a></li>
			<li><a href="#">Architecto</a></li>
		</ul>		
	</div>
	<!-- .box -->
	<div class="box">
		<h3>Login Form</h3>
		<form action="" id="login-form">
			<fieldset>
				<div class="field"><label for="text">Username:</label><input type="text" class="text" name="text"/></div>
				<div class="field"><label for="text">Password:</label><input type="password" class="password" name="text"/></div>
				<div class="wrapper">
					<input type="submit" value="Log In" class="submit fleft" />
					<div class="fright"><input type="checkbox" name="checkbox" id="checkbox" /><label for="checkbox">Remember</label></div>
				</div>
			</fieldset>
		</form>
	</div>
	<!-- /.box -->
	<?php 
endif;
?>
</div>
