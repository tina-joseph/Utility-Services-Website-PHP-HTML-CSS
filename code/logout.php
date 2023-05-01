<?php
session_start();
session_destroy();

sleep(1);
echo "<html><script>alert('Logging out...');

		   			window.location.href = 'Utility.html';</script></html>";

?>


