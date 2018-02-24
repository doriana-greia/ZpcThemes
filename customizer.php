<?php

add_action('customize_register', function($tel_adress){
    $tel_adress->add_section('section_tel_adress',
        array(
            'title' => 'Телефон компанії та адреса',
            'description' => 'Тут можна вказати  телефон компанії та адресу',
            'priority' => 5,
        )
    );
    $tel_adress->add_setting('tel_textbox_mob',
             array('default' => '')
    );
    $tel_adress->add_setting('tel_textbox_dom',
             array('default' => '')
    );
    $tel_adress->add_setting('adress_textbox_city',
             array('default' => 'Украина, Киев')
    );
    $tel_adress->add_setting('adress_textbox_st',
             array('default' => 'Чоколівський бульвар 19А,оф 8')
    );
    $tel_adress->add_setting('hide_text_mob',
              array('default' => '')
    );
    $tel_adress->add_setting('hide_text_dom',
              array('default' => '')
    );
    $tel_adress->add_control('tel_textbox_mob',
        array(
            'label' => 'Введіть моб. номер телефона:',
            'section' => 'section_tel_adress',
            'type' => 'text',
        )
    );
    $tel_adress->add_control('tel_textbox_dom',
        array(
            'label' => 'Введіть дом. номер телефона:',
            'section' => 'section_tel_adress',
            'type' => 'text',
        )
    );
    $tel_adress->add_control('adress_textbox_city',
        array(
            'label' => 'Введіть назву міста:',
            'section' => 'section_tel_adress',
            'type' => 'text',
        )
    );
    $tel_adress->add_control('adress_textbox_st',
        array(
           'label' => 'Введіть назву вулиці:',
           'section' => 'section_tel_adress',
           'type' => 'text',
       )
    );
    $tel_adress->add_control('hide_text_mob',
         array(
             'label' => 'Не відображати моб. номер телефона:',
             'section' => 'section_tel_adress',
             'type' => 'checkbox',
         )
     );   
     $tel_adress->add_control('hide_text_dom',
         array(
             'label' => 'Не відображати дом. номер телефона:',
             'section' => 'section_tel_adress',
             'type' => 'checkbox',
         )
     );
     $tel_adress->add_control('hide_text_city',
         array(
             'label' => 'Не відображати назву міста:',
             'section' => 'section_tel_adress',
             'type' => 'checkbox',
         )
     );
}
);

add_action('customize_register', function($type_money){
    $type_money->add_section('section_money', 
        array(
            'title' => 'Тип валюти',
            'description' => 'Тут можна тип валюти',
            'priority' => 5,
        )
    );
    $type_money->add_setting('select_money',
        array('default' => 'UAH')
    );
    $type_money->add_control('select_money', 
         array(
           'label' => 'Валюта в:',
           'section' => 'section_money',
           'type' => 'select',
           
           'choices' => array(
           'UAH' => 'Гривня',
           'EURO' => 'Євро',
           'USD' => 'Доллар',

            ),
        )

    );
});