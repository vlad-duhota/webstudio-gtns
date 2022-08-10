<?php
if (!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', __('Theme options', 'webstudio-gtns') )
    ->add_tab( __('Хедер'), array(
        Field::make( 'text', 'mail_address', 'Електронна адреса' )
        ->set_width(50),
        Field::make( 'text', 'phone_number', 'Номер телефону' )
        ->set_width(50),
    ) )
    ->add_tab( __('Футер'), array(
        Field::make( 'text', 'place', 'Геолокація' )
        ->set_width(50),
        Field::make( 'text', 'place_url', 'Посилання на геолокацію' )
        ->set_width(50),
        Field::make( 'complex', 'socials', 'Соцмережі' )
        ->add_fields( array(
            Field::make( 'image', 'socials_img', 'Картинка соцмережі' )
            ->set_value_type( 'url' ),
            Field::make( 'text', 'socials_url', 'Посилання на соцмережу' ),
        ) )
        ->set_max(4),
    ) )
    ->add_tab( __('Загальне'), array(
        Field::make( 'color', 'primary', 'Акцентовий колір' ),
        Field::make( 'checkbox', 'crb_show_content', 'Використовувата логотип як картинку' ),
        Field::make( 'image', 'logo', 'Логотип' )
        ->set_value_type('url')
        ->set_conditional_logic( array(
            array(
                'field' => 'crb_show_content',
                'value' => true,
                )
                ) ),
                Field::make( 'text', 'logo_accent', 'Акцентна частина логотипу' )
                ->set_conditional_logic( array(
                    array(
                        'field' => 'crb_show_content',
                        'value' => false,
                        )
                        ) )
                ->set_width(40),
                Field::make( 'text', 'logo_text', 'Логотип' )
                ->set_conditional_logic( array(
                    array(
                        'field' => 'crb_show_content',
                        'value' => false,
                        )
                        ) )
                ->set_width(40),
                Field::make( 'text', 'modal_title', 'Заголовок модального вікна' ),
    ) );