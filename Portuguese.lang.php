<?php
/*** *** *** *** *** ***
* @package    Quadodo Login Script
* @file       Portuguese.lang.php
* @start      December 1st, 2007
* @author     Douglas Rennehan
* @translator viniroger
* @license    http://www.opensource.org/licenses/gpl-license.php
* @version    1.1.6.1
* @link       http://www.quadodo.com
*** *** *** *** *** ***
* This program is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program; if not, write to the Free Software
* Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*** *** *** *** *** ***
* Comments are always before the code they are commenting.
*** *** *** *** *** ***/
if (!defined('QUADODO_IN_SYSTEM')) {
exit;
}

define('REGISTER_LINK', '<a href="register.php">registrar</a>');
define('LOGIN_LINK', '<a href="login.php">iniciar a sessão</a>');
define('MEMBER_LINK', '<a href="members.php">Área de membros</a>');
define('LOGOUT_LINK', '<a href="logout.php">encerre a sessão</a>');
define('KNOWLEDGE_LINK', '<a href="http://www.quadodo.com/forum/index.php" target="_blank" class="main">Área de suporte</a>');

// User is blocked?
define('BLOCKED_ERROR', 'Entrada bloqueda (no donuts for you).');

// System not completely installed
define('SYSTEM_NOT_INSTALLED', 'O sistema não está instalado. Por favor, leia o Guia do Usuario para saber como instalá-lo.');
define('REMOVE_INSTALL_FILES', 'Por favor, remova/renomeie o diretório <b>/install/</b>.');

/**
 * Powered by link
 */
define('POWERED_BY', 'Produzido por: <a href="http://www.quadodo.com/downloads.php" target="_blank" class="main">Quadodo Login Script</a> (v%1$s)');

/**
 * System information.
 * %1$s is the system version
 * %2$s is the database type
 * %3$s is the database version
 */
define('SYSTEM_INFORMATION', POWERED_BY . ' rodando %2$s %3$s sobre PHP ' . PHP_VERSION);

/**
 * SQL errors resulting from the use of unique functions
 * of this login system. Shouldn't happen unless changes
 * are made to the system. They could happen if there is
 * a bug, if so Por favor, visit the project page:
 * http://sourceforge.net/projects/qls
 */
define('SQL_SELECT_QUERY_FAILED', 'A query select não pôde ser executada.');
define('SQL_DELETE_QUERY_FAILED', 'A query delete não pôde ser executada.');
define('SQL_UPDATE_QUERY_FAILED', 'A query update não pôde ser executada.');
define('SQL_INSERT_QUERY_FAILED', 'A query insert não pôde ser executada.');
define('SQL_ALTER_QUERY_FAILED', 'A query alter não pôde ser executada.');

/**
 * Select query returned nothing
 */
define('SQL_SELECT_EMPTY', 'Informação inexistente na base de dados.');

/**
 * Changing their password
 */
// %1$s contains the code
define('CHANGE_PASSWORD_LINK_CODE', '<a href="change_password.php?code=%1$s">Tente de novo</a>');
define('CHANGE_PASSWORD_LINK', '<a href="change_password.php">Tente de novo</a>');
define('CHANGE_PASSWORD_LOGOUT', 'Por favor, ' . LOGOUT_LINK . ' antes de acessar essa página.');
define('CHANGE_PASSWORD_INVALID_CODE', 'O código introduzido não é válido');
define('CHANGE_PASSWORD_SUCCESS', 'Sua senha foi trocada com sucesso. Agora você pode ' . LOGIN_LINK);
define('CHANGE_PASSWORD_TRY_AGAIN', '<br />Por favor, volte e ' . CHANGE_PASSWORD_LINK_CODE . '.');
define('SEND_PASSWORD_EMAIL_SUCCESS', 'O e-mail foi enviado corretamente. Por favor verifique sua caixa de entrada e acesse o link fornecido.');
define('SEND_PASSWORD_EMAIL_TRY_AGAIN', '<br />Por favor, volte e ' . CHANGE_PASSWORD_LINK . '.');
define('SEND_PASSWORD_USERNAME_NON_EXISTANT', 'O usuário informado não existe na base de dados.');
define('SEND_PASSWORD_MAIL_ERROR', 'Ocorreu um erro na tentativa de enviar um e-mail para esse endereço.');
define('SEND_PASSWORD_SUBJECT', 'Solicitação de troca de senha');
// %1$s contains the link
define('SEND_PASSWORD_BODY', 'Você pode alterar sua senha indo para esse link:' . '<br><br>' . '%1$s' . '<br><br>' . 'Esse link tem validade de 10 dias e poderá ser usado somente uma vez.');

// Registration errors
define('ADMIN_AUTH_REGISTRATION_ERROR', 'Seu registro não foi aceito para esse site, você só poderá se registrar se receber um convite.');
define('REGISTER_TRY_AGAIN', '<br />Por favor volte para tentar ' . REGISTER_LINK . ' novamente.');
define('REGISTER_USERNAME_ERROR', 'O nome de usuário digitado não é valido.');
define('REGISTER_PASSWORD_ERROR', 'As duas senhas digitadas não conferem entre si.');
define('REGISTER_EMAIL_ERROR', 'Os dois e-mails digitados não conferem entre si.');
define('REGISTER_SECURITY_ERROR', 'O código de segurança não confere com o da figura.');
define('REGISTER_CUSTOM_ERROR', 'Tem um erro em um dos campos preenchidos.');
define('REGISTER_USERNAME_EXISTS', 'O nome de usuário escolhido já existe.');
define('REGISTER_CODE_INVALID', 'Esse não é um código de convite válido.');

