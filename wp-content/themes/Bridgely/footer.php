</div>

<footer class="relative block py-16 text-center border-t border-solid border-white bg-primary_gray">
  <div class="relative max-w-1210 mx-auto x840:flex flex-col x840:items-center px-5 py-0">
    
    <div class="mb-8">
      <a href="<?php echo get_option('siteurl'); ?>" id="footer-logo">
        <img src="<?php bloginfo('template_directory'); ?>/library/images/main-logo.svg" alt="Dream Centers" class="w-[175px] h-auto">
      </a>
    </div>
    
    <div class="mb-14 text-whites flex text-white justify-center flex-row ">
      <?php wp_nav_menu(array(
        'theme_location' => 'footer-nav',
        'container' => '',
        'menu_class' => 'flex text-white justify-center flex-row mx-auto sm:space-x-4 flex-wrap'
      )); ?>
    </div>
    
    <div class="mb-6">
      <?php wp_nav_menu(array(
        'theme_location' => 'social-nav',
        'container' => '',
        'menu_class' => 'flex text-white justify-center space-x-2'
      )); ?>
    </div>
    
    <div class="">
      <p class="mb-0 font-medium text-sm text-white">
        &copy; <?php echo date('Y', time()); ?> Bridgely. All Rights Reserved.
        <span class="mx-2 text-custom_gold">|</span>
        <a href="/privacy/" class="hover:underline">Privacy Policy</a>
        <span class="mx-2 text-custom_gold">|</span>
        <a href="/terms-of-use/" class="hover:underline">Terms of Use</a>
      </p>
    </div>

  </div>
</footer>


<?php /*
<style>
#welcome {
display: none;
position: fixed;
bottom: 0;
width: 100%;
background-color: #fff;
padding: 20px;
z-index: 10;
border-top: 1px #2A426B solid;
}
#welcome p {
	font-size: 16px;
}
#welcome .text-h3 {
	font-size: 22px;
}
.floatright {
	float: right;
}
</style>

<div id="welcome"><div class="text-h3 blue floatright">X</div><div class="text-h3 blue">Welcome to Bridgely</div><p>Bridgely will officially launch in October 2022. As a leader in international development or mission you are invited to an advanced review, consider the declaration, and contact us if you’re interested in learning more. We’re building a coalition of leaders to pioneer a new approach to mission impact.</p>
</div></div>

<script>
function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

function eraseCookie(name) {
	createCookie(name,"",-1);
}


jQuery(document).ready(function() {
	var visited = readCookie('visited');
	if (!visited || visited !== "true") {
		createCookie('visited', "true", 30);
		jQuery('#welcome').show(100);
	}
});

jQuery(".floatright").click(function () {
	jQuery("#welcome").css("display", "none");
});
</script>
*/ ?>

<?php wp_footer(); ?>
</body>
</html>