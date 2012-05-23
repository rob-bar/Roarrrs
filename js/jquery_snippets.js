// 
//  jquery_snippets.js
//  Snippetbasket
//  
//  Created by Robbie on 2012-02-27.
//  Copyright 2012 __MyCompanyName__. All rights reserved.
// 

// ===================
// = JQUERY SNIPPETS =
// ===================

/*
	shortcuts summary:
	jq->TAB		=		All general jquery core functionality
	jqsel->TAB	=		All jquery selectors functionality
	jqatt->TAB	=		All jquery attributes functionality
	jqtra->TAB	=		All jquery traversing functionality
	jqman->TAB	=		All jquery manipulation functionality
	jqcss->TAB	=		All jquery css functionality
	jqe->TAB	=		All jquery events functionality
	jqeff->TAB 	=		All jquery effects functionality
	jqaj->TAB	=		All jquery ajax functionality
	jqut->TAB	=		All jquery util functionality
	jqcb->TAB	=		All jquery callback functionality
	jqda->TAB	=		All jquery data functionality
	jqmi->TAB	=		All jquery misc functionality
	jqdef->TAB	=		All jquery deferred object functionality
*/

// ==========
// = jq->TAB =
// ==========

// ==============
// = jqsel->TAB =
// ==============

// ==============
// = jqatt->TAB =
// ==============

// ==============
// = jqtra->TAB =
// ==============

// ==============
// = jqman->TAB =
// ==============

// ==============
// = jqcss->TAB =
// ==============

// ============
// = jqe->TAB =
// ============

// ==============
// = jqeff->TAB =
// ==============
//***		animate_full	***//
trigger:
jqeff->TAB
output:
${8:/*
swing, easeInQuad, easeOutQuad, easeInOutQuad, easeInCubic, easeOutCubic, easeInOutCubic, easeInQuart,
easeOutQuart, easeInOutQuart, easeInQuint, easeOutQuint, easeInOutQuint, easeInSine, easeOutSine, easeInOutSine, 
easeInExpo, easeOutExpo, easeInOutExpo, easeInCirc, easeOutCirc, easeInOutCirc, easeInElastic, easeOutElastic,
easeInOutElastic, easeInBack, easeOutBack, easeInOutBack,easeInBounce, easeOutBounce, easeInOutBounce
*/}
setTimeout(function() {
    $("$1").animate({
        ${2:prop}: ${3:val}
    },
	{
        duration: ${4:700},
        easing: '${5:easeOutExpo}',
		complete: ${6:callback}
    })
},
${7:delay});
description:
Snippet that animates an html object or jquery object with a delay, duration, easing and complete property.
//***		animate_full END		***//
//--------------------------------------------------------//

//***		animate		***//
trigger:
jseff->TAB
output:
.animate({${1:propmap}},{duration: ${2:700},easing: '${3:easeOutExpo}',complete: ${4:callback}})
description:
Snippet that animates an html object or jquery object.
//***		animate END		***//
//--------------------------------------------------------//

// =============
// = jqaj->TAB =
// =============

// =============
// = jqut->TAB =
// =============

// =============
// = jqcb->TAB =
// =============

// =============
// = jqda->TAB =
// =============

// =============
// = jqmi->TAB =
// =============

// ==============
// = jqdef->TAB =
// ==============
