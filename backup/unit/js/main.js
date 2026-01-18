!function(){
	var data = {
		'density':null,
		'deviceW':screen.width,
		'deviceH':screen.height,
		'isMobile':true,
		'fontSize':[12,14,16,18,20,22,24,26,28,30,32],
		'otherDevice':[
			{
				'name':'iPhone3GS',
				'inch':'3.5',
				'pt':'320x480',
				'reader':'@1x',
				'px':'320x480',
				'render':null,
				'ppi':163
			},
			{
				'name':'iPhone4/4s',
				'inch':'3.5',
				'pt':'320x480',
				'reader':'@2x',
				'px':'640x960',
				'render':null,
				'ppi':330
			},
			{
				'name':'iPhone5/5s/5c',
				'inch':'4.0',
				'pt':'320x568',
				'reader':'@2x',
				'px':'640x1136',
				'render':null,
				'ppi':326
			},
			{
				'name':'iPhone6',
				'inch':'4.7',
				'pt':'375x667',
				'reader':'@2x',
				'px':'750x1334',
				'render':null,
				'ppi':326
			},
			{
				'name':'iPhone6 Plus',
				'inch':'5.5',
				'pt':'414x736',
				'reader':'@3x',
				'px':'1242x2208',
				'render':'1080x1920',
				'ppi':401
			}
		]
	};

	//得到设备密度
	if(!window.devicePixelRatio){
		data.density = null;
	}else{
		data.density = window.devicePixelRatio;
	};

	if(window.navigator.userAgent.indexOf('Window') > 0){
		alert('请使用移动设备访问该页面');
		data.density = null;
		data.isMobile = false;
	};

	var html = template('tpl',data);
	document.body.innerHTML = html;

	var imgCode = document.getElementById('pageImgCode'),
		src = location.href;

	src = 'http://qr.liantu.com/api.php?text='+src+'&bg=ffffff&fg=000000&el=l&w=180&m=0';

	imgCode.src = src;
}();