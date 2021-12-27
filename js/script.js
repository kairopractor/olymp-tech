$(document).ready(function () {
	$(".sort span").click(function () {
		var id = $(this).attr('id');
		//alert(id);
		$("#fon").css({'display':'block'});
		$(".load").fadeIn(1000, function () {
			$.ajax({
				url:'index-1.php',
				data:'sort_id='+id,
				type:'get',
				success:function (responce) {
					$("#resultat").html(responce).hide().fadeIn(2000);
					$("#fon").css({'display':'none'});
					$(".load").fadeOut(1000);
				}
			});
		});
	});
});

