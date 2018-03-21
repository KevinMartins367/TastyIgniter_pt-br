<?php if ( ! defined('BASEPATH')) exit('No direct access allowed');

$lang['_text_title'] 		    = 'Authorize.Net';
$lang['text_tab_general'] 	    = 'Geral';
$lang['text_go_live'] 	        = 'Vá em frente';
$lang['text_test'] 	            = 'Teste';
$lang['text_test_live'] 	    = 'Teste ao vivo';
$lang['text_sale'] 	            = 'VENDA';
$lang['text_auth_only']         = 'Somente autorização';
$lang['text_auth_capture']      = 'Autorização & Captura';
$lang['text_visa'] 	            = 'Visa';
$lang['text_mastercard'] 	    = 'MasterCard';
$lang['text_american_express']  = 'American Express';
$lang['text_jcb'] 	            = 'JCB';
$lang['text_diners_club'] 	    = 'Diners Club';
$lang['text_cc_number'] 	    = 'Valid Card Number';
$lang['text_exp_month'] 	    = 'MM';
$lang['text_exp_year'] 	        = 'YY';
$lang['text_cc_cvc'] 	        = 'CVC';
$lang['text_add_new_address'] 	= 'Insira o meu endereço de cobrança';

$lang['label_title'] 	        = 'Título';
$lang['label_api_login_id'] 	= 'API Login ID';
$lang['label_transaction_key'] 	= 'Chave de transação';
$lang['label_transaction_mode'] = 'Modo de transação';
$lang['label_transaction_type'] = 'Tipo de transação';
$lang['label_accepted_cards']   = 'Cartões Aceitos';
$lang['label_order_total'] 	    = 'Total de pedidos';
$lang['label_order_status']     = 'Status do pedido';
$lang['label_priority'] 	    = 'Prioridade';
$lang['label_status'] 	        = 'Status';
$lang['label_card_number'] 	    = 'NÚMERO DO CARTÃO';
$lang['label_card_expiry'] 	    = 'DATA DE VALIDADE';
$lang['label_card_cvc'] 	    = 'CV CODE';
$lang['label_same_address'] 	= 'Meu endereço de cobrança é o mesmo que meu endereço de entrega';

$lang['text_tab_general'] 	    = 'Geral';
$lang['text_avs_response_A'] = 'Correspondências de endereço (Street), não ao CEP';
$lang['text_avs_response_B'] = 'Informações de endereço não fornecidas para verificação de AVS';
$lang['text_avs_response_E'] = 'AVS error';
$lang['text_avs_response_G'] = 'Non-U.S. Card Issuing Bank';
$lang['text_avs_response_N'] = 'No Match on Address (Street) or ZIP';
$lang['text_avs_response_P'] = 'AVS not applicable for this transaction';
$lang['text_avs_response_R'] = 'Retry—System unavailable or timed out';
$lang['text_avs_response_S'] = 'Service not supported by issuer';
$lang['text_avs_response_U'] = 'Address information is unavailable';
$lang['text_avs_response_W'] = 'Nine digit ZIP matches, Address (Street) does not';
$lang['text_avs_response_X'] = 'Address (Street) and nine digit ZIP match';
$lang['text_avs_response_Y'] = 'Address (Street) and five digit ZIP match';
$lang['text_avs_response_Z'] = 'Five digit ZIP matches, Address (Street) does not';

$lang['text_ccv_response_M'] = 'Match';
$lang['text_ccv_response_N'] = 'No Match';
$lang['text_ccv_response_P'] = 'Not Processed';
$lang['text_ccv_response_S'] = 'Should have been present';
$lang['text_ccv_response_U'] = 'Issuer unable to process request';

$lang['text_cavv_response_0'] = 'Card not validated because erroneous data was submitted';
$lang['text_cavv_response_1'] = 'Card failed validation';
$lang['text_cavv_response_2'] = 'Card passed validation';
$lang['text_cavv_response_3'] = 'Card validation could not be performed; issuer attempt incomplete';
$lang['text_cavv_response_4'] = 'Card validation could not be performed; issuer system error';
$lang['text_cavv_response_5'] = 'Reserved for future use';
$lang['text_cavv_response_6'] = 'Reserved for future use';
$lang['text_cavv_response_7'] = 'Card attempt—failed validation—issuer available (U.S.-issued card/non-U.S acquirer)';
$lang['text_cavv_response_8'] = 'Card attempt—passed validation—issuer available (U.S.-issued card/non-U.S. acquirer)';
$lang['text_cavv_response_9'] = 'Card attempt—failed validation—issuer unavailable (U.S.-issued card/non-U.S. acquirer)';
$lang['text_cavv_response_A'] = 'Card attempt—passed validation—issuer unavailable (U.S.-issued card/non-U.S. acquirer)';
$lang['text_cavv_response_B'] = 'Card passed validation, information only, no liability shift';

$lang['help_order_total'] 		= 'The total amount the order must reach before this payment gateway becomes active';
$lang['help_order_status'] 	    = 'Default order status when Authorize.Net (AIM) is the selected payment method';

$lang['error_cc_number']        = 'The selected payment is invalid, please contact us';

$lang['alert_min_order_total'] 	= 'You need to spend %s or more to use this payment method</p>';
$lang['alert_acceptable_cards'] = 'We only accept %s';
$lang['alert_error_contacting'] = '<p class="alert-danger">There was a problem while contacting the payment gateway. Please try again.</p>';

/* End of file authorize_net_aim_lang.php */
/* Location: ./extensions/authorize_net_aim/language/english/authorize_net_aim_lang.php */