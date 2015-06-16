 
  


function calcule() {
 var valor1 = document.getElementById('nascimento').value;
  setValue(Math.floor(Math.ceil(Math.abs(nascimento.getTime() - hoje.getTime()) / (1000 * 3600 * 24)) / 365.25));
}

  function setValue(val) {
  document.getElementById('result').innerHTML = val;
    
}