// Registration success
define('REGISTER_SUCCESS_NO_ACTIVATION', 'Cadastro realizado com sucesso, você pode agora ' . LOGIN_LINK . '.');
define('REGISTER_SUCCESS_USER_ACTIVATION', 'Login realizado com sucesso e você pode agora ativar sua conta usando o link no seu e-mail.');
define('REGISTER_SUCCESS_ADMIN_ACTIVATION', 'Cadastro realizado com sucesso, aguarde o administrador ativar sua conta antes de logar. Você receberá um e-mail quando isso ocorrer.');
define('REGISTER_ALREADY_LOGGED', 'Você já está logado! Por favor ' . LOGOUT_LINK . ' se você deseja entrar com outra conta.');

// Login errors
define('LOGIN_TRY_AGAIN', '<br />Por favor volte para tentar ' . LOGIN_LINK . ' novamente.');
define('LOGIN_NO_TRIES', 'Você usou todas as suas tentativas! Volte daqui 5 horas para tentar novamente.');
define('LOGIN_USER_INFO_MISSING', 'A informação não pôde ser encontrada.');
define('LOGIN_PASSWORDS_NOT_MATCHED', 'A senha dada não confere com a cadastrada.');
define('LOGIN_USER_BLOCKED', 'Seu acesso ao site está bloqueado.');
define('LOGIN_ALREADY_LOGGED', 'Você já está logado! Por favor ' . LOGOUT_LINK . ' se você deseja entrar como outro usuário.');
define('LOGIN_NOT_ACTIVE_USER', 'Você deve ativar sua conta usando o link enviado para o seu e-mail.');
define('LOGIN_NOT_ACTIVE_ADMIN', 'O administrador deve validar sua conta antes de você fazer o primeiro login.');

// Login success
define('LOGIN_SUCCESS', 'Login realizado com sucesso! Agora você pode acessar o(a) ' . MEMBER_LINK . '.');

// Activate errors
define('ACTIVATE_ALREADY_LOGGED', 'Você já ativou sua conta, já que você já está logado.');
define('ACTIVATE_NO_NEED', 'Não há necessidade de ativar a sua conta, pode fazer o ' . LOGIN_LINK . ' agora.');
define('ACTIVATE_ADMIN_VERIFICATION', 'O administrador da sua conta deve validar a sua conta para você ' . LOGIN_LINK . '.');
define('ACTIVATE_CODE_NOT_VALID', 'Este não é um código válido.');
define('ACTIVATE_USERNAME_NOT_VALID', 'Este nome de usuário não é válido.');
define('ACTIVATE_CODE_NOT_MATCH', 'O código utilizado é diferente do cadastrado.');

// Activation success
define('ACTIVATE_SUCCESS', 'Ativação realizado com sucesso! Agora você pode  ' . LOGIN_LINK . '.');

// Activation email stuff
define('ACTIVATION_SUBJECT', 'Login realizado com sucesso!');
// %1$s contains the link
define('ACTIVATION_BODY', 'Seu login está certo, mas ainda não está ativo. Você pode ativar seu login através do link abaixo:' . "\n\n" . '%1$s');

// Admin configuration errors
define('ADMIN_COOKIE_PREFIX_ERROR', 'The cookie prefix you entered was either too long or was not valid.');
define('ADMIN_MAX_USERNAME_ERROR', 'The max. username length you entered was not valid.');
define('ADMIN_MIN_USERNAME_ERROR', 'The min. username length you entered was not valid.');
define('ADMIN_MAX_PASSWORD_ERROR', 'The max. password length you defined was not valid.');
define('ADMIN_MIN_PASSWORD_ERROR', 'The min. password length you defined was not valid.');
define('ADMIN_COOKIE_PATH_ERROR', 'The cookie path you entered was incorrect format.');
define('ADMIN_COOKIE_SECURE_ERROR', 'The cookie secure value you entered was not valid.');
define('ADMIN_COOKIE_LENGTH_ERROR', 'There was an error processing the cookie length you entered.');
define('ADMIN_COOKIE_DOMAIN_ERROR', 'The cookie domain you entered was not valid.');
define('ADMIN_MAX_TRIES_ERROR', 'The max. login tries you entered was not valid.');
define('ADMIN_USER_REGEX_ERROR', 'The user regex you entered was too long.');
define('ADMIN_SECURITY_IMAGE_ERROR', 'The security image value you entered was not a valid choice.');
define('ADMIN_ACTIVATION_TYPE_ERROR', 'The activation type you selected was not a valid choice.');
define('ADMIN_LOGIN_REDIRECT_ERROR', 'The login redirect URL you entered was too long or too short.');
define('ADMIN_LOGOUT_REDIRECT_ERROR', 'The logout redirect URL you entered was too long or too short.');
define('ADMIN_MAX_UPLOAD_SIZE_CONFIG_ERROR', 'The maximum upload size you entered was not a valid size in bytes.');
define('ADMIN_AUTH_REGISTRATION_CONFIG_ERROR', 'The choice you selected for allowing public registrations was not valid.');

