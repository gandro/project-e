<?php if($error = $this->encode('error')): ?>
<strong>Error:</strong> <?php echo($error) ?>
<?php else: ?>
<fieldset>
	<p>
		<label for="file">Uploaded File (<?php echo $this->get('filesize', 0); ?>)</label>
		<input id="url" size="50" onclick="this.focus();this.select();" type="text" value="<?php echo $this->get('url'); ?>" /> 
	</p>
</fieldset>
<?php endif; ?>
