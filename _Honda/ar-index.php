<?php require_once('includes/ar-header.php'); ?> 

<?php 
		function arabic_w2e($str)
	{
		$arabic_eastern = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩','+');
		$arabic_western = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9','+');
		return str_replace($arabic_western, $arabic_eastern, $str);
	}
?> 

<div>

<!-- Menu Part -->
<div class="m-menubar">
	
	<ul class="lang set-dir">
		<li class="m-btn"><i class="fas fa-phone-alt menu-contact"></i> اتصل بنا </li>
		<li class="change-lang"><a href="index.php">English</a></li>
		<li style="padding-top: 5px;">
			<i class="fas fa-search menu-search"></i>
			<input type="text" placeholder="Search" class="h-search"/>
		</li>
	</ul>
	
	<div id="main">
		<a href="#" class="h-cursor"><img class="m-head" src="images/logo.jpg"/>  </a>
	</div>
	
	<div class="open-close-menu">
		<select class="change-country set-dir">
			<option>المملكة العربية السعودية</option>
			<option>المملكة العربية السعودية</option>
			<option>المملكة العربية السعودية</option>
		</select>
		<button class="open-menu" onclick="openMenu()"><i class="fas fa-bars" id="for-icon-change" ></i></button>
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
	
	
</div>
<!-- Dropdown Menu Part -->
<div class="menu-modal" id="for-display-menu">
	<div class="f-dropdown-menu"> 
	<div class="h-dropdown-menu set-dir">
	
		<!-- Dropdown Menu Part 1 -->
		<div class="dropdown-part" >
			<ul class="left-menu ar-font text-right" >
				<li>منتجاتنا</li>
				<li>نبذه عنا</li>
				<li>الأمن والسلامة</li>
				<li>تكنولوجيا</li>
				<li>الصيانة والضمان</li>
				<li>عن الوكيل</li>
			</ul>
			<ul class="left-small-menu ar-font text-right">
				<li>هوندا حول العالم</li>
				<li>العروض والإعلانات الترويجية</li>
				<li>جدار التواصل الإجتماعي</li>
				<li>المركز الإعلامي</li>
			</ul>
		</div>
		
		<!-- Dropdown Menu Part 2 -->
		<div class="dropdown-part ar-font">
			<ul class="left-middle-menu">
				<li class="h-cursor text-right" style="padding-top: 0;">  سيارات <i class="fas fa-long-arrow-alt-left"></i></li>
				<li class="h-cursor text-right"> <i class="fas fa-long-arrow-alt-left"></i> دراجات نارية </li>
				<li class="h-cursor text-right"> <i class="fas fa-long-arrow-alt-left"></i> منتجــات طاقة</li>
				<li class="h-cursor text-right" style="border-bottom: none;"> <i class="fas fa-long-arrow-alt-left"></i> الملاحة </li>
			</ul>
		</div>
		
		<!-- Dropdown Menu Part 3 -->
		<div class="dropdown-part ar-font text-right">
			<h4 class="subheader">الدولـــة</h4>
			<label class="gray">المدينــة </label><select class="select-option gray"><option>السعودية</option></select><br/>
			<label class="gray">اللــغة &nbsp; &nbsp;</label><select class="select-option gray"><option>العربية</option></select><br/>
			<button class="pro-btn h-cursor">تــقدم <i class="fas fa-long-arrow-alt-left" style="padding-right: 15px;"></i></button>
			<p class="subheader" style="padding-bottom: 0px;">تــواصل معنا</p>
			<ul class="git-menu">
				<li><i class="fas fa-phone-alt get-in-touch" style="margin-left: 15px;"></i><?php echo   arabic_w2e("96600000000+")  ?></li>
				<li><i class="far fa-envelope get-in-touch" style="margin-left: 15px;"></i> info@honda.com.sa </li>
			</ul>
			</div>
		
		<!-- Dropdown Menu Part 4 -->
		<div class="dropdown-part text-right ar-font" style="border-left: none;">
			<h4 class="subheader">تـــابعنا</h4>
			<ul class="social-ul">
				<li class="h-cursor"><i class="fab fa-facebook-f social-media" style="padding-left: 37px;"></i> فيــسبوك</li>
				<li class="h-cursor"><i class="fab fa-instagram social-media" style="padding-left: 13px;"><span class="small-line">__</span></i> إنســتجرام</li>
				<li class="h-cursor"><i class="fab fa-youtube social-media"></i> يوتـــيوب</li>
			</ul>
		</div>
		
	</div>
	</div>
</div>

<!-- Big image Part -->
<div class="head-mid set-dir">
	<h3>اتصل بنا</h3>
	<img src="images/background.jpg" class="head-m-image"/>
</div>

<!-- Form Part -->
<div class="contact-body">

	<h2 class="set-dir ar-font">نمـــوذج الاستــفســـار / التعليـــقات</h2>
	<p class="form-p set-dir ar-font">فضلا قم بتعبئة النموذج أدناه، وسيقوم أحد موظفي هوندا المختصين بتلبية احتياجاتك. </p>
	
	<form method="post" action="contactaction.php?lang=ar">
	<div class="contact-form"> 
		<select class="form-element set-dir" name="category">
			<option> الفئـــة *</option>
			<option value="1">السيـــارات</option>
			<option value="2">الدرجـــات النارية</option>
			<option value="3">البحريــــة</option>
			<option value="4">منتجـــات الطاقــة</option>
		</select>
		<input type="text" name="fullname" placeholder="الاسم الكامل *" class="form-element set-dir" required/><br/>
		<input type="text" name="phone" placeholder="<?php echo arabic_w2e("9660000000+") ?> *" class="form-element set-dir" required/>
		<input type="email" name="email" placeholder="البريد الإلكترونــي *" class="form-element set-dir" required/><br/>
		<textarea rows="4" name="comment" class="form-comment set-dir">التعليقــــات</textarea>
		
		<?php 
			if(!empty($_COOKIE["Error"])){
				if( $_COOKIE["Error"] == 1 ){ // No Message Written
				
					echo '<p class="message danger ar-font text-right">برجاء ضع رسالتك قبل الإرسال</p>';
					
				}else if( $_COOKIE["Error"] == 2 ){ // Thank You
				
					echo '<p class="message ar-font text-right">شكرا لك</p>';
					
				}else if( $_COOKIE["Error"] == 3 || $_COOKIE["Error"] == 4){ // Error Sending mail || Data not complete
				
					echo '<p class="message danger ar-font text-right">برجاء ملء جميع الخانات</p>';
					
				} 
			}
			
		?>
		
		
	
	
	</div>
	<button class="h-cursor set-dir"><i class="far fa-file-alt" ></i> إرســـال <i class="fas fa-long-arrow-alt-left" style="padding-right: 20px;"></i></button>
	</form>
</div>

</div>


<?php require_once('includes/footer.php'); ?>  