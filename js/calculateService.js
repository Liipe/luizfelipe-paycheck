var calculateService = {

	calculateImposto: function(salary,callback) {
		$.ajax({
		  url: 'PHPServices/calculate.php',
		  data: {'salary': salary},
		  success: function(inss){
		  	callback(parseFloat(inss));
		  },
		  error: function(){
		  	callback(null);
		  }
		});
	},
	
};