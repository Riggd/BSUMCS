//DivPeek - Custom jQuery CSS3 Animation Trigger Script by David Halford
//(see https://github.com/davidhalford/DivPeek)
//===============================================================================
//CONFIG: 
var elementsToTrack = [".bg-venues",".bg-venues1",".bg-venues2"];

var pixelOffset = -50;
var inClassName = "inViewPort";
var outClassName = "outViewPort";
//===============================================================================
jQuery.fn.exists=function(){return this.length>0;}
var viewPortHeight=$(window).height();var scrollFromTop=$(window).scrollTop();var scrollFromBottom=(parseInt(scrollFromTop)+parseInt(viewPortHeight));function recalcVars(){viewPortHeight=$(window).height();scrollFromTop=$(window).scrollTop();scrollFromBottom=(parseInt(scrollFromTop)+parseInt(viewPortHeight));for(var i=0;i<elementsToTrack.length;i++){if($(elementsToTrack[i]).exists()){$(elementsToTrack[i]).each(function () {checkInViewport(scrollFromBottom, this);})}}}
$(window).resize(function(e){recalcVars();});document.addEventListener("touchmove",ScrollStart,false);document.addEventListener("scroll",Scroll,false);function ScrollStart(){recalcVars();}
function Scroll(){recalcVars();}
function checkInViewport(scrollBottom,domElement){var elementPos=$(domElement).offset().top;if((parseInt(scrollBottom)+parseInt(pixelOffset))>elementPos){$(domElement).addClass(inClassName).removeClass(outClassName);$(domElement).trigger(inClassName);}else{$(domElement).removeClass(inClassName).addClass(outClassName);$(domElement).trigger(outClassName);}}