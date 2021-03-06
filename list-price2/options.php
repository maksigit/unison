<?php if (!defined('FW')) die('Forbidden');

$options = array(
    'titleservice' => array(
        'type' => 'text',
        'value' => 'default value',
        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
        'label' => __('title-service', ''),
        'desc' => __('Description', ''),
        'help' => __('Help tip', ''),
    ),

    'imgservice' => array(
        'label' => __('img-service', ''),
        'type' => 'upload',
        'images_only' => true,
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
        'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
            __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
            __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', '')
        ),
    ),
    'icons'=>array(
        'type'  => 'icon-v2',
        'preview_size' => 'medium',
        'modal_size' => 'medium',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Icon', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
    ),
    'color_picker' => array(
        'type' => 'color-picker',
        'value' => '',
        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
        // palette colors array
        'palettes' => array('#ba4e4e', '#0ce9ed', '#941940'),
        'label' => __('Background', '{domain}'),
        'desc' => __('Description', '{domain}'),
        'help' => __('Help tip', '{domain}'),
    ),

    'addable' => array(
        'type' => 'addable-popup',
        'value' => array(
            array(
                'option_1' => 'value 1',
                'option_2' => 'value 2',
            ),
        ),
        'label' => __('Addable Popup', ''),
        'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
        'template' => '{{- item-prise }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', ''),
        'sortable' => true,
        'popup-options' => array(
            'service' => array(
                'label' => __('service', ''),
                'type' => 'text',
                'value' => 'service',
                'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
                'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
                    __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
                    __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', '{domain}')
                ),
            ),
            'price' => array(
                'label' => __('price', ''),
                'type' => 'text',
                'value' => 'price',
                'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
                'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
                    __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
                    __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', '{domain}')
                ),
            ),
        ),
    ),

);