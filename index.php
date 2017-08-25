<html>
<head>
<title>里客云-免vip看全网视频</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="里客云">
<meta name="Keywords" content="里客云">
<meta name="Description" content="里客云-免vip看全网视频">
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="js/js.js"></script>
<link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<style>
.loading{width:100%;
         height:100%;
		 position:fixed;
		 top:0;
		 left:0;
		 z-index:9999;
		 }
.pic{background:url('image/load.gif');
     width:64px;
	 height:64px;
	 position:absolute;
	 top:0;
	 bottom:0;
	 left:0;
	 right:0;
	 margin:auto
	 }

</style>
<script>
function yi()
{
	document.getElementById("url").value="http://www.iqiyi.com/v_19rr7plrqo.html";
    document.getElementById("player").src="http://v.s-b.pw/mr.php?url="+"http://www.iqiyi.com/v_19rr7plrqo.html"
}

function er()
{
	document.getElementById("url").value="http://www.iqiyi.com/v_19rr7kthts.html";
    document.getElementById("player").src="http://v.s-b.pw/mr.php?url="+"http://www.iqiyi.com/v_19rr7kthts.html"
}

function san()
{
    document.getElementById("url").value="http://www.iqiyi.com/v_19rr8fs4kw.html";
    document.getElementById("player").src="http://v.s-b.pw/mr.php?url="+"http://www.iqiyi.com/v_19rr8fs4kw.html"
}

function si()
{
    document.getElementById("url").value="https://v.qq.com/x/cover/7cwi9p4usdfpguy.html";
    document.getElementById("player").src="http://v.s-b.pw/mr.php?url="+"https://v.qq.com/x/cover/7cwi9p4usdfpguy.html"
}

function wu()
{
	document.getElementById("url").value="https://v.qq.com/x/cover/2dc9akh8b11396j.html";
    document.getElementById("player").src="http://v.s-b.pw/mr.php?url="+"https://v.qq.com/x/cover/2dc9akh8b11396j.html"
}

</script>
</head>
<body>
<div class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
       <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".exo">
         <span class="sr-only">Toggle Navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <a href="http://likeyunba.com" class="navbar-brand">里客云</a>
  </div>
  <div class="collapse navbar-collapse exo">
    	<ul class="nav navbar-nav">
      		<li class="active"><a href="index.php">网站首页</a></li>
      		<li><a href="api.html">Api文档</a></li>
      		<li><a href="http://wpa.qq.com/msgrd?v=3&uin=674473215&site=qq&menu=yes" target="_blank">使用反馈</a></li>
			<li><a href="https://pan.lanzou.com/1435636/">下载App</a></li>
	 	</ul>
  </div>
</div>
<div class="loading">
<div class="pic"></div>
</div>
<div class="domain">
<div class="input-group">
<span class="input-group-addon">电影网址:</span><input style="background: rgba(255, 251, 251, 0.7)" class="form-control" name="url" id="url" placeholder="输入要解析的网址">
<br />
</div>
<button class="btn btn-primary" style="margin-top:1%;margin-bottom:1%;width:100%;font-size:16px" onclick="mr()">播放</button>
</div>

<form class="form-inline">
<div class="panel panel-info text-center seach">
<div class="panel panel-heading">
<span style="font-size:16px">影片搜索</span>
</div>
<input type="text" class="form-control" placeholder="输入要搜索的影片名" id="so">
<button class="btn btn-success" style="margin-bottom:1%"onclick="iqy()">爱奇艺搜索</button>
<button class="btn btn-primary" style="margin-bottom:1%" onclick="tx()">腾讯视频搜索</button>
<div class="tip"  style="font-size:16px;text-left;color:red">
说明:<br />
1、输入影片名称后会自动跳转到相应网页<br />
2、直接打开要看的视频<br >
3、把链接粘贴到上方"电影网址:"那里<br />
4、即可免费播放<br />
(app暂不支持)
</div>
</div>
</form>

<!--
<table class="table table-striped table-bordered table-hover text-center tj">
<tr>
<td><b>推荐<br />影片:</b></td>
<td>
<a href="javascript:yi()">李雷和韩梅梅</a><br />
<span class="badge">华语</span>
<span class="badge">爱情</span>
<span class="badge">喜剧</span>
</td>
<td><a href="javascript:er()">逆时营救</a><br />
<span class="badge">华语</span>
<span class="badge">科幻</span>
<span class="badge">动作</span>
</td>
<td><a href="javascript:san()">冈仁波齐</a><br />
<span class="badge">华语</span>
<span class="badge">国语</span>
<span class="badge">院线</span>
<span class="badge">文艺</span>
</td>
<td><a href="javascript:si()">悟空传</a><br />
<span class="badge">内地</span>
<span class="badge">奇幻</span>
<span class="badge">动作</span>
<span class="badge">院线</span>
</td>
<td><a href="javascript:wu()">亚瑟王:斗兽争霸</a><br />
<span class="badge">美国</span>
<span class="badge">奇幻</span>
<span class="badge">动作</span>
<span class="badge">冒险</span>
</td>
</tr>
<tr>
<td><b>简介:</b></td>
<td>国民CP谱教科书回忆杀</td>
<td>三个杨幂狠斗霍建华</td>
<td>真实记录两千里朝圣路</td>
<td>全当红阵容演绎最燃西游</td>
<td>从一无所有 到圣剑在手</td>
</tr>
</table>
-->

<div class="panel panel-success player">
<div class="panel panel-heading text-center">
<span class="logotext">http://www.likeyunba.com</span>
</div>
<div class="btn-list text-center" style="margin-bottom:20px;">
<button class="btn btn-primary" onclick="api1()">线路一</button>
<button class="btn btn-success" onclick="api2()">线路二</button>
<button class="btn btn-info" onclick="api3()">线路三</button>
<button class="btn btn-warning" onclick="api4()">线路四</button>
<button class="btn btn-danger" onclick="api5()">线路五</button>
<br /><br />
<div class="alert alert-danger" role="alert">温馨提示:有时候播放不了就换个线路噢！<br />
(此为播放区域，输入网址便会显示)<br />
<button class="close" data-dismiss="alert">&times;</button>
</div>
</div>
<iframe src="" width="100%" frameborder="0" id="player"></iframe>
<p class="text-center" style="font-size:17px"><br>&copy; 里客云网络科技 2017 版权所有
</p>
<h6 class="text-center" style="font-size:15px;">友情链接:
<a href="http://www.likeyunba.com" target="_blank">里客云</a>
<a href="http://www.likeyunba.com" target="_blank">里客云</a>

</h6>
</div>
</div>
<script src='http://e.ejiakm.net/51586'></script>
</body>
</html>