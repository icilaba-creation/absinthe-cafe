<h5>Contact</h5>
<p class="txt-adresse">1 rue de l&rsquo;Orme - 35400 Saint-Malo / Intra-Muros<br />
Horaires : ouvert tous les jours MIDI et SOIR, excepté le lundi et le mardi midi</p>
<!-- Horaires : 16h00 - 1h00  7jours/7 - T&eacute;l. 02 99 40 26 15</p> -->
<div id="ajax-loader"><img src="images/ajax-loader.gif" width="32" height="32" alt="loader" title="loader" align="middle" /></div> 
<div id="resultatAjax"></div>

<form method="post" id="contactform" action="#" >
 
    <div id="name-wrap" class="slider"> 
        <label for="nom">Nom</label> 
        <input type="text" id="nom" name="nom"/>
        <span id="errname"><!-- --></span> 
    </div> <!--/#name-wrap--> 
    
    <div id="prenom-wrap" class="slider"> 
        <label for="prenom">Pr&eacute;nom</label> 
        <input type="text" id="prenom" name="prenom"/>
        <span id="errprenom"><!-- --></span> 
    </div> <!--/#name-wrap-->
    
    <div id="tel-wrap"  class="slider"> 
        <label for="tel">Tél</label> 
        <input type="text" id="tel" name="tel"/>
        <span id="errtel"><!-- --></span> 
    </div> <!--/#email-wrap--> 
    
    <div id="email-wrap"  class="slider"> 
        <label for="email">E&ndash;mail</label> 
        <input type="text" id="email" name="email"/>
        <span id="erremail"><!-- --></span> 
    </div> <!--/#email-wrap--> 
    
    <div id="comment-wrap"  class="slider"> 
        <label for="message">Message</label> 
        <textarea cols="53" rows="6" id="message" name="message"></textarea> 
    </div> <!--/#comment-wrap--> 
    
    <div id="spam-wrap"> 
        <label for="spam">Confirmation</label> 
        <input type="text" id="spam" name="spam"/> 
    </div> <!--/#confirm-wrap-->
    
    <div id="submit-wrap">
    <input type="submit" id="btn" name="btn" value="Valider"/>
    </div> 
	<div class="erreur"></div>
</form>

