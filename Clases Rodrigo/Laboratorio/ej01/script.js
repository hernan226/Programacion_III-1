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
					info.innerText = xhr.responseText;
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
	xhr.open('GET', '/documento.txt', true);
	xhr.send();
}