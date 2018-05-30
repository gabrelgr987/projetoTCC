function TrocarCurso()
	{
		var selCurso = document.getElementById("selCurso");
		var selectedValue1 = selCurso.options[selCurso.selectedIndex].value;
		if(selectedValue1 == 'TRT')
		{
			document.getElementById('turmatin').style.display = "none";
			document.getElementById('turmatrt').style.display = "block";
		}
		else
		{
			if(selectedValue1 == 'TIN')
			{
				document.getElementById('turmatrt').style.display = "none";
				document.getElementById('turmatin').style.display = "block";
			}
		}
	}
	function TrocarTRT()
	{
		var selTurmaTRT = document.getElementById("selTurmaTRT");
		var selectedValue2 = selTurmaTRT.options[selTurmaTRT.selectedIndex].value;
		if(selectedValue2 == '1ºTRT')
		{
			document.getElementById('trt3').style.display = "none";
			document.getElementById('trt2').style.display = "none";
			document.getElementById('trt1').style.display = "block";
		}
		else
		{
			if(selectedValue2 == '2ºTRT')
			{
				document.getElementById('trt3').style.display = "none";
				document.getElementById('trt2').style.display = "block";
				document.getElementById('trt1').style.display = "none";
			}
			else
			{
				if(selectedValue2 == '3ºTRT')
				{
							document.getElementById('trt3').style.display = "block";
							document.getElementById('trt2').style.display = "none";
							document.getElementById('trt1').style.display = "none";
				}
			}
		}
	}
	function TrocarTIN()
	{
		var selTurmaTIN = document.getElementById("selTurmaTIN");
		var selectedValue3 = selTurmaTIN.options[selTurmaTIN.selectedIndex].value;
		if(selectedValue3 == '1ºTIN')
		{
			document.getElementById('tin3').style.display = "none";
			document.getElementById('tin2').style.display = "none";
			document.getElementById('tin1').style.display = "block";
		}
		else
		{
			if(selectedValue3 == '2ºTIN')
			{
				document.getElementById('tin3').style.display = "none";
				document.getElementById('tin2').style.display = "block";
				document.getElementById('tin1').style.display = "none";
			}
			else
			{
				if(selectedValue3 == '3ºTIN')
				{
							document.getElementById('tin3').style.display = "block";
							document.getElementById('tin2').style.display = "none";
							document.getElementById('tin1').style.display = "none";
				}
			}
		}
	}