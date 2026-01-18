define(function(require,exports,module){
	var $ = require('jquery');
	
	//载入数据文件
	window.row_a = require('data/row_a.tpl');
		row_a = row_a.split('\r\n');

	window.row_b = require('data/row_b.tpl');
		row_b = row_b.split('\r\n');

	//将ip为'0.0.0.0'的排除
	for(var i in row_a){
		if(row_a[i] == '0.0.0.0'){
			row_a[i] = null;
		};
	};
	for(var i in row_b){
		if(row_b[i] == '0.0.0.0'){
			row_b[i] = null;
		};
	};

	window.temp = [],
	window.newTemp = [];




	//根据给出的一组数据筛选对应关系
	window.seekContact = function (index){

		temp[index] = [];
		temp[index][0] = row_a[index];

		for(var i=0; i<temp[index].length; i++){
			var val = temp[index][i];

			for(var ii=0; ii < row_a.length; ii++){
				if(val == row_a[ii] && val){
					if(temp[index].length <= 1){
						temp[index] = [];
					};
					temp[index].push(row_a[ii]);
					row_a[ii] = null;

					temp[index].push(row_b[ii]);
					row_b[ii] = null;
				};
			};

			for(var ii=0; ii < row_b.length; ii++){
				if(val == row_b[ii] && val){
					if(temp[index].length <= 1){
						temp[index] = [];
					};
					temp[index].push(row_b[ii]);
					row_b[ii] = null;

					temp[index].push(row_a[ii]);
					row_a[ii] = null;
				};
			};
		};
	};


	//开始匹配
	var i=0;
	function start(){
		if(i < row_a.length && row_a[i] != null){
			seekContact(i);
		}else if(row_a[i] == null){
			temp[i] = undefined;
		};
		
		i++;

		if(i < row_a.length){
			start();
		};
	};
	start();

	//匹配结果去重
	for(var i=0; i<temp.length; i++){
		if(typeof temp[i] == 'object'){
			var n = {},
				r = [];
			for(var ii=0; ii<temp[i].length; ii++){
				if(!n[temp[i][ii]]){
					n[temp[i][ii]] = true;
					r.push(temp[i][ii]);
				};
			};
			temp[i] = r;
		};	
	};

	//导出数据到页面
	var nRelated = 0,
		oTbody = $('#oDataTbody'),
		oTitle = $('#nRelated__txt'),
		onPageState = $('#nRelated__pageState'),
		oPrev = $('#prev'),
		oNext = $('#next'),
		oTip = $('#tip'),
		nPageLength = 500,
		nDefault = 0;

	//输出统计结果
	for(var i=0; i<temp.length; i++){
		if(temp[i] != undefined || temp[i] != null){
			newTemp.push(temp[i])
		};
	};

	oTitle.html('第一列有'+row_a.length+'条记录，第二列有'+row_b.length+'条记录，共找出'+newTemp.length+'组有关联的数据');

	oPrev.click(function(){
		nDefault--;
		outTable(nDefault);
	});

	oNext.click(function(){
		nDefault++;
		outTable(nDefault);

	});

	//输出页面数据
	function outTable(){
		var nMaxPage = newTemp.length / nPageLength;

		if(nDefault <= 1){
			nDefault = 1;
			oPrev[0].className = 'button--disabled';
		}else if(nDefault >= nMaxPage){
			nDefault = nMaxPage;
			oNext[0].className = 'button--disabled';
		}else{
			oPrev[0].className = '';
			oNext[0].className = '';
		};

		oTip.hide();

		onPageState.html('每页'+nPageLength+'组记录 '+Math.ceil(nDefault)+'/'+Math.ceil(nMaxPage));

		oTbody.html('');

		//按页加载数据		
		for(var i = (Math.ceil(nDefault) - 1) * nPageLength; i < (Math.ceil(nDefault) * nPageLength); i++){
			var otr = $('<tr><td>ID:'+i+'</td></tr>');

			//最大页数向上取整，数据如果不存在则不加载到页面
			try {
				for(var ii=0; ii<newTemp[i].length; ii++){
					var otd = $('<td></td>');
					otd.html(newTemp[i][ii]);
					otd.appendTo(otr);
				};
				otr.appendTo(oTbody);
			}catch(err){
			};
		};

		// //一次加载所有的数据
		// for(var i=0; i<temp.length; i++){
		// 	if(typeof temp[i] == 'object'){
		// 		var otr = $('<tr></tr>');
		// 		for(var ii=0; ii<temp[i].length; ii++){
		// 			var otd = $('<td></td>');
		// 			otd.html(temp[i][ii]);
		// 			otd.appendTo(otr);
		// 		};
		// 		otr.appendTo(oTbody);
		// 	};
		// };
	};

	//默认加载第一页
	outTable();

});