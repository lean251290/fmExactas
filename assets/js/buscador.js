$('#buscador').keyup(function(){
	$('#tblListar tbody').html('');
	var text = $('#buscador').val();
	$.post(baseurl+"Buscador_Controller/buscarMateria",
		{texto : text},
		function(data){
			var obj = JSON.parse(data);
			var output = '';
			$.each(obj , function(i, item){
			output =+
			'<tr>'+
			'	<td>'+item.nombre+'</td>' +	
			'</tr>';
			});
			$('#tblListar tbody').append(output);
		});
});