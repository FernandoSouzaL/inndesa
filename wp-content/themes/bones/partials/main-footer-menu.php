<?php 
  $menu_name = 'footer-links';
  $locations = get_nav_menu_locations();
  $menu      = wp_get_nav_menu_object($locations[ $menu_name ]);
  $redes     = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC')); 
?>

<?php foreach ($redes as $menu): 
  $link = $menu->url;
  $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $current = $link == $actual_link ? 'c-menu__current' : ''; 
?>

  <li class="c-menu__item">
    <a href="<?= $menu->url; ?>" class="o-ttl o-ttl--secondary o-ttl--14 o-ttl--white <?= $current; ?>">
        <?= $menu->title; ?> 
    </a>
  </li>

<?php endforeach; ?>