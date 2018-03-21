<?php defined('BASEPATH') OR exit('No direct script access allowed');

$lang['text_title'] 		            = 'Manutenção de banco de dados';
$lang['text_heading'] 		            = 'Manutenção de banco de dados';
$lang['text_backup_heading'] 		    = 'Backup do banco de dados';
$lang['text_browse_heading'] 		    = 'Procurar banco de dados: %s';
$lang['text_list'] 		                = 'Lista de manutenção de banco de dados';
$lang['text_tab_backup'] 		        = 'Backup';
$lang['text_tab_existing_backup'] 		= 'Backups existentes';
$lang['text_tab_migrations'] 		    = 'Migrações';
$lang['text_tab_create_backup'] 		= 'Criar um novo Backup';
$lang['text_empty'] 		            = 'Não há backups disponíveis.';
$lang['text_no_backup'] 		        = 'Não há backups disponíveis.';
$lang['text_no_row'] 		            = 'Há não há registros disponíveis para esta tabela.';
$lang['text_installed_version'] 		= 'Versão instalada';
$lang['text_latest_version'] 		    = 'Versão mais recente disponível';
$lang['text_select_version'] 		    = 'Selecione a versão do arquivo';
$lang['text_zip'] 		                = 'zip';
$lang['text_gzip'] 		                = 'gzip';
$lang['text_drop_tables'] 		        = 'Adicione a instrução DROP TABLE:';
$lang['text_add_inserts'] 		        = 'Adicione a instrução INSERT para DUMP de dados:';

$lang['button_backup'] 		            = 'Backup';
$lang['button_migrate'] 		        = 'Migrar';
$lang['button_modules'] 		        = 'Módulos';

$lang['column_select_tables'] 		    = 'Selecione as tabelas para backup';
$lang['column_records'] 		        = '# Registros';
$lang['column_data_size'] 		        = 'Tamanho dos dados';
$lang['column_index_size'] 		        = 'Tamanho do índice';
$lang['column_data_free'] 		        = 'Dados livres';
$lang['column_engine'] 		            = 'Motor';
$lang['column_name'] 		            = 'Nome';
$lang['column_download'] 		        = 'Download';
$lang['column_restore'] 		        = 'Restauração';
$lang['column_delete'] 		            = 'Excluir';

$lang['label_file_name'] 		        = 'Nome do arquivo';
$lang['label_drop_tables'] 		        = 'Drop Tables';
$lang['label_add_inserts'] 		        = 'Inserir dados';
$lang['label_compression'] 		        = 'Formato de compressão';
$lang['label_backup_table'] 		    = 'Backup Tables';
$lang['label_migrate_version'] 		    = 'Migrar para a versão';

$lang['alert_info_memory_limit'] 		= '<p>Nota: devido ao limitado tempo de execução e a memória disponível para o PHP, o backup de bancos de dados muito grandes pode não ser possível. Se seu banco de dados for muito grande talvez seja necessário fazer backup diretamente do seu servidor SQL via linha de comando, ou solicitar que seu admin do servidor faça para você, se você não tem privilégios de root.</p>';
$lang['alert_warning_migration'] 		= '<b>Cuidado!</b> Não migre a menos que você sabe o que está fazendo.';
$lang['alert_warning_maintenance'] 		= 'Seu site está ativo e não pode %s o banco de dados, ative o modo de manutenção. Certifique-se de <b>fazer backup</b> do seu banco de dados.';

$lang['help_compression'] 		        = 'A opção de restauração só é capaz de ler arquivos não-comprimidos. Usar compressão gzip ou Zip apenas se você quiser fazer backup para baixar e armazenar no seu computador.';

/* End of file maintenance_lang.php */
/* Location: ./admin/language/english/maintenance_lang.php */