<?php
    class Config {

        // General settings
        const LOADER_ENABLED = false;
        const PARTICLES_ENABLED = true;
        const BACKGROUND_ENABLED = false;
        const THEME_PICKER_ENABLED = true;
        const NAME = 'Minecraft Server';
        const IP = 'mc.hypixel.net';
        const PORT = '25565';
        const TITLE_ENABLED = false;
        const TITLE = "Minecraft Server";
        const LOGO_ENABLED = true;
        const LOGO = './img/logo.png';
        const BACKGROUND_IMAGE = './img/background.jpg';
        const TICKER_ROTATION_SPEED = 3000;

        // Announcements
        const ANNOUNCEMENTS_ENABLED = true;
        const ANNOUNCEMENTS_TYPE = 1; // Only 1 available as of yet.
        const ANNOUNCEMENTS = [
            "Hi, I am the first announcement!", 
            "I am the second announcement!", 
            "And I'm the third announcement!"
        ];

        // Rotating messages
        const TICKER_ENABLED = true;
        const IP_BOX_ENABLED = true;
        const TICKER_MESSAGES = [ // Variables: {players-online}, {players-max}, {version}
            'Currently {players-online} out of {players-max} online!', 
            'Version: {version}',
        ];

        // Menu
        const MENU_TYPE = 2;  // 1 - ICON, 2 - IMAGE.
        const MENU_ANIMATIONS = true;
        const MENU_HOVER_ANIMATION = 1;
        const MENU = [
            'forums' => [
                'url' => '/forums.php', // Button url
                'icon' => 'fas fa-book-open', // Icon from fontawesome.com
                'image' => 'forums.png', // Place image in the 'img' folder
            ],
            'store' => [
                'url' => '/store.php',
                'icon' => 'fas fa-shopping-cart',
                'image' => 'store.png',
            ],
            'vote' => [
                'url' => '/vote.php',
                'icon' => 'fas fa-poll',
                'image' => 'vote.png',
            ],
            'bans' => [
                'url' => '/bans.php',
                'icon' => 'fas fa-gavel',
                'image' => 'bans.png',
            ],
        ];

        // Footer settings
        const FOOTER_ENABLED = true;
        const SOCIALS_ENABLED = true;
        const FOOTER_TRADEMARK_ENABLED = true;
        const FOOTER_TRADEMARK = '&copy; My Minecraft Server 2022, All Rights Reserved. Not affiliated with Mojang.';
        const FOOTER_TYPE = 2; // 1-3 available as of yet.
        const SOCIALS = [
            'youtube' => [
                'url' => 'https://youtube.com',
                'icon' => '<i class="fab fa-youtube"></i>',
            ],
            'twitter' => [
                'url' => 'https://twitter.com',
                'icon' => '<i class="fab fa-twitter"></i>',
            ],
            'discord' => [
                'url' => 'https://discord.gg',
                'icon' => '<i class="fab fa-discord"></i>',
            ],
        ];
    }