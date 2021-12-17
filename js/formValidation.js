alert("hallo");
function validateForm() {
var fehler = 0;

// ---------- Vorname ----------
	if (document.forms["kontaktform"]["name"].value == "") {
    fehler ++;
		document.getElementById("name").style.backgroundColor = "red";
    }else{
		document.getElementById("name").style.backgroundColor = "#1abc9c";
	};

// --------- Email ----------
	var x = document.forms["kontaktform"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
	if (x == "") {
    fehler ++;
		document.getElementById("email").style.backgroundColor = "red";
    }if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
	   document.getElementById("email").style.backgroundColor = "red";
     fehler ++;
    }else{
		document.getElementById("email").style.backgroundColor = "#1abc9c";
	};

  // ---------- betreff ----------
  	if (document.forms["kontaktform"]["betreff"].value == "") {
      fehler ++;
  		document.getElementById("betreff").style.backgroundColor = "red";
      }else{
  		document.getElementById("betreff").style.backgroundColor = "#1abc9c";
  	};

  // ---------- nachricht ----------
    	if (document.forms["kontaktform"]["nachricht"].value == "") {
        fehler ++;
    		document.getElementById("nachricht").style.backgroundColor = "red";
        }else{
    		document.getElementById("nachricht").style.backgroundColor = "#1abc9c";
    	};

//----- Ausgabe ---------
	if (fehler == 0)
	{
		return true;
	} else {
		return false;
	}


}
