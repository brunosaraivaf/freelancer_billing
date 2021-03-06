<?php

$lang['cron_call_instructions'] = "Instruções para configurar a automatização";

$lang['cron_call_instructions_text'] = "Para manter o sistema funcionando automaticamente é necessário realizar uma chamada diariamente para a URL abaixo. Ao ser acionada, o sistema irá gerar as faturas e notificações de acordo com as regras definidas. Esta chamada pode ser configurada em seu próprio servidor (Ex. Tarefas Cron no CPanel) ou através de algum site que permita o agendamento de chamadas de URL. (Ex.: https://cron-job.org/en/)";

$lang['account_public_url'] = "Área do cliente";

$lang['activate_pagseguro'] = "Recebimento via PagSeguro";

$lang['activate_bank_transfer'] = "Recebimento via depósito/transferência";

$lang['sendmail_mode'] = "Tipo de envio de e-mail";

$lang['days_after_generate_invoice_due_date'] = "Fatura vence em quantos dias";

$lang['days_after_invoice_pending_overdue_notification'] = "Notificar vencimento após quantos dias";


$lang['bank_transfer_instructions'] = "Instruções para depósito ou transferência";

$lang['invoice_notification_helper_title'] = "Exibir dados da fatura";

$lang['invoice_notification_helper'] = "
<table width='100%' class='table'>
<tr><th>Para inserir<th> Copie e cole</tr>
<tr><td>ID da Fatura<td> <input class='form-control select_on_click' readonly value='{formatted_invoice_id}'></td></tr>
<tr><td>Descrição da Fatura<td> <input class='form-control select_on_click' readonly value='{invoice_description}'></td></tr>
<tr><td>Link da fatura<td> <input class='form-control select_on_click' readonly value='{invoice_public_url}'></td></tr>
<tr><td>Data de criação da fatura<td> <input class='form-control select_on_click' readonly value='{formatted_invoice_created_date}'></td></tr>
<tr><td>Data de vencimento da fatura<td> <input class='form-control select_on_click' readonly value='{formatted_invoice_due_date}'></td></tr>
<tr><td>Data de pagamento da fatura<td> <input class='form-control select_on_click' readonly value='{formatted_invoice_paid_date}'></td></tr>
<tr><td>Valor da fatura<td> <input class='form-control select_on_click' readonly value='{invoice_amount}'></td></tr>
<tr><td>Nome do cliente<td> <input class='form-control select_on_click' readonly value='{account_title}'></td></tr>
<tr><td>E-mail do cliente<td> <input class='form-control select_on_click' readonly value='{account_email}'></td></tr>
<tr><td>Link para área do cliente<td> <input class='form-control select_on_click' readonly value='{account_public_url}'></td></tr>
</table>
";

$lang['system_settings'] = "Configurações";
$lang['system_title'] = "Título do Sistema";

$lang['system_mail_settings'] = "Configurações de e-mail";
$lang['system_smtp_name'] = "Nome do remetente de e-mails";
$lang['system_smtp_email'] = "E-mail do remetente de e-mails";
$lang['system_smtp_host'] = "Servidor SMTP";
$lang['system_smtp_port'] = "Porta do servidor SMTP";
$lang['system_smtp_user'] = "Usuário do servidor SMTP";
$lang['system_smtp_pass'] = "Senha do servidor SMTP";
$lang['system_smtp_instruction'] = "Consulte as configurações de SMTP da sua conta de e-mail para preencher corretamente estes campos.";

$lang['pagseguro_credentials'] = "Credenciais PagSeguro";
$lang['pagseguro_credentials_email'] = "E-mail PagSeguro";
$lang['pagseguro_credentials_token'] = "Token PagSeguro";

