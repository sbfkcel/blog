var WeiboEditor={
    editor:null,
    init:function(o){
        //插入话题点击
        this.editor=o;
        o.find(".topic_ico").click(function(){
            var str= o.find("#content").val();
            o.find("#content").val(str+"#你的话题#");
            WeiboEditor.setSelect(1, 6);
        });
        //@好友
        o.find(".friend_ico").click(function(){
            var str= o.find("#content").val();
            o.find("#content").val(str+"@你的好友");
            WeiboEditor.setSelect(1, 5,0);
        });
        //上传图片
        o.find(".upimg_ico").click(function(){
            o.find(".brow_box").hide();
            o.find(".upfile_box").show();
        });
        //表情
        o.find(".brow_ico").click(function(){
            o.find(".upfile_box").hide();
            var platform="";
            $(".input_radio").each(function(){
                if(this.checked)
                    platform=this.value;
            });
            o.find(".brow_box").show();
            var op=platform=="sina"?"qq":"sina";
            o.find("."+platform+"_brow").show();
            o.find("."+op+"_brow").hide();
        });
        //关闭
        o.find(".cose_ico").click(function(){
            o.find(".upfile_box").hide();
            o.find(".brow_box").hide();
        });
        //上传图片完成
        o.find("#wimg").change(function(){
            var fname=$(this).val();
            var fArr=fname.split("/");
            o.find(".img_link").attr("href",fname);
            o.find(".img_link span").html(fArr[fArr.length-1]);
            o.find("#img_view").show();
            o.find(".upfile_box").hide();
        });
        //提交发送
        o.find(".postWeibo").click(function(){
            var v=$(this).attr("v");
            var str= o.find("#content").val();
            var platform="";
            $(".input_radio").each(function(){
                if(this.checked)
                    platform=this.value;
            });
            var img=$("#wimg").val();
            if(str){
                $.ajax({
                    url:"/my_ajax_weiboManage/?act=postWeibo&t="+v,
                    type:"POST",
                    data:"str="+str+"&img="+img+"&platform="+platform,
                    success:function(r){
                        eval(r);
                    }
                });
            }else{
                fan_ui.minitips("请输入微博内容。", "error");
            }
        });
    },
    //设置选中
    setSelect:function(start,len,offset){
        offset=offset==undefined?-1:offset;
        var o=document.getElementById("content");
        var str=$("#content").val();
        if(o.setSelectionRange){
            o.setSelectionRange(str.length-len+start,str.length+offset);
        }else{
            var range=o.createTextRange();
            range.moveStart("character",str.length-len+start);
            range.moveEnd("character",offset);
            range.select();
        }
    },
    //添加表情
    em:function(e){
        var str= WeiboEditor.editor.find("#content").val();
        WeiboEditor.editor.find("#content").val(str+e).focus();
    },
    //隐藏编辑框
    hide:function(){
        $('#content').hide();
        $('.toolbar').hide();
        $('.send_submit').hide();
    },
    //显示编辑框
    show:function(){
        $(".editor_li").show();
    }
}