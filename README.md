## Complete contact form with email sending feature

[![Issues](https://img.shields.io/github/issues/utdevnp/pro-contact)](https://github.com/utdevnp/pro-contact/issues)
[![Stars](https://img.shields.io/github/stars/utdevnp/pro-contact)](https://github.com/utdevnp/pro-contact)
### Install package via composer
<code>
    composer require utdevnp/contact
</code>

### Publish package config and views
Run 
<code>
    php artisan vendor:publish
</code>  and select <b> Utdevnp\Contact\ContactServiceProvider </b>

### This package have a two routes 
<ul>
    <li>GET / contact  - shows the contact form </li>
    <li>POST / contact  - Save contact detail in database and send message to email </li>
</ul>

<p>After publishing you are able to change the form design as per your requirement , You can to able to made UI validation. </p>

### How to Contribute
<ol>
  <li>Fork and edit</li>
  <li>Submit pull request for consideration</li>
</ol>

### License

[![License: GPL v3](https://img.shields.io/badge/License-GPLv3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)

### Happy Coding :smile: