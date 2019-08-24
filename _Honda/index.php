<?php require_once('includes/header.php'); ?> 

<div>

<!-- Menu Part -->
<div class="m-menubar">
	<div class="open-close-menu">
		<button class="open-menu" onclick="openMenu()"><i class="fas fa-bars" id="for-icon-change" ></i></button>
		<select class="change-country">
			<option>SAUDI ARABIA</option>
			<option>SAUDI ARABIA</option>
			<option>SAUDI ARABIA</option>
		</select>
	</div>
	<script>
		// To Display the Menu -----
		function openMenu(){ 
			var element = document.getElementById('for-display-menu').style.display;
			
			if(element == "none"){
				document.getElementById('for-display-menu').style.display = 'block';
				document.getElementById('for-icon-change').className = "fas fa-times h-width";
			}else{
				document.getElementById('for-display-menu').style.display = 'none';
				document.getElementById('for-icon-change').className = "fas fa-bars";
			}
		}
	</script>
	<div id="main">
		<a href="#" class="h-cursor"><img class="m-head" src="images/logo.jpg"/>  </a>
	</div>
	
	<ul class="lang">
		<li class="m-btn"><i class="fas fa-phone-alt menu-contact"></i> Contact Us </li>
		<li class="change-lang"><a href="ar-index.php">العربيه</a></li>
		<li style="padding-top: 5px;">
			<i class="fas fa-search menu-search"></i>
			<input type="text" placeholder="Search" class="h-search"/>
		</li>
	</ul>
	
	
	
	
</div>
<!-- Dropdown Menu Part -->
<div class="menu-modal" id="for-display-menu">
	<div class="f-dropdown-menu"> 
	<div class="h-dropdown-menu">
	
		<!-- Dropdown Menu Part 1 -->
		<div class="dropdown-part" style="border-left: none;">
			<ul class="left-menu">
				<li>our products</li>
				<li>about</li>
				<li>safety</li>
				<li>technology</li>
				<li>service & warranty</li>
				<li>about the dealer</li>
			</ul>
			<ul class="left-small-menu">
				<li>honda worldwide</li>
				<li>offers & promotions</li>
				<li>the social wall</li>
				<li>media center</li>
			</ul>
		</div>
		
		<!-- Dropdown Menu Part 2 -->
		<div class="dropdown-part">
			<ul class="left-middle-menu">
				<li class="h-cursor">Automobiles <i class="fas fa-long-arrow-alt-right"></i></li>
				<li class="h-cursor">Motorcycles <i class="fas fa-long-arrow-alt-right"></i></li>
				<li class="h-cursor">Power Products <i class="fas fa-long-arrow-alt-right"></i></li>
				<li class="h-cursor" style="border-bottom: none;">Marine <i class="fas fa-long-arrow-alt-right"></i></li>
			</ul>
		</div>
		
		<!-- Dropdown Menu Part 3 -->
		<div class="dropdown-part">
			<h4 class="subheader">country</h4>
			<label class="gray">I live in </label><select class="select-option gray"><option>KSA</option></select><br/>
			<label class="gray">I speak </label><select class="select-option gray"><option>English</option></select><br/>
			<button class="pro-btn h-cursor">PROCEED <i class="fas fa-long-arrow-alt-right"></i></button>
			<p class="subheader" style="padding-bottom: 0px;">GET IN TOUCH</p>
			<ul class="git-menu">
				<li><i class="fas fa-phone-alt get-in-touch"></i> +96600000000 </li>
				<li><i class="far fa-envelope get-in-touch"></i> info@honda.com.sa </li>
			</ul>
			</div>
		
		<!-- Dropdown Menu Part 4 -->
		<div class="dropdown-part">
			<h4 class="subheader">follow us</h4>
			<ul class="social-ul">
				<li class="h-cursor"><i class="fab fa-facebook-f social-media" style="padding-right: 37px;"></i> Facebook</li>
				<li class="h-cursor"><i class="fab fa-instagram social-media" style="padding-right: 13px;"><span class="small-line">__</span></i> Insatgram</li>
				<li class="h-cursor"><i class="fab fa-youtube social-media"></i> Youtube</li>
			</ul>
		</div>
		
	</div>
	</div>
</div>

<!-- Big image Part -->
<div class="head-mid">
	<h3>CONTACT US</h3>
	<img src="images/background.jpg" class="head-m-image"/>
</div>

<!-- Form Part -->
<div class="contact-body">

	<h2>ENQUIRY / FEEDBACK FORM</h2>
	<p class="form-p">Please fill in the details below, and one of our dedicated Honda staff will contact you to discuss your requirements </p>
	
	<form method="post" action="contactaction.php?lang=en">
	<div class="contact-form"> 
		<select class="form-element" name="category">
			<option>Category *</option>
			<option value="1">Automobile</option>
			<option value="2">MotorCycle</option>
			<option value="3">Marine</option>
			<option value="4">Power Product</option>
		</select>
		<input type="text" name="fullname" placeholder="Full Name *" class="form-element" required/><br/>
		<input type="text" name="phone" placeholder="+96600000000 *" class="form-element" required/>
		<input type="email" name="email" placeholder="Email *" class="form-element" required/><br/>
		<textarea rows="4" name="comment" class="form-comment">Comment</textarea>
		
		<?php 
			if(!empty($_COOKIE["Error"])){
				if( $_COOKIE["Error"] == 1 ){ // No Message Written
				
					echo '<p class="message danger">Please set your message before sending</p>';
					
				}else if( $_COOKIE["Error"] == 2 ){ // Thank You
				
					echo '<p class="message">Thank You</p>';
					
				}else if( $_COOKIE["Error"] == 3 || $_COOKIE["Error"] == 4){ // Error Sending mail || Data not complete
				
					echo '<p class="message danger">Please Fill All the Fields Correctly</p>';
					
				} 
			}
			
		?>
		
		
	
	
	</div>
	<button class="h-cursor"><i class="far fa-file-alt"></i> SUBMIT <i class="fas fa-long-arrow-alt-right"></i></button>
	</form>
</div>

</div>

 
<?php require_once('includes/footer.php'); ?>  