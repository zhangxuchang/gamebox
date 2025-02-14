<?php include_once('config.php');?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>upgrade</title>
<link type="text/css" rel="stylesheet" href="<?php echo $CONFIG['host']?>gamebox/update/css/reset.css?ver=<?php echo $CONFIG['version']?>" />
<link type="text/css" rel="stylesheet" href="<?php echo $CONFIG['host']?>gamebox/update/css/load-bar.css?ver=<?php echo $CONFIG['version']?>" />
<link type="text/css" rel="stylesheet" href="<?php echo $CONFIG['host']?>gamebox/update/css/srollbar.css?ver=<?php echo $CONFIG['version']?>" />
<link type="text/css" rel="stylesheet" href="<?php echo $CONFIG['host']?>gamebox/update/css/<?php echo $CONFIG['css']?>.css?ver=<?php echo $CONFIG['version']?>" />
<script src="<?php echo $CONFIG['host']?>gamebox/update/js/jquery.js?ver=<?php echo $CONFIG['version']?>"></script>
<script src="<?php echo $CONFIG['host']?>gamebox/update/js/common.js?ver=<?php echo $CONFIG['version']?>"></script>
</head>

<body onselectstart="return false" oncontextmenu="doNothing()" unselectable="on" ondragstart="return false">
	<div id="wrap">
    	<div class="upgrade">
        	<h2 mulity-key="mulityKey" mulity-value="Gamebox_UpdateContent"></h2>            
                <div id="dumaScrollAreaId" class="dumascroll">
                    <div id="dumaScrollAreaId_Area" class="dumascroll_area">
                        <div class="content">
                            <!-- 这里放更新日志 -->
                        </div>
                    </div>
                    <div id="dumaScrollAreaId_Bar" class="dumascroll_bar">
                        <div class="dumascroll_arrow_up"></div>
                        <div class="dumascroll_handle"></div>
                        <div class="dumascroll_arrow_down"></div>
                    </div>
                </div>
            <div class="update hide">
                <h2><span mulity-key="mulityKey" mulity-value="Gamebox_AlreadyDownload"></span><span class="update_percent"><em id="proNum">0</em><strong>%</strong></span></h2>
                <div class="progress">
                    <div class="load-bar">
                        <div class="load-bar-inner"></div>
                    </div>
                </div>
            </div>
            <div class="btn_button">
            	<a class="btn_other" id="cancel" mulity-key="mulityKey" mulity-value="Gamebox_NextTime"></a>
                <a id="update" mulity-key="mulityKey" mulity-value="Gamebox_Update"></a>
                <a class="btn_skip" id="skip"  mulity-key="mulityKey" mulity-value="Gamebox_Skip"></a>
            </div>
        </div>
    </div>
    <script src="js/scrollbar.js"></script>
    <script type="text/javascript">
    $(function(){
        //升级方法
        $("#update").click(function(){
            window.external.UpdateOk();
        });
        //取消升级
        $("#cancel").click(function(){
            window.external.UpdateCancel();
        });

        var url = window.location.href;
        var hasskip = getParam('hasskip',url);
        //是否显示跳过此版本按钮
        if(hasskip == 'true'){
            $('#skip').show().click(function(){
                window.external.WINIE_SkipThisVersion();
            });
        }
        //获取更新日志
        $(window).on('load',function(){
            window.external.WINIE_GetUpdateChangeLog('getChangeLog'); 
        }); 

    });
    var getChangeLog = function(data){
        var str = '',
            data = $.parseJSON(data);
        for(var key in data){
            if(key == 'version'){
                str += '<p class="content_t">'+Base64.decode(data[key])+'</p>';
            }else{
                var tmp = Base64.decode(data[key]);
                tmp = tmp.replace(/\<br\>/g,'</p><p>')
                str += '<p>'+tmp+'</p>';
            }
        }
        $('.content').html(str);
        duma.BeautifyScrollBar.init();
    };
    function BeginUpdate(){
        $(".btn_button").addClass("hide");
        $(".update").removeClass("hide");
    };
    function EndUpdate(){};
    function UpdateProgreass(num){
        $("#proNum").html(num);
        //用于计算
        var scale = parseInt($(".load-bar").width())/100;
        var curScale = parseInt(num);
        var barWidth = scale * curScale + "px";
        $(" .load-bar-inner").css("width", barWidth)
    };
    </script>
    
</body>
</html>
