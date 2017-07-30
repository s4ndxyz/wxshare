<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>最牛的祛斑方法，最健康方便，帮你把色斑去得干干净净！</title>
</head>
<body>
<script type=text/javascript src="http://libs.baidu.com/jquery/1.9.0/jquery.min.js"></script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js"></script>
<script>
var url = window.location.href;
$.ajax({
	type: "get",
		async: false,
		url: 'jssdk.php?url='+url,
		// dataType: "jsonp",
		jsonp: "callback",
		// jsonpCallback:"checkHandler",
		success: function(data){
			// console.log(data);
			wechat(JSON.parse(data));
			 },
				 error:function(){
					 alert(1);
			 }
		 });
	   function wechat(json){
		   wx.config({
			   debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会>打印。
				   appId: json.appId, // 必填，公众号的唯一标识
				   timestamp: json.timestamp, // 必填，生成签名的时间戳
				   nonceStr: json.nonceStr, // 必填，生成签名的随机串
				   signature: json.signature,// 必填，签名，见附录1
				   jsApiList: ['onMenuShareTimeline','onMenuShareAppMessage'] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
			});

			wx.ready(function () {
				wx.onMenuShareAppMessage({
					title: '【免 费 送 】丰田普拉多汽车模型 送完即止',
						desc: '【免 费 送 】丰田普拉多汽车模型 送完即止',
						link: 'http://qsikxt.cn/zhuanfa1/index.php',
						imgUrl: 'http://qsikxt.cn/jianfei1/6.jpg',
						trigger: function (res) {
							// alert('用户点击发送给朋友');
					},
						success: function (res) {
							alert('已分享');
					},
						cancel: function (res) {
							alert('已取消');
					},
						fail: function (res) {
							alert(JSON.stringify(res));
					}
			  });
		   //监听“分享到朋友圈”按钮点击、自定义分享内容及分享结果接口
					wx.onMenuShareTimeline({
						title: '【免 费 送 】丰田普拉多汽车模型 送完即止',
							desc: '【免 费 送 】丰田普拉多汽车模型 送完即止',
							link:'http://qsikxt.cn/zhuanfa1/index.php',
							imgUrl:'http://qsikxt.cn/zhuanfa1/6.jpg',
							trigger: function (res) {
								// alert('用户点击分享到朋友圈');
						},
							success: function (res) {
								alert('已分享');
						},
							cancel: function (res) {
								alert('已取消');
						},
							fail: function (res) {
								alert(JSON.stringify(res));
						}
				   });
			});
		}
		</script>

</body>
</html>
