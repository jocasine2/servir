# php-server
Ambiente para desenvolvimento de aplicações php

# produção
https://servir.to.gov.br
https://servir.to.gov.br/wp-admin
https://servir.to.gov.br/wp-login.php

# homologação
https://servir-hom.to.gov.br
https://servir-hom.to.gov.br/wp-admin
https://servir-hom.to.gov.br/wp-login.php


# para portar o banco de dados ajuste a url
UPDATE wp_options SET option_value = replace(option_value, 'https://localhost', 'http://www.newurl') WHERE option_name = 'home' OR option_name = 'siteurl';

UPDATE wp_posts SET guid = replace(guid, 'https://localhost','http://www.newurl');

UPDATE wp_posts SET post_content = replace(post_content, 'https://localhost', 'http://www.newurl');