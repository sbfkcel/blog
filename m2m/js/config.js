seajs.config({
	//文件编码
	charset: 'utf-8',

	//基础路径
	base:'./',

	//路径配置
	paths:{
		'feUtil':'http://pic.my4399.com/re/cms/feUtil/',
		'seajs':'http://pic.my4399.com/re/cms/feUtil/seajs/3.0.0/',
		'js':'js',
		'data':'data'
	},

	//别名配置
	alias:{
		'seajs-css':'seajs/seajs-css',
		'seajs-text':'seajs/seajs-text',
		'seajs-combo':'seajs/seajs-combo',
		'seajs-flush':'seajs/seajs-flush',
		'seajs-debug':'seajs/seajs-debug',
		'seajs-log':'seajs/seajs-log',
		'seajs-health':'seajs/seajs-health',

		'jquery':'feUtil/jquery/1.7.2/jquery.min',
		'png':'feUtil/DD_belatedPNG/0.0.8a/DD_belatedPNG',
		'json2':'feUtil/json2/20150503/json2'
	},

	//变量配置
	vars:{
		'ver':'20160412'
	},

	//预加载项
	preload:[
		'seajs-css',
		'seajs-text',
		'seajs-log',
		'seajs-health',
		this.JSON ? '' : 'json2'
	]

	// //映射配置
	// map:[
	// 	['.js','.js?v=20160412'],
	// 	['.css','.css?v=20160412']
	// ],
	// debug:true
});

//入口
seajs.use('./js/main');