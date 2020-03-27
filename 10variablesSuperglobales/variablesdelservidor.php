<?php
/*
 * VARIABLES DEL SERVIDOR
 *
 * Sirven para poder sacar información del servidor
 * donde tengamos corriendo nuestra web/aplicación.
 *
 * si hacemos un echo $_SERVER, obtenemos un montón de información.
 *
 *
 * por ejemplo:
 * Array ( [HTTP_HOST] => www.master.com
 *         [HTTP_CONNECTION] => keep-alive
 *         [HTTP_PRAGMA] => no-cache
 *         [HTTP_CACHE_CONTROL] => no-cache
 *         [HTTP_UPGRADE_INSECURE_REQUESTS] => 1
 *         [HTTP_USER_AGENT] => Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36
 *         [HTTP_ACCEPT] => text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,;q=0.8,application/signed-exchange;v=b3;q=0.9
 *         [HTTP_ACCEPT_ENCODING] => gzip, deflate
 *         [HTTP_ACCEPT_LANGUAGE] => es-ES,es;q=0.9,en;q=0.8,de;q=0.7
 *         [PATH] => /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/snap/bin
 *         [SERVER_SIGNATURE] =>Apache/2.4.29 (Ubuntu) Server at www.master.com Port 80
 *         [SERVER_SOFTWARE] => Apache/2.4.29 (Ubuntu)
 *         [SERVER_NAME] => www.master.com
 *         [SERVER_ADDR] => 127.0.0.2
 *         [SERVER_PORT] => 80
 *         [REMOTE_ADDR] => 127.0.0.1
 *         [DOCUMENT_ROOT] => /var/www/master
 *         [REQUEST_SCHEME] => http
 *         [CONTEXT_PREFIX] =>
 *         [CONTEXT_DOCUMENT_ROOT] => /var/www/master
 *         [SERVER_ADMIN] => webmaster@localhost
 *         [SCRIPT_FILENAME] => /var/www/master/10variablesSuperglobales/variablesdelservidor.php
 *         [REMOTE_PORT] => 58776
 *         [GATEWAY_INTERFACE] => CGI/1.1
 *         [SERVER_PROTOCOL] => HTTP/1.1
 *         [REQUEST_METHOD] => GET
 *         [QUERY_STRING] =>
 *         [REQUEST_URI] => /10variablesSuperglobales/variablesdelservidor.php
 *         [SCRIPT_NAME] => /10variablesSuperglobales/variablesdelservidor.php
 *         [PHP_SELF] => /10variablesSuperglobales/variablesdelservidor.php
 *         [REQUEST_TIME_FLOAT] => 1585246498.287
 *         [REQUEST_TIME] => 1585246498 )
 */

print_r($_SERVER) ;