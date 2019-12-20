var WeiboData={
    rid:0,
    aid:0,
    data:null,
    api:null,
    all:[],
    node:[],
    aurl:[],
    oid:[],
    tree:{},
    page:1,
    wid:[],
    init:function(o,idx,analyseid){
        this.data={};
        this.rid=idx||0;
        this.aid=analyseid||0; //分析新浪内容微博ID
        this.api=document.getElementById(o);
    },
    WeiboPath:function(url){
        var uArr=url.split("/");
        var id=uArr[uArr.length-1];
        if(Math.abs(id)){
            this.api.log("开始获取微博...");
            this.api.callWeiboApi("2/statuses/show","WeiboData.statusResult",{"id":id});
        }else{
            this.api.callWeiboApi("2/statuses/queryid","WeiboData.idResult",{"mid":id,"type":1,"isBase62":1});
        }
    },
    idResult:function(d){
        this.api.log("[id:"+d["id"]+"]，开始获取微博...");
        this.api.callWeiboApi("2/statuses/show","WeiboData.statusesResult",{"id":d["id"]});
    },
    statusesResult:function(d){
        this.api.log("获取微博成功，开始分析...");
        this.data["reposts"]=d["reposts_count"];
        if(this.rid)
            this.postData("repost_num="+d["reposts_count"]);
        if(this.aid){
            var aurl = "/my_ajax_weiboManage/?act=updateanalyserepost&id="+this.aid;
            this.postData("repost_num="+d["reposts_count"],aurl); 
            this.api.log("更新转发总数成功...");
        }
        
        this.tree["name"] = d["user"]["screen_name"];
        this.tree["parent"] = 0;
        this.tree["id"] = d["id"];
        this.tree["create"] = d["created_at"];
        this.tree["followers"] = d["user"]["followers_count"];
        this.tree["gender"] = d["user"]["gender"];
        this.tree["city"] = d["user"]["city"];
        this.tree["location"] = d["user"]["location"];
        this.tree["verified"] = d["user"]["verified"];
        this.tree["children"] = [];
        
        this.all.push(this.tree);
        this.node.push(this.tree);
        
        this.getChildren();
    },
    getChildren:function(){
        this.api.log("开始获取转发...");
        var id=this.node[0]["id"];
        this.api.callWeiboApi("2/statuses/repost_timeline","WeiboData.childrenResult",{"id":id,"count":"200","page":this.page});
    },
    childrenResult:function(d){
        var total=d["total_number"];
        for(var i=0;i<d.reposts.length;i++){
            var o = this.getChild(d["reposts"][i]["id"]);
            if (o==null) {
                o = {};
                if(d["reposts"][i]["user"]){
                    o.name = d["reposts"][i]["user"]["screen_name"];
                    o.followers = d["reposts"][i]["user"]["followers_count"];
                    o.gender = d["reposts"][i]["user"]["gender"];
                    o.city = d["reposts"][i]["user"]["city"];
                    o.location = d["reposts"][i]["user"]["location"];
                    o.verified = d["reposts"][i]["user"]["verified"];
                }
                o.id = d["reposts"][i]["id"];
                o.create = d["reposts"][i]["created_at"];
                o.children = [];
            }
            if (o.parent)
                this.removeChild(o.parent, o);
            
            o.parent = this.node[0]["id"];
            this.node[0]["children"].push(o);
            
            if (this.node[0].parent == 0)
		this.all.push(o);
            
            if (d["reposts"][i]["reposts_count"] > 0)
		this.node.push(o);
        }
        
        this.api.log("请等待，正在分析传播路径... [" + this.node.length + ":" + this.page + "]");
        
        if (total>this.page*200 && this.page<18) {
            this.page++;
            this.getChildren();
        }else{
            this.node.shift();
            this.page = 1;
            if (this.node.length > 0){
                this.getChildren();
            }else {
                this.api.log("生成传播数据成功!");
                if(this.aid){
                    var aurl = "/my_ajax_weiboManage/?act=updateanalyserepost&id="+this.aid;
                    this.postData("reposts="+JSON.stringify(this.tree),aurl);
                    this.api.log("所有转发分析完成!");
                }else{
                    this.postData("path="+JSON.stringify(this.tree));
                    this.fansData();
                }
            }
        }
    },
    fansData:function(){
        this.api.log("开始分析转发博主属性...");
        var gender=[0,0];
        var verify=[0,0];
        var area={};
        var citys=["广州", "深圳", "北京", "上海", "重庆", "天津", "香港", "澳门", "台湾"];
        var fansArr=[ 
            {"title":"0-9", "value":10, "count":0},
            {"title":"10-49", "value":50, "count":0},
            {"title":"50-99", "value":100, "count":0},
            {"title":"100-199", "value":200, "count":0},
            {"title":"200-299", "value":300, "count":0},
            {"title":"300-399", "value":400, "count":0},
            {"title":"400-599", "value":500, "count":0},
            {"title":"500-999", "value":1000, "count":0},
            {"title":"1000-1999", "value":2000, "count":0},
            {"title":"2000-2999", "value":3000, "count":0},
            {"title":"3000-3999", "value":4000, "count":0},
            {"title":"4000-4999", "value":5000, "count":0},
            {"title":"5000-9999", "value":10000, "count":0},
            {"title":"10000-49999", "value":50000, "count":0},
            {"title":"50000-99999", "value":100000, "count":0}
        ];
        for(var i=0;i<this.all.length;i++){
            if(i>0){
                this.all[i].gender=="f"?gender[0]++:gender[1]++;
                this.all[i].verified?verify[0]++:verify[1]++;
                if(this.all[i].location){
                    var k = this.getKey(this.all[i].location, citys);
                    if(k!="其它")
                        area[k]?area[k][0]++:area[k] = [1, this.all[i].location];
                }
                this.addFansArr(this.all[i].followers, fansArr);
            }
        }
        var Arr=this.sortData(area);
        
        this.postData("gender=[{\"f\":\""+this.toPercent(gender[0], this.all.length)+"\",\"m\":\""+this.toPercent(gender[1], this.all.length)+"\"}]");
        this.postData("verify=[{\"true\":\""+this.toPercent(verify[0], this.all.length)+"\",\"false\":\""+this.toPercent(verify[1], this.all.length)+"\"}]");
        this.postData("area="+JSON.stringify(Arr));
        this.postData("fans="+JSON.stringify(fansArr));
        this.postData("reposts="+JSON.stringify(this.all));
        
        this.api.log("所有分析完成！");
    },
    getChild:function(id){
        var o = null;
        for (var i = 0; i < this.all.length; i++) {
            if (this.all[i].id == id)
                return this.all[i];
        }
        return o;
    },
    removeChild:function(id,child){
        var o = this.getChild(id);
        if (!o) return;
        for (var i = 0; i < o.children.length; i++) {
            if (o.children[i].id == child.id){
                o.children.splice(i, 1);
                return;
            }
        }
    },
    getKey:function(l,c){
        var result = "";
        for (var i = 0; i < c.length; i++) {
            if (l.indexOf(c[i]) > -1) {
                result = c[i];
            }
        }
        result = result?result:l;
        return result;
    },
    addFansArr:function(count,arr){
        for (var i = 0; i < arr.length; i++) {
            if (count < arr[i]["value"]){
                arr[i]["count"]++;
                return;
            }
        }
    },
    sortData:function(area){
        var tmp=[];
        for (var o in area)
            tmp.push( {"count":this.toPercent(Math.round(area[o][0]), this.all.length), "location":area[o][1]} );
        tmp.sort(function(a,b){
            return a["count"]-b["count"];
        });
        tmp.reverse();
        tmp = tmp.slice(0, 10);
        return tmp;
    },
    toPercent:function(v,a){
        return (Math.round(v / a * 10000) / 100).toString();
    },
    postData:function(d,_url){
        _url=_url||"/my_ajax_admin_activity/?act=updateEffect&id="+this.rid;
        $.ajax({
            url:_url,
            type:"post",
            data:d,
            success:function(r){
                //alert(r);
            }
        });
    },
    updateWeibo:function(){
        $.ajax({
            url:"/my_ajax_weiboManage/?act=updateIdList",
            type:"GET",
            error:function(){
                WeiboData.updateWeibo();
            },
            success:function(r){
                WeiboData.wid=eval(r);
                if(WeiboData.wid.length){
                    WeiboData.api.log("开始更新，共有"+WeiboData.wid.length+"个微博要更新...");
                    WeiboData.api.callWeiboApi("2/users/show","WeiboData.weiboInfoResult",{"uid":WeiboData.wid[0]});             
                }else{
                    WeiboData.api.log("没有需要更新的微博...");
                }
            }
        });
    },
    weiboInfoResult:function(d){
        this.wid.shift();
        var str="";
        for(var o in d){
            if(typeof(d[o])!="object"){
                str+=str?"&":"";
                str+=o+"="+d[o];
            }
        }
        this.postData(str, "/my_ajax_weiboManage/?act=updateWeiboInfo");
        if(this.wid.length){
            this.updateWeibo();
        }else{
            this.api.log("完成更新...");
        }
    },
    getUrlRepostNum:function(){
    	if(WeiboData.oid.length){
            WeiboData.api.log("开始分析，共有"+WeiboData.aurl.length+"条返链要分析...");
	        var uArr=WeiboData.aurl[0].split("/");
	        var id=uArr[uArr.length-1];
	        if(Math.abs(id)){
	            this.api.log("开始获取微博...");
	            this.api.callWeiboApi("2/statuses/show","WeiboData.getUrlResult",{"id":id});
	        }else{
	            this.api.callWeiboApi("2/statuses/queryid","WeiboData.idResulturl",{"mid":id,"type":1,"isBase62":1});
	        }  
        }else{
            WeiboData.api.log("没有返链需要的获取...");
        }
    },
    idResulturl:function(d){
		this.api.log("[id:"+d["id"]+"]，开始获取微博...");
        this.api.callWeiboApi("2/statuses/show","WeiboData.getUrlResult",{"id":d["id"]});
	},
	getUrlResult:function(d){
		this.api.log("获取微博成功，开始获取转发数...");
        var aurl = "/my_ajax_admin_activity/?act=updateurlrepostnum&id="+WeiboData.oid[0];
        this.postData("repost_num="+d["reposts_count"],aurl); 
        this.aurl.shift();
        this.oid.shift();
        if(this.oid.length){
            this.getUrlRepostNum();
        }else{
            this.api.log("获取返链转发完成!");
        }
	},
    weiboInfoData:function(){
        this.api.log("获取微博ID["+this.node[0]+"]资料...");
        this.api.callWeiboApi("2/users/show","WeiboData.userResult",{"uid":this.node[0]});
    },
    userResult:function(d){
        this.api.log("获取微博["+d["screen_name"]+"]成功...");
        var str="wid="+d["id"]+"&followers_count="+d["followers_count"];
        this.postData(str, "/my_ajax_weiboManage/?act=addRecord");
        this.page=1;
        this.rid=d["id"];
        this.all=[];
        this.getFans();
        this.node.shift();
    },
    getFans:function(cursor){
        cursor=cursor||0;
        this.api.log("开始获取粉丝数据["+cursor+"]...");
        this.api.callWeiboApi("2/friendships/followers","WeiboData.fansResult",{"uid":this.rid,"count":200,"cursor":cursor});
    },
    fansResult:function(d){
        this.api.log("获取粉丝数据成功...");
        for(var u in d["users"])
            this.all.push(d["users"][u]);
        if(this.all.length<2000 && d["next_cursor"]){
            this.getFans(d["next_cursor"]);
        }else{
            this.api.log("获取粉丝数据完成...");
            this.recordData();
        }
    },
    getActive:function(){
        
    },
    activeResult:function(){
        
    },
    recordData:function(){
        this.api.log("开始分析粉丝属性...");
        var v=0;
        var act=0;
        var gender=[0,0];
        var area={};
        var citys=["广州", "深圳", "北京", "上海", "重庆", "天津", "香港", "澳门", "台湾"];
        var fansArr=[ 
            {"title":"0-9", "value":10, "count":0},
            {"title":"10-49", "value":50, "count":0},
            {"title":"50-99", "value":100, "count":0},
            {"title":"100-199", "value":200, "count":0},
            {"title":"200-299", "value":300, "count":0},
            {"title":"300-399", "value":400, "count":0},
            {"title":"400-599", "value":500, "count":0},
            {"title":"500-999", "value":1000, "count":0},
            {"title":"1000-1999", "value":2000, "count":0},
            {"title":"2000-2999", "value":3000, "count":0},
            {"title":"3000-3999", "value":4000, "count":0},
            {"title":"4000-4999", "value":5000, "count":0},
            {"title":"5000-9999", "value":10000, "count":0},
            {"title":"10000-49999", "value":50000, "count":0},
            {"title":"50000-99999", "value":100000, "count":0}
        ];
        var source=[];
        for(var u in this.all){
            v+=this.all[u]["verified"]?1:0;
            act+=this.isActive(this.all[u])?1:0;
            this.all[u]["gender"]=="m"?gender[0]++:gender[1]++;
            if(this.all[u].location){
                var k = this.getKey(this.all[u].location, citys);
                if(k!="其它")
                    area[k]?area[k][0]++:area[k] = [1, this.all[u].location];
            }
            this.addFansArr(this.all[u].followers_count, fansArr);
        }
        var Arr=this.sortData(area);
        var url="/my_ajax_weiboManage/?act=updateRecord&id="+this.rid;
        var d="followers_verified_count="+this.toPercent(v, this.all.length)+"&followers_active_count="+this.toPercent(act, this.all.length);
        d+="&gender=[{\"m\":"+this.toPercent(gender[0], this.all.length)+",\"f\":"+this.toPercent(gender[1], this.all.length)+"}]";
        d+="&area="+JSON.stringify(Arr);
        d+="&fans_area="+JSON.stringify(fansArr);
        this.postData(d, url);
        this.api.log("粉丝数据分析完成...");
        this.getStatus();
    },
    isActive:function(u){
        return (u["followers_count"]>50 && u["statuses_count"]>50)?true:false;
    },
    getStatus:function(){
        this.api.log("获取最新微博...");
        this.api.callWeiboApi("2/statuses/user_timeline","WeiboData.statusResult",{"uid":this.rid,"count":100});
    },
    statusResult:function(d){
        this.api.log("获取微博成功，开始分析转发和评论...");
        var sArr=[0,0];
        var src=[];
        var len=d["statuses"].length;
        for(var s in d["statuses"]){
            sArr[0]+=d["statuses"][s]["reposts_count"];
            sArr[1]+=d["statuses"][s]["comments_count"];
            var s=d["statuses"][s]["source"];
            var reg=/<.+?>/g;
            s=s.replace(reg,"");
            this.addSource(s, src);
        }
        var url="/my_ajax_weiboManage/?act=updateRecord&id="+this.rid;
        var d="reposts_avg="+(sArr[0]/len)+"&comments_avg="+(sArr[1]/len);
        d+="&source="+JSON.stringify(src);
        this.postData(d, url);
        this.api.log("分析完成！还有"+this.node.length+"个帐号需要分析！");
        if(this.node.length)
            this.weiboInfoData(this.node[0]);
    },
    addSource:function(k,arr){
        var add=false;
        for(var v in arr){
            if(arr[v]["src"]==k){
                arr[v]["count"]++;
                add=true;
            }
        }
        if(!add)
            arr.push({"src":k,"count":1});
    },
    getLimit:function(){
        this.api.callWeiboApi("account/rate_limit_status","WeiboData.limitResult");
    },
    limitResult:function(d){
        this.api.log("当前用户剩余接口次数："+d["remaining_user_hits"]);
    },
    renderTo:function(c){
    var flashvars = {
        };
        var params = {
            menu: "false",
            scale: "noScale",
            allowFullscreen: "true",
            allowScriptAccess: "always",
            bgcolor: "",
            wmode: "direct" // can cause issues with FP settings & webcam
        };
        var attributes = {
            id:"Weibo"
        };
        swfobject.embedSWF(
            "https://ad91.sinaapp.com/Weibo.swf", 
            c, "300", "100", "10.0.0", 
            "expressInstall.swf", 
            flashvars, params, attributes);
    }
};