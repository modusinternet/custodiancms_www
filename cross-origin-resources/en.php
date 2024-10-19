<?php
header("Access-Control-Allow-Origin: *");

$txt01 = "Custodian CMS  For website developers, not WYSIWYGers";

$tab01Title = "Welcome";
$tab01txt01 = <<<EOF
<h1>Welcome to Custodian CMS (CCMS) Download</h1>
<p>This page is designed to test your server environment and download the CCMS templates. Once this step is done you can <span class="oj">rename or remove</span> this file from your server and continue to set up your site but it is not absolutely necessary.</p>
<p>For more information visit: <a href="https://custodiancms.org" class="oj" target="_blank">https://custodiancms.org</a></p>
EOF;

$tab02Title = "Test &amp; Install";
$tab02txt01 = <<<EOF
<h1>Test</h1>
<p>Below are some preliminary tests to confirm CustodianCMS can be automatically installed on your server.</p>
EOF;
$tab02txt02 = <<<EOF
<h1>Install</h1>
<p>This part of the process simply downloads and installs the CCMS templates directly from GitHub, nothing more. If you prefer to manually download and extract these templates yourself they can be found on our GitHub project page <a class="oj" href="https://github.com/modusinternet/custodian-cms/" target="_blank">here</a>.  Further testing of your server's environment and template/database configuration takes place in step 2. For now, just read and confirm the download settings before proceeding.<br>
Note: If necessary, all settings can be customized by editing the 'define' variables found on this template using a simple text editor.</p>
EOF;

$tab03Title = "Copyright";
$tab03txt01 = <<<EOF
<h1>The MIT License (MIT)</h1>
<p>Copyright &copy; <?php echo date("Y")?> assigned by Vincent Hallberg of <a class="oj" href="https://custodiancms.org" target="_blank">custodiancms.org</a> and <a class='oj' href="https://modusinternet.com" target="_blank">modusinternet.com</a></p>
<p>Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:</p>
<p>The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.</p>
<p>THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.</p>
EOF;

$tab04Title = "Language";
$tab04txt01 = <<<EOF
<h1>Language</h1>
<p><button class="oj" onclick="setLng('https://custodiancms.org/cross-origin-resources/en.php',lngXhr);" style="cursor:pointer">English</button><br><br>
<button onclick="setLng('https://custodiancms.org/cross-origin-resources/es.php',lngXhr,'es');" style="cursor:pointer">Español (Spanish)</button><br><br>
<button onclick="setLng('https://custodiancms.org/cross-origin-resources/fr.php',lngXhr,'fr');" style="cursor:pointer">Français (French)</button></p>
EOF;

$date = date("Y");
$footer = <<<EOF
<p><a class="oj" onclick="document.getElementById('tab03Title')?.click();" href="#">Copyright</a> &copy; $date assigned by Vincent Hallberg of <a class="oj" href="https://custodiancms.org" target="_blank">custodiancms.org</a> and <a class="oj" href="https://modusinternet.com" target="_blank">modusinternet.com</a>.</p>
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
