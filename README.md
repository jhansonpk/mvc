# MVC

php 7.0

Estrutura

  - controllers
  - models
  - vendor
  - web | vhost deve ser apontado para o index.php desta pasta
  
  
Server, um simpels exemplo de vhost

```
<VirtualHost localhost:88>
    <Directory "__PATH__\mvc\web">
        Options +FollowSymlinks +SymLinksIfOwnerMatch
        AllowOverride All
        Require all granted
        Options Indexes FollowSymLinks

        DirectoryIndex index.php

        RewriteEngine on
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{REQUEST_FILENAME} !-d
        RewriteRule . index.php

     </Directory>
  DocumentRoot "__PATH__\mvc\web"
  ServerName mvc.local
</VirtualHost>
```