// Admin errors
define('ADMIN_USERNAME_NOT_VALID', 'The username you entered was not a valid format.');
define('ADMIN_NOT_ADMIN', 'You must be an administrator to access this site.');
define('ADMIN_NOT_LOGGED', 'Você deve ' . LOGIN_LINK . ' antes de acessar essa área.');
define('ADMIN_NO_ACTIVATIONS', 'There are no accounts needing activation.');
define('ADMIN_USERNAME_YOUR_OWN', 'You can\'t block your own username.');
define('ADMIN_EDIT_USER_BANNED_ERROR', 'The banned choice you selected was not valid.');
define('ADMIN_MAX_UPLOAD_SIZE_ERROR', 'The file you are trying to upload is too big.');
define('ADMIN_ACTIVATE_NO_NEED', 'There are no accounts for you to activate right now.');
define('ADMIN_PAGE_DOESNT_EXIST', 'The page you are looking for doesn\'t seem to exist.');
define('ADMIN_GROUP_NAME_ERROR', 'The group name you entered is not a valid format');
define('ADMIN_MASK_ID_ERROR', 'The mask ID you selected is not correct.');
define('ADMIN_GROUP_ID_ERROR', 'The group ID you selected is not correct.');
define('ADMIN_LEADER_ID_ERROR', 'The leader ID you selected on the previous page is not correct.');
define('ADMIN_MASK_DOESNT_EXIST', 'The mask you selected doesn\'t exist in the database.');
define('ADMIN_GROUP_ALREADY_EXISTS', 'The group name you selected already exists.');
define('ADMIN_GROUP_DOESNT_EXIST', 'The group you selected doesn\'t seem to exist in the database.');
define('ADMIN_MASK_SELECTION_ERROR', 'The mask you selected doesn\'t seem to exist in the database.');
define('ADMIN_MASK_NAME_ERROR', 'The mask name you entered is not a valid format.');
define('ADMIN_USER_DOESNT_EXIST', 'The user you selected doesn\'t seem to exist in your database.');
define('ADMIN_CANT_REMOVE_SELF', 'You can\'t remove yourself from the site. If you need your account removed contact another administrator.');
define('ADMIN_IS_PUBLIC_ERROR', 'The public status of the group you chose is not a valid format.');
define('ADMIN_GROUP_NAME_EXISTANT', 'The group name you selected already exists in the database. Either change the other one or choose another name.');
define('ADMIN_MASK_NAME_TAKEN', 'The mask name you selected already exists in the database.');
define('ADMIN_TO_ERROR', 'There was an error with the email address you entered to send the invite to.');
define('ADMIN_REPLY_TO_ERROR', 'There was an error with the email address you entered for the <b>Reply-To</b> field.');
define('ADMIN_SUBJECT_ERROR', 'There was an error with the subject you entered.');
define('ADMIN_LINKAGE_ERROR', 'You must not leave the link field blank.');
define('ADMIN_MESSAGE_ERROR', 'There was an error with the message you entered.');
define('ADMIN_CANT_SEND_MAIL', 'There was an error while trying to send the email. It is probably something to do with your server.');
define('ADMIN_CANT_REMOVE_THOSE', 'You can\'t remove the first or second mask/group as they are needed by the system.');

/**
 * These are the try again messages that are output if the
 * function the administrators were trying to do didn't work.
 */
define('BR_BR', '<br /><br />');
define('ADMIN_CONFIG_TRY_AGAIN', BR_BR . 'Please return the configuration form and try again.');
define('ADMIN_ADD_USER_TRY_AGAIN', BR_BR . 'Please return to the add user form and try again.');
// %1$d is the user's ID number (next three)
define('ADMIN_REMOVE_USER_TRY_AGAIN', BR_BR . 'Please <a href="#" onclick="javascript:user_change(\'remove_user\', \'%1$d\');" class="main">try again</a>.');
define('ADMIN_EDIT_USER_TRY_AGAIN', BR_BR . 'Please try to <a href="#" onclick="javascript:user_change(\'edit_user\', \'%1$d\');" class="main">edit them</a> again.');
define('ADMIN_ACTIVATE_USER_TRY_AGAIN', BR_BR . 'Please try to <a href="#" onclick="javascript:user_change(\'activate_account\', \'%1$d\');" class="main">activate them</a> again.');
define('ADMIN_ADD_PAGE_TRY_AGAIN', BR_BR . 'Please return to the <a href="admincp.php">administration panel</a> and try again.');
// %1$d is the page's ID number (next two)
define('ADMIN_REMOVE_PAGE_TRY_AGAIN', BR_BR . 'Please <a href="#" onclick="javascript:page_change(\'remove_page\', \'%1$d\');" class="main">try again</a>.');
define('ADMIN_EDIT_PAGE_TRY_AGAIN', BR_BR . 'Please try to <a href="#" onclick="javascript:page_change(\'edit_page\', \'%1$d\');" class="main">edit it</a> again.');
define('ADMIN_ADD_MASK_TRY_AGAIN', BR_BR . 'Please return to the add mask form and try again.');
// %1$d is the mask's ID number (next two)
define('ADMIN_REMOVE_MASK_TRY_AGAIN', BR_BR . 'Please <a href="#" onclick="javascript:mask_change(\'remove_mask\', \'%1$d\');" class="main">try again</a>.');
define('ADMIN_EDIT_MASK_TRY_AGAIN', BR_BR . 'Please try to <a href="#" onclick="javascript:mask_change(\'edit_mask\', \'%1$d\');" class="main">edit it</a> again.');
define('ADMIN_ADD_GROUP_TRY_AGAIN', BR_BR . 'Please return to the add group form and try again.');
// %1$d is the group ID (next two)
define('ADMIN_REMOVE_GROUP_TRY_AGAIN', BR_BR . 'Please <a href="#" onclick="javascript:group_change(\'remove_group\', \'%1$d\');" class="main">try again</a>.');
define('ADMIN_EDIT_GROUP_TRY_AGAIN', BR_BR . 'Please try to <a href="#" onclick="javascript:group_change(\'edit_group\', \'%1$d\');" class="main">edit it</a> again.');
define('ADMIN_SEND_INVITE_TRY_AGAIN', BR_BR . 'Please return to the send invite form and try again.');

