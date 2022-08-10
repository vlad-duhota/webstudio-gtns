<?php
/*
Template Name: Porfolio page
*/
?>

<?php 
    $page_id = 58;
    $tabs = carbon_get_post_meta($page_id, 'portfolio');
?>

<?php get_header(); ?>

<main class="main">
      <div class="container">
        <?php $counter1 = 0?>
      <?php if(!empty($tabs)) : ?>
        <ul class="tags">
            <?php foreach($tabs as $tab) : ?>
                <?php $counter1++;?>
                <li class="tags__item" data-tabs="<?php echo $counter1?>">
                <?php if($counter1==1) : ?>
                    <input type="radio" name="tag" class="tags__input visually-hidden" id="tags<?php echo $counter1?>" checked>
                    <?php endif ?>
                    <?php if($counter1!=1) : ?>
                        <input type="radio" name="tag" class="tags__input visually-hidden" id="tags<?php echo $counter1?>">
                        <?php endif ?>
                <label for="tags<?php echo $counter1?>" class="tags__label"><?php echo $tab['portfolio_tab_name']?></label>
                </li>
            <?php endforeach ?>
            </ul>
            <?php endif ?>

            <?php $counter2 = 0?>
      <?php if(! empty($tabs)) : ?>
            <?php foreach($tabs as $tab) : ?>
                <?php $counter2++;?>
                <?php if($counter2==1) : ?>
                    <ul class="projects projects_active" data-tabs="<?php echo $counter2?>">
                    <?php endif ?>
                    <?php if($counter2!=1) : ?>
                        <ul class="projects" data-tabs="<?php echo $counter2?>">
                        <?php endif ?>
                <?php if(! empty($tabs)) : ?>
            <?php foreach($tab['portfolio_elements'] as $tabItem) : ?>
                <?php $counter1++;?>
                <li class="projects__item">
            <a href="<?php echo $tabItem['portfolio_elements_url']?>" class="project">
              <div class="project__preview">
                <img src="<?php echo $tabItem['portfolio_elements_img']?>" alt="Technocrack" class="project__img">
                <?php 
                $hex = carbon_get_theme_option( 'primary' ); // Assuming this returns #FF0000BF
                $rgb = carbon_hex_to_rgba( $hex );
                ?>
                <p class="project__description" style="background: rgba(<?php echo $rgb['red']?>,<?php echo $rgb['green']?>, <?php echo $rgb['blue']?>, .9);"><?php echo $tabItem['portfolio_elements_text']?></p>
              </div>
              <div class="project__info">
                <h3 class="project__title"><?php echo $tabItem['portfolio_elements_name']?></h3>
                <p class="project__tag"><?php echo $tabItem['portfolio_elements_type']?></p>
              </div>
            </a>
          </li>
            <?php endforeach ?>
            <?php endif ?>
            </ul>
            <?php endforeach ?>
            <?php endif ?>
      </div>
    </main>

    <?php get_footer(); ?>