$lang['invoice_notifications_template'] = "Notifticações";
$lang['invoice_status_pending_notification_subject'] = "Assunto da notificação de fatura disponível";
$lang['invoice_status_pending_notification'] = "Texto da notificação de fatura disponível";
$lang['invoice_status_pending_overdue_notification_subject'] = "Assunto da notificação de fatura em atraso";
$lang['invoice_status_pending_overdue_notification'] = "Texto da notificação de fatura em atraso";
$lang['invoice_status_paid_notification_subject'] = "Assunto da notificação de fatura paga";
$lang['invoice_status_paid_notification'] = "Texto da notificação de fatura paga";

$lang['generated_notifications'] = "Notificações geradas";
$lang['pay_with_pagseguro'] = "Pagar com PagSeguro";
$lang['pay_with_bank_transfer'] = "Efetuar depósito ou transferência";

$lang['invoice_public_url'] = "Link da Fatura";
$lang['recurrency_over'] = "Finalizada";

$lang['invoice_notification_preview'] = "Preview";
$lang['invoice_status_pending_overdue']="Fatura em atraso";
$lang['invoice_status_pending']="Fatura pendente";
$lang['invoice_status_paid']="Fatura paga";
$lang['invoice_status']="Status";

$lang['invoice_status_updates']="Atualizações de Status";
$lang['invoice_status_update']="Status";
$lang['invoice_status_update_id']="Identificador da atualização";
$lang['invoice_status_update_invoice_id']="Fatura";
$lang['invoice_status_update_datetime']="Data da atualização";
$lang['invoice_status_update_gateway']="Meio de Pagamento";
$lang['invoice_status_update_transaction']="Identificador da transação";
$lang['invoice_status_update_status_code']="Status";

$lang['invoice_status_update_paid'] = "Pago";
$lang['invoice_status_update_pending'] = "Pendente";
$lang['invoice_status_update_cancelled'] = "Cancelado";

$lang['offline_payment'] = "Depósito / Transferência";
$lang['pagseguro'] = "PagSeguro";
$lang['paypal'] = "Paypal";
$lang['stripe'] = "Stripe";

$lang['pay_invoice']="Pagar fatura";

$lang['invoice_notification']="Notificação";
$lang['invoice_notifications']="Notificações";
$lang['invoice_notification_invoice_id']="Identificador da notificação";
$lang['invoice_notification_type']="Tipo";
$lang['invoice_notification_read']="Leitura";
$lang['invoice_notification_read_ip']="IP";
$lang['invoice_notification_sent']="Data de envio";

$lang['invoices']="Faturas";
$lang['invoice']="Fatura";
$lang['invoice_account_id']="Cliente";
$lang['invoice_amount']="Valor";
$lang['invoice_description']="Descrição";
$lang['invoice_created_date']="Criada em";
$lang['invoice_due_date']="Vencimento";
$lang['invoice_paid_date']="Pagamento";
$lang['invoice_id']="Número da Fatura";
$lang['check_now'] = "Verificar agora";
$lang['invoice_recurrency_id'] = "Recorrência";
$lang['dispatch_notifications'] = "Enviar Notificações";



$lang['recurrencies']="Recorrências";
$lang['recurrency']="Recorrência";
$lang['recurrency_id']="Recorrência";
$lang['recurrency_account_id']="Cliente";
$lang['recurrency_amount']="Valor";
$lang['recurrency_when_day']="Dia do vencimento";
$lang['recurrency_when_month']="Definir mês";
$lang['recurrency_description']="Descrição";
$lang['recurrency_limit']="Limite de Repetições";
$lang['recurrency_iterations']="vezes";
$lang['unlimited_recurrency']="Não estabelecido";
$lang['recurrency_start']="Ativo";
$lang['recurrency_generated_invoices']="Faturas geradas";
$lang['generate_invoices']="Gerar Faturas";




$lang['monthly'] = "Mensal";
$lang['yearly'] = "Anual";
$lang['yearly_recurrency_help'] = "Para recorrência anual";
$lang['on_day'] = "dia";
$lang['every_month'] = "Todo mês";
$lang['db_now'] = "Hora Atual";

