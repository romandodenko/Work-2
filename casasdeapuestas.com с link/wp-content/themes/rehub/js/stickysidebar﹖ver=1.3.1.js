/*!
* Theia Sticky Sidebar v1.3.0
* https://github.com/WeCodePixels/theia-sticky-sidebar
*
* Glues your website's sidebars, making them permanently visible while scrolling.
*
* Copyright 2013-2014 WeCodePixels and other contributors
* Released under the MIT license
*/(function($){$.fn.theiaStickySidebar=function(options){var defaults={'containerSelector':'','additionalMarginTop':0,'additionalMarginBottom':0,'updateSidebarHeight':true,'minWidth':0,'sidebarBehavior':'modern'};options=$.extend(defaults,options);options.additionalMarginTop=parseInt(options.additionalMarginTop)||0;options.additionalMarginBottom=parseInt(options.additionalMarginBottom)||0;tryInitOrHookIntoEvents(options,this);function tryInitOrHookIntoEvents(options,$that){var success=tryInit(options,$that);if(!success){console.log('TST: Body width smaller than options.minWidth. Init is delayed.');$(document).scroll(function(options,$that){return function(evt){var success=tryInit(options,$that);if(success){$(this).unbind(evt);}};}(options,$that));$(window).resize(function(options,$that){return function(evt){var success=tryInit(options,$that);if(success){$(this).unbind(evt);}};}(options,$that))}}
function tryInit(options,$that){if(options.initialized===true){return true;}
if($('body').width()<options.minWidth){return false;}
init(options,$that);return true;}
function init(options,$that){options.initialized=true;$that.each(function(){var o={};o.sidebar=$(this);o.options=options||{};o.container=$(o.options.containerSelector);if(o.container.size()==0){o.container=o.sidebar.parent();}
o.sidebar.parents().css('-webkit-transform','none');o.sidebar.css({'position':'relative','overflow':'visible','-webkit-box-sizing':'border-box','-moz-box-sizing':'border-box','box-sizing':'border-box'});if(o.sidebar.hasClass('rh-sticky-container')){o.stickySidebar=o.sidebar.find('.rh-sticky-wrap-column');if(o.stickySidebar.length==0){o.sidebar.find('script').remove();o.stickySidebar=$('<div>').addClass('rh-sticky-wrap-column').append(o.sidebar.children());o.sidebar.append(o.stickySidebar);}}else if(o.sidebar.hasClass('wpb_column')){o.stickySidebar=o.sidebar.find('.vc_column-inner');if(o.stickySidebar.length==0){o.sidebar.find('script').remove();o.stickySidebar=$('<div>').addClass('vc_column-inner').append(o.sidebar.children());o.sidebar.append(o.stickySidebar);}}
o.marginTop=parseInt(o.sidebar.css('margin-top'));o.marginBottom=parseInt(o.sidebar.css('margin-bottom'));o.paddingTop=parseInt(o.sidebar.css('padding-top'));o.paddingBottom=parseInt(o.sidebar.css('padding-bottom'));var collapsedTopHeight=o.stickySidebar.offset().top;var collapsedBottomHeight=o.stickySidebar.outerHeight();o.stickySidebar.css('padding-top',1);o.stickySidebar.css('padding-bottom',1);collapsedTopHeight-=o.stickySidebar.offset().top;collapsedBottomHeight=o.stickySidebar.outerHeight()-collapsedBottomHeight-collapsedTopHeight;if(collapsedTopHeight==0){o.stickySidebar.css('padding-top',0);o.stickySidebarPaddingTop=0;}
else{o.stickySidebarPaddingTop=1;}
if(collapsedBottomHeight==0){o.stickySidebar.css('padding-bottom',0);o.stickySidebarPaddingBottom=0;}
else{o.stickySidebarPaddingBottom=1;}
o.previousScrollTop=null;o.fixedScrollTop=0;resetSidebar();o.onScroll=function(o){if(!o.stickySidebar.is(":visible")){return;}
if($('body').width()<o.options.minWidth){resetSidebar();return;}
if(o.sidebar.outerWidth(true)+50>o.container.width()){resetSidebar();return;}
var scrollTop=$(document).scrollTop();var position='static';if(scrollTop>=o.container.offset().top+(o.paddingTop+o.marginTop-o.options.additionalMarginTop)){var offsetTop=o.paddingTop+o.marginTop+options.additionalMarginTop;var offsetBottom=o.paddingBottom+o.marginBottom+options.additionalMarginBottom;var containerTop=o.container.offset().top;var containerBottom=o.container.offset().top+getClearedHeight(o.container);var windowOffsetTop=0+options.additionalMarginTop;var windowOffsetBottom;var sidebarSmallerThanWindow=(o.stickySidebar.outerHeight()+offsetTop+offsetBottom)<$(window).height();if(sidebarSmallerThanWindow){windowOffsetBottom=windowOffsetTop+o.stickySidebar.outerHeight();}
else{windowOffsetBottom=$(window).height()-o.marginBottom-o.paddingBottom-options.additionalMarginBottom;}
var staticLimitTop=containerTop-scrollTop+o.paddingTop+o.marginTop;var staticLimitBottom=containerBottom-scrollTop-o.paddingBottom-o.marginBottom;var top=o.stickySidebar.offset().top-scrollTop;var scrollTopDiff=o.previousScrollTop-scrollTop;if(o.stickySidebar.css('position')=='fixed'){if(o.options.sidebarBehavior=='modern'){top+=scrollTopDiff;}}
if(o.options.sidebarBehavior=='legacy'){top=windowOffsetBottom-o.stickySidebar.outerHeight();top=Math.max(top,windowOffsetBottom-o.stickySidebar.outerHeight());}
if(scrollTopDiff>0){top=Math.min(top,windowOffsetTop);}
else{top=Math.max(top,windowOffsetBottom-o.stickySidebar.outerHeight());}
top=Math.max(top,staticLimitTop);top=Math.min(top,staticLimitBottom-o.stickySidebar.outerHeight());var sidebarSameHeightAsContainer=o.container.height()==o.stickySidebar.outerHeight();if(!sidebarSameHeightAsContainer&&top==windowOffsetTop){position='fixed';}
else if(!sidebarSameHeightAsContainer&&top==windowOffsetBottom-o.stickySidebar.outerHeight()){position='fixed';}
else if(scrollTop+top-o.sidebar.offset().top-o.paddingTop<=options.additionalMarginTop){position='static';}
else{position='absolute';}}
if(position=='fixed'){o.stickySidebar.css({'position':'fixed','width':o.sidebar.width(),'top':top,'left':o.sidebar.offset().left+parseInt(o.sidebar.css('padding-left'))});}
else if(position=='absolute'){var css={};if(o.stickySidebar.css('position')!='absolute'){css.position='absolute';css.top=scrollTop+top-o.sidebar.offset().top-o.stickySidebarPaddingTop-o.stickySidebarPaddingBottom;}
css.width=o.sidebar.width();css.left='';o.stickySidebar.css(css);}
else if(position=='static'){resetSidebar();}
if(position!='static'){if(o.options.updateSidebarHeight==true){o.sidebar.css({'min-height':o.stickySidebar.outerHeight()+o.stickySidebar.offset().top-o.sidebar.offset().top+o.paddingBottom});}}
o.previousScrollTop=scrollTop;};o.onScroll(o);$(document).scroll(function(o){return function(){o.onScroll(o);};}(o));$(window).resize(function(o){return function(){o.stickySidebar.css({'position':'static'});o.onScroll(o);};}(o));function resetSidebar(){o.fixedScrollTop=0;o.sidebar.css({'min-height':'1px'});o.stickySidebar.css({'position':'static','width':''});}
function getClearedHeight(e){var height=e.height();e.children().each(function(){height=Math.max(height,$(this).height());});return height;}});}}})(jQuery);jQuery(document).on("load",function($){var additionalmarginforstickysidebar=(jQuery('.re-stickyheader').length>0)?jQuery('.re-stickyheader').height()+30:30;if(jQuery('.rh-float-panel').length>0){additionalmarginforstickysidebar=jQuery('.rh-float-panel').height()+30;}
if(jQuery('.stickyonfloatpanel').length>0){additionalmarginforstickysidebar=jQuery('.rh-float-panel').height();}
jQuery('.stickysidebar-container > .wpb_column').theiaStickySidebar({additionalMarginTop:additionalmarginforstickysidebar,additionalMarginBottom:30,});jQuery('.rh-stickysidebar-wrapper > .rh-sticky-container').theiaStickySidebar({additionalMarginTop:additionalmarginforstickysidebar,additionalMarginBottom:30,});});