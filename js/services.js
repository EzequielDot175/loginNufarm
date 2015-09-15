app.service('ajax', ['$http', function(ajax){
	this.url = "ajax.php";
	this.post = "loginController";

	this.send = function(params,callback){
		var extend = params;
			extend.loginController = "";
		ajax.post(this.url,extend).success(callback).error(function(a) {
			console.error('Error en login :', a);
		});
	}

	this.loginMe = function(param,callback){
		param.method = "loginNufarm";
		if (param.user == "" && this.pass == "") {
			alert('Usuario y/o contraseña incorrecta');
			return;
		};

		this.send(param,callback);
	}

	this.isLogged = function(callback){
		var params = {method: 'checkAllLogged'};
		this.send(params,callback);
	}


}])