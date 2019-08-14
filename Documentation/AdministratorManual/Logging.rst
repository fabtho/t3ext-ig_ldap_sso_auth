.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt


.. _admin-manual-logging:

Logging
-------

This extension makes use of the Logging system introduced in TYPO3 CMS 6.0. It is far more flexible than the old one
writing to the "sys_log" table. Technical details may be found in the :ref:`TYPO3 Core API <t3api:logging>`.

As an administrator, what you should know is that the TYPO3 Logger forwards log records to "Writers", which persist the
log record.

By default, with a vanilla TYPO3 installation, messages are written to the default log file
(:file:`typo3temp/logs/typo3_*.log`).


.. _admin-manual-logging-dedicatedogfile:

Dedicated log file for LDAP
^^^^^^^^^^^^^^^^^^^^^^^^^^^

If you want to redirect every logging information from this extension to :file:`typo3temp/logs/ldap.log` and send log
entries with level "WARNING" or above to the system log, you may add following configuration to
:file:`typo3conf/AdditionalConfiguration.php`:

.. code-block:: php

	$GLOBALS['TYPO3_CONF_VARS']['LOG']['Causal']['IgLdapSsoAuth']['writerConfiguration'] = [
	    \TYPO3\CMS\Core\Log\LogLevel::DEBUG => [
	        \TYPO3\CMS\Core\Log\Writer\FileWriter::class => [
	            'logFile' => 'typo3temp/var/log/ldap.log'
	        ],
	    ],

	    // Configuration for WARNING severity, including all
	    // levels with higher severity (ERROR, CRITICAL, EMERGENCY)
	    \TYPO3\CMS\Core\Log\LogLevel::WARNING => [
	        \TYPO3\CMS\Core\Log\Writer\SyslogWriter::class => [],
	    ],
	];

.. hint::
	Be sure to read :ref:`t3api:logging-configuration` to fine-tune your configuration on any production website.
