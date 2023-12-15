/*!
 * toc - jQuery Table of Contents Plugin
 * v0.3.2
 * http://projects.jga.me/toc/
 * copyright Greg Allen 2014
 * MIT License
*/ /*!
 * smooth-scroller - Javascript lib to handle smooth scrolling
 * v0.1.2
 * https://github.com/firstandthird/smooth-scroller
 * copyright First+Third 2014
 * MIT License
*/ /*!
 * itoc - Javascript lib to handle smooth scrolling
 * Plugin: itoc
 * Dependence: toc
 * Author: Yufei Li
 * Time: 2015-4-21
*/ !function(t){t.fn.smoothScroller=function(o){o=t.extend({},t.fn.smoothScroller.defaults,o);var e=t(this);return t(o.scrollEl).animate({scrollTop:e.offset().top-t(o.scrollEl).offset().top-o.offset},o.speed,o.ease,function(){var t=e.attr("id");t.length&&(history.pushState?history.pushState(null,null,"#"+t):document.location.hash=t),e.trigger("smoothScrollerComplete")}),this},t.fn.smoothScroller.defaults={speed:400,ease:"swing",scrollEl:"body,html",offset:0},t("body").on("click","[data-smoothscroller]",function(o){o.preventDefault();var e=t(this).attr("href");0===e.indexOf("#")&&t(e).smoothScroller()})}(jQuery),function(t){var o={};t.fn.toc=function(o){var e,n=this,r=t.extend({},jQuery.fn.toc.defaults,o),l=t(r.container),s=t(r.selectors,l),i=[],a=r.activeClass,c=function(o,e){if(r.smoothScrolling&&"function"==typeof r.smoothScrolling){o.preventDefault();var l=t(o.target).attr("href");r.smoothScrolling(l,r,e)}t("li",n).removeClass(a),t(o.target).parent().addClass(a)},f=function(o){e&&clearTimeout(e),e=setTimeout(function(){for(var o,e=t(window).scrollTop(),l=Number.MAX_VALUE,s=0,c=0,f=i.length;c<f;c++){var h=Math.abs(i[c]-e);h<l&&(s=c,l=h)}t("li",n).removeClass(a),o=t("li:eq("+s+")",n).addClass(a),r.onHighlight(o)},50)};return r.highlightOnScroll&&(t(window).bind("scroll",f),f()),this.each(function(){var o=t(this),e=t(r.listType);s.each(function(n,l){var s=t(l);i.push(s.offset().top-r.highlightOffset);var a=r.anchorName(n,l,r.prefix);l.id!==a&&t("<span/>").attr("id",a).insertBefore(s);var h=t("<a/>").text(r.headerText(n,l,s)).attr("href","#"+a).bind("click",function(e){t(window).unbind("scroll",f),c(e,function(){t(window).bind("scroll",f)}),o.trigger("selected",t(this).attr("href"))}),u=t("<li/>").addClass(r.itemClass(n,l,s,r.prefix)).append(h);e.append(u)}),o.html(e)})},jQuery.fn.toc.defaults={container:"body",listType:"<ul/>",selectors:"h1,h2,h3",smoothScrolling:function(o,e,n){t(o).smoothScroller({offset:e.scrollToOffset}).on("smoothScrollerComplete",function(){n()})},scrollToOffset:0,prefix:"toc",activeClass:"toc-active",onHighlight:function(){},highlightOnScroll:!0,highlightOffset:100,anchorName:function(e,n,r){if(n.id.length)return n.id;var l=t(n).text().replace(/[^a-z0-9]/ig," ").replace(/\s+/g,"-").toLowerCase();if(o[l]){for(var s=2;o[l+s];)s++;l=l+"-"+s}return o[l]=!0,r+"-"+l},headerText:function(t,o,e){return e.text()},itemClass:function(t,o,e,n){return n+"-"+e[0].tagName.toLowerCase()}}}(jQuery),function(t){t.fn.itoc=function(o){var e=t.extend({},t.fn.itoc.defaults,o);!1!==e.auto_num&&(console.log(e.auto_num),console.log(!1!==e.auto_num),e.headerText=function(t,o,n){var r=jQuery(o).prop("tagName");for(tag in e.statistic[r]+=1,e.statistic)tag>r&&(e.statistic[tag]=0);var l=jQuery(o).text(),s=e.symbol_toc[r][e.statistic[r]];return jQuery(o).text(s+". "+l),n.text()}),t(this).toc(e)},t.fn.itoc.defaults={selectors:"h2, h3",statistic:{H2:0,H3:0,H4:0},auto_num:!0,symbol_toc:{H2:["零","一","二","三","四","五","六","七","八","九"],H3:["0","1","2","3","4","5","6","7","8","9"],H4:["0)","1)","2)","3)","4)","5)","6)","7)","8)","9)"]}}}(jQuery);