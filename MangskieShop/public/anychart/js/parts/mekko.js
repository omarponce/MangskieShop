if(!_.mekko){_.mekko=1;(function($){var sI=function(a,b){a.P&&$.er(a,b)},tI=function(a,b,c,d,e,f){$.qx.call(this,a,b,c,d,e);this.K=f},uI=function(a,b){$.vw.call(this,!0);this.K=this.b=null;this.Sa=!!a;this.ia=!!b;this.oa.pointsPadding=0;this.oa.defaultSeriesType="mekko";$.vo(this.F,[["pointsPadding",4294967295,1]])},vI=function(a,b,c,d,e,f){a.data.length&&(a.data[0].G.missing||(c.push(a.ha.name()),d.push(a.data[0].data.value)),a.data[b].G.missing||(e.push(a.ha.name()),f.push(a.data[b].data.value)))},Tda=function(a){if(a.Ca.length){var b=
[],c=[],d=[],e=[],f=a.Ca[0].data.length-1,h;if("direct"==a.Ya().pq())for(h=a.Ca.length;h--;)vI(a.Ca[h],f,b,d,c,e);else for(h=0;h<a.Ca.length;h++)vI(a.Ca[h],f,b,d,c,e);f=a.OD();f.Bf();f.Uc.apply(f,b);f.Ff();sI(f,d);f=a.VE();f.Bf();f.Uc.apply(f,c);f.Ff();sI(f,e)}},wI=function(a){$.Jw.call(this,a)},xI=function(a,b,c,d){if(0!=b.get("value")&&c){var e=b.G("x"),f=b.G("zero"),h=b.G("value"),k=d?b.G("pointWidth"):a.B;b.G("pointWidth",k);d=Math.abs($.Kl($.M(a.ha.Ba.N("pointsPadding"),k)));k-=2*d;e-=k/2;k=
e+k;b=b.G("stroke")?b.G("stroke"):c.path.stroke();b=$.kc(b);var l=b/2,e=$.pn(e+l,b),k=$.pn(k-l,b),h=h+(a.b?-l:l),f=f-(a.b?-l:l),h=$.pn(h,b),f=$.pn(f,b);d&&(b=Math.abs(f-h),d=b>2*d?d:b/2-1,f-=a.b?-d:d,h+=a.b?-d:d);d=c.path;$.Hw(d,a.b,e,h);$.Iw(d,a.b,k,h,k,f,e,f);d.close();d=c.hatchFill;$.Hw(d,a.b,e,h);$.Iw(d,a.b,k,h,k,f,e,f);d.close()}},yI=function(a){var b=new uI(!1);b.R="mekko";b.ra(!0,$.dl("mekko"));for(var c=0,d=arguments.length;c<d;c++)b.mekko(arguments[c]);return b},zI=function(a){var b=new uI(!0);
b.R="mosaic";b.ra(!0,$.dl("mosaic"));for(var c=0,d=arguments.length;c<d;c++)b.mekko(arguments[c]);return b},AI=function(a){var b=new uI(!1,!0);b.R="barmekko";b.ra(!0,$.dl("barmekko"));for(var c=0,d=arguments.length;c<d;c++)b.mekko(arguments[c]);return b};$.G(tI,$.qx);tI.prototype.TU=function(a){return!this.K&&0>a?0:a};tI.prototype.cp=function(a,b,c){(this.K||0<a.get("value"))&&tI.J.cp.call(this,a,b,c)};tI.prototype.Nm=function(a,b,c){(this.K||0<a.get("value"))&&tI.J.Nm.call(this,a,b,c)};$.G(uI,$.vw);var BI={};BI.mekko={sb:29,zb:2,Ab:[$.OB,$.BB],xb:null,ub:null,rb:$.mx|5767168,qb:"value",pb:"zero"};uI.prototype.Pg=BI;$.zv(uI,uI.prototype.Pg);$.g=uI.prototype;$.g.xa=$.vw.prototype.xa|268435456;$.g.YF=function(a){uI.J.YF.call(this,a);$.W(a,64)&&this.D(268435456,1)};
$.g.OD=function(a){if($.n(a)){if(a=$.Rq(this.b,a,"ordinal",$.Jq,null,this.RC,this)){var b=this.b==a;this.b=a;this.b.ja(b);if(!b){a=458752;if(this.Ro()&&"categories"==this.ee().kh()||this.ia)a|=512;this.D(a,268435457)}}return this}this.b||(this.b=$.Rq(this.b,{},"ordinal",$.Jq,null,this.RC,this),this.b.ja(!1));return this.b};
$.g.VE=function(a){if($.n(a)){if(a=$.Rq(this.K,a,"ordinal",$.Jq,null,this.RC,this)){var b=this.K==a;this.K=a;this.K.ja(b);b||this.D(458752,268435457)}return this}this.K||(this.K=$.Rq(this.K,{},"ordinal",$.Jq,null,this.RC,this),this.K.ja(!1));return this.K};$.g.RC=function(a){$.U(this);if($.W(a,4)){a=458752;if(this.Ro()&&"categories"==this.ee().kh()||this.ia)a|=512;this.D(a,268435456)}this.ja(!0)};$.g.ut=function(){return $.Jq};$.g.Vv=function(){return["Mekko chart X scale","ordinal"]};$.g.gE=function(){return"linear"};
$.g.uz=function(){return 15};$.g.hE=function(){return["Chart scale","ordinal, linear, log, date-time"]};$.g.Ro=function(){return!0};
$.g.mj=function(a,b){if(this.ia&&1==this.$a.length&&$.J(this.Ra(),$.dr)){this.Bc();var c=[],d,e=this.Ra().names(),f=this.Ra().values(),h=this.gj(0);for(d=0;d<f.length;d++){var k=null;$.D(b)&&(k={value:f[d],name:e[d]},k=b.call(k,k));$.B(k)||(k=String(e[d]));var l=this.hl().Sc(d);c.push({text:k,sourceUid:$.qa(this),sourceKey:d,iconType:"square",iconStroke:$.Ok(l,1),iconFill:l,iconHatchFill:h.hatchFill()})}return c}return uI.J.mj.call(this,a,b)};
$.g.uW=function(a){if(this.Sa){var b=!this.Ra().Id(),c="left"==a.orientation()||"bottom"==a.orientation();a.scale(c==b?this.OD():this.VE())}else a.scale(this.Ya())};
$.g.Bc=function(){var a=this.X(196608);this.X(458752)&&this.D(268435456);uI.J.Bc.call(this);if(a){for(var b,c,d=[],e=[],f=this.Ca.length,h,a=0;a<this.Ca.length;a++)for(c=this.Ca[a].data,b=0;b<c.length;b++)$.n(e[b])||(e[b]=0),c[b].G.missing?(e[b]++,h=0):(h=$.P(c[b].data.value),h=this.ia?Math.abs(h):0>h?0:h),void 0==d[b]?d.push(h):d[b]+=h;for(a=0;a<this.Ca.length;a++)for(c=this.Ca[a].data,b=h=0;b<c.length;b++)c[b].G.category=e[b]<f?h++:h;d=(0,$.De)(d,function(a,b){return e[b]<f});sI(this.Ra(),d)}this.X(268435456)&&
(Tda(this),this.W(268435456))};var CI={};$.R(CI,0,"pointsPadding",$.Do);$.Ho(uI,CI);$.g=uI.prototype;$.g.tp=function(a,b){return new tI(this,this,a,b,!1,this.ia)};$.g.sn=function(){return"mekko"};$.g.rD=function(){return 3};$.g.O=function(){var a=uI.J.O.call(this);a.type=this.Xa();$.To(this,CI,a);return{chart:a}};$.g.An=function(a,b,c){$.Wv(a,"firstCategoriesScale",this.OD(),b,c);$.Wv(a,"lastCategoriesScale",this.VE(),b,c);uI.J.An.call(this,a,b,c)};
$.g.wM=function(a,b,c,d){var e=a.O();(a.scale()==this.OD()&&"left"!=a.orientation()||a.scale()==this.VE()&&"right"!=a.orientation())&&$.Wv(e,"scale",a.scale(),b,c);d.push($.qa(a));return e};$.g.fa=function(a,b){uI.J.fa.call(this,a,b);$.Ko(this,CI,a)};var DI=uI.prototype;DI.xScale=DI.Ra;DI.yScale=DI.Ya;DI.crosshair=DI.Uo;DI.xAxis=DI.Jq;DI.getXAxesCount=DI.Uv;DI.yAxis=DI.Vo;DI.getYAxesCount=DI.Wv;DI.getSeries=DI.ie;DI.palette=DI.hl;DI.markerPalette=DI.Mi;DI.hatchFillPalette=DI.em;DI.getType=DI.Xa;
DI.addSeries=DI.Zj;DI.getSeriesAt=DI.gj;DI.getSeriesCount=DI.Kq;DI.removeSeries=DI.Yo;DI.removeSeriesAt=DI.Zo;DI.removeAllSeries=DI.Xo;DI.getPlotBounds=DI.Se;DI.annotations=DI.Lm;DI.lineMarker=DI.ws;DI.rangeMarker=DI.xs;DI.textMarker=DI.ys;$.G(wI,$.Jw);$.fB[29]=wI;$.g=wI.prototype;$.g.type=29;$.g.af=263905;$.g.uf={path:"path",hatchFill:"path"};$.g.Ne=function(a,b){if(!a.G("missing")){var c=this.yc.Fc(b);xI(this,a,c)}};$.g.Mn=function(a){var b=a.G("shapes"),c;for(c in b)b[c].clear();xI(this,a,b,!0)};$.g.Ow=function(a){if(!a.G("missing")){var b=a.G("shapes"),c;for(c in b)b[c].clear();xI(this,a,b,!0)}};$.Xn.mekko=yI;$.Xn.mosaic=zI;$.Xn.barmekko=AI;$.F("anychart.mekko",yI);$.F("anychart.mosaic",zI);$.F("anychart.barmekko",AI);}).call(this,$)}
