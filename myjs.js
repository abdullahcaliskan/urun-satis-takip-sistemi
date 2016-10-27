function servisSil(g_id){
	var data="s_no="+g_id;

	$.ajax({
		url:'servis_sil.php',
		type:'POST',
		data:data,
		success:function(request){
			alert(request);
			var gizle="#s"+g_id;
			$(gizle).css("display","none");
		}
	})
}
function durusmaSil(g_id){
	var data="d_no="+g_id;

	$.ajax({
		url:'durusma_sil.php',
		type:'POST',
		data:data,
		success:function(request){
			alert(request);
			var gizle="#s"+g_id;
			$(gizle).css("display","none");
		}
	})
}

function dosya_sil(g_id){
	var data="location="+g_id;
	alert(g_id);
	//var gizle="."+g_id;
	//$(gizle).css("display","none");
	/*
	$.ajax({
		url:'dosya_sil.php',
		type:'POST',
		data:data,
		success:function(req){
			
			alert(req);

		}
	})*/
}