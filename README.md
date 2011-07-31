# About
This module integrates [Twilio](http://www.twilio.com/) in [Magento](http://www.magentocommerce.com/). This module allows Magento customers to call customer support number directly from their browser.

# Installation
To install the module, simply copy the contents of this repository to the root directory of your Magento installation

# Configuration
After the module has been installed, make sure to reload Magento's cache from the administrative interface. After reloading the cache, you should see "Twilio" section in the "Services" menu group of the configurations screen of the admin area.

* Goto System > Configuration from the top navigation menu.
* Click "Twilio" under "Services" group in the left menu bar.
* Fill in your Twilio AccountSid and AuthToken.
* Press "Save" and wait for the green confirmation box.

Now you should be able to pick a Twilio application that the browser client will be using in the "Contacts" section of the admin menu.

* Navigate to the main configuration area like in previous steps.
* Click "Contacts" under "General" group in the left menu bar.
* Unfold "Twilio Customer Service Calls" section.
* Pick a Twilio application from the dropdown.
* Pick a caller id from the dropdown.
* Specify customer service phone number that Twilio will connect your customers with.

> NOTE: if you can't find an Application or a Caller id to use, make sure that you have them created in your Twilio account's dashboard.

# Usage

After the previous steps have been completed, a customer section will be added to right column of the home page screen, feel free to move it to correct location and style it properly, everything is done using Magento templating system.

# Contributing

This is an alpha stability project and will definitely have bugs. Use GitHub issues to report any and feel free to fork the project and submit pull requests upstream, I'm usually pretty responsive.