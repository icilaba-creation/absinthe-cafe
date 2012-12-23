<h5>Nous aimons</h5>
<p class="txt-adresse"><a href="http://www.facebook.com/restaurantAbsintheCafe" target="_blank">Rejoignez nous sur facebook !</a></p>
<div id="sponsors-conteneur">
<div id="sponsors1" class="page-sponsors">
<?php

// Each sponsor is an element of the $sponsors array:

$sponsors = array(
	array('facebook','Rejoignez nous sur Facebook','http://www.facebook.com/restaurantAbsintheCafe','voir le site'),
	array('pudlo','Guide Pudlo Bretagne 2010','http://www.gillespudlowski.com/','voir le site'),
	array('escalier','L\'Escalier - Le Club lounge bar de Saint-Malo','http://www.escalier.fr/','voir le site'),
	array('109-stmalo','Bar Pub Le 109 club','http://www.le-109.com/','voir le site'),
	array('','','http://www.facebook.com/restaurantAbsintheCafe','voir le site'),
	array('','','http://www.gillespudlowski.com/','voir le site'),
	array('','','http://www.escalier.fr/','voir le site'),
	array('','','http://www.le-109.com/','voir le site'),
	array('','','http://www.saint-malo-tourisme.com/','voir le site')
);


// Randomizing the order of sponsors:

shuffle($sponsors);

?>



<div class="main">

	<div class="sponsorListHolder">

		
        <?php
			
			// Looping through the array:
			
			foreach($sponsors as $company)
			{
				echo'
				<div class="sponsor" title="Click to flip">
					<div class="sponsorFlip">
						<img src="css/img/sponsors/'.$company[0].'.png" alt="En savoir plus '.$company[0].'" width="80" height="80" />
					</div>
					
					<div class="sponsorData">
						<div class="sponsorDescription">
							'.$company[1].'
						</div>
						<div class="sponsorURL">
							<a href="'.$company[2].'" target="_blank">'.$company[3].'</a>
						</div>
					</div>
				</div>
				
				';
			}
		
		?>


        
        
    	<div class="clear"></div>
    </div>

</div>
</div>

<div id="sponsors2" class="page-sponsors">
<?php

// Each sponsor is an element of the $sponsors array:

$sponsors = array(
	array('facebook','','http://www.facebook.com/restaurantAbsintheCafe','voir le site'),
	array('pudlo','','http://www.gillespudlowski.com/','voir le site'),
	array('escalier','','http://www.escalier.fr/','voir le site'),
	array('109-stmalo','','http://www.le-109.com/','voir le site')
);


// Randomizing the order of sponsors:

shuffle($sponsors);

?>



<div class="main">

	<div class="sponsorListHolder">

		
        <?php
			
			// Looping through the array:
			
			foreach($sponsors as $company)
			{
				echo'
				<div class="sponsor" title="Click to flip">
					<div class="sponsorFlip">
						<img src="css/img/sponsors/'.$company[0].'.png" alt="En savoir plus '.$company[0].'" width="80" height="80" />
					</div>
					
					<div class="sponsorData">
						<div class="sponsorDescription">
							'.$company[1].'
						</div>
						<div class="sponsorURL">
							<a href="'.$company[2].'" target="_blank">'.$company[3].'</a>
						</div>
					</div>
				</div>
				
				';
			}
		
		?>


        
        
    	<div class="clear"></div>
    </div>

</div>
</div>

<div id="sponsors3" class="page-sponsors">
<?php

// Each sponsor is an element of the $sponsors array:

$sponsors = array(
	array('','','http://www.bar-labelleepoque.com/','voir le site'),
	array('','','http://www.restaurant-lentredeuxverres.com/','voir le site'),
	array('quai-des-crepes','','http://www.quai-des-crepes.com/','voir le site'),
	array('l-internaute','','http://www.linternaute.com/restaurant/restaurant/97995/restaurant-l-absinthe-cafe.shtml','voir le site'),
	array('ville-st-malo','','http://www.ville-saint-malo.fr/','voir le site'),
	array('reveillons-st-malo','','http://www.reveillons-saint-malo.fr/','voir le site'),
	array('quand-les-fleurs-s-en-melent','','http://www.quandlesfleurssemmelent.fr/','voir le site'),
	array('beurre-bordier','','http://www.lebeurrebordier.com/','voir le site')
);


// Randomizing the order of sponsors:

shuffle($sponsors);

?>



<div class="main">

	<div class="sponsorListHolder">

		
        <?php
			
			// Looping through the array:
			
			foreach($sponsors as $company)
			{
				echo'
				<div class="sponsor" title="Click to flip">
					<div class="sponsorFlip">
						<img src="css/img/sponsors/'.$company[0].'.png" alt="En savoir plus '.$company[0].'" width="80" height="80" />
					</div>
					
					<div class="sponsorData">
						<div class="sponsorDescription">
							'.$company[1].'
						</div>
						<div class="sponsorURL">
							<a href="'.$company[2].'" target="_blank">'.$company[3].'</a>
						</div>
					</div>
				</div>
				
				';
			}
		
		?>

        
        
    	<div class="clear"></div>
    </div>

</div>
</div>
</div>
<div id="sponsors-list">
        <ul>
            <li class="lien-sponsors"><a href="#sponsors1" class="lien selection">1</a></li>
            <li class="lien-sponsors"><a href="#sponsors2" class="lien">2</a></li>
            <li class="lien-sponsors"><a href="#sponsors3" class="lien">3</a></li>
            <li class="lien-sponsors"><a href="#sponsors4" class="lien">3</a></li>
            <li class="lien-sponsors"><a href="#sponsors5" class="lien">3</a></li>
            <li class="lien-sponsors"><a href="#sponsors6" class="lien">3</a></li>
            
        </ul>
</div>
<div class="clear"></div> 