/**
 * These are the success messages that are output if the
 * function the administrators were trying to do worked.
 */
define('ADMIN_CONFIG_SUCCESS', 'You have successfully updated the system\'s configuration.');
define('ADMIN_ADD_USER_SUCCESS', 'You have successfully added the user to the database.');
// %1$s is the username which was removed (next two)
define('ADMIN_REMOVE_USER_SUCCESS', 'You have successfully removed \'<b>%1$s</b>\' from the database.');
// %2$d is their ID
define('ADMIN_EDIT_USER_SUCCESS', 'You have successfully updated <b>%1$s</b>\'s information. Would you like to edit them <a href="#" onclick="javascript:user_change(\'edit_user\', \'%2$d\');" class="main">again</a>?');
// %1$s is the username
define('ADMIN_ACTIVATE_USER_SUCCESS', 'You have successfully activated <b>%1$s</b>\'s account.');
define('ADMIN_ADD_PAGE_SUCCESS', 'You have successfully added that page to your site. Please return to the <a href="admincp.php">administration panel</a>.');
// %1$s is the page name (next two)
define('ADMIN_REMOVE_PAGE_SUCCESS', 'You have successfully removed the \'<b>%1$s</b>\' from your site.');
// %2$d is the ID number
define('ADMIN_EDIT_PAGE_SUCCESS', 'You have successfully updated the \'<b>%1$s</b>\' file. Would you like to edit it <a href="#" onclick="javascript:page_change(\'edit_page\', \'%2$d\');" class="main">again</a>?');
define('ADMIN_ADD_MASK_SUCCESS', 'You have successfully added the permission mask to the database.');
define('ADMIN_REMOVE_MASK_SUCCESS', 'You have successfully removed the selected permission mask from the database.');
// %1$s is the mask name, %2$d is the mask ID
define('ADMIN_EDIT_MASK_SUCCESS', 'You have successfully edited the \'<b>%1$s</b>\' information. Would you like to edit it <a href="#" onclick="javascript:mask_change(\'edit_mask\', \'%2$d\');" class="main">again</a>?');
define('ADMIN_ADD_GROUP_SUCCESS', 'You have successfully added that group into the database.');
// %1$s is the group name (next two)
define('ADMIN_REMOVE_GROUP_SUCCESS', 'You have successfully removed \'<b>%1$s</b>\' from the database.');
// %2$d is the group's ID
define('ADMIN_EDIT_GROUP_SUCCESS', 'You have successfully edited <b>%1$s</b>\'s information. Would you like to edit the group <a href="#" onclick="javascript:group_change(\'edit_group\', \'%2$d\');" class="main">again</a>?');
define('ADMIN_SEND_INVITE_SUCCESS', 'You have successfully sent the invite. It could take up to 15 minutes to send but is usually instantaneous.');

/**
 * These are the try again messages that are output if the
 * function the group leaders were trying to do didn't work.
 */
// %1$d is the user ID and %2$d is the group ID
define('GROUP_REMOVE_USER_TRY_AGAIN', BR_BR . 'Please try to remove them <a href="#" onclick="javascript:user_change(\'remove_user\', \'%1$d\', \'%2$d\');" class="main">again</a>.');
// %1$d is the group ID
define('GROUP_ADD_USER_TRY_AGAIN', BR_BR . 'Please try to add them <a href="#" onclick="javascript:load_page(\'add_user\', \'%1$d\');" class="main">again</a>.');

/**
 * These are the success messages that are output if the
 * function the group leaders were trying to do worked.
 */
// %1$s is the username (next two)
define('GROUP_REMOVE_USER_SUCCESS', 'You have successfully removed \'<b>%1$s</b>\' from the group.');
define('GROUP_ADD_USER_SUCCESS', 'You have successfully added \'<b>%1$s</b>\' to your group.');
define('GROUP_JOIN_SUCCESS', 'You have successfully joined that group!');
define('GROUP_LEAVE_SUCCESS', 'You have successfully left that group. You are now a member of the Default group.');

