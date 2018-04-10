/**
 * AnyChart is lightweight robust charting library with great API and Docs, that works with your stack and has tons of chart types and features.
 *
 * Modules: data-adapter
 * Version: 8.1.0.1826 (2017-12-20 00:49)
 * License: https://www.anychart.com/buy/
 * Contact: sales@anychart.com
 * Copyright: AnyChart.com 2017. All rights reserved.
 */
(function(global,factory){if(typeof module==='object'&&typeof module.exports==='object'){var wrapper=function(w){if(!w.document){throw Error('AnyChart requires a window with a document');}factory.call(w,w,w.document);w.acgraph.isNodeJS=true;return w.anychart;};module.exports=global.document?wrapper(global):wrapper;}else{factory.call(global,window,document)}})(typeof window!=='undefined'?window:this,function(window,document,opt_noGlobal){var $,_,$_=this.anychart;if($_&&(_=$_._)){$=$_.$}else{throw Error('anychart-base.min.js module should be included first. See modules explanation at https://docs.anychart.com/Quick_Start/Modules for details');$={};_={}}if(!_.data_adapter){_.data_adapter=1;(function($){var IQ=function(a){try{return a.b?a.b.responseText:""}catch(b){return""}},KQ=function(a,b,c,d,e,f,h,k,l){var m=JQ("fromXml",c,l);m&&(b=(0,$.sa)(KQ.b,void 0,b,c,l,m),$.iQ(a,b,d,e,f,h,k))},JQ=function(a,b,c){var d=$.fk.anychart;if(!d)return b&&b.call(c,500,"AnyChart in not present on the page."),null;d=d[a];return d?d:(b&&b.call(c,500,$.ya("anychart.%s is not available.",a)),null)},ufa=function(a){return[$.sQ(a)||null]},vfa=function(a){var b;try{b=a.b?a.b.responseXML:null}catch(c){b=null}return[$.fk.anychart.utils.xml2json(b).data]},
wfa=function(a){a=$.sQ(a);for(var b=a.feed.entry,c={title:a.feed.title.$t,rows:[]},d=0,e=b.length;d<e;d++){var f=b[d],h=f.gs$cell.$t,k=f.gs$cell.col-1,f=f.gs$cell.row-1;c.rows[f]||(c.rows[f]=[]);c.rows[f][k]=h}c.header=c.rows.shift();return[c,a]},xfa=function(a){return[IQ(a)]},LQ=function(a,b,c,d,e){e=e.target;if($.qQ(e)){try{var f=a(e)}catch(h){c&&c.call(d,500,h)}b.apply(d,f)}else c&&c.call(d,e.F,$.tQ(e))};$.fk.anychart.exports||$.ck(4,null,["Exporting"]);
KQ.b=function(a,b,c,d,e){e=e.target;if($.qQ(e)){try{var f=IQ(e),h=d(f)}catch(k){b&&b.call(c,500,k)}a?$.B(a)?(h.container(a),h.draw()):$.D(a)&&a.call(c,h):h.container()&&h.draw()}else b&&b.call(c,e.F,$.tQ(e))};$.F("anychart.fromXmlFile",KQ);$.F("anychart.fromJsonFile",function(a,b,c,d,e,f,h,k,l){var m=JQ("fromJson",c,l);m&&(b=(0,$.sa)(KQ.b,void 0,b,c,l,m),$.iQ(a,b,d,e,f,h,k))});
$.F("anychart.data.parseHtmlTable",function(a,b,c,d,e,f){var h=window.document.querySelector(a||"table");a=null;var k;if(h){d=d||"tr:first-child th";c=c||"td, th";b=b||"tr";a={};(e=h.querySelector(e||"caption"))&&(k=f?f.call(void 0,e):e.innerText);k&&(a.title=k);var l=h.querySelectorAll(d),m=[];e=null;d=0;for(k=l.length;d<k;d++){var p=l[d];p&&!e&&(e=$.Ie(p));m.push(f?f.call(void 0,p):p.innerText)}m.length&&(a.header=m);if((b=h.querySelectorAll(b))&&b.length){h=[];d=0;for(k=b.length;d<k;d++)if(m=b[d],
m!=e){l=[];if((m=m.querySelectorAll(c))&&m.length)for(var p=0,q=m.length;p<q;p++){var r=m[p];f?l.push(f.call(void 0,r)):l.push(r.innerText)}l.length&&h.push(l)}a.rows=h}}return a});$.F("anychart.data.loadJsonFile",function(a,b,c,d,e,f,h,k,l){b=(0,$.sa)(LQ,void 0,ufa,b,c,l);$.iQ(a,b,d,e,f,h,k)});$.F("anychart.data.loadXmlFile",function(a,b,c,d,e,f,h,k,l){b=(0,$.sa)(LQ,void 0,vfa,b,c,l);$.iQ(a,b,d,e,f,h,k)});
$.F("anychart.data.loadCsvFile",function(a,b,c,d,e,f,h,k,l){b=(0,$.sa)(LQ,void 0,xfa,b,c,l);$.iQ(a,b,d,e,f,h,k)});
$.F("anychart.data.loadGoogleSpreadsheet",function(a,b,c,d,e){b=(0,$.sa)(LQ,void 0,wfa,b,c,e);$.B(a)?(c=a,a="od6"):(c=a.key,a=$.n(a.sheet)?a.sheet:"od6");a=new $.GP("https://spreadsheets.google.com/feeds/cells/"+c+"/"+a+"/public/values");a.F.set("alt","json");c=Math.floor(2147483648*Math.random()).toString(36)+Math.abs(Math.floor(2147483648*Math.random())^(0,$.lm)()).toString(36);a.F.set("zx",c);$.iQ(a.toString(),b,"GET",null,null,d)});}).call(this,$)}
$_=window.anychart;$_.$=$;$_._=_});