<p align="center"><img src="public/img/lartisan_logo.png" width="400" height="61"></p>

# Lartisan-starter - A starter dashboard for Laravel

![Product Image](/public/img/screens/dashboard.png)

Tailwind CSS & Alpine JS Admin Dashboard built for Laravel Framework 7.0 and up fully functional auth.

## Installation

1. `cd` into your sites folder.
2. In your terminal type `git clone https://github.com/lartisan/lartisan-starter.git`.
3. After cloning the repository, in your terminal, type `php artisan composer install` followed by `npm install && npm run dev`.
4. Create the `.env` file (`cp .env.example .env` followed by `php artisan key:generate`).
5. Finished, you're all set. Have fun!

## Usage

Register as a new user or log in using the default user: **admin@example.com** with the password: **password123**

Make sure to run `php artisan migrate --seed` for the above credentials to be available.

## Demo

| Login                                                                         | Register                                                                               | Profile                                                                             |
| ----------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- |
| [![Login](/public/img/screens/login.png)](https://starter.lartisan.dev/login) | [![Register](/public/img/screens/register.png)](https://starter.lartisan.dev/register) | [![Profile](/public/img/screens/profile.png)](https://starter.lartisan.dev/profile) |

| Form Example                                                                 | Table Example                                                                     |
| ---------------------------------------------------------------------------- | --------------------------------------------------------------------------------- |
| [![Login](/public/img/screens/form.png)](https://starter.lartisan.dev/forms) | [![Register](/public/img/screens/table.png)](https://starter.lartisan.dev/tables) |

| Entypo+                                                                                 | Heroicons UI                                                                                 | Zondicons                                                                                 |
| --------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- |
| [![Entypo+](/public/img/screens/entypo.png)](https://starter.lartisan.dev/entypo-icons) | [![Heroicons UI](/public/img/screens/heroicons.png)](https://starter.lartisan.dev/heroicons) | [![Zondicons](/public/img/screens/zondicons.png)](https://starter.lartisan.dev/zondicons) |

## License

The lartisan-starter theme is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
