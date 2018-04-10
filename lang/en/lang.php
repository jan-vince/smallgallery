<?php return [
    'plugin' => [
        'name' => 'Small gallery',
        'name_short' => 'Gallery',
        'name_original' => 'Small gallery',
        'description' => 'Simple gallery plugin',
    ],

    'common' => [

        'import' => 'Import',
        'export' => 'Export',
        'edit' => 'Edit',
        'desc' => 'Descending',
        'asc' => 'Ascending',

        'menu' => [
            'galleries' => 'Galeries',
            'gallery' => 'Gallery',
        ],

        'tabs' => [
            'info' => 'Info',
            'images' => 'Images',
            'content' => 'Content',
            'fields' => 'Fields',
            'notes' => 'Notes',
            'tags' => 'Tags',
            'attributes' => 'Attributes',
            'attachments' => 'Attachments',
            'secondary_categories' => 'Categories',
            'testimonials' => 'Testimonials',
            'content_blocks' => 'Content blocks',
            'records' => 'Records',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'slug' => 'Slug',
            'active' => 'Active',
            'favourite' => 'Favourite',
            'date' => 'Date',
            'url' => 'URL',
            'description' => 'Description',
            'content' => 'Content',
            'preview_image' => 'Preview image',
            'preview_image_media' => 'Preview image (from Media)',
            'images' => 'Images',
            'images_media' => 'Images (from Media)',
            'attached_images_count' => 'Images',
            'area' => 'List',
            'category' => 'Category',
            'category_comment' => 'You can manage items on <a href="'.Backend::url('janvince/smallgallery/categories/index').'">Categories page</a>',
            'tags' => 'Tags',
            'attributes' => 'Attributes',
            'files' => 'Files',
            'categories' => 'Categories',
            'repeater' => 'Information',
            'repeater_prompt' => 'Add new record ...',
            'testimonials' => 'Testimonials',
            'testimonials_prompt' => 'Add new record ...',
            'created_at' => 'Created',
            'updated_at' => 'Updated',
            'sort_order' => 'Custom order',
        ],

        'fields' => [
            'empty_option' => 'Not selected ...',
        ],

        'buttons' => [
            'reorder' => 'Reorder',
            'back_to_list' => 'Back to list',
            'create_and_new' => 'Create and NEW',
            'update_and_new' => 'Save and NEW',
            'return' => 'Return'
        ],

        'import_settings' => [
            'truncate_table' => 'Empty table before import',
            'truncate_table_description' => 'Delete all categories and reset autoincrement',
            'delete_relations' => 'Delete records relations to categories',
            'delete_relations_description' => 'Delete all record\'s relations to categories',
        ],

    ],

    'galleries' => [
        'menu_label' => 'Galleries',
        'return_to_galleries' => 'Return to Galleries',
        'reordering_description' => 'Use "Custom order" in components\'s sorting option.',
        'reorder' => 'Custom order',
    
        'columns' => [
            'allowed_fields' => 'Allowed fields',
            'allowed_fields_comment' => 'Checked fields will be visible in gallery editing form. This list is long so scroll down! <br><em>Some field will be visible after you create a record (they are dependent on gallery\'s ID)!</em>',
        ],
        'images_media' => [
            'image' => 'Image',
            'title' => 'Title',
            'description' => 'Description',
        ],

        'repeater' => [
            'repeater_prompt' => 'Add item ...',
            'value1' => 'Value 1',
            'value2' => 'Value 2',
            'value3' => 'Value 3',
            'value4' => 'Value 4',
            'text' => 'Text',
        ],

        'testimonials' => [
            'title' => 'Title',
            'image' => 'Image',
            'author' => 'Author',
            'date' => 'Date',
            'content' => 'Content',
        ],

        'content_blocks' => [
            'title' => 'Title',
            'subtitle' => 'Subtitle',
            'image' => 'Image',
            'author' => 'Author',
            'date' => 'Date',
            'content' => 'Content',
            'preview_image' => 'Preview image',
            'description' => 'Description',
            'code' => 'Code',
            'disable' => 'Disable',
            'favourite' => 'Favourite',
        ],

        'scoreboard' => [
            'records_count' => 'Records count',
            'records_active' => 'Active',
            'records_hidden' => 'Hidden',
            'records_favourite' => 'Favourite',
            'records_common' => 'Common',
            'latest_record' => 'Latest',
            'latest_record_date' => 'Created: ',
            'active_area' => '{0} records in|{1} record in|[2,Inf[ %count% records in',
        ]

    ],

    'categories' => [
        'menu_label' => 'Categories',
        'category' => 'Category',
        'new_category' => 'New category',
        'return_to_categories' => 'Return to Categories',
        'category' => 'Category',
        'secondary_categories' => 'More categories',

        'columns' => [
            'main_category' => 'Category',
            'parent' => 'Parent category',
            'parent_comment' => 'You can change hierarchy and order on <a href="'.Backend::url('janvince/smallgallery/categories/reorder').'">Reorder page</a>',
        ],

        'tabs' => [
            'secondary_categories' => 'Secondary categories',
            'secondary_categories_comment' => 'Records can have one main category and many secondary categories',
        ]

    ],

    'attributes' => [
        'menu_label' => 'Attributes',
        'new_attribute' => 'New attribute',
        'attribute' => 'Attribute',
        'return_to_attributes' => 'Return to Attributes',

        'columns' => [
            'name' => 'Name',
            'slug' => 'Slug',
            'value_text' => 'Text',
            'value_number' => 'Number',
            'value_boolean' => 'State',
            'value_switch' => 'Switch (Yes/No)',
            'value_type' => 'Type of value data',
            'value_type_comment' => 'Based on selected data type, correct input field will be shown in relation form',
            'value_string' => 'String',
        ],

        'tabs' => [
            'attributes' => 'Attributes',
            'attributes_comment' => 'You can assign attributes and add their values',

        ],


    ],

    'tags' => [
        'menu_label' => 'Tags',
        'return_to_tags' => 'Return to Tags',
        'new_tag' => 'New Tag',
        'tag' => 'Tag',
        'reorder' => 'Reorder',

        'columns' => [
            'name' => 'Name',
            'slug' => 'Slug',
            'description' => 'Description',
            'value' => 'Value',
            'icon' => 'Icon',
        ],

        'tabs' => [
            'tags' => 'Tags'
        ]

    ],

    'forms' => [
        'reorder' => 'Reorder',
        'delete_attached_images' => 'Delete all attached images',
        'delete_attached_images_confirm' => 'Really delete all attached images on tab Images?',
        'deleting_attached_images' => 'Deleting all attached images ...',
    ],

    'components' => [

        'galleries' => [
            'name' => 'Galleries',
            'description' => 'Get galleries list',

            'properties' => [
                'category' => 'Category slug',
                'category_description' => 'Category slug (dynamic like :category or manually entered)',
                'tag' => 'Tag slug',
                'tag_description' => 'Tag slug (dynamic like :tag or manually entered)',
                'active_only' => 'Active records only',
                'active_only_description' => 'Get only active records (unchecked will get all records)',
                'favourite_only' => 'Favourite records only',
                'favourite_only_description' => 'Get only favourite records (unchecked will get all records)',
                'detail_page_slug' => 'Detail page slug',
                'detail_page_slug_description' => 'Enter a slug of CMS page where you want to render a record\'s details',
                'detail_page_param' => 'Parameter used on detail page',
                'detail_page_param_description' => 'Enter a URL parameter name used on record detail page (eg. "slug" when URL is /records/detail/:slug)',
                'sort_by' => 'Sort by',
                'sort_by_direction' => 'Sort direction',
                'allow_limit' => 'Limit number or records',
                'allow_limit_description' => 'If checked, only required number of records will be returned',
                'limit' => 'Records count',
                'limit_description' => 'How many records will be returned',

                'groups' => [
                    'links' => 'Links',
                    'sort' => 'Sorting',
                    'limit' => 'Limit',
                ],

            ],

        ],

        'gallery' => [
            'name' => 'Gallery',
            'description' => 'Get one specific record',

            'properties' => [
                'gallery_slug' => 'Gallery slug',
                'gallery_slug_description' => 'Enter a slug of specific gallery',
                'throw404' => '404 error on invalid slug',
                'throw404_description' => 'Return 404 error when slug is invalid',
            ],

        ],

        'categories' => [
            'name' => 'Categories',
            'description' => 'Get categories of records',

            'properties' => [
                'area' => 'Only with records in list',
                'area_description' => 'Select only categories with records in this list',
                'root_only' => 'Root categories only',
                'root_only_description' => 'Return only root categories',
                'area_id_empty_option' => '-- Do not limit to --',
            ],

        ],

        'category' => [
            'name' => 'Category',
            'description' => 'Get one specific category',

            'properties' => [
                'throw404' => '404 error on invalid slug',
                'throw404_description' => 'Return 404 error when slug is invalid',
            ],

        ],


    ],

    'permissions' => [
        'tab_name' => 'Small records permissions',
        'access_areas' => 'Access Lists',
        'access_area' => '> Access to list ',
        'access_records' => 'Access Records',
        'access_categories' => 'Access Categories',
        'access_attributes' => 'Access Attributes',
        'access_settings' => 'Access Settings',
        'access_tags' => 'Access Tags',
        'access_denied' => 'Access denied',
    ],

    'settings' => [
        'main_section' => 'Small records settings',
        'main_section_comment' => 'Some settings for Small records plugin',

        'tabs' => [
            'lists' => 'Lists',
            'connections' => 'Connections',
        ],

        'fields' => [
            'preview_width' => 'Image width for Preview image column',
            'preview_height' => 'Image height for Preview image column',
            'connections_section_blog' => '(Rainlab) Blog',
            'connections_section_pages' => '(Rainlab) Static pages',
            'allow_records_in_blog_posts' => 'Allow records in Blog posts',
            'allow_records_in_blog_posts_comment' => 'Show records list in blog posts (Rainlab.Blog plugin must be installed)',
            'allow_records_in_blog_posts_area' => 'Show records from List',

            'allow_records_in_pages' => 'Allow records in Static pages',
            'allow_records_in_pages_comment' => 'Show records list in static page (Rainlab.Pages plugin must be installed)',
            'allow_records_in_pages_area' => 'Show records from List',
        ],

    ]

];
