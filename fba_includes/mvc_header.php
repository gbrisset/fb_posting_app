


<!-- MVC HEADER - MVC HEADER - MVC HEADER - MVC HEADER - MVC HEADER - MVC HEADER - MVC HEADER -  -->  

<header class="zx_container zx_header zx_bg_purple  "  > 

	<ul class="zx_navbar ">
		<li class="zx_navbar zx_align_right"><a id="navbar_closer"  onclick="$('#navbar_mobile').slideUp( 600 );" style="line-height: 1;" href="#" >&nbsp;&times;&nbsp;</a></li>
		
			<?php 
			foreach ($navbar_items as $list_item) {
				
				echo "<li class=\"zx_align_left zx_text_white zx_bg_dark_grey_hover\"><a href=\"" . $list_item['href'] . "\"  target=\"" . $list_item['target'] . "\"  >" . $list_item['label'] . "</a></li>";
			}//end foreach

			 ?>


	</ul>



</header>





