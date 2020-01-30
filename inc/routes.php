<?php
if(isset($_GET['page'])){
    switch(htmlspecialchars($_GET['page'])){
        case 'visi':
            include ('pages/all_films.page.php');
        break;
        case 'PG':
            include ('pages/add_films.page.php');
        break;
        case 'pr':
            include ('pages/add_genre_page.php');
        break;
        case 'st':
            include ('pages/add_genre_page.php');
        break;
        case 'rx':
            include ('pages/all_movies_page.php');
        break;
        case 'xr':
            include ('pages/category_page.php');
        break;
        case 'tr':
            include ('pages/delete_movie_page.php');
        break;
        default:
    }
}