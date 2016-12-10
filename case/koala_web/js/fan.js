//首页下载配置
var down = {"info":[
	//Mac
	{"download":"http://Mac","version":"1.3.1","updated":"2013-05-23"},

	//Linux32、Linux64、Ubuntu32、Ubuntu64
	{"download":[
		"http://Linux32",
		"http://Linux64",
		"http://Ubuntu32",
		"http://Ubuntu64"
	],"version":"1.3.1","updated":"2013-05-23"},

	//Win
	{"download":"http://win","version":"1.3.1","updated":"2013-05-23"}

]};
//导航菜单配置
var siteConfig = {
	"en_menu":[
		{"name":"Home","link":"index.html","target":"","iconame":""},
		{"name":"FAQ","link":"javascript:void(0)","target":"_blank","iconame":""},
		{"name":"Changelog","link":"Changelog.html","target":"","iconame":""},
		{"name":"History","link":"javascript:void(0)","target":"_blank","iconame":""},
		{"name":"donate","link":"http://www.paypal.com/","target":"_blank","iconame":"donateIco16"}
	],
	"cn_menu":[
		{"name":"首页","link":"index_zh.html","target":"","iconame":""},
		{"name":"FAQ","link":"javascript:void(0)","target":"_blank","iconame":""},
		{"name":"更新日志","link":"Changelog_zh.html","target":"","iconame":""},
		{"name":"历史版本","link":"javascript:void(0)","target":"_blank","iconame":""},
		{"name":"捐助","link":"http://www.alipay.com/","target":"_blank","iconame":"donateIco16"}
	],
	"lang":[
		{"name":"English","link":"index.html"},
		{"name":"简体中文","link":"index_zh.html"}
	],
	"footer":"Created By <a href='http://t.qq.com/china1099' target='_blank'>单炒饭</a> & Ethan Lai"
};
var temp = {};
$(function(){
	temp["url"] = window.location.href;
	ui.defaulHome();
	ui.siteMenu();
	ui.footerBottom();
	ui.animation();
	ui.userOs();
	ui.otherDownbox();
	$(window).resize(function(){
		ui.footerBottom();
	});
});
var public = {
	/**
	 * 获取cookie值
	 * @param  {string} name 需要获取的cookie名称
	 * @return {strong}      cookie值或""
	 */
	getCookie:function(name){
		var cookie = document.cookie.split("; ");
		for(i in cookie){
			var cookielist = cookie[i].split("=");
			if(cookielist[0] == name){
				return cookielist[1]
			};
		};
		return null;
	},
	/**
	 * 设置cookie值
	 * @param {string} name 需要设置的cookie名称
	 * @param {string} val  对应的cookie值
	 * @param {number} time 有效期（天）、null、undefined
	 */
	setCookie:function(name,val,time){
		var oDate = new Date();
		oDate.setDate(oDate.getDate()+time);
		oDate = oDate.toGMTString();
		val = escape(val);
		var t = !time ? "" : ";expires="+oDate;
		document.cookie=name+ "=" +val+t;
	}
};

