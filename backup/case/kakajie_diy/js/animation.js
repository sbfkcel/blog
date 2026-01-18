/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
var context,c,idx;
var base=[];

$(function(){
    html5.init();
});

var html5={
    init:function(){      
        window.setInterval(html5.render, 50);
    },
    addToBase:function(url,key,x,y,animate,t){
        x=x||0;
        y=y||0;
        var img=document.createElement("img");
        img.src=url;
        img.onload=function(){
            var o={"obj":img,"x":x,"y":y,"name":key};
            base.push(o);
            if(animate){
                t=t||500;
                $(o).animate(animate, t);
            }
        }
    },
    getBaseByKey:function(key){
        for(var o in base){
            if(base[o]["name"]==key)
                return $(base[o]);
        }
        return null;
    },
    render:function(){
        if(!c) return;
        c.clearRect(0,0,960,565);
        for(var o in base)
            c.drawImage(base[o]["obj"],base[o]["x"],base[o]["y"]);
    },
    play:function(v){
        if(v==idx) return;
        base=[];
        context=document.getElementById("htmlMain_"+v);
        try{
            c=context.getContext("2d");
        }catch(e){return;}
        switch(v){
            case 0:
                html5.addToBase("/img/gray_photoa.png","img1",0,280,{"x":15,"y":169},300);
                html5.addToBase("/img/gray_photob.png","img2",380,300,{"x":348,"y":157},600);
                html5.addToBase("/img/gray_title.png", "img3",600,220,{"x":640});
                html5.addToBase("/img/gray_depict.png", "img4", 630, 270,{"x":705});
                break;
            case 1:
                html5.addToBase("/img/gray_title.png", "img3",600,220,{"x":640});
                html5.addToBase("/img/gray_depict.png", "img4", 630, 270,{"x":705});
                html5.addToBase("/img/palm_photoa.png", "img6", 504, 0);
                html5.addToBase("/img/palm_photob.png", "img6", 605, 350);
                html5.addToBase("/img/palm_photoc.png", "img6", 32, 478);
                html5.addToBase("/img/palm_photog.png", "img6", 150, 280,{"x":218,"y":329},300);
                html5.addToBase("/img/palm_photof.png", "img6", 350, 80,{"x":301,"y":142},400);
                html5.addToBase("/img/palm_photoe.png", "img6", 220, 150,{"x":172,"y":110},600);
                html5.addToBase("/img/palm_photod.png", "img6", 100, 300,{"x":0,"y":215},350);
                break;
            case 2:
                html5.addToBase("/img/romantic_photoa.png","img1",590,405);
                html5.addToBase("/img/gray_title.png", "img3",600,220,{"x":640});
                html5.addToBase("/img/gray_depict.png", "img4", 630, 270,{"x":705});
                html5.addToBase("/img/romantic_photo.png", "img5", 145, 250, {"y":164});
                break;
        }
        idx=v;
    }
}