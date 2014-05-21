Utility classes
===============

**MY_Email Class**
------------------

Send e-mail only one e-mail to developer when the mail function is called on application. 
Avoid sending emails undue in the development environment.

Installation
------------

- Copy the MY_Email.php to library folder
- Set the prefix class to "MY"
$config['subclass_prefix'] = 'MY_';

Usage
-----

Use the send function normally

**MY_form_helper Class**
------------------------

Methods to help on show messages

Installation
------------

- Copy the MY_form_helper.php to helper folder

Usage
-----

$this->load->helper('form');
Current request
form_addMessageNow('My messafe' , TYPE);

Available for the next server request, and are then automatically cleared
form_addMessage('My messafe' , TYPE);

