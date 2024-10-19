<?php
header("Access-Control-Allow-Origin: *");

$txt01 = "CMS de custodia Para desarrolladores de sitios web, no WYSIWYGers";

$tab01Title = "Bienvenido";
$tab01txt01 = <<<EOF
<h1>Bienvenido a Custodian CMS (CCMS) Descargar</h1>
<p>Esta página está diseñada para probar el entorno de su servidor y descargar las plantillas CCMS. Una vez realizado este paso, puede <span class="oj"> renombrar o eliminar </span> este archivo de su servidor y continuar configurando su sitio, pero no es absolutamente necesario.</p>
<p>Para más información visite: <a href="https://custodiancms.org" class="oj" target="_blank">https://custodiancms.org</a></p>
EOF;

$tab02Title = "Prueba &amp; Instalar en pc";
$tab02txt01 = <<<EOF
<h1>Prueba</h1>
<p>A continuación se muestran algunas pruebas preliminares para confirmar que CustodianCMS se puede instalar automáticamente en su servidor.</p>
EOF;
$tab02txt02 = <<<EOF
<h1>Instalar en pc</h1>
<p>Esta parte del proceso simplemente descarga e instala las plantillas CCMS directamente desde GitHub, nada más. Si prefiere descargar y extraer manualmente estas plantillas usted mismo, puede encontrarlas en nuestra página del proyecto GitHub <a class="oj" href="https://github.com/modusinternet/custodian-cms/" target="_blank">aquí</a>. En el paso 2 se realizan más pruebas del entorno de su servidor y la configuración de la plantilla/base de datos. Por ahora, solo lea y confirme la configuración de descarga antes de continuar.<br>
Nota: Si es necesario, todas las configuraciones se pueden personalizar editando las variables 'define' que se encuentran en esta plantilla usando un editor de texto simple.</p>
EOF;

$tab03Title = "Derechos de autor";
$tab03txt01 = <<<EOF
<h1>La licencia MIT (MIT)</h1>
<p>Copyright &copy; <?php echo date("Y")?> asignado por Vincent Hallberg de <a class="oj" href="https://custodiancms.org" target="_blank">custodiancms.org</a> y <a class='oj' href="https://modusinternet.com "target="_blank">modusinternet.com</a></p>
<p>Por la presente se concede permiso, sin cargo, a cualquier persona que obtenga una copia de este software y los archivos de documentación asociados (el "Software"), para utilizar el Software sin restricciones, incluidos, entre otros, los derechos de uso, copia, modificar, fusionar, publicar, distribuir, sublicenciar y / o vender copias del Software, y permitir que las personas a las que se les proporcione el Software lo hagan, sujeto a las siguientes condiciones:</p>
<p>El aviso de derechos de autor anterior y este aviso de permiso se incluirán en todas las copias o partes sustanciales del Software.</p>
<p>EL SOFTWARE SE PROPORCIONA "TAL CUAL", SIN GARANTÍA DE NINGÚN TIPO, EXPRESA O IMPLÍCITA, INCLUYENDO PERO NO LIMITADO A LAS GARANTÍAS DE COMERCIABILIDAD, ADECUACIÓN PARA UN PROPÓSITO PARTICULAR Y NO INFRACCIÓN. EN NINGÚN CASO LOS AUTORES O TITULARES DE LOS DERECHOS DE AUTOR SERÁN RESPONSABLES DE CUALQUIER RECLAMO, DAÑOS U OTRA RESPONSABILIDAD, YA SEA EN UNA ACCIÓN DE CONTRATO, AGRAVIO O DE OTRO MODO, QUE SURJA DE, FUERA DE O EN RELACIÓN CON EL SOFTWARE O EL USO U OTRAS NEGOCIACIONES SOFTWARE.</p>
EOF;

$tab04Title = "Idioma";
$tab04txt01 = <<<EOF
<h1>Idioma</h1>
<p><button onclick="setLng('https://custodiancms.org/cross-origin-resources/en.php',lngXhr,'en');" style="cursor:pointer">English</button><br><br>
<button class="oj" onclick="setLng('https://custodiancms.org/cross-origin-resources/es.php',lngXhr);" style="cursor:pointer">Español (Spanish)</button><br><br>
<button onclick="setLng('https://custodiancms.org/cross-origin-resources/fr.php',lngXhr,'fr');" style="cursor:pointer">Français (French)</button></p>
EOF;

$date = date("Y");
$footer = <<<EOF
<p><a class="oj" onclick="document.getElementById('tab03Title')?.click();" href="#">Derechos de autor</a> &copy; $date asignado por Vincent Hallberg de <a class="oj" href="https://custodiancms.org" target="_blank">custodiancms.org</a> y <a class="oj" href="https://modusinternet.com" target="_blank">modusinternet.com</a>.</p>
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
