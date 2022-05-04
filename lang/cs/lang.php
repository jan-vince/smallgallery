<?php return [
    'plugin' => [
        'name' => 'Galerie',
        'name_short' => 'Galerie',
        'name_original' => 'Galerie',
        'description' => 'Jednoduchá fotogalerie',
    ],

    'common' => [

        'import' => 'Importovat',
        'export' => 'Exportovat',
        'edit' => 'Upravit',
        'desc' => 'Sestupně',
        'asc' => 'Vzestupně',

        'tabs' => [
            'info' => 'Informace',
            'images' => 'Obrázky',
            'content' => 'Obsah',
            'fields' => 'Formulářová pole',
            'notes' => 'Poznámky',
            'tags' => 'Štítky',
            'attributes' => 'Vlastnosti',
            'attachments' => 'Přílohy',
            'secondary_categories' => 'Kategorie',
            'testimonials' => 'Testimonialy',
            'content_blocks' => 'Bloky obsahu',
            'records' => 'Záznamy',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Název',
            'slug' => 'Slug',
            'active' => 'Aktivní',
            'favourite' => 'Oblíbený',
            'date' => 'Datum',
            'url' => 'URL',
            'description' => 'Popisek',
            'content' => 'Obsah',
            'preview_image' => 'Náhled',
            'preview_image_media' => 'Náhled média',
            'images' => 'Obrázky',
            'images_media' => 'Obrázky (z Médií)',
            'attached_images_count' => 'Obrázků',
            'area' => 'Seznam',
            'category' => 'Kategorie',
            'category_comment' => 'Záznamy můžete zpravovat na <a href="'.Backend::url('janvince/smallgallery/categories/index').'">stránce Kategorií</a>',
            'tags' => 'Štítky',
            'attributes' => 'Vlastnosti',
            'files' => 'Soubory',
            'categories' => 'Kategorie',
            'repeater' => 'Informace',
            'repeater_prompt' => 'Přidat novou položku ...',
            'testimonials' => 'Testimonialy',
            'testimonials_prompt' => 'Přidat novou položku ...',
            'created_at' => 'Vytvořeno',
            'updated_at' => 'Aktualizováno',
            'sort_order' => 'Vlastní pořadí',
            'parent_gallery' => 'Nadřazená galerie',
            'image' => 'Obrázek',
            'image_title' => 'Název obrázku',
            'image_description' => 'Popisek obrázku',
        ],

        'fields' => [
            'empty_option' => 'Není vybrán ...',
        ],

        'buttons' => [
            'reorder' => 'Změnit pořadí',
            'back_to_list' => 'Zpět na seznam',
            'create_and_new' => 'Vytvořit a NOVÝ',
            'update_and_new' => 'Uložit a NOVÝ',
            'return' => 'Zpět'
        ],

        'import_settings' => [
            'truncate_table' => 'Před importem smazat tabulku',
            'truncate_table_description' => 'Smaže všechny záznamy z tabulky kategorií a resetuje počítadlo nových záznamů',
            'delete_relations' => 'Smazat všechny vazby záznamů na kategorie',
            'delete_relations_description' => 'Smaže všechny vazby záznamů na kategorie',
        ],

    ],

    'galleries' => [
        'menu_label' => 'Galerie',
        'return_to_records' => 'Zpět na Galerie',
        'reordering_description' => 'V nastavení komponenty Galleries použijte volbu "Vlastní pořadí".',
        'reorder' => 'Změnit pořadí',

        'columns' => [
            'allowed_fields' => 'Povolené formulářové prvky',
            'allowed_fields_comment' => 'Označené položky budou viditelné ve formuláři při editaci záznamu. Položek je hodně, proto skrolujte dolů.<br><em>Některá pole formuláře budou viditelná až ve chvíli, kdy uložíte záznam (jsou závislá na ID záznamu)!</em>',
            'parent' => 'Nadřazená galerie',
            'parent_gallery' => 'Nadřazená galerie',
            'parent_gallery_empty' => 'Žádná galerie',
            'parent_comment' => 'Můžete upravit strukturu a pořadí na stránce <a href="'.Backend::url('janvince/smallgallery/galleries/reorder').'">Změnit pořadí</a>',
        ],

        'images_media' => [
            'image' => 'Obrázek',
            'title' => 'Název (title)',
            'description' => 'Popis (description)',
        ],

        'repeater' => [
            'repeater_prompt' => 'Přidat položku ...',
            'value1' => 'Hodnota 1',
            'value2' => 'Hodnota 2',
            'value3' => 'Hodnota 3',
            'value4' => 'Hodnota 4',
            'text' => 'Text',
        ],

        'testimonials' => [
            'title' => 'Titulek',
            'image' => 'Obrázek',
            'author' => 'Autor',
            'date' => 'Datum',
            'content' => 'Obsah',
        ],

        'content_blocks' => [
            'title' => 'Titulek',
            'subtitle' => 'Podtitul',
            'image' => 'Obrázek',
            'author' => 'Autor',
            'date' => 'Datum',
            'content' => 'Obsah',
            'preview_image' => 'Náhled',
            'description' => 'Popisek',
            'code' => 'Code',
            'disable' => 'Zakázat',
            'favourite' => 'Oblíbené',
        ],

        'scoreboard' => [
            'records_count' => 'Počet záznamů',
            'records_active' => 'Aktivních',
            'records_hidden' => 'Skrytých',
            'records_favourite' => 'Oblíbených',
            'records_common' => 'Všech',
            'latest_record' => 'Nejnovější',
            'latest_record_date' => 'Vytvořeno: ',
            'active_area' => '{0} záznamů v|{1} záznam v|[2,4[ %count% záznamy v|[5,Inf[ %count% záznamů v',
        ]

    ],

    'categories' => [
        'menu_label' => 'Kategorie',
        'category' => 'Kategorie',
        'new_category' => 'Nová kategorie',
        'return_to_categories' => 'Zpět na kategorie',
        'category' => 'Kategorie',
        'secondary_categories' => 'Další kategorie',

        'columns' => [
            'main_category' => 'Kategorie',
            'parent' => 'Nadřazená kategorie',
            'parent_comment' => 'Můžete změnit pořadí a zařazení na <a href="'.Backend::url('janvince/smallgallery/categories/reorder').'">stránce pro změnu pořadí</a>',
        ],

        'tabs' => [
            'secondary_categories' => 'Další kategorie',
            'secondary_categories_comment' => 'Záznamy mohou mít jednu hlavní a několik sekundárních kategorií',
        ]

    ],

    'attributes' => [
        'menu_label' => 'Vlastnosti',
        'new_attribute' => 'Nová vlastnost',
        'attribute' => 'Vlastnost',
        'return_to_attributes' => 'Zpět na Vlastnosti',

        'columns' => [
            'value_text' => 'Text',
            'value_number' => 'Číslo',
            'value_boolean' => 'Stav',
            'value_switch' => 'Přepínač (Ano/Ne)',
            'value_type' => 'Typ hodnoty',
            'value_type_comment' => 'Na základě vybraného typu hodnoty, bude zobrazeno správné formulářové pole.',
            'value_string' => 'Krátký text',
        ],

        'tabs' => [
            'attributes' => 'Vlastnosti',
            'attributes_comment' => 'Můžete přiřadit vlastnosti a zadat jejich hodnoty',

        ],


    ],

    'tags' => [
        'menu_label' => 'Štítky',
        'return_to_tags' => 'Zpět na Štítky',
        'new_tag' => 'Nový štítek',
        'tag' => 'Štítek',
        'reorder' => 'Změnit pořadí',

        'columns' => [
            'value' => 'Hodnota',
            'icon' => 'Ikona',
        ],

        'tabs' => [
            'tags' => 'Štítky'
        ]

    ],

    'forms' => [
        'reorder' => 'Změnit pořadí',
        'delete_attached_images' => 'Smazat všechny přiřazené obrázky',
        'delete_attached_images_confirm' => 'Opravdu chcete smazat všechny obrázky na záložce Obrázky?',
        'deleting_attached_images' => 'Mazání přiřazených obrázků ...',
    ],

    'components' => [

        'records' => [
            'name' => 'Záznamy',
            'description' => 'Získá záznamy z vybraného seznamu záznamů',

            'properties' => [
                'area' => 'Seznam',
                'area_description' => 'Vyberte seznam, ze kterého chcete získat záznamy',
                'category' => 'Parametr kategorie (slug)',
                'category_description' => 'Záznamy můžete omezit na vybranou kategorie (dynamicky parametrem např. ":category" nebo zadáním ručně)',
                'tag' => 'Parametr štítku (slug)',
                'tag_description' => 'Záznamy můžete omezit na vybraný štítek (dynamicky parametrem např. ":tag" nebo zadáním ručně)',
                'active_only' => 'Pouze aktivní záznamy',
                'active_only_description' => 'Vybere pouze záznamy označené jako aktivní (Pokud není zaškrtnuto, vybere všechny záznamy)',
                'active_only' => 'Pouze nejvyšší záznamy',
                'active_only_description' => 'Vybere pouze záznamy, které již nemají žádné nadřazené (Pokud není zaškrtnuto, vybere všechny záznamy)',
                'favourite_only' => 'Pouze oblíbené záznamy',
                'favourite_only_description' => 'Vybere pouze záznamy označené jako oblíbené (Pokud není zaškrtnuto, vybere všechny záznamy)',
                'detail_page_slug' => 'Slug stránky detailu záznamu',
                'detail_page_slug_description' => 'Vložte slug CMS stránky, na které chcete zobrazit detail vybraného záznamu',
                'detail_page_param' => 'Parameter použitý na stránce detailu',
                'detail_page_param_description' => 'Vložte parametr URL adresy použité na stránce s detailem záznamu (např. "slug", pokud URL je /records/detail/:slug)',
                'sort_by' => 'Řadit podle',
                'sort_by_direction' => 'Směr řazení',
                'allow_limit' => 'Omezit počet záznamů',
                'allow_limit_description' => 'Pokud je zaškrtnuto, vrátí pouze uvedený počet záznamů',
                'limit' => 'Počet záznamů',
                'limit_description' => 'Kolik záznamů má být vráceno',
                'allow_sorting' => 'Povolit řazení',

                'groups' => [
                    'links' => 'Odkazy',
                    'sort' => 'Řazení',
                ],

            ],

        ],

        'record' => [
            'name' => 'Jeden záznam',
            'description' => 'Získá jeden konkrétní záznam',

            'properties' => [
                'record_slug' => 'Slug záznamu',
                'record_slug_description' => 'Vložte slug vybraného záznamu',
                'throw404' => 'Zobrazit chybu 404',
                'throw404_description' => 'Vrátí chybu 404, pokud je neplatný slug',
            ],

        ],

        'categories' => [
            'name' => 'Kategorie',
            'description' => 'Získá kategorie',

            'properties' => [
                'area' => 'Se záznamy ze seznamu:',
                'area_description' => 'Vybrat pouze kategorie se záznamy z tohoto seznamu',
                'root_only' => 'Pouze nejvyšší kategorie',
                'root_only_description' => 'Vrátí pouze kategorie nejvyšší úrovně',
                'area_id_empty_option' => '-- Neomezovat --',
            ],

        ],

        'category' => [
            'name' => 'Jedna kategorie',
            'description' => 'Získá jednu konkrétní kategorii',

            'properties' => [
                'throw404' => 'Zobrazit chybu 404',
                'throw404_description' => 'Vrátí chybu 404, pokud je neplatný slug',
            ],
        ],

    ],

    'permissions' => [
        'tab_name' => 'Galerie',
        'access_galleries' => 'Access Galleries',
        'access_categories' => 'Přístup ke kategoriím',
        'access_attributes' => 'Přístup k vlastnostem',
        'access_settings' => 'Přístup k nastavení pluginu',
        'access_tags' => 'Přístup ke štítkům',
        'access_denied' => 'Přístup zamítnut',
    ],

    'settings' => [
        'main_section' => 'Nastavení Galerií',
        'main_section_comment' => 'Pár předvoleb pro plugin Galerie',

        'tabs' => [
            'lists' => 'Seznamy',
            'connections' => 'Propojení',
        ],

        'fields' => [
            'disable_tree' => 'Zakázat zobrazení stromu v seznamu galerií',
            'disable_tree_comment' => 'Pokud je zaškrtnuto, galerie se zobrazí jako jednoduchý seznam',
            'preview_width' => 'Šířka náhledového obrázku v seznamu',
            'preview_height' => 'Výška náhledového obrázku v seznamu',
        ],
    ]
];
