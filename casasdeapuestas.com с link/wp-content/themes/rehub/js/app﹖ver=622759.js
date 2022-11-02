const copyToClipboard=str=>{if(navigator&&navigator.clipboard&&navigator.clipboard.writeText)
return navigator.clipboard.writeText(str);return Promise.reject('The Clipboard API is not available.');};window.addEventListener('load',function load()
{window.removeEventListener('load',load,false);document.body.classList.remove('preload');try{let anchors=document.querySelectorAll('span[data-lnk], div[data-lnk], button[data-lnk]');if(anchors&&anchors.length>0){for(let i=0;i<anchors.length;i++){let anchor=anchors[i];anchor.addEventListener("click",function(event){if(typeof event.target!=='undefined'&&event.target!==undefined&&event.target.localName!="a"){let anchor=(event.target||event.srcElement);let url=this.getAttribute("data-lnk");if(url!=null&&typeof url!=='undefined'&&url!==undefined){let target=anchor.getAttribute('data-lnk-opn');if(typeof target!=='undefined'&&target!==false&&target=="1"){window.open(atob(url),'_blank')}else{window.location.href=atob(url)}}}},false);}}}catch(error){console.error(error)}
try{let buttons=document.querySelectorAll('span.read_full[data-details-id]');if(buttons&&buttons.length>0){for(let i=0;i<buttons.length;i++){let btn=buttons[i];btn.addEventListener("click",function(event){let id=this.getAttribute("data-details-id");let panel=document.querySelector("[data-review='"+id+"']");panel.classList.toggle("visible");let status=this.closest("li").getAttribute("aria-expanded");if(!status||status=="false"){status=true;}else{status=false;}
this.closest("li").setAttribute("aria-expanded",status);},false);}}}catch(error){console.error(error)}},false);try{var ageDialog=document.getElementById("age-verification");if(typeof(ageDialog)!='undefined'&&ageDialog!=null){let ageConsent=localStorage.getItem("age-consent");if(ageConsent==null||!ageConsent||ageConsent!="accepted"){console.log("Age popup displayed");var dialog=document.getElementById("age-verification");dialog.classList.add("active");}else{console.log("Age popup already accepted");}}else{console.log("Age popup disabled");}}catch(Err){console.log("Age popup error: "+Err);}
function reject_age(){document.getElementById("age-restricted").classList.add("active");}
function accept_age(){document.getElementById("age-verification").remove();localStorage.setItem("age-consent","accepted");console.log("Age accepted");}
function loadAnalytics(){console.log("Analytics loaded");(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-NGZZS58');}
class Cookies{cssLoaded=false;constructor(showOnLoad=true){if(showOnLoad){if(!this.isAccepted()){console.log("Cookies not accepted!");this.showBanner();}else{console.log("Cookies accepted");}}}
isAccepted(){return localStorage.getItem("consent");}
removeBanner(){let banner=document.getElementById("cookies-banner");if(banner){banner.remove();}}
showBox(id){try{document.getElementById("cookies-resume").className="";document.getElementById("cookies-3rdparty").className="";document.getElementById("cookies-necessary").className="";}catch(err){}
let el=document.getElementById(id);if(el){el.className="cookies-visible";}}
removeModal(){let box=document.getElementById("cookies-container");if(box){box.remove();}}
showModal(){console.log("Modal shown");this.removeBanner();this.removeModal();if(!this.cssLoaded){var fileref=document.createElement("link");fileref.setAttribute("rel","stylesheet");fileref.setAttribute("type","text/css");fileref.setAttribute("href","/wp-content/themes/rehub/css/cookies.css?v="+Math.random());document.head.appendChild(fileref);this.cssLoaded=true;}
document.body.innerHTML+='<div id="cookies-container"><div id="cookies-modal">\
            <div id="cookies-menu">\
                <span class="cookies-title">Configuración de cookies</span>\
                <button class="cookies-button" onclick="window.cookies.showBox(\'cookies-resume\');"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-3 -2 24 24" width="24" fill="currentColor"><path d="M6 15H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v3h3l3 3v10a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-3zm0-2V7a2 2 0 0 1 2-2h2V2H2v11h4zm8.172-6H8v11h8V8.828L14.172 7z"></path></svg> Resumen de privacidad</button>\
                <button class="cookies-button" onclick="window.cookies.showBox(\'cookies-necessary\');"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" width="24" fill="currentColor"><path d="M20 8.163A2.106 2.106 0 0 0 18.926 10c0 .789.433 1.476 1.074 1.837l-.717 2.406a2.105 2.105 0 0 0-2.218 3.058l-2.062 1.602A2.104 2.104 0 0 0 11.633 20l-3.29-.008a2.104 2.104 0 0 0-3.362-1.094l-2.06-1.615A2.105 2.105 0 0 0 .715 14.24L0 11.825A2.106 2.106 0 0 0 1.051 10C1.051 9.22.63 8.54 0 8.175L.715 5.76a2.105 2.105 0 0 0 2.207-3.043L4.98 1.102A2.104 2.104 0 0 0 8.342.008L11.634 0a2.104 2.104 0 0 0 3.37 1.097l2.06 1.603a2.105 2.105 0 0 0 2.218 3.058L20 8.162zM14.823 3.68c0-.063.002-.125.005-.188l-.08-.062a4.103 4.103 0 0 1-4.308-1.428l-.904.002a4.1 4.1 0 0 1-4.29 1.43l-.095.076A4.108 4.108 0 0 1 2.279 7.6a4.1 4.1 0 0 1 .772 2.399c0 .882-.28 1.715-.772 2.4a4.108 4.108 0 0 1 2.872 4.09l.096.075a4.104 4.104 0 0 1 4.289 1.43l.904.002a4.1 4.1 0 0 1 4.307-1.428l.08-.062A4.108 4.108 0 0 1 17.7 12.4a4.102 4.102 0 0 1-.773-2.4c0-.882.281-1.716.773-2.4a4.108 4.108 0 0 1-2.876-3.919zM10 14a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"></path></svg> Necesarias</button>\
                <button class="cookies-button" onclick="window.cookies.showBox(\'cookies-3rdparty\');"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" width="24" fill="currentColor"><path d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0 2C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10z"></path><path d="M10 18c.448 0 1.119-.568 1.747-1.823C12.532 14.607 13 12.392 13 10c0-2.392-.468-4.607-1.253-6.177C11.119 2.568 10.447 2 10 2c-.448 0-1.119.568-1.747 1.823C7.468 5.393 7 7.608 7 10c0 2.392.468 4.607 1.253 6.177C8.881 17.432 9.553 18 10 18zm0 2c-2.761 0-5-4.477-5-10S7.239 0 10 0s5 4.477 5 10-2.239 10-5 10z"></path><path d="M2 12h16v2H2v-2zm0-6h16v2H2V6z"></path></svg> Terceros</button>\
            </div>\
            <div id="cookies-content">\
                <svg onclick="cookies.closeModal()" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>\
                <div id="cookies-resume" class="cookies-visible">\
                    <span class="cookies-title">Resumen de privacidad</span>\
                    <p>Esta web utiliza cookies para que podamos ofrecerte la mejor experiencia de usuario posible. La información de las cookies se almacena en tu navegador y realiza funciones tales como reconocerte cuando vuelves a nuestra web o ayudar a nuestro equipo a comprender qué secciones de la web encuentras más interesantes y útiles.</p>\
                    <p>Para más información, puedes leer nuestra política de cookies.</p>\
                </div>\
                <div id="cookies-necessary">\
                    <span class="cookies-title">Cookies necesarias</span>\
                    <p>Estas cookies son necesarias para que el sitio web funcione y no se pueden desactivar en nuestros sistemas.</p>\
                    <p>Se configuran en respuesta a sus acciones realizadas al solicitar servicios, como establecer sus preferencias de privacidad, iniciar sesión o completar formularios y en ningún caso almacenan información personal.</p>\
                    <label class="toggle-control"><input type="checkbox" checked="checked" disabled id="cookies-necessary-checkbox"><span class="control"></span></label>\
                </div>\
                <div id="cookies-3rdparty">\
                    <span class="cookies-title">Cookies de terceros</span>\
                    <p>Estas cookies nos permiten contar las visitas y fuentes de circulación para poder medir y mejorar el desempeño de nuestro sitio. Nos ayudan a saber qué páginas son las más o menos populares, y ver cuántas personas visitan el sitio.</p>\
                    <p>Toda la información que recogen estas cookies es agregada y, por lo tanto, anónima.</p>\
                    <label class="toggle-control"><input type="checkbox" checked="checked"><span class="control"></span></label>\
            </div>\
            <div id="cookies-buttons"><button class="simple-button" id="cookiesSave" onclick="cookies.save()">Guardar</button> <button class="simple-button" onclick="cookies.accept()">Activar todo</button></div></div></div></div>';document.getElementById("cookies-container").style.display="flex";}
showBanner(){let element=document.createElement('div');element.setAttribute("id","cookies-banner");element.innerHTML='<div class="rh-container"><p>Utilizamos cookies para ofrecerte la mejor experiencia en nuestra web. Puedes aprender más sobre qué cookies utilizamos o desactivarlas en los <u>ajustes</u>.</p><button class="simple-button" id="cookiesAcceptAll" onclick="window.cookies.accept()">Aceptar</button></div>';document.getElementById("cookies-container-preload").appendChild(element)
console.log("Shown banner");}
closeModal(){this.removeModal();this.showBanner();}
accept(){console.log("accepted");this.removeBanner();this.removeModal();localStorage.setItem("consent","all");console.log("Accepted");}
save(){this.removeBanner();this.removeModal();localStorage.setItem("consent","saved");console.log("Saved!");}}
jQuery(document).ready(function(){jQuery(document).on("click","#btnLanguages",function(){window.menu.closeMenu();window.menu.closeSearch();jQuery(document).find(".selector_idiomas").toggleClass("visible").removeAttr("style");});jQuery(document).on("click",".selector_idiomas #cerrar",function(){jQuery(document).find(".selector_idiomas").toggleClass("visible");});jQuery(document).on("click",".selector_idiomas",function(e){if(e.target===this){jQuery(document).find(".selector_idiomas").toggleClass("visible");}});jQuery(document).on("click",".selector_idiomas button#cerrarVentana",function(){jQuery(document).find(".selector_idiomas").toggleClass("visible");});});class Menu{itfc=this;listenerCreated=false;constructor(){var elements=document.getElementsByClassName("searchButton")
for(let x=0;x<elements.length;x++){elements[x].addEventListener("click",event=>this.openSearch());}
document.getElementById("openMenu").addEventListener("click",event=>this.openMenu());}
closeMenu(){if(this.menuExists()){let canvas=document.getElementById("off-canvas");canvas.style.display="none";let openMenu=document.getElementById("openMenu");openMenu.classList.remove('opened');openMenu.setAttribute('aria-expanded',false);}}
toggleMenu(){let canvas=document.getElementById("off-canvas");if(!canvas.style.display||canvas.style.display=="block"){canvas.style.display="none";}else{canvas.style.display="block";}}
openMenu(){this.closeSearch();if(this.menuExists()){this.toggleMenu();return true}
var offCanvas=document.createElement("div");offCanvas.setAttribute("id","off-canvas")
offCanvas.style.display="block";offCanvas.onclick=this.closeMenuOffCanvas;var menuPanel=document.createElement('div')
menuPanel.setAttribute("id","menuPanel")
offCanvas.appendChild(menuPanel)
let currentMenu=document.getElementsByTagName("nav")
if(currentMenu.length>0){currentMenu=currentMenu[0]
let menu=currentMenu.cloneNode(true)
let links=menu.getElementsByClassName('mobile-top-menu')
for(var y=0;y<links.length;y++){let link=links[y].getElementsByTagName("a")
if(link.length>0){let menuButton=document.createElement('div')
menuButton.setAttribute("class","menuButton")
let newLink=link[0].cloneNode(true)
let submenu=links[y].getElementsByClassName("sub-menu");let hasSubmenu=(submenu.length>0);newLink.innerHTML=newLink.innerHTML.replace(/([\u2700-\u27BF]|[\uE000-\uF8FF]|\uD83C[\uDC00-\uDFFF]|\uD83D[\uDC00-\uDFFF]|[\u2011-\u26FF]|\uD83E[\uDD10-\uDDFF])/g,'');let hash=this.simpleHash(newLink.innerHTML);if(hasSubmenu){menuButton.setAttribute("data-menu",hash);}
if((newLink.innerHTML.replace(/<\/?[^>]+(>|$)/g,"")).trim().length<=0)continue;menuButton.appendChild(newLink)
if(hasSubmenu){let menuOpen=document.createElement('span');menuOpen.onclick=this.openDropdown;menuOpen.innerHTML+='<svg xmlns="http://www.w3.org/2000/svg" viewBox="-8 -5 24 24" width="24" fill="currentColor"><path d="M5.314 7.071l-4.95-4.95A1 1 0 0 1 1.778.707l5.657 5.657a1 1 0 0 1 0 1.414l-5.657 5.657a1 1 0 0 1-1.414-1.414l4.95-4.95z"></path></svg>';menuButton.appendChild(menuOpen);}
menuPanel.appendChild(menuButton)
if(hasSubmenu){let newSubmenu=document.createElement('div');newSubmenu.classList.add("mobile-sub-menu");newSubmenu.classList.add(hash);let submenuLinks=submenu[0].getElementsByTagName('a');if(submenuLinks.length>0){for(var sY=0;sY<submenuLinks.length;sY++){newSubmenu.appendChild(submenuLinks[sY].cloneNode(true))}
menuPanel.appendChild(newSubmenu);}}}}}
document.body.appendChild(offCanvas);}
simpleHash(s){var h=0,l=s.length,i=0;if(l>0)
while(i<l)
h=(h<<5)-h+s.charCodeAt(i++)|0;return Math.abs(h);}
closeMenuOffCanvas(e){if(e.target===this){window.menu.closeMenu();}}
openDropdown(e){const parent=e.currentTarget.parentNode;let submenuClass=(parent.getAttribute("data-menu"));let elements=document.getElementById("menuPanel");let currentStatus=elements.getElementsByClassName(submenuClass)[0].style.display;if(currentStatus=="block"){elements.getElementsByClassName(submenuClass)[0].style.display="none";}else{elements.getElementsByClassName(submenuClass)[0].style.display="block";}}
menuExists(){let menu=document.getElementById("off-canvas")
return(typeof(menu)!='undefined'&&menu!=null)}
closeSearch(){let search=document.getElementsByClassName("search-header-contents")
if(search.length>0){search=search[0];if(search.classList.contains("top-search-onclick-open")){search.classList.remove("top-search-onclick-open");}}}
openSearch(){let search=document.getElementsByClassName("search-header-contents");if(search.length>0&&!search[0].classList.contains("top-search-onclick-open")){search=search[0];this.closeMenu();search.classList.add("top-search-onclick-open");console.log("Focused");var input=search.getElementsByClassName("searchInput");input[0].focus();console.log("Added search listener");if(!this.listenerCreated){this.listenerCreated=true;window.addEventListener('click',event=>this.closeSearchBody(event))}}else{this.closeSearch();}}
closeSearchBody(e){let search=document.getElementsByClassName("search-header-contents");let searchButton=document.getElementsByClassName("searchButton")[0];if(search.length>0){if(search[0].classList.contains("top-search-onclick-open")&&!e.target.classList.contains("search-header-contents")&&!e.target.classList.contains("searchButton")&&e.target.tagName.toUpperCase()!="SVG"&&e.target.tagName.toUpperCase()!="PATH"&&e.target.tagName.toUpperCase()!="INPUT"){console.log(e.target.tagName);this.closeSearch();console.log("Closed search popup & removed listener")}}}}
window.onload=function(){window.cookies=new Cookies();console.log("Loading cookies...");window.menu=new Menu();loadAnalytics();}
try{function ira(t){var a=atob(t);window.location.href=a}function iranueva(t){var a=atob(t);window.open(a,"_blank")}document.getElementById("obfusc").innerHTML='<span atributo="L2F2aXNvLWxlZ2FsLw==" onclick="ira(this.getAttribute(\'atributo\'));">Aviso legal</span><span atributo="L3BvbGl0aWNhLWRlLWNvb2tpZXMv" onclick="ira(this.getAttribute(\'atributo\'));">Política de Cookies</span><span atributo="L3BvbGl0aWNhLWRlLXByaXZhY2lkYWQv" onclick="ira(this.getAttribute(\'atributo\'));">Política de privacidad</span>',document.getElementById("leermas")&&(document.getElementById("leermas").onclick=function(t){ira("L3BvbGl0aWNhLWRlLWNvb2tpZXMv")});}catch(e){}
+function(a){"use strict";function c(c){return this.each(function(){var d=a(this),e=d.data("rh.tab");e||d.data("rh.tab",e=new b(this)),"string"==typeof c&&e[c]()})}var b=function(b){this.element=a(b)};b.prototype.show=function(){var b=this.element,c=b.closest("ul"),d=b.data("target");if(d||(d=b.attr("href"),d=d&&d.replace(/.*(?=#[^\s]*$)/,"")),!b.parent("li").hasClass("active")){var e=c.find(".active:last a"),f=a.Event("hide.rh.tab",{relatedTarget:b[0]}),g=a.Event("show.rh.tab",{relatedTarget:e[0]});if(e.trigger(f),b.trigger(g),!g.isDefaultPrevented()&&!f.isDefaultPrevented()){var h=a(d);this.activate(b.closest("li"),c),this.activate(h,h.parent(),function(){e.trigger({type:"hidden.rh.tab",relatedTarget:b[0]}),b.trigger({type:"shown.rh.tab",relatedTarget:e[0]})})}}},b.prototype.activate=function(a,b){function d(){c.removeClass("active").removeClass("in").end().find('[data-toggle="tab"]').attr("aria-expanded",!1),a.addClass("active").addClass("in").find('[data-toggle="tab"]').attr("aria-expanded",!0)}var c=b.find("> .active");d()};var d=a.fn.tab;a.fn.tab=c,a.fn.tab.Constructor=b,a.fn.tab.noConflict=function(){return a.fn.tab=d,this};var e=function(b){b.preventDefault(),c.call(a(this),"show")};a(document).on("click.rh.tab.data-api",'[data-toggle="tab"]',e)}(jQuery);jQuery(document).ready(function(){jQuery("body").on("click",".fcrp_gamelist_load_more",null,function(e){e.preventDefault();e=jQuery("form.fcrp_gm_filters").serialize();return jQuery(".fcrp-loading").show(),jQuery.get(jQuery(this).attr("href"),e,!1,"html").done(function(e){var r=jQuery(e).find(".fcrp_gamelist_item");jQuery(".fcrp_gamelist_item_container").append(r);e=jQuery(e).find(".fcrp_gamelist_load_more");0<e.length?jQuery(".fcrp_gamelist_load_more").attr("href",jQuery(e).attr("href")).show():jQuery(".fcrp_gamelist_load_more").hide()}).always(function(){jQuery(".fcrp-loading").hide()}),!1}),jQuery("body").on("change",".fcrp_gmselect",null,function(e){var r=jQuery("form.fcrp_gm_filters").serialize();return jQuery(".fcrp-loading").show(),jQuery.get(window.location.url,r,!1,"html").done(function(e){var r=jQuery(e).find(".fcrp_gamelist_item");jQuery(".fcrp_gamelist_item_container").html(r);e=jQuery(e).find(".fcrp_gamelist_load_more");0<e.length?jQuery(".fcrp_gamelist_load_more").attr("href",jQuery(e).attr("href")).show():jQuery(".fcrp_gamelist_load_more").hide()}).always(function(){jQuery(".fcrp-loading").hide()}),!1})});try{!function(l){l.fn.theiaStickySidebar=function(i){var t,o;function a(i,t){return!0===i.initialized||!(l("body").width()<i.minWidth)&&(t=t,(b=i).initialized=!0,t.each(function(){var i={};i.sidebar=l(this),i.options=b||{},i.container=l(i.options.containerSelector),0==i.container.size()&&(i.container=i.sidebar.parent()),i.sidebar.parents().css("-webkit-transform","none"),i.sidebar.css({position:"relative",overflow:"visible","-webkit-box-sizing":"border-box","-moz-box-sizing":"border-box","box-sizing":"border-box"}),i.sidebar.hasClass("rh-sticky-container")?(i.stickySidebar=i.sidebar.find(".rh-sticky-wrap-column"),0==i.stickySidebar.length&&(i.sidebar.find("script").remove(),i.stickySidebar=l("<div>").addClass("rh-sticky-wrap-column").append(i.sidebar.children()),i.sidebar.append(i.stickySidebar))):i.sidebar.hasClass("wpb_column")&&(i.stickySidebar=i.sidebar.find(".vc_column-inner"),0==i.stickySidebar.length&&(i.sidebar.find("script").remove(),i.stickySidebar=l("<div>").addClass("vc_column-inner").append(i.sidebar.children()),i.sidebar.append(i.stickySidebar))),i.marginTop=parseInt(i.sidebar.css("margin-top")),i.marginBottom=parseInt(i.sidebar.css("margin-bottom")),i.paddingTop=parseInt(i.sidebar.css("padding-top")),i.paddingBottom=parseInt(i.sidebar.css("padding-bottom"));var t,o,a=i.stickySidebar.offset().top,e=i.stickySidebar.outerHeight();function p(){i.fixedScrollTop=0,i.sidebar.css({"min-height":"1px"}),i.stickySidebar.css({position:"static",width:""})}i.stickySidebar.css("padding-top",1),i.stickySidebar.css("padding-bottom",1),a-=i.stickySidebar.offset().top,e=i.stickySidebar.outerHeight()-e-a,0==a?(i.stickySidebar.css("padding-top",0),i.stickySidebarPaddingTop=0):i.stickySidebarPaddingTop=1,0==e?(i.stickySidebar.css("padding-bottom",0),i.stickySidebarPaddingBottom=0):i.stickySidebarPaddingBottom=1,i.previousScrollTop=null,i.fixedScrollTop=0,p(),i.onScroll=function(i){var t,o,a,e,d,r,n,s,c;i.stickySidebar.is(":visible")&&(l("body").width()<i.options.minWidth||i.sidebar.outerWidth(!0)+50>i.container.width()?p():(n="static",(t=l(document).scrollTop())>=i.container.offset().top+(i.paddingTop+i.marginTop-i.options.additionalMarginTop)&&(a=i.paddingTop+i.marginTop+b.additionalMarginTop,r=i.paddingBottom+i.marginBottom+b.additionalMarginBottom,e=i.container.offset().top,d=i.container.offset().top+(c=i.container,s=c.height(),c.children().each(function(){s=Math.max(s,l(this).height())}),s),o=0+b.additionalMarginTop,c=i.stickySidebar.outerHeight()+a+r<l(window).height()?o+i.stickySidebar.outerHeight():l(window).height()-i.marginBottom-i.paddingBottom-b.additionalMarginBottom,a=e-t+i.paddingTop+i.marginTop,r=d-t-i.paddingBottom-i.marginBottom,e=i.stickySidebar.offset().top-t,d=i.previousScrollTop-t,"fixed"==i.stickySidebar.css("position")&&"modern"==i.options.sidebarBehavior&&(e+=d),"legacy"==i.options.sidebarBehavior&&(e=c-i.stickySidebar.outerHeight(),e=Math.max(e,c-i.stickySidebar.outerHeight())),e=0<d?Math.min(e,o):Math.max(e,c-i.stickySidebar.outerHeight()),e=Math.max(e,a),e=Math.min(e,r-i.stickySidebar.outerHeight()),n=((r=i.container.height()==i.stickySidebar.outerHeight())||e!=o)&&(r||e!=c-i.stickySidebar.outerHeight())?t+e-i.sidebar.offset().top-i.paddingTop<=b.additionalMarginTop?"static":"absolute":"fixed"),"fixed"==n?i.stickySidebar.css({position:"fixed",width:i.sidebar.width(),top:e,left:i.sidebar.offset().left+parseInt(i.sidebar.css("padding-left"))}):"absolute"==n?(c={},"absolute"!=i.stickySidebar.css("position")&&(c.position="absolute",c.top=t+e-i.sidebar.offset().top-i.stickySidebarPaddingTop-i.stickySidebarPaddingBottom),c.width=i.sidebar.width(),c.left="",i.stickySidebar.css(c)):"static"==n&&p(),"static"!=n&&1==i.options.updateSidebarHeight&&i.sidebar.css({"min-height":i.stickySidebar.outerHeight()+i.stickySidebar.offset().top-i.sidebar.offset().top+i.paddingBottom}),i.previousScrollTop=t))},i.onScroll(i),l(document).scroll((t=i,function(){t.onScroll(t)})),l(window).resize((o=i,function(){o.stickySidebar.css({position:"static"}),o.onScroll(o)}))}),!0);var b}(i=l.extend({containerSelector:"",additionalMarginTop:0,additionalMarginBottom:0,updateSidebarHeight:!0,minWidth:0,sidebarBehavior:"modern"},i)).additionalMarginTop=parseInt(i.additionalMarginTop)||0,i.additionalMarginBottom=parseInt(i.additionalMarginBottom)||0,a(t=i,o=this)||(console.log("TST: Body width smaller than options.minWidth. Init is delayed."),l(document).scroll(function(t,o){return function(i){a(t,o)&&l(this).unbind(i)}}(t,o)),l(window).resize(function(t,o){return function(i){a(t,o)&&l(this).unbind(i)}}(t,o)))}}(jQuery),jQuery(document).on("load",function(i){var t=0<jQuery(".re-stickyheader").length?jQuery(".re-stickyheader").height()+30:30;0<jQuery(".rh-float-panel").length&&(t=jQuery(".rh-float-panel").height()+30),0<jQuery(".stickyonfloatpanel").length&&(t=jQuery(".rh-float-panel").height()),jQuery(".stickysidebar-container > .wpb_column").theiaStickySidebar({additionalMarginTop:t,additionalMarginBottom:30}),jQuery(".rh-stickysidebar-wrapper > .rh-sticky-container").theiaStickySidebar({additionalMarginTop:t,additionalMarginBottom:30})});}catch(error){console.error("Error en módulo de Sticky Sidebar: "+error);}
jQuery(document).on("click","a.comment-reply-link[data-commentid]",function(){var comentario=jQuery(this).attr("data-commentid");jQuery(document).find("#comment_parent").attr("value",comentario);});jQuery(document).ready(function($){'use strict';let country=window.location.pathname.slice(1).split("/")[0];if(country.length!=2){country="es";}
if($('.right_aff .price_count').length>0){var width_ofcontainer=$('.right_aff .price_count').innerWidth()/2;$('.right_aff .price_count').append('<span class="triangle_aff_price" style="border-width: 14px '+width_ofcontainer+'px 0 '+width_ofcontainer+'px"></span>');}
$('#kcmenu a, .kc-gotop, .vc_btn3-container.rehub_scroll a').on('click',function(e){e.preventDefault();if(typeof $(this).data('scrollto')!=='undefined'){var target=$(this).data('scrollto');var hash=$(this).data('scrollto');}
else{var target=$(this.hash+', a[name="'+this.hash.replace(/#/,"")+'"]').first();var hash=this.hash;}
var $target=$(target);if($target.length!==0){$('html, body').stop().animate({'scrollTop':$target.offset().top-45},500,'swing',function(){if(history.pushState){history.pushState(null,null,hash);}
else{window.location.hash=hash;}});}});$('.tabs-menu li:first-child').trigger('click');$('.wpsm-tabs:not(.vc_tta)').each(function(){$(this).tabs();});$('.cat_widget_custom .children').parent().find('a').append('<span class="drop_list">&nbsp; +</span>');$('.tabs-item .drop_list').click(function(){$(this).parent().parent().find('.children').slideToggle();return false});$(document).on('click','.r_offer_details .r_show_hide',function(e){$(this).closest('.r_offer_details').find('.open_dls_onclk').slideToggle();$(this).closest('.r_offer_details').find('.hide_dls_onclk').toggleClass('rhhidden');$(this).toggleClass('r_show_active');});if(jQuery("#rh-category-search").length>0){var a=new Bloodhound({datumTokenizer:Bloodhound.tokenizers.obj.whitespace("long_name","key_word"),queryTokenizer:Bloodhound.tokenizers.whitespace,local:typeahead_categories});a.initialize(),jQuery("#rh-category-search .typeahead").typeahead({hint:!1,highlight:!0,minLength:1,autoselect:!0},{name:"categories",displayKey:"long_name",source:a.ttAdapter(),templates:{empty:['<div class="empty-message">','<strong>No results found.</strong>',"</div>"].join("\n")}}),jQuery("#category-search .typeahead").focus(),jQuery(".js-clear-search").on("click",function(){jQuery(this).parent().find(".typeahead").val(""),jQuery(this).addClass("hide")}),jQuery("#rh-category-search .typeahead").keyup(function(){jQuery(this).val().length>=3?jQuery(".js-clear-search").removeClass("hide"):jQuery(".js-clear-search").addClass("hide")}),jQuery(document).on("typeahead:selected",function(a,b){window.location=""+b.html_name})}
$('.rh-container').find('iframe[src*="player.vimeo.com"], iframe[src*="youtube.com"]').each(function(){var $video=$(this);if($video.parents('object').length)return;if($video.parent().hasClass('wpb_video_wrapper'))return;if($video.parent().hasClass('video-container'))return;if($video.parent().parent().hasClass('slides'))return;if(!$video.prop('id'))$video.attr('id','rvw'+Math.floor(Math.random()*999999));$video.wrap('<div class="video-container"></div>');});$('.ext-source').replaceWith(function(){return '<a href="'+$(this).data('dest')+'" target="_blank" rel="nofollow">'+$(this).html()+'</a>';});$('.int-source').replaceWith(function(){return '<a href="'+$(this).data('dest')+'">'+$(this).html()+'</a>';});$('.cat-pagination').on('click','a:not(.active) ',function(){var multi_cat=$(this).closest('.multi_cat');var multi_cat_wrap=multi_cat.find('.multi_cat_wrap');var page=$(this).data('paginated');var data={'action':'multi_cat','page':page,'tax':multi_cat.data('tax'),'term':multi_cat.data('term'),'nonce':translation.nonce,};multi_cat_wrap.addClass('loading');$.post(translation.ajax_url,data,function(response){if(response!=='fail'){multi_cat_wrap.html(response);multi_cat.find('.cat-pagination a').removeClass('active');multi_cat.find('.cat-pagination a[data-paginated="'+page+'"]').addClass('active');}
multi_cat_wrap.removeClass('loading');});});$(document).on("click",".post_thumbs_wrap .thumbplus:not(.alreadyhot)",function(e){e.preventDefault();var $this=$(this);if($this.hasClass("restrict_for_guests")){return false;}
var post_id=$(this).data("post_id");var informer=parseInt($(this).attr("data-informer"));$(this).addClass("loading");$.ajax({type:"post",url:translation.ajax_url,data:"action=hot-count&hotnonce="+translation.hotnonce+"&hot_count=hot&post_id="+post_id,success:function(count){$this.removeClass("loading");$this.addClass('alreadyhot').parent().find('.thumbminus').addClass('alreadyhot');informer=informer+1;$this.closest('.post_thumbs_wrap').find('#thumbscount'+post_id+'').text(informer);$this.attr("data-informer",informer);}});return false;});$(document).on("click",".post_thumbs_wrap .thumbminus:not(.alreadyhot)",function(e){e.preventDefault();var $this=$(this);if($this.hasClass("restrict_for_guests")){return false;}
var post_id=$(this).data("post_id");var informer=$(this).data("informer");$(this).addClass("loading");$.ajax({type:"post",url:translation.ajax_url,data:"action=hot-count&hotnonce="+translation.hotnonce+"&hot_count=cold&post_id="+post_id,success:function(count){$this.removeClass("loading");$this.addClass('alreadyhot').parent().find('.thumbplus').addClass('alreadyhot');informer=informer-1;$this.closest('.post_thumbs_wrap').find('#thumbscount'+post_id+'').text(informer);}});return false;});$(document).on("click",".hotmeter .hotplus:not(.alreadyhot)",function(e){e.preventDefault();if($(this).hasClass("restrict_for_guests")){return false;}
var post_id=$(this).data("post_id");var informer=$(this).data("informer");$(this).addClass('alreadyhot').parent().parent().find('.hotminus').addClass('alreadyhot');$('#textinfo'+post_id+'').html("<i class='far fa-spinner fa-spin'></i>");$.ajax({type:"post",url:translation.ajax_url,data:"action=hot-count&hotnonce="+translation.hotnonce+"&hot_count=hot&post_id="+post_id,success:function(count){$('#textinfo'+post_id+'').html('');informer=informer+1;$('#temperatur'+post_id+'').text(informer+"°");if(informer>translation.max_temp){informer=translation.max_temp;}
if(informer<translation.min_temp){informer=translation.min_temp;}
if(informer>=0){$('#scaleperc'+post_id+'').css("width",informer/translation.max_temp*100+'%').removeClass('cold_bar');$('#temperatur'+post_id+'').removeClass('cold_temp');}
else{$('#scaleperc'+post_id+'').css("width",informer/translation.min_temp*100+'%');}}});return false;});$(document).on("click",".hotmeter .hotminus:not(.alreadyhot)",function(e){e.preventDefault();if($(this).hasClass("restrict_for_guests")){return false;}
var post_id=$(this).data("post_id");var informer=$(this).data("informer");$(this).addClass('alreadyhot').parent().parent().find('.hotplus').addClass('alreadyhot');$('#textinfo'+post_id+'').html("<i class='far fa-spinner fa-spin'></i>");$.ajax({type:"post",url:translation.ajax_url,data:"action=hot-count&hotnonce="+translation.hotnonce+"&hot_count=cold&post_id="+post_id,success:function(count){$('#textinfo'+post_id+'').html('');informer=informer-1;$('#temperatur'+post_id+'').text(informer+"°");if(informer<translation.min_temp){informer=translation.min_temp;}
if(informer>translation.max_temp){informer=translation.max_temp;}
if(informer<0){$('#scaleperc'+post_id+'').css("width",informer/translation.min_temp*100+'%').addClass('cold_bar');$('#temperatur'+post_id+'').addClass('cold_temp');}
else{$('#scaleperc'+post_id+'').css("width",informer/translation.max_temp*100+'%');}}});return false;});$(document).on('click','.re_ajax_pagination_btn',function(e){e.preventDefault();var $this=$(this);var containerid=$this.data('containerid');var activecontainer=$('#'+containerid);var sorttype=$this.data('sorttype');var offset=$this.data('offset');var filterargs=activecontainer.data('filterargs');var innerargs=activecontainer.data('innerargs');var template=activecontainer.data('template');var data={'action':'re_filterpost','sorttype':sorttype,'filterargs':filterargs,'template':template,'containerid':containerid,'offset':offset,'innerargs':innerargs};$this.parent().find('span').removeClass('active');$this.addClass('active');$.ajax({type:"POST",url:translation.ajax_url,data:data,success:function(response){if(response!=='fail'){activecontainer.find('.re_ajax_pagination').remove();if(template=='query_type3'){var $content=$(response);activecontainer.find('.masonry_grid_fullwidth').append($content).masonry('appended',$content);}
else{activecontainer.append($(response).hide().fadeIn(1000));}}}});});$(document).on('inview','.re_aj_pag_auto_wrap .re_ajax_pagination_btn',function(e){e.preventDefault();var $this=$(this);var containerid=$this.data('containerid');var activecontainer=$('#'+containerid);var sorttype=$this.data('sorttype');var offset=$this.data('offset');var filterargs=activecontainer.data('filterargs');var innerargs=activecontainer.data('innerargs');var template=activecontainer.data('template');var data={'action':'re_filterpost','sorttype':sorttype,'filterargs':filterargs,'template':template,'containerid':containerid,'offset':offset,'innerargs':innerargs};$this.parent().find('span').removeClass('re_ajax_pagination_btn');$this.parent().find('span').removeClass('active_ajax_pagination');$this.addClass('active_ajax_pagination');$.ajax({type:"POST",url:translation.ajax_url,data:data,success:function(response){if(response!=='fail'){activecontainer.find('.re_ajax_pagination').remove();if(template=='query_type3'){var $content=$(response);activecontainer.find('.masonry_grid_fullwidth').append($content).masonry('appended',$content);}
else{activecontainer.append($(response).hide().fadeIn(1000));}}}});});$('.re_filter_panel').on('click','.re_filtersort_btn:not(.active)',function(e){e.preventDefault();var $this=$(this);var containerid=$this.data('containerid');var activecontainer=$('#'+containerid);var sorttype=$this.data('sorttype');var filterargs=activecontainer.data('filterargs');var innerargs=activecontainer.data('innerargs');var template=activecontainer.data('template');var data={'action':'re_filterpost','sorttype':sorttype,'filterargs':filterargs,'template':template,'containerid':containerid,'innerargs':innerargs};$this.closest('ul').addClass('activeul');$this.addClass('re_loadingbefore');activecontainer.addClass('sortingloading');$.ajax({type:"POST",url:translation.ajax_url,data:data,success:function(response){if(response!=='fail'){if(template=='query_type3'){var $content=$(response);activecontainer.find('.masonry_grid_fullwidth').html('').prepend($content).masonry('prepended',$content);}
else{activecontainer.html($(response).hide().fadeIn(1000));}}
$this.closest('.re_filter_panel').find('span').removeClass('active');$this.removeClass('re_loadingbefore').addClass('active');activecontainer.removeClass('sortingloading');$this.closest('ul').removeClass('activeul');if($this.closest('ul').hasClass('re_tax_dropdown')){$this.closest('.re_tax_dropdown').find('.rh_choosed_tax').html($this.html()).show();$this.closest('.re_tax_dropdown').find('.rh_tax_placeholder').hide();$this.closest('.re_filter_panel').find('.re_filter_ul li:first-child span').addClass('active');}
if($this.closest('ul').hasClass('re_filter_ul')){$this.closest('.re_filter_panel').find('.rh_tax_placeholder').show();$this.closest('.re_filter_panel').find('.rh_choosed_tax').hide();}}});});$('.re_filter_panel').on('click','.re_filter_ul .re_filtersort_btn.active',function(e){e.preventDefault();$(this).closest('.re_filter_panel').find('ul.re_filter_ul span').toggleClass('showfiltermobile');});$('.rh_tab_links').on('click','a.active',function(e){e.preventDefault();$(this).closest('.rh_tab_links').find('a').toggleClass('showtabmobile');});$('.re_tax_dropdown').on('click','.label',function(e){e.stopPropagation();e.preventDefault();$(this).closest('.re_tax_dropdown').toggleClass('active');});$('body').on('click','.showmefulln',function(e){e.preventDefault();var $this=$(this);var postid=$this.data('postid');var aj_get_full_enabled=$this.attr('data-enabled');var data={'action':'re_getfullcontent','postid':postid,};var newshead=$this.parent().find('.newsimage');var newscont=$this.parent().find('.newsdetail');var newsheadfull=$this.parent().find('.newscom_head_ajax');var newscontfull=$this.parent().find('.newscom_content_ajax');var newsbtn=$this.parent().find('.newsbtn').html();var headcontent=$this.parent().find('.newstitleblock').html();if(aj_get_full_enabled==1){newsheadfull.fadeOut(500,function(){newshead.fadeIn(500);$this.attr('data-enabled',2).removeClass('compress');});newscontfull.fadeOut(500,function(){newscont.fadeIn(500);});}
else if(aj_get_full_enabled==2){newshead.hide(10);newscont.hide(10);newsheadfull.fadeIn(1000);newscontfull.fadeIn(1000);$this.attr('data-enabled',1).addClass('compress');}
else{$this.addClass('re_loadingafter');$.ajax({type:"POST",url:translation.ajax_url,data:data,success:function(response){if(response!=='fail'){newscont.hide(10);newshead.hide(10);newscontfull.html($(response).hide().fadeIn(1000).append(newsbtn));newsheadfull.html($(headcontent).hide().fadeIn(1000));newscontfull.find('.rate-bar').each(function(){$(this).find('.rate-bar-bar').animate({width:$(this).attr('data-percent')},1500);});}
$this.attr('data-enabled',1).removeClass('re_loadingafter').addClass('compress');}});}});if($('#content-sticky-panel').length>0){$('.post').waypoint({handler:function(direction){$('#content-sticky-panel').toggleClass('floating',direction=='down');},offset:30});var commenttitle=$('#comments .title_comments').first().html();if(commenttitle){$('#content-sticky-panel ul').append('<li class="top"><a href="#comments">'+commenttitle+'</a></li>');$('#comments .title_comments').waypoint({handler:function(direction){$('#content-sticky-panel a').removeClass('active');$('#content-sticky-panel a[href="#comments"]').addClass('active');},offset:30});}
$('.kc-gotop').hide();$('#content-sticky-panel').on('click','#mobileactivate',function(){$('#content-sticky-panel').toggleClass('mobileactive');});if($(window).width()<1300){var heightpost=$('.post').offset().top;$('#content-sticky-panel').css('top',heightpost);}}
$('#content-sticky-panel a').each(function(){$('a[name="'+this.hash.replace(/#/,"")+'"]').waypoint({handler:function(direction){$('#content-sticky-panel a').removeClass('active');var corrlink=$(this.element).attr('name');$('#content-sticky-panel a[href="#'+corrlink+'"]').addClass('active');},offset:45})});});function setStars(event,outerDiv,justclick=false){const bounds=outerDiv.getBoundingClientRect();const posX=event.clientX-bounds.left;rating=Math.ceil(parseFloat((5*((posX/outerDiv.clientWidth)*100))/100));if(rating<1.0){rating=1.0;}else if(rating>5.0){rating=5.0;}
if(!justclick){outerDiv.getElementsByTagName("span")[0].setAttribute("style","width:"+(rating*20.0)+"%;");}
let parent=outerDiv.parentNode;if(outerDiv.classList.contains("is-ajax")&&!justclick){outerDiv.setAttribute("data-user-rating",parseInt(rating));}
if(outerDiv.classList.contains("is-form")&&justclick){let input=parent.getElementsByTagName("input");for(let i=0;i<input.length;i++){if(input[i].getAttribute("name")=="user_rate"){input[i].value=parseInt(rating);}}
outerDiv.setAttribute("data-rating",rating);}
if(outerDiv.classList.contains("has-tooltip")){parent.setAttribute("aria-label","Calificar con "+rating+" estrellas");}}