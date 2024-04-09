$(document).ready(function(){	
var MSIE8 = ($.browser.msie) && ($.browser.version == 8);
	$.fn.ajaxJSSwitch({
		topMargin:100,//mandatory property for decktop
		bottomMargin:228,//mandatory property for decktop
		topMarginMobileDevices:0,//mandatory property for mobile devices
		bottomMarginMobileDevices:0,//mandatory property for mobile devices
		menuInit:function (classMenu, classSubMenu){
			classMenu.find(">li").each(function(){
				var conText = $(this).find('.mText').text();
				$(">a", this).append("<div class='_area'></div><div class='_overPl'></div><div class='_overLine'></div><div class='mTextOver'>"+conText+"</div>"); 
			})
		},
		buttonOver:function (item){
			$(".mText",item).stop(true).animate({top:"130px"}, 300, 'easeOutCubic');
            $(".mTextOver", item).stop(true).delay(0).animate({top:"56px"}, 500, 'easeOutCubic');
			$("._overPl", item).stop(true).animate({opacity:1}, 500, 'easeOutCubic');
			$("._overLine", item).stop(true).animate({opacity:1}, 500, 'easeOutCubic');
		},
		buttonOut:function (item){
			$(".mText", item).stop(true).animate({top:"0px"}, 400, 'easeOutCubic');
			$(".mTextOver", item).stop(true).delay(20).animate({top:"-130px"}, 400, 'easeOutCubic');
			$("._overPl", item).stop(true).animate({opacity:0}, 400, 'easeOutCubic');
			$("._overLine", item).stop(true).animate({opacity:0}, 500, 'easeOutCubic');
		},
		subMenuButtonOver:function (item){
			
		},
		subMenuButtonOut:function (item){
		
		},
		subMenuShow:function(subMenu){
			if(MSIE8){
				//subMenu.css({"display":"block", "margin-top":-(subMenu.outerHeight()+0)});
				subMenu.css({"display":"block", "margin-top":0});
			}else{
				//subMenu.stop(true).css({"display":"block", "margin-top":-(subMenu.outerHeight()+0)}).animate({"opacity":"1"}, 600, "easeInOutCubic");
				subMenu.stop(true).css({"display":"block", "margin-top":0}).animate({"opacity":"1"}, 600, "easeInOutCubic");
			}
		},
		subMenuHide:function(subMenu){
			if(MSIE8){
				subMenu.css({"display":"none"});
			}else{
				subMenu.stop(true).delay(300).animate({"opacity":"0"}, 600, "easeInOutCubic", function(){
					$(this).css({"display":"none"})
				});
			}
		},
		pageInit:function (pages){
		},
		currPageAnimate:function (page){

			$(".block_1").stop(true).delay(0).animate({"margin-left":"0"}, 600, "easeInOutCubic");

			page.css({"top":'-1600px'}).stop(true).delay(400).animate({"top":'0px'}, 500, "easeOutCubic");
		},
		prevPageAnimate:function (page){

			page.stop(true).animate({"display":"block", "top":'1600px'}, 700, "easeInCubic");
		},
		backToSplash:function (){

			setTimeout(function() {
				$(".block_1").stop(true).delay(0).animate({"margin-left":"430px"}, 600, "easeInOutCubic");
			},300);


		},
		pageLoadComplete:function (){

        	setTimeout(function() {
					$('.scroll')
	        	.uScroll({			
	        		mousewheel:true,
	                lay:'outside'
	        	});
			},300);


		},
	});
	
	////////////////// submenu hover //////////////////// 
		//$('.submenu_1 a b').css({width:'0px'})
		//$('.submenu_2 a span').css({width:'0px'})
		$('.submenu_1 a').hover(function()
			{
				//$(this).find('b').css({width:'0px', left:'-23px'}).stop().animate({width:'234px'}, 300,'easeOutCubic');	
				//$(this).find('span').css({width:'0px', left:'-23px'}).stop().animate({width:'203px'}, 300,'easeOutCubic');			
			}, function(){
				//$(this).find('b').stop().animate({width:'0px', left:'210px'}, 300,'easeOutCubic');
				//$(this).find('span').stop().animate({width:'0px', left:'180px'}, 300,'easeOutCubic');
			})
		////////////////// end submenu hover ////////////////////
	
	
})
$(window).load(function(){	
	$("#webSiteLoader").delay(500).animate({opacity:0}, 600, "easeInCubic", function(){$("#webSiteLoader").remove()});

	$(".image_resize").image_resize({align_img:"center", mobile_align_img:"center"});
	
	});