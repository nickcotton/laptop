echo "Installing PHP with Apache and MySQL..."
  brew tap josegonzalez/homebrew-php
  brew install php53
  #curl -O https://raw.github.com/ampt/homebrew/php/Library/Formula/php.rb
  #mv php.rb `brew --prefix`/Library/Formula
  #brew install php --with-intl --with-readline --with-mysql --with-apache
  #echo 'export PATH='`brew --prefix php`'/bin:$PATH' >> .bash_profile

#echo "Installing XDebug..."
#  brew install xdebug

#echo "Installing Composer (PHP package manager)..."
#  
#  brew install josegonzalez/php/composer

echo "Updating httpd.conf..."
  /usr/bin/env ruby <<-EORUBY
  file_name = '/etc/apache2/httpd.conf'
  text = File.read(file_name)
  replace = text.gsub!(/#?LoadModule\s+php5_module.*?$/, 'LoadModule php5_module /usr/local/Cellar/php53/5.3.14/libexec/apache2/libphp5.so')
  File.open(file_name, "w") { |file| file.puts replace }
  EORUBY
