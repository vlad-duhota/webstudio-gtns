<?php

if (!defined('ABSPATH')) {
   exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// =========== HOME PAGE ===========

Container::make('post meta', __('Головна сторінка'))
   ->show_on_template('front-page.php')       // page_id
   ->add_tab( __('Перша секція'), array(
      Field::make( 'checkbox', 'hero_show', 'Сховати секцію' ),
      Field::make( 'image', 'hero_bg', 'Фон' )
      ->set_value_type('url'),
      Field::make( 'text', 'hero_title', 'Заголовок' ),
      Field::make( 'text', 'hero_btn', 'Кнопка' ),
  ) )
  ->add_tab( __('Переваги'), array(
   Field::make( 'checkbox', 'advantages_show', 'Сховати секцію' )
   ->set_option_value( 'yes' ),
   Field::make( 'complex', 'advantages', 'Список переваг' )
   ->add_fields( array(
       Field::make( 'image', 'advantages_img', 'Картинка' )
       ->set_value_type( 'url' ),
       Field::make( 'text', 'advantages_title', 'Заголовок' ),
       Field::make( 'text', 'advantages_text', 'Текст' ),
   ) )
   ->set_max(4),
) )
->add_tab( __('Чим ми займаємось'), array(
   Field::make( 'checkbox', 'work_show', 'Сховати секцію' )
   ->set_option_value( 'yes' ),
   Field::make( 'text', 'work_title', 'Заголовок' ),
   Field::make( 'complex', 'work', 'Список' )
   ->add_fields( array(
       Field::make( 'image', 'work_img', 'Картинка' )
       ->set_value_type( 'url' ),
       Field::make( 'text', 'work_text', 'Текст' ),
   ) )
   ->set_max(3),
) )
->add_tab( __('Команда'), array(
   Field::make( 'checkbox', 'team_show', 'Сховати секцію' )
   ->set_option_value( 'yes' ),
   Field::make( 'text', 'team_title', 'Заголовок' ),
   Field::make( 'complex', 'team', 'Список' )
   ->add_fields( array(
       Field::make( 'image', 'team_img', 'Фото' )
       ->set_value_type( 'url' ),
       Field::make( 'text', 'team_name', 'ФІО' ),
       Field::make( 'text', 'team_text', 'Текст' ),
       Field::make( 'complex', 'team_socials', 'Список соцмереж' )
       ->add_fields( array(
         Field::make( 'text', 'team_socials_img', 'Картинка соцмережі svg код' ),
         Field::make( 'text', 'team_socials_url', 'Посилання на соцмережу' ),
       ) )
       ->set_max(4),
   ) )
   ->set_max(4),
) )
->add_tab( __('Постійні клієнти'), array(
   Field::make( 'checkbox', 'clients_show', 'Сховати секцію' )
   ->set_option_value( 'yes' ),
   Field::make( 'text', 'clients_title', 'Заголовок' ),
   Field::make( 'complex', 'clients', 'Список' )
   ->add_fields( array(
      Field::make( 'text', 'clients_img', 'Картинка svg код' ),
      Field::make( 'text', 'clients_url', 'Посилання' ),
   ) )
   ->set_max(6),
) );




  

Container::make('post meta', __('Сторінка портфоліо'))
->show_on_template('portfolio-page.php')       
->add_fields( array(
   Field::make( 'complex', 'portfolio', 'Таби' )
   ->add_fields( array(
       Field::make( 'text', 'portfolio_tab_name', 'Назва табу' ),
       Field::make( 'complex', 'portfolio_elements', 'Елементи табу' )
       ->add_fields( array(
         Field::make( 'image', 'portfolio_elements_img', 'Картинка' )
         ->set_value_type('url'),
         Field::make( 'text', 'portfolio_elements_name', 'Назва' ),
         Field::make( 'text', 'portfolio_elements_type', 'Тип' ),
         Field::make( 'text', 'portfolio_elements_text', 'Текст' ),
         Field::make( 'text', 'portfolio_elements_url', 'Посилання' ),
       ) )
   ) )
) );



