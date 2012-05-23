// 
//  php_snippets.php
//  PROJECTS
//  
//  Created by Robbie Bardijn on 2012-04-03.
//  Copyright 2012 Robbie Bardijn. All rights reserved.
// 

<!-- ================ -->
<!-- = PHP SNIPPETS = -->
<!-- ================ -->

/*
	shortcuts summary:
	?->TAB		=		All general functionality in html embedded(in view files)
	php->TAB	=		All other functionality in php itself
*/


// ===========
// = ?->TAB =
// ===========

//***		php_tag		***//
trigger:
?->TAB
output:
<?php $1;?>
description:
Snippet that sets a php tag.
//***		php_tag END		***//
//--------------------------------------------------------//

//***		php_tag_echo		***//
trigger:
?->TAB
output:
<?php echo($1);?>
description:
Snippet that sets a php tag with an echo in it
//***		php_tag_echo END		***//
//--------------------------------------------------------//


//***		php_tag_if		***//
trigger:
?->TAB	
output:
<?php if(${1:cond}):?>
	$2
<?php endif;?>
description:
Snippet that sets a php if tag
//***		php_tag_if END		***//
//--------------------------------------------------------//

//***		php_tag_if_else		***//
trigger:
?->TAB
output:
<?php if(${1:cond}):?>
	$2
<?php else:?>
	$3
<?php endif;?>
description:
Snippet that sets a php if else tag
//***		php_tag_if_else END		***//
//--------------------------------------------------------//

//***		php_tag_if_else_if		***//
trigger:
?->TAB
output:
<?php if(${1:cond}):?>
	$3
<?php elseif(${2:cond}):?>
	$4
<?php else:?>
	$5
<?php endif;?>
description:
Snippet that sets a php tag with a if else if structure
//***		php_tag_if_else_if END	***//
//--------------------------------------------------------//

//***		php_tag_foreach		***//
trigger:
?->TAB
output:
<?php foreach (${1:array} as ${2:obj}): ?>
	$3;
<?php endforeach; ?>
description:
Snippet that sets a php tag with a for each structure
//***		php_tag_foreach END		***//
//--------------------------------------------------------//


//***		php_tag_for		***//
trigger:
?->TAB
output:
<?php for (${1:i}=0;$1<${2:max};$1++}): ?>
	$3;
<?php endfor; ?>
description:
Snippet that 
//***		php_tag_for END		***//
//--------------------------------------------------------//