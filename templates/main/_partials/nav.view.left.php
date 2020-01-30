<div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><?=title?></div>
      <div class="list-group list-group-flush">
        <?php foreach($nav['Left'] as $link => $has):?>
          <a href="?page=<?=$has[0];?>" class="list-group-item list-group-item-action bg-light"><?=$link;?></a>
        <?php endforeach;?>
      </div>
    </div>