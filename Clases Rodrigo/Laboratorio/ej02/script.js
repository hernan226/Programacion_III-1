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
					let persona = JSON.parse(xhr.responseText);
					info.innerText = `nombre: ${persona.nombre} ${persona.apellido} tiene ${persona.edad}`;
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
	xhr.open('GET', './persona.json', true);
	xhr.send();
	var tiempo = setTimeout(()=>{
		xhr.abort();
		info.innerHTML = 'Servidor ocupado. Intente mas tarde'
	}, 2000);
}