/*window.addEventListener('load', ()=>{
	document.forms[0].addEventListener('submit',enviarDatos)
	//document.forms[0].addEventListener('submit',(e)=>{e.preventDefault}))
});


function enviarDatos(e)
{
	e.preventDefault();
	let data = traerDatos(e.target);
	let xhr = new XMLHttpRequest();
	xhr.onreadystatechage = ()=>{
		let info = document.getElementById('info');
		if(xhr.readyState == 4)
		{
			if(xhr.status==200)
			{
				setTimeOut(()=>{
					info.innerText = xhr.responseText;

					clearTimeout(tiempo);
				},3000);
				
				//info.innerHTML = "<h1>Esto es un titulo</h1>"
			}
			else
			{
				console.log(`Error ${xhr.status} - ${xhr.statusText}`);
			}
		}
		else
		{
			info.innerHTML = '<img src="./images/spinner.gif" alt="spinner">';
		}
	}
	xhr.open('POST', './servidor.php', true);
	xhr.setRequestHeader('Content-type', 'Application/x-wwww-form-urlencoded');
	xhr.send();
	var tiempo = setTimeout(()=>{
		xhr.abort();
		info.innerHTML = 'Servidor ocupado. Intente mas tarde'
	}, 2000);
}
function traerDatos(form){
	let nombre = form.nombre.value;
	let apellido = form.apellido.value;
	return `nombre=${nombre}&apellido=${apellido}&`;
}*/


function test()
{
	let y="b";
	console.log(y);
}

console.log("a");
test();
console.log("c");
