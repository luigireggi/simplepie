<?php

$data = <<<EOD
<feed xmlns="http://www.w3.org/2005/Atom">
	<entry>
		<source>
			<title>Source Title</title>
		</source>
		<title>Item Title</title>
	</entry>
</feed>
EOD;

$expected = 'Item Title';

?>