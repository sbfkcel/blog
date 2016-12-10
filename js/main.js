var temp = {};
temp["url"] = window.location.href;

window.onload = function(){
	ui.footerBottom();
	ui.ifhome();
	ui.headerMenu();
};
window.onresize = function(){
	ui.footerBottom();
	ui.menuAnimate(temp["currentmenu"]);
};
window.onscroll = function(){
	temp["scrollTop"]=document.documentElement.scrollTop||document.body.scrollTop;
	var obj = f.id("gotop");
	if(temp["scrollTop"]>60){
		f.animate(obj,{
			bottom:30,
			opacity:100
		});
	}else{
		f.animate(obj,{
			bottom:-100,
			opacity:0
		});
	};
};

var f = {
	/**
	 * id选择器
	 * @param  {string} idname dom的id
	 * @return {obj}        dom对象
	 */
	id:function(idname){
		return document.getElementById(idname);
	},
	tagName:function(obj,tag){
		return obj.getElementsByTagName(tag);
	},
	/**
	 * 获取元素样式
	 * @param  {obj} obj  获取的对象
	 * @param  {string} name 获取的样式名称
	 */
	getStyle:function(obj,sName){
		if(obj.currentStyle){
			return obj.currentStyle[sName];
		}else{
			return getComputedStyle(obj,false)[sName];
		};
	},
	animate:function(obj,json,fnEnd){
		//清空所有动画计时器
		clearInterval(obj.timer);
		obj.timer=setInterval(function(){
			var bStop = true;	//假设所有运行都已经完成了
			
			//将json中运动从开始到结束
			for(var attr in json){
				//透明动画作单独处理
				var cur=0;
				if(attr=='opacity'){
					cur=Math.round(parseFloat(f.getStyle(obj,attr))*100);
				}else{
					cur=parseInt(f.getStyle(obj,attr));
				};
				var speed=(json[attr]-cur)/6;

				speed=speed>0 ? Math.ceil(speed) : Math.floor(speed);
				speed=parseInt(speed);
				if(cur!=json[attr])bStop=false;
				if(attr=='opacity'){
					obj.style.filter='alpha(opacity:'+(cur+speed)+')';
					obj.style.opacity=(cur+speed)/100;

				}else{
					obj.style[attr]=cur+speed+'px';
				};
			};
			//如果都已运行完成清除定时器，并调用已传的函数
			if(bStop){
				clearInterval(obj.timer);
				if(fnEnd)fnEnd();
			};
		},30)
	},
	/**
	 * 获取指定元素内指定class dom
	 * @param  {obj} oParent 父级对象
	 * @param  {string} sClass  样式名称
	 * @return {array}         返回最终的dom元素
	 */
	getByClass:function(oParent,sClass){
		var aEle = oParent.getElementsByTagName('*');
		var aResult = [];
		for(var i=0; i<aEle; i++){
			if(aEle[i].className==sClass){
				aResult.push(aEle[i])
			};
		};
		return aResult;
	},
	/**
	 * 获取元素位置
	 * @param  {obj} elementId 要获取的DOM元素
	 * @return {josn}           x水平坐，y垂直坐标
	 */
	getElementPos:function (dom){
		var ua = navigator.userAgent.toLowerCase();
		var isOpera = (ua.indexOf('opera') != -1);
		var isIE = (ua.indexOf('msie') != -1 && !isOpera); // not opera spoof
		var el = dom;
		if(el.parentNode === null || el.style.display == 'none') {
			return false;
		}     
		var parent = null;
		var pos = [];    
		var box;

		//ie
		if(el.getBoundingClientRect){         
			box = el.getBoundingClientRect();
			var scrollTop = Math.max(document.documentElement.scrollTop, document.body.scrollTop);
			var scrollLeft = Math.max(document.documentElement.scrollLeft, document.body.scrollLeft);
			return {x:box.left + scrollLeft, y:box.top + scrollTop};
		}else if(document.getBoxObjectFor){
			box = document.getBoxObjectFor(el);
			var borderLeft = (el.style.borderLeftWidth)?parseInt(el.style.borderLeftWidth):0;
			var borderTop = (el.style.borderTopWidth)?parseInt(el.style.borderTopWidth):0;
			pos = [box.x - borderLeft, box.y - borderTop];
		}else{
			pos = [el.offsetLeft, el.offsetTop];
			parent = el.offsetParent;    
			if (parent != el) {
				while (parent) {
					pos[0] += parent.offsetLeft;
					pos[1] += parent.offsetTop;
					parent = parent.offsetParent;
				}
			}  
			if (ua.indexOf('opera') != -1 || ( ua.indexOf('safari') != -1 && el.style.position == 'absolute' )) {
				pos[0] -= document.body.offsetLeft;
				pos[1] -= document.body.offsetTop;        
			}   
		}             
		if (el.parentNode) {
			parent = el.parentNode;
		}else{
			parent = null;
		}
		while (parent && parent.tagName != 'BODY' && parent.tagName != 'HTML') { // account for any scrolled ancestors
			pos[0] -= parent.scrollLeft;
			pos[1] -= parent.scrollTop;
			if (parent.parentNode) {
				parent = parent.parentNode;
			} else {
				parent = null;
			}
		}
		return {x:pos[0], y:pos[1]};
},
	/**
	 * ajax函数
	 * @param  {string} url    请求地址
	 * @param  {function} fuSucc 获取成功调用函数
	 * @param  {function} fnfald 失败调用函数
	 */
	ajax:function(url,fuSucc,fnfald){
		//创建ajax对象，并处理好兼容
		var oajax = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Misrosoft.XMLHTTP");
		//连接到服务器（方法，地址，异步传输）
		oajax.open('get',url,true);
		//发送请求
		oajax.send();
		//接收返回
		oajax.onreadystatechange = function(){
			//readyState查看进行到哪一步，到4的时候说明读取完成
			if(oajax.readyState==4){
				//status返回请求结果，200说明成功，否则失败
				if(oajax.status==200){
					//使用responseText得到最终内容
					fuSucc(oajax.responseText);
				}else{
					//如果失败，返回结果代码
					if(fnfald){
						fnfald(oajax.status);
					};
				};
			};
		};
	}
}
var ui = {
	scrollTop:function(y){
		var timer = null;
		var y = arguments[0];
		clearInterval(timer);
		timer = setInterval(function(){
			var speed=(y-temp["scrollTop"])/5;
			speed=speed>0?Math.ceil(speed):Math.floor(speed);
			scroll(0,temp["scrollTop"]+speed);

			if(temp["scrollTop"]+speed == y){
				clearInterval(timer);
			};
		},30);
	},
	ishome:function(){
		if(temp["url"].indexOf('##')==-1){
			return true;
		}else{
			return false;
		};
	},
	ifhome:function(){
		var obj = f.id("header");
		var ft = f.id("footer");
		//首页与内页导航作区分处理
		if(ui.ishome()){
			obj.className = 'homeheader';
			//ft.style.display = 'block';
			ft.className = 'footer';
			temp["currentmenu"] = 0;
			ui.menuAnimate(temp["currentmenu"]);
		}else{
			//ft.style.display = 'none';
			ft.className = 'footer footerNone';
			obj.className = 'homeheader header';

			var link = temp["url"].split("##");
			//循环检查当前URL参数对应的菜单高亮索引
			var amenulist = ui.menulist();
			var alink = [];
			for(var i=0; i<amenulist.length; i++){
				alink.push(amenulist[i].href)
			};
			for(var i=0; i<alink.length; i++){
				if(alink[i]==temp["url"]){
					temp["currentmenu"] = i;
				};
			};
			ui.menuAnimate(temp["currentmenu"]);
			ui.loadContent(link);	
		};
	},
	/**
	 * 获取导航菜单
	 * @return {array} 导航菜单
	 */
	menulist:function(){
		var obj = f.id("header");
		var oul = obj.getElementsByTagName("ul")[0];
		var amenu = oul.getElementsByTagName("a");
		return amenu;
	},
	headerMenu:function(){
		var amenu = ui.menulist();
		var amenuhref = [];
		for(var i=0; i<amenu.length; i++){
			amenu[i].index = i;
			amenu[i].onclick = function(){
				if(this.href != temp["url"]){
					temp["url"] = this.href;
					ui.ifhome();
				};
				if(this.index == 0){
					document.getElementsByTagName("body")[0].removeChild(f.id("main"));
					return false;
				};
				temp["currentmenu"] = this.index;
				ui.menuAnimate(temp["currentmenu"]);
			};
		};

	},
	/**
	 * 导航动画
	 * @param  {number} index 高亮菜单索引
	 */
	menuAnimate:function(index){
		var amenu = ui.menulist();
		//var oldx = amenu[index].offsetLeft+amenu[index].offsetParent.offsetLeft;
		var oldx = f.getElementPos(amenu[index]).x;
		var oldw = amenu[index].offsetWidth;
		var bar = f.id("currentmenu");
		f.animate(bar,{
			width: oldw,
			left: oldx
		});
	},
	/**
	 * ajax加载内容到main
	 * @param  {array} url 分割好的数组，带href参数的
	 */
	loadContent:function(url){
		url.shift();
		//将参数转成json格式
		var ajson = [];
		for(var j=0; j<url.length; j++){
			//通过"="号将名称和参数分开，并存放到数组
			var val = url[j].split('=');
			ajson.push('"'+val[0]+'":"'+val[1]+'"');
		};
		var sjson = '{'+ajson.join()+'}';	//将数组转成字符串

		var jsonval = eval('(' + sjson + ')');	//将字符串转成最终json

		//ajax加载请求内容
		f.ajax('/'+jsonval.href+'.html?'+new Date().getTime(),function(e){
			var obj = f.id("main");
			if(obj){
				obj.innerHTML = e;
			}else{
				var main = document.createElement('div');
				main.id = 'main';
				main.innerHTML = e;
				main.className = 'main';

				var footer = f.id("footer");
				var body = document.getElementsByTagName("body")[0];
				body.insertBefore(main,footer);
			};

		},function(e){
			alert('请求错误，读取失败');
		});
	},
	//footer居最底
	footerBottom:function(){
		var obj = f.id("footer")
		var sBodyHeight = document.body.clientHeight;
		var sWinHeight = document.documentElement.clientHeight;

		if(sBodyHeight < sWinHeight){
			obj.style.position = 'absolute';
			obj.style.bottom = '0px';
		}else{
			obj.style.cssText = '';
		};
	}
}