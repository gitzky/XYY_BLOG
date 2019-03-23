layui.config({
	base : "/adm/js/"
}).use(['form','layer','jquery','layedit','laydate'],function(){
	var form = layui.form(),
		layer = parent.layer === undefined ? layui.layer : parent.layer,
		laypage = layui.laypage,

		laydate = layui.laydate,
		$ = layui.jquery;

	
 	var ue=UE.getEditor('contents'); 


 	var addNewsArray = [],addNews;
 	form.on("submit(addNews)",function(data){
		var newsKey=[];
 		var form_checkbox=$(".keyWord").find("layui-form-checkbox").prevObject
		form_checkbox.each(function(){
			if($(this)[0].checked){
			newsKey.push($(this)[0].getAttribute('val'))

			}
		})
		
 		var html = ue.getContent()
		
		console.log(html)
 		
 		//是否添加过信息
	 	// if(window.sessionStorage.getItem("addNews")){
	 	// 	addNewsArray = JSON.parse(window.sessionStorage.getItem("addNews"));
	 	// }
	 	
 		addNews = '{"newsName":"'+$(".newsName").val()+'",';  //文章名称
 		addNews += '"newsId":"'+new Date().getTime()+'",';	 //文章id
 		addNews += '"newsAuthor":"'+$(".newsAuthor").val()+'",'; //文章作者
 		addNews += '"newsType":"'+$(".newsType").val()+'",'; //文章类别
 		addNews += '"newsTime":"'+$(".newsTime").val()+'",'; //发布时间
 		addNews += '"newsKey":"'+newsKey+'",'; //关键字
 		addNews += '"newsIntro":"'+$(".newsIntro").val()+'",'; //内容摘要
 		addNews += '"newsIntroImg":"'+$(".newsIntroImg").val()+'"}'; //摘要配图
 		
 		//addNewsArray=JSON.stringify(addNews);
 		//window.sessionStorage.setItem("addNews",addNewsArray);
 		//location.href="/admin/postAdd?data="+addNews+"&content="+html;
 		
 		var index = top.layer.msg('数据提交中，请稍候',{icon: 16,time:false,shade:0.8});
 		$.get("/admin/postAdd",{data:addNews,content:html},function(res){
 			var data=JSON.parse(res)
 			console.log(data);
 			if(data.code){
		      setTimeout(function(){
		            top.layer.close(index);
					top.layer.msg("文章添加成功！");
		 			layer.closeAll("iframe");
			 		//刷新父页面
			 		location.reload();
		        },1000);
 			}
 		});

 	})
	
})
