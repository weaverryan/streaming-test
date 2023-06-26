# Streaming Example

```
git clone git@github.com:weaverryan/streaming-test.git
cd streaming-test
composer install
symfony serve
```

Then head to https://127.0.0.1:8000/

Currently, the server waits 5 seconds before fully returning the response. If
the built-in web server is started with `php -S`, the response is streamed
with one message each second.
