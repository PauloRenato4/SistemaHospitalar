


function validacaoEmail() {

	var emails = form1.email.value;


	if ((emails != 0) && ((emails.indexOf("@") < 1) || (emails.indexOf('.') < 7)))
  {
    alert('Informe um email Válido.');
    form1.email.focus();
    return false;
  }

  return true;
}