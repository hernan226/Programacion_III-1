function traerTexto()
{
	let xhr = new XMLHttpRequest();
	xhr.onreadystatechage = ()=>{
		let info = document.getElementById('info');
		if(xhr.readyState == 4)
		{
			if(xhr.status==200)
			{
				setTimeOut(()=>{
					let lista = JSON.parse(xhr.responseText);
					info.innerHTML = "";
					for (persona of lista) {
						info.innerText += `id: ${persona.id} nombre: ${persona.nombre} ${persona.apellido} email: ${persona.email} genero: ${persona.genero}<hr>`;
					}
					clearTimeout(tiempo);
				},3000);
				
				//info.innerHTML = "<h1>Esto es un titulo</h1>"
			}
			else
			{
				console.log('Error ${xhr.status} - ${xhr.statusText}');
			}
		}
		else
		{
			info.innerHTML = '<img src="./images/spinner.gif" alt="spinner">';
		}
	}
	xhr.open('GET', './personas.json', true);
	xhr.send();
	var tiempo = setTimeout(()=>{
		xhr.abort();
		info.innerHTML = 'Servidor ocupado. Intente mas tarde'
	}, 2000);
}