# Cavaon Puhser Application Example

This application require your Cavaon Pusher server is running, and using [Cavaon Pusher SDK](https://github.com/cavaon-wayne/pusher-php-client).

No database is required.

No queue drive is required.

## config

```env
PUSHER_KEY='any-dumpy-text'
PUSHER_SECRET='YOUR SECRET ASSIGNED'
PUSHER_APP_ID='YOUR APP ID ASSIGNED'
PUSHER_HOST="http://example.cavaon-pusher-server.com.au"
PUSHER_HOST_PORT=37037
```

## Introduction

Client:  `http://localhost/client`

Open you Chrome developer tools > "Network" > "WS" and you will see there are two connciton is opening.

Then go to following firing URL, and you can notice the change on the page, also the information logged in the console.

Fire method 1: `http://localhost/fire`

Fire method 2: `http://localhost/fire2`
