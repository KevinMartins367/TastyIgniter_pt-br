<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$lang['migration_none_found'] = 'Nenhuma migração foi encontrada.';
$lang['migration_not_found'] = 'Nenhuma migração pode ser encontrada com o número da versão: %s.';
$lang['migration_sequence_gap'] = 'Há uma lacuna na sequência de migração perto do número da versão: %s.';
$lang['migration_multiple_version'] = 'Existem várias migrações com o mesmo número de versão: %s.';
$lang['migration_class_doesnt_exist'] = 'A classe de migração "%s" não pôde ser encontrada.';
$lang['migration_missing_up_method'] = 'A classe de migração "%s" está faltando um método "up".';
$lang['migration_missing_down_method'] = 'A classe de migração "%s" está faltando um método "down".';
$lang['migration_invalid_filename'] = 'A migração "%s" possui um nome de arquivo inválido.';
