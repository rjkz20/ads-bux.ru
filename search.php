<?php
 require_once 'files/functions.php';
$top = kino('https://kinopoiskapiunofficial.tech/api/v2.1/films/search-by-keyword?keyword='.urlencode($_GET['text']).'&page=1');
$top = json_decode($top, true); 
$title = 'Поиск: '.$_GET['text'];
require_once 'files/head.php';
 
?>




	<div class="top-gallery-item">
        <div class="title-wrap">
			<h2 class="title" style="width: 100%">Результаты поиска</h2>
        </div>
        <div class="popularMovies is-scroll-right">
            <div class="vlist is-scroll-right">
    <div class="vlist-holder js-kinetic kinetic-active">
   
        <ul id="item" class="items js-kinetic-inner js-popularMovies">
        
        
       
      
<?php 
     foreach($top['films'] as $value)
{
     
     
      echo '<li class="item" style="margin-bottom: 1rem"> 
   <a class="link" href="/f/'.$value['filmId'].'"> 
          <div class="cover-wrap">   
                 <div class="cover js-b-lazy fadeIn animated" style="background-image: url(/theme/img/'.$value['filmId'].'.jpg);">
                 </div>
                 </div>     
                 <div class="description">     
                 <h3 class="title">'.$value['nameRu'].'</h3>     
                  <span class="desc">   
                    <span class="rating">'.$value['rating'].'</span>  
                   <span class="year">'.$value['year'].'</span>
                   </span>
                   </div>
                   </a>
                   </li>';
                   
        
}

?>
     
        </ul>
        </div>
        </div>
        </div>
        </div>
        <?php
require_once  'files/foot.php';
?>