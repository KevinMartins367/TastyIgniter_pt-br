<?php if ( ! defined('BASEPATH')) exit('No direct access allowed');

$lang['_text_title'] 		                    = 'Stripe';
$lang['text_tab_general'] 	                    = 'Geral';
$lang['text_description'] 	                    = 'Pagar com cartão de crédito usando Stripe';
$lang['text_live'] 	                            = 'Ativo';
$lang['text_test'] 	                            = 'Teste';
$lang['text_cc_number'] 	                    = 'Número de cartão válido';
$lang['text_exp'] 	                            = 'MM / YY';
$lang['text_cc_cvc'] 	                        = 'CVC';
$lang['text_stripe_charge_description'] 	    = '%s Cobrar por %s';
$lang['text_payment_status'] 	                = 'Forma de pagamento %s (%s)';

$lang['label_title'] 	                        = 'Título';
$lang['label_description'] 	                    = 'Descrição';
$lang['label_transaction_mode']                 = 'Modo de transação';
$lang['label_test_secret_key'] 	                = 'Test Secret Key';
$lang['label_test_publishable_key']             = 'Test Publishable Key';
$lang['label_live_secret_key'] 	                = 'Live Secret Key';
$lang['label_live_publishable_key']             = 'Live Publishable Key';
$lang['label_force_ssl']                        = 'Force SSL';
$lang['label_order_total'] 	                    = 'total do pedido';
$lang['label_order_status']                     = 'Status do pedido';
$lang['label_priority'] 	                    = 'Prioridade';
$lang['label_status'] 	                        = 'Status';
$lang['label_card_number'] 	                    = 'NÚMERO DO CARTÃO';
$lang['label_card_expiry'] 	                    = 'DATA DE VALIDADE';
$lang['label_card_cvc'] 	                    = 'CV CODE';

$lang['help_order_total'] 		                = 'O valor total que o pedido deve atingir antes desta forma de pagamento se torna ativo';
$lang['help_order_status'] 	                    = 'Status do pedido padrão quando Stripe é o método de pagamento selecionado';

$lang['alert_min_order_total'] 	                = 'Você precisa gastar %s ou mais para usar este método de pagamento</p>';
$lang['alert_error_contacting']                 = '<p class="alert-danger">Ocorreu um problema ao contactar o gateway de pagamento. Por favor, tente novamente.</p>';

/* End of file stripe_lang.php */
/* Location: ./extensions/stripe/language/english/stripe_lang.php */