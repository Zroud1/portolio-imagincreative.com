	
function union(x, y){
	let x1 = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
		x2 = /^[a-zA-Z ]*$/, s = true;
	
	if (x.nmpr.value == ""){
		x.nmpr.style.backgroundColor = "rgba(255, 0, 0, .1)";
		s = false;
	} else if(!x2.test(x.nmpr.value)){
		x.nmpr.classList.add("Err"); x.nmpr.value = "";
		x.nmpr.placeholder = "Nom Et Prénom Invalide !";
		x.nmpr.style.backgroundColor = "rgba(255, 0, 0, .1)";
		s = false;
	} else {
		x.nmpr.classList.remove("Err");
		x.nmpr.style.backgroundColor = "#f2f2f2";
		x.nmpr.placeholder = "";
	}
	
	if (x.mail.value == ""){
		x.mail.style.backgroundColor = "rgba(255, 0, 0, .1)";
		s = false;
	} else if(!x1.test(x.mail.value)){
		x.mail.placeholder = "Adr Email Invalide !";
		x.mail.classList.add("Err"); x.mail.value = "";
		x.mail.style.backgroundColor = "rgba(255, 0, 0, .1)";
		s = false;
	} else {
		x.mail.style.backgroundColor = "#f2f2f2";
		x.mail.classList.remove("Err");
		x.mail.placeholder = "";
	}
	
	if (x.tel.value == ""){
		x.tel.style.backgroundColor = "rgba(255, 0, 0, .1)";
		s = false;
	} else if(x.tel.value.length != 10){
		x.tel.placeholder = "Numéro Tél Invalide !";
		x.tel.classList.add("Err"); x.tel.value = "";
		x.tel.style.backgroundColor = "rgba(255, 0, 0, .1)";
		s = false;
	} else {
		x.tel.placeholder = "";
		x.tel.classList.remove("Err");
		x.tel.style.backgroundColor = "#f2f2f2";
	}
	
	if (x.msg.value == ""){
		x.msg.style.backgroundColor = "rgba(255, 0, 0, .1)";
		s = false;
	} else {
		x.msg.classList.remove("Err");
		x.msg.style.backgroundColor = "#f2f2f2";
	}
	
	return s;
}	
	
function setClick(x, y){
	if (y == 0){
		if(union(x, y)){ x.submit(); } else { union(x, y); }
	} else {
		union(x, y);
		
		let t = x.f1.parentNode.children[0], q = true;;
		if (x.f1.files.length == 0){
			t.style.backgroundColor = "rgba(255, 0, 0, .1)";
			q = false;
		} else { t.style.backgroundColor = "#f2f2f2"; }
		
		let h = x.f2.parentNode.children[0];
		if (x.f2.files.length == 0){
			h.style.backgroundColor = "rgba(255, 0, 0, .1)";
			q = false;
		} else { h.style.backgroundColor = "#f2f2f2"; }
		
		if (x.spc.value == ""){
			x.spc.style.backgroundColor = "rgba(255, 0, 0, .1)";
			q = false;
		} else { x.spc.style.backgroundColor = "#f2f2f2"; }
		
		if(q && union(x, y)){ x.submit(); }
	}
}

function eHide(x){ document.getElementById(x).click(); }

function eCncl(x, y){ document.getElementById(y).innerHTML = x; }

function eSlctd(x, y){ document.getElementById(y).innerHTML = x.files[0]['name']; }