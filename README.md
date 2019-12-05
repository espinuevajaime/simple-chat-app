# Laravel Chat App Sample

## Features

- Who is online
- Delete message history
- Block/Unblock user
- Realtime update chat
- User typing
- User message read time
- User message sending time

## Installation

- `git clone composer https://github.com/espinuevajaime/simple-chat-app.git`
- `cd simple-chat-app && composer i && cp .env.example .env `
- Edit `.env` and set your database connection details
- Edit `.env` and set your pusher connection key `https://dashboard.pusher.com/apps/yourId/keys`)
- (When installed via git clone or download and make .env, run `php artisan key:generate` 
- `php artisan migrate:fresh --seed `
- `php artisan key:generate`
- `php artisan serve` open `http://127.0.0.1:8000`
- You can login - email :`test@mail.com` password :`password1234`

## Usage

#### Development
resources/js/components/ChatComponent.vue
resources/js/components/MessageComponent.vue

#### serve with hot reloading
npm run watch


## Pusher

Pusher `https://pusher.com/`  empowers developers with APIs to create collaboration & communication features in their web and mobile apps. 

Edit `.env` and set `PUSHER_APP_ID` `PUSHER_APP_KEY`  `PUSHER_APP_SECRET`  `PUSHER_APP_CLUSTER` 


