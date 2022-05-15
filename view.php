
<?php
 require_once 'files/functions.php';
 $top = kino('https://kinopoiskapiunofficial.tech/api/v2.2/films/'.$_GET['id']);
$top = json_decode($top, true); 
$sim = kino('https://kinopoiskapiunofficial.tech/api/v2.2/films/'.$_GET['id'].'/similars');
$sim = json_decode($sim, true); 
 $title = $top['nameRu'].' '.$top['year'];
$description = $top['description'];
require_once 'files/head.php';
?>


  <div class="mainContent">
	<div class="entity-desc" style="text-align: left;">
        <div class="entity-desc-poster"><div class="entity-desc-poster-img fadeIn animated" style="background: url(/theme/img/<?= $_GET['id']; ?>.jpg), url(" img="" nocover.png")"=""></div></div>
        <div class="entity-desc-col">
          <div class="entity-title-wrap" data-id="<?=$_GET['id'];?>">
              <h1 class="entity-title-text">
                <span class="js-title" itemprop="name"> <?= $top['nameRu'];?> </span>
              </h1>
          </div>
          <div class="entity-desc-table">
                          <dl class="entity-desc-item-wrap is-rating">
                <dt class="entity-desc-item">Рейтинг</dt>
                <dd class="entity-desc-value is-rating">
                                                                            <span title="КиноПоиск" class="entity-rating-kp">
      <?
                  if ($top['ratingKinopoisk'] == null) {
        echo '-';
    } else {
        echo $top['ratingKinopoisk'];
    }
    ?>
      </span>
       <?
                  if (!$top['ratingImdb'] == null) {
        
        echo '<span title="IMDb" class="entity-rating-imdb">'. $top['ratingImdb'].'</span>';
    }
    ?>
                                  </dd>
                                      <dl class="entity-desc-item-wrap">
                <dt class="entity-desc-item">Название</dt>
                <dd id="title" class="entity-desc-value is-narrow" itemprop="alternateName">
                     
                      <?
                  if ($top['nameOriginal'] == null) {
        echo '-';
    } else {
        echo $top['nameOriginal'];
    }
    ?>
                     </dd>
              </dl>

                <dl class="entity-desc-item-wrap">
                <dt class="entity-desc-item">Год</dt>
                <dd class="entity-desc-value"><span class="copyrightYear">
                   <?
                  if ($top['year'] == null) {
        echo '-';
    } else {
        echo $top['year'];
    }
    ?> 
                     
                     </span></dd>
              </dl>
                        <dl class="entity-desc-item-wrap">
              <dt class="entity-desc-item">Жанры</dt>
              <dd id="genres" class="entity-desc-value js-genres">
                  
                   <?
                   if ($top['genres'] == null) {
        echo '-';
    } else {
                   $crows = count($top['genres']) - 1;
                   foreach ($top['genres'] as $i => $genres) {
            echo '<span class="entity-desc-link-u" itemprop="genre">'.$genres['genre'].'</span>';
      echo ( $crows > $i ) ? ', ' : '';
        }
          }         
                  ?>
              </dd>
            </dl>
            <dl class="entity-desc-item-wrap">
              <dt class="entity-desc-item">Страна</dt>
              <dd id="countries" class="entity-desc-value js-countries"> 
          <? if ($top['countries'] == null) {
        echo '-';
    } else {
                   $crows = count($top['countries']) - 1;
                   foreach ($top['countries'] as $i => $countries) {
            echo '<span class="entity-desc-link-u" itemprop="country">'.$countries['country'].'</span>';
      echo ( $crows > $i ) ? ', ' : '';
        }
        }
                   
                  ?>
          
              
              
                  </dd>
            </dl>
            <dl class="entity-desc-item-wrap">
              <dt class="entity-desc-item">Время</dt>
              <dd class="entity-desc-value">
              <time class="time">
                  <?
                  if ($top['filmLength'] == null) {
        echo '-';
    } else {
        echo $top['filmLength'] . ' мин';
    }
    ?>
   </time>
              </dd>
            </dl>
            <dl class="entity-desc-item-wrap">
              <dt class="entity-desc-item">Возраст</dt>
              <dd class="entity-desc-value">
              <span class="age" style="border: 1px solid #748491; padding: 3px 4px; font-size: 1em; font-weight: 600; line-height: 13px; border-radius: 4px;"> 
              <?
                  if ($top['ratingAgeLimits'] == null) {
        echo '-';
    } else {
    $top['ratingAgeLimits'] = str_replace("age", "", $top['ratingAgeLimits']);
        echo $top['ratingAgeLimits'].'+';
    }
    ?>
              
              
              </span>
              </dd>
            </dl>
                                  </dl></div>
          <div>
	        
              <dt class="entity-desc-item">Описание</dt>
            <div class="entity-desc-description" itemprop="description">
                <?
                  if ($top['description'] == null) {
        echo '-';
    } else {
        echo $top['description'];
    }
    ?>
                 
                 
                 
                 </div>
          </div>
        </div>
      </div>

<br>
<div data-resize="1" id="yohoho" data-kinopoisk="<? echo $_GET['id']; ?>"></div> 
<script src="//yohoho.cc/yo.js"></script>
<?php

if (!$sim['items'] == null) {
       

?>
	<h1 class="h1">Похожие фильмы:</h1>
    <div class="fadeInElement" style="overflow: hidden; overflow-x: scroll; white-space: nowrap; margin-left: 5%; margin-right: 5%;">
    <?php
      foreach($sim[items] as $val)
{
     
     
      echo '<a href="/f/'.$val['filmId'].'">                <div class="creditsCardWrapper" style="width: 100px;padding-top: 0px; padding-bottom: 0px;height: 120px;">                    <img style="border-radius:5px" alt="'.$val['nameRu'].'" src="/theme/img/'.$val['filmId'].'.jpg"></div>            </a> ';
                   
        
}
}
    ?>
    </div>

 
        <?php
require_once  'files/foot.php';
?>