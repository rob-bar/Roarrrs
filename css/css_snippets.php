<!-- ================ -->
<!-- = CSS SNIPPETS = -->
<!-- ================ -->

//***		css_fontface_embed		***//
trigger:
css->TAB
output:
@font-face {
    font-family: '${1:name}';
    src: url('${2:path_filename}.eot');
    src: url('${2:path_filename}.eot?iefix') format('eot'),
         url('${2:path_filename}.woff') format('woff'),
         url('${2:path_filename}.ttf') format('truetype'),
         url('${2:path_filename}.svg#webfonthRGH7EPV') format('svg');
    font-weight: normal;
    font-style: normal;
}

description:
Snippet that embeds a font in css
//***		css_fontface_embed END		***//
//--------------------------------------------------------//


//***		css_media_query		***//
trigger:
css->TAB
output:
@media ${1:device} and ($(2:contitions)) {
	.${3:lessclassorothercss};
}
description:
Snippet that generates a media query
//***		css_media_query END		***//
//--------------------------------------------------------//


//***		css_quick_boiler		***//
trigger:
css->TAB
output:
/* =========== */
/* = General = */
/* =========== */
p,form,img,h1,h2,h3,h4,h5,h6,ul,ol,li,html,body,input,button,textarea {
margin: 0;
padding: 0;
}
.hide {
left: -10000px;
position: absolute;
}
a,input,textarea,button {
outline: none;
}
a img {
border: none;
}
html {
height: 100%;
}
body {
background-color: #000000;
font-family: Arial,Helvetica,sans-serif;
height: 100%;
}
cufon {
text-indent: 0!important;
}
$1
description:
Snippet that generates quick boiler code
//***		css_quick_boiler END		***//
//--------------------------------------------------------//