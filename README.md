# WSP
# WSP

För att installera..

<div> 
<li>
  <ul> apache2 </ul> 
  <ul> serverlamp^ </ul> 
</li>
</div>

sudo install apt apache2 

sudo mysql -u root

  147  mkdir puplic_html
  149  cd /etc/apache2
  157  sudo a2enmod userdir
  158  sudo service apache2 restart
  171  mv puplic_html/ public_html skriver om
  public_html ska det vara länkad /mnt/c/code (http://localhost:88/code/)
  code . (kör mappen)
  ln -s
  testa logga in på http://localhost:88/~fb/
  sudo chown fb:fb public_html/ byter berörigheter till användaren