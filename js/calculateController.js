var calculateController = {
	
	init: function() {
		calculateController.setForm();
	},
	
	setForm: function() {
		var form = document.querySelector('form');
		form.addEventListener('submit', function(event) {
			calculateController.calculateSalary(form);
		event.preventDefault();
		});
	},
	
	calculateSalary: function(form) {
		var 
			salary = parseFloat(form.salary.value),
			inss = 0;
			irpf = 0;
			result = 0;
		
		var callback = function(inss) {
			calculateController.showResult(inss);			
		};
		calculateService.calculateImposto(salary, callback);
	},
	
	showResult: function(inss) {
	    
	    var spanINSS = document.querySelector('.inssresult');
		spanINSS.innerHTML = inss.toFixed(2);
		
	    var spanIRPF = document.querySelector('.irpfresult');
		spanIRPF.innerHTML = irpfresult.toFixed(2);;
	    
	    var spanResult = document.querySelector('.salarioresult');
		spanResult.innerHTML = result.toFixed(2);;
		
		calculateController.showLoading(false);
	}
	
}

//initialization
calculateController.init();