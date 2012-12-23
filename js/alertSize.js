<!-- Ajoute un scroll si l'&eacute;cran est petit -->

function alertSize() {
  var myWidth = 0, myHeight = 0;
  if( typeof( window.innerWidth ) == 'number' ) {
    //Non-IE
    myWidth = window.innerWidth;
    myHeight = window.innerHeight;
  } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
    //IE 6+ in 'standards compliant mode'
    myWidth = document.documentElement.clientWidth;
    myHeight = document.documentElement.clientHeight;
  } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
    //IE 4 compatible
    myWidth = document.body.clientWidth;
    myHeight = document.body.clientHeight;
  }
  //window.alert( 'Width = ' + myWidth );
  //window.alert( 'Height = ' + myHeight );
  if (myHeight <= 550){
	document.getElementById('triangle-conteneur').style.overflow='auto';
	document.getElementById("triangle").style.height   = 580 + 'px';
	document.getElementById("conteneur-accueil").style.bottom   = 2 + 'px';
	//var Obj = document.getElementsByClassName("conteneur");
	/*var Obj = $("conteneur");
	for( i=0; i < Obj.length; i++){
    	Obj[i].style.marginTop = Obj[i].style.marginTop-320 + 'px';	
 	}
	document.getElementById("triangle").style.height   = 600 + 'px';
	document.getElementById("content-prog").style.height  = 800 + 'px';
	document.getElementById("content-gal").style.height   = 800 + 'px';
	document.getElementById("content-hist").style.height  = 800 + 'px';
	document.getElementById("content-infos").style.height = 800 + 'px';*/
  }
   /*if (myHeight <= 600){
	   
	document.getElementById('footer').style.display  = 'none';
	document.getElementById('facebook').style.display = 'none';
	document.getElementById('adresse').style.display  = 'none';
	document.getElementById('personnage-hist-droite').style.display = 'none';
	document.getElementById('personnage-info-droite').style.display = 'none';
   }*/
	
}
alertSize();