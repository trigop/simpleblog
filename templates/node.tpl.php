<article<?php print $attributes; ?>>
  <?php //Imprimir la foto solo en la lista del nodo ?>
  <?php //print $user_picture; ?>
  <?php if ($title): ?>
  
  <?php if ($display_submitted): ?>
  <footer class="submitted grid-2">
    <?php if ($page): ?> 
      <span class='picture'><?php print $user_picture; ?> </span>
    <?php endif; ?> 
      <span class="author"><?php print t('By') .' '. $name; ?></span>
      <span class="date"><?php print $date; ?></span>
  </footer>
  
  <?php endif; ?>
  
  <section class="grid-6 node-presentation">
  <header>
    <?php print render($title_prefix); ?>
    
    <?php if ($page && isset($hide_node_title)){ ?>
      <h1<?php print $title_attributes; ?>><?php print $title ?></h1>
    <?php } else { ?>
      <h3<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
    <?php } ?>
    
    <?php print render($title_suffix); ?>
  </header>
  <?php endif; ?>
  
  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>
  
  <div class="clearfix">
    <?php if (!empty($content['links'])): ?>
      <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
    <?php endif; ?>

    <?php print render($content['comments']); ?>
  </div>
  <section>
</article>