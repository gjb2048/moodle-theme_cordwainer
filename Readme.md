Introduction
============
Theme developers theme to assist with the customisation of the Bootstrap theme.  Using such tools as
desired as:

FireFox(http://www.mozilla.org/firefox/) with
FireBug(http://getfirebug.com/) and
FireLess(https://addons.mozilla.org/en-us/firefox/addon/fireless/).

NOT for use in production environments.

Required version of Moodle
==========================
This version works with Moodle version 2013040500.00 release 2.5beta+ (Build: 20130405) and above until the next release.

NOTE: This is a pre-release Moodle 2.5 Beta version that must NOT be used on production servers.  It is subject to change
at any time without notice.

Installation
============
 1. Ensure you have the version of Moodle as stated above in 'Required version of Moodle'.  This is essential as the
    theme relies on underlying core code that is out of my control.
 2. Ensure that you have the Bootstrap theme installed in '/theme/bootstrap', otherwise download from
    https://moodle.org/plugins/view.php?plugin=theme_bootstrap then install.
 3. Copy 'cordwainer' to '/theme/' if you have not already done so.
 4. Login as an administrator and follow standard the 'plugin' update notification.  If needed, go to
    'Site administration' -> 'Notifications' if this does not happen.
 5. Select as the theme for the site.

Uninstallation
==============
1. Change the theme to another theme of your choice.
2. In '/theme/' remove the folder 'cordwainer'.

Known Issues
============
1.  Background images do not display because the 'Less' css files are generated at the client end and
    thus not subject to the css pre-processing.  This should not be a big issue as the primary function
    of this theme is investigatory adapation of the Bootstrap theme.

Reporting Issues
================
Before reporting an issue, please ensure that you are running the latest version for your release of Moodle.  It is essential
that you are operating the required version of Moodle as stated at the top - this is because the theme relies on core
functionality that is out of its control.

I operate a policy that I will fix all genuine issues for free.  Improvements are at my discretion.  I am happy to make bespoke
customisations / improvements for a negotiated fee. 

When reporting an issue you can post in the theme's forum on Moodle.org (currently 'moodle.org/mod/forum/view.php?id=46')
or contact me direct (details at the bottom).

It is essential that you provide as much information as possible, the critical information being the contents of the format's 
version.php file.  Other version information such as specific Moodle version, theme name and version also helps.  A screen shot
can be really useful in visualising the issue along with any files you consider to be relevant.

Version Information
===================
19th October 2013 - Version 2.5.0.2 - Beta.
  1.  Update to stable version of Moodle 2.5.
  2.  Update to new 'columnX.php' layouts.

22nd April 2013 - Version 2.5.0.1
  1.  Initial version for Moodle 2.5beta.

Thanks
======
My thanks go to all the creators and participants of the Bootstrap theme:
Bas Brands, David Scotson, Stuart Lamour, Mark Aberdour, Paul Hibbitts and Mary Evans.

Me
==
G J Barnard MSc. BSc(Hons)(Sndw). MBCS. CEng. CITP. PGCE. - 22nd April 2013.
Moodle profile: http://moodle.org/user/profile.php?id=442195.
Web profile   : http://about.me/gjbarnard
