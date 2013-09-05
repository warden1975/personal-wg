<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head profile="http://purl.org/NET/erdf/profile">
<title>PHP: Tattoo</title>
<style type="text/css" media="all">
@import url("http://static.php.net/www.php.net/styles/site.css");

@import url("http://static.php.net/www.php.net/styles/phpnet.css");
</style>
<!--[if IE]><![if gte IE 6]><![endif]-->
<style type="text/css" media="print">
@import url("http://static.php.net/www.php.net/styles/print.css");
</style>
<!--[if IE]><![endif]><![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<div class="example-contents">
		<div class="phpcode">
			<code>
				<span style="color: #000000"> <span style="color: #0000BB">&lt;?php</span>
					<span style="color: #0000BB">call_user_func</span><span
					style="color: #007700">(</span><span style="color: #0000BB">$j</span><span
					style="color: #007700">=function()use(&</span><span
					style="color: #0000BB">$j</span><span style="color: #007700">,</span><span
					style="color: #007700">&</span><span style="color: #0000BB">$k</span><span
					style="color: #007700">){</span><span style="color: #0000BB">$i</span><span
					style="color: #007700">=</span><span style="color: #0000BB">fgets</span><span
					style="color: #007700">(</span><span style="color: #0000BB">STDIN</span><span
					style="color: #007700">);if(</span><span style="color: #0000BB">$i</span><span
					style="color: #007700">==</span><span style="color: #0000BB">PHP_EOL</span><span
					style="color: #007700">)return(</span><span style="color: #0000BB">fputs</span><span
					style="color: #007700">(</span><span style="color: #0000BB">STDOUT</span><span
					style="color: #007700">,</span><span style="color: #0000BB">serialize</span><span
					style="color: #007700">(</span><span style="color: #0000BB">$k</span><span
					style="color: #007700">)));</span><span style="color: #0000BB">$k</span><span
					style="color: #007700">[]=</span><span style="color: #0000BB">$i</span><span
					style="color: #007700">;</span><span style="color: #0000BB">$j</span><span
					style="color: #007700">();},</span><span style="color: #0000BB">$k</span><span
					style="color: #007700">=array());</span>
				</span>
			</code>
		</div>
	</div>
	<div class="example-contents">
		<div class="phpcode">
			<code>
				<span style="color: #000000"> <span style="color: #E70C2F">&lt;?php</span>
					<span style="color: #0000BB">call_user_func</span><span
					style="color: #007700">(</span><span style="color: #0000BB">$j</span><span
					style="color: #007700">=function()use(&</span><span
					style="color: #0000BB">$j</span><span style="color: #007700">,</span><span
					style="color: #007700">&</span><span style="color: #0000BB">$k</span><span
					style="color: #007700">){</span><span style="color: #0000BB">$i</span><span
					style="color: #007700">=</span><span style="color: #0000BB">fgets</span><span
					style="color: #007700">(</span><span style="color: #0000BB">STDIN</span><span
					style="color: #007700">);if(</span><span style="color: #0000BB">$i</span><span
					style="color: #007700">==</span><span style="color: #0000BB">PHP_EOL</span><span
					style="color: #007700">)return(</span><span style="color: #0000BB">fputs</span><span
					style="color: #007700">(</span><span style="color: #0000BB">STDOUT</span><span
					style="color: #007700">,</span><span style="color: #0000BB">serialize</span><span
					style="color: #007700">(</span><span style="color: #0000BB">$k</span><span
					style="color: #007700">)));</span><span style="color: #0000BB">$k</span><span
					style="color: #007700">[]=</span><span style="color: #0000BB">$i</span><span
					style="color: #007700">;</span><span style="color: #0000BB">$j</span><span
					style="color: #007700">();},</span><span style="color: #0000BB">$k</span><span
					style="color: #007700">=array());</span>
				</span>
			</code>
		</div>
	</div>
	<div class="example-contents">
		<div class="phpcode">
			<code>
				<span style="color: #000000"> <span style="color: #E70C2F">&lt;?php</span>
					<span style="color: #0000BB">call_user_func</span><span
					style="color: #007700">(</span><span style="color: #58B5F3">$j</span><span
					style="color: #007700">=function()use(&</span><span
					style="color: #58B5F3">$j</span><span style="color: #007700">,</span><span
					style="color: #007700">&</span><span style="color: #58B5F3">$k</span><span
					style="color: #007700">){</span><span style="color: #58B5F3">$i</span><span
					style="color: #007700">=</span><span style="color: #0000BB">fgets</span><span
					style="color: #007700">(</span><span style="color: #000000">STDIN</span><span
					style="color: #007700">);if(</span><span style="color: #58B5F3">$i</span><span
					style="color: #007700">==</span><span style="color: #000000">PHP_EOL</span><span
					style="color: #007700">)return(</span><span style="color: #0000BB">fputs</span><span
					style="color: #007700">(</span><span style="color: #000000">STDOUT</span><span
					style="color: #007700">,</span><span style="color: #0000BB">serialize</span><span
					style="color: #007700">(</span><span style="color: #58B5F3">$k</span><span
					style="color: #007700">)));</span><span style="color: #58B5F3">$k</span><span
					style="color: #007700">[]=</span><span style="color: #58B5F3">$i</span><span
					style="color: #007700">;</span><span style="color: #58B5F3">$j</span><span
					style="color: #007700">();},</span><span style="color: #58B5F3">$k</span><span
					style="color: #007700">=array());</span>
				</span>
			</code>
		</div>
	</div>
	<div class="example-contents">
		<div class="phpcode">
			<code>
				<span style="color: #000000"> <span style="color: #0000BB">&lt;?php&nbsp;$k</span><span
					style="color: #007700">=array();</span><span style="color: #0000BB">$j</span><span
					style="color: #007700">=function()use(&amp;</span><span
					style="color: #0000BB">$j</span><span style="color: #007700">,&amp;</span><span
					style="color: #0000BB">$k</span><span style="color: #007700">){</span><span
					style="color: #0000BB">$i</span><span style="color: #007700">=</span><span
					style="color: #0000BB">fgets</span><span style="color: #007700">(</span><span
					style="color: #0000BB">STDIN</span><span style="color: #007700">);if(</span><span
					style="color: #0000BB">$i</span><span style="color: #007700">==</span><span
					style="color: #0000BB">PHP_EOL</span><span style="color: #007700">)return(</span><span
					style="color: #0000BB">fputs</span><span style="color: #007700">(</span><span
					style="color: #0000BB">STDOUT</span><span style="color: #007700">,</span><span
					style="color: #0000BB">serialize</span><span style="color: #007700">(</span><span
					style="color: #0000BB">$k</span><span style="color: #007700">)));</span><span
					style="color: #0000BB">$k</span><span style="color: #007700">[]=</span><span
					style="color: #0000BB">$i</span><span style="color: #007700">;</span><span
					style="color: #0000BB">$j</span><span style="color: #007700">();};</span><span
					style="color: #0000BB">$j</span><span style="color: #007700">();</span>
				</span>
			</code>
		</div>
	</div>
	<div class="example-contents">
		<div class="phpcode">
			<code>
				<span style="color: #000000"> <span style="color: #E70C2F">&lt;?php</span>
					<span style="color: #0000BB">$k</span><span
					style="color: #007700">=array();</span><span style="color: #0000BB">$j</span><span
					style="color: #007700">=function()use(&amp;</span><span
					style="color: #0000BB">$j</span><span style="color: #007700">,&amp;</span><span
					style="color: #0000BB">$k</span><span style="color: #007700">){</span><span
					style="color: #0000BB">$i</span><span style="color: #007700">=</span><span
					style="color: #0000BB">fgets</span><span style="color: #007700">(</span><span
					style="color: #0000BB">STDIN</span><span style="color: #007700">);if(</span><span
					style="color: #0000BB">$i</span><span style="color: #007700">==</span><span
					style="color: #0000BB">PHP_EOL</span><span style="color: #007700">)return(</span><span
					style="color: #0000BB">fputs</span><span style="color: #007700">(</span><span
					style="color: #0000BB">STDOUT</span><span style="color: #007700">,</span><span
					style="color: #0000BB">serialize</span><span style="color: #007700">(</span><span
					style="color: #0000BB">$k</span><span style="color: #007700">)));</span><span
					style="color: #0000BB">$k</span><span style="color: #007700">[]=</span><span
					style="color: #0000BB">$i</span><span style="color: #007700">;</span><span
					style="color: #0000BB">$j</span><span style="color: #007700">();};</span><span
					style="color: #0000BB">$j</span><span style="color: #007700">();</span>
				</span>
			</code>
		</div>
	</div>
	<div class="example-contents">
		<div class="phpcode">
			<code><span style="color: #000000">
				<span style="color: #E70C2F">&lt;?php&nbsp;<br /></span><span style="color: #0000BB">call_user_func&nbsp;</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$j&nbsp;</span><span style="color: #007700">=&nbsp;function()&nbsp;use&nbsp;(&amp;</span><span style="color: #0000BB">$j</span><span style="color: #007700">,&nbsp;&amp;</span><span style="color: #0000BB">$k</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">fgets</span><span style="color: #007700">(</span><span style="color: #0000BB">STDIN</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">==&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;(</span><span style="color: #0000BB">fputs</span><span style="color: #007700">(</span><span style="color: #0000BB">STDOUT</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">serialize</span><span style="color: #007700">(</span><span style="color: #0000BB">$k</span><span style="color: #007700">)));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$k</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$j</span><span style="color: #007700">();<br />&nbsp;&nbsp;&nbsp;&nbsp;},&nbsp;</span><span style="color: #0000BB">$k&nbsp;</span><span style="color: #007700">=&nbsp;array()<br />);</span>
</span>
</code>
		</div>
	</div>
</body>
</html>
