# Small Gallery
> Simple photo gallery plugin


## Installation

**GitHub** clone into `/plugins` dir:

```sh
git clone https://github.com/jan-vince/smallgallery.git
```

**OctoberCMS backend**

Just look for 'Small Gallery' in search field in:
> Settings > Updates&Plugins > Install plugins

### Permissions

You can set permissions to access each of a plugin parts.

## Settings

First you should set up which fields will be visible in gallery form. Go to ````Settings > Gallery```` and check/uncheck available fields.

You can also set galleries list preview image height and width.


## Galleries

You can create galleries and organize them in a hierarchical tree.

*There are components ready to use for galleries listing in Twig.*

### Categories

Here you can set up categories hierarchy (it is a nested tree).

*There are components ready to use for categories listing in Twig.*

### Tags

Simple list of tags that can be assigned to records.

### Attributes

If you need a specific information for your records, here you can define a name of an attribute and it's type (string, text, number, switch).

If Attributes are allowed in Records list, you can select an attribute and add a custom content to it.

#### Access attributes in Twig

If you assigned one or more attributes to any record, you can iterate through them with Twig code like:

````
{% for attribute in record.attributes %}

    {{ attribute.name }} : {{ attribute.value }}

{% endfor %}
````
Or there are functions to get a specific attribute (or attribute's value) by slug like:
````

    {{ record.getAttributeBySlug('my-attribute-slug') }}

    {{ record.getAttributeValueBySlug('my-attribute-slug') }}

````


## Components

### Galleries

You can add a Galleries component to a page, layout or partial.

#### Gallery detail

You can add a gallery detail to your page, layout or partial.



----
> Special thanks goes to:    
> [OctoberCMS](http://www.octobercms.com) team members and supporters for this great system.
> [Igor Ovsyannykov](https://unsplash.com/@igorovsyannykov) for his photo I have used in the plugin banner.
> [Font Awesome](http://www.fontawesome.io) for Camera symbol.


Created by [Jan Vince](http://www.vince.cz), freelance web designer from Czech Republic.