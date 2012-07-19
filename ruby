#!/bin/sh

echo "Installing Ruby 1.9.3 stable and making it the default Ruby ..."
  rvm install 1.9.3
  rvm use 1.9.3 --default

echo "Installing bundler for handling dependencies..."
  gem install bundler --no-rdoc --no-ri

echo "Installing guard for watching files for changes..."
  gem install guard --no-rdoc --no-ri

echo "Installing KSS for generating styleguides..."
  gem install kss --no-rdoc --no-ri

echo "Installing rake..."
  gem install rake --no-rdoc --no-ri

echo "Installing latest version of Sass..."
  gem install sass --pre --no-rdoc --no-ri

echo "Installing latest version of Compass..."
  gem install compass --pre --no-rdoc --no-ri

echo "Installing latest version of Stitch for Compass..."
  gem install stitch --pre --no-rdoc --no-ri

echo "Installing Sinatra for running tiny Ruby apps..."
  gem install sinatra --no-rdoc --no-ri

echo "Installing Rails to write and run web applications ..."
  gem install rails --no-rdoc --no-ri