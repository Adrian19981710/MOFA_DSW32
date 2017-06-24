// JavaScript Document
$(document).ready(function() {
	$("#enviar").click(function(e){
		e.preventDefault();
		$.ajax({
			url:'Log.php',
			data:$("#frm").serialize(),
			seccess:function(res){
				res=jQuery.parseJSON(res);
				if(res.error===0){
					alert(res.mensaje);
				}else{
					alert(res.error+":"+res.mensaje);
				}
			}
			});
    });
});