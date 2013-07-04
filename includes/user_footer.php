    </div>
    <div id="footer">Copyright © 2012 - <?php echo date("Y", time()); ?> <a href="bitsoftweb.com"> BITsoftWeb </a></div>
  </body>
</html>
<?php if(isset($database)) { $database->close_connection(); } ?>