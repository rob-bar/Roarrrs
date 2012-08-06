// 
//  less_snippets.php
//  Snippetbasket
//  
//  Created by Robbie on 2012-02-27.
//  Copyright 2012 __MyCompanyName__. All rights reserved.
// 

<!-- ================= -->
<!-- = LESS SNIPPETS = -->
<!-- ================= -->

/*
	shortcuts summary:
	less->TAB		=		All pure less functionality
	lesse->TAB		=		All less elements functionality
*/


//***		less_var		***//
trigger:
less->TAB
output:
@${1:name}:${1:value};
description:
Snippet that sets a variable in less
//***		less_var END		***//
//--------------------------------------------------------//


//***		less_mixing		***//
trigger:
less->TAB
output:
.${1:mixname} (${1:parrams}) {
  $3;
}
description:
Snippet that sets a mixing in less
//***		less_mixing END		***//
//--------------------------------------------------------//

<!-- ========================= -->
<!-- = LESS ELEMENT SNIPPETS = -->
<!-- ========================= -->

//***		less_elements_gradient		***//
trigger:
lesse->TAB
output:
.gradient(${1:color}, ${2:start}, ${3:stop});
description:
Snippet that sets a css gradient 
//***		less_elements_gradient END		***//
//--------------------------------------------------------//


//***		less_elements_bw_gradient		***//
trigger:
lesse->TAB
output:
.bw-gradient(${1:color}, ${2:start}, ${3:stop});
description:
Snippet that sets a black and white gradient.
//***		less_elements_bw_gradient END		***//
//--------------------------------------------------------//


//***		less_elements_bordered		***//
trigger:
lesse->TAB	
output:
.bordered(${1:top-color}, ${2:right-color}, ${3:bottom-color}, ${4:left-color});
description:
Snippet that sets border colors
//***		less_elements_bordered END		***//
//--------------------------------------------------------//


//***		less_elements_drop_shadow		***//
trigger:
lesse->TAB
output:
.drop-shadow(${1:x-axis}, ${2:y-axis}, ${3:blur}, ${4:alpha});
description:
Snippet that sets a drop shadow on a box
//***		less_elements_drop_shadow END		***//
//--------------------------------------------------------//


//***		less_elements_rounded_corners		***//
trigger:
lesse->TAB
output:
.rounded(${1:radius});
description:
Snippet that sets rounded corners on a container
//***		less_elements_rounded_corners END		***//
//--------------------------------------------------------//


//***		less_elements_rounded_corners_adv		***//
trigger:
lesse->TAB
output:
.border-radius(${1:topright}, ${2:bottomright}, ${3:bottomleft}, ${4:topleft});
description:
Snippet that sets rounded corners to each corner on a container
//***		less_elements_rounded_corners_adv END		***//
//--------------------------------------------------------//


//***		less_elements_opacity		***//
trigger:
lesse->TAB
output:
.opacity(${1:opacity});
description:
Snippet that sets the opacity of a container
//***		less_elements_opacity  END		***//
//--------------------------------------------------------//


//***		less_elements_transition		***//
trigger:
lesse->TAB
output:
.transition-duration(${1:duration});
description:
Snippet that sets a transition on a container
//***		less_elements_transition END		***//
//--------------------------------------------------------//

//***		less_elements_rotation		***//
trigger:
lesse->TAB
output:
.rotation(${1:deg});
description:
Snippet that sets a rotation 
//***		less_elements_rotation END		***//
//--------------------------------------------------------//


//***		less_elements_scale		***//
trigger:
lesse->TAB
output:
.scale(${1:ratio});
description:
Snippet that sets a scale to a container
//***		less_elements_scale END		***//
//--------------------------------------------------------//


//***		less_elements_transition_ease		***//
trigger:
lesse->TAB
output:
.transition(${1:duration}, ${2:ease});
description:
Snippet that sets a transition on a container
//***		less_elements_transition_ease END		***//
//--------------------------------------------------------//


//***		less_elements_inner_shadow		***//
trigger:
lesse->TAB	
output:
.inner-shadow(${1:horizontal}, ${2:vertical}, ${3:blur}, ${4:alpha});
description:
Snippet that sets a inner shadow on a container
//***		less_elements_inner_shadow END		***//
//--------------------------------------------------------//


//***		less_elements_columns		***//
trigger:
lesse->TAB
output:
.columns(${1:colwidth}, ${2:colcount}, ${3:colgap}, ${4:columnRuleColor}, ${5:columnRuleStyle}, ${6:columnRuleWidth});
description:
Snippet that sets a collumn on a container.
//***		less_elements_columns END		***//
//--------------------------------------------------------//


//***		less_template		***//
trigger:
less
output:
/* =========== */
/* = Imports = */
/* =========== */
@import "boilerplate.less";
@import "elements.less";

/* ========= */
/* = Fonts = */
/* ========= */

/* ======================= */
/* = Variables & Mixings = */
/* ======================= */

/* ==================== */
/* = ID specific rules = */
/* ==================== */

/* ===================== */
/* = Less nested rules = */
/* ===================== */

/* ======================= */
/* = LANG specific rules = */
/* ======================= */

/* ============ */
/* = IE FIXES = */
/* ============ */
/*--IE7--*/
.lt-ie8 {
}

/*--IE8--*/
.lt-ie9 {
}
description:
Snippet that generates a default less template
//***		less_template END		***//
//--------------------------------------------------------//