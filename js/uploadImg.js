
function UploadImg(formCon){

	$(formCon.el).html('<form id="imageWrapBox"><input type="file" name="file" id="fileimageWrapBox" style="display: none;" />'
					+'<label id="imgButton" for="fileimageWrapBox" style="display: inline-block;width: 80px;height: 30px;'
					+'background:#009688;text-align: center;line-height: 30px;color:#fff;border-radius:3px">上 传</label></form>')

		$("#uploadImg").css({
					"width": "80px",
					"height": "30px",
					"margin":"15px 0",
			})
		$("#uploadImg").hover(function(){
		    $("#imgButton").css("background-color","#009000");
		},function(){
		    $("#imgButton").css("background-color","#009688");
		});

	// $.ajaxSetup({        
	// 		headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' }    
	// 	}); 

		$("#fileimageWrapBox").change(function(){
			var formData = new FormData($("#imageWrapBox")[0]);  
		    $.ajax({            
		      	url: formCon.url,           
		      	type: 'POST',            
		      	data: formData,            
		      	contentType: false,           
		      	processData: false,           
		      	success:formCon.success
		            
		    });

		})

 } 