var ui = {
	//default首页
	defaulHome:function(){
		var language = navigator.appName == 'Netscape' ? navigator.language : navigator.browserLanguage;
		function osZh(){
			return language.indexOf('zh') > -1 ? !0 : !-1;
		};
		function pageZh(){
			var cnmenu = siteConfig.cn_menu;
			for(i in cnmenu){
				if(temp["url"].indexOf(cnmenu[i].link) > -1){
					return !0;
				};
			};
			return !-1;
			//return temp["url"].indexOf("_zh") > -1 ? !0 : !-1;
		};

		var url = siteConfig.cn_menu[0].link;
		if(osZh() && !public.getCookie('lang')){
			location.href = url;
			public.setCookie('lang','cn',30);
		}else if(public.getCookie('lang')=='cn' && !pageZh()){
			location.href = url;
		};
	},
	//banner动画
	animation:function(){
		if(!!-[1,]){
			$("#bannerA").addClass("bannerA_load");
		};
	},
	//header菜单&捐赠菜单处理
	siteMenu:function(){
		var obj = $("#headerMenu");
		var olangbox = $("#headerLang");
		var menu;
		var menuhtml = langhtml = "";

		//语言切换菜单处理
		var langList = siteConfig.lang;
		for(var i=0; i<langList.length; i++){
			langhtml+="<li><a href='"+langList[i].link+"'>"+langList[i].name+"</a></li>";
		};
		olangbox.html(langhtml);

		var oLogo = $(".logo");
		var alangMenuList = olangbox.find("a");
		if(public.getCookie('lang') == 'cn'){
			menu = siteConfig.cn_menu;
			alangMenuList.eq(1).addClass("current");
		}else{
			menu = siteConfig.en_menu;
			alangMenuList.eq(0).addClass("current");
		};
		oLogo.attr("href",menu[0].link);

		alangMenuList.click(function(){
			if(alangMenuList.index($(this))==1){
				public.setCookie('lang','cn',30);
			}else{
				public.setCookie('lang','en',30);
			};
		});

		//导航菜单处理
		for(var i=0; i<menu.length; i++){
			if(menu[i].iconame != ""){
				menuhtml+="<li><a href="+menu[i].link+" target="+menu[i].target+"><em class='ico16 "+menu[i].iconame+"'></em>"+menu[i].name+"</a></li>";
			}else{
				menuhtml+="<li><a href="+menu[i].link+" target="+menu[i].target+">"+menu[i].name+"</a></li>";
			};
		};
		obj.html(menuhtml);

		var menulist = obj.find("a");
		function menuCurrnetIndex(){
			for(var i=0; i<menu.length; i++){
				if(temp["url"].indexOf(menu[i].link) > 0){
					return i;
				};
			};
			return 0;
		};
		menulist.eq(menuCurrnetIndex()).addClass("current");

		//捐赠菜单处理
		var donateList = $(".donateLink");
		donateList.attr("href",menu[menu.length-1].link);
	},
	//footer居最底
	footerBottom:function(){
		var obj = $("#footer")
		var sBodyHeight = document.body.clientHeight;
		var sWinHeight = $(window).height();

		if(sBodyHeight < sWinHeight){
			obj.css({
				'position':'absolute',
				'left':'0px',
				'bottom':'0px'
			})
		}else{
			obj.removeAttr("style");
		};
		obj.html(siteConfig.footer);
	},
	//动态设置首页下载按钮
	userOs:function(){
		var download,version,updated,iconame,html = null;
		function os(osName){
			return navigator.platform.indexOf(osName);
		};
		function downInfo(number){
			download = down.info[number].download;
			version = down.info[number].version;
			updated = down.info[number].updated;
		};
		if(os("Mac") == "0"){
			downInfo(0);
			iconame = "appleIco25";
		}else if(os("Ubuntu") == "0" || os("Linux") == "0"){
			downInfo(1);
		}else{
			downInfo(2);
			iconame = "windowIco25";
		};
		if(os("Ubuntu") == "0" || os("Linux") == "0"){
			html = "<ul class='linuxDownBox'><li class='linux'><em class='ico25 linuxIco25'></em><span class='name'>Linux:</span><a target='_blank' class='blue' href='"+download[0]+"'>32bit</a>/<a target='_blank' class='green' href='"+download[1]+"'>64bit</a></li><li class='ubuntu'><em class='ico25 ubuntuIco25'></em><span class='name'>Ubuntu:</span><a target='_blank' class='blue' href='"+download[2]+"'>32bit</a>/<a target='_blank' class='green' href='"+download[3]+"'>64bit</a></li></ul><div class='linuxVersion'>version "+version+" "+updated+"</div>";
		}else{
			html = "<a target='_blank' href='"+download+"'class='downButton'><span class='icoName'><em class='ico25 "+iconame+"'></em>Download</span><span class='version'>version "+version+" "+updated+"</span></a>";
		};
		$("#downButtonBox").html(html);
	},
	//首页更多下载
	otherDownbox:function(){
		var obj = $("#otherDownbox");
		obj.hover(function(){
			$(this).addClass("currentMenu");
		},function(){
			$(this).removeClass("currentMenu");
		});

		var oAlist = obj.find("a");
		function downlink(){
			if(arguments.length == 1){
				return down.info[arguments[0]].download;
			}else if(arguments.length == 2){
				return down.info[arguments[0]].download[arguments[1]];
			}
		};
		//Win、Mac、Linux32、Linux64、Ubuntu32、Ubuntu64
		var aDownLink = [
			downlink(2),
			downlink(0),
			downlink(1,0),
			downlink(1,1),
			downlink(1,2),
			downlink(1,3)
		];
		oAlist.each(function(index){
			$(this).attr("href",aDownLink[index]);
		});
	}
}