/**
 * Random group errors and successes
 */
define('GROUP_CANT_REMOVE_SELF', 'You can\'t remove yourself from the group!');
define('GROUP_NOT_PUBLIC', 'The group you selected is not a public group.');
define('GROUP_CANT_JOIN', 'Sorry but you can\'t leave the group you\'re in to join this one!');
define('GROUP_USER_LIST_NO_USERS', 'There are no users that can be displayed.');

/**
 * These are all defined as NO_AUTHORIZATION (except of course
 * for NO_AUTHORIZATION). This is because they all can say the
 * same thing, and it allows for customization :)
 */
define('NO_AUTHORIZATION', 'Você deve ' . LOGIN_LINK . ' para acessar essa área.');
define('ADMIN_CONFIG_NO_AUTH', NO_AUTHORIZATION);
define('ADMIN_USER_LIST_NO_AUTH', NO_AUTHORIZATION);
define('ADMIN_PAGE_LIST_NO_AUTH', NO_AUTHORIZATION);
define('ADMIN_LIST_MASKS_NO_AUTH', NO_AUTHORIZATION);
define('ADMIN_LIST_GROUPS_NO_AUTH', NO_AUTHORIZATION);
define('ADMIN_ACTIVATE_USER_NO_AUTH', NO_AUTHORIZATION);
define('ADMIN_REMOVE_USER_NO_AUTH', NO_AUTHORIZATION);
define('ADMIN_ADD_USER_NO_AUTH', NO_AUTHORIZATION);
define('ADMIN_EDIT_MASK_NO_AUTH', NO_AUTHORIZATION);
define('ADMIN_PHPINFO_NO_AUTH', NO_AUTHORIZATION);
define('ADMIN_ADD_PAGE_NO_AUTH', NO_AUTHORIZATION);
define('ADMIN_REMOVE_PAGE_NO_AUTH', NO_AUTHORIZATION);
define('ADMIN_EDIT_PAGE_NO_AUTH', NO_AUTHORIZATION);
define('ADMIN_ADD_GROUP_NO_AUTH', NO_AUTHORIZATION);
define('ADMIN_EDIT_GROUP_NO_AUTH', NO_AUTHORIZATION);
define('ADMIN_REMOVE_MASK_NO_AUTH', NO_AUTHORIZATION);
define('ADMIN_REMOVE_GROUP_NO_AUTH', NO_AUTHORIZATION);
define('ADMIN_SEND_INVITE_NO_AUTH', NO_AUTHORIZATION);
define('ADMIN_ADD_MASK_NO_AUTH', NO_AUTHORIZATION);
define('GROUP_CP_NO_AUTH', NO_AUTHORIZATION);
define('GROUPCP_NO_AUTH', GROUP_CP_NO_AUTH);

/**
 * File errors! I forgot to prefix with ADMIN_ and I'm too
 * lazy to go back and change it all :P @translator: OK, I'm lazy too :P
 */
define('FILE_NOT_UPLOADED', 'The selected file could not be uploaded.');
define('FILE_EXISTS_SIZE_EXTENSION', 'The file you selected may already exist or may be too big or the extension could be wrong');
define('FILE_EXISTS', 'A file with that name already exists.');
define('FILE_TOO_BIG', 'The selected file is too big to be uploaded.');
define('FILE_EXTENSION_ERROR', 'The selected file doesn\'t have a proper extension (.php).');
define('FILE_NOT_MOVED', 'The uploaded file could not be moved. It has not been uploaded successfully.');
define('FILE_NOT_READABLE', 'The file you are trying to access is not readable. Please check it\'s permissions.');
define('FILE_NOT_CREATED', 'The selected file could not be created on your server. Please check the folder permissions.');
define('FILE_NOT_OPENABLE', 'The request file can\'t be opened! Please check it\'s permissions and try again.');
define('ADMIN_FILE_NOT_DELETED', 'The selected file could not be deleted from your server. Please check it\'s permissions.');
define('ADMIN_FILE_NOT_WRITABLE', 'The file you are trying to write to is not writable. Please check it\'s permissions.');
define('ADMIN_FILE_NOT_OPENED', 'The file you are trying to access can\'t be opened. Please check it\'s permissions.');
define('ADMIN_FILE_NOT_UPDATED', FILE_NOT_OPENABLE);

/**
 * This is the pagination information. It will be processed
 * using the sprintf() or printf() functions. Therefore the
 * %{NUM}${FORMAT} should be kept like that, they usually
 * contain an expression or number (d = number, s = string)
 */
