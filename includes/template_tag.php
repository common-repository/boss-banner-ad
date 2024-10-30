<?php
/* template tag : <?php boss_banner('http://cssboss.com/wp-content/uploads/2012/02/cssbosslogo.png','http://www.cssboss.com','newwindow','CSSBoss','300','150'); ?> */
function boss_banner($image,$link,$target,$alt,$width,$height,$nofollow) {
	
	if ( isset( $width )) 		{ $width = 'width="'.$width.'"'; } 		else { $width = ''; }
	if ( isset( $height )) 		{ $height = 'height="'.$height.'"'; } 	else { $height = ''; }
	if ( isset( $nofollow )) 	{ $nofollow = 'rel="'.$nofollow.'"'; } 	else { $nofollow = ''; }
	if ( isset( $target ))		{ $target = 'target="_blank"'; } 		else { $target = ''; }
	if ( isset( $alt )) 		{ $alt = $alt; } 						else { $alt = ''; }

    return '<a href="' . $link . '" ' . $target . $nofollow . '><img src="' . $image . '" alt="' . $alt . '"' . $width . $height . ' /></a>';
}
?>