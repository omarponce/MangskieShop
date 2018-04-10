if(!_.color_scales){_.color_scales=1;(function($){var Lda,pG,rG,tG,vG,yG,zG,CG,Kda;$.mG=function(a,b){var c=a.N("fontSize")!=b;null===b?delete a.$c.fontSize:a.$c.fontSize=b;c&&a.D(4)};$.nG=function(a,b){return $.sj(Kda,a,b||"clip")};Lda=function(a,b){for(var c in a)if(!(c in b)||a[c]!==b[c])return!1;for(c in b)if(!(c in a))return!1;return!0};$.oG=function(){$.Sq.call(this);this.ba=this.ca=0};pG=function(a){var b=new $.Uq(a);$.L(a,b);$.T(b,a.N0,a);return b};
$.qG=function(a){var b=new $.oG;b.fa($.dl("defaultScaleSettings.linear"));b.fa($.dl("defaultLinearColorScale"));b.ji.apply(b,arguments);return b};rG=function(a){$.ar.call(this,a)};$.sG=function(){$.Dq.call(this);this.K=this.j=null;this.o=[];this.U=this.g=null;this.Fa=[];this.R=!1};
tG=function(a){if(!a.g){var b,c,d,e,f,h=[];if(!a.o.length){a.wa=[];$.db(a.Fa);var k=[],l=[];(0,$.Oa)(a.Fa,function(a){var b=$.P(a);(0,window.isNaN)(a)?k.push({equal:a}):l.push(b)});$.ib(l);c=Math.round(1+3.32*Math.log(l.length)/Math.log(10));b=Math.floor(l[0]);d=(l[l.length-1]-b)/c;e=b;var m=Math.ceil(e+d);for(b=0;b<c;b++)a.wa.push({from:e,to:m}),e=m,m=Math.ceil(e+d);a.wa=a.wa.concat(k);a.R||(a.U=$.dl("defaultOrdinalColorScale.autoColors")(a.wa.length))}m=a.o.length?a.o:a.wa;b=0;for(c=m.length;b<
c;b++){d=m[b];e=a.K?a.K[b]:null;f=a.ji();var p=a.Id()?Math.max(0,f.length-1-b):b;f=f&&f[p]?f[p]:null;var p=!0,q=b,r=d.equal,t=$.P(d.from),u=$.P(d.to),v=$.P(d.less),w=$.P(d.greater),x=window.NaN,z=window.NaN,E=void 0;$.n(r)?(t=$.P(r),(0,window.isNaN)(t)?E=r:z=x=t):(0,window.isNaN)(t)||(0,window.isNaN)(u)?(0,window.isNaN)(w)?(0,window.isNaN)(v)?p=!1:(x=Number.NEGATIVE_INFINITY,z=v):(x=w,z=Number.POSITIVE_INFINITY):(x=Math.min(t,u),z=Math.max(t,u));p&&h.push({om:E,start:x,end:z,sourceIndex:q,enabled:!0,
color:d.color||f,name:d.name||e})}$.ib(h,function(a,b){var c=a.start>b.start?1:a.start<b.start?-1:0;Math.max(a.start,b.start)<=Math.min(a.end,b.end)&&(a.start>b.start?a.sourceIndex>b.sourceIndex?b.end=a.start:(a.start=b.end,a.start>=a.end&&(a.enabled=!1)):a.start<b.start?a.sourceIndex>b.sourceIndex?(b.start=a.end,b.start>=b.end&&(b.enabled=!1)):a.end=b.start:a.sourceIndex>b.sourceIndex?(b.start=a.end,b.start>=b.end&&(b.enabled=!1)):(a.end=b.start,a.start>=a.end&&(a.enabled=!1)));return c});e=[];b=
0;for(c=h.length;b<c;b++)d=h[b],d.enabled&&e.push(d);h.length=0;a.g=e}};$.uG=function(a){var b=new $.sG;b.fa($.dl("defaultOrdinalColorScale"));b.vx(a);return b};vG=function(){$.Fu.call(this)};$.wG=function(){$.Gu.call(this);this.U=window.NaN;$.jr(this,this,this.SO,this.Q0,null,this.SO);this.wa.pa(this,"mousedown",this.O$);this.Ud|=1024};$.xG=function(a){a.bc&&(a.bc.oh(),a.bc.remove(),a.bc=null);a.B&&(a.B.length=0)};
yG=function(a){if(a.j){var b=a.scale();if(b&&$.J(b,$.sG)){a.ca={};for(var c=a.j,d=c.lc();d.advance();){var e=($.n(c.Jc)?d.G(c.Jc):null)||d.get(c.be?c.be.ej:c.Ql[1]);if(e=b.Nj(e))a.ca[e.sourceIndex]||(a.ca[e.sourceIndex]=[]),a.ca[e.sourceIndex].push(d.sa())}}}};
zG=function(a){var b=0;if(a.g&&a.g.enabled()){var c=a.orientation(),b=2*a.g.size(),d=$.n(a.g.offsetX())?a.g.offsetX():0;a=$.n(a.g.offsetY())?a.g.offsetY():0;switch(c){case "top":b+=a;break;case "right":b-=d;break;case "bottom":b-=a;break;case "left":b+=d}}return b};
$.AG=function(a,b){if(a.j){var c=a.scale(),d=a.j,e=d.Wd()||(d.vl?d.vl():void 0),f=a.g&&a.g.enabled(),d=d.enabled()&&e==c;if(a.enabled()&&f&&c&&d&&(c=a.bc.ob(),f=$.sb(a.scale().transform(b,.5),0,1),!(0,window.isNaN)(f))){var h,k,l;switch(a.orientation()){case "top":h=c.left+c.width*f;k=c.top+c.height+a.g.size();l=180;break;case "bottom":h=c.left+c.width*f;k=c.top-a.g.size();l=0;break;case "left":h=c.left+c.width+a.g.size();k=c.top+c.height-c.height*f;l=90;break;case "right":h=c.left-a.g.size(),k=c.top+
c.height-c.height*f,l=-90}$.U(a.g).rotation(l).ic({value:{x:h,y:k}}).ja(!1).ea();a.g.Qe().visible(!0)}}};$.BG=function(a){a.scale()&&a.g&&a.g.Qe().visible(!1)};CG=function(){$.wG.call(this)};Kda={vea:"always-show",pfa:"clip",Sfa:"drop"};$.G($.oG,$.Sq);$.g=$.oG.prototype;$.g.Xa=function(){return"linear-color"};
$.g.rK=function(a){var b,c,d,e=[];b=0;for(c=arguments.length;b<c;b++)if(d=arguments[b],$.B(d))e.push($.ac(d,!0));else if($.y(d))e.push.apply(e,this.rK.apply(this,d));else if($.A(d)){var f=d.keys;if($.n(f)&&$.y(f)){var f=this.rK.apply(this,d.keys),h=d.opacity;if($.n(h))for(var k=0;k<f.length;k++)d=f[k],$.n(d.opacity)||(d.opacity=h);e.push.apply(e,f)}else e.push(d)}return e};
$.g.Cba=function(a){for(var b=this.rK.apply(this,arguments),c=0,d=b.length;c<d;c++){var e=b[c];$.n(e.offset)||(e.offset=c?c==d-1?1:c/(d-1):0);var f=e.color;$.y(f)?e.color=$.ab(f):$.B(f)&&(e.color=$.sk($.zk(f).fg))}$.kb(b);return b};$.g.ji=function(a){if(0<arguments.length&&$.n(arguments[0])){var b=this.Cba.apply(this,arguments),c=this.j&&b.length==this.j.length;if(c)for(var d=0,e=b.length;d<e;d++){var f=!1;(0,$.Oa)(this.j,function(a){f=f||Lda(a,b[d])});c=c&&f}c&&this.j||(this.j=b,this.ya(2));return this}return this.j};
$.g.Wr=function(a){a=this.transform(a);for(var b,c,d=0,e=this.j.length;d<e;d++){var f=this.j[d];if(c)break;else a>=f.offset?b=f:c=f}var h;b?c?h=$.yk(c.color,b.color,(a-b.offset)/(c.offset-b.offset)):h=b.color:h=c.color;return $.y(h)?$.fc(h):h.color};
$.g.M0=function(a){this.th();a=$.sk($.zk(a).fg);var b,c,d,e,f,h,k;h=0;for(k=this.j.length;h<k;h++){c=this.j[h];e=c.color;h!=this.j.length-1&&(d=this.j[h+1],f=d.color);var l,m,p;m=(a[1]-e[1])/(f[1]-e[1]);p=(a[2]-e[2])/(f[2]-e[2]);l=(a[0]-e[0])/(f[0]-e[0]);(0,window.isNaN)(l)&&(l=m||p);(0,window.isNaN)(m)&&(m=p||l);(0,window.isNaN)(p)&&(p=l||m);if($.Nl(l,m)&&$.Nl(l,p)&&$.Nl(m,p)&&(m=Math.round(f[1]*m+(1-m)*e[1])==a[1],p=Math.round(f[2]*p+(1-p)*e[2])==a[2],Math.round(f[0]*l+(1-l)*e[0])==a[0]&&m&&p)){b=
this.Ld*(l/(1/(d.offset-c.offset))+c.offset)+this.min;break}}return $.n(b)?b:window.NaN};$.g.Ia=function(a){this.I||(this.I=pG(this));return $.n(a)?(this.I.Y(a),this.ya(2),this):this.I};$.g.mb=function(a){this.o||(this.o=pG(this),this.o.count(5));return $.n(a)?(this.o.Y(a),this.ya(2),this):this.o};
$.g.th=function(){if(!this.b){$.oG.J.th.call(this);var a=$.Wq(this.Ia(),this.min,this.max,this.P&&this.min!=this.R,this.K&&this.max!=this.wa,10);this.P&&(this.min=a[0]);this.K&&(this.max=a[1]);$.Xq(this.mb(),$.Vq(this.Ia()),10,a[2],a[3]);this.Ld=this.max-this.min}};$.g.N0=function(a){$.W(a,2)&&(this.b=!1,this.ya(2))};$.g.O=function(){var a=$.oG.J.O.call(this);a.ticks=this.Ia().O();a.minorTicks=this.mb().O();a.colors=(0,$.pb)(this.ji(),function(a){return $.fc(a.color)});return a};
$.g.fa=function(a,b){$.oG.J.fa.call(this,a,b);this.Ia(a.ticks);this.mb(a.minorTicks);this.ji(a.colors)};var DG=$.oG.prototype;$.F("anychart.scales.linearColor",$.qG);DG.colors=DG.ji;DG.valueToColor=DG.Wr;DG.colorToValue=DG.M0;DG.ticks=DG.Ia;DG.minorTicks=DG.mb;$.G(rG,$.ar);rG.prototype.sR=function(){var a=[],b=this.scale.vx();b.length||(b=this.scale.tm());if(b){var c,b=b.length;(0,window.isNaN)(this.jC())?c=Math.ceil(b/this.JL())||1:c=this.jC();for(var d=0;d<b;d+=c)a.push(d)}return a};
rG.prototype.HL=function(a){var b=a.length||0,c=this.scale.tm(),d=c.length;if(!b||!d)return[];for(var e=[],f=!1,h=0;h<b&&!f;h++){var k=a[h],l=a[h+1];(0,window.isNaN)(l)||l>=d?(l=d-1,f=!0):l--;var m=$.n(c[k].om)?c[k].om:(c[k].start+c[k].end)/2,p=$.n(c[l].om)?c[l].om:(c[l].start+c[l].end)/2;e.push(k==l?m:[m,p])}return e};$.G($.sG,$.Dq);$.g=$.sG.prototype;$.g.Xa=function(){return"ordinal-color"};$.g.Id=function(a){return $.n(a)?(a=!!a,this.$!=a&&(this.$=a,this.Rl(),this.ya(2)),this):this.$};$.g.ji=function(a){if($.n(a))return a?$.y(a)&&(this.j=$.ab(a)):this.j=[],this.Rl(),this.ya(2),this;if($.y(this.j)){this.P||(this.P=$.ab(this.j));if(this.P.length<this.o.length)for(;this.P.length!=this.o.length;)this.P.push(this.o[this.P.length]);return this.P}return this.U||[]};
$.g.names=function(a){if($.n(a)){if(null===a)this.K=[];else if($.y(a))this.K=$.ab(a);else{if(!$.B(a)||this.K==a)return this;this.K=a}this.Rl();$.cr(this.Ia());this.ya(4);return this}tG(this);if($.y(this.K)){this.B||(this.B=$.ab(this.K));if(this.B.length<this.g.length)for(;this.B.length!=this.g.length;)this.B.push(this.g[this.B.length]);return this.B}if(!this.vh){this.vh=[];a=0;for(var b=this.g.length;a<b;a++){var c=this.g[a],d;$.n(c.om)?d=c.om:(0,window.isFinite)(c.start+c.end)?c.start===c.end?d=
c.start:d=c.start+" - "+c.end:d=(0,window.isFinite)(c.start)?"> "+c.start:"< "+c.end;c.name||(c.name=d);this.vh.push(d)}}return this.vh};$.g.vx=function(a){return $.n(a)?(this.o!=a&&(this.o=a,this.R||(this.U=$.dl("defaultOrdinalColorScale.autoColors")(this.o.length)),this.Rl(),$.cr(this.Ia()),this.ya(4)),this):this.o};$.g.tm=function(){tG(this);this.names();return this.g};
$.g.Nj=function(a){tG(this);var b=null;if(this.g)for(var c=this.g.length;c--;){var d=this.g[c];if($.n(d.om)&&d.om===a||a>=d.start&&a<=d.end&&-1<d.sourceIndex)b=d}return b};$.g.Wr=function(a){tG(this);var b="none";if(a=this.Nj(a)){var c=a.sourceIndex;if(0<=c){var d=this.ji();$.n(a.color)?b=a.color:d&&0<d.length&&(b=c>d.length-1?d[d.length-1]:d[c])}}return b};
$.g.O0=function(a){tG(this);a=$.zk(a).fg;for(var b=window.NaN,c=0,d=this.g.length;c<d;c++){var e=this.g[c],f=this.ji();if(a==$.zk(e.color||f[e.sourceIndex]||f[f.length-1]).fg){b=(e.start+e.end)/2;break}}return b};$.g.kr=function(a){tG(this);return(a=this.Nj(a))?(0,$.Sa)(this.g,a):-1};$.g.Ia=function(a){if(!this.I){var b=new rG(this);$.L(this,b);$.T(b,this.P0,this);this.I=b}return $.n(a)?(this.I.Y(a),this):this.I};$.g.P0=function(a){$.W(a,2)&&this.ya(2)};
$.g.transform=function(a,b){tG(this);var c=this.Nj(a);return c?1/this.g.length*((0,$.Sa)(this.g,c)+(b||0)):window.NaN};$.g.Gc=function(a){tG(this);a=this.g[$.sb(Math.ceil(a*this.g.length)-1,0,this.g.length-1)];return $.n(a.om)?a.om:(a.start+a.end)/2};$.g.ef=function(){return!!this.vx.length};$.g.iC=function(a){this.b=!1;a||this.ya(2);return!0};$.g.reset=function(){this.B=this.wa=this.vh=this.P=this.g=null;return this};$.g.Rl=function(){this.reset();this.Fa.length=0;return this};
$.g.Uc=function(a){for(var b=0;b<arguments.length;b++)this.Fa.push(arguments[b]);return this};$.g.O=function(){var a=$.sG.J.O.call(this);a.ticks=this.Ia().O();this.o&&this.o.length&&(a.ranges=this.o);this.K&&(a.names=this.K);this.j&&(a.colors=this.j);return a};$.g.fa=function(a,b){$.sG.J.fa.call(this,a,b);this.Ia(a.ticks);this.ji(a.colors);this.vx(a.ranges);this.names(a.names)};var EG=$.sG.prototype;$.F("anychart.scales.ordinalColor",$.uG);EG.getType=EG.Xa;EG.colors=EG.ji;EG.ranges=EG.vx;
EG.names=EG.names;EG.ticks=EG.Ia;EG.inverted=EG.Id;EG.getRangeByValue=EG.Nj;EG.getProcessedRanges=EG.tm;EG.valueToColor=EG.Wr;EG.colorToValue=EG.O0;EG.getIndexByValue=EG.kr;EG.transform=EG.transform;EG.inverseTransform=EG.Gc;$.G(vG,$.Fu);vG.prototype.WO=function(a,b,c,d,e){b=Math.round(b.left+a*b.width);var f,h,k=this.length(),l=this.position();b=1==a?b+e:b-e;"outside"==l?(f=c.top-d/2,h=-k):"center"==l?(f=c.top+(c.height-k)/2,h=k):"inside"==l&&(f=c.Ma()+d/2,h=k);this.path.moveTo(b,f);this.path.lineTo(b,f+h)};
vG.prototype.VO=function(a,b,c,d,e){b=Math.round(b.top+b.height-a*b.height);var f=this.length(),h=this.position();b=1==a?b-e:b+e;"outside"==h?(a=c.Qa()+d/2,c=f):"center"==h?(a=c.left+(c.width-f)/2,c=f):(a=c.left-d/2,c=-f);this.path.moveTo(a,b);this.path.lineTo(a+c,b)};
vG.prototype.TO=function(a,b,c,d,e){b=Math.round(b.left+a*b.width);var f,h,k=this.length(),l=this.position();b=1==a?b+e:b-e;"outside"==l?(f=c.Ma()+d/2,h=k):"center"==l?(f=c.top+(c.height-k)/2,h=k):"inside"==l&&(f=c.top-d/2,h=-k);this.path.moveTo(b,f);this.path.lineTo(b,f+h)};
vG.prototype.UO=function(a,b,c,d,e){var f;b=Math.round(b.top+b.height-a*b.height);var h,k=this.length(),l=this.position();b=1==a?b-e:b+e;"outside"==l?(f=c.left-d/2,h=-k):"center"==l?(f=c.left+(c.width-k)/2,h=k):"inside"==l&&(f=c.Qa()+d/2,h=k);this.path.moveTo(f,b);this.path.lineTo(f+h,b)};$.G($.wG,$.Gu);$.g=$.wG.prototype;$.g.xa=$.Gu.prototype.xa|1024;$.g.NH=function(){return new vG};$.g.TH=function(){this.bc||($.J(this.scale(),$.oG)?this.bc=$.mj():$.J(this.scale(),$.sG)&&(this.bc=$.kj(),this.B=[]),this.bc.zIndex(this.zIndex()),this.bc.parent(this.aa()),this.bc.cursor("pointer"),$.ir(this,this.bc));return this.bc};$.g.XC=function(a){return $.n(a)?(a=$.P(a),this.U!=a&&(this.U=a,this.D(this.Ud,9)),this):this.U};
$.g.align=function(a){return $.n(a)?(a=$.xj(a),this.I!=a&&(this.I=a,this.D(this.Ud,9)),this):this.I};$.g.length=function(a){return $.n(a)?(this.ed!=a&&(this.ed=a,this.D(this.Ud,9)),this):this.ed};$.g.MH=function(a){this.g||(this.g=new $.uu,this.g.ic({value:{x:0,y:0}}),$.T(this.g,this.R0,this));return $.n(a)?(this.g.Y(a),this.D(1024,1),this):this.g};$.g.R0=function(a){$.W(a,1)&&this.D(1024,1)};$.g.target=function(a){return $.n(a)?(this.j!=a&&(this.j=a,yG(this),$.T(this.j,this.Jda,this)),this):this.j};
$.g.Jda=function(a){$.W(a,132)&&yG(this)};
$.g.SH=function(a,b){var c=this.scale(),d,e,f,h={};if($.J(c,$.oG))e=(0,window.parseFloat)(b),d=c.zw(e),f="number";else if($.J(c,$.sG)){e=b;d=c.Ia().names()[a];f="string";var k=c.Nj(b);k&&(h.colorRange={value:{color:k.color,end:k.end,name:k.name,start:k.start,index:k.sourceIndex},type:""})}h.index={value:a,type:"number"};h.value={value:d,type:f};h.tickValue={value:e,type:"number"};h.max={value:$.n(c.max)?c.max:null,type:"number"};h.min={value:$.n(c.min)?c.min:null,type:"number"};h.scale={value:c,type:""};
return $.Ds(new $.Ps(h))};$.g.gr=function(a,b){var c=0;a.enabled()&&(c=a.length(),c="center"==a.position()?Math.max((c-this.U)/2,0):$.n(b)?0<b?"outside"==a.position()?0:c:0>b?"inside"==a.position()?0:c:c:c);return c};
$.g.RH=function(a,b,c,d,e){c=a.top+a.height+c/2-d;var f=this.scale();if($.J(f,$.oG))this.bc.moveTo(a.left+b,c).lineTo(a.left-b+a.width,c).lineTo(a.left-b+a.width,c-e).lineTo(a.left+b,c-e).close();else if($.J(f,$.sG)){d=f.tm();for(var f=f.ji(),h=a.width/d.length,k=0,l=d.length;k<l;k++){var m=d[k],m=m.color||f[m.sourceIndex]||f[f.length-1],p=this.B[k]?this.B[k].clear():this.B[k]=this.bc.path(),q=a.left+b+h*k;p.moveTo(q,c).lineTo(q+h,c).lineTo(q+h,c-e).lineTo(q,c-e).close();p.stroke(this.stroke());p.fill(m)}}};
$.g.QH=function(a,b,c,d,e){c=a.left-c/2+d;var f=this.scale();if($.J(f,$.oG))this.bc.moveTo(c,a.top+b).lineTo(c,a.top-b+a.height).lineTo(c+e,a.top-b+a.height).lineTo(c+e,a.top+b).close();else if($.J(f,$.sG)){d=f.tm();for(var f=f.ji(),h=a.height/d.length,k=0,l=d.length;k<l;k++){var m=d[k],m=m.color||f[m.sourceIndex]||f[f.length-1],p=this.B[k]?this.B[k].clear():this.B[k]=this.bc.path(),q=a.top+b+h*(d.length-1-k);p.moveTo(c,q).lineTo(c,q+h).lineTo(c+e,q+h).lineTo(c+e,q).close();p.stroke(this.stroke());
p.fill(m)}}};
$.g.OH=function(a,b,c,d,e){c=a.top-c/2+d;var f=this.scale();if($.J(f,$.oG))this.bc.moveTo(a.left+b,c).lineTo(a.left-b+a.width,c).lineTo(a.left-b+a.width,c+e).lineTo(a.left+b,c+e).close();else if($.J(f,$.sG)){d=f.tm();for(var f=f.ji(),h=a.width/d.length,k=0,l=d.length;k<l;k++){var m=d[k],m=m.color||f[m.sourceIndex]||f[f.length-1],p=this.B[k]?this.B[k].clear():this.B[k]=this.bc.path(),q=a.left+b+h*k;p.moveTo(q,c).lineTo(q+h,c).lineTo(q+h,c+e).lineTo(q,c+e).close();p.stroke(this.stroke());p.fill(m)}}};
$.g.PH=function(a,b,c,d,e){c=a.left+a.width+c/2-d;var f=this.scale();if($.J(f,$.oG))this.bc.moveTo(c,a.top+b).lineTo(c,a.top-b+a.height).lineTo(c-e,a.top-b+a.height).lineTo(c-e,a.top+b).close();else if($.J(f,$.sG)){d=f.tm();for(var f=f.ji(),h=a.height/d.length,k=0,l=d.length;k<l;k++){var m=d[k],m=m.color||f[m.sourceIndex]||f[f.length-1],p=this.B[k]?this.B[k].clear():this.B[k]=this.bc.path(),q=a.top+b+h*(d.length-1-k);p.moveTo(c,q).lineTo(c,q+h).lineTo(c-e,q+h).lineTo(c-e,q).close();p.stroke(this.stroke());
p.fill(m)}}};
$.g.YO=function(){var a=this.TH(),b=this.scale();b||this.scale($.qG());if($.J(b,$.oG))a.clear(),a.stroke(this.stroke()),b=$.gc(b.ji()),this.Bb()?b.angle=0:b.angle=90,a.fill(b);else if($.J(b,$.sG))for(a=0,b=this.B.length;a<b;a++)this.B[a].clear();var c;switch(this.orientation()){case "top":c=this.RH;break;case "right":c=this.QH;break;case "bottom":c=this.OH;break;case "left":c=this.PH}var a=this.stroke(),a=!a||$.sn(a)?0:a.thickness?(0,window.parseFloat)(this.stroke().thickness):1,b=a%2?.5:0,d=this.kb(),
e=zG(this),f=Math.round(this.U),h=this.gr(this.Ia(),1),k=this.gr(this.mb(),1);c.call(this,d,b,a,Math.max(h,k,e),f)};
$.g.kb=function(){if(!this.Em||this.X(4)){var a=this.qa();if(a){var b,c;a.top=Math.round(a.top);a.left=Math.round(a.left);a.width=Math.round(a.width);a.height=Math.round(a.height);this.Bb()?(b=a.width,c=a.height):(b=a.height,c=a.width);var d=this.Wg(b);c=this.width()?$.M(this.width(),c):$.Ku(this,a,d);var e,f,h=this.padding(),k=$.M(h.N("top"),a.height),l=$.M(h.N("right"),a.width),m=$.M(h.N("bottom"),a.height),h=$.M(h.N("left"),a.width),p=this.align(),q;this.Bb()?(d+l+h>b&&(d=b-(l+h)),"left"==p||"top"==
p?q=h:"right"==p||"bottom"==p?q=b-d-l:"center"==p&&(q=(b-d-l-h)/2)):(d+m+k>b&&(d=b-(m+k)),"left"==p||"top"==p?q=k:"right"==p||"bottom"==p?q=b-d-m:"center"==p&&(q=(b-d-m-k)/2));var r,t;switch(this.orientation()){case "top":f=a.top+k;e=a.left+q;t=c;r=d;break;case "right":f=a.top+q;e=a.left+a.width-c-l;t=d;r=c;break;case "bottom":f=a.top+a.height-c-m;e=a.left+q;t=c;r=d;break;case "left":f=a.top+q,e=a.left+h,t=d,r=c}this.Em=new $.I(Math.round(e),Math.round(f),Math.round(r),Math.round(t))}else this.Em=
new $.I(0,0,0,0);this.W(4)}return this.Em};$.g.Wg=function(a){return $.M(this.ed,a)};
$.g.vR=function(a,b){var c=this.Ia(),d=this.mb(),e=this.gr(c),f=this.gr(d),h=zG(this);"outside"==c.position()?"outside"==d.position()?c=Math.max(a+e,b+f):(c="inside"==d.position()?Math.max(a+e,b):Math.max(a+e,b+f),h=Math.max(f,h)):"inside"==c.position()?"outside"==d.position()?(c=Math.max(a,b+f),h=Math.max(e,h)):(c="inside"==d.position()?Math.max(a,b):Math.max(a,b+f),h=Math.max(e,f,h)):"outside"==d.position()?(c=Math.max(a+e,b+f),h=Math.max(e,h)):(c="inside"==d.position()?Math.max(a+e,b):Math.max(a+
e,b+f),h=Math.max(e,f,h));e=this.stroke();return c+h+(Math.round(this.U)+(!e||$.sn(e)?0:e.thickness?(0,window.parseFloat)(e.thickness):1))};$.g.scale=function(a){(a=$.wG.J.scale.call(this,a))||(this.ia||(this.ia=$.qG(),this.ia.ji("#fff","#000")),a=this.ia);return a};$.g.aT=function(){return 48};$.g.xB=function(a){$.W(a,2)&&$.xG(this);$.wG.J.xB.call(this,a)};
$.g.ea=function(){if(!this.gc())return this;this.X(1024)&&(this.g&&(this.g.aa(this.aa()),this.g.zIndex(this.zIndex()+1),this.g.ea(),this.g.Qe().visible(!1)),this.W(1024));this.X(2)&&this.g&&this.g.aa(this.aa());if(this.X(8)&&this.g){var a=this.zIndex();this.g.zIndex(a+1)}return $.wG.J.ea.call(this)};
$.g.O$=function(a){if(this.j){var b=this.scale(),c=this.j,d=c&&(c.Wd()||(c.vl?c.vl():void 0));if(this.enabled()&&b&&c.enabled()&&d==b){var d=this.bc.ob(),e,f;this.Bb()?(e=a.clientX,f=d.left+$.Ti(this.aa().Ea()).x,d=(e-f)/d.width):(e=a.clientY,f=d.top+$.Ti(this.aa().Ea()).y,d=(d.height-(e-f))/d.height);d=b.Gc(d);a.metaKey||a.shiftKey||!c.map||c.map.kd();if($.J(b,$.sG))d=b.Nj(d),b&&c&&(e=this.ca[d.sourceIndex],b=c.Ub(),b=b.Hd(),"single"==b.Vc()?this.vc={ha:c,zc:e}:this.vc=[{ha:c,zc:e,Rj:e[e.length-
1],qd:{index:e[e.length-1],Xe:0}}]);else if($.J(b,$.oG)){a=c.lc();e=window.Infinity;for(var h=window.NaN,k=b.gg(),l=b.Ng();a.advance();){f=a.get(c.be?c.be.ej:c.Ql[1]);f=$.sb(f,k,l);var m=Math.abs(d-f);e>m&&(e=m,h=f)}e=[];a=c.lc();for(d=h;a.advance();)f=a.get(c.be?c.be.ej:c.Ql[1]),f=$.sb(f,k,l),f==d&&e.push(a.sa());b&&c&&(b=c.Ub(),b=b.Hd(),"single"==b.Vc()?this.vc={ha:c,zc:e}:this.vc=[{ha:c,zc:e,Rj:e[e.length-1],qd:{index:e[e.length-1],Xe:0}}])}}}};
$.g.SO=function(a){if(this.j){var b=this.scale(),c=this.j,d=c.Wd()||(c.vl?c.vl():void 0);if(this.enabled()&&b&&c.enabled()&&d==b){var d=this.bc.ob(),e,f;this.Bb()?(e=a.clientX,f=d.left+$.Ti(this.aa().Ea()).x,d=(e-f)/d.width):(e=a.clientY,f=d.top+$.Ti(this.aa().Ea()).y,d=(d.height-(e-f))/d.height);var h,d=b.Gc(d);if($.J(b,$.sG))a=b.Nj(d),h=this.ca[a.sourceIndex],b=c.Ub(),f=b.Hd(),"single"==f.Vc()?this.vc={ha:c,zc:h}:this.vc=[{ha:c,zc:h,Rj:h[h.length-1],qd:{index:h[h.length-1],Xe:0}}];else if($.J(b,
$.oG)&&c){f=c.lc();h=window.Infinity;for(var k=window.NaN,l=b.gg(),m=b.Ng();f.advance();){e=f.get(c.be?c.be.ej:c.Ql[1]);e=$.sb(e,l,m);var p=Math.abs(d-e);h>p&&(h=p,k=e)}h=[];f=c.lc();for(d=k;f.advance();)e=f.get(c.be?c.be.ej:c.Ql[1]),e=$.sb(e,l,m),e==d&&h.push(f.sa());b&&c&&(b=c.Ub(),f=b.Hd(),"single"==f.Vc()?(this.vc&&!(0,$.Cy)(h,function(a){return $.Ta(this.vc.zc,a)},this)&&b.dispatchEvent(b.Uh("hovered",a,[{ha:c,zc:[],qd:{index:this.vc.zc[this.vc.zc.length-1],Xe:0}}],!1)),this.vc={ha:c,zc:h}):
this.vc=[{ha:c,zc:h,Rj:h[h.length-1],qd:{index:h[h.length-1],Xe:0}}])}$.AG(this,d)}}};$.g.Q0=function(){$.BG(this);var a=this.j;a&&(this.b=a)};$.g.remove=function(){$.wG.J.remove.call(this);this.g&&this.g.remove()};$.g.O=function(){var a=$.wG.J.O.call(this);a.marker=this.MH().O();a.colorLineSize=this.XC();a.length=this.length();a.align=this.align();return a};$.g.fa=function(a,b){$.wG.J.fa.call(this,a,b);this.MH(a.marker);this.XC(a.colorLineSize);this.length(a.length);this.align(a.align)};$.G(CG,$.wG);
$.pr(CG,$.wG);var FG=$.wG.prototype;FG.marker=FG.MH;FG.colorLineSize=FG.XC;FG.length=FG.length;FG.align=FG.align;FG=CG.prototype;$.F("anychart.standalones.colorRange",function(){var a=new CG;a.ra(!0,$.dl("standalones.colorRange"));return a});FG.padding=FG.padding;FG.draw=FG.ea;FG.parentBounds=FG.qa;FG.container=FG.aa;FG.colorLineSize=FG.XC;}).call(this,$)}