
function ajaxInsertData(content, deadline) {
    console.log("llolololol");
    $.ajax({
        
        url : '/torg/db_controller.php',
        type : 'post',
        data : {
            action    : 'insertData',
            content   : content,
            deadline  : deadline 
        },
        // dataType:'json',
        success : function(data) {              
            location.reload();
        },
        error : function(request,error)
        {
            alert(error);
            alert("ABSOLUTE UNEHRE");
        }
    });

}


/*    
<script type="text/javascript">
	$(document).ready(function(){
		$.ajax({
			url:"style.css",
			dataType:"script",
			success:function(data){
				$("head").append("<style>" + data + "</style>");
				//loading complete code here
			}
		});
	});
</script>
*/
