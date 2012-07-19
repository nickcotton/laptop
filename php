echo "Installing PHP with Apache and MySQL..."
  curl -O https://raw.github.com/ampt/homebrew/php/Library/Formula/php.rb
  mv php.rb `brew --prefix`/Library/Formula
  brew install php --with-intl --with-readline --with-mysql --with-apache
  echo 'export PATH='`brew --prefix php`'/bin:$PATH' >> .bash_profile

echo "Installing XDebug..."
  brew install xdebug

echo "Installing Composer (PHP package manager)..."
  brew tap josegonzalez/homebrew-php
  brew install josegonzalez/php/composer