define('PAGINATION_ONE_PAGE', '<div align="left"><a href="#" onclick="javascript:load_user_page(\'1\');" class="main">1</a></div>');
define('PAGINATION_START', '<div align="left">|');
define('PAGINATION_PREV_PAGE', '<a href="#" onclick="javascript:load_user_page(\'1\');" class="main">&laquo; %2$s</a> | ' . "\n" . '<a href="#" onclick="javascript:load_user_page(\'%1$d\');" class="main">&lt; %3$s</a> | ' . "\n");
define('PAGINATION_LINK_BOLD', '<a href="#" onclick="javascript:load_user_page(\'%1$d\');" class="main"><i>%1$d</i></a> | ' . "\n");
define('PAGINATION_LINK_NORMAL', '<a href="#" onclick="javascript:load_user_page(\'%1$d\');" class="main">%1$d</a> | ' . "\n");
define('PAGINATION_NEXT_LINK', '<a href="#" onclick="javascript:load_user_page(\'%1$d\');" class="main">%3$s &gt;</a> | ' . "\n" . '<a href="#" onclick="javascript:load_user_page(\'%2$d\');" class="main">%4$s &raquo;</a> |' . "\n");

// Group pagination
define('PAGINATION_GROUP_ONE_PAGE', '<div align="left"><a href="#" onclick="javascript:load_user_page(\'1\', \'%1$s\');" class="main">1</a></div>');
define('PAGINATION_GROUP_START', '<div align="left">|');
define('PAGINATION_GROUP_PREV_PAGE', '<a href="#" onclick="javascript:load_user_page(\'1\', \'%4$s\');" class="main">&laquo; %2$s</a> | ' . "\n" . '<a href="#" onclick="javascript:load_user_page(\'%1$d\', \'%4$s\');" class="main">&lt; %3$s</a> | ' . "\n");
define('PAGINATION_GROUP_LINK_BOLD', '<a href="#" onclick="javascript:load_user_page(\'%1$d\', \'%2$s\');" class="main"><i>%1$d</i></a> | ' . "\n");
define('PAGINATION_GROUP_LINK_NORMAL', '<a href="#" onclick="javascript:load_user_page(\'%1$d\', \'%2$s\');" class="main">%1$d</a> | ' . "\n");
define('PAGINATION_GROUP_NEXT_LINK', '<a href="#" onclick="javascript:load_user_page(\'%1$d\', \'%5$s\');" class="main">%3$s &gt;</a> | ' . "\n" . '<a href="#" onclick="javascript:load_user_page(\'%2$d\', \'%5$s\');" class="main">%4$s &raquo;</a> |' . "\n");

// Go back to the admin panel and go back in AJAX mode
define('ADMIN_GO_BACK', 'Would you like to go back to the ' . ADMIN_LINK . '?');

// Admin panel welcome :)
define('ADMIN_PANEL_WELCOME', 'Welcome to the administration panel and thanks for choosing the <a href="http://sourceforge.net/projects/qls" target="_blank" class="main">Quadodo Login Script</a>!<br /><br />You will be able to configure many settings in this panel, ranging from user settings to group settings. All you have to do is click one of the tabs above to see what you can do.<noscript><br /><br />This panel relies on JavaScript and AJAX, so if your browser doesn\'t support it please download <a href="http://www.spreadfirefox.com/?q=affiliates&amp;id=151949&amp;t=1" target="_blank" class="main">another one</a>.</noscript><br /><br />If you need support, it is always available in the ' . KNOWLEDGE_LINK . '<br /><br />It is not necessary to link back to me using this system. It would be nice if you could link back one of these:<br /><a href="http://www.quadodo.com/" target="_blank" class="main">http://www.quadodo.com/</a><br /><a href="http://sourceforge.net/projects/qls" target="_blank" class="main">http://sourceforge.net/projects/qls</a><br /><br />The only way my system can get known is by word-of-mouth! So if you like it, link-er-up :) Enjoy!');

// Group panel welcome ;)
define('GROUP_PANEL_WELCOME', 'Welcome to the group panel! Here you will be able to manage the groups that you lead.');

// Group information
define('GROUP_PANEL_INFORMATION', GROUP_PANEL_WELCOME . ' Here is some information about your group: ' . BR_BR . 'Number of users: <b>%1$d</b><br />Out of a total of: <b>%2$d</b><br />Percentage: <b>%3$s</b>');

// Tells them about the updates...
define('ADMIN_UPDATES_EXPLAIN', 'Here are current updates to the system:');

/**
 * The following list (which is long) are the constants
 * that are used in forms. They also contain some common
 * words used around the system.
 */
define('LOGIN_LABEL', 'Acesso');
define('REGISTER_LABEL', 'Formulário de cadastro');
define('GROUP_PANEL_LABEL', 'Group Control Panel');
define('GROUP_MEMBER_LIST_LABEL', 'Member List');
define('GROUP_USER_LIST_LABEL', 'User List');
define('ADMIN_ADD_USER_LABEL', 'Add User');
define('ADMIN_VIEW_MEMBER_LABEL', 'Member list');
define('ADMIN_EDIT_USER_LABEL', 'Edit a user');
define('ADMIN_ACTIVATE_USER_LABEL', 'Activate a user');
define('ADMIN_EDIT_CONFIGURATION_LABEL', 'Edit configuration');
define('ADMIN_PANEL_LABEL', 'Administration Panel');
define('ADMIN_BLOCK_IP_LABEL', 'Block an IP Address');
define('ADMIN_REMOVE_USER_LABEL', 'Remove User');
define('ADMIN_ADD_PAGE_LABEL', 'Add a Page');
define('ADMIN_REMOVE_PAGE_LABEL', 'Remove a Page');
define('ADMIN_EDIT_PAGE_LABEL', 'Edit a Page');
define('ADMIN_ADD_MASK_LABEL', 'Add a Mask');
define('ADMIN_REMOVE_MASK_LABEL', 'Remove a Mask');
define('ADMIN_EDIT_MASK_LABEL', 'Edit a Mask');
define('ADMIN_ADD_GROUP_LABEL', 'Add a Group');
define('ADMIN_REMOVE_GROUP_LABEL', 'Remove a Group');
define('ADMIN_EDIT_GROUP_LABEL', 'Edit a Group');
define('ADMIN_USER_LIST_LABEL', 'User List');
define('ADMIN_PAGE_LIST_LABEL', 'Page List');
define('ADMIN_MASK_LIST_LABEL', 'Mask List');
define('ADMIN_GROUP_LIST_LABEL', 'Group List');
define('ADMIN_SEND_INVITE_LABEL', 'Send Invite');
define('GROUP_REMOVE_USER_LABEL', 'Remove a User');
define('GROUP_ADD_USER_LABEL', 'Add a User');
define('GROUP_NAME_LABEL', 'Group Name');
define('GROUP_LEADER_LABEL', 'Group Leader');
define('IS_PUBLIC_GROUP_LABEL', 'Is a Public Group');
define('ACTIVATION_LINK_LABEL', 'Activate This User');
define('COOKIE_PREFIX_LABEL', 'Cookie Prefix');
define('MAX_USERNAME_LABEL', 'Max. Username');
define('MIN_USERNAME_LABEL', 'Min. Username');
define('MAX_PASSWORD_LABEL', 'Max. Password');
define('MIN_PASSWORD_LABEL', 'Min. Password');
define('COOKIE_PATH_LABEL', 'Cookie Path');
define('COOKIE_SECURE_LABEL', 'Cookie Secure');
define('COOKIE_LENGTH_LABEL', 'Cookie Length');
define('COOKIE_DOMAIN_LABEL', 'Cookie Domain');
define('MAX_TRIES_LABEL', 'Max. Login Tries');
define('USER_REGEX_LABEL', 'User Regex');
define('LOCAL_FILE_LABEL', 'Local File Upload');
define('PAGE_NAME_LABEL', 'Page Name');
define('NEW_PAGE_NAME_LABEL', 'New Page Name');
define('NEW_PAGE_DATA_LABEL', 'New Page Data');
define('CREATE_NEW_HERE_LABEL', 'Create a New File Here');
define('PAGE_DATA_LABEL', 'Page Data');
define('SECURITY_IMAGE_LABEL', 'Security Image');
define('ACTIVATION_TYPE_LABEL', 'Activation Type');
define('LOGOUT_REDIRECT_URL_LABEL', 'Logout Redirect URL');
define('ADMIN_AJAX_MODE_LABEL', 'Admin Panel AJAX Mode');
define('NO_VALIDATION_LABEL', 'No Validation');
define('USER_VALIDATION_LABEL', 'User Validation');
define('ADMIN_VALIDATION_LABEL', 'Admin Validation');
define('INFORMATION_LABEL', 'Information');
define('USERNAME_LABEL', 'Usuário');
define('NEW_USERNAME_LABEL', 'Novo usuario');
define('PASSWORD_LABEL', 'Senha');
define('PASSWORD_CONFIRM_LABEL', 'Confirme');
define('EMAIL_LABEL', 'Email');
define('NEW_EMAIL_LABEL', 'Novo e-mail');
define('EMAIL_CONFIRM_LABEL', 'Confirme');
define('CEP_LABEL', 'CEP');
define('SECURITY_CODE_LABEL', 'Digite os caracteres');
define('PERMISSION_MASK_LABEL', 'Permission Mask');
define('NEW_PERMISSION_MASK_LABEL', 'New Permission Mask');
define('GROUP_LABEL', 'Group');
define('NEW_GROUP_LABEL', 'New Group');
define('NONE_IF_GROUP_LABEL', 'None (If Group Has Mask)');
define('NAME_LABEL', 'Name');
define('OTHER_LABEL', 'Other');
define('NEXT_LABEL', 'Next');
define('PREV_LABEL', 'Prev.');
define('LAST_LABEL', 'Last');
define('FIRST_LABEL', 'First');
define('NO_LABEL', 'No');
define('YES_LABEL', 'Yes');
define('BANNED_LABEL', 'Banned');
define('MAX_UPLOAD_SIZE_LABEL', 'Max. Upload Size');
define('AUTH_REGISTRATION_LABEL', 'Allow Registrations?');
define('LOGIN_SUBMIT_LABEL', 'Acessar');
define('REGISTER_SUBMIT_LABEL', 'Cadastre-se!');
define('GO_LABEL', 'Enviar');
define('MASK_NAME_LABEL', 'Mask Name');
define('ADMIN_PANEL_LABEL', 'Admin Panel');
define('ALLOW_LABEL', 'Allow');
define('DENY_LABEL', 'Deny');
define('ACCESS_LABEL', 'Access');
define('VIEW_PHPINFO_LABEL', 'View PHP Info');
define('EDIT_CONFIGURATION_LABEL', 'Edit Configuration');
define('ADD_USERS_LABEL', 'Add Users');
define('VIEW_USER_LIST_LABEL', 'View User List');
define('REMOVE_USERS_LABEL', 'Remove Users');
define('EDIT_USERS_LABEL', 'Edit Users');
define('ADD_PAGES_LABEL', 'Add Pages');
define('VIEW_PAGE_LIST_LABEL', 'View Page List');
define('REMOVE_PAGES_LABEL', 'Remove Pages');
define('EDIT_PAGES_LABEL', 'Edit Pages');
define('ADD_MASKS_LABEL', 'Add Masks');
define('VIEW_MASK_LIST_LABEL', 'View Mask List');
define('REMOVE_MASKS_LABEL', 'Remove Masks');
define('EDIT_MASKS_LABEL', 'Edit Masks');
define('ADD_GROUPS_LABEL', 'Add Groups');
define('VIEW_GROUP_LIST_LABEL', 'View Group List');
define('REMOVE_GROUPS_LABEL', 'Remove Groups');
define('EDIT_GROUPS_LABEL', 'Edit Groups');
define('ACTIVATE_ACCOUNTS_LABEL', 'Activate User Accounts');
define('PAGES_LABEL', 'Pages');
define('EDIT_LABEL', 'Edit');
define('REMOVE_LABEL', 'Remove');
define('LEADER_LABEL', 'Leader');
define('MAIN_LABEL', 'Main');
define('PHPINFO_LABEL', 'PHP Info');
define('UPDATES_LABEL', 'Updates');
define('CONFIGURATION_LABEL', 'Configuration');
define('ADD_LABEL', 'Add');
define('LIST_LABEL', 'List');
define('ADD_MASK_LABEL', 'Add Mask');
define('LIST_MASKS_LABEL', 'List Masks');
define('REMOVE_MASK_LABEL', 'Remove Mask');
define('EDIT_MASK_LABEL', 'Edit Mask');
define('SEND_INVITE_LABEL', 'Send Invite');
define('USERS_LABEL', 'Users');
define('GROUPS_LABEL', 'Groups');
define('PAGES_LABEL', 'Pages');
define('PERMISSIONS_LABEL', 'Permissions');
define('INVITATIONS_LABEL', 'Invitations');
define('LOADING_LABEL', 'Loading');
define('SEND_INVITE_LABEL', 'Send Invite');
define('TO_LABEL', 'To');
define('REPLY_TO_LABEL', 'Reply-To');
define('SUBJECT_LABEL', 'Subject');
define('LINK_TO_REGISTER_PAGE_LABEL', 'Link to Registration Page');
define('MESSAGE_LABEL', 'Message');
define('PENDING_ACCOUNTS_LABEL', 'Pending Accounts');
define('USER_LIST_LABEL', 'Full User List');
define('MEMBER_LIST_LABEL', 'Member List');
define('GROUP_SPLASH_PAGE_BACK', 'Back to Splash Page');
define('JOIN_THIS_GROUP_LABEL', 'Join This Group');
define('CHANGE_PASSWORD_LABEL', 'Alterar senha');
// %1$s is the group name
define('YOUR_CURRENT_GROUP_LABEL', 'Your current group is: %1$s <br /><a href="groupcp.php?leave=1" class="main">Leave??</a>');
define('DAYS_LABEL', 'days');
define('DAYS_UNTIL_ACCOUNTS_EXPIRE_LABEL', 'Account Expiration');
define('ACCOUNT_EXPIRE_EXPLAIN_LABEL', '(Enter 0 to disable)');
define('REMEMBER_ME_LABEL', 'Guardar senha');
define('LOGIN_REDIRECT_URL_LABEL', 'Login Redirect URL');
define('REDIRECT_TYPE_LABEL', 'Redirect Type');
define('RECOMMENDED_LABEL', 'Recommended');
define('ONLINE_USERS_FORMAT_LABEL', 'Online Users Format');
define('ONLINE_USERS_SEPARATOR_LABEL', 'Online Users Separator');

// Explain why there is no need..
define('GROUP_ADD_NO_NEED', 'There is no need to add the user when they can just add themselves! This is a public group.');

// Explain how to send an invitation
define('ADMIN_SEND_INVITE_EXPLAIN', 'When entering a link, it must have a <b>http://</b> at the start, and must not have a question mark at the very end. A valid example would be <b>http://www.example.com/register.php</b><br /><br />A link to the register page will be embedded on top of the email with the code needed to register.');

// Explain the access option
define('ACCESS_OPTION', 'The \'Access\' option must be set to \'Allow\' for you to choose the other options.');

// Browser has no AJAX support
define('BROWSER_NO_AJAX', 'Your browser must support AJAX for the admin panel to function properly :(');

// Register globals on
define('REGISTER_GLOBALS_ON', 'Register globals must be turned off for this system to work properly. It is a major security risk. If you really want them turned on, contact me:<br /><br />' . KNOWLEDGE_LINK);

// No GD support
define('NO_GD', 'The GD2 image library could not be found/loaded. Please disable the security image feature.');
?>

