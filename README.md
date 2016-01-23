# office503
Gsm Office Tools/ GSM Office Modules / template Office503

/* change history
 * 20160121 initial version template Office503 release 1.0.0
 */
 voor de laatse informatie over Gsm Office Tools/ GSM Office Modules / check the README.md van die modules

Office503 template
====================
Functionality

this is a template using twig as well as soms jave modules 
it adapts itself to the width of the screen
5 screenlayouts:
- full 4 section (content 1,3,4 and 5) layout with additional header( with logo, headr, 1400x 650 illustrtions with overlay= content 0), and footer
- 2 section template (content 1 and 2) with side column on the left
- 2 section template (content 1 and 2) with side columnon the right
- 1 section template filling the screen
- 1 section template with centered data

the header title as well as main parts of the footer are defined in the index page of the template
the layout for each page is defined in the index page of the template
the template is multilingual all screens have the same 4 footer 
website settings as well as the language droplt are used to control the multilingual functionality
the template with the assets are prepared for a contact us page referenced in the footer as well as a link to the site owner (edit the link in the index page).
 
preconditions for proper functioning
- Twigg functionality (available in 2.1.0)
- simplepagehead functionality (to be installed)
- the droplet Gsm_language to prevent error messages in the multilingual implementation
- the droplet Gsm_loc to have the illustrations assets included in the template directory

Setion 0 contains the data and overlay of multiple illustrations
========= begin of sample code 
<div class="slider-cycle" style="width: 100%; height: 650px;">
  // first illustration
  <div class="slides displayblock" style="position: absolute; top: 0px; left: 0px; display: block; z-index: 3; opacity: 1; width: 100%;">
    <figure><img src="[[Gsm_loc]]/img/ill20_L650.jpg" alt="Archief" /></figure> // illustration resolutio 1400x650 and alt name
    <div class="entry-container">
      <div class="entry-description-container">
        <div class="slider-title-head">
          <h3 class="entry-title"><a title="Archief" href="/page/archief.php">Archief</a></h3>  // title, link and text to be displayed
        </div>
        <div class="entry-content">
          <p>Deze website bevat een Document Archief voor de leden</p>  //text to be displayed
        </div>
      </div>
      <div class="clearfix"> </div>
      <a class="slider-read-more-button" title="Archief" href="/page/archief.php">naar het archief</a> // title, link and text to be displayed
    </div>
  </div>
  // second illustration
  <div class="slides displaynone" style="position: absolute; top: 0px; left: 0px; display: none; z-index: 2; width: 100%; opacity: 0;">
    <figure><img src="[[Gsm_loc]]/img/ill5_L650.jpg" alt="Doelstelling" /></figure>
    <div class="entry-container">
      <div class="entry-description-container">
        <div class="slider-title-head">
          <h3 class="entry-title"><a title="Doelstelling" href="#DOEL">Doelstelling</a></h3>
        </div>
        <div class="entry-content">
          <p>De doelstelling van de cooperatie is het behartigen van de belangen van zijn leden.</p>
        </div>
      </div>
      <div class="clearfix"> </div>
      <a class="slider-read-more-button" title="Doelstelling" href="#DOEL">Doelstelling</a>
	</div>
  </div>
  // third illustration
  <div class="slides displaynone" style="position: absolute; top: 0px; left: 0px; display: none; z-index: 2; width: 100%; opacity: 0;">
    <figure><img src="[[Gsm_loc]]/img/ill2_L650.jpg" alt="Gebruikers" /></figure>
    <div class="entry-container">
      <div class="entry-description-container">
        <div class="slider-title-head">
          <h3 class="entry-title"><a title="Gebruikers" href="#KLANT">Gebruikers</a></h3>
        </div>
      <div class="entry-content">
        <p>Hoe meer gebruikers hoe beter. Help mee in Uw eigen belang.</p>
      </div>
    </div>
    <div class="clearfix"> </div>
    <a class="slider-read-more-button" title="Gebruikers" href="#KLANT">meer gebruikers</a></div>
  </div>
</div>
======== end of sample code

De template suggest een contact form op een van de pagina's. De form module is daarvoor geschikt.

Er is testmateriaal beschikbaar om de layout te beoordelen zie de testpages 2.0
deze bevat: 
root: files die in de rootdirectory en een outof service mededeling geven
office 503: met test images die bij de template images opgeslaan moeten worden
media: extensie van de media directory

Een partij html die manuaal in een page section geladen  moeten worden (als bron) 

enkele droplets worden geeist by het gebruik
testsection_images vraagt om de droplets 
Gsm_mediadocs
Gsm_text2image
Gsm_pdf
Gsm_loc
Gsm_map

testsection input geen eisen

testsection side vraagt om de droplet
Lorem

Testsection standard vraagt om de droplet
Lorem

GSM Office Tools 
====================
Functionality
Basic functionality
- application settings
- backup of appliaction databse tables to .csv files
- restore of csv files to database tables
- information on logged in visitors

the install package will install the initial settings 

Gsm Office toold
====================

an install package without any functionality
