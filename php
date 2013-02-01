#!/bin/sh

echo "Installing PHP..."
  brew tap josegonzalez/homebrew-php
  
  # Got this error, following command had it sorted.
  # Error: No available formula for zlib (dependency of php53)
  # Please tap it and then try again: brew tap homebrew/dupes
  brew tap homebrew/dupes

  brew install php53 --with-mysql --with-intl

  # icu4c is broken as of mxcl/homebrew#03ed757c, so you will need to install intl as a separate extension:
  brew install php53-intl

echo "Installing XDebug..."
  brew install josegonzalez/php/php53-xdebug

echo "Installing Composer (PHP package manager)..."
  brew install josegonzalez/php/composer

echo 'export PATH="$(brew --prefix josegonzalez/php/php53)/bin:$PATH"' >> .path