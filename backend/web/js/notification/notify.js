if(typeof jQuery=="undefined")throw new Error("JavaScript requires jQuery");+function(n){"use strict";var t=n.fn.jquery.split(" ")[0].split(".");if(t[0]<2&&t[1]<9||t[0]==1&&t[1]==9&&t[2]<1)throw new Error("JavaScript requires jQuery version 1.9.1 or higher");}(jQuery);+function(n){function t(t){n("body").removeClass("notify-open");n(".notify-backdrop").css("opacity",0);t.data("animation")!=""?(t.addClass(t.data("animation")),setTimeout(function(){n("body").removeClass("notify-open-drop");n(".notify-backdrop").remove();t.remove()},400)):(n(".notify-backdrop").remove(),t.remove())}n.notify=function(t,i){var r=n.extend({delay:3e3,type:"default",align:"center",verticalAlign:"top",blur:.2,close:!1,background:"",color:"","class":"",animation:!0,animationType:"drop",icon:"",buttons:[],buttonFunc:[],buttonAlign:"center",width:"600px"},i),f="",o="",s="",h="",u,e;r.animation&&(f=r.animationType);r.icon!=""&&(h="<i class='icon fa fa-"+r.icon+"'><\/i>");(r.close||r.delay==0)&&(o="<button type='button' class='close' data-close='notify' data-animation='"+f+"'; >×<\/button>",s="notify-dismissible");u=n("<div data-animation='"+f+"' class='notify "+r.align+" "+r.verticalAlign+" "+f+" "+s+"'><div class='message'>"+h+t+"<\/div>"+o+"<\/div>");r.background!=""?u.css("background",r.background):r.class==""?u.addClass("notify-"+r.type):u.addClass(r.class);r.color!=""&&u.css("color",r.color);f=="drop"&&n("body").addClass("notify-open-drop");r.verticalAlign=="middle"?(u.css("visibility","hidden"),n("body").append(u),u.css({"margin-top":u.innerHeight()/-2,visibility:"visible"})):n("body").append(u);r.animation&&setTimeout(function(){u.removeClass(f)},100);r.delay==0?(e=n("<div class='notify-backdrop'><\/div>"),n("body").append(e).addClass("notify-open"),setTimeout(function(){e.css("opacity",r.blur)},100)):setTimeout(function(){r.animation?(u.addClass(r.animationType),setTimeout(function(){r.animation=="drop"&&n("body").removeClass("notify-open-drop");u.remove()},400)):u.remove()},r.delay)};n(document).on("click",".notify-backdrop",function(){t(n(".notify"))});n(document).on("click",".notify-buttons > button",function(){t(n(this).parent().parent())});n(document).on("click","[data-close='notify']",function(){t(n(this).parent())})}(jQuery);var q=null;window.PR_SHOULD_USE_CONTINUATION=!0,function(){function w(n){function u(n){var i=n.charCodeAt(0),t;return i!==92?i:(t=n.charAt(1),(i=a[t])?i:"0"<=t&&t<="7"?parseInt(n.substring(1),8):t==="u"||t==="x"?parseInt(n.substring(2),16):n.charCodeAt(1))}function f(n){return n<32?(n<16?"\\x0":"\\x")+n.toString(16):(n=String.fromCharCode(n),(n==="\\"||n==="-"||n==="["||n==="]")&&(n="\\"+n),n)}function h(n){for(var t,s,o=n.substring(1,n.length-1).match(/\\u[\dA-Fa-f]{4}|\\x[\dA-Fa-f]{2}|\\[0-3][0-7]{0,2}|\\[0-7]{1,2}|\\[\S\s]|[^\\]/g),n=[],i=[],h=o[0]==="^",r=h?1:0,e=o.length;r<e;++r)t=o[r],/\\[bdsw]/i.test(t)?n.push(t):(t=u(t),r+2<e&&"-"===o[r+1]?(s=u(o[r+2]),r+=2):s=t,i.push([t,s]),s<65||t>122||(s<65||t>90||i.push([Math.max(65,t)|32,Math.min(s,90)|32]),s<97||t>122||i.push([Math.max(97,t)&-33,Math.min(s,122)&-33])));for(i.sort(function(n,t){return n[0]-t[0]||t[1]-n[1]}),o=[],t=[NaN,NaN],r=0;r<i.length;++r)e=i[r],e[0]<=t[1]+1?t[1]=Math.max(t[1],e[1]):o.push(t=e);for(i=["["],h&&i.push("^"),i.push.apply(i,n),r=0;r<o.length;++r)e=o[r],i.push(f(e[0])),e[1]>e[0]&&(e[1]+1>e[0]&&i.push("-"),i.push(f(e[1])));return i.push("]"),i.join("")}function c(n){for(var i,r=n.source.match(/\[(?:[^\\\]]|\\[\S\s])*]|\\u[\dA-Fa-f]{4}|\\x[\dA-Fa-f]{2}|\\\d+|\\[^\dux]|\(\?[!:=]|[()^]|[^()[\\^]+/g),o=r.length,f=[],t=0,u=0;t<o;++t)i=r[t],i==="("?++u:"\\"===i.charAt(0)&&(i=+i.substring(1))&&i<=u&&(f[i]=-1);for(t=1;t<f.length;++t)-1===f[t]&&(f[t]=++l);for(u=t=0;t<o;++t)i=r[t],i==="("?(++u,f[u]===void 0&&(r[t]="(?:")):"\\"===i.charAt(0)&&(i=+i.substring(1))&&i<=u&&(r[t]="\\"+f[u]);for(u=t=0;t<o;++t)"^"===r[t]&&"^"!==r[t+1]&&(r[t]="");if(n.ignoreCase&&e)for(t=0;t<o;++t)i=r[t],n=i.charAt(0),i.length>=2&&n==="["?r[t]=h(i):n!=="\\"&&(r[t]=i.replace(/[A-Za-z]/g,function(n){return n=n.charCodeAt(0),"["+String.fromCharCode(n&-33,n|32)+"]"}));return r.join("")}for(var t,l=0,e=!1,r=!1,i=0,o=n.length;i<o;++i)if(t=n[i],t.ignoreCase)r=!0;else if(/[a-z]/i.test(t.source.replace(/\\u[\da-f]{4}|\\x[\da-f]{2}|\\[^UXux]/gi,""))){e=!0;r=!1;break}for(var a={b:8,t:9,n:10,v:11,f:12,r:13},s=[],i=0,o=n.length;i<o;++i){if(t=n[i],t.global||t.multiline)throw Error(""+t);s.push("(?:"+c(t)+")")}return RegExp(s.join("|"),r?"gi":"g")}function b(n){function e(n){switch(n.nodeType){case 1:if(s.test(n.className))break;for(var r=n.firstChild;r;r=r.nextSibling)e(r);r=n.nodeName;("BR"===r||"LI"===r)&&(u[t]="\n",i[t<<1]=f++,i[t++<<1|1]=n);break;case 3:case 4:r=n.nodeValue;r.length&&(r=o?r.replace(/\r\n?/g,"\n"):r.replace(/[\t\n\r ]+/g," "),u[t]=r,i[t<<1]=f,f+=r.length,i[t++<<1|1]=n)}}var s=/(?:^|\s)nocode(?:\s|$)/,u=[],f=0,i=[],t=0,r,o;return n.currentStyle?r=n.currentStyle.whiteSpace:window.getComputedStyle&&(r=document.defaultView.getComputedStyle(n,q).getPropertyValue("white-space")),o=r&&"pre"===r.substring(0,3),e(n),{a:u.join("").replace(/\n$/,""),c:i}}function e(n,t,i,r){t&&(n={a:t,d:n},i(n),r.push.apply(r,n.e))}function i(n,t){function i(n){for(var c,p,w,v=n.d,y=[v,"pln"],k=0,d=n.a.match(u)||[],g={},b=0,nt=d.length;b<nt;++b){var l=d[b],h=g[l],a=void 0,o;if(typeof h=="string")o=!1;else{if(c=r[l.charAt(0)],c)a=l.match(c[1]),h=c[0];else{for(o=0;o<f;++o)if(c=t[o],a=l.match(c[1])){h=c[0];break}a||(h="pln")}!(o=h.length>=5&&"lang-"===h.substring(0,5))||a&&typeof a[1]=="string"||(o=!1,h="src");o||(g[l]=h)}c=k;k+=l.length;o?(o=a[1],p=l.indexOf(o),w=p+o.length,a[2]&&(w=l.length-a[2].length,p=w-o.length),h=h.substring(5),e(v+c,l.substring(0,p),i,y),e(v+c+p,o,s(h,o),y),e(v+c+w,l.substring(w),i,y)):y.push(v+c,h)}n.e=y}var r={},u,f;return function(){for(var i,f,s,h=n.concat(t),e=[],c={},o=0,l=h.length;o<l;++o){if(i=h[o],f=i[3],f)for(s=f.length;--s>=0;)r[f.charAt(s)]=i;i=i[1];f=""+i;c.hasOwnProperty(f)||(e.push(i),c[f]=q)}e.push(/[\S\s]/);u=w(e)}(),f=t.length,i}function t(n){var r=[],t=[],u;return n.tripleQuotedStrings?r.push(["str",/^(?:'''(?:[^'\\]|\\[\S\s]|''?(?=[^']))*(?:'''|$)|"""(?:[^"\\]|\\[\S\s]|""?(?=[^"]))*(?:"""|$)|'(?:[^'\\]|\\[\S\s])*(?:'|$)|"(?:[^"\\]|\\[\S\s])*(?:"|$))/,q,"'\""]):n.multiLineStrings?r.push(["str",/^(?:'(?:[^'\\]|\\[\S\s])*(?:'|$)|"(?:[^"\\]|\\[\S\s])*(?:"|$)|`(?:[^\\`]|\\[\S\s])*(?:`|$))/,q,"'\"`"]):r.push(["str",/^(?:'(?:[^\n\r'\\]|\\.)*(?:'|$)|"(?:[^\n\r"\\]|\\.)*(?:"|$))/,q,"\"'"]),n.verbatimStrings&&t.push(["str",/^@"(?:[^"]|"")*(?:"|$)/,q]),u=n.hashComments,u&&(n.cStyleComments?(u>1?r.push(["com",/^#(?:##(?:[^#]|#(?!##))*(?:###|$)|.*)/,q,"#"]):r.push(["com",/^#(?:(?:define|elif|else|endif|error|ifdef|include|ifndef|line|pragma|undef|warning)\b|[^\n\r]*)/,q,"#"]),t.push(["str",/^<(?:(?:(?:\.\.\/)*|\/?)(?:[\w-]+(?:\/[\w-]+)+)?[\w-]+\.h|[a-z]\w*)>/,q])):r.push(["com",/^#[^\n\r]*/,q,"#"])),n.cStyleComments&&(t.push(["com",/^\/\/[^\n\r]*/,q]),t.push(["com",/^\/\*[\S\s]*?(?:\*\/|$)/,q])),n.regexLiterals&&t.push(["lang-regex",/^(?:^^\.?|[!+-]|!=|!==|#|%|%=|&|&&|&&=|&=|\(|\*|\*=|\+=|,|-=|->|\/|\/=|:|::|;|<|<<|<<=|<=|=|==|===|>|>=|>>|>>=|>>>|>>>=|[?@[^]|\^=|\^\^|\^\^=|{|\||\|=|\|\||\|\|=|~|break|case|continue|delete|do|else|finally|instanceof|return|throw|try|typeof)\s*(\/(?=[^*/])(?:[^/[\\]|\\[\S\s]|\[(?:[^\\\]]|\\[\S\s])*(?:]|$))+\/)/]),(u=n.types)&&t.push(["typ",u]),n=(""+n.keywords).replace(/^ | $/g,""),n.length&&t.push(["kwd",RegExp("^(?:"+n.replace(/[\s,]+/g,"|")+")\\b"),q]),r.push(["pln",/^\s+/,q," \r\n\t "]),t.push(["lit",/^@[$_a-z][\w$@]*/i,q],["typ",/^(?:[@_]?[A-Z]+[a-z][\w$@]*|\w+_t\b)/,q],["pln",/^[$_a-z][\w$@]*/i,q],["lit",/^(?:0x[\da-f]+|(?:\d(?:_\d+)*\d*(?:\.\d*)?|\.\d\+)(?:e[+-]?\d+)?)[a-z]*/i,q,"0123456789"],["pln",/^\\[\S\s]?/,q],["pun",/^.[^\s\w"-$'./@\\`]*/,q]),i(r,t)}function o(n,t){function o(n){var t,i,r;switch(n.nodeType){case 1:if(c.test(n.className))break;if("BR"===n.nodeName)s(n),n.parentNode&&n.parentNode.removeChild(n);else for(n=n.firstChild;n;n=n.nextSibling)o(n);break;case 3:case 4:h&&(t=n.nodeValue,i=t.match(l),i&&(r=t.substring(0,i.index),n.nodeValue=r,(t=t.substring(i.index+i[0].length))&&n.parentNode.insertBefore(f.createTextNode(t),n.nextSibling),s(n),r||n.parentNode.removeChild(n)))}}function s(n){function i(n,t){var e=t?n.cloneNode(!1):n,r=n.parentNode,f,u;if(r)for(r=i(r,1),f=n.nextSibling,r.appendChild(e),u=f;u;u=f)f=u.nextSibling,r.appendChild(u);return e}for(;!n.nextSibling;)if(n=n.parentNode,!n)return;for(var n=i(n.nextSibling,0),t;(t=n.parentNode)&&t.nodeType===1;)n=t;u.push(n)}var c=/(?:^|\s)nocode(?:\s|$)/,l=/\r\n?|\n/,f=n.ownerDocument,i,h,u,r,e;for(n.currentStyle?i=n.currentStyle.whiteSpace:window.getComputedStyle&&(i=f.defaultView.getComputedStyle(n,q).getPropertyValue("white-space")),h=i&&"pre"===i.substring(0,3),i=f.createElement("LI");n.firstChild;)i.appendChild(n.firstChild);for(u=[i],r=0;r<u.length;++r)o(u[r]);t===(t|0)&&u[0].setAttribute("value",t);e=f.createElement("OL");e.className="linenums";for(var a=Math.max(0,t-1|0)||0,r=0,v=u.length;r<v;++r)i=u[r],i.className="L"+(r+a)%10,i.firstChild||i.appendChild(f.createTextNode(" ")),e.appendChild(i);n.appendChild(e)}function n(n,t){for(var i,r=t.length;--r>=0;)i=t[r],f.hasOwnProperty(i)?window.console&&console.warn("cannot override language handler %s",i):f[i]=n}function s(n,t){return n&&f.hasOwnProperty(n)||(n=/^\s*</.test(t)?"default-markup":"default-code"),f[n]}function h(n){var g=n.g,r,u,f,i,k,c,d;try{r=b(n.h);u=r.a;n.a=u;n.c=r.c;n.d=0;s(g,u)(n);var it=/\bMSIE\b/.test(navigator.userAgent),g=/\n/g,p=n.a,w=p.length,r=0,l=n.c,rt=l.length,u=0,t=n.e,h=t.length,n=0;for(t[h]=w,i=f=0;i<h;)t[i]!==t[i+2]?(t[f++]=t[i++],t[f++]=t[i++]):i+=2;for(h=f,i=f=0;i<h;){for(var ut=t[i],nt=t[i+1],o=i+2;o+2<=h&&t[o+1]===nt;)o+=2;t[f++]=ut;t[f++]=nt;i=o}for(t.length=f;u<rt;){var a=l[u+2]||w,tt=t[n+2]||w,o=Math.min(a,tt),e=l[u+1],v;e.nodeType!==1&&(v=p.substring(r,o))&&(it&&(v=v.replace(g,"\r")),e.nodeValue=v,k=e.ownerDocument,c=k.createElement("SPAN"),c.className=t[n+1],d=e.parentNode,d.replaceChild(c,e),c.appendChild(e),r<a&&(l[u+1]=e=k.createTextNode(p.substring(o,a)),d.insertBefore(e,c.nextSibling)));r=o;r>=a&&(u+=2);r>=tt&&(n+=2)}}catch(y){"console"in window&&console.log(y&&y.stack?y.stack:y)}}var r=["break,continue,do,else,for,if,return,while"],u=[[r,"auto,case,char,const,default,double,enum,extern,float,goto,int,long,register,short,signed,sizeof,static,struct,switch,typedef,union,unsigned,void,volatile"],"catch,class,delete,false,import,new,operator,private,protected,public,this,throw,true,try,typeof"],c=[u,"alignof,align_union,asm,axiom,bool,concept,concept_map,const_cast,constexpr,decltype,dynamic_cast,explicit,export,friend,inline,late_check,mutable,namespace,nullptr,reinterpret_cast,static_assert,static_cast,template,typeid,typename,using,virtual,where"],l=[u,"abstract,boolean,byte,extends,final,finally,implements,import,instanceof,null,native,package,strictfp,super,synchronized,throws,transient"],a=[l,"as,base,by,checked,decimal,delegate,descending,dynamic,event,fixed,foreach,from,group,implicit,in,interface,internal,into,is,lock,object,out,override,orderby,params,partial,readonly,ref,sbyte,sealed,stackalloc,string,select,uint,ulong,unchecked,unsafe,ushort,var"],u=[u,"debugger,eval,export,function,get,null,set,undefined,var,with,Infinity,NaN"],v=[r,"and,as,assert,class,def,del,elif,except,exec,finally,from,global,import,in,is,lambda,nonlocal,not,or,pass,print,raise,try,with,yield,False,True,None"],y=[r,"alias,and,begin,case,class,def,defined,elsif,end,ensure,false,in,module,next,nil,not,or,redo,rescue,retry,self,super,then,true,undef,unless,until,when,yield,BEGIN,END"],r=[r,"case,done,elif,esac,eval,fi,function,in,local,set,then,until"],p=/^(DIR|FILE|vector|(de|priority_)?queue|list|stack|(const_)?iterator|(multi)?(set|map)|bitset|u?(int|float)\d*)/,k=/\S/,d=t({keywords:[c,a,u,"caller,delete,die,do,dump,elsif,eval,exit,foreach,for,goto,if,import,last,local,my,next,no,our,print,package,redo,require,sub,undef,unless,until,use,wantarray,while,BEGIN,END"+v,y,r],hashComments:!0,cStyleComments:!0,multiLineStrings:!0,regexLiterals:!0}),f={};n(d,["default-code"]);n(i([],[["pln",/^[^<?]+/],["dec",/^<!\w[^>]*(?:>|$)/],["com",/^<\!--[\S\s]*?(?:--\>|$)/],["lang-",/^<\?([\S\s]+?)(?:\?>|$)/],["lang-",/^<%([\S\s]+?)(?:%>|$)/],["pun",/^(?:<[%?]|[%?]>)/],["lang-",/^<xmp\b[^>]*>([\S\s]+?)<\/xmp\b[^>]*>/i],["lang-js",/^<script\b[^>]*>([\S\s]*?)(<\/script\b[^>]*>)/i],["lang-css",/^<style\b[^>]*>([\S\s]*?)(<\/style\b[^>]*>)/i],["lang-in.tag",/^(<\/?[a-z][^<>]*>)/i]]),["default-markup","htm","html","mxml","xhtml","xml","xsl"]);n(i([["pln",/^\s+/,q," \t\r\n"],["atv",/^(?:"[^"]*"?|'[^']*'?)/,q,"\"'"]],[["tag",/^^<\/?[a-z](?:[\w-.:]*\w)?|\/?>$/i],["atn",/^(?!style[\s=]|on)[a-z](?:[\w:-]*\w)?/i],["lang-uq.val",/^=\s*([^\s"'>]*(?:[^\s"'/>]|\/(?=\s)))/],["pun",/^[/<->]+/],["lang-js",/^on\w+\s*=\s*"([^"]+)"/i],["lang-js",/^on\w+\s*=\s*'([^']+)'/i],["lang-js",/^on\w+\s*=\s*([^\s"'>]+)/i],["lang-css",/^style\s*=\s*"([^"]+)"/i],["lang-css",/^style\s*=\s*'([^']+)'/i],["lang-css",/^style\s*=\s*([^\s"'>]+)/i]]),["in.tag"]);n(i([],[["atv",/^[\S\s]+/]]),["uq.val"]);n(t({keywords:c,hashComments:!0,cStyleComments:!0,types:p}),["c","cc","cpp","cxx","cyc","m"]);n(t({keywords:"null,true,false"}),["json"]);n(t({keywords:a,hashComments:!0,cStyleComments:!0,verbatimStrings:!0,types:p}),["cs"]);n(t({keywords:l,cStyleComments:!0}),["java"]);n(t({keywords:r,hashComments:!0,multiLineStrings:!0}),["bsh","csh","sh"]);n(t({keywords:v,hashComments:!0,multiLineStrings:!0,tripleQuotedStrings:!0}),["cv","py"]);n(t({keywords:"caller,delete,die,do,dump,elsif,eval,exit,foreach,for,goto,if,import,last,local,my,next,no,our,print,package,redo,require,sub,undef,unless,until,use,wantarray,while,BEGIN,END",hashComments:!0,multiLineStrings:!0,regexLiterals:!0}),["perl","pl","pm"]);n(t({keywords:y,hashComments:!0,multiLineStrings:!0,regexLiterals:!0}),["rb"]);n(t({keywords:u,cStyleComments:!0,regexLiterals:!0}),["js"]);n(t({keywords:"all,and,by,catch,class,else,extends,false,finally,for,if,in,is,isnt,loop,new,no,not,null,of,off,on,or,return,super,then,true,try,unless,until,when,while,yes",hashComments:3,cStyleComments:!0,multilineStrings:!0,tripleQuotedStrings:!0,regexLiterals:!0}),["coffee"]);n(i([],[["str",/^[\S\s]+/]]),["regex"]);window.prettyPrintOne=function(n,t,i){var r=document.createElement("PRE");return r.innerHTML=n,i&&o(r,i),h({g:t,i:i,h:r}),r.innerHTML};window.prettyPrint=function(n){function c(){for(var l,e,y,r,v,p,f,w=window.PR_SHOULD_USE_CONTINUATION?t.now()+250:Infinity;i<u.length&&t.now()<w;i++)if(l=u[i],e=l.className,e.indexOf("prettyprint")>=0){if(e=e.match(s),r=!e){for(r=l,f=void 0,v=r.firstChild;v;v=v.nextSibling)p=v.nodeType,f=p===1?f?r:v:p===3?k.test(v.nodeValue)?r:f:f;r=(y=f===r?void 0:f)&&"CODE"===y.tagName}for(r&&(e=y.className.match(s)),e&&(e=e[1]),r=!1,f=l.parentNode;f;f=f.parentNode)if((f.tagName==="pre"||f.tagName==="code"||f.tagName==="xmp")&&f.className&&f.className.indexOf("prettyprint")>=0){r=!0;break}r||((r=(r=l.className.match(/\blinenums\b(?::(\d+))?/))?r[1]&&r[1].length?+r[1]:!0:!1)&&o(l,r),a={g:e,h:l,i:r},h(a))}i<u.length?setTimeout(c,250):n&&n()}for(var e,l,t,i,a,s,r=[document.getElementsByTagName("pre"),document.getElementsByTagName("code"),document.getElementsByTagName("xmp")],u=[],f=0;f<r.length;++f)for(e=0,l=r[f].length;e<l;++e)u.push(r[f][e]);r=q;t=Date;t.now||(t={now:function(){return+new Date}});i=0;s=/\blang(?:uage)?-([\w.]+)(?!\S)/;c()};window.PR={createSimpleLexer:i,registerLangHandler:n,sourceDecorator:t,PR_ATTRIB_NAME:"atn",PR_ATTRIB_VALUE:"atv",PR_COMMENT:"com",PR_DECLARATION:"dec",PR_KEYWORD:"kwd",PR_LITERAL:"lit",PR_NOCODE:"nocode",PR_PLAIN:"pln",PR_PUNCTUATION:"pun",PR_SOURCE:"src",PR_STRING:"str",PR_TAG:"tag",PR_TYPE:"typ"}}();