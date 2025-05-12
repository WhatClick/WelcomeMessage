# WelcomeMessage

## Overview
The WelcomeMessage plugin is designed for PocketMine-MP servers to display a customizable welcome message to players when they join. This plugin allows server administrators to easily configure the welcome message and personalize the player experience.

## Features
- Customizable welcome message
- Supports variable replacements such as `{player}` for the player's name and `{online}` for the number of online players
- Easy configuration through a YAML file
- Lightweight and efficient

## Installation
1. Download the WelcomeMessage plugin.
2. Place the `WelcomeMessage` folder into the `plugins` directory of your PocketMine-MP server.
3. Start or restart your server to generate the configuration file.

## Configuration
The default configuration file is located at `resources/config.yml`. You can customize the welcome message by editing this file. The default message is as follows:

```yaml
welcome_message: "Welcome to the server, {player}! There are currently {online} players online."
```

## Usage
Once the plugin is installed and configured, players will receive the welcome message upon joining the server. The message will automatically replace `{player}` with the player's name and `{online}` with the current number of online players.

## Commands
Currently, there are no commands associated with this plugin. All configuration is done through the `config.yml` file.

## Support
For any issues or feature requests, please open an issue on the plugin's repository. Contributions are welcome!

## License
This project is licensed under the MIT License. See the LICENSE file for more details.
