
!function(e){var t={};function o(a){if(t[a])return t[a].exports;var i=t[a]={i:a,l:!1,exports:{}};return e[a].call(i.exports,i,i.exports,o),i.l=!0,i.exports}o.m=e,o.c=t,o.d=function(e,t,a){o.o(e,t)||Object.defineProperty(e,t,{configurable:!1,enumerable:!0,get:a})},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="/",o(o.s=0)}({0:function(e,t,o){o("BTsM"),o("1rzn"),o("zXHK"),o("yUHB"),o("DfjT"),o("kbN4"),o("XFz9"),o("32Bg"),o("otv5"),o("8awe"),o("WdEv"),o("IXbm"),o("ANq2"),o("bnk9"),o("b3PD"),o("bVcf"),o("3zbi"),o("7/yT"),o("SKO8"),o("fioS"),o("FBUU"),o("NlZ4"),o("htRy"),o("909p"),o("Iz2b"),o("9rri"),o("HPod"),o("Bf93"),o("rPHD"),e.exports=o("eZ9/")},"1rzn":function(e,t){},"32Bg":function(e,t){},"3zbi":function(e,t){},"7/yT":function(e,t){},"8awe":function(e,t){},"909p":function(e,t){},"9rri":function(e,t){},ANq2:function(e,t){},BTsM:function(e,t){var o;theme.setCookie=function(e,t,o){var a=new Date;a.setTime(a.getTime()+24*o*60*60*1e3);var i="expires="+a.toUTCString();document.cookie=e+"="+t+";"+i+";path=/"},theme.getCookie=function(e){for(var t=e+"=",o=decodeURIComponent(document.cookie).split(";"),a=0;a<o.length;a++){for(var i=o[a];" "==i.charAt(0);)i=i.substring(1);if(0==i.indexOf(t))return i.substring(t.length,i.length)}return""},theme.stringToSlug=function(e){if(void 0===e)return"";return("@"+e.toLowerCase().replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi,"a").replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi,"e").replace(/i|í|ì|ỉ|ĩ|ị/gi,"i").replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi,"o").replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi,"u").replace(/ý|ỳ|ỷ|ỹ|ỵ/gi,"y").replace(/đ/gi,"d").replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi,"").replace(/ /gi,"-").replace(/\-\-\-\-\-/gi,"-").replace(/\-\-\-\-/gi,"-").replace(/\-\-\-/gi,"-").replace(/\-\-/gi,"-")+"@").replace(/\@\-|\-\@|\@/gi,"")},theme.GetImage=function(e,t){if(e){var o=void 0,a=e.split(".").pop(),i=e.split(".").slice(0,-1).join(".");switch(t){case"xs":o=i+"_80x80."+a;break;case"s":o=i+"_330x330."+a;break;case"m":o=i+"_550x550."+a;break;case"l":o=i+"_800x800."+a;break;case"rec":o=i+"_255x380."+a;break;case"375_425":o=i+"_375x425."+a;break;case"550_623":o=i+"_550x623."+a;break;case"160_181":o=i+"_160x181."+a;break;case"270_306":o=i+"_270x306."+a;break;case"355_402":o=i+"_355x402."+a;break;case"585_663":o=i+"_585x663."+a;break;case"100_113":o=i+"_100x113."+a;break;case"50_67":o=i+"_50x67."+a;break;case"full":default:o=e}return o=o.replace("image/","uploads/"),window.cool_mate_settings.MEDIA_URL+o}},theme.slugify=function(e){e=e.toString().toLowerCase().trim();return[{to:"a",from:"[ÀÁÂÃÄÅÆĀĂĄẠẢẤẦẨẪẬẮẰẲẴẶ]"},{to:"c",from:"[ÇĆĈČ]"},{to:"d",from:"[ÐĎĐÞ]"},{to:"e",from:"[ÈÉÊËĒĔĖĘĚẸẺẼẾỀỂỄỆ]"},{to:"g",from:"[ĜĞĢǴ]"},{to:"h",from:"[ĤḦ]"},{to:"i",from:"[ÌÍÎÏĨĪĮİỈỊ]"},{to:"j",from:"[Ĵ]"},{to:"ij",from:"[Ĳ]"},{to:"k",from:"[Ķ]"},{to:"l",from:"[ĹĻĽŁ]"},{to:"m",from:"[Ḿ]"},{to:"n",from:"[ÑŃŅŇ]"},{to:"o",from:"[ÒÓÔÕÖØŌŎŐỌỎỐỒỔỖỘỚỜỞỠỢǪǬƠ]"},{to:"oe",from:"[Œ]"},{to:"p",from:"[ṕ]"},{to:"r",from:"[ŔŖŘ]"},{to:"s",from:"[ßŚŜŞŠ]"},{to:"t",from:"[ŢŤ]"},{to:"u",from:"[ÙÚÛÜŨŪŬŮŰŲỤỦỨỪỬỮỰƯ]"},{to:"w",from:"[ẂŴẀẄ]"},{to:"x",from:"[ẍ]"},{to:"y",from:"[ÝŶŸỲỴỶỸ]"},{to:"z",from:"[ŹŻŽ]"},{to:"-",from:"[·/_,:;']"}].forEach(function(t){e=e.replace(new RegExp(t.from,"gi"),t.to)}),e.replace(/\s+/g,"-").replace(/[^\w-]+/g,"").replace(/--+/g,"-").replace(/^-+/,"").replace(/-+$/,"")},theme.formatMoney=function(e){if(e)return(e=Number(e).toLocaleString("vi",{style:"currency",currency:"VND"})).replace(/\s/,"").replace("₫","đ")},theme.isMobile=function(){var e,t=!1;return e=navigator.userAgent||navigator.vendor||window.opera,(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(e)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(e.substr(0,4)))&&(t=!0),t},theme.scrollTo=function(e){var t=$(e);if(!(t.length<=0)){var o=t.offset().top;$("html,body").animate({scrollTop:o},500)}},theme.scrollToStep=function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:90,o=arguments.length>2&&void 0!==arguments[2]?arguments[2]:500;$(document).on("click",e,function(e){e.preventDefault();var a=$(this).attr("href"),i=$(a);i.length>0&&$("body,html").animate({scrollTop:i.offset().top-t},o)})},theme.scroll_toggle=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"toggle",t=$("body"),o=$("html");if("toggle"===e&&(t.toggleClass("stick-scroll"),t.toggleClass("no-scroll")),"remove"===e&&(t.removeClass("stick-scroll"),t.removeAttr("style"),o.removeAttr("style")),"add"===e&&(t.addClass("stick-scroll"),t.css("overflow","hidden"),o.css("overflow","hidden")),"has"===e)return!!t.hasClass("stick-scroll")},theme.bodystick=function(){0==(arguments.length>0&&void 0!==arguments[0]&&arguments[0])?$("body,html").css("oveflow","hidden"):$("body,html").removeAttr("style")},theme.menu_toggle=function(){$(document).on("click","[data-menu-id]",function(e){e.preventDefault();var t=$(this).attr("data-menu-id"),o=$('[data-menu-open="'+t+'"]'),a=$(".site-header").height();o.hasClass("menu-mobile-nav--slide")?($(this).hasClass("is-active")?($(this).removeClass("is-active"),setTimeout(function(e){$("body").removeClass("stick-scroll")},100)):($("[data-menu-id]").removeClass("is-active"),$(this).addClass("is-active"),$("body").addClass("stick-scroll")),o.siblings(".menu-mobile-nav--slide").slideUp(),o.css("top",a),o.slideToggle()):(o.siblings(".menu-mobile-nav--slide").slideUp(),$(this).addClass("is-active"),$("[data-menu-id]").removeClass("is-active"),$("[data-menu-open]").removeClass("is-active"),o.addClass("is-active"),$("body").addClass("stick-scroll"))}),$(document).on("click",function(e){$(e.target).hasClass("stick-scroll")&&($(".menu-mobile-nav--slide[data-menu-open]").slideUp(),$("[data-menu-open]").removeClass("is-active"),$("[data-menu-id]").removeClass("is-active"),setTimeout(function(e){$("body").removeClass("stick-scroll")},100))}),$(document).on("click",".menu-mobile-nav__close",function(e){e.preventDefault(),$(".menu-mobile-nav--slide[data-menu-open]").slideUp(),$("[data-menu-open]").removeClass("is-active"),$("[data-menu-id]").removeClass("is-active"),setTimeout(function(e){$("body").removeClass("stick-scroll")},100)})},theme.Header=function(){var e=document.querySelector(".site-header");if(e){var t=0;document.addEventListener("scroll",function(){scrollY>t&&scrollY>50?e.classList.add("is-sticky"):e.classList.remove("is-sticky"),t=scrollY}),theme.menu_toggle()}},theme.AddToCart=function(){$("body").on("click",".product__addtocart",function(){var e=$(this).closest(".product").attr("id"),t=$(this).data("variant"),o=$(this).data("quantity"),a={size:"",color:"",id:t};theme.AddItem({product_id:e,options:a,quantity:parseInt(o)>0?o:1})})},theme.miniCartToggle=function(){$(".mini-cart-toggle").click(function(e){e.preventDefault(),$(".overlay").toggleClass("active"),$(".mini-cart").toggleClass("active")})},theme.noScroll=function(){$("html, body").toggleClass("no-scroll")},theme.AddBoxItemWithOptions=function(){var e=$("body");e.on("click",".product__select-option",function(){var e=$(this).closest(".product"),t=e.find(".product__options-list");e.parent(".grid__column").siblings(".grid__column").find(".product").removeClass("is-active"),$(".product__options-list").removeClass("is-active"),e.hasClass("is-active")?e.removeClass("is-active"):e.addClass("is-active"),t.first().addClass("is-active"),t.find("input").prop("checked",!1)}),e.on("change",".product__option",function(){var e=$(this).closest(".product__options-list"),t=$(this).data("last"),o=$(this).closest(".product").find(".product__variants").data("variants");if(e.removeClass("is-active"),e.next(".product__options-list").addClass("is-active"),t){var a=$(this).closest(".product"),i=a.attr("id"),n=$(this).closest(".product__variants").find(".product__option input:checked"),s=a.closest(".product-grid").data("step"),r={};n.map(function(e,t){var o=(t=$(t)).attr("name");r[o]=t.val()}),a.removeClass("is-active");var c=a.closest(".product-grid").data("box"),l=a.closest(".product-grid").data("collection"),d=a.find(".product__image img").attr("src");if(l&&c)theme.AddBoxItem({product_id:i,options:r,box_id:c,collection_id:l,image:d,step_id:s});else{var m,u="";Object.values(r).forEach(function(e,t){u=0===t?e:u+""+e}),(m=o.find(function(e){var t=e.title;if((t=(t=(t=t.replace(/\//g,"")).replace(/ /g,"")).trim())==(u=(u=(u=u.replace(/\//g,"")).replace(/ /g,"")).trim()))return e}))&&m.id?theme.AddItem({product_id:i,options:{id:m.id}}):(theme.Loading.hide(),theme.PushNotify({message:"Thuộc tính bạn chọn không sẵn có, vui lòng chọn lại!",level:"error"}))}}})},theme.AddToBox=function(){$("body").on("click",".product__addtobox",function(){var e=$(this).closest(".product"),t=e.attr("id"),o=$(this).data("variant"),a=e.closest(".product-grid").data("box"),i=e.closest(".product-grid").data("collection"),n=e.closest(".product-grid").data("step"),s=e.find(".product__image img").attr("src"),r={size:"",color:"",id:o};theme.AddBoxItem({product_id:t,options:r,box_id:a,collection_id:i,image:s,step_id:n})})},theme.AddBoxItem=function(e){var t=e.options,o=e.product_id,a=e.box_id,i=e.image,n=e.step_id,s=window.cool_mate_settings.APP_URL+"/box";theme.Loading.show();var r={_token:window.cool_mate_settings._TOKEN,box:a||"",collection_id:"step_"+n||"",product_id:o,quantity:1,options:t,box_token:window.cool_mate_settings.BOX_TOKEN};$.ajax({url:s,type:"POST",data:r,dataType:"json"}).done(function(e){if(200===e.code){var t=e.response.products,s=localStorage.getItem("cm_box_data")?localStorage.getItem("cm_box_data"):[],r=(s=JSON.parse(s)).find(function(e){return e.id===Number(n)});r.completed=!0,s[r.id-1]=r;var c=$(".steps, .steps-list").find('.next-step[data-step="'+n+'"]'),l=$('.box__item[data-step="'+n+'"]'),d=c.find(".step__image img"),m=c.find(".step__remove"),u=$(".items-selected");c.addClass("step--added"),l.addClass("box__item--filled"),d.attr("src",i),m.data("product",o),localStorage.setItem("cm_box_data",JSON.stringify(s));var p=s.filter(function(e){return!e.completed});if(p.length>0){var f=p[0],g=f.id,h=f.slug;theme.loadNextPage(g,h)}else{u.find(".grid").html(""),t.filter(function(e){return e.box===a}).map(function(e,t){return u.find(".grid").append(function(e,t){var o=e.title,a=e.images,i=e.seo_alias,n=e.id,s=e.collection,r=e.variants,c=(window.origin,a?theme.GetImage(a.src,"s"):""),l=s.length>0?s[0]:"",d=r.title?'<p class="cart__variant text--center">Bạn chọn: '+r.title+"</p>":"",m=r.title?'<span class="product__image--size">'+r.title+"</span>":"";return $('<div class="grid__column">\n                        <div class="product"  data-id="'+n+'" id="'+n+'" data-slug="'+i+'" data-step="'+t+'">\n                            <div class="product__inner">\n                            <span class="product__remove" data-step="'+t+'" data-collection="'+l+'" data-id="'+n+'">\n                                <svg xmlns="http://www.w3.org/2000/svg" width="29.242" height="29.243" viewBox="0 0 29.242 29.243">\n                                    <g transform="translate(2.121 2.121)">\n                                        <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="3px" x2="35.355" transform="translate(0 0) rotate(45)"/>\n                                        <line  fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="3px" x2="35.355" transform="translate(25 0) rotate(135)"/>\n                                    </g>\n                                </svg>\n                            </span>\n                                <div class="product__image">\n                                    '+m+'\n                                    <a href="#" class="open-preview">\n                                        <img src="'+c+'"\n                                            alt="'+o+'">\n                                    </a>\n                                </div>\n                                <h3 class="product__title text--center">\n                                    <a href="#" class="open-preview">'+o+"</a>\n                                </h3>\n                                "+d+"\n                            </div>\n                        </div>\n                    </div>")}(e,t+1))});var v=document.querySelector(".site-main");v.setAttribute("data-scrollable",!1),theme.isMobile()?($(".builder-footer .add-to-cart").addClass("is-active"),$(".builder-header").addClass("hidden"),$(".box__item--full").addClass("box__item--filled"),theme.SmoothScroll(0,window)):theme.SmoothScroll(0,v),$(".sidebar .btn-reset").hide(),u.removeClass("hidden"),$(".products-list").addClass("hidden"),$(".filter-list").addClass("hidden"),theme.Loading.hide(),window.completed=!0}$('.grid[data-step="'+n+'"]').find(".product--added").removeClass("product--added"),$('.grid[data-step="'+n+'"]').find("#"+o).addClass("product--added")}400===e.code&&theme.PushNotify({message:"Thuộc tính bạn chọn không sẵn có, vui lòng chọn lại!",level:"error"})}).fail(function(){theme.PushNotify({message:"Thuộc tính bạn chọn không sẵn có, vui lòng chọn lại!",level:"error"})}).always(function(){theme.Loading.hide()})},theme.miniCartItem=function(){var e=$(".mini-cart");if(e.length>0){var t=window.cool_mate_settings.APP_URL+"/cart-item";$.ajax({url:t,type:"GET",cache:!1}).done(function(t){""!==t&&e.html(t)}).fail(function(){}).always(function(){theme.Loading.hide()})}},theme.AddItem=function(e){var t=e.options,o=e.product_id,a=e.quantity,i=e.reload,n=e.url_cart,s=window.cool_mate_settings.APP_URL+"/cart";theme.Loading.show();var r={_token:window.cool_mate_settings._TOKEN,quantity:a||1,options:t,product_id:o,device_token:window.cool_mate_settings.DEVICE_TOKEN};fbq("track","AddToCart"),$.ajax({url:s,type:"POST",data:r,dataType:"json"}).done(function(e){var t=e.code;if(e.response.error)return theme.PushNotify({message:e.response.error,level:"error"}),!1;if(200===t){if(theme.PushNotify({message:"Sản phẩm đã được thêm vào giỏ hàng!",level:"success",url:n}),theme.miniCartItem(),e.response){var o=e.response.cart_data,a=o.number_item;if(1==cool_mate_settings.TET_CAMPAIGN&&theme.setCookie("TET_CAMPAIGN_MAX_PRICE",window.get(window.maxBy(o.products,"regular_price"),"regular_price")),1==cool_mate_settings.BG_ONE_CAMPAIGN){var s=e.response.bgOneMaxPrice;localStorage.setItem("BG_ONE_CAMPAIGN",s),$(".product__prices--regular").each(function(e,t){if(1!=$(t).data("in-sale")){var o=$(t).data("price"),a=$(t).next();if(parseInt(o)<=parseInt(s)&&($(t).addClass("product__prices--promotion").html("0đ"),$(a).remove(),(a=$('<span className="product__prices--compare"></span>')).data("compare-price",o),a.html('<del class="product__prices--compare">'+theme.formatMoney(o)+'</del><span class="text--primary"> -100%</span>'),$(t).parent().append(a)),-1===parseInt(s)&&a.length>0){var i=$(a).data("compare-price");$(t).html(theme.formatMoney(i)),$(a).remove()}}})}theme.UpdateQuantity(a)}!0===i&&setTimeout(function(e){location.reload()},100)}else theme.PushNotify({message:"Thuộc tính bạn chọn không sẵn có, vui lòng chọn lại!",level:"error"})}).fail(function(){theme.PushNotify({message:"Có lỗi xảy ra, vui lòng thử lại!",level:"error"})}).always(function(){theme.Loading.hide(),cool_mate_settings.RELOAD_AFTER_AJAX_CALLED&&setInterval(function(){window.location.href.includes("/collection")&&"/collection/excool"!==window.location.pathname&&window.location.reload()},1500)})},theme.UpdateBoxData=function(e,t){var o=localStorage.getItem("cm_box_data")?localStorage.getItem("cm_box_data"):[],a=(o=JSON.parse(o)).find(function(t){return t.id===e});a.completed=t,o[a.id-1]=a,localStorage.setItem("cm_box_data",JSON.stringify(o))},theme.SelectBox=function(){$(".btn-select-box").on("click",function(){var e=$(this).attr("data-box-id");localStorage.setItem("box_id",e),theme.setCookie("box_id",e),fbq("track","CustomizeProduct"),window.location.href=$(this).attr("data-url")})},theme.UpdateQuantity=function(e){$(".site-header__cart").addClass("site-header__cart--active"),$(".site-header__cartcount").text(e)},theme.PushNotify=function(e){var t=e.message,o=e.delay,a=e.level,i=e.url;o||(o=3),a||(a="success");var n=$(".notify"),s=n.find(".notify__message"),r=n.find(".btn");n.removeClass("success error");var c=function(){n.removeClass("is-active success error"),setTimeout(function(){s.html("")},200)};i=void 0!=i?i:"/cart",r.attr("href",i),s.html(t),"error"===a&&r.addClass("hidden"),"success"===a&&r.hasClass("hidden")&&r.removeClass("hidden"),"message"===a&&(r.addClass("hidden"),n.addClass("success")),"copy"===a&&(n.addClass("success"),r.html("Áp dụng ngay"),void 0!==e.code&&r.attr("href","/wishlistcoupon/?coupon="+e.code)),n.addClass("is-active "+a),setTimeout(function(){c()},1e3*o),n.find(".notify__close").on("click",function(){c()})},theme.Loading=(o=$(".loading"),{show:function(){o.addClass("is-active")},hide:function(){o.removeClass("is-active")}}),theme.SmoothScroll=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:0;(arguments.length>1&&void 0!==arguments[1]?arguments[1]:window).scroll({top:e,left:0,behavior:"smooth"})},theme.Slider=function(){0!==$(".slider-wrapper").length&&$(".slider-wrapper").slick({prevArrow:'<button type="button" class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"><g transform="rotate(180 11 11)"><circle cx="11" cy="11" r="11" data-name="Ellipse 39" fill="#fff"/><g data-name="next (1)"><path d="M11 0a11 11 0 1 0 11 11A11 11 0 0 0 11 0zm3.143 12.917L10.08 16.98l-1.918-1.917L12.226 11 8.162 6.937 10.08 5.02l4.063 4.063L16.06 11z" data-name="Path 195" fill="currentColor"/></g></g></svg></button>',nextArrow:'<button type="button" class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"><g><circle cx="11" cy="11" r="11" data-name="Ellipse 39" fill="#fff"/><g data-name="next (1)"><path d="M11 0a11 11 0 1 0 11 11A11 11 0 0 0 11 0zm3.143 12.917L10.08 16.98l-1.918-1.917L12.226 11 8.162 6.937 10.08 5.02l4.063 4.063L16.06 11z" data-name="Path 195" fill="currentColor"/></g></g></svg></button>'})},theme.quantityBox=function(){$(".quantity").length<1||$(".quantity").each(function(){var e=$(this),t=e.find('input[type="number"]'),o=e.find(".quantity__increase"),a=e.find(".quantity__decrease"),i=t.attr("min"),n=t.attr("max");o.click(function(){var o=void 0,a=parseFloat(t.val());o=a>=n?a:a+1,e.find("input").val(o),e.find("input").trigger("change")}),a.click(function(){var o=void 0,a=parseFloat(t.val());o=a<=i?a:a-1,e.find("input").val(o),e.find("input").trigger("change")})})},theme.validateEmail=function(e){return/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(e)},theme.formInputRange=function(){var e=!1,t=$(".form-control--range").attr("data-range"),o=theme.isMobile()?"touchstart":"mousedown",a=theme.isMobile()?"touchend":"mouseup",i=theme.isMobile()?"touchmove":"mousemove";$(".form-control--range").on(o,function(o){e=!0,t=$(this).attr("data-range")}),$(".form-control--range").on(i,function(o){if(1==e){var a=$(".form-control--range-label[data-range="+t+"]"),i=a.attr("data-value"),n=$(this).val()+i;a.html(n)}}),$(".form-control--range").on(a,function(t){e=!1}),$(".form-control--range").on("change",function(e){var o=$(".form-control--range-label[data-range="+t+"]"),a=o.attr("data-value"),i=$(this).val()+a;o.html(i)})},theme.menuToggleTablet=function(){var e=function(e){$(".site-header__toggle > a").removeClass("close"),$(".site-header__menu").removeClass("is-active"),$(".site-wrapper").removeClass("on-toggle")};$(document).on("click",".site-header__toggle > a",function(e){e.preventDefault(),$(this).toggleClass("close"),$(".site-header__menu").toggleClass("is-active"),$(".site-wrapper").toggleClass("on-toggle")}),$(window).on("scroll",function(t){e()}),$(document).on("click",function(t){$(".site-header__menu").hasClass("is-active")&&$(".site-wrapper").hasClass("on-toggle")&&$(t.target).hasClass("on-toggle")&&e()}),$(document).on("click",".site-header__toggle-close",function(t){t.preventDefault(),e()})},theme.init=function(){theme.Header(),theme.AddToCart(),theme.miniCartToggle(),theme.AddToBox(),theme.AddBoxItemWithOptions(),theme.SelectBox(),theme.Slider(),theme.quantityBox(),theme.formInputRange(),theme.menuToggleTablet()},document.addEventListener("DOMContentLoaded",function(){$(theme.init)}),cm.isNewAccount=function(e){var t=window.cool_mate_settings.APP_URL+"/c";$.ajax({url:t,type:"GET",dataType:"json"}).done(function(t){localStorage.setItem("checknewaccount",!0),e(t)})},$(document).ready(function(){localStorage.getItem("checknewaccount",!1);if(0==cool_mate_settings._LOGGED){var e=localStorage.getItem("cart_email"),t=localStorage.getItem("cart_phone");e||t?localStorage.setItem("is_new_user",!1):localStorage.setItem("is_new_user",!0)}else cm.isNewAccount(function(e){1==e.success?localStorage.setItem("is_new_user",!0):localStorage.setItem("is_new_user",!1)})})},Bf93:function(e,t){},DfjT:function(e,t){},FBUU:function(e,t){},HPod:function(e,t){},IXbm:function(e,t){},Iz2b:function(e,t){},NlZ4:function(e,t){},SKO8:function(e,t){},WdEv:function(e,t){},XFz9:function(e,t){},b3PD:function(e,t){},bVcf:function(e,t){},bnk9:function(e,t){},"eZ9/":function(e,t){},fioS:function(e,t){},htRy:function(e,t){},kbN4:function(e,t){},otv5:function(e,t){},rPHD:function(e,t){},yUHB:function(e,t){},zXHK:function(e,t){}});

! function (e) {
    var t = {};

    function o(a) {
        if (t[a]) return t[a].exports;
        var i = t[a] = {
            i: a,
            l: !1,
            exports: {}
        };
        return e[a].call(i.exports, i, i.exports, o), i.l = !0, i.exports
    }
    o.m = e, o.c = t, o.d = function (e, t, a) {
        o.o(e, t) || Object.defineProperty(e, t, {
            configurable: !1,
            enumerable: !0,
            get: a
        })
    }, o.n = function (e) {
        var t = e && e.__esModule ? function () {
            return e.default
        } : function () {
            return e
        };
        return o.d(t, "a", t), t
    }, o.o = function (e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, o.p = "/", o(o.s = 0)
}({
    0: function (e, t, o) {
        o("BTsM"), o("1rzn"), o("zXHK"), o("yUHB"), o("DfjT"), o("kbN4"), o("XFz9"), o("32Bg"), o("otv5"), o("8awe"), o("WdEv"), o("IXbm"), o("ANq2"), o("bnk9"), o("b3PD"), o("bVcf"), o("3zbi"), o("7/yT"), o("SKO8"), o("fioS"), o("FBUU"), o("NlZ4"), o("htRy"), o("909p"), o("Iz2b"), o("9rri"), o("HPod"), o("Bf93"), o("rPHD"), e.exports = o("eZ9/")
    },
    "1rzn": function (e, t) {},
    "32Bg": function (e, t) {},
    "3zbi": function (e, t) {},
    "7/yT": function (e, t) {},
    "8awe": function (e, t) {},
    "909p": function (e, t) {},
    "9rri": function (e, t) {},
    ANq2: function (e, t) {},
    BTsM: function (e, t) {
        var o;
        theme.setCookie = function (e, t, o) {
            var a = new Date;
            a.setTime(a.getTime() + 24 * o * 60 * 60 * 1e3);
            var i = "expires=" + a.toUTCString();
            document.cookie = e + "=" + t + ";" + i + ";path=/"
        }, theme.getCookie = function (e) {
            for (var t = e + "=", o = decodeURIComponent(document.cookie).split(";"), a = 0; a < o.length; a++) {
                for (var i = o[a];
                    " " == i.charAt(0);) i = i.substring(1);
                if (0 == i.indexOf(t)) return i.substring(t.length, i.length)
            }
            return ""
        }, theme.stringToSlug = function (e) {
            if (void 0 === e) return "";
            return ("@" + e.toLowerCase().replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, "a").replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, "e").replace(/i|í|ì|ỉ|ĩ|ị/gi, "i").replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, "o").replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, "u").replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, "y").replace(/đ/gi, "d").replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, "").replace(/ /gi, "-").replace(/\-\-\-\-\-/gi, "-").replace(/\-\-\-\-/gi, "-").replace(/\-\-\-/gi, "-").replace(/\-\-/gi, "-") + "@").replace(/\@\-|\-\@|\@/gi, "")
        }, theme.GetImage = function (e, t) {
            if (e) {
                var o = void 0,
                    a = e.split(".").pop(),
                    i = e.split(".").slice(0, -1).join(".");
                switch (t) {
                case "xs":
                    o = i + "_80x80." + a;
                    break;
                case "s":
                    o = i + "_330x330." + a;
                    break;
                case "m":
                    o = i + "_550x550." + a;
                    break;
                case "l":
                    o = i + "_800x800." + a;
                    break;
                case "rec":
                    o = i + "_255x380." + a;
                    break;
                case "375_425":
                    o = i + "_375x425." + a;
                    break;
                case "550_623":
                    o = i + "_550x623." + a;
                    break;
                case "160_181":
                    o = i + "_160x181." + a;
                    break;
                case "270_306":
                    o = i + "_270x306." + a;
                    break;
                case "355_402":
                    o = i + "_355x402." + a;
                    break;
                case "585_663":
                    o = i + "_585x663." + a;
                    break;
                case "100_113":
                    o = i + "_100x113." + a;
                    break;
                case "50_67":
                    o = i + "_50x67." + a;
                    break;
                case "full":
                default:
                    o = e
                }
                return o = o.replace("image/", "uploads/"), window.cool_mate_settings.MEDIA_URL + o
            }
        }, theme.slugify = function (e) {
            e = e.toString().toLowerCase().trim();
            return [{
                to: "a",
                from: "[ÀÁÂÃÄÅÆĀĂĄẠẢẤẦẨẪẬẮẰẲẴẶ]"
            }, {
                to: "c",
                from: "[ÇĆĈČ]"
            }, {
                to: "d",
                from: "[ÐĎĐÞ]"
            }, {
                to: "e",
                from: "[ÈÉÊËĒĔĖĘĚẸẺẼẾỀỂỄỆ]"
            }, {
                to: "g",
                from: "[ĜĞĢǴ]"
            }, {
                to: "h",
                from: "[ĤḦ]"
            }, {
                to: "i",
                from: "[ÌÍÎÏĨĪĮİỈỊ]"
            }, {
                to: "j",
                from: "[Ĵ]"
            }, {
                to: "ij",
                from: "[Ĳ]"
            }, {
                to: "k",
                from: "[Ķ]"
            }, {
                to: "l",
                from: "[ĹĻĽŁ]"
            }, {
                to: "m",
                from: "[Ḿ]"
            }, {
                to: "n",
                from: "[ÑŃŅŇ]"
            }, {
                to: "o",
                from: "[ÒÓÔÕÖØŌŎŐỌỎỐỒỔỖỘỚỜỞỠỢǪǬƠ]"
            }, {
                to: "oe",
                from: "[Œ]"
            }, {
                to: "p",
                from: "[ṕ]"
            }, {
                to: "r",
                from: "[ŔŖŘ]"
            }, {
                to: "s",
                from: "[ßŚŜŞŠ]"
            }, {
                to: "t",
                from: "[ŢŤ]"
            }, {
                to: "u",
                from: "[ÙÚÛÜŨŪŬŮŰŲỤỦỨỪỬỮỰƯ]"
            }, {
                to: "w",
                from: "[ẂŴẀẄ]"
            }, {
                to: "x",
                from: "[ẍ]"
            }, {
                to: "y",
                from: "[ÝŶŸỲỴỶỸ]"
            }, {
                to: "z",
                from: "[ŹŻŽ]"
            }, {
                to: "-",
                from: "[·/_,:;']"
            }].forEach(function (t) {
                e = e.replace(new RegExp(t.from, "gi"), t.to)
            }), e.replace(/\s+/g, "-").replace(/[^\w-]+/g, "").replace(/--+/g, "-").replace(/^-+/, "").replace(/-+$/, "")
        }, theme.formatMoney = function (e) {
            if (e) return (e = Number(e).toLocaleString("vi", {
                style: "currency",
                currency: "VND"
            })).replace(/\s/, "").replace("₫", "đ")
        }, theme.isMobile = function () {
            var e, t = !1;
            return e = navigator.userAgent || navigator.vendor || window.opera, (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(e) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(e.substr(0, 4))) && (t = !0), t
        }, theme.scrollTo = function (e) {
            var t = $(e);
            if (!(t.length <= 0)) {
                var o = t.offset().top;
                $("html,body").animate({
                    scrollTop: o
                }, 500)
            }
        }, theme.scrollToStep = function (e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 90,
                o = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 500;
            $(document).on("click", e, function (e) {
                e.preventDefault();
                var a = $(this).attr("href"),
                    i = $(a);
                i.length > 0 && $("body,html").animate({
                    scrollTop: i.offset().top - t
                }, o)
            })
        }, theme.scroll_toggle = function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "toggle",
                t = $("body"),
                o = $("html");
            if ("toggle" === e && (t.toggleClass("stick-scroll"), t.toggleClass("no-scroll")), "remove" === e && (t.removeClass("stick-scroll"), t.removeAttr("style"), o.removeAttr("style")), "add" === e && (t.addClass("stick-scroll"), t.css("overflow", "hidden"), o.css("overflow", "hidden")), "has" === e) return !!t.hasClass("stick-scroll")
        }, theme.bodystick = function () {
            0 == (arguments.length > 0 && void 0 !== arguments[0] && arguments[0]) ? $("body,html").css("oveflow", "hidden") : $("body,html").removeAttr("style")
        }, theme.menu_toggle = function () {
            $(document).on("click", "[data-menu-id]", function (e) {
                e.preventDefault();
                var t = $(this).attr("data-menu-id"),
                    o = $('[data-menu-open="' + t + '"]'),
                    a = $(".site-header").height();
                o.hasClass("menu-mobile-nav--slide") ? ($(this).hasClass("is-active") ? ($(this).removeClass("is-active"), setTimeout(function (e) {
                    $("body").removeClass("stick-scroll")
                }, 100)) : ($("[data-menu-id]").removeClass("is-active"), $(this).addClass("is-active"), $("body").addClass("stick-scroll")), o.siblings(".menu-mobile-nav--slide").slideUp(), o.css("top", a), o.slideToggle()) : (o.siblings(".menu-mobile-nav--slide").slideUp(), $(this).addClass("is-active"), $("[data-menu-id]").removeClass("is-active"), $("[data-menu-open]").removeClass("is-active"), o.addClass("is-active"), $("body").addClass("stick-scroll"))
            }), $(document).on("click", function (e) {
                $(e.target).hasClass("stick-scroll") && ($(".menu-mobile-nav--slide[data-menu-open]").slideUp(), $("[data-menu-open]").removeClass("is-active"), $("[data-menu-id]").removeClass("is-active"), setTimeout(function (e) {
                    $("body").removeClass("stick-scroll")
                }, 100))
            }), $(document).on("click", ".menu-mobile-nav__close", function (e) {
                e.preventDefault(), $(".menu-mobile-nav--slide[data-menu-open]").slideUp(), $("[data-menu-open]").removeClass("is-active"), $("[data-menu-id]").removeClass("is-active"), setTimeout(function (e) {
                    $("body").removeClass("stick-scroll")
                }, 100)
            })
        }, theme.Header = function () {
            var e = document.querySelector(".site-header");
            if (e) {
                var t = 0;
                document.addEventListener("scroll", function () {
                    scrollY > t && scrollY > 50 ? e.classList.add("is-sticky") : e.classList.remove("is-sticky"), t = scrollY
                }), theme.menu_toggle()
            }
        }, theme.AddToCart = function () {
            $("body").on("click", ".product__addtocart", function () {
                var e = $(this).closest(".product").attr("id"),
                    t = $(this).data("variant"),
                    o = $(this).data("quantity"),
                    a = {
                        size: "",
                        color: "",
                        id: t
                    };
                theme.AddItem({
                    product_id: e,
                    options: a,
                    quantity: parseInt(o) > 0 ? o : 1
                })
            })
        }, theme.miniCartToggle = function () {
            $(".mini-cart-toggle").click(function (e) {
                e.preventDefault(), $(".overlay").toggleClass("active"), $(".mini-cart").toggleClass("active")
            })
        }, theme.noScroll = function () {
            $("html, body").toggleClass("no-scroll")
        }, theme.AddBoxItemWithOptions = function () {
            var e = $("body");
            e.on("click", ".product__select-option", function () {
                var e = $(this).closest(".product"),
                    t = e.find(".product__options-list");
                e.parent(".grid__column").siblings(".grid__column").find(".product").removeClass("is-active"), $(".product__options-list").removeClass("is-active"), e.hasClass("is-active") ? e.removeClass("is-active") : e.addClass("is-active"), t.first().addClass("is-active"), t.find("input").prop("checked", !1)
            }), e.on("change", ".product__option", function () {
                var e = $(this).closest(".product__options-list"),
                    t = $(this).data("last"),
                    o = $(this).closest(".product").find(".product__variants").data("variants");
                if (e.removeClass("is-active"), e.next(".product__options-list").addClass("is-active"), t) {
                    var a = $(this).closest(".product"),
                        i = a.attr("id"),
                        n = $(this).closest(".product__variants").find(".product__option input:checked"),
                        s = a.closest(".product-grid").data("step"),
                        r = {};
                    n.map(function (e, t) {
                        var o = (t = $(t)).attr("name");
                        r[o] = t.val()
                    }), a.removeClass("is-active");
                    var c = a.closest(".product-grid").data("box"),
                        l = a.closest(".product-grid").data("collection"),
                        d = a.find(".product__image img").attr("src");
                    if (l && c) theme.AddBoxItem({
                        product_id: i,
                        options: r,
                        box_id: c,
                        collection_id: l,
                        image: d,
                        step_id: s
                    });
                    else {
                        var m, u = "";
                        Object.values(r).forEach(function (e, t) {
                            u = 0 === t ? e : u + "" + e
                        }), (m = o.find(function (e) {
                            var t = e.title;
                            if ((t = (t = (t = t.replace(/\//g, "")).replace(/ /g, "")).trim()) == (u = (u = (u = u.replace(/\//g, "")).replace(/ /g, "")).trim())) return e
                        })) && m.id ? theme.AddItem({
                            product_id: i,
                            options: {
                                id: m.id
                            }
                        }) : (theme.Loading.hide(), theme.PushNotify({
                            message: "Thuộc tính bạn chọn không sẵn có, vui lòng chọn lại!",
                            level: "error"
                        }))
                    }
                }
            })
        }, theme.AddToBox = function () {
            $("body").on("click", ".product__addtobox", function () {
                var e = $(this).closest(".product"),
                    t = e.attr("id"),
                    o = $(this).data("variant"),
                    a = e.closest(".product-grid").data("box"),
                    i = e.closest(".product-grid").data("collection"),
                    n = e.closest(".product-grid").data("step"),
                    s = e.find(".product__image img").attr("src"),
                    r = {
                        size: "",
                        color: "",
                        id: o
                    };
                theme.AddBoxItem({
                    product_id: t,
                    options: r,
                    box_id: a,
                    collection_id: i,
                    image: s,
                    step_id: n
                })
            })
        }, theme.AddBoxItem = function (e) {
            var t = e.options,
                o = e.product_id,
                a = e.box_id,
                i = e.image,
                n = e.step_id,
                s = window.cool_mate_settings.APP_URL + "/box";
            theme.Loading.show();
            var r = {
                _token: window.cool_mate_settings._TOKEN,
                box: a || "",
                collection_id: "step_" + n || "",
                product_id: o,
                quantity: 1,
                options: t,
                box_token: window.cool_mate_settings.BOX_TOKEN
            };
            $.ajax({
                url: s,
                type: "POST",
                data: r,
                dataType: "json"
            }).done(function (e) {
                if (200 === e.code) {
                    var t = e.response.products,
                        s = localStorage.getItem("cm_box_data") ? localStorage.getItem("cm_box_data") : [],
                        r = (s = JSON.parse(s)).find(function (e) {
                            return e.id === Number(n)
                        });
                    r.completed = !0, s[r.id - 1] = r;
                    var c = $(".steps, .steps-list").find('.next-step[data-step="' + n + '"]'),
                        l = $('.box__item[data-step="' + n + '"]'),
                        d = c.find(".step__image img"),
                        m = c.find(".step__remove"),
                        u = $(".items-selected");
                    c.addClass("step--added"), l.addClass("box__item--filled"), d.attr("src", i), m.data("product", o), localStorage.setItem("cm_box_data", JSON.stringify(s));
                    var p = s.filter(function (e) {
                        return !e.completed
                    });
                    if (p.length > 0) {
                        var f = p[0],
                            g = f.id,
                            h = f.slug;
                        theme.loadNextPage(g, h)
                    } else {
                        u.find(".grid").html(""), t.filter(function (e) {
                            return e.box === a
                        }).map(function (e, t) {
                            return u.find(".grid").append(function (e, t) {
                                var o = e.title,
                                    a = e.images,
                                    i = e.seo_alias,
                                    n = e.id,
                                    s = e.collection,
                                    r = e.variants,
                                    c = (window.origin, a ? theme.GetImage(a.src, "s") : ""),
                                    l = s.length > 0 ? s[0] : "",
                                    d = r.title ? '<p class="cart__variant text--center">Bạn chọn: ' + r.title + "</p>" : "",
                                    m = r.title ? '<span class="product__image--size">' + r.title + "</span>" : "";
                                return $('<div class="grid__column">\n                        <div class="product"  data-id="' + n + '" id="' + n + '" data-slug="' + i + '" data-step="' + t + '">\n                            <div class="product__inner">\n                            <span class="product__remove" data-step="' + t + '" data-collection="' + l + '" data-id="' + n + '">\n                                <svg xmlns="http://www.w3.org/2000/svg" width="29.242" height="29.243" viewBox="0 0 29.242 29.243">\n                                    <g transform="translate(2.121 2.121)">\n                                        <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="3px" x2="35.355" transform="translate(0 0) rotate(45)"/>\n                                        <line  fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="3px" x2="35.355" transform="translate(25 0) rotate(135)"/>\n                                    </g>\n                                </svg>\n                            </span>\n                                <div class="product__image">\n                                    ' + m + '\n                                    <a href="#" class="open-preview">\n                                        <img src="' + c + '"\n                                            alt="' + o + '">\n                                    </a>\n                                </div>\n                                <h3 class="product__title text--center">\n                                    <a href="#" class="open-preview">' + o + "</a>\n                                </h3>\n                                " + d + "\n                            </div>\n                        </div>\n                    </div>")
                            }(e, t + 1))
                        });
                        var v = document.querySelector(".site-main");
                        v.setAttribute("data-scrollable", !1), theme.isMobile() ? ($(".builder-footer .add-to-cart").addClass("is-active"), $(".builder-header").addClass("hidden"), $(".box__item--full").addClass("box__item--filled"), theme.SmoothScroll(0, window)) : theme.SmoothScroll(0, v), $(".sidebar .btn-reset").hide(), u.removeClass("hidden"), $(".products-list").addClass("hidden"), $(".filter-list").addClass("hidden"), theme.Loading.hide(), window.completed = !0
                    }
                    $('.grid[data-step="' + n + '"]').find(".product--added").removeClass("product--added"), $('.grid[data-step="' + n + '"]').find("#" + o).addClass("product--added")
                }
                400 === e.code && theme.PushNotify({
                    message: "Thuộc tính bạn chọn không sẵn có, vui lòng chọn lại!",
                    level: "error"
                })
            }).fail(function () {
                theme.PushNotify({
                    message: "Thuộc tính bạn chọn không sẵn có, vui lòng chọn lại!",
                    level: "error"
                })
            }).always(function () {
                theme.Loading.hide()
            })
        }, theme.miniCartItem = function () {
            var e = $(".mini-cart");
            if (e.length > 0) {
                var t = window.cool_mate_settings.APP_URL + "/cart-item";
                $.ajax({
                    url: t,
                    type: "GET",
                    cache: !1
                }).done(function (t) {
                    "" !== t && e.html(t)
                }).fail(function () {}).always(function () {
                    theme.Loading.hide()
                })
            }
        }, theme.AddItem = function (e) {
            var t = e.options,
                o = e.product_id,
                a = e.quantity,
                i = e.reload,
                n = e.url_cart,
                s = window.cool_mate_settings.APP_URL + "/cart";
            theme.Loading.show();
            var r = {
                _token: window.cool_mate_settings._TOKEN,
                quantity: a || 1,
                options: t,
                product_id: o,
                device_token: window.cool_mate_settings.DEVICE_TOKEN
            };
            fbq("track", "AddToCart"), $.ajax({
                url: s,
                type: "POST",
                data: r,
                dataType: "json"
            }).done(function (e) {
                var t = e.code;
                if (e.response.error) return theme.PushNotify({
                    message: e.response.error,
                    level: "error"
                }), !1;
                if (200 === t) {
                    if (theme.PushNotify({
                            message: "Sản phẩm đã được thêm vào giỏ hàng!",
                            level: "success",
                            url: n
                        }), theme.miniCartItem(), e.response) {
                        var o = e.response.cart_data,
                            a = o.number_item;
                        if (1 == cool_mate_settings.TET_CAMPAIGN && theme.setCookie("TET_CAMPAIGN_MAX_PRICE", window.get(window.maxBy(o.products, "regular_price"), "regular_price")), 1 == cool_mate_settings.BG_ONE_CAMPAIGN) {
                            var s = e.response.bgOneMaxPrice;
                            localStorage.setItem("BG_ONE_CAMPAIGN", s), $(".product__prices--regular").each(function (e, t) {
                                if (1 != $(t).data("in-sale")) {
                                    var o = $(t).data("price"),
                                        a = $(t).next();
                                    if (parseInt(o) <= parseInt(s) && ($(t).addClass("product__prices--promotion").html("0đ"), $(a).remove(), (a = $('<span className="product__prices--compare"></span>')).data("compare-price", o), a.html('<del class="product__prices--compare">' + theme.formatMoney(o) + '</del><span class="text--primary"> -100%</span>'), $(t).parent().append(a)), -1 === parseInt(s) && a.length > 0) {
                                        var i = $(a).data("compare-price");
                                        $(t).html(theme.formatMoney(i)), $(a).remove()
                                    }
                                }
                            })
                        }
                        theme.UpdateQuantity(a)
                    }!0 === i && setTimeout(function (e) {
                        location.reload()
                    }, 100)
                } else theme.PushNotify({
                    message: "Thuộc tính bạn chọn không sẵn có, vui lòng chọn lại!",
                    level: "error"
                })
            }).fail(function () {
                theme.PushNotify({
                    message: "Có lỗi xảy ra, vui lòng thử lại!",
                    level: "error"
                })
            }).always(function () {
                theme.Loading.hide(), cool_mate_settings.RELOAD_AFTER_AJAX_CALLED && setInterval(function () {
                    window.location.href.includes("/collection") && "/collection/excool" !== window.location.pathname && window.location.reload()
                }, 1500)
            })
        }, theme.UpdateBoxData = function (e, t) {
            var o = localStorage.getItem("cm_box_data") ? localStorage.getItem("cm_box_data") : [],
                a = (o = JSON.parse(o)).find(function (t) {
                    return t.id === e
                });
            a.completed = t, o[a.id - 1] = a, localStorage.setItem("cm_box_data", JSON.stringify(o))
        }, theme.SelectBox = function () {
            $(".btn-select-box").on("click", function () {
                var e = $(this).attr("data-box-id");
                localStorage.setItem("box_id", e), theme.setCookie("box_id", e), fbq("track", "CustomizeProduct"), window.location.href = $(this).attr("data-url")
            })
        }, theme.UpdateQuantity = function (e) {
            $(".site-header__cart").addClass("site-header__cart--active"), $(".site-header__cartcount").text(e)
        }, theme.PushNotify = function (e) {
            var t = e.message,
                o = e.delay,
                a = e.level,
                i = e.url;
            o || (o = 3), a || (a = "success");
            var n = $(".notify"),
                s = n.find(".notify__message"),
                r = n.find(".btn");
            n.removeClass("success error");
            var c = function () {
                n.removeClass("is-active success error"), setTimeout(function () {
                    s.html("")
                }, 200)
            };
            i = void 0 != i ? i : "/cart", r.attr("href", i), s.html(t), "error" === a && r.addClass("hidden"), "success" === a && r.hasClass("hidden") && r.removeClass("hidden"), "message" === a && (r.addClass("hidden"), n.addClass("success")), "copy" === a && (n.addClass("success"), r.html("Áp dụng ngay"), void 0 !== e.code && r.attr("href", "/wishlistcoupon/?coupon=" + e.code)), n.addClass("is-active " + a), setTimeout(function () {
                c()
            }, 1e3 * o), n.find(".notify__close").on("click", function () {
                c()
            })
        }, theme.Loading = (o = $(".loading"), {
            show: function () {
                o.addClass("is-active")
            },
            hide: function () {
                o.removeClass("is-active")
            }
        }), theme.SmoothScroll = function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0;
            (arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : window).scroll({
                top: e,
                left: 0,
                behavior: "smooth"
            })
        }, theme.Slider = function () {
            0 !== $(".slider-wrapper").length && $(".slider-wrapper").slick({
                prevArrow: '<button type="button" class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"><g transform="rotate(180 11 11)"><circle cx="11" cy="11" r="11" data-name="Ellipse 39" fill="#fff"/><g data-name="next (1)"><path d="M11 0a11 11 0 1 0 11 11A11 11 0 0 0 11 0zm3.143 12.917L10.08 16.98l-1.918-1.917L12.226 11 8.162 6.937 10.08 5.02l4.063 4.063L16.06 11z" data-name="Path 195" fill="currentColor"/></g></g></svg></button>',
                nextArrow: '<button type="button" class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"><g><circle cx="11" cy="11" r="11" data-name="Ellipse 39" fill="#fff"/><g data-name="next (1)"><path d="M11 0a11 11 0 1 0 11 11A11 11 0 0 0 11 0zm3.143 12.917L10.08 16.98l-1.918-1.917L12.226 11 8.162 6.937 10.08 5.02l4.063 4.063L16.06 11z" data-name="Path 195" fill="currentColor"/></g></g></svg></button>'
            })
        }, theme.quantityBox = function () {
            $(".quantity").length < 1 || $(".quantity").each(function () {
                var e = $(this),
                    t = e.find('input[type="number"]'),
                    o = e.find(".quantity__increase"),
                    a = e.find(".quantity__decrease"),
                    i = t.attr("min"),
                    n = t.attr("max");
                o.click(function () {
                    var o = void 0,
                        a = parseFloat(t.val());
                    o = a >= n ? a : a + 1, e.find("input").val(o), e.find("input").trigger("change")
                }), a.click(function () {
                    var o = void 0,
                        a = parseFloat(t.val());
                    o = a <= i ? a : a - 1, e.find("input").val(o), e.find("input").trigger("change")
                })
            })
        }, theme.validateEmail = function (e) {
            return /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(e)
        }, theme.formInputRange = function () {
            var e = !1,
                t = $(".form-control--range").attr("data-range"),
                o = theme.isMobile() ? "touchstart" : "mousedown",
                a = theme.isMobile() ? "touchend" : "mouseup",
                i = theme.isMobile() ? "touchmove" : "mousemove";
            $(".form-control--range").on(o, function (o) {
                e = !0, t = $(this).attr("data-range")
            }), $(".form-control--range").on(i, function (o) {
                if (1 == e) {
                    var a = $(".form-control--range-label[data-range=" + t + "]"),
                        i = a.attr("data-value"),
                        n = $(this).val() + i;
                    a.html(n)
                }
            }), $(".form-control--range").on(a, function (t) {
                e = !1
            }), $(".form-control--range").on("change", function (e) {
                var o = $(".form-control--range-label[data-range=" + t + "]"),
                    a = o.attr("data-value"),
                    i = $(this).val() + a;
                o.html(i)
            })
        }, theme.menuToggleTablet = function () {
            var e = function (e) {
                $(".site-header__toggle > a").removeClass("close"), $(".site-header__menu").removeClass("is-active"), $(".site-wrapper").removeClass("on-toggle")
            };
            $(document).on("click", ".site-header__toggle > a", function (e) {
                e.preventDefault(), $(this).toggleClass("close"), $(".site-header__menu").toggleClass("is-active"), $(".site-wrapper").toggleClass("on-toggle")
            }), $(window).on("scroll", function (t) {
                e()
            }), $(document).on("click", function (t) {
                $(".site-header__menu").hasClass("is-active") && $(".site-wrapper").hasClass("on-toggle") && $(t.target).hasClass("on-toggle") && e()
            }), $(document).on("click", ".site-header__toggle-close", function (t) {
                t.preventDefault(), e()
            })
        }, theme.init = function () {
            theme.Header(), theme.AddToCart(), theme.miniCartToggle(), theme.AddToBox(), theme.AddBoxItemWithOptions(), theme.SelectBox(), theme.Slider(), theme.quantityBox(), theme.formInputRange(), theme.menuToggleTablet()
        }, document.addEventListener("DOMContentLoaded", function () {
            $(theme.init)
        }), cm.isNewAccount = function (e) {
            var t = window.cool_mate_settings.APP_URL + "/c";
            $.ajax({
                url: t,
                type: "GET",
                dataType: "json"
            }).done(function (t) {
                localStorage.setItem("checknewaccount", !0), e(t)
            })
        }, $(document).ready(function () {
            localStorage.getItem("checknewaccount", !1);
            if (0 == cool_mate_settings._LOGGED) {
                var e = localStorage.getItem("cart_email"),
                    t = localStorage.getItem("cart_phone");
                e || t ? localStorage.setItem("is_new_user", !1) : localStorage.setItem("is_new_user", !0)
            } else cm.isNewAccount(function (e) {
                1 == e.success ? localStorage.setItem("is_new_user", !0) : localStorage.setItem("is_new_user", !1)
            })
        })
    },
    Bf93: function (e, t) {},
    DfjT: function (e, t) {},
    FBUU: function (e, t) {},
    HPod: function (e, t) {},
    IXbm: function (e, t) {},
    Iz2b: function (e, t) {},
    NlZ4: function (e, t) {},
    SKO8: function (e, t) {},
    WdEv: function (e, t) {},
    XFz9: function (e, t) {},
    b3PD: function (e, t) {},
    bVcf: function (e, t) {},
    bnk9: function (e, t) {},
    "eZ9/": function (e, t) {},
    fioS: function (e, t) {},
    htRy: function (e, t) {},
    kbN4: function (e, t) {},
    otv5: function (e, t) {},
    rPHD: function (e, t) {},
    yUHB: function (e, t) {},
    zXHK: function (e, t) {}
});
