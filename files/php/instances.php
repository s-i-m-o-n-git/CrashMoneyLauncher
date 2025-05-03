<?php
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
        "ip" => "163.5.107.48",
        "port" => 25500
    )
));
?>
