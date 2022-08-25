# Contact Form Package

## Complete contact form with email sending feature

### Install package via composer
<code>
    composer require utdevnp/contact
</code>

### Publish package config and views
Run 
<code>
    php artisan vendor:publish
</code>

and select <b> Utdevnp\Contact\ContactServiceProvider </b>

### This package have a two routes 
<ul>
    <li>GET / contact  - shows the contact form </li>
    <li>POST / contact  - Save contact detail in database and send message to email </li>
</ul>