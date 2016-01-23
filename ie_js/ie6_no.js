/*
   ie6update.js
   Copyright (c) 2009 joonis new media
   Author: Thimo Kraemer <thimo.kraemer@joonis.de>
   Translations based on http://ie6.forteller.net
*/
(function() {

var i18n = {
	en: ['You are using an outdated version of Internet Explorer!',
		'To get the best possible experience using websites, please upgrade your web browser to a newer version. For further details contact your system administrator or simply install one of the following free programs:'],
	de: ['Sie verwenden eine veraltete Version des Internet Explorers!',
		'Um Internetseiten uneingeschr&auml;nkt, sicher und fehlerfrei nutzen zu k&ouml;nnen, aktualisieren Sie bitte Ihren Browser. Wenden Sie sich hierzu an Ihren Systemadministrator oder installieren Sie jetzt kostenlos eines der folgenden Programme:'],
	sv: ['Du har en gammal version av webbläsaren Internet Explorer!',
		'För att få en bättre och säkrare upplevelse på nätet rekommenderar vi att du hämtar en nyare version. Uppgraderingen är kostnadsfri. Sitter du på jobb och inte har kontroll över din dator själv bör du kontakta din IT-ansvarige. Vi kan också varmt rekommendera dig att prova någon av följade alternativa webbläsare:'],
	no: ['Tips fra oss: Du har en eldre versjon av nettleseren Internet Explorer!',
		'For å få en best mulig opplevelse av å bruke våre nettsider, kan du gratis hente en nyere versjon. Bruker du en jobb-PC bør du kontakte IT-ansvarlig.'],
	nl: ['Weet u dat u met een verouderde browser werkt?',
		'Om deze website - en de rest van het Internet- op de best mogelijke manier te ervaren raden we u aan om over te stappen op een nieuwere versie. Overstappen is gratis. Als u deze boodschap op uw werk ziet, neem dan contact op met uw systeembeheerder. Er zij ook alternatieven:'],
	es: ['&iquest;Sab&iacute;as que tu navegador no est&aacute; actualizado?',
		'Para obtener la mejor experiencia posible utilizando nuestra p&aacute;gina web te recomendamos que actualices tu navegador a una versi&oacute;n m&aacute;s reciente. La actualizaci&oacute;n es gratuita. Si est&aacute;s utilizando un equipo en el trabajo solicita la actualizacion a tu Administrador de Sistemas. Si deseas, tambi&eacute;n puede probar otros populares navegadores de Internet como:'],
	fi: ['Käytät Internet Explorerin vanhaa versiota!',
		'Sinun kannattaa päivittää selaimesi uudempaan versioon, jotta saisit parhaan mahdollisen käyttökokemuksen näiltä sivuilta. Voit käyttää myös muita suosittuja selaimia, kuten:'],
	fr: ['Savez-vous que votre navigateur est obsolète?',
		'Pour naviguer de la manière la plus satisfaisante sur notre site, nous recommandons que vous procédiez à une mise à jour de votre navigateur. La mise à jour est gratuite. Si vous utilisez un PC au travail, veuillez contacter votre service informatique. Si vous le souhaitez, vous pouvez aussi essayer d\'autres navigateurs Web populaires comme par exemple:'],
	pt: ['Você sabia que seu browser está desatualizado?',
		'Para obter a melhor experiência possível com o nosso site, recomendamos que você atualize o seu navegador para uma versão mais recente. A atualização é gratuita. Se você estiver usando um PC no seu trabalho você deve contactar seu IT administrador. Se você quiser também, você pode tentar alguns outros browsers populares de Internet como:'],
	it: ['Lo sai che il tuo browser non &egrave; aggiornato?',
		'Per ottenere la migliore esperienza possibile su questo sito web ti consigliamo di aggiornare il browser ad una versione pi&ugrave; recente. L\'aggiornamento &egrave; gratuito. Se stai utlizzando il PC al lavoro devi chiedere all\'amministratore di rete. Se vuoi puoi provare anche qualche altro popolare browser Internet come:'],
	lt: ['Ar žinai, kad naudoji pasenusia; naršykle;?',
		'Ji gali iškraipyti lankomus puslapius, gali neveikti kai kurios svetainiu; funkcijos. Be to, naudojant pasenusia; naršykle; žymiai padide.ja rizika tapti virusu; ir piktavališku; interneto svetainiu; auka. Atnaujinimas nieko nekainuoja. Darbe tai gali padaryti kompiuteriniu; sistemu; administratorius. Taip pat siu-lome išbandyti puikias Internet Explorer alternatyvas:'],
	da: ['Du bruger en ældre version af browseren Internet Explorer',
		'For at få den bedst mulige oplevelse med at bruge websider, anbefales det at du opgraderer til nyeste version. Hvis du bruger en arbejds-pc, bør du kontakte den it-ansvarlige. Alternativt kan du installere en alternativ browser:'],
	oc: ['Sabètz que vòstre navegador es obsolèt?',
		'Per véser melhor nòstre site, vos aconselham de ne cambiar. La mesa a jorn es a res-non-còst. Se fasètz servir l\'ordinator al trabalh, contactatz lo servici informatic. Podètz tanben ensajar d\'autres navegadors coma:']
};

var appVer = navigator.appVersion.match(/MSIE (\d\.\d)/);
if (!appVer) return;
appVer = appVer[1];
var winVer = navigator.appVersion.match(/NT (\d\.\d)/);
winVer = winVer ? winVer[1] : 0;
var script = document.scripts[document.scripts.length - 1].src;
var path = script.slice(0, script.lastIndexOf('/') + 1);

document.write('<style type="text/css"> '
	+ '#ie6msgbox { '
	+ ' font-family: Tahoma,Verdana,Arial,Helvetica,Sans-serif,Sans; '
	+ ' font-size: 8pt; '
	+ ' font-weight: normal; '
	+ ' line-height: normal; '
	+ ' text-align: left; '
	+ ' color: #000; '
	+ ' width: auto; '
	+ ' margin: 0; '
	+ ' padding: 4px 4px 4px 25px; '
	+ ' border: none; '
	+ ' border-bottom: 2px solid #666; '
	+ ' background: #ffffe1 url(' + path + 'info.gif) 4px 4px no-repeat; '
	+ '} '
	+ '#ie6msgbox b { '
	+ ' color: #900; '
	+ '} '
	+ '#ie6msgbox a, '
	+ '#ie6msgbox a:link, '
	+ '#ie6msgbox a:visited, '
	+ '#ie6msgbox a:hover, '
	+ '#ie6msgbox a:active { '
	+ ' color: #009; '
	+ ' font-weight: bold; '
	+ ' text-decoration: none; '
	+ ' border: none; '
	+ ' background-color: transparent; '
	+ '} '
	+ '#ie6msgbox a:hover { '
	+ ' text-decoration: underline; '
	+ '} '
	+ '@media print { #ie6msgbox { display: none; } } '
	+ '</style> ');

function showMsgBox() {
	var lang = navigator.browserLanguage.substr(0, 2);
	if (!i18n[lang]) lang = 'en';
	var body = document.body;
	var div = document.createElement('div');
	div.id = 'ie6msgbox';
	div.innerHTML = ''
		+ '<b>' + i18n[lang][0] + '</b><br />' + i18n[lang][1] + '<br />';
	var appId;
/*
	if (appVer < 7) {
		appId = {
			'5.1': '9AE91EBE-3385-447C-8A30-081805B2F90B',
			'5.2': 'BC327D94-4F2C-481F-8595-FA5B90B11BFC'};
		if (appId[winVer])
			div.innerHTML += '<a href="http://www.microsoft.com/downloads/details.aspx?FamilyID=' 
				+ appId[winVer] + '&DisplayLang=' + lang + '" target="_blank">Internet Explorer 7</a> | ';
	}
*/
	if (appVer < 8) {
		appId = {
			'5.1': '341C2AD5-8C3D-4347-8C03-08CDECD8852B',
			'5.2': '351B4886-E538-43BF-94B9-CD0CEA34DCDC',
			'6.0': '79154FB4-C610-4A1E-811D-DFE0F1DD84D1'};
		if (appId[winVer])
			div.innerHTML += '<a href="http://www.microsoft.com/downloads/details.aspx?FamilyID='
				+ appId[winVer] + '&DisplayLang=' + lang + '" target="_blank">Internet Explorer 8</a> | ';
	}
	div.innerHTML += ''
		+ '<a href="http://www.mozilla.com/firefox" target="_blank">Firefox</a> | '
		+ '<a href="http://' + ((lang == 'de') ? lang : 'www') + '.opera.com/download" target="_blank">Opera</a> | '
		+ '<a href="http://www.google.com/chrome" target="_blank">Google Chrome</a> | '
		+ '<a href="http://www.apple.com' + ((lang == 'en') ? '' : '/'+lang) + '/safari/download" target="_blank">Safari</a> ';
	
	div.style.marginBottom = body.style.marginTop;
	body.style.marginTop = '0';
	body.style.marginLeft = 'auto';
	body.style.marginRight = 'auto';
	body.style.paddingTop = '0';
	body.style.paddingLeft = '0';
	body.style.paddingRight = '0';
	
	body.insertBefore(div, body.firstChild);
}
if (appVer <= 6) window.attachEvent('onload', showMsgBox);

})();