$lang['pending_date'] = "Pendente";


$lang['client_user_email_exception'] = 'Este endereço de e-mail é utilizado por outro usuário.';

$lang['delete_operation_fail'] = "Não foi possível excluir este elemento porque existem registros associados que não podem ser excluídos automaticamente.";
$lang['operation_fail'] = "Não foi possível realizar esta ação.";


$lang['keyword_search'] = "Procurar por";
$lang['client_total_users'] = "Todos os usuários";



$lang['extra_filters'] = "Mais filtros";
$lang['member_id'] = "Matrícula";

$lang['total_itens'] = "Encontrados";


$lang['no_results_retry'] = "Nenhum resultado encontrado com os filtros utilizados. Por favor, tente novamente com outros filtros.";

$lang['clear_filters'] = "Limpar filtros";

$lang['no_user_role'] = "Nenhum perfil de acesso";

$lang['regular_user_no_access'] = "Seu perfil de usuário não está associado a nenhum perfil de acesso. Por favor, entre em contato com o seu administrador de sistemas.";


$lang['not_allowed'] = "<strong>Não permitido.</strong> Você não tem permissão para realizar acessar esta página.";
$lang['dashboard'] = "Painel";

$lang['file_removed'] = "Arquivo removido";
$lang['file_updated'] = "Arquivo atualizado";



$lang['client'] = "Cliente";
$lang['clients'] = "Clientes";
$lang['manage_clients'] = "Gerenciar Clientes";

$lang['settings'] = "Minha Conta";

$lang['account'] = "Usuário";
$lang['accounts'] = "Contas";

$lang['account_title'] = "Cliente";
$lang['account_email'] = "E-mail";
$lang['account_must_change_pass'] = "Exigir Troca de Senha";
$lang['account_last_access_date'] = "Último Acesso";
$lang['no_record'] = "Sem registro";
$lang['account_blocked_date'] = "Bloqueado";
$lang['account_created_date'] = "Criado em";
$lang['account_updated_date'] = "Atualizado em";

$lang['account_is_admin'] = "Administrador";
$lang['account_is_client'] = "Cliente";
$lang['account_is_regular'] = "Sem acesso";

$lang['account_level'] = "Acesso";
$lang['account_last_access_ip'] = "IP do último acesso";
$lang['block'] = "Bloquear";
$lang['unblock'] = "Desbloquear";

$lang['change_password'] = "Modificar senha";
$lang['password'] = "Senha";
$lang['account_password'] = "Senha da conta";
$lang['active_recurrencies']="Recorrências Ativas";
$lang['unpaid_invoices']="Faturas Pendentes";

$lang['yes'] = "Sim";
$lang['no'] = "Não";
$lang['both'] = "Ambos";
$lang['of'] = "de";
$lang['all'] = "Todos";

$lang['in_stock'] = "Em estoque";
$lang['available'] = "Disponível";

$lang['unlink'] = "Desvincular";
$lang['cancel'] = "Cancelar";
$lang['search'] = "Busca";
$lang['create'] = "Cadastrar";
$lang['view'] = "Ver";
$lang['close'] = "Fechar";
$lang['update'] = "Atualizar";
$lang['print'] = "Imprimir";
$lang['remove'] = "Remover";
$lang['pick'] = "Selecionar";
$lang['add'] = "Adicionar";
$lang['change'] = "Modificar";
$lang['undefined'] = "Não informado";
$lang['back'] = "Voltar";
$lang['send'] = "Enviar";
$lang['subject'] = "Assunto";
$lang['to'] = "Para";
$lang['error_message'] = "Mesagem de erro";
$lang['smtp_failed'] = "Falha no envio através de SMTP";
$lang['mail_failed'] = "Falha no envio através da função mail()";
$lang['cant_send_email'] = "Não foi possível enviar o e-mail.";


$lang['range_min'] = "a partir de`";
$lang['range_max'] = "até";

