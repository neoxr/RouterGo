# Go-Router
Simple PHP Router &amp; No Need Composer

## Config for .htaccess

Add this to your .htaccess 

```
RewriteEngine On
RewriteBase /
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.+)$ index.php [QSA,L]
RewriteRule ^([^\.]+)$ $1.php [NC,L]
```

## Config for lighttpd.conf

Add this to your lighttpd.conf


```
url.rewrite-once = (
".*\?(.*)$" => "/index.php?$1", 
".*\.(php|ttf|otf|js|eot|woff2|woff|svg|ico|gif|jpg|png|css|html)$" => "$0", 
"" => "/index.php",
)
```

## How to use

default index


```
go('/', function() {
   ... your code
}
```

and other page 


```
go('/about', function() {
   ... your code
}

go('/article/id/1', function() {
   ... your code
}
```
