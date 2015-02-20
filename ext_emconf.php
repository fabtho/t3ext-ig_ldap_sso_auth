<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "ig_ldap_sso_auth".
 *
 * Auto generated 20-02-2015 08:52
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'LDAP / SSO Authentication',
	'description' => 'This extension provides LDAP support for TYPO3 by delegating the authentication of frontend and/or backend users to the centrally-managed directory of your organization. It fully supports OpenLDAP, Active Directory and Novell eDirectory and is capable of connecting securely to the authentication server using either TLS or SSL (ldaps://).
In case of use in an intranet environment, this extension is a perfect match since it natively brings Single Sign-On (SSO) capability to TYPO3 without any complex configuration.',
	'category' => 'services',
	'shy' => 0,
	'version' => '2.1.1-dev',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'mod1',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'be_groups,be_users,fe_groups,fe_users',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Xavier Perseguers, Team Infoglobe',
	'author_email' => 'xavier@typo3.org',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5.0-6.2.99',
			'php' => '5.3.3-5.6.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:91:{s:20:"class.ext_update.php";s:4:"8837";s:13:"composer.json";s:4:"7999";s:16:"ext_autoload.php";s:4:"36cb";s:21:"ext_conf_template.txt";s:4:"5411";s:12:"ext_icon.gif";s:4:"155f";s:12:"ext_icon.png";s:4:"3434";s:15:"ext_icon@2x.png";s:4:"0959";s:17:"ext_localconf.php";s:4:"4d5d";s:14:"ext_tables.php";s:4:"b878";s:14:"ext_tables.sql";s:4:"83d1";s:53:"Classes/Domain/Repository/ConfigurationRepository.php";s:4:"4f26";s:28:"Classes/EM/Configuration.php";s:4:"9bc4";s:47:"Classes/Hooks/DatabaseRecordListIconUtility.php";s:4:"8cb0";s:29:"Classes/Hooks/DataHandler.php";s:4:"59ef";s:39:"Classes/Hooks/SetupModuleController.php";s:4:"41c8";s:24:"Classes/Library/Auth.php";s:4:"8be6";s:26:"Classes/Library/Config.php";s:4:"1254";s:24:"Classes/Library/Ldap.php";s:4:"610a";s:29:"Classes/Library/LdapGroup.php";s:4:"d690";s:28:"Classes/Library/LdapUser.php";s:4:"a352";s:45:"Classes/Library/SchedulerSynchroniseusers.php";s:4:"0728";s:30:"Classes/Library/Typo3Group.php";s:4:"04fe";s:29:"Classes/Library/Typo3User.php";s:4:"a17c";s:23:"Classes/Service/Sv1.php";s:4:"6ed8";s:28:"Classes/Task/ImportUsers.php";s:4:"771b";s:44:"Classes/Task/ImportUsersAdditionalFields.php";s:4:"7f41";s:28:"Classes/Tca/Form/Suggest.php";s:4:"9e61";s:25:"Classes/Utility/Debug.php";s:4:"654f";s:47:"Classes/Utility/ExtraDataProcessorInterface.php";s:4:"72f4";s:24:"Classes/Utility/Ldap.php";s:4:"d9a9";s:32:"Classes/Utility/Notification.php";s:4:"99b2";s:30:"Classes/Utility/UserImport.php";s:4:"9c73";s:28:"Configuration/TCA/Config.php";s:4:"c0e7";s:26:"Documentation/Includes.txt";s:4:"ef74";s:23:"Documentation/Index.rst";s:4:"51b8";s:23:"Documentation/Links.rst";s:4:"8b43";s:26:"Documentation/Settings.yml";s:4:"608c";s:25:"Documentation/Targets.rst";s:4:"e135";s:61:"Documentation/AdministratorManual/ConfigureApacheKerberos.rst";s:4:"cae6";s:45:"Documentation/AdministratorManual/General.rst";s:4:"e14a";s:44:"Documentation/AdministratorManual/Groups.rst";s:4:"6b26";s:55:"Documentation/AdministratorManual/ImportOtherTables.rst";s:4:"34b4";s:43:"Documentation/AdministratorManual/Index.rst";s:4:"7845";s:42:"Documentation/AdministratorManual/Ldap.rst";s:4:"71d6";s:57:"Documentation/AdministratorManual/SampleConfiguration.rst";s:4:"6c8c";s:47:"Documentation/AdministratorManual/Scheduler.rst";s:4:"8ead";s:43:"Documentation/AdministratorManual/Users.rst";s:4:"3496";s:27:"Documentation/Faq/Index.rst";s:4:"7722";s:32:"Documentation/Glossary/Index.rst";s:4:"0889";s:43:"Documentation/Images/account-properties.png";s:4:"d0c6";s:45:"Documentation/Images/basic-authentication.png";s:4:"ffa5";s:37:"Documentation/Images/blank-record.png";s:4:"1c63";s:48:"Documentation/Images/configuration-be-groups.png";s:4:"7235";s:47:"Documentation/Images/configuration-fe-users.png";s:4:"94cf";s:43:"Documentation/Images/configuration-ldap.png";s:4:"8eac";s:48:"Documentation/Images/configuration-scheduler.png";s:4:"029d";s:35:"Documentation/Images/dit-dn-rdn.png";s:4:"c734";s:49:"Documentation/Images/kerberos-ticket-exchange.png";s:4:"4637";s:35:"Documentation/Images/new-record.png";s:4:"40e8";s:38:"Documentation/Images/search-wizard.png";s:4:"ef81";s:31:"Documentation/Images/status.png";s:4:"c007";s:36:"Documentation/Introduction/Index.rst";s:4:"19fe";s:35:"Documentation/UsersManual/Index.rst";s:4:"e69d";s:40:"Resources/Private/Language/locallang.xml";s:4:"5448";s:47:"Resources/Private/Language/locallang_csh_db.xml";s:4:"ccdd";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"cc7b";s:45:"Resources/Private/Language/locallang_mod1.xml";s:4:"ee91";s:50:"Resources/Private/Templates/filter_be_groups_0.txt";s:4:"ad90";s:50:"Resources/Private/Templates/filter_be_groups_1.txt";s:4:"57df";s:49:"Resources/Private/Templates/filter_be_users_0.txt";s:4:"35ef";s:49:"Resources/Private/Templates/filter_be_users_1.txt";s:4:"7b00";s:50:"Resources/Private/Templates/filter_fe_groups_0.txt";s:4:"ad90";s:50:"Resources/Private/Templates/filter_fe_groups_1.txt";s:4:"57df";s:49:"Resources/Private/Templates/filter_fe_users_0.txt";s:4:"35ef";s:49:"Resources/Private/Templates/filter_fe_users_1.txt";s:4:"7b00";s:49:"Resources/Private/Templates/mapping_be_groups.txt";s:4:"0612";s:50:"Resources/Private/Templates/mapping_be_users_0.txt";s:4:"3439";s:50:"Resources/Private/Templates/mapping_be_users_1.txt";s:4:"621f";s:49:"Resources/Private/Templates/mapping_fe_groups.txt";s:4:"b2a8";s:50:"Resources/Private/Templates/mapping_fe_users_0.txt";s:4:"975e";s:50:"Resources/Private/Templates/mapping_fe_users_1.txt";s:4:"7b8a";s:32:"Resources/Public/Icons/cross.png";s:4:"4249";s:55:"Resources/Public/Icons/icon_tx_igldapssoauth_config.png";s:4:"45e5";s:46:"Resources/Public/Icons/overlay-ldap-record.png";s:4:"f384";s:53:"Resources/Public/Icons/selicon_group_membership_1.png";s:4:"2e1f";s:53:"Resources/Public/Icons/selicon_group_membership_2.png";s:4:"f2ea";s:31:"Resources/Public/Icons/tick.png";s:4:"c9b5";s:13:"mod1/conf.php";s:4:"4848";s:14:"mod1/index.php";s:4:"82d3";s:22:"mod1/mod_template.html";s:4:"cdfa";s:29:"mod1/mod_template_v45-61.html";s:4:"77c3";}',
	'suggests' => array(
	),
);

?>