$lang['operation_success'] = "As modificações foram realizadas e salvas com sucesso.";
$lang['confirm_removal'] = "Deseja realmente remover o elemento selecionado e todas as suas dependências? Esta ação não poderá ser desfeita.";

$lang['logout'] = "Sair";
$lang['system_logs'] = "Acesso ao Sistema";
$lang['login'] = "Identificação";
$lang['enter'] = "Entrar";
$lang['recover'] = "Recuperar";
$lang['forgot_password'] = "Esqueceu sua senha?";
$lang['login_recover_instructions'] = "Insira o seu endereço de e-mail para receber as instruções de recuperação de senha.";
$lang['user_not_found'] = "Usuário não encontrado.";
$lang['mail_sent'] = "E-mail enviado. Verifique seu e-mail e siga as instruções para acessar o sistema e cadastrar uma nova senha.";
$lang['try_again'] = "Credenciais inválidas, tente novamente por favor.";
$lang['you_must_update_password'] = "Para continuar utilizando o sistema, cadastre uma nova senha de acesso para sua conta.";
$lang['type_here'] = "Digite aqui...";
$lang['validation_failed'] = "<strong>A validação falhou.</strong> Corrija os erros indicados abaixo e tente novamente por favor.";

$lang['nav'] = "Menu";
$lang['loading'] = "Carregando...";
$lang['load_more'] = "Ver mais...";
$lang['view_more'] = "Ver mais...";
$lang['select_state'] = "Selecione um estado";
$lang['select_value'] = "Selecione uma opcão&hellip;";

$lang['no_results'] = "Nenhum registro encontrado.";
$lang['no_results_at_all'] = "Este módulo ainda não contém itens cadastrados.";

$lang['address'] = "Endereço";
$lang['city_name'] = "Cidade";
$lang['state_name'] = "Estado";


$lang['invalid_client'] = "Cliente não encontrado.";
$lang['missing_client_config'] = "O domínio está corretamente configurado mas o domínio não está cadastrado na plataforma.";


$lang['file'] = "Arquivo";
$lang['sys_title'] = "Freelancer Billing"; #&trade; &reg;
$lang['zipcode_not_found'] = "CEP não encontrado";
$lang['you'] = "Você";




$lang['january'] = "Janeiro";
$lang['february'] = "Fevereiro";
$lang['march'] = "Março";
$lang['april'] = "Abril";
$lang['may'] = "Maio";
$lang['june'] = "Junho";
$lang['july'] = "Julho";
$lang['august'] = "Agosto";
$lang['september'] = "Setembro";
$lang['october'] = "Outubro";
$lang['november'] = "Novembro";
$lang['december'] = "Dezembro";

$lang['month_1'] = $lang['jan'] = "Jan";
$lang['month_2'] = $lang['feb'] = "Fev";
$lang['month_3'] = $lang['mar'] = "Mar";
$lang['month_4'] = $lang['apr'] = "Abr";
$lang['month_5'] = $lang['may'] = "Maio";
$lang['month_6'] = $lang['jun'] = "Jun";
$lang['month_7'] = $lang['jul'] = "Jul";
$lang['month_8'] = $lang['aug'] = "Ago";
$lang['month_9'] = $lang['sep'] = "Set";
$lang['month_10'] = $lang['oct'] = "Out";
$lang['month_11'] = $lang['nov'] = "Nov";
$lang['month_12'] = $lang['dec'] = "Dez";

$lang['monday'] = "Segunda";
$lang['tuesday'] = "Terça";
$lang['wednesday'] = "Quarta";
$lang['thursday'] = "Quinta";
$lang['friday'] = "Sexta";
$lang['saturday'] = "Sábado";
$lang['sunday'] = "Domingo";

$lang['not_implemented'] = "Método ainda não implementado.";


/* End of file general_lang.php */
/* Location: ./application/language/pt-BR/general_lang.php */