<!DOCTYPE html>
<html lang="eng">
	<head>
        <?php echo $this->template("includes/agent-recruitment/metadata.php")?>     
    </head>
    <body>
        <div class="header">
	        <?php echo $this->template("includes/agent-recruitment/header.php") ?>
        </div><!--/ .header -->
        <?php echo $this->layout()->content; ?>
        <?php echo $this->template("includes/agent-recruitment/footer.php")?>
    </body>
</html>	