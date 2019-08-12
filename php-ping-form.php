<html>
<head>
	<title>Simple Ping Test</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

    <?php if (isset($_GET['form_submitted'])): ?>
		<h2>Simple Ping Engine</h2>

                   <form action="php-ping-form.php" method="GET">

                        Search Term:
                        <input type="text" name="search_term">
                        
                            
			<input type="hidden" name="form_submitted" value="1" />

                       <input type="submit" value="Ping!">
                       
                  </form>
        <h2>Results For <?php echo $_GET['search_term']; ?> </h2>
        <?php 
			$output = shell_exec('ping -c 4 '.$_GET['search_term']); 
  
			// Display the list of all file 
			// and directory 
			echo "<pre>$output</pre>"; 
         ?>

     <?php else: ?>

                   <h2>Simple Ping Engine</h2>

                   <form action="php-ping-form.php" method="GET">

                        Search Term:
                        <input type="text" name="search_term">
                        
                            
			<input type="hidden" name="form_submitted" value="1" />

                       <input type="submit" value="Ping!">
                       
                  </form>
      <?php endif; ?>
</body>
</html>