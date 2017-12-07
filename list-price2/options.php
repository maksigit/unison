<?php if (!defined('FW')) die('Forbidden');
$options = array(

    'addable' => array(
        'type' => 'addable-popup',
        'value' => array(
            array(
                'option_1' => 'value 1',
                'option_2' => 'value 2',
            ),
        ),
        'label' => __('Addable Popup', ''),
        'desc'  => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
        'template' => '{{- item-prise }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', ''),
        'sortable' => true,
        'popup-options' => array(
            'option_1' => array(
                'label' => __('Text', ''),
                'type' => 'text',
                'value' => 'text value',
                'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
                'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
                    __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
                    __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', '{domain}')
                ),
            ),
            'option_2' => array(
                'label' => __('Text', ''),
                'type' => 'text',
                'value' => 'textarea value',
                'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
                'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
                    __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
                    __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', '')
                ),
            ),
            'option_3' => array(
                'label' => __('Text', ''),
                'type' => 'text',
                'value' => 'textarea value',
                'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
                'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
                    __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
                    __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', '')
                ),
            ),
            'option_4' => array(
                'label' => __('Text', ''),
                'type' => 'text',
                'value' => 'textarea value',
                'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
                'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
                    __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
                    __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', '')
                ),
            ),
            'option_5' => array(
                'label' => __('Text', ''),
                'type' => 'text',
                'value' => 'textarea value',
                'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
                'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
                    __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
                    __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', '')
                ),
            ),
            'option_6' => array(
                'label' => __('Text', ''),
                'type' => 'text',
                'value' => 'textarea value',
                'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
                'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
                    __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
                    __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', '')
                ),
            ),
            'option_7' => array(
                'label' => __('Text', ''),
                'type' => 'text',
                'value' => 'textarea value',
                'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
                'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
                    __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
                    __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', '')
                ),
            ),
            'option_8' => array(
                'label' => __('Text', ''),
                'type' => 'text',
                'value' => 'textarea value',
                'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
                'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
                    __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
                    __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', '')
                ),
            ),
            'option_9' => array(
                'label' => __('Text', ''),
                'type' => 'text',
                'value' => 'textarea value',
                'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
                'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
                    __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
                    __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', '')
                ),
            ),
            'option_10' => array(
                'label' => __('img', ''),
                'type'  => 'upload',
                'images_only' => true,
                'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
                'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
                    __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
                    __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', '')
                ),
            ),
        ),
    )

);