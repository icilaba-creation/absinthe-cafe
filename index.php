<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Restaurant Saint-Malo L'Absinthe Caf&eacute;</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<meta name="description" content="Le restaurant l'Absinthe café, situé à Intra-Muros Saint Malo dispose de différents espaces sur quatre niveaux séparés (Bar - Mezzanine - 2 salles de restaurants)"/>
<meta name="keywords" lang="fr" content="restaurant, saint-malo, absinthe, café, cuisine, restauration, bar, rennes, gourmand, st-malo, bien manger, ambiance, st malo, vin"/>
<meta name="robots" content="all" />
<meta name="Identifier-URL" content="http://www.restaurant-absinthe-cafe.fr/" />
<meta property="fb:page_id" content="121997814480287" />
<meta name="copyright" content="www.artby.fr"/>

<link href="css/style-min.css" media="screen" rel="Stylesheet" type="text/css" />
<link rel="shortcut icon" type="image/x-icon"  href="images/favicon.ico" />
<link rel="icon"		  type="image/ico"     href="images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="shadowbox/shadowbox.css" />
</head>
<body onLoad="iPhoneAlert();">
<!--[if lte IE 6]><script src="js/ie6/warning.js"></script><script>window.onload=function(){e("js/ie6/")}</script><![endif]-->
<div id="intro"><?php include('intro.inc.php'); ?></div>
<div id="triangle-conteneur">
    <div id="triangle"><?php include('menu.inc.php'); ?>
    <div id="carte" class="page"><?php include('carte.inc.php'); ?></div>
    <div id="equipes" class="page"><?php include('equipes.inc.php'); ?></div>
    <div id="cocktails" class="page"><?php include('cocktail.inc.php'); ?></div>
    <!--<div id="vin" class="page">tata</div>-->
    <div id="photos" class="page"><?php include('photo.inc.php'); ?></div>
    <div id="expo" class="page"><?php include('expo.inc.php'); ?></div>
    <div id="aime" class="page"><?php include('aime.inc.php'); ?></div>    
    <div id="groupes" class="page"><?php include('groupes.inc.php'); ?></div>
    <div id="plan" class="page"><?php include('plan.inc.php'); ?></div>
    <div id="contact" class="page"><?php include('contact.inc.php'); ?></div>
    </div>
</div>
<div id="ctrCopyright"><?php include('copyright.inc.php'); ?></div>
<div id="wrapper">
  <div id="mask">
		<div id="accueil" class="item">
			<a name="accueil"></a>
			<div class="content"><?php include('accueil.inc.php'); ?></div>
		</div>
		<div id="mezzanine" class="item">
			<a name="mezzanine"></a>
			<div class="content"><?php include('mezzanine.inc.php'); ?></div>
		</div>
		<div id="restaurant" class="item">
			<a name="restaurant"></a>
			<div class="content"><?php include('restaurant.inc.php'); ?></div>
		</div>
		<div id="bar" class="item">
			<a name="bar"></a>
			<div class="content"><?php include('bar.inc.php'); ?></div>
		</div>
        <div id="halles" class="item">
			<a name="halles"></a>
			<div class="content"><?php include('halles.inc.php'); ?></div>
		</div>
	</div>
</div>
<script type="text/javascript" src="shadowbox/shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init({
			   continuous:     true,

			   });
</script>



<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.custom.min.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo.js"></script>
<script type="text/javascript" src="js/jquery.tipTip.minified.js"></script>
<script type="text/javascript" src="js/jquery.flip.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/jquery.slidinglabels.min.js"></script>
<script type="text/javascript" src="js/livevalidation_standalone.compressed.js"></script>
<script type="text/javascript" src="js/intro.js"></script>
<script type="text/javascript" src="js/alertSize.js"></script>
<script type="text/javascript" src="js/swfobject.js"></script>
<script type="text/javascript">
function iPhoneAlert() {
if((navigator.userAgent.match(/iPhone/i))||(navigator.userAgent.
match(/iPod/i))){
var question = confirm("Souhaitez-vous naviguer sur le site optimisé pour iPhone?")
if (question){
window.location = "http://www.restaurant-absinthe-cafe.fr/mobile/";
}else{

}
}
}
</script>
		
		<script type="text/javascript">
			var flashvars = {};
			var params = {};
			params.wmode = "transparent";
			var attributes = {};
			attributes.id = "intra-muros-accueil";
			swfobject.embedSWF("swf/MySlideshowFondueAccueil.swf", "intra-muros-accueil", "100%", "100%", "9.0.0", false, flashvars, params, attributes);
		</script>
		<script type="text/javascript">
			var flashvars = {};
			var params = {};
			params.wmode = "transparent";
			var attributes = {};
			attributes.id = "intra-muros-mezzanine";
			swfobject.embedSWF("swf/MySlideshowFondueMezzanine.swf", "intra-muros-mezzanine", "100%", "100%", "9.0.0", false, flashvars, params, attributes);
		</script>
        <script type="text/javascript">
			var flashvars = {};
			var params = {};
			params.wmode = "transparent";
			var attributes = {};
			attributes.id = "intra-muros-restaurant";
			swfobject.embedSWF("swf/MySlideshowFondueRestaurant.swf", "intra-muros-restaurant", "100%", "100%", "9.0.0", false, flashvars, params, attributes);
		</script>
        <script type="text/javascript">
			var flashvars = {};
			var params = {};
			params.wmode = "transparent";
			var attributes = {};
			attributes.id = "intra-muros-bar";
			swfobject.embedSWF("swf/MySlideshowFondueBar.swf", "intra-muros-bar", "100%", "100%", "9.0.0", false, flashvars, params, attributes);
		</script>
        <script type="text/javascript">
			var flashvars = {};
			var params = {};
			params.wmode = "transparent";
			var attributes = {};
			attributes.id = "intra-muros-halles";
			swfobject.embedSWF("swf/MySlideshowFondueHalles.swf", "intra-muros-halles", "100%", "100%", "9.0.0", false, flashvars, params, attributes);
		</script>
<script type="text/javascript">
$(document).ready(function() {
	$('a.panel').click(function () {
		$('a.panel').removeClass('selected');
		$(this).addClass('selected');
		current = $(this);
		$('#wrapper').scrollTo($(this).attr('href'), 800);		
		return false;
	});
	$(window).resize(function () {
		resizePanel();
	});
	$('a.bloc').click(function () {
		$('#triangle-conteneur').css("z-index","20");
		$('a.bloc').removeClass('selection');
		$('.page').fadeOut('fast');
		$(this).addClass('selection');
		$($(this).attr('href')).delay(500).fadeIn('fast');
		return false;
	});
	$("#trait-gauche").animate({'width':"70%"},5000,function() {
    $("#entrer").fadeIn("fast");
  });
	$(".draggable").draggable();
	$('#triangle-conteneur').mouseover(function() {
    $('#mentions').fadeOut("fast")
    $('#absinthe').fadeOut("fast")
	$('#copyright-center').animate({width:"0px"},'fast');
	$('#copyright-droite').animate({marginLeft:"11px"},'fast');
	});
$('a.lien').click(function () {
		$('a.lien').removeClass('selection');
		$('.page-sponsors').fadeOut('fast');
		$(this).addClass('selection');
		$($(this).attr('href')).delay(500).fadeIn('fast');
		return false;
	});
});

function resizePanel() {
	width = $(window).width();
	height = $(window).height();

	mask_height = height * $('.item').length;
		
	$('#debug').html(width  + ' ' + height + ' ' + mask_height);
	
	$('#wrapper, .item').css({width: width, height: height});
	$('#mask').css({width: width, height: mask_height});
	$('#wrapper').scrollTo($('a.selected').attr('href'), 0);
		
};

function slide() {
	var largeurNav = $("body").width();
	$("#triangle").animate({width:"100%"},400);
};

function slideFerme() {
	
	$('a.bloc').removeClass('selection');
	$('.page').fadeOut('fast');
	$("#triangle").delay(100).animate({width:"340px"},"slow",function() {
    $('#triangle-conteneur').css("z-index","1");
  });

	
};


$(function(){
    $(".someClass").tipTip({maxWidth: "auto", defaultPosition: "right"});
});

function masquerAccueil() {
	$(".fermer").fadeOut("slow");
	$("#bloc-accueil").fadeOut("slow",function() {
    $('.afficher').delay("slow").fadeIn("slow");
  });
	};
	
	function afficherAccueil() {
	$(".afficher").fadeOut("slow");
	$("#bloc-accueil").fadeIn("slow",function() {
    $('.fermer').fadeIn("slow");
  });
	};
	
function masquerMezzanine() {
	$(".fermer").fadeOut("slow");
	$("#bloc-mezzanine").fadeOut("slow",function() {
    $('.afficher').delay("slow").fadeIn("slow");
  });
	};
	
function afficherMezzanine() {
	$(".afficher").fadeOut("slow");
	$("#bloc-mezzanine").fadeIn("slow",function() {
    $('.fermer').fadeIn("slow");
  });
	};

function masquerRestaurant() {
	$(".fermer").fadeOut("slow");
	$("#bloc-restaurant").fadeOut("slow",function() {
    $('.afficher').delay("slow").fadeIn("slow");
  });
	};
	
function afficherRestaurant() {
	$(".afficher").fadeOut("slow");
	$("#bloc-restaurant").fadeIn("slow",function() {
    $('.fermer').fadeIn("slow");
  });
	};
	
function masquerBar() {
	$(".fermer").fadeOut("slow");
	$("#bloc-bar").fadeOut("slow",function() {
    $('.afficher').delay("slow").fadeIn("slow");
  });
	};
	
function afficherBar() {
	$(".afficher").fadeOut("slow");
	$("#bloc-bar").fadeIn("slow",function() {
    $('.fermer').fadeIn("slow");
  });
	};

function masquerHalles() {
	$(".fermer").fadeOut("slow");
	$("#bloc-halles").fadeOut("slow",function() {
    $('.afficher').delay("slow").fadeIn("slow");
  });
	};
	
function afficherHalles() {
	$(".afficher").fadeOut("slow");
	$("#bloc-halles").fadeIn("slow",function() {
    $('.fermer').fadeIn("slow");
  });
	};
	
	function aggrandirCopy() {
	$("#copyright-center").animate({width:"260px"},'fast');
	$("#copyright-droite").animate({marginLeft:"271px"},'fast');
	$("#absinthe").fadeIn("fast",function() {
    $('#mentions').fadeIn("fast");
 
	});
	};
	

	
	$(function(){

	$('#contactform').slidinglabels({

		/* these are all optional */
		topPosition  : '5px',  // how far down you want each label to start
		leftPosition : '5px',  // how far left you want each label to start
		axis         : 'x',    // can take 'x' or 'y' for slide direction
		speed        : 'fast'  // can take 'fast', 'slow', or a numeric value

	});

});
</script>

<script type="text/javascript">
var nom = new LiveValidation('nom', { validMessage: ' ', wait: 500, insertAfterWhatNode: "errname"});
		nom.add(Validate.Exclusion, { within: [ '0' , '1', '2', '3', '4', '5', '6', '7', '8', '9' ], partialMatch: true, failureMessage: ' ' } );
		nom.add(Validate.Presence, {failureMessage: ' '});
				
		var prenom = new LiveValidation('prenom', { validMessage: ' ', wait: 500, insertAfterWhatNode: "errprenom"});
		prenom.add(Validate.Exclusion, { within: [ '0' , '1', '2', '3', '4', '5', '6', '7', '8', '9' ], partialMatch: true, failureMessage: ' ' } );
		prenom.add(Validate.Presence, {failureMessage: ' '});
		
		var tel = new LiveValidation('tel', { validMessage: ' ', wait: 500, insertAfterWhatNode: "errtel"});
		tel.add(Validate.Numericality, {notANumberMessage : ' '} );
		tel.add(Validate.Presence, {failureMessage: ' '});
		
		var email = new LiveValidation('email', {validMessage: ' ', wait: 500, insertAfterWhatNode: "erremail"});
		email.add(Validate.Presence, {failureMessage: ' '});
		email.add(Validate.Email, {failureMessage: ' '});
		email.add(Validate.Length, { minimum: 10, maximum: 40 } );
</script>

<script type="text/javascript">

$(function() {
	$("#contactform").submit(function(){
		
		nom = $(this).find("input[name=nom]").val();
		prenom = $(this).find("input[name=prenom]").val();
		tel = $(this).find("input[name=tel]").val();
		email = $(this).find("input[name=email]").val();
		message = $(this).find("textarea[name=message]").val();
		spam = $(this).find("input[name=spam]").val();
		$.post("formailContact.php", {nom:nom, prenom:prenom, tel:tel, email:email, message:message, name:spam}, function(data) {
			$("#ajax-loader").hide();
			if (data=="ok") {
				$("#contactform").fadeOut("fast",function() {
		$('#ajax-loader').fadeIn("fast",function() {
						$('#ajax-loader').fadeOut("fast",function() {
						$("#resultatAjax").empty().hide().append("Votre e-mail a bien été envoyé").slideDown("fast", function() {
								$(".erreur").empty().append("").delay("fast", function() {
								$("#nom, #prenom, #tel, #email, #message").val("").delay(1000, function() {
								$("#resultatAjax").delay(2000).fadeOut("fast", function() {	
								$("#contactform").fadeIn("slow");											
																													  });
																													 });
																													 });
								 });
						});
						});
		});
				
			}
			else {
				$(".erreur").empty().append("Veuillez remplir tous les champs");
			}
		});
		return false;
	});
});
					</script>
                    
                    

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30040630-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>