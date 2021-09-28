<?php

return [
  'activateUploadsJob' => [
    'value' => false,
    'name' => 'iad::activateUploadsJob',
    'type' => 'checkbox',
    'props' => [
      'label' => 'Activar Job de Subidas automáticas'
    ]
  ],
  'whatsappTextAnuncio' => [
    'value' => '¡Hola! Quiero conocer mas...',
    'name' => 'iad::whatsappTextAnuncio',
    'type' => 'input',
    'props' => [
      'label' => 'Texto de Mensaje Whatsapp en el Anuncio'
    ]
  ],
  'complaintForm' => [
    'value' => null,
    'name' => 'iad::complaintForm',
    'type' => 'select',
    'loadOptions' => [
      'apiRoute' => 'apiRoutes.form.forms',
      'select' => ['label' => 'title', 'id' => 'id'],
    ],
    'props' => [
      'label' => 'Formulario para Denunciar',
      'multiple' => false,
      'clearable' => true,
    ],
  ],
  'dateInShow' => [
    'value' => false,
    'name' => 'iad::dateInShow',
    'type' => 'checkbox',
    'group' => 'iad::ads.groupAds',
    'props' => [
      'label' => 'iad::ads.labelSettingDate'
    ]
  ],
  'selectLayout' => [
    'value' => "iad-list-item-1",
    'name' => 'iad::selectLayout',
    'type' => 'select',
    'columns' => 'col-6',
    'props' => [
      'label' => 'iad::ads.labelSettingLayout',
      'useInput' => false,
      'useChips' => false,
      'multiple' => false,
      'hideDropdownIcon' => true,
      'newValueMode' => 'add-unique',
      'options' => [
        ['label' => 'Layout 1', 'value' => "iad-list-item-1"],
      ]
    ]
  ],
  'mapInShow' => [
    'value' => false,
    'name' => 'iad::mapInShow',
    'type' => 'checkbox',
    'group' => 'iad::ads.groupAds',
    'props' => [
      'label' => 'iad::ads.labelSettingMap'
    ]
  ],
  //Enable register with oliticsOfPrivacy
  'adWithPoliticsOfPrivacy' => [
    'name' => 'iad::adWithPoliticsOfPrivacy',
    'value' => null,
    'type' => 'input',
    'group' => 'iad::ads.groupAds',
    'props' => [
      'label' => 'iad::ads.adWithPoliticsOfPrivacy',
      'type' => 'text'
    ],
  ],
  //Enable register with DataTreatment
  'adWithTermsAndConditions' => [
    'name' => 'iad::adWithTermsAndConditions',
    'value' => null,
    'type' => 'input',
    'group' => 'iad::ads.groupAds',
    'props' => [
      'label' => 'iad::ads.adWithTermsAndConditions',
      'type' => 'text'
    ],
  ],
  'contactFields' => [
    'name' => 'iad::contactFields',
    'value' => ['phone', 'whatsapp', 'facebook', 'instagram', 'twitter', 'youtube'],
    'type' => 'select',
    'group' => 'iad::ads.groupAds',
    'props' => [
      'multiple' => true,
      'useChips' => true,
      'label' => 'iad::ads.contactFields',
      'options' => [
        ['label' => 'Phone', 'value' => 'phone'],
        ['label' => 'Whatsapp', 'value' => 'whatsapp'],
        ['label' => 'Facebook', 'value' => 'facebook'],
        ['label' => 'Instagram', 'value' => 'instagram'],
        ['label' => 'Twitter', 'value' => 'twitter'],
        ['label' => 'Youtube', 'value' => 'youtube']
      ]
    ],
  ],
];
