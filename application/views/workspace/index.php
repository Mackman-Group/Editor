<ul>
<?php foreach ($contents as $file): ?>
<li>
  <?php echo $file; ?>
</li>  
<?php endforeach ?>
</ul>

<div id="editor">
  
</div>

<script src="<?php echo base_url(); ?>ace_editor/src/ace.js" data-ace-base="<?php echo base_url(); ?>ace_editor/src"></script>
<script type="text/javascript" charset="utf-8">
  var editor = ace.edit("editor");
  editor.setTheme("ace/theme/monokai");
  editor.getSession().setMode("ace/mode/php");
  editor.setValue("<?php echo $contents[2]; ?>");
</script>

<style>
#editor { 
    position: relative;
    width: 100%;
    height: 400px;
}
</style>