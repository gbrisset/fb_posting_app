

<!-- MVC PAGE - MVC PAGE - MVC PAGE - MVC PAGE - MVC PAGE - MVC PAGE - MVC PAGE -  -->  

	<br/>

	<div class="zx_grid_row">
		<div class="zx_grid col_16 zx_bg_yellow zx_align_center">
		<h1>TEST PAGE</h1>
		</div>
	</div>
	<div class="zx_grid_row">
		<div class="zx_grid col_2 zx_bg_gray">&nbsp;</div>
		<div class="zx_grid col_12 zx_bg_gray zx_align_center">


<?php 





$fba_app = new Facebook\Facebook([
  'app_id' => $fba_app_id,								//}
  'app_secret' => $fba_app_secret,						//} Set in config
  'default_access_token' => $fba_default_access_token,	//}
  'default_graph_version' => 'v9.0',
  ]);


$fba_request['end_point'] = "https://graph.facebook.com/$fba_lbm_page_id/feed";
// $fba_request['access_token'] = 'XXXXXXXXXXXXXXXXXXXXXXXXXXXX';//  If none is provided, the SDK will assume the value from the default_access_token configuration option if it was set.
$fba_request_params['message'] = 'Hello LBM fan!';
$fba_request_params['link'] = 'https://www.lifebeginnersmanual.com/';

$fba_og_response = $fba_app->post($fba_request['end_point'], $fba_request_params );
/*
https://graph.facebook.com/{page-id}/feed
 
curl -i -X POST "https://graph.facebook.com/$fba_lbm_page_id/feed
  ?message=Hello Fans!
  &access_token={page-access-token}"


*/


// $fba_utilities->better_vardump($fba_request,2);// 0- green; 1-red; 2-grey; 3-yellow   
// $fba_utilities->better_vardump($fba_og_response,0);// 0- green; 1-red; 2-grey; 3-yellow   
// $fba_utilities->better_vardump($fba_app,3);// 0- green; 1-red; 2-grey; 3-yellow   
// exit();



 ?>







		</div>
		<div class="zx_grid col_2 zx_bg_gray">&nbsp;</div>
	</div>
	
	<?php for($xx=0;$xx<2;$xx++){ 
		echo"
	<div class=\"zx_grid_row\">
		<div class=\"zx_grid col_2 zx_bg_gray\">&nbsp;</div>
		<div class=\"zx_grid col_12 zx_bg_gray zx_align_center\">
		hgf gshdfklhsdfgksdfhgl;k fghj sodhg dsohg oudshgouahfgoshgf gshdfklhsdfgksdfhgl;k 
		fghj sodhg dsohg oudshgouahfgoshgf gshdfklhsdfgksdfhgl;k fghj sodhg dsohg oudshgou
		ahfgoshgf gshdfklhsdfgksdfhgl;k fghj sodhg dsohg oudshgouahfgos 
		</div>
		<div class=\"zx_grid col_2 zx_bg_gray\">&nbsp;</div>
	</div>
	"; }// end for($xx=0;$xx=20;$xx++) ?>

		<?php // include "file_upload.php"; ?>


<!-- END OF MVC PAGE - END OF MVC PAGE - END OF MVC PAGE - END OF MVC PAGE - END OF MVC PAGE - END OF MVC PAGE - END OF MVC PAGE -  -->  



