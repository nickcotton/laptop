echo "Installing XDebug..."
  brew install xdebug

echo "Installing Composer (PHP package manager)..."
  brew install josegonzalez/php/composer

echo "Updating httpd.conf..."
  /usr/bin/env ruby <<-EORUBY
  file_name = '/etc/apache2/httpd.conf'
  text = File.read(file_name)
  replace = text.gsub!(/#?LoadModule\s+php5_module.*?$/, 'LoadModule php5_module /usr/local/Cellar/php53/5.3.14/libexec/apache2/libphp5.so')
  File.open(file_name, "w") { |file| file.puts replace }
  EORUBY
