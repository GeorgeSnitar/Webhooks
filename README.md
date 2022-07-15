# Setting up a webhook using ngrok
## Webhook and cURL command part
Who don't know what is a webhook follow the [link](https://getstream.io/chat/docs/php/webhooks_overview/). I set up a webhook to connect to my **telegram bot**. I used the [curl](https://curl.se/) command to configure the webhook. To be more precise, I used the [appropriate cURL](https://www.php.net/manual/ru/book.curl.php) commands for PHP.

## Ngrok
I used [ngrok](https://www.sitepoint.com/use-ngrok-test-local-site/) based on two reasons:
- I didn't want to pay for hosting
- And it's easy to set up
>With this [commands](https://ckeditor.com/docs/cs/latest/examples/webhooks/webhooks-server-php.html) ``php -S 127.0.0.1:8080, ngrok.exe http 8080 `` I got the link to my local server and added it to the link to configure the webhook.

## Telegram bot access token 
It's easy to get the access token for your bot. Steps for making that:

1. Find the botFather in telegram
2. Write /newbot
3. Enter a name for your Telegram bot 
4. Copy Telegram bot's access token

## Summary
Using all these tools I was able to setup a webhook between my local server and the telegram bot.

*Thank you for attention* 

