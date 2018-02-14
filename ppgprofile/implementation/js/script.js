// Função para popular o departamento de acordo com a seleção da instituição.

function updateDepartamento() {
	var promise, url, id = this.value, $selectDept;
	$selectDept = $('select[name="customer[\'idDepartamento\']"]').empty();
	$selectDept.append('<option value="">Selecione um departamento</option>');
	if (id) {
		url = 'http://ppgprofile.000webhostapp.com/ppgprofile/implementation/departamento/departamento-service.php?id=' + id; // Servidor Web
		//url = 'http://localhost/ppgprofile/implementation/departamento/departamento-service.php?id=' + id; //Servidor Local
		promise = $.ajax(url);
		promise.done(function (response) {
			response = JSON.parse(response);
			for (key in response) {
				$selectDept.append('<option value="' + key + '">' + response[key] + '</option>');
			}
		});
	}
}

$(document).ready(function () {
	var $selectInstituicao = $('select[name="customer[\'idInstituicao\']"]');
	$selectInstituicao.on('change', updateDepartamento);
});

// Função para popular o curso de acordo com a instituição selecionada.

function updateCurso() {
	var promise, url, id = this.value, $selectCurso;
	$selectCurso = $('select[name="customer[\'idCursoGraduacao\']"]').empty();
	$selectCurso.append('<option value="">Selecione um curso</option>');
	if (id) {
		url = 'http://ppgprofile.000webhostapp.com/ppgprofile/implementation/departamento/departamento-service.php?id=' + id; // Servidor Web
		//url = 'http://localhost/ppgprofile/implementation/curso/curso-service.php?id=' + id; //Servidor Local
		promise = $.ajax(url);
		promise.done(function (response) {
			response = JSON.parse(response);
			for (key in response) {
				$selectCurso.append('<option value="' + key + '">' + response[key] + '</option>');
			}
		});
	}
}

$(document).ready(function () {
	var $selectInstituicao = $('select[name="customer[\'idInstituicao\']"]');
	$selectInstituicao.on('change', updateCurso);
});

