str to upper as a service
======

Simple service to convert to upper one string.

## install vendors

```
composer install
```

## run server

```
php -S 0.0.0.0:8080 -t www
```

## run the service form command line

```
echo hola | curl -d @- localhost:8080
```

convert file contents to uppercase

```
cat myFile.txt | curl -d @- localhost:8080 > out.txt
```

