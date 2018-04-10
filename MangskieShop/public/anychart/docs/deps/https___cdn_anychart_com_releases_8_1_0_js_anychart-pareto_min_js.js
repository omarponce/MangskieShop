/**
 * AnyChart is lightweight robust charting library with great API and Docs, that works with your stack and has tons of chart types and features.
 *
 * Modules: pareto, theme-pareto
 * Version: 8.1.0.1826 (2017-12-20 00:49)
 * License: https://www.anychart.com/buy/
 * Contact: sales@anychart.com
 * Copyright: AnyChart.com 2017. All rights reserved.
 */
(function(global,factory){if(typeof module==='object'&&typeof module.exports==='object'){var wrapper=function(w){if(!w.document){throw Error('AnyChart requires a window with a document');}factory.call(w,w,w.document);w.acgraph.isNodeJS=true;return w.anychart;};module.exports=global.document?wrapper(global):wrapper;}else{factory.call(global,window,document)}})(typeof window!=='undefined'?window:this,function(window,document,opt_noGlobal){var $,_,$_=this.anychart;if($_&&(_=$_._)){$=$_.$}else{throw Error('anychart-base.min.js module should be included first. See modules explanation at https://docs.anychart.com/Quick_Start/Modules for details');$={};_={}}if(!_.pareto){_.pareto=1;(function($){var FN=function(a){$.yp.call(this,a);this.K=[];this.j=[];this.Ee=[];this.g=0},GN=function(a,b,c,d,e){$.qx.call(this,a,b,c,d,e)},IN=function(a,b,c){var d;$.n(c)&&-1<c&&(d=null,a=a.data(),$.n(a)&&(a=a.si(c),$.J(a,FN)||$.J(a,HN)))&&(d={},d.cf=$.Kl(a.Nv(c),2),d.rf=$.Kl(a.pz(c),2));d&&(b.cf=d.cf,b.rf=d.rf)},HN=function(a){$.yp.call(this,a)},JN=function(){$.Mx.call(this);this.kk=$.Nq();this.kk.gg(0).Ng(100);this.R="pareto"},KN=function(a){if($.n(a.K)){var b;b=a.K;$.sp(b);b=b.g;var c=a.gj(0),d;c?d=c.Ya():
d=a.Ya();d.gg(0);b?d.Ng(b):d.Ng(1)}},Sea=function(a,b){return $.Wm(a)?$.Wm(b)?-1:1:$.Wm(b)?-1:b-a},LN=function(a){var b=new JN;b.oa.defaultSeriesType="column";b.ra(!0,$.dl("pareto"));b.data(a);return b};$.G(FN,$.yp);$.g=FN.prototype;$.g.xa=1;$.g.Pq=function(a,b,c){a=FN.J.Pq.call(this,a,b,c);"value"==c&&(a=$.P(a),(0,window.isNaN)(a)||0>a)&&(a=0);return a};
$.g.By=function(){this.K=[];this.j=[];this.Ee=[];this.g=0;this.W(1);for(var a=this.la(),b;a.advance();)b=a.get("value"),this.Ee.push(b),this.g+=b;if(this.Ee.length)if(this.g)for(this.K[0]=this.j[0]=100*this.Ee[0]/this.g,a=1;a<this.Ee.length;a++)this.K[a]=100*this.Ee[a]/this.g,this.j[a]=this.j[a-1]+100*this.Ee[a]/this.g;else for(a=0;a<this.Ee.length;a++)this.K[a]=0,this.j[a]=0;return null};$.g.rA=function(a){this.B=null;$.W(a,16)&&this.D(1,16)};$.g.Nv=function(a){return this.j[a]};$.g.pz=function(a){return this.K[a]};
$.g.Xd=function(a){return this.Ee[a]};$.G(GN,$.qx);$.g=GN.prototype;$.g.ax={"%BubbleSize":"size","%RangeStart":"low","%RangeEnd":"high","%XValue":"x","%CF":"cf","%RF":"rf"};$.g.ep=function(a,b){var c=GN.J.ep.call(this,a,b),d=this.data(),e;$.n(d)&&$.n(c.index)&&-1<(e=Number(c.index.value))&&(d=d.si(e),$.J(d,FN)||$.J(d,HN))&&(c.cf={value:$.Kl(d.Nv(e),2),type:"number"},c.rf={value:$.Kl(d.pz(e),2),type:"number"});return c};$.g.Ni=function(a,b){var c=GN.J.Ni.call(this,a,b);IN(this,c,c.index);return c};
$.g.Ck=function(a){a=GN.J.Ck.call(this,a);IN(this,a,a.index);return a};$.g.Fd=function(a){var b=GN.J.Fd.call(this,a);IN(this,b,a);return b};$.G(HN,$.yp);HN.prototype.Pq=function(a,b,c){return"value"==c?this.b.Nv(b):HN.J.Pq.call(this,a,b,c)};HN.prototype.Nv=function(a){return this.b.Nv(a)};HN.prototype.pz=function(a){return this.b.pz(a)};$.G(JN,$.Mx);
JN.prototype.data=function(a,b){if($.n(a)){if(a){var c=a.title||a.caption;c&&this.title(c);a.rows&&(a=a.rows)}if(this.In!==a){this.In=a;$.K(this.Sa);$.J(a,$.rp)?this.b=this.Sa=a.Lk():$.J(a,$.Bp)?this.b=this.Sa=a.ue():this.b=(this.Sa=new $.Bp($.y(a)||$.B(a)?a:null,b)).ue();$.U(this);this.K&&$.jp(this.K,this.Oo,this);$.K(this.K);this.K=new FN(this.b.sort("value",Sea));$.T(this.K,this.Oo,this);KN(this);var c=this.gj(0),d=this.gj(1);this.mg&&$.K(this.mg);this.mg=this.K.Lk();c||(c=this.column());c.data(this.mg);
this.vj&&$.K(this.vj);this.vj=new HN(this.K);d||(d=this.line().clip(!1).tb(!0).Ya(this.kk));d.data(this.vj);this.ja(!0)}return this}return this.K};JN.prototype.Oo=function(a){$.W(a,16)&&KN(this)};var MN={},NN=$.mx|7864320;MN.area={sb:1,zb:1,Ab:[$.zB,$.AB,$.BB],xb:null,ub:null,rb:NN,qb:"value",pb:"zero"};MN.bar={sb:6,zb:2,Ab:[$.OB,$.BB],xb:null,ub:null,rb:NN,qb:"value",pb:"zero"};MN.box={sb:3,zb:2,Ab:[$.OB,$.BB,$.oI,$.nI,$.mI],xb:null,ub:null,rb:NN,qb:"highest",pb:"lowest"};
MN.bubble={sb:4,zb:2,Ab:[$.CB,$.DB,$.EB,$.FB],xb:null,ub:null,rb:NN,qb:"value",pb:"value"};MN.candlestick={sb:5,zb:2,Ab:[$.GB,$.IB,$.JB,$.LB],xb:null,ub:null,rb:NN,qb:"high",pb:"low"};MN.column={sb:6,zb:2,Ab:[$.OB,$.BB],xb:null,ub:null,rb:NN,qb:"value",pb:"zero"};MN["jump-line"]={sb:19,zb:2,Ab:[$.AB],xb:null,ub:null,rb:NN,qb:"value",pb:"value"};MN.stick={sb:20,zb:2,Ab:[$.AB],xb:null,ub:null,rb:NN,qb:"value",pb:"zero"};MN.line={sb:8,zb:1,Ab:[$.AB],xb:null,ub:null,rb:NN,qb:"value",pb:"value"};
MN.marker={sb:9,zb:2,Ab:[$.OB,$.BB],xb:null,ub:null,rb:$.mx|3670016,qb:"value",pb:"value"};MN.ohlc={sb:10,zb:2,Ab:[$.HB,$.KB],xb:null,ub:null,rb:NN,qb:"high",pb:"low"};MN["range-area"]={sb:11,zb:1,Ab:[$.zB,$.NB,$.MB,$.BB],xb:null,ub:null,rb:NN,qb:"high",pb:"low"};MN["range-bar"]={sb:12,zb:2,Ab:[$.OB,$.BB],xb:null,ub:null,rb:NN,qb:"high",pb:"low"};MN["range-column"]={sb:12,zb:2,Ab:[$.OB,$.BB],xb:null,ub:null,rb:NN,qb:"high",pb:"low"};
MN["range-spline-area"]={sb:13,zb:1,Ab:[$.zB,$.MB,$.NB,$.BB],xb:null,ub:null,rb:NN,qb:"high",pb:"low"};MN["range-step-area"]={sb:14,zb:1,Ab:[$.zB,$.MB,$.NB,$.BB],xb:null,ub:null,rb:NN,qb:"high",pb:"low"};MN.spline={sb:15,zb:1,Ab:[$.AB],xb:null,ub:null,rb:NN,qb:"value",pb:"value"};MN["spline-area"]={sb:16,zb:1,Ab:[$.zB,$.AB,$.BB],xb:null,ub:null,rb:NN,qb:"value",pb:"zero"};MN["step-area"]={sb:17,zb:1,Ab:[$.zB,$.AB,$.BB],xb:null,ub:null,rb:NN,qb:"value",pb:"zero"};
MN["step-line"]={sb:18,zb:1,Ab:[$.AB],xb:null,ub:null,rb:NN,qb:"value",pb:"value"};JN.prototype.Pg=MN;$.zv(JN,JN.prototype.Pg);$.g=JN.prototype;$.g.tp=function(a,b){return new GN(this,this,a,b,!0)};$.g.ut=function(){return $.Jq};$.g.Vv=function(){return["Pareto chart xScale","ordinal"]};$.g.uz=function(){return 3};$.g.hE=function(){return["Pareto chart yScale","scatter","linear, log"]};$.g.Ov=function(){return[this]};$.g.HK=function(){return["value","CF","RF"]};
$.g.lV=function(a,b,c){b=c.sa();c=this.K.si(b);a[1]=c.Xd(b);a[2]=c.Nv(b);a[3]=c.pz(b)};$.g.mi=function(a){this.X(131072)&&KN(this);return JN.J.mi.call(this,a)};$.g.hT=function(){return this.Ra()};$.g.da=function(){$.Uc(this.K,this.b,this.Sa,this.mg,this.vj);this.vj=this.mg=this.Sa=this.b=this.K=null;$.K(this.kk);this.kk=null;JN.J.da.call(this)};$.g.O=function(){var a=JN.J.O.call(this);$.n(this.data())&&(a.chart.data=this.data().O());return a};
$.g.fa=function(a,b){JN.J.fa.call(this,a,b);b&&this.Vo(1).scale(this.kk);"data"in a&&this.data(a.data)};var ON=JN.prototype;ON.data=ON.data;ON.xScale=ON.Ra;ON.yScale=ON.Ya;ON.crosshair=ON.Uo;ON.maxBubbleSize=ON.iw;ON.minBubbleSize=ON.mw;ON.xGrid=ON.zs;ON.yGrid=ON.As;ON.xMinorGrid=ON.Tu;ON.yMinorGrid=ON.Uu;ON.xAxis=ON.Jq;ON.getXAxesCount=ON.Uv;ON.yAxis=ON.Vo;ON.getYAxesCount=ON.Wv;ON.getSeries=ON.ie;ON.lineMarker=ON.ws;ON.rangeMarker=ON.xs;ON.textMarker=ON.ys;ON.palette=ON.hl;ON.markerPalette=ON.Mi;
ON.hatchFillPalette=ON.em;ON.getType=ON.Xa;ON.addSeries=ON.Zj;ON.getSeriesAt=ON.gj;ON.getSeriesCount=ON.Kq;ON.removeSeries=ON.Yo;ON.removeSeriesAt=ON.Zo;ON.removeAllSeries=ON.Xo;ON.getPlotBounds=ON.Se;ON.xZoom=ON.Ji;ON.xScroller=ON.dl;ON.getStat=ON.pf;ON.annotations=ON.Lm;ON.getXScales=ON.mr;ON.getYScales=ON.nr;$.Xn.pareto=LN;$.F("anychart.pareto",LN);}).call(this,$)}
if(!_.theme_pareto){_.theme_pareto=1;(function($){$.ua($.ea.anychart.themes.defaultTheme,{pareto:{defaultSeriesType:"column",tooltip:{displayMode:"union"},interactivity:{hoverMode:"by-x"},yAxes:[{orientation:"left"},{orientation:"right",labels:{format:"{%Value}%"}}]}});}).call(this,$)}
$_=window.anychart;$_.$=$;$_._=_});