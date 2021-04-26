<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<style>



.range-holder {
    margin: 0em auto;
    padding: 0 0 8% 0;
    width: 100%;
    background: url(https://dl.dropboxusercontent.com/u/4277345/codepen/pr-plan-scale.png) bottom center no-repeat;
}

.dragdealer {
  position: relative;
  height: 30px;
  background: #f0f0f0;
  border-radius: 15px;
  border: 1px solid #a7a7a7;
}
.dragdealer .handle {
  position: absolute;
  top: 0;
  left: 0;
}

.stripe{
	background: #1e7a5e  url("https://dl.dropboxusercontent.com/u/4277345/codepen/stripe-bg.png") top left repeat;
	position: absolute;
	top: 0;
	left: 0;
	height: 31px;
	border-radius: 15px;
    border-top-right-radius: 0px;
    border-bottom-right-radius: 0px;
}

/* .stripe>div{
    background: #1e7a5e!important;
} */


	#green-highlight{position: absolute; top:0; left: 67px; height: 24px; opacity: .5; background: #1e7a5e; display: none;}
	#orange-highlight{position: absolute; top:0; left: 381px; height: 24px; opacity: .5; background: #1e7a5e; display: none;}
	#blue-highlight{position: absolute; top:0; left: 814px; height: 24px; opacity: .5; background: #1e7a5e; display: none;}

.square{
  position: absolute;
  top: 0;
  left: 0;	  
  margin-top: 0;
  margin-left: -10px;
  cursor: pointer;
  width: 30px;
  height: 30px;
  background: #fff;
  border-radius: 50px;
  color: #FFF;
  font-size: 14px;
  line-height: 30px;
  text-align: center;
    display:flex;
    justify-content: space-between;
    align-items:center;
    filter: drop-shadow(0px 0px 2px dimgrey);
}
.square>img{
    width: 60%;
    display: block;
    opacity: 0.6;
    margin: auto;
}
.menu-line{width: 50%; margin: 2px auto; height: 5px; background: #FFF; display: block;}

.infobox{
	position: absolute;
    top: 0;
    left: 0;
    margin-top: -235px;
    margin-left: -117px;
	width: 260px;
	height: 190px;
	background: #FFF;
	padding: 0px;
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
	border: #008da8 solid 2px;
    display: none!important
}

	.infobox:after {
		content: '';
		position: absolute;
		border-style: solid;
		border-width: 20px 23px 0;
		border-color: #FFFFFF transparent;
		display: block;
		width: 0;
		z-index: 1;
		bottom: -20px;
		left: 107px;
	}
	
	.infobox:before {
		content: '';
		position: absolute;
		border-style: solid;
		border-width: 21px 24px 0;
		border-color: #008da8 transparent;
		display: block;
		width: 0;
		z-index: 0;
		bottom: -23px;
		left: 106px;
	}
	
	.titlebar{
		background: #008da8;
		color: #FFF;
		padding: .5em;
     line-height: 1.5em;
		font-size: 15px;
	}
	#plan-holder{font-weight: bold;}
	
	.innerbox{
		padding: 1em;
	}
	
	.info-price{color: #e07c00; font-size: 33px; line-height: 1.8em;}

	
	.annual-label{
	  color: #505054; font-size: 14px; font-weight: bold; width: 110px; line-height: 1.8em;}
	.annual-price{color: #939393; font-size: 17px; width: 110px;} 


</style>

</head>
<body>
    
<br>
<div class="range-holder">
				
				<div id="pr-slider" class="dragdealer">
		            <div class="stripe">

		            <!-- <div id="green-highlight"></div>
		            <div id="orange-highlight"></div>
		            <div id="blue-highlight"></div> -->

		            <div class="handle">
			            <div class="infobox">
			            	<div class="titlebar"><span id="plan-holder"></span> <span id="device-holder"></span></div>
			            	<div class="innerbox">
			            		
				            		<div class="info-price"></div>
				            		<div class="annual-label">ANNUALY:</div>
				            		<div class="annual-price"></div>
				            	
				            	
			            	</div>
			            </div>	
						<div class="square">
							<img src="Images/left-and-right.svg" alt="">
						</div>	
		            </div>
		            
		          </div>
			  </div>
			</div>
</body>
<script>
/*https://github.com/skidding/dragdealer*/
(function(root,factory){if(typeof define==="function"&&define.amd){define(factory)}else{root.Dragdealer=factory()}})(this,function(){var Dragdealer=function(wrapper,options){this.bindMethods();this.options=this.applyDefaults(options||{});this.wrapper=this.getWrapperElement(wrapper);if(!this.wrapper){return}this.handle=this.getHandleElement(this.wrapper,this.options.handleClass);if(!this.handle){return}this.init();this.bindEventListeners()};Dragdealer.prototype={defaults:{disabled:false,horizontal:true,vertical:false,slide:true,steps:0,snap:false,loose:false,speed:.1,xPrecision:0,yPrecision:0,handleClass:"handle"},init:function(){this.value={prev:[-1,-1],current:[this.options.x||0,this.options.y||0],target:[this.options.x||0,this.options.y||0]};this.offset={wrapper:[0,0],mouse:[0,0],prev:[-999999,-999999],current:[0,0],target:[0,0]};this.change=[0,0];this.stepRatios=this.calculateStepRatios();this.activity=false;this.dragging=false;this.tapping=false;this.reflow();if(this.options.disabled){this.disable()}},applyDefaults:function(options){for(var k in this.defaults){if(!options.hasOwnProperty(k)){options[k]=this.defaults[k]}}return options},getWrapperElement:function(wrapper){if(typeof wrapper=="string"){return document.getElementById(wrapper)}else{return wrapper}},getHandleElement:function(wrapper,handleClass){var childElements=wrapper.getElementsByTagName("div"),handleClassMatcher=new RegExp("(^|\\s)"+handleClass+"(\\s|$)"),i;for(i=0;i<childElements.length;i++){if(handleClassMatcher.test(childElements[i].className)){return childElements[i]}}},calculateStepRatios:function(){var stepRatios=[];if(this.options.steps>1){for(var i=0;i<=this.options.steps-1;i++){stepRatios[i]=i/(this.options.steps-1)}}return stepRatios},setWrapperOffset:function(){this.offset.wrapper=Position.get(this.wrapper)},calculateBounds:function(){var bounds={top:this.options.top||0,bottom:-(this.options.bottom||0)+this.wrapper.offsetHeight,left:this.options.left||0,right:-(this.options.right||0)+this.wrapper.offsetWidth};bounds.availWidth=bounds.right-bounds.left-this.handle.offsetWidth;bounds.availHeight=bounds.bottom-bounds.top-this.handle.offsetHeight;return bounds},calculateValuePrecision:function(){var xPrecision=this.options.xPrecision||Math.abs(this.bounds.availWidth),yPrecision=this.options.yPrecision||Math.abs(this.bounds.availHeight);return[xPrecision?1/xPrecision:0,yPrecision?1/yPrecision:0]},bindMethods:function(){this.onHandleMouseDown=bind(this.onHandleMouseDown,this);this.onHandleTouchStart=bind(this.onHandleTouchStart,this);this.onDocumentMouseMove=bind(this.onDocumentMouseMove,this);this.onWrapperTouchMove=bind(this.onWrapperTouchMove,this);this.onWrapperMouseDown=bind(this.onWrapperMouseDown,this);this.onWrapperTouchStart=bind(this.onWrapperTouchStart,this);this.onDocumentMouseUp=bind(this.onDocumentMouseUp,this);this.onDocumentTouchEnd=bind(this.onDocumentTouchEnd,this);this.onHandleClick=bind(this.onHandleClick,this);this.onWindowResize=bind(this.onWindowResize,this)},bindEventListeners:function(){addEventListener(this.handle,"mousedown",this.onHandleMouseDown);addEventListener(this.handle,"touchstart",this.onHandleTouchStart);addEventListener(document,"mousemove",this.onDocumentMouseMove);addEventListener(this.wrapper,"touchmove",this.onWrapperTouchMove);addEventListener(this.wrapper,"mousedown",this.onWrapperMouseDown);addEventListener(this.wrapper,"touchstart",this.onWrapperTouchStart);addEventListener(document,"mouseup",this.onDocumentMouseUp);addEventListener(document,"touchend",this.onDocumentTouchEnd);addEventListener(this.handle,"click",this.onHandleClick);addEventListener(window,"resize",this.onWindowResize);var _this=this;this.interval=setInterval(function(){_this.animate()},25);this.animate(false,true)},unbindEventListeners:function(){removeEventListener(this.handle,"mousedown",this.onHandleMouseDown);removeEventListener(this.handle,"touchstart",this.onHandleTouchStart);removeEventListener(document,"mousemove",this.onDocumentMouseMove);removeEventListener(this.wrapper,"touchmove",this.onWrapperTouchMove);removeEventListener(this.wrapper,"mousedown",this.onWrapperMouseDown);removeEventListener(this.wrapper,"touchstart",this.onWrapperTouchStart);removeEventListener(document,"mouseup",this.onDocumentMouseUp);removeEventListener(document,"touchend",this.onDocumentTouchEnd);removeEventListener(this.handle,"click",this.onHandleClick);removeEventListener(window,"resize",this.onWindowResize);clearInterval(this.interval)},onHandleMouseDown:function(e){Cursor.refresh(e);preventEventDefaults(e);stopEventPropagation(e);this.activity=false;this.startDrag()},onHandleTouchStart:function(e){Cursor.refresh(e);stopEventPropagation(e);this.activity=false;this.startDrag()},onDocumentMouseMove:function(e){Cursor.refresh(e);if(this.dragging){this.activity=true}},onWrapperTouchMove:function(e){Cursor.refresh(e);if(!this.activity&&this.draggingOnDisabledAxis()){if(this.dragging){this.stopDrag()}return}preventEventDefaults(e);this.activity=true},onWrapperMouseDown:function(e){Cursor.refresh(e);preventEventDefaults(e);this.startTap()},onWrapperTouchStart:function(e){Cursor.refresh(e);preventEventDefaults(e);this.startTap()},onDocumentMouseUp:function(e){this.stopDrag();this.stopTap()},onDocumentTouchEnd:function(e){this.stopDrag();this.stopTap()},onHandleClick:function(e){if(this.activity){preventEventDefaults(e);stopEventPropagation(e)}},onWindowResize:function(e){this.reflow()},enable:function(){this.disabled=false;this.handle.className=this.handle.className.replace(/\s?disabled/g,"")},disable:function(){this.disabled=true;this.handle.className+=" disabled"},reflow:function(){this.setWrapperOffset();this.bounds=this.calculateBounds();this.valuePrecision=this.calculateValuePrecision();this.updateOffsetFromValue()},getStep:function(){return[this.getStepNumber(this.value.target[0]),this.getStepNumber(this.value.target[1])]},getValue:function(){return this.value.target},setStep:function(x,y,snap){this.setValue(this.options.steps&&x>1?(x-1)/(this.options.steps-1):0,this.options.steps&&y>1?(y-1)/(this.options.steps-1):0,snap)},setValue:function(x,y,snap){this.setTargetValue([x,y||0]);if(snap){this.groupCopy(this.value.current,this.value.target);this.updateOffsetFromValue();this.callAnimationCallback()}},startTap:function(){if(this.disabled){return}this.tapping=true;this.setWrapperOffset();this.setTargetValueByOffset([Cursor.x-this.offset.wrapper[0]-this.handle.offsetWidth/2,Cursor.y-this.offset.wrapper[1]-this.handle.offsetHeight/2])},stopTap:function(){if(this.disabled||!this.tapping){return}this.tapping=false;this.setTargetValue(this.value.current)},startDrag:function(){if(this.disabled){return}this.dragging=true;this.setWrapperOffset();this.offset.mouse=[Cursor.x-Position.get(this.handle)[0],Cursor.y-Position.get(this.handle)[1]]},stopDrag:function(){if(this.disabled||!this.dragging){return}this.dragging=false;var target=this.groupClone(this.value.current);if(this.options.slide){var ratioChange=this.change;target[0]+=ratioChange[0]*4;target[1]+=ratioChange[1]*4}this.setTargetValue(target)},callAnimationCallback:function(){var value=this.value.current;if(this.options.snap&&this.options.steps>1){value=this.getClosestSteps(value)}if(!this.groupCompare(value,this.value.prev)){if(typeof this.options.animationCallback=="function"){this.options.animationCallback.call(this,value[0],value[1])}this.groupCopy(this.value.prev,value)}},callTargetCallback:function(){if(typeof this.options.callback=="function"){this.options.callback.call(this,this.value.target[0],this.value.target[1])}},animate:function(direct,first){if(direct&&!this.dragging){return}if(this.dragging){var prevTarget=this.groupClone(this.value.target);var offset=[Cursor.x-this.offset.wrapper[0]-this.offset.mouse[0],Cursor.y-this.offset.wrapper[1]-this.offset.mouse[1]];this.setTargetValueByOffset(offset,this.options.loose);this.change=[this.value.target[0]-prevTarget[0],this.value.target[1]-prevTarget[1]]}if(this.dragging||first){this.groupCopy(this.value.current,this.value.target)}if(this.dragging||this.glide()||first){this.updateOffsetFromValue();this.callAnimationCallback()}},glide:function(){var diff=[this.value.target[0]-this.value.current[0],this.value.target[1]-this.value.current[1]];if(!diff[0]&&!diff[1]){return false}if(Math.abs(diff[0])>this.valuePrecision[0]||Math.abs(diff[1])>this.valuePrecision[1]){this.value.current[0]+=diff[0]*this.options.speed;this.value.current[1]+=diff[1]*this.options.speed}else{this.groupCopy(this.value.current,this.value.target)}return true},updateOffsetFromValue:function(){if(!this.options.snap){this.offset.current=this.getOffsetsByRatios(this.value.current)}else{this.offset.current=this.getOffsetsByRatios(this.getClosestSteps(this.value.current))}if(!this.groupCompare(this.offset.current,this.offset.prev)){this.renderHandlePosition();this.groupCopy(this.offset.prev,this.offset.current)}},renderHandlePosition:function(){if(this.options.horizontal){this.handle.style.left=String(this.offset.current[0])+"px"}if(this.options.vertical){this.handle.style.top=String(this.offset.current[1])+"px"}},setTargetValue:function(value,loose){var target=loose?this.getLooseValue(value):this.getProperValue(value);this.groupCopy(this.value.target,target);this.offset.target=this.getOffsetsByRatios(target);this.callTargetCallback()},setTargetValueByOffset:function(offset,loose){var value=this.getRatiosByOffsets(offset);var target=loose?this.getLooseValue(value):this.getProperValue(value);this.groupCopy(this.value.target,target);this.offset.target=this.getOffsetsByRatios(target)},getLooseValue:function(value){var proper=this.getProperValue(value);return[proper[0]+(value[0]-proper[0])/4,proper[1]+(value[1]-proper[1])/4]},getProperValue:function(value){var proper=this.groupClone(value);proper[0]=Math.max(proper[0],0);proper[1]=Math.max(proper[1],0);proper[0]=Math.min(proper[0],1);proper[1]=Math.min(proper[1],1);if(!this.dragging&&!this.tapping||this.options.snap){if(this.options.steps>1){proper=this.getClosestSteps(proper)}}return proper},getRatiosByOffsets:function(group){return[this.getRatioByOffset(group[0],this.bounds.availWidth,this.bounds.left),this.getRatioByOffset(group[1],this.bounds.availHeight,this.bounds.top)]},getRatioByOffset:function(offset,range,padding){return range?(offset-padding)/range:0},getOffsetsByRatios:function(group){return[this.getOffsetByRatio(group[0],this.bounds.availWidth,this.bounds.left),this.getOffsetByRatio(group[1],this.bounds.availHeight,this.bounds.top)]},getOffsetByRatio:function(ratio,range,padding){return Math.round(ratio*range)+padding},getStepNumber:function(value){return this.getClosestStep(value)*(this.options.steps-1)+1},getClosestSteps:function(group){return[this.getClosestStep(group[0]),this.getClosestStep(group[1])]},getClosestStep:function(value){var k=0;var min=1;for(var i=0;i<=this.options.steps-1;i++){if(Math.abs(this.stepRatios[i]-value)<min){min=Math.abs(this.stepRatios[i]-value);k=i}}return this.stepRatios[k]},groupCompare:function(a,b){return a[0]==b[0]&&a[1]==b[1]},groupCopy:function(a,b){a[0]=b[0];a[1]=b[1]},groupClone:function(a){return[a[0],a[1]]},draggingOnDisabledAxis:function(){return!this.options.horizontal&&Cursor.xDiff>Cursor.yDiff||!this.options.vertical&&Cursor.yDiff>Cursor.xDiff}};var bind=function(fn,context){return function(){return fn.apply(context,arguments)}};var addEventListener=function(element,type,callback){if(element.addEventListener){element.addEventListener(type,callback,false)}else if(element.attachEvent){element.attachEvent("on"+type,callback)}};var removeEventListener=function(element,type,callback){if(element.removeEventListener){element.removeEventListener(type,callback,false)}else if(element.detachEvent){element.detachEvent("on"+type,callback)}};var preventEventDefaults=function(e){if(!e){e=window.event}if(e.preventDefault){e.preventDefault()}e.returnValue=false};var stopEventPropagation=function(e){if(!e){e=window.event}if(e.stopPropagation){e.stopPropagation()}e.cancelBubble=true};var Cursor={x:0,y:0,xDiff:0,yDiff:0,refresh:function(e){if(!e){e=window.event}if(e.type=="mousemove"){this.set(e)}else if(e.touches){this.set(e.touches[0])}},set:function(e){var lastX=this.x,lastY=this.y;if(e.pageX||e.pageY){this.x=e.pageX;this.y=e.pageY}else if(e.clientX||e.clientY){this.x=e.clientX+document.body.scrollLeft+document.documentElement.scrollLeft;this.y=e.clientY+document.body.scrollTop+document.documentElement.scrollTop}this.xDiff=Math.abs(this.x-lastX);this.yDiff=Math.abs(this.y-lastY)}};var Position={get:function(obj){var curleft=0,curtop=0;if(obj.offsetParent){do{curleft+=obj.offsetLeft;curtop+=obj.offsetTop}while(obj=obj.offsetParent)}return[curleft,curtop]}};return Dragdealer});
    
    
    $(document).ready(function(){
    
        //set defaults
        $("#plan-holder").text('Personal Plan:');
        $("#device-holder").text('0-3 Devices');
        $(".info-price").html('$ 0 / month');
        $(".annual-price").html('$0');
        
        new Dragdealer('pr-slider', {
        animationCallback: function(x, y) {
          var slider_value = ((Math.round(x * 100)));
          //$("#pr-slider .value").text(slider_value);
          var stripe_width = slider_value+1;
          $(".stripe").css("width", ""+stripe_width+"%");
          
          //set personal
          if(slider_value > 0 && slider_value < 6){
             $("#plan-holder").text('Personal Plan:');
             $("#device-holder").text('0-3 Devices');
             $(".info-price").html('$ 0 / month');
             
             $("#green-highlight").hide(); 
          }
          
          //set basic
          if(slider_value > 5 && slider_value < 37){
              $("#plan-holder").text('Basic Plan:');
              
              $("#orange-highlight").hide();
              $("#green-highlight").show();
              $("#green-highlight").css("width", ""+(slider_value+40.5)+"%");
              
             
              
          }
          
          //set business
          if(slider_value > 38 && slider_value < 83){
              $("#plan-holder").text('Business Plan:');
              
              $("#green-highlight").css("width", "314px");
              $("#orange-highlight").show();
              $("#blue-highlight").hide();
              
              /*
              if(slider_value > 38){ 
                  $(".info-price").html('$ 249 / month'); 
                  $(".annual-price").html('$ 2490');
                  $("#device-holder").text('Up to 50 Devices');
              }*/
              if(slider_value > 38){
                  $(".info-price").html('$ 359 / month'); 
                  $(".annual-price").html('$ 3590'); 
                  $("#device-holder").text('Up to 75 Devices');
                  
              }
              
              if(slider_value < 40){ $("#orange-highlight").hide(); }
              if(slider_value > 40){ $("#orange-highlight").css("width", ""+(slider_value/4.8)+"%"); }
              
              if(slider_value > 44){
                  $(".info-price").html('$ 579 / month'); 
                  $(".annual-price").html('$ 5790'); 
                  $("#device-holder").text('Up to 125 Devices');
                  
                  $("#orange-highlight").css("width", ""+(slider_value/2.5)+"%");
              }
              
              if(slider_value > 50){ $("#orange-highlight").css("width", ""+(slider_value/1.7)+"%"); }
              
              if(slider_value > 57){
                  $(".info-price").html('$ 799 / month'); 
                  $(".annual-price").html('$ 7990'); 
                  $("#device-holder").text('Up to 175 Devices');
              }
              
              if(slider_value > 68){ $("#orange-highlight").css("width", ""+(slider_value/1.6)+"%"); }
              
              if(slider_value > 70){
                  $(".info-price").html('$ 999 / month'); 
                  $(".annual-price").html('$ 9990'); 
                  $("#device-holder").text('Up to 225 Devices');
              }
          }
          
          //set enterprise
          if(slider_value > 83){
              $("#plan-holder").text('Enterprise Plan:');
              $("#orange-highlight").css("width", "433px");
    
              
              if(slider_value > 84){ 
                  $("#blue-highlight").css("width", ""+(slider_value/24)+"%"); 
                  $("#blue-highlight").show();
              }
              if(slider_value > 88){ $("#blue-highlight").css("width", ""+(slider_value/10)+"%"); }
              if(slider_value > 93){ $("#blue-highlight").css("width", ""+(slider_value/8)+"%"); }
              if(slider_value > 97){ $("#blue-highlight").css("width", ""+(slider_value/6)+"%"); }
                        
              $(".info-price").html('Contact us'); 
            $(".annual-price").html('');
            $("#device-holder").text('Unlimited Devices');
          }	
            console.log(slider_value)
            
            if ($(window).width() < 960) {
                var porcen = parseInt( slider_value /100*5) + 1
                console.log(porcen)
                if (porcen == 6) {
                    porcen = 5;
                }
                if (slider_value == 0) {
                    return false;
                }else{
                    $('#tarifas .slick-dots li:nth-child('+ porcen +')').click()

                }
                
            }else{
                $('#empresa .slick-dots').css('visibility','hidden')

                var porcen = parseInt( slider_value /100*5) + 1
                console.log(porcen)
                if (porcen == 6) {
                    porcen = 5;
                }
                if (slider_value == 0) {
                    return false;
                }else{
                    $('#empresa .slick-track>article').removeClass('not-shadow')
                    $('#empresa .slick-track>article:nth-child('+ porcen +')').addClass('not-shadow')

                }
            }
            if(porcen > 0){ 
                  $('#campanas').text('?')
              }	
              if(porcen > 1){
                  $('#campanas').text('2')
              }	
              if(porcen > 2){
                 $('#campanas').text('3')
              }
              if(porcen > 3){
                  $('#campanas').text('4')
              }
              if(porcen > 4){
                  $('#campanas').text('+5')
              }	


        }
        });



        
    });
    
</script>
</html>