app.controller('loginController', ['$scope','ajax', function(scp,ajx){

	scp.user = "";
	scp.pass = "";
	scp.logged = false;
	scp.auth = [];
	scp.loginContainer = true;
	scp.accesos = {
		mk: false,
		pn: false,
		ve: false
	}

	scp.contenido = false;

	ajx.isLogged(function(a){
		console.info('Reporting isLogged:', a);
		
		if (a.idUsuario || a.id) {
			scp.logged = true;
			scp.contenido = true;
			scp.checkAccesos(a.gold);
			scp.loginContainer = false;
			scp.auth = a;
		};
	});

	scp.loginMe = function(){
		
		ajx.loginMe({user: this.user, pass: this.pass},function(a){
			if (a.error != undefined) {
				alert('Usuario y/o contraseña incorrecta');
				return;
			}else{
				console.log(a);
				scp.logged = true;
				scp.contenido = true;
				scp.loginContainer = false;
				scp.checkAccesos(a.gold)
				scp.auth = a;

			}
		});

	}

	

	scp.checkAccesos = function(isGold){
		var gold = Boolean(parseInt(isGold)) ;
		console.info('Reporting checkAccesos:', gold);

		if (gold) {
			scp.accesos = {
				mk: true,
				pn: true,
				ve: true,
			}
		}else{
			scp.accesos = {
				mk: true,
				pn: false,
				ve: true,
			}
		}
	}

	scp.go_ve = function(){
		window.location.href = "vendedor-estrella";
	}

	scp.go_mk = function(){
		// window.location.href = "vendedor-estrella";
	}

	scp.go_pn = function(){
		window.location.href = "plan-de-negocios";
	}


}])