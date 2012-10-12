echo "Installing XDebug..."
  brew install josegonzalez/php/php53-xdebug

echo "Installing Composer (PHP package manager)..."
  brew install josegonzalez/php/composer

echo 'export PATH="$(brew --prefix josegonzalez/php/php53)/bin:$PATH"' >> .bash_profile