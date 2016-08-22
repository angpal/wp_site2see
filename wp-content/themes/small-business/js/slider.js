/*
 * Basic jQuery Slider plug-in v.1.3
 *
 * http://www.basic-slider.com
 *
 * Authored by John Cobb
 * http://www.johncobb.name
 * @john0514
 *
 * Copyright 2011, John Cobb
 * License: GNU General Public License, version 3 (GPL-3.0)
 * http://www.opensource.org/licenses/gpl-3.0.html
 *
 */
(function(a){a.fn.bjqs=function(b){var c={},d={width:700,height:300,animation:"fade",animationDuration:450,automatic:true,rotationSpeed:4e3,hoverPause:true,showControls:true,centerControls:true,nextText:"Next",prevText:"Prev",showMarkers:true,centerMarkers:true,keyboardNav:true,useCaptions:true},e=this,f=e.find(".bjqs"),g=f.children("li"),h=g.length,i=false,j=false,k=0,l=1,m=0,n=g.eq(k),o="forward",p="backward";c=a.extend({},d,b);g.css({height:c.height,width:c.width});f.css({height:c.height,width:c.width});e.css({height:c.height,width:c.width});g.addClass("bjqs-slide");if(c.showControls&&h>1){var q=a('<ul class="bjqs-controls"></ul>'),r=a('<li><a href="#" class="bjqs-next" class="controls">'+c.nextText+"</a></li>"),s=a('<li><a href="#" class="bjqs-prev" class="controls">'+c.prevText+"</a></li>");r.click(function(a){a.preventDefault();if(!i){A(o,false)}});s.click(function(a){a.preventDefault();if(!i){A(p,false)}});r.appendTo(q);s.appendTo(q);q.appendTo(e);if(c.centerControls){var t=r.children("a"),u=(e.height()-t.height())/2;r.children("a").css("top",u).show();s.children("a").css("top",u).show()}}if(c.showMarkers&&h>1){var v=a('<ol class="bjqs-markers"></ol>'),w,x,u;a.each(g,function(b,d){if(c.animType==="slide"){if(b!==0&&b!==h-1){w=a('<li><a href="#">'+b+"</a></li>")}}else{b++;w=a('<li><a href="#">'+b+"</a></li>")}w.click(function(c){c.preventDefault();if(!a(this).hasClass("active-marker")&&!i){A(false,b)}});w.appendTo(v)});x=v.children("li");x.eq(k).addClass("active-marker");v.appendTo(e);if(c.centerMarkers){u=(c.width-v.width())/2;v.css("left",u)}}if(c.keyboardNav&&h>1){a(document).keyup(function(a){if(!j){clearInterval(z);j=true}if(!i){if(a.keyCode===39){a.preventDefault();A(o,false)}else if(a.keyCode===37){a.preventDefault();A(p,false)}}if(j&c.automatic){z=setInterval(function(){A(o)},c.rotationSpeed);j=false}})}if(c.useCaptions){a.each(g,function(b,c){var d=a(c);var e=d.children("img:first-child");var f=e.attr("title");if(f){var g=a('<p class="bjqs-caption">'+f+"</p>");g.appendTo(d)}})}if(c.hoverPause&&c.automatic){e.hover(function(){if(!j){clearInterval(z);j=true}},function(){if(j){z=setInterval(function(){A(o)},c.rotationSpeed);j=false}})}if(c.animation==="slide"&&h>1){jQueryfirst=g.eq(0);jQuerylast=g.eq(h-1);jQueryfirst.clone().addClass("clone").removeClass("slide").appendTo(f);jQuerylast.clone().addClass("clone").removeClass("slide").prependTo(f);g=f.children("li");h=g.length;jQuerywrapper=a('<div class="bjqs-wrapper"></div>').css({width:c.width,height:c.height,overflow:"hidden",position:"relative"});f.css({width:c.width*h,left:-c.width});g.css({"float":"left",position:"relative",display:"list-item"});jQuerywrapper.prependTo(e);f.appendTo(jQuerywrapper)}var y=function(a){if(c.animation==="fade"){if(a===o){!n.next().length?m=0:m++}else if(a===p){!n.prev().length?m=h-1:m--}}if(c.animation==="slide"){if(a===o){m=l+1}if(a===p){m=l-1}}return m};if(c.automatic&&h>1){var z=setInterval(function(){A(o,false)},c.rotationSpeed)}g.eq(k).show();f.show();var A=function(a,b){if(!i){if(a){m=y(a)}else if(b&&c.animation==="fade"){m=b-1}else{m=b}i=true;if(c.animation==="fade"){if(c.showMarkers){x.eq(k).removeClass("active-marker");x.eq(m).addClass("active-marker")}r=g.eq(m);n.fadeOut(c.animationDuration);r.fadeIn(c.animationDuration,function(){n.hide();k=m;n=r;i=false})}else if(c.animation==="slide"){if(c.showMarkers){x.eq(l-1).removeClass("active-marker");if(m===h-1){x.eq(0).addClass("active-marker")}else if(m===0){x.eq(h-3).addClass("active-marker")}else{x.eq(m-1).addClass("active-marker")}}f.animate({left:-m*c.width},c.animationDuration,function(){if(m===0){l=h-2;f.css({left:-l*c.width})}else if(m===h-1){l=1;f.css({left:-c.width})}else{l=m}i=false})}}};return this}})(jQuery)

jQuery(document).ready(function(){
jQuery('#slideshow').bjqs({
// Width + Height used to ensure consistency
'width': 930,
'height': 354,
// The type of animation (accespts slide or fade)
'animation': 'slide',
// The duration in ms of the transition between slides
'animationDuration': 450,
// Automatically rotate through the slides
'automatic': true,
// Delay in ms between auto rotation of the slides
'rotationSpeed': 4000,
// Pause the slider when any elements receive a hover event
'hoverPause': true,
// Show the manual slider controls
'showControls': true,
// Center the controls vertically
'centerControls': true,
// Text to display in next/prev buttons (can accept html)
'nextText': 'Next',
'prevText': 'Prev',
// Show positional markers
'showMarkers': true,
// Center the positional indicators
'centerMarkers': true,
// Allow navigation with arrow keys
'keyboardNav': true,
// Use image title text as caption
'useCaptions': true
});
});

