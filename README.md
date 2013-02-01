Laptop
======

Laptop is a script to set up your Max OS X laptop as a web development machine.

Requirements
------------

* Set up dotfiles first, create ~/.path
* OSX Mountain Lion (This is what I'm using so it's the only version I'm targeting, sorry)
* XCode 4.4 - remember to launch XCode and install the command line tools from within prefs. Otherwise rvm will complain that there is `no acceptable C compiler found in $PATH`.
* [X11](http://xquartz.macosforge.org/trac/wiki)
* [MySQL](http://www.mysql.com/downloads/mysql/)

If you don't want to get XCode you can try getting the [Command Line Tools for Mountain Lion](http://adcdownload.apple.com/ios/ios_simulator__resigned/cltools_mountainliondp2_march12.dmg) but your milage may vary. You're better off just getting XCode.


Install
-------

Run the script:

    curl -s https://raw.github.com/nickcotton/laptop/master/install | sh

What it sets up
---------------

* SSH public key (for authenticating with services like Github and Heroku)
* Homebrew (for managing operating system libraries)
* Git
* Git Flow
* PhantomJS (For headless JavaScript testing)
* Ack (for finding things in files)
* ImageMagick (for cropping and resizing images)
* RVM (for managing versions of the Ruby programming language)
* Ruby language (for writing general-purpose code)
* Bunch of commonly used gems (Sass, Compass, Stitch etc...)
* Node (The awesome Javascript runtime)
* NPM (Node package manager)
* Coffeescript
* Bunch of commonly-used node packages
* PHP, Composer and xdebug (https://github.com/josegonzalez/homebrew-php)

It should take about 30 minutes for everything to install, depending on your machine.

What it doesn't setup
---------------------

* MySQL
* Apache
* Enabling PHP in Apache
* Setting up VirtualHosts
* Apps

The installer doesn't do these things because it's a) Already installed in MacOSX by default or b) It needs admin rights. 

Setting up Apache
-----------------

Find this line in `/etc/apache2/httpd.conf` starting with:

    LoadModule php5_module /some/path

And replace the path with:

    LoadModule php5_module /usr/local/Cellar/php53/5.3.14/libexec/apache2/libphp5.so
    
Add this line to the bottom of the file:

    Include /private/etc/apache2/extra/httpd-vhosts.conf

Setting up x-debug
------------------

The php.ini file is located in `/usr/local/etc/php/5.3/php.ini`. You'll need to add these settings to the bottom 
of the file and restart Apache.

```
[xdebug]
zend_extension=/usr/local/Cellar/php53-xdebug/2.2.0/xdebug.so
xdebug.file_link_format="txmt://open?url=file://%f&line=%1"
xdebug.default_enable=1
xdebug.scream=1
xdebug.cli_color=1
xdebug.max_nesting_level = 200

xdebug.overload_var_dump=1
xdebug.var_display_max_depth=6
xdebug.var_display_max_data=2048
var_display_max_children=256

xdebug.profiler_enable_trigger = 1

xdebug.remote_enable=1
xdebug.remote_handler=dbgp
xdebug.remote_port=9000
xdebug.remote_host=localhost
xdebug.remote_autostart=1
xdebug.idekey=XDEBUG_ECLIPSE
xdebug.extended_info=1
```

Virtual Hosts
-------------

I use [VirtualHostX](http://clickontyler.com/virtualhostx/) for all of my VirtualHost needs.

Recommended Apps
----------------

* [Chrome Canary](https://tools.google.com/dlpage/chromesxs/)
* [Chrome](https://www.google.com/chrome/)
* [Firefox](http://www.mozilla.org/en-US/firefox/new/)
* [Sublime Text 2](http://www.sublimetext.com/)
* [Gitbox](http://www.gitboxapp.com/)
* [VirtualHostX](http://clickontyler.com/virtualhostx/)
* [Sequel Pro](http://www.sequelpro.com/)

Setting up Sublime Text 2
-------------------------

First, install the package manager:

    import urllib2,os; pf='Package Control.sublime-package'; ipp=sublime.installed_packages_path(); os.makedirs(ipp) if not os.path.exists(ipp) else None; urllib2.install_opener(urllib2.build_opener(urllib2.ProxyHandler())); open(os.path.join(ipp,pf),'wb').write(urllib2.urlopen('http://sublime.wbond.net/'+pf.replace(' ','%20')).read()); print 'Please restart Sublime Text to finish installation'

* [Tomorrow theme](https://github.com/ChrisKempson/Tomorrow-Theme).
* [Soda UI theme](https://github.com/buymeasoda/soda-theme/)

Here are some [recommended packages](http://anthonyshort.me/2012/03/setting-up-sublime-text-2-for-frontend-development).

