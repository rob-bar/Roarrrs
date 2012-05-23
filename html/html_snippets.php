// 
//  html_snippets.php
//  PROJECTS
//  
//  Created by Robbie Bardijn on 2012-04-03.
//  Copyright 2012 Robbie Bardijn. All rights reserved.
// 

<!-- ================= -->
<!-- = HTML SNIPPETS = -->
<!-- ================= -->

//***		canvasTag		***//
trigger:
tag->TAB
output:
<canvas id="${1:canvas}" width="${2:width}" height="${3:height}">
	Your Browser does not support HTML5 Canvas.
</canvas>
description:
Snippet that  renders a canvas tag with optional id width and height parrams
//***		canvasTag END		***//
//--------------------------------------------------------//

//***		anchorTag		***//
trigger:
tag->TAB
output:
<a href="${1:url}" $2 >${3:text}</a>
description:
Snippet that renders an anchor tag with href and optional parrameters and text
//***		anchorTag END		***//
//--------------------------------------------------------//
