	document.getElementById('turma').disabled
	var desativar = document.getElementById("turma");
	desativar.disabled;
	desativar.readOnly;
	var curso = document.getElementById("curso");
	var turma = document.getElementById("turma");
	curso.onchange = function ()
	{
  		var options = curso.querySelectorAll("option");
  		options = Array.prototype.slice.call(options);
  		selected = Array.prototype.filter.call(options, function(option) {
      		return option.selected;
  		});    
	  	var indice = 0;
	  	if(selected != null && selected.length == 1) 
	    indice = options.indexOf(selected[0]);
	    turma.disabled = indice == 0;
	  	turma.readOnly = indice == 0;
		turma.innerHTML = '';
		if(indice >= 1 && indice <=3)
		{
			if(indice == 1)
			{
				var option = document.createElement("option");
			    option.innerHTML = "1ºTRT";     
			    turma.appendChild(option);
			    var option = document.createElement("option");
			    option.innerHTML = "2ºTRT";
			    turma.appendChild(option);
			    var option = document.createElement("option");
			    option.innerHTML = "3ºTRT";   
			    turma.appendChild(option);
			}
			if(indice == 2)
			{
				var option = document.createElement("option");
			    option.innerHTML = "1ºTAN";     
			    turma.appendChild(option);
			    var option = document.createElement("option");
			    option.innerHTML = "2ºTAN";
			    turma.appendChild(option);
			    var option = document.createElement("option");
			    option.innerHTML = "3ºTAN";   
			    turma.appendChild(option);
			}
				if(indice == 3)
			{
				var option = document.createElement("option");
			    option.innerHTML = "1ºTIN";     
			    turma.appendChild(option);
			    var option = document.createElement("option");
			    option.innerHTML = "2ºTIN";
			    turma.appendChild(option);
			    var option = document.createElement("option");
			    option.innerHTML = "3ºTIN";   
			    turma.appendChild(option);
			}
		}
	};