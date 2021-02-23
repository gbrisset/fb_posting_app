

<!-- MVC PAGE - MVC PAGE - MVC PAGE - MVC PAGE - MVC PAGE - MVC PAGE - MVC PAGE -  -->  

	<br/>

	<div class="zx_grid_row">
		<div class="zx_grid col_16 zx_bg_amber zx_align_center">
		<h1>LOGIN</h1>
		</div>
	</div>
	<div class="zx_grid_row">
		<div class="zx_grid col_2 zx_bg_gray">&nbsp;</div>
		<div class="zx_grid col_12 zx_bg_gray zx_align_center">


<?php 

# login.php
// $fba_app is initiated in index.php

$helper = $fba_app->getRedirectLoginHelper();
$permissions = ['email', 'user_likes']; // optional
$loginUrl = $helper->getLoginUrl('https://lifebeginnersmanual.com/fba_app/test', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';


// $fba_utilities->better_vardump($fba_request,2);// 0- green; 1-red; 2-grey; 3-yellow   
// $fba_utilities->better_vardump($fba_og_response,0);// 0- green; 1-red; 2-grey; 3-yellow   
// $fba_utilities->better_vardump($fba_app,3);// 0- green; 1-red; 2-grey; 3-yellow   
// exit();



 ?>







		</div>
		<div class="zx_grid col_2 zx_bg_gray">&nbsp;</div>
	</div>

<!-- END OF MVC PAGE - END OF MVC PAGE - END OF MVC PAGE - END OF MVC PAGE - END OF MVC PAGE - END OF MVC PAGE - END OF MVC PAGE -  -->  



