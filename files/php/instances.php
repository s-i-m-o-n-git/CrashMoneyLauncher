<?php
if (!isset($instance['1.8.9'])) $instance['1.8.9'] = [];

$instance['1.8.9'] = array_merge($instance['1.8.9'], array(
    "loadder" => array(
        "minecraft_version" => "1.8.9",
        "loadder_type" => "forge",
        "loadder_version" => "latest"
    ),
    "verify" => true,
    "ignored" => array(
        'config',
        'essential',
        'logs',
        'resourcepacks',
        'saves',
        'screenshots',
        'shaderpacks',
        'W-OVERFLOW',
        'options.txt',
        'optionsof.txt'
    ),
    "whitelist" => array(),
    "whitelistActive" => false,
    "status" => array(
        "nameServer" => "Hypixel",
        "ip" => "mc.hypixel.net",
        "port" => 25565
    )
));

if (!isset($instance['CrashMoney'])) $instance['CrashMoney'] = [];

$instance['CrashMoney'] = array_merge($instance['CrashMoney'], array(
    "loadder" => array(
        "minecraft_version" => "1.12.2",
        "loadder_type" => "forge",
        "loadder_version" => "1.12.2-14.23.5.2860"
    ),
    "verify" => false,
    "ignored" => array(),
    "whitelist" => array(),
    "whitelistActive" => false,
    "status" => array(
        "nameServer" => "CrashMoney",
        "ip" => "mchub.com",
        "port" => 25565
    )
));
?>
