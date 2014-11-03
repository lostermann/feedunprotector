Feed Unprotector 1.0
===============

PHP Script to mirror a .htaccess-protected podcast feed but remove the protection.

Requirements
----------------
* Apache Webserver with .htaccess Capability
* PHP 5.3 or newerver installed

How it works
----------------
Feed Unprotector takes an .htaccess-protected Feed and repliactes it on-demand on your server, effectively removing the protection. Wy is this useful? Good point! Well, I wrote this becuase the iOS Podcast application does not support protected feeds and I have a few protected podcast feeds I like to listen to and pay for. So, I decided to have my webserver replicate the feed and the MP3 files, providing me with a nice Podcast experience on iOS (and iTunes on the Mac as well, as all my playstates, etc. are now synchronized).

How to setu it up
----------------
* Copy all the files into a directory on your webserver. We will call it /feedup for now.
* Open settings.php and fill in the placeholders with the strings pertaiing to your desired feed to unprotect on the left and the URLs of your webserver, where the feed is replicated on the right.
* Subscribe to YOUR_HOST/feedup in iOS Podcast or iTunes, or whatever your podcatcher may be.

Contact
----------------
If you have questions or comments or need help setting this up, do not hesitate to contact me at gibthub@ostyonline.com