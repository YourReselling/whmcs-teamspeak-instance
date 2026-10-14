<?php

declare(strict_types=1);

if (! defined('WHMCS')) {
    exit('Direct access is not permitted.');
}

require_once __DIR__.'/bootstrap.php';

use YourReselling\Whmcs\TeamspeakInstance\Integration\WhmcsModule;

/** TeamSpeak Instanz: MetaData. */
function yourresellingteamspeakinstance_MetaData(): array
{
    return ['DisplayName' => 'Your-Reselling · TeamSpeak Instanz', 'APIVersion' => '1.1', 'RequiresServer' => true];
}

/** TeamSpeak Instanz: ConfigOptions. */
function yourresellingteamspeakinstance_ConfigOptions(): array
{
    return WhmcsModule::configOptions('teamspeak_instance');
}

/** TeamSpeak Instanz: CreateAccount. */
function yourresellingteamspeakinstance_CreateAccount(array $params): string
{
    return WhmcsModule::run('teamspeak_instance', 'create', $params);
}

/** TeamSpeak Instanz: TestConnection. */
function yourresellingteamspeakinstance_TestConnection(array $params): array
{
    return WhmcsModule::testConnection($params);
}

/** TeamSpeak Instanz: ClientArea. */
function yourresellingteamspeakinstance_ClientArea(array $params): array
{
    return WhmcsModule::clientArea('teamspeak_instance', $params);
}

/** TeamSpeak Instanz: AdminCustomButtonArray. */
function yourresellingteamspeakinstance_AdminCustomButtonArray(): array
{
    return WhmcsModule::adminButtons('teamspeak_instance');
}

/** TeamSpeak Instanz: RefreshStatus. */
function yourresellingteamspeakinstance_RefreshStatus(array $params): string
{
    return WhmcsModule::run('teamspeak_instance', 'refresh', $params);
}

/** TeamSpeak Instanz: TerminateAccount. */
function yourresellingteamspeakinstance_TerminateAccount(array $params): string
{
    return WhmcsModule::run('teamspeak_instance', 'termination', $params);
}
