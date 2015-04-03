echo PHP on IIS
"C:\Program Files (x86)\IIS Express\appcmd.exe" set config /section:system.webServer/fastCGI /+[fullPath='"C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\binaries\php\php_runningversion\php-cgi.exe"']
"C:\Program Files (x86)\IIS Express\appcmd.exe" set config /section:system.webServer/handlers /+[name='PHP_via_FastCGI',path='*.php',verb='*',modules='FastCgiModule',scriptProcessor='"C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\binaries\php\php_runningversion\php-cgi.exe"',resourceType='Unspecified']
pause