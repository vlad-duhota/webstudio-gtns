<?php
/*
Template Name: Home page
*/
?>

<?php 
    $page_id = 9;
    $advantages = carbon_get_post_meta($page_id, 'advantages');
    $workList = carbon_get_post_meta($page_id, 'work');
    $team = carbon_get_post_meta($page_id, 'team');
    $clients = carbon_get_post_meta($page_id, 'clients');
?>

<?php get_header(); ?>
  
<main class="main">
      <!-- Hero -->
      <?php if(carbon_get_post_meta($page_id, 'hero_show') != '1'){?>
      <section class="hero" style="background-image: url(<?php echo carbon_get_post_meta($page_id, 'hero_bg')?>)">
        <div class="container">
          <h1 class="hero__title"><?php echo carbon_get_post_meta($page_id, 'hero_title')?></h1>
          <button class="btn" type="button" id="contact"><?php echo carbon_get_post_meta($page_id, 'hero_btn')?></button>
        </div>
      </section>
      <?php }?>
      <!-- /Hero -->

      <!-- Specifics -->
      <?php if(carbon_get_post_meta($page_id, 'advantages_show') != '1'){?>
      <section class="specifics">
        <div class="container">
        <?php if(! empty($advantages)) : ?>
            <div class="specifics__grid">
            <?php foreach($advantages as $advantage) : ?>
                <article class="specifics-item">
              <div class="specifics-item__icon-bg">
                <img src="<?php echo $advantage['advantages_img']?>" alt="Sattelite" class="specifics-item__icon">
              </div>
              <h3 class="specifics-item__title"><?php echo $advantage['advantages_title']?></h3>
              <p class="specifics-item__description">
              <?php echo $advantage['advantages_text']?>
              </p>
            </article>
            <?php endforeach ?>
            </div>
            <?php endif ?>
        </div>
      </section>
      <?php }?>
      <!-- /Specifics -->

      <!-- Work -->
      <?php if(carbon_get_post_meta($page_id, 'work_show') != '1'){?>
      <section class="work">
        <div class="container">
          <h2 class="section-title"><?php echo carbon_get_post_meta($page_id, 'work_title')?></h2>
          <?php if(! empty($workList)) : ?>
            <ul class="work__list">
            <?php foreach($workList as $workItem) : ?>
                <li class="work__item work-item">
              <img src="<?php echo $workItem['work_img']?>" class="work-item__bg">
              <div class="work-item__info">
                <h3 class="work-item__title">
                    <?php echo $workItem['work_text']?>
                </h3>
              </div>
            </li>
            <?php endforeach ?>
            </ul>
            <?php endif ?>
        </div>
      </section>
      <?php }?>
      <!-- /Work -->

      <!-- Team -->
      <?php if(carbon_get_post_meta($page_id, 'team_show') != '1'){?>
      <section class="team">
        <div class="container">
          <h2 class="section-title"><?php echo carbon_get_post_meta($page_id, 'team_title')?></h2>
          <?php if(! empty($team)) : ?>
            <ul class="team__members">
            <?php foreach($team as $teamItem) : ?>
                <li class="member-card">
              <img src="<?php echo $teamItem['team_img']?>" alt="Ігор Дем’яненко" class="member-card__img">
              <h3 class="member-card__name"><?php echo $teamItem['team_name']?></h3>
              <p class="member-card__job"><?php echo $teamItem['team_text']?></p>
              <?php if(! empty($teamItem['team_socials'])) : ?>
                <ul class="socials socials_light member-card__socials">
            <?php foreach($teamItem['team_socials'] as $socialItem) : ?>
                <li class="socials__item">
                  <a href="<?php echo $socialItem['team_socials_url']?>" class="socials__link" target="_blank">
                   <?php echo $socialItem['team_socials_img']?>
                  </a>
                </li>
            <?php endforeach ?>
            </ul>
            <?php endif ?>
            </li>
            <?php endforeach ?>
            </ul>
            <?php endif ?>
        </div>
      </section>
      <?php }?>
      <!-- /Team -->

      <!-- Clients -->
      <?php if(carbon_get_post_meta($page_id, 'clients_show') != '1'){?>
      <section class="clients">
        <div class="container">
          <h2 class="section-title"><?php echo carbon_get_post_meta($page_id, 'clients_title')?></h2>
          <?php if(! empty($clients)) : ?>
            <ul class="clients__list">
            <?php foreach($clients as $client) : ?>
                <li class="clients__item">
                <a href="<?php echo $client['clients_url']?>" class="clients__link">
                <?php echo $client['clients_img']?>
              </a>
            </li>
            <?php endforeach ?>
            </ul>
            <?php endif ?>
        </div>
      </section>
      <?php }?>
      <!-- /Clients -->
    </main>

  <?php get_footer() ?>