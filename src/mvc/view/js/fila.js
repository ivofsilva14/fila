$(document).ready(function () {
	$("#inserir").click(function () {
		if($('#novo_item').val() == '')
		{
			alert('Favor informar um valor');
		}
		else
		{
			$.ajax({
			url: 'ajax/inserir.php', /* URL que será chamada */ 
			type: 'POST', /* Tipo da requisição */ 
			data: 'item=' +$('#novo_item').val(), /* dado que será enviado via POST */
			dataType: 'json', /* Tipo de transmissão */
			success: function(data)
			{
				if(data.sucesso == 1)
				{
					alert('Pilha atualizadas com sucesso');
					window.location.reload();
				} 
				else
				{
					alert('erro');
				}
			}
			});
		}
	});
	$("#remover").click(function () {
		if($('#pilha').val() == '')
		{
			alert('Pilha Vazia');
		}
		else
		{
			if(confirm('Deseja Remover o item da fila ?'))
			{
				$.ajax({
				url: 'ajax/remover.php', /* URL que será chamada */ 
				type: 'POST', /* Tipo da requisição */ 
				data: '', /* dado que será enviado via POST */
				dataType: 'json', /* Tipo de transmissão */
				success: function(data)
				{
					if(data.sucesso == 1)
					{
						alert('Pilha atualizadas com sucesso');
						window.location.reload();
					} 
					else
					{
						alert('Pilha Vazia');
					}
				}
				});
			}
		}
	});
	$("#menor").click(function () {
		if($('#pilha').val() == '')
		{
			alert('Pilha Vazia');
		}
		else
		{
			$.ajax({
			url: 'ajax/menor.php', /* URL que será chamada */ 
			type: 'POST', /* Tipo da requisição */ 
			data: '', /* dado que será enviado via POST */
			dataType: 'json', /* Tipo de transmissão */
			success: function(data)
			{
				if(data.sucesso == 1)
				{
					alert('Menor valor da Pilha: '+data.menor);
				} 
				else
				{
					alert('Pilha Vazia');
				}
			}
			});
		}
	});
});