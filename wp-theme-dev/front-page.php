<?php get_header();?>
<!-- content -->
<div id="content">
	<div class="container">
		<div class="wrapper">
			<div class="aside">
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
			</div>
			<div class="mainContent">
				<div class="article">
					<h2>Welcome<em>To our Architect website page</em></h2>
					<p><strong class="txt1">Healthy Building</strong> is a free web template created by TemplateMonster.com team. This website template is optimized for 1024X768 screen resolution.</p> 
					<div class="img-box">
						<img src="<?php echo get_template_directory_uri();?>/images/img1.jpg" alt="" />
						This website template can be delivered in two packages - with PSD source files included and without them. If you need PSD source files, please go to the template download page at TemplateMonster to leave the e-mail address that you want the template ZIP package to be delivered to.
					</div>
					This website template has several pages: <a href="index.html">Home</a>, <a href="about.html">About</a>, <a href="projects.html">Projects</a> (with <a href="project.html">Project Page</a>), <a href="contacts.html">Contacts</a> (note that contact us form – doesn’t work), <a href="sitemap.html">Site Map</a>.
				</div>
				<h3>Latest Projects</h3>
				<div class="wrapper">
					<div class="col-1">
						<div class="box1">
							<p><img src="<?php echo get_template_directory_uri();?>/images/img2.jpg" alt="" /></p>
							<h4>Project 1</h4>
							<p class="p1">At vero eos et acmus et iusto odio dignis simos duci mus.</p>
							<div class="wrapper"><a href="#" class="link1"><em><b>Read More</b></em></a></div>
						</div>
					</div>
					<div class="col-2">
						<div class="box1">
							<p><img src="<?php echo get_template_directory_uri();?>/images/img3.jpg" alt="" /></p>
							<h4>Project 2</h4>
							<p class="p1">Nalibero tempore cum soluta nobiest elige ndioptio.</p>
							<div class="wrapper"><a href="#" class="link1"><em><b>Read More</b></em></a></div>
						</div>
					</div>
					<div class="col-3">
						<div class="box1">
							<p><img src="<?php echo get_template_directory_uri();?>/images/img4.jpg" alt="" /></p>
							<h4>Project 3</h4>
							<p class="p1">Temporibus uibusdam et aut officiis debitis aut rerum.</p>
							<div class="wrapper"><a href="#" class="link1"><em><b>Read More</b></em></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>