var $form;
var form;
var $;
layui.config({
	base : "/adm/js/"
}).use(['form','layer','upload','laydate'],function(){
	form = layui.form();
	var layer = parent.layer === undefined ? layui.layer : parent.layer;
		$ = layui.jquery;
		$form = $('form');
	   
        var delArr=[];
        $(".title-btn").click(function(ev){
            console.log(ev.target.className )

            if(ev.target.className=="title"||ev.target.className=="layui-icon"){
             
                console.log(ev.target.parentNode.firstChild.getAttribute("isInDataBase"))
                if( ev.target.parentNode.firstChild.getAttribute('isInDataBase')=="y"){
                    delArr.push(ev.target.parentNode.id)
                }

                ev.target.parentNode.remove()

            }else {
              return;
            }
        })

        $(".addType").click(function(){
            var title=$("#titleType").val();
            var arr=['layui-btn  title-btn btn','layui-btn  title-btn layui-btn-normal','layui-btn  title-btn layui-btn-warm','layui-btn  title-btn layui-btn-danger','layui-btn  title-btn layui-btn-primary']
            var btn_type=arr[parseInt(Math.random()*5)]
            if(title){
                document.getElementById("typeWrap").innerHTML+='<span class="'+ btn_type +'" style="display:inline-block;margin:10px"><span class="title">'+title+'</span><i class="layui-icon">  &#x1006;</i></span>'
            }else{
                layer.msg('请填写类别');
                return;
            }

           $(".title-btn").click(function(ev){

                if(ev.target.className=="title"||ev.target.className=="layui-icon"){
                 
                    console.log(ev.target.parentNode.firstChild.getAttribute("isInDataBase"))
                    if( ev.target.parentNode.firstChild.getAttribute('isInDataBase')=="y"){
                        delArr.push(ev.target.parentNode.id)
                    }

                    ev.target.parentNode.remove()

                }else {
                  return;
                }
            })

          
             
        })

        form.on("submit(changeType)",function(data){
            var types=[];
            $(".title").each(function(i,ev){
                if(!ev.getAttribute("isInDataBase")){

                    types.push({"type":ev.innerHTML,"class":ev.parentNode.className,"in":"y"});
                }
            })
            var data=JSON.stringify(types)
            var del=JSON.stringify(delArr)

            // location.href="/admin/updateType/"+data;
            // return false;

            if(delArr.length){

            //location.href="/admin/delType/"+del;
            //return false;
            
             $.get("/admin/delType/"+del,function(){parent.location.reload();})
               
            }

            if(types.length){

                $.get("/admin/updateType/"+data,function(code){
                   if(code==="1"){
                        parent.location.reload();
                        var index = layer.msg('提交中，请稍候',{icon: 16,time:false,shade:0.8});
                        setTimeout(function(){
                            layer.close(index);
                        },1000);
                   }
                })
                return false; //阻止表单跳转。如果需要表单跳转，去掉这段即可。
            }else if(delArr.length){
               layer.msg('删除成功')

            }else{
               layer.msg('请添加类别')
            }
        	
        	
        })

        

})

 