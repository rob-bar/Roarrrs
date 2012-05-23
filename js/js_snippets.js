// 
//  js_snippets.js
//  Snippetbasket
//  
//  Created by Robbie on 2012-02-27.
//  Copyright 2012 __MyCompanyName__. All rights reserved.
// 

// =======================
// = JAVASCRIPT SNIPPETS =
// =======================

/*
	shortcuts summary:
	js->TAB		=		All general functionality
	jsd->TAB	=		All debug functionality
	jsl->TAB	=		All loop functionality
	jse->TAB	=		All Expresion functionality
	jsc->TAB	=		All js canvas functionality
*/


// ===========
// = js->TAB =
// ===========
//***		function		***//
trigger:
js->TAB
output:
function ${1:name}(${2:args}){
	${3://}Debugger.log("$1");
	$4
	${5:return}
}
description:
Snippet that generates a function with optional parrameters optional log system and optional return
//***		function END		***//
//--------------------------------------------------------//

//***		clear_interval		***//
trigger:
js->TAB
output:
clearInterval(${1:intervalId});
description:
Snippet that removes a running js interval 
//***		clear_interval END		***//
//--------------------------------------------------------//

//***		load_image		***//
trigger:
js->TAB
output:
var ${1:img} = new Image();
$1.addEventListener("load", ${3:evtfunc}, false);
$1.src = "${2:source}";
description:
Snippet that loads an images.
//***		load_image END		***//
//--------------------------------------------------------//

//***		prototype_function		***//
trigger:
js->TAB
output:
${1:Classname}.prototype.${2:functionName} = function(${3:parrams}){
	$4;
}
description:
Snippet that generates a class prototype function
//***		prototype_function END		***//
//--------------------------------------------------------//

//***		setter		***//
trigger:
js->TAB
output:
(${1:prop} === undefined)? this.$1 = ${2:0} : this.$1 = $1;
description:
Snippet that generates a setter statement
//***		setter END		***//
//--------------------------------------------------------//

//***		set_interval		***//
trigger:
js->TAB
output:
setInterval(${1:callBack},${2:1000});  
description:
Snippet that genereates a set Interval statement with a callback that is executed every 1000 milliseconds default.
//***		set_interval END		***//
//--------------------------------------------------------//

//***		set_timeout		***//
trigger:
js->TAB
output:
setTimeout(${1:callBack},${2:1000});  
description:
Snippet that generates s timeout for over 1000 millisecondes.
//***		set_timeout END		***//
//--------------------------------------------------------//



// ============
// = jsd->TAB =
// ============
//***		debug_string		***//
trigger:
jsd->TAB
output:
Debugger.log("${str}");
description:
Snippet that outputs a string via the Debugger class in the browser console.
//***		debug_string END		***//
//--------------------------------------------------------//

//***		debug_value		***//
trigger:
jsd->TAB
output:
Debugger.log("${1:val} => "+$1);
description:
Snippet that ouputs a value via the Debugger Class in the browser console.
//***		debug_value END		***//
//--------------------------------------------------------//

//***		debug_object		***//
trigger:
jsd->TAB
output:
Debugger.obj(${1:obj});
description:
Snippet that outputs an objects values via the Debugger class in the browser console.
//***		debug_object END		***//
//--------------------------------------------------------//

//***		try_catch		***//
trigger:
jsd->TAB
output:
try {
    $1
} catch (${2:exception}) { 
    $3
}
description:
Snippet that catches an exception.
//***		try_catch END		***//
//--------------------------------------------------------//

// ============
// = jsl->TAB =
// ============
//***		for_regular		***//
trigger:
jsl->TAB
output:
for (var ${1:i} = 0; $1 < ${2:max}; $1++) {
    $3;
}
description:
Snippet that generates a general for loop 
//***		for_regular END		***//
//--------------------------------------------------------//

//***		for_downward		***//
trigger:
jsl->TAB
output:
for (var ${1:i} = ${2:max}; $1 >= 0; $1--) {
	$3;
}
description:
Snippet that generates a downwards for loop 
//***		for_downward END		***//
//--------------------------------------------------------//

//***		while		***//
trigger:
jsl->TAB
output:
var ${1:i};
while ($1 $2) {
	$3;
	//differencing
	$1$4;
}
description:
Snippet that generates a general while loop
//***		while END		***//
//--------------------------------------------------------//

//***		for_object		***//
trigger:
jsl->TAB
output:
for (var ${1:parram} in ${2:object}) {
	${3://}Debugger.log("${1:val} => "+$1);
    $4;
}
description:
Snippet that generates a for loop thats runs trough an object
//***		for_object END		***//
//--------------------------------------------------------//


// ============
// = jse->TAB =
// ============
//***		if_oneline		***//
trigger:
jse->TAB
output:
if(${1:expr}) $2;
description:
Snippet that generates an onelined if case
//***		if_oneline END		***//
//--------------------------------------------------------//

//***		if_regular		***//
trigger:
jse->TAB
output:
if (${1:expr}) {
    $2;
}
description:
Snippet that generates a regular if case
//***		if_regular END		***//
//--------------------------------------------------------//

//***		if_else_regular		***//
trigger:
jse->TAB
output:
if (${1:expr}) {
    $2;
} else {
    $3;
}
description:
Snippet that generates a regular if els case
//***		if_else_regular END		***//
//--------------------------------------------------------//

//***		if_elseif_else		***//
trigger:
jse->TAB
output:
if (${1:expr}) {
    $3;
} else if(${2:expr2}) {
    $4;
} else{
	$5;
}
description:
Snippet that genrates a regular if elseif else case
//***		if_elseif_else END		***//
//--------------------------------------------------------//

//***		ifelse_oneline		***//
trigger:
jse->TAB
output:
(${1:expr})?$2:$3;
description:
Snippet that generates a onelined if else case
//***		ifelse_oneline END		***//
//--------------------------------------------------------//

//***		switch_case		***//
trigger:
jse->TAB
output:
switch (${1:expr}) {
    case ${2:case1}:
        $3;
        break;
    case ${3:case2}:
        $4;
        break;
    case ${5:case3}:
        $6;
        break;
    default:
		$7;
        break;
}
description:
Snippet that generates a general switch case statement  
//***		switch_case END		***//
//--------------------------------------------------------//


// ============
// = jsc->TAB =
// ============
//***		canvas_drawline		***//
trigger:
jsc->TAB
output:
context.strokeStyle = "#${1:color}";
context.beginPath();
context.MoveTo(${2:x_1},${3:y_1});
context.lineTo(${4:x_2},${5:y_2});
context.stroke();
context.closePath();
description:
Snippet that draws a line in the canvas object.
//***		canvas_drawline END		***//
//--------------------------------------------------------//

//***		canvas_transformation		***//
trigger:
jsc->TAB
output:
context.save();//saving the stage in the stack
context.setTransform(1,0,0,1,0,0);//resetting identity

//transformations
//context.translate();
//context.rotate();
//context.scale();
$1
context.restore();//pop Up old state
description:
Snippet that generates general code to transform things in canvas
//***		canvas_transformation END		***//
//--------------------------------------------------------//