<?php if ( $sites ): ?>
<?php foreach($sites as $site): ?>
  <h4><?php echo $site->name; ?></h4>
<?php endforeach; ?>
<?php else: ?>
  <p>There are no site details stored.</p>
<?php endif; ?>