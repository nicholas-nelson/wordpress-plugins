function validateV() {

  var voltage = document.getElementById('voltage').value;


  if ((!voltage.match(/^[0-9]+([,.][0-9]+)?$/)) || voltage == 0) {

    producePrompt('Only Numbers greater than 0/Decimals can be entered.','voltage-error', 'red');
    return false;

  }

  else {
  
  producePrompt('Valid', 'voltage-error', 'green');
  return true;
  }
  
}

function validateR() {

  var resistance = document.getElementById('resistance').value;


  if((!resistance.match(/^[0-9]+([,.][0-9]+)?$/)) || resistance == 0) {
     
    producePrompt('Only Numbers greater than 0/Decimals can be entered.', 'resistance-error', 'red');
    return false;
  }

    producePrompt('Valid', 'resistance-error', 'green');
    return true;

}

function validateC () {

  var current = document.getElementById('current').value;


  if((!current.match(/^[0-9]+([,.][0-9]+)?$/)) || current == 0) {

    producePrompt('Only Numbers greater than 0/Decimals can be entered.', 'current-error', 'red');
    return false;

  }

  producePrompt('Valid', 'current-error', 'green');
  return true;

}


function validateForm() {
  if (((!validateV() && !validateC()) || (!validateV() && !validateR()) || (!validateR() && !validateC())))  {
    jsShow('submit-error');
    producePrompt('Please fix errors to submit.', 'submit-error', 'red');
    setTimeout(function(){jsHide('submit-error');}, 2000);
    return false;
  }
  
    else if (validateV() && validateC() && validateR()) {
    jsShow('submit-error');
    producePrompt('Only 2 inputs are allowed.', 'submit-error', 'red');
    setTimeout(function(){jsHide('submit-error');}, 2000);
    return false;
  }
  
     
  else {

  }
}

function jsShow(id) {
  document.getElementById(id).style.display = 'block';
}

function jsHide(id) {
  document.getElementById(id).style.display = 'none';
}




function producePrompt(message, promptLocation, color) {

  document.getElementById(promptLocation).innerHTML = message;
  document.getElementById(promptLocation).style.color = color;


}

 
function isNumberKey(evt, obj) {
 
            var charCode = (evt.which) ? evt.which : event.keyCode
            var value = obj.value;
            var dotcontains = value.indexOf(".") != -1;
            if (dotcontains)
                if (charCode == 46) return false;
            if (charCode == 46) return true;
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
