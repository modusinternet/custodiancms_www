<?php
header("Access-Control-Allow-Origin: *");

$txt01 = "CMS dépositaire Pour les développeurs de sites Web, pas les WYSIWYGers";

$tab01Title = "Bienvenu";
$tab01txt01 = <<<EOF
<h1>Bienvenue sur Custodian CMS (CCMS) Télécharger</h1>
<p>Cette page est conçue pour tester votre environnement de serveur et télécharger les modèles CCMS. Une fois cette étape effectuée vous pouvez <span class="oj">renommer ou supprimer</span> ce fichier de votre serveur et continuer à configurer votre site mais ce n'est pas absolument nécessaire.</p>
<p>Pour plus d'informations, visitez: <a href="https://custodiancms.org" class="oj" target="_blank">https://custodiancms.org</a></p>
EOF;

$tab02Title = "Test &amp; Installer";
$tab02txt01 = <<<EOF
<h1>Test</h1>
<p>Vous trouverez ci-dessous quelques tests préliminaires pour confirmer que CustodianCMS peut être automatiquement installé sur votre serveur.</p>
EOF;
$tab02txt02 = <<<EOF
<h1>Installer</h1>
<p>Cette partie du processus télécharge et installe simplement les modèles CCMS directement à partir de GitHub, rien de plus. Si vous préférez télécharger et extraire manuellement ces modèles vous-même, vous pouvez les trouver sur notre page de projet GitHub <a class="oj" href="https://github.com/modusinternet/custodian-cms/" target="_blank">ici</a>. Des tests supplémentaires de l'environnement de votre serveur et de la configuration du modèle/de la base de données ont lieu à l'étape 2. Pour l'instant, lisez et confirmez les paramètres de téléchargement avant de continuer.<br>
Remarque: si nécessaire, tous les paramètres peuvent être personnalisés en éditant les variables 'define' trouvées sur ce modèle à l'aide d'un simple éditeur de texte.</p>
EOF;

$tab03Title = "Droits d'auteur";
$tab03txt01 = <<<EOF
<h1>La licence MIT (MIT)</h1>
<p>Copyright &copy; <?php echo date("Y")?> attribué par Vincent Hallberg de <a class="oj" href="https://custodiancms.org" target="_blank">custodiancms.org</a> et <a class="oj" href="https://modusinternet.com" target="_ blank">modusinternet.com</a></p>
<p>L'autorisation est par la présente accordée, gratuitement, à toute personne obtenant une copie de ce logiciel et des fichiers de documentation associés (le "Logiciel"), de traiter le Logiciel sans restriction, y compris, sans limitation, les droits d'utilisation, de copie, modifier, fusionner, publier, distribuer, sous-licencier et/ou vendre des copies du Logiciel, et permettre aux personnes à qui le Logiciel est fourni de le faire, sous réserve des conditions suivantes:</p>
<p>L'avis de droit d'auteur ci-dessus et cet avis d'autorisation doivent être inclus dans toutes les copies ou parties substantielles du logiciel.</p>
<p>LE LOGICIEL EST FOURNI "EN L'ÉTAT", SANS GARANTIE D'AUCUNE SORTE, EXPRESSE OU IMPLICITE, Y COMPRIS MAIS SANS S'Y LIMITER LES GARANTIES DE QUALITÉ MARCHANDE, D'ADÉQUATION À UN USAGE PARTICULIER ET D'ABSENCE DE CONTREFAÇON. EN AUCUN CAS, LES AUTEURS OU LES TITULAIRES DES DROITS D'AUTEUR NE SERONT RESPONSABLES DE TOUTE RÉCLAMATION, DOMMAGE OU AUTRE RESPONSABILITÉ, QUE CE SOIT DANS UNE ACTION DE CONTRAT, DE TORT OU AUTRE, RÉSULTANT DE, HORS OU EN LIEN AVEC LE LOGICIEL OU L'UTILISATION OU AUTRES ACTIONS DANS LOGICIEL.</p>
EOF;

$tab04Title = "Langue";
$tab04txt01 = <<<EOF
<h1>Langue</h1>
<p><button onclick="setLng('https://custodiancms.org/cross-origin-resources/en.php',lngXhr,'en');" style="cursor:pointer">English</button><br><br>
<button onclick="setLng('https://custodiancms.org/cross-origin-resources/es.php',lngXhr,'es');" style="cursor:pointer">Español (Spanish)</button><br><br>
<button class="oj" onclick="setLng('https://custodiancms.org/cross-origin-resources/fr.php',lngXhr);" style="cursor:pointer">Français (French)</button></p>
EOF;

$date = date("Y");
$footer = <<<EOF
<p><a class="oj" onclick="document.getElementById('tab03Title')?.click();" href="#">Droits d'auteur</a> &copy; $date attribué par Vincent Hallberg de <a class="oj" href="https://custodiancms.org" target="_blank">custodiancms.org</a> et <a class="oj" href="https://modusinternet.com" target="_blank">modusinternet.com</a>.</p>
EOF;

$array = array(
	'txt01' => array(
		'title' => $txt01
	),
	'tab01Title' => array(
		'innerHTML' => $tab01Title
	),
	'tab01txt01' => array(
		'innerHTML' => $tab01txt01
	),
	'tab02Title' => array(
		'innerHTML' => $tab02Title
	),
	'tab02txt01' => array(
		'innerHTML' => $tab02txt01
	),
	'tab02txt02' => array(
		'innerHTML' => $tab02txt02
	),
	'tab03Title' => array(
		'innerHTML' => $tab03Title
	),
	'tab03txt01' => array(
		'innerHTML' => $tab03txt01
	),
	'tab04Title' => array(
		'innerHTML' => $tab04Title
	),
	'tab04txt01' => array(
		'innerHTML' => $tab04txt01
	),
	'footer' => array(
		'innerHTML' => $footer
	)
);

echo json_encode($array);
