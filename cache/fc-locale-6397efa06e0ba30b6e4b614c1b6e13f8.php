<?php return array (
  'emails.paypalInvestigatePayment.subject' => 'Необычная активность PayPal',
  'emails.paypalInvestigatePayment.body' => 'Система Open Journal Systems обнаружила необычную активность, связанную с поддержкой платежей через PayPal для журнала «{$contextName}». Эта активность может требовать дополнительного изучения или вмешательства в ручном режиме.<br />
                       <br />
Это письмо было сгенерировано модулем «Платежи через PayPal» системы Open Journal Systems.<br />
<br />
Полная информация для запроса:<br />
{$postInfo}<br />
<br />
Дополнительная информация (если есть):<br />
{$additionalInfo}<br />
<br />
Переменные сервера:<br />
{$serverVars}<br />
',
  'emails.paypalInvestigatePayment.description' => 'Этот шаблон письма используется для уведомления контактного лица редакции о том, что была зарегистрирована подозрительная активность или активность, требующая вмешательства в ручном режиме, вызванная модулем «Платежи через PayPal».',
);