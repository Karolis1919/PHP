<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <?php foreach($nav['Right'] as $title => $href):?>
            <?php if($title !='Veiksmai'):?>
              <li class=<nav-link:atom>
                <a class="nav-link" href="?page=<?=$href;?>"> <?=$title;?> <span class="sr-only">(current)</span></a>
              </li>
            <?php else:?>

           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="?page=<?=$href;?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?=$title;?> 
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <?php foreach($nav['Right'][$title] as $titlein => $hgrefin):?>
                  <a class="dropdown-item" href="?page=<?=$hgrefin;?>"><?=$titlein;?></a>
              <?php endforeach;?>
              </div>
            </li>
            <?php endif;?>
              <?php endforeach;?>
            </ul>
      </nav>


      
