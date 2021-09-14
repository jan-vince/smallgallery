<?php return [
    'plugin' => [
        'name' => 'Galerie',
        'name_short' => 'Galerie',
        'name_original' => 'Small gallery',
        'description' => 'Small gallery Plugin',
    ],

    'common' => [

        'import' => 'Importieren',
        'export' => 'Exportieren',
        'edit' => 'Editieren',
        'desc' => 'Absteigend',
        'asc' => 'Aufsteigend',

        'menu' => [
            'galleries' => 'Galerien',
            'gallery' => 'Galerie',
        ],

        'tabs' => [
            'info' => 'Info',
            'images' => 'Bilder',
            'content' => 'Inhalt',
            'fields' => 'Felder',
            'notes' => 'Notizen',
            'tags' => 'Stichworte',
            'attributes' => 'Attribute',
            'attachments' => 'Anhänge',
            'secondary_categories' => 'Kategorien',
            'testimonials' => 'Referenzen',
            'content_blocks' => 'Inhaltsblöcke',
            'records' => 'Einträge',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'slug' => 'Slug',
            'active' => 'Aktiv',
            'favourite' => 'Favorit',
            'date' => 'Datum',
            'url' => 'URL',
            'description' => 'Beschreibung',
            'content' => 'Inhalt',
            'preview_image' => 'Vorschaubild',
            'preview_image_media' => 'Vorschaubild (aus Medien)',
            'images' => 'Bilder',
            'images_media' => 'Bilder (aus Medien)',
            'attached_images_count' => 'Bilder',
            'area' => 'Liste',
            'category' => 'Kategorie',
            'category_comment' => 'Sie können Artikel auf der <a href="'.Backend::url('janvince/smallgallery/categories/index').'">Kategorieseite</a> verwalten.',
            'tags' => 'Stichworte',
            'attributes' => 'Attribute',
            'files' => 'Dateien',
            'categories' => 'Kategorien',
            'repeater' => 'Information',
            'repeater_prompt' => 'Neuen Eintrag hinzufügen ...',
            'testimonials' => 'Referenzen',
            'testimonials_prompt' => 'Neuen Eintrag hinzufügen ...',
            'created_at' => 'Erstellt',
            'updated_at' => 'Aktualisiert',
            'sort_order' => 'Benutzerdefinierte Reihenfolge',
            'parent_gallery' => 'Hauptgalerie',
        ],

        'fields' => [
            'empty_option' => 'Nicht ausgewählt ...',
        ],

        'buttons' => [
            'reorder' => 'Neu anordnen',
            'back_to_list' => 'Zurück zur Liste',
            'create_and_new' => 'Erstellen und NEU',
            'update_and_new' => 'Speichern und NEU',
            'return' => 'Zurück'
        ],

        'import_settings' => [
            'truncate_table' => 'Tabelle leeren vor dem Importieren',
            'truncate_table_description' => 'Alle Kategorien löschen und Autoinkrement zurücksetzen',
            'delete_relations' => 'Datensatzbeziehungen zu Kategorien löschen',
            'delete_relations_description' => 'Alle Datensatzbeziehungen zu Kategorien löschen',
        ],

    ],

    'galleries' => [
        'menu_label' => 'Galerien',
        'return_to_galleries' => 'Zurück zu Galerien',
        'reordering_description' => 'Verwende "Benutzerdefinierte Reihenfolge" in der Sortieroption der Kategorien.',
        'reorder' => 'Benutzerdefinierte Reihenfolge',
    
        'columns' => [
            'allowed_fields' => 'Zulässige Felder',
            'allowed_fields_comment' => 'Markierte Felder werden im Bearbeitungsformular der Galerie angezeigt. Diese Liste ist lang, also scrollen Sie nach unten! <br><em>Einige Felder sind sichtbar, nachdem Sie einen Datensatz erstellt haben (Die Felder sind abhängig von der ID der Galerie)!</em>',
            'main_gallery' => 'Galerie',
            'parent' => 'Hauptgalerie',
            'parent_gallery' => 'Hauptgalerie',
            'parent_gallery_empty' => 'Keine Galerie',
            'parent_comment' => 'Sie können auf der <a href="'.Backend::url('janvince/smallgallery/galleries/reorder').'">Sortierseite</a> die Hierarchie und Reihenfolge ändern',
        ],
        
        'images_media' => [
            'image' => 'Bild',
            'title' => 'Titel',
            'description' => 'Beschreibung',
        ],

        'repeater' => [
            'repeater_prompt' => 'Element hinzufügen ...',
            'value1' => 'Wert 1',
            'value2' => 'Wert 2',
            'value3' => 'Wert 3',
            'value4' => 'Wert 4',
            'text' => 'Text',
        ],

        'testimonials' => [
            'title' => 'Titel',
            'image' => 'Bild',
            'author' => 'Autor',
            'date' => 'Datum',
            'content' => 'Inhalt',
        ],

        'content_blocks' => [
            'title' => 'Titel',
            'subtitle' => 'Untertitel',
            'image' => 'Bild',
            'author' => 'Autor',
            'date' => 'Datum',
            'content' => 'Inhalt',
            'preview_image' => 'Vorschaubild',
            'description' => 'Beschreibung',
            'code' => 'Code',
            'disable' => 'Deaktivieren',
            'favourite' => 'Favorit',
        ],

        'scoreboard' => [
            'records_count' => 'Galerie Anzahl',
            'records_active' => 'Aktiv',
            'records_hidden' => 'Versteckt',
            'records_favourite' => 'Favorit',
            'records_common' => 'Häufig',
            'latest_record' => 'Neueste',
            'latest_record_date' => 'Erstellt ',
            'active_area' => '{0} Einträge in|{1} Eintrag in|[2,Inf[ %count% Einträge in',
        ]

    ],

    'categories' => [
        'menu_label' => 'Kategorien',
        'category' => 'Kategorie',
        'new_category' => 'Neue Kategorie',
        'return_to_categories' => 'Zurück zu Kategorien',
        'category' => 'Kategorie',
        'secondary_categories' => 'Mehr Kategorien',

        'columns' => [
            'main_category' => 'Kategorie',
            'parent' => 'Hauptkategorie',
            'parent_comment' => 'Sie können auf der <a href="'.Backend::url('janvince/smallgallery/categories/reorder').'">Sortierseite</a> die Hierarchie und Reihenfolge ändern',
        ],

        'tabs' => [
            'secondary_categories' => 'Nebenkategorien',
            'secondary_categories_comment' => 'Datensätze können eine Hauptkategorie und viele Nebenkategorien haben',
        ]

    ],

    'attributes' => [
        'menu_label' => 'Attribute',
        'new_attribute' => 'Neues Attribut',
        'attribute' => 'Attribute',
        'return_to_attributes' => 'Zurück zu Attributen',

        'columns' => [
            'name' => 'Name',
            'slug' => 'Slug',
            'value_text' => 'Text',
            'value_number' => 'Zahl',
            'value_boolean' => 'Status',
            'value_switch' => 'Schalter (Yes/No)',
            'value_type' => 'Art der Datentypen',
            'value_type_comment' => 'Basierend auf dem ausgewählten Datentyp wird das richtige Eingabefeld im zugehörigen Formular angezeigt',
            'value_string' => 'Zeichenfolge',
        ],

        'tabs' => [
            'attributes' => 'Attribute',
            'attributes_comment' => 'Sie können Attribute zuweisen und ihre Werte hinzufügen',

        ],


    ],

    'tags' => [
        'menu_label' => 'Stichworte',
        'return_to_tags' => 'Zurück zu Stichworten',
        'new_tag' => 'Neues Stichwort',
        'tag' => 'Stichwort',
        'reorder' => 'Neu anordnen',

        'columns' => [
            'name' => 'Name',
            'slug' => 'Slug',
            'description' => 'Beschreibung',
            'value' => 'Wert',
            'icon' => 'Symbol',
        ],

        'tabs' => [
            'tags' => 'Stichworte'
        ]

    ],

    'forms' => [
        'reorder' => 'Neu anordnen',
        'delete_attached_images' => 'Alle angehängten Bilder löschen',
        'delete_attached_images_confirm' => 'Wirklich alle angehängten Bilder löschen?',
        'deleting_attached_images' => 'Lösche alle angehängten Bilder ...',
    ],

    'components' => [

        'galleries' => [
            'name' => 'Galerien',
            'description' => 'Zeige die Galerieliste',

            'properties' => [
                'category' => 'Kategorie Slug',
                'category_description' => 'Kategorie Slug (dynamisch wie :category oder manuell eingegeben)',
                'tag' => 'Stichwort Slug',
                'tag_description' => 'Stichwort Slug (dynamisch wie :tag oder manuell eingegeben)',
                'active_only' => 'Nur aktive Datensätze',
                'active_only_description' => 'Nur aktive Datensätze abrufen (kein Häkchen erhält alle Datensätze)',
                'root_only' => 'Nur Datensätze der Hauptebene',
                'root_only_description' => 'Nur Datensätze der ersten Ebene abrufen (kein Häkchen erhält alle Datensätze)',
                'favourite_only' => 'Nur Favoriten Datensätze',
                'favourite_only_description' => 'Nur favoriten Datensätze abrufen (kein Häkchen erhält alle Datensätze)',
                'detail_page_slug' => 'Detailseite Slug',
                'detail_page_slug_description' => 'Geben Sie einen Slug der CMS-Seite ein, auf der Sie die Details eines Datensatzes angezeigt werden sollen',
                'detail_page_param' => 'Auf der Detailseite verwendeter Parameter',
                'detail_page_param_description' => 'Geben Sie einen URL-Parameternamen ein, der auf der Detailseite verwendet wird (z.B.: "slug" bei folgender URL /records/detail/:slug)',
                'sort_by' => 'Sortieren nach',
                'sort_by_direction' => 'Sortierrichtung',
                'allow_limit' => 'Anzahl oder Datensätze begrenzen',
                'allow_limit_description' => 'Wenn aktiviert, wird nur die erforderliche Anzahl von Datensätzen zurückgegeben',
                'limit' => 'Datensatz Anzahl',
                'limit_description' => 'Wie viele Datensätze zurückgegeben werden',
                'allow_sorting' => 'Sortierung zulassen',

                'groups' => [
                    'links' => 'Links',
                    'sort' => 'Sortierung',
                    'limit' => 'Begrenzung',
                ],

            ],

        ],

        'gallery' => [
            'name' => 'Galeriedetails',
            'description' => 'Zeigt einen bestimmten Datensatz',

            'properties' => [
                'gallery_slug' => 'Galerie Slug',
                'gallery_slug_description' => 'Geben Sie den Slug einer bestimmten Galerie ein',
                'throw404' => '404 Fehler, ungültiger Slug',
                'throw404_description' => 'Liefert einen 404 Fehler, wenn der Slug ungültig ist',
            ],

        ],

        'categories' => [
            'name' => 'Kategorien',
            'description' => 'Liefert die Kategorien der Datensätze zurück',

            'properties' => [
                'area' => 'Nur mit Datensätzen in der Liste',
                'area_description' => 'Wählen Sie nur Kategorien mit Datensätzen in dieser Liste aus',
                'root_only' => 'Nur Hauptkategorien',
                'root_only_description' => 'Liefert alle Hauptkategorien',
                'area_id_empty_option' => '-- Nicht begrenzen auf --',
            ],

        ],

        'category' => [
            'name' => 'Kategoriedetails',
            'description' => 'Liefert Details zu einer bestimmten Kategorie',

            'properties' => [
                'throw404' => '404 Fehler, ungültiger Slug',
                'throw404_description' => 'Liefert einen 404 Fehler, wenn der Slug ungültig ist',
            ],

        ],


    ],

    'permissions' => [
        'tab_name' => 'Galerie',
        'access_galleries' => 'Zugang zu Galerien',
        'access_categories' => 'Zugang zu Kategorien',
        'access_attributes' => 'Zugang zu Attributen',
        'access_settings' => 'Zugang zu Einstellungen',
        'access_tags' => 'Zugang zu Stichworten',
        'access_denied' => 'Zugang verweigert',
    ],

    'settings' => [
        'main_section' => 'Galerieeinstellungen',
        'main_section_comment' => 'Einstellungen für das Small gallery Plugin',

        'tabs' => [
            'lists' => 'Listen',
            'connections' => 'Verbindungen',
        ],

        'fields' => [
            'disable_tree' => 'Baumansicht in der Galerieliste deaktivieren',
            'disable_tree_comment' => 'Wenn aktiviert, ist die Galerieliste eine flache Liste',
            'preview_width' => 'Bildbreite für die Vorschaubild Spalte',
            'preview_height' => 'Bildhöhe für die Vorschaubild Spalte',
        ],

    ]

];
