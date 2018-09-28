layui.config({
	base : "/adm/js/"
}).use(['form','layer','jquery','layedit','laydate'],function(){
	var form = layui.form(),
		layer = parent.layer === undefined ? layui.layer : parent.layer,
		laypage = layui.laypage,

		laydate = layui.laydate,
		$ = layui.jquery;

	// 
	var ue=UE.getEditor('contents'); 

 	var addNewsArray = [],addNews;
 	form.on("submit(addNews)",function(data){
 		//是否添加过信息
	 	if(window.sessionStorage.getItem("addNews")){
	 		addNewsArray = JSON.parse(window.sessionStorage.getItem("addNews"));
	 	}
	 	
 		addNews = '{"newsName":"'+$(".newsName").val()+'",';  //文章名称
 		addNews += '"newsId":"'+new Date().getTime()+'",';	 //文章id
 		addNews += '"newsTime":"'+$(".newsTime").val()+'",'; //发布时间
 		addNews += '"newsAuthor":"'+$(".newsAuthor").val()+'",'; //文章作者
 		addNews += '"isShow":"'+ isShow +'"}'; //是否暂时
 		addNewsArray.unshift(JSON.parse(addNews));
 		addNewsArray=JSON.stringify(addNewsArray);
 		window.sessionStorage.setItem("addNews",addNewsArray);
 		console.log(addNewsArray);
 		//弹出loading
 		// var index = top.layer.msg('数据提交中，请稍候',{icon: 16,time:false,shade:0.8});
   //      setTimeout(function(){
   //          top.layer.close(index);
			// top.layer.msg("文章添加成功！");
 		// 	layer.closeAll("iframe");
	 	// 	//刷新父页面
	 	// 	parent.location.reload();
   //      },2000);
 		return false;
 	})
	
})
