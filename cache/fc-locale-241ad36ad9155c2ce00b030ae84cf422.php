<?php return array (
  'api.400.paramNotSupported' => 'Параметр «{$param}» не поддерживается.',
  'api.files.400.notAllowedCreatedAt' => 'Невозможно изменить время создания этого элемента.',
  'api.403.unauthorized' => 'Вы не авторизованы для доступа к запрашиваемому ресурсу.',
  'api.404.resourceNotFound' => 'Запрашиваемый ресурс не найден.',
  'api.404.endpointNotFound' => 'Запрошенный URL не распознан.',
  'api.announcements.404.announcementNotFound' => 'Объявление, запрошенное Вами, не найдено.',
  'api.emails.400.missingBody' => 'Вы должны добавить текст письма для отправки.',
  'api.emails.400.missingSubject' => 'Вы должны задать тему письма.',
  'api.emails.400.missingUserGroups' => 'Вы должны указать роли пользователей, которые должны получить это письмо.',
  'api.emails.403.notAllowedUserGroup' => 'У вас нет прав отправлять электронную почту пользователям с одной или несколькими из выбранных ролей.',
  'api.emailTemplates.404.templateNotFound' => 'Шаблон письма, который вы запросили, не был найден.',
  'api.files.400.noUpload' => 'В запросе не найден файл, который должен быть загружен на сервер.',
  'api.files.400.uploadFailed' => 'Один или несколько файлов не удалось загрузить на сервер.',
  'api.files.400.fileSize' => 'Файлы больше чем {$maxSize} загрузить на сервер нельзя.',
  'api.files.400.config' => 'Файл нельзя загрузить из-за ошибки в конфигурации сервера. Пожалуйста, свяжитесь с администратором системы.',
  'api.publication.403.alreadyPublished' => 'Публикация, которую Вы хотите опубликовать, уже опубликована.',
  'api.publication.403.alreadyUnpublished' => 'Публикация, которую Вы хотите снять с публикации, не опубликована.',
  'api.publication.403.cantEditPublished' => 'Вы не можете редактировать эту публикацию, так как она уже опубликована.',
  'api.publication.403.cantEditStatus' => 'Вы не можете изменить статус напрямую через API. Вместо этого используйте конечные точки /publish и /unpublish.',
  'api.publication.403.cantDeletePublished' => 'Перед удалением публикации Вы должны снять её с публикации.',
  'api.publicFiles.400.extensionNotSupported' => 'Вы можете загрузить только файлы следующих типов: {$fileTypes}.',
  'api.publicFiles.400.invalidImage' => 'Изображение, которое Вы загрузили, не является корректным.',
  'api.publicFiles.400.mimeTypeNotMatched' => 'Файл, который Вы загрузили, не соответствует своему расширению. Такое может произойти, если файл был неправильно переименован, например, изменили photo.png на photo.jpg.',
  'api.publicFiles.403.unauthorized' => 'У Вас нет прав на загрузку файлов.',
  'api.publicFiles.413.noDirSpace' => 'Недостаточно места в вашем пользовательском каталоге. Файл, который Вы загружаете, имеет размер {$fileUploadSize}kb, а у Вас осталось свободными только {$dirSizeLeft}kb.',
  'api.publicFiles.500.badFilesDir' => 'Каталог для общих файлов не найден или в него нельзя сохранить файлы. Пожалуйста, свяжитесь с администратором системы, чтобы решить этот вопрос.',
  'api.submissionFiles.400.assocTypeAndIdRequired' => 'Вы не можете изменить связь файла, не передав assocType и assocId.',
  'api.submissionFiles.403.unauthorizedReviewRound' => 'У Вас нет прав на доступ к файлам на этом этапе рецензирования.',
  'api.submissionFiles.403.unauthorizedFileStageIdWrite' => 'У Вас нет прав на добавление и редактирование этих файлов.',
  'api.submissionFiles.403.unauthorizedFileStageId' => 'У Вас нет прав для доступа к этим файлам.',
  'api.submissionFiles.400.reviewRoundSubmissionNotMatch' => 'Указанный Вами раунд рецензирования не является частью этого отправленного материала.',
  'api.submissionFiles.400.noFileStageId' => 'Вы должны указать этап, на котором находится файл.',
  'api.submissionFiles.400.missingReviewRoundAssocType' => 'Вы должны указать раунд рецензирования при запросе файлов на этапе рецензирования.',
  'api.submissionFiles.400.badReviewRoundAssocType' => 'Вы не можете связать файл с этого этапа с раундом рецензирования.',
  'api.submissionFiles.400.badReviewAssignmentAssocType' => 'Вы не можете связать файл с этого этапа с назначением на рецензию.',
  'api.submissionFiles.400.badNoteAssocType' => 'Вы не можете связать файл с этого этапа с заметкой в обсуждении.',
  'api.submissionFiles.400.badDependentFileAssocType' => 'Вы не можете связать файл с этого этапа с другим файлом отправки.',
  'api.vocabs.400.localeNotSupported' => 'Язык {$locale} не поддерживается.',
  'api.themes.404.themeUnavailable' => 'Активная тема «{$themePluginPath}» не включена и, возможно, не установлена на сервере.',
  'api.submissions.404.siteWideEndpoint' => 'Эта конечная точка не доступна из контекста. К ней нужно обращаться из пространства имен сайта.',
  'api.submissions.403.userCantEdit' => 'У вас нет прав для редактирования данной публикации.',
  'api.submissions.403.unauthorizedDeleteSubmission' => 'У вас нет прав на удаление этого материала.',
  'api.submissions.403.requestedOthersUnpublishedSubmissions' => 'Вы можете только просматривать неопубликованные материалы, в которых вы были назначены.',
  'api.submissions.403.deleteSubmissionOutOfContext' => 'Вы не можете удалить материал, который не был назначен этому контексту.',
  'api.submissions.403.csrfTokenFailure' => 'Ваш запрос был отклонен. Возможно это произошло из-за того, что время доступа к системе истекло. Попробуйте перезагрузить страницу и войти снова.',
  'api.submissions.400.invalidIssueIdentifiers' => 'Неправильно указан запрашиваемый том, номер или год.',
  'api.submissions.400.missingRequired' => 'Ваш запрос не может быть выполнен, так как в нем отсутствует необходимая информация.',
  'api.submissionsFiles.400.noParams' => 'В запросе на редактирование данного файла нет никаких изменений, которые нужно внести.',
  'api.stats.400.invalidOrderDirection' => 'Неправильный запрос. Параметр orderDirection должен быть `desc` or `asc`.',
  'api.stats.400.wrongTimelineInterval' => 'Неправильный запрос. Параметр timelineInterval должен быть `day` или `month`.',
  'api.stats.400.lateDateRange' => 'Дата окончания не может быть позже чем вчера.',
  'api.stats.400.earlyDateRange' => 'Дата начала не может быть ранее 2001-01-01.',
  'api.stats.400.wrongDateRange' => 'Дата начала не может быть позже даты окончания.',
  'api.stats.400.wrongDateFormat' => 'Дата должна быть в формате ГГГГ-ММ-ДД.',
  'api.contexts.400.localesNotSupported' => 'Не поддерживаются следующие языки: {$locales}.',
  'api.500.apiSecretKeyMissing' => 'Токен API нельзя использовать для доступа к этому сайту, так как администратор сайта не настроил секретный ключ.',
  'api.400.tokenCouldNotBeDecoded' => 'Токен API не удаётся декодировать из-за следующей ошибки: {$error}',
  'api.400.invalidApiToken' => 'Токен API не удаётся проверить. Это может говорить об ошибке в токене API или о том, что данный токен API больше недействителен.',
);