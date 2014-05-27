<?php
$TRANSLATIONS = array(
"Failed to clear the mappings." => "Не удалось очистить соответствия.",
"Failed to delete the server configuration" => "Не удалось удалить конфигурацию сервера",
"The configuration is valid and the connection could be established!" => "Конфигурация правильная и подключение может быть установлено!",
"The configuration is valid, but the Bind failed. Please check the server settings and credentials." => "Конфигурация верна, но операция подключения завершилась неудачно. Пожалуйста, проверьте настройки сервера и учетные данные.",
"The configuration is invalid. Please have a look at the logs for further details." => "Конфигурация недействительна. Пожалуйста, просмотрите логи для уточнения деталей.",
"No action specified" => "Действие не указано",
"No configuration specified" => "Конфигурация не создана",
"No data specified" => "Нет данных",
" Could not set configuration %s" => "Невозможно создать конфигурацию %s",
"Deletion failed" => "Удаление не удалось",
"Take over settings from recent server configuration?" => "Принять настройки из последней конфигурации сервера?",
"Keep settings?" => "Сохранить настройки?",
"Cannot add server configuration" => "Не получилось добавить конфигурацию сервера",
"mappings cleared" => "Соответствия очищены",
"Success" => "Успешно",
"Error" => "Ошибка",
"Configuration OK" => "Конфигурация в порядке",
"Configuration incorrect" => "Конфигурация неправильна",
"Configuration incomplete" => "Конфигурация не завершена",
"Select groups" => "Выберите группы",
"Select object classes" => "Выберите объектные классы",
"Select attributes" => "Выберите атрибуты",
"Connection test succeeded" => "Проверка соединения удалась",
"Connection test failed" => "Проверка соединения не удалась",
"Do you really want to delete the current Server Configuration?" => "Вы действительно хотите удалить существующую конфигурацию сервера?",
"Confirm Deletion" => "Подтверждение удаления",
"_%s group found_::_%s groups found_" => array("%s группа найдена","%s группы найдены","%s групп найдено"),
"_%s user found_::_%s users found_" => array("%s пользователь найден","%s пользователя найдено","%s пользователей найдено"),
"Invalid Host" => "Неверный сервер",
"Could not find the desired feature" => "Не могу найти требуемой функциональности",
"Group Filter" => "Фильтр группы",
"Save" => "Сохранить",
"Test Configuration" => "Проверить конфигурацию",
"Help" => "Помощь",
"Groups meeting these criteria are available in %s:" => "Группы, отвечающие этим критериям доступны в  %s:",
"only those object classes:" => "только эти объектные классы",
"only from those groups:" => "только из этих групп",
"Edit raw filter instead" => "Редактировать исходный фильтр",
"Raw LDAP filter" => "Исходный LDAP фильтр",
"The filter specifies which LDAP groups shall have access to the %s instance." => "Этот фильтр определяет, какие LDAP группы должны иметь доступ к %s.",
"groups found" => "групп найдено",
"Users login with this attribute:" => "Пользователи пользуются этим атрибутом для входа:",
"LDAP Username:" => "Имя пользователя LDAP",
"LDAP Email Address:" => "LDAP адрес электронной почты:",
"Other Attributes:" => "Другие атрибуты:",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action. Example: \"uid=%%uid\"" => "Определяет фильтр для применения при попытке входа. %%uid заменяет имя пользователя при входе в систему. Например: \"uid=%%uid\"",
"Add Server Configuration" => "Добавить конфигурацию сервера",
"Host" => "Сервер",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "Можно опустить протокол, за исключением того, когда вам требуется SSL. Тогда начните с ldaps :/ /",
"Port" => "Порт",
"User DN" => "DN пользователя",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "DN пользователя, под которым выполняется подключение, например, uid=agent,dc=example,dc=com. Для анонимного доступа оставьте DN и пароль пустыми.",
"Password" => "Пароль",
"For anonymous access, leave DN and Password empty." => "Для анонимного доступа оставьте DN и пароль пустыми.",
"One Base DN per line" => "По одной базе поиска (Base DN) в строке.",
"You can specify Base DN for users and groups in the Advanced tab" => "Вы можете задать Base DN для пользователей и групп на вкладке \"Расширенное\"",
"Limit %s access to users meeting these criteria:" => "Ограничить доступ к %s пользователям, удовлетворяющим этому критерию:",
"The filter specifies which LDAP users shall have access to the %s instance." => "Этот фильтр указывает, какие пользователи LDAP должны иметь доступ к %s.",
"users found" => "пользователей найдено",
"Back" => "Назад",
"Continue" => "Продолжить",
"Advanced" => "Дополнительно",
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behavior. Please ask your system administrator to disable one of them." => "<b>Предупреждение:</b> Приложения user_ldap и user_webdavauth несовместимы. Вы можете наблюдать некорректное поведение. Пожалуйста, попросите вашего системного администратора отключить одно из них.",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>Внимание:</b> Модуль LDAP для PHP не установлен, бэкенд не будет работать. Пожалуйста, попросите вашего системного администратора его установить. ",
"Connection Settings" => "Настройки подключения",
"Configuration Active" => "Конфигурация активна",
"When unchecked, this configuration will be skipped." => "Когда галочка снята, эта конфигурация будет пропущена.",
"Backup (Replica) Host" => "Адрес резервного сервера",
"Give an optional backup host. It must be a replica of the main LDAP/AD server." => "Укажите дополнительный резервный сервер. Он должен быть репликой главного LDAP/AD сервера.",
"Backup (Replica) Port" => "Порт резервного сервера",
"Disable Main Server" => "Отключить главный сервер",
"Only connect to the replica server." => "Подключаться только к серверу-реплике.",
"Case insensitive LDAP server (Windows)" => "Нечувствительный к регистру сервер LDAP (Windows)",
"Turn off SSL certificate validation." => "Отключить проверку сертификата SSL.",
"Not recommended, use it for testing only! If connection only works with this option, import the LDAP server's SSL certificate in your %s server." => "Не рекомендуется, используйте только в режиме тестирования! Если соединение работает только с этой опцией, импортируйте на ваш %s сервер SSL-сертификат сервера LDAP.",
"Cache Time-To-Live" => "Кэш времени жизни",
"in seconds. A change empties the cache." => "в секундах. Изменение очистит кэш.",
"Directory Settings" => "Настройки каталога",
"User Display Name Field" => "Поле отображаемого имени пользователя",
"The LDAP attribute to use to generate the user's display name." => "Атрибут LDAP, который используется для генерации отображаемого имени пользователя.",
"Base User Tree" => "База пользовательского дерева",
"One User Base DN per line" => "По одной базовому DN пользователей в строке.",
"User Search Attributes" => "Атрибуты поиска пользоватетелей",
"Optional; one attribute per line" => "Опционально; один атрибут в строке",
"Group Display Name Field" => "Поле отображаемого имени группы",
"The LDAP attribute to use to generate the groups's display name." => "Атрибут LDAP, который используется для генерации отображаемого имени группы.",
"Base Group Tree" => "База группового дерева",
"One Group Base DN per line" => "По одной базовому DN групп в строке.",
"Group Search Attributes" => "Атрибуты поиска для группы",
"Group-Member association" => "Ассоциация Группа-Участник",
"Nested Groups" => "Вложенные группы",
"When switched on, groups that contain groups are supported. (Only works if the group member attribute contains DNs.)" => "При включении, активируется поддержка групп, содержащих другие группы. (Работает только если атрибут член группы содержит DN.)",
"Paging chunksize" => "Постраничный chunksize",
"Chunksize used for paged LDAP searches that may return bulky results like user or group enumeration. (Setting it 0 disables paged LDAP searches in those situations.)" => "ChunkSize используется в страничных поисках LDAP которые могут возвращать громоздкие результаты, как например списки пользователей или групп. (Настройка его  в \"0\" отключает страничный поиск LDAP для таких ситуаций.)",
"Special Attributes" => "Специальные атрибуты",
"Quota Field" => "Поле квоты",
"Quota Default" => "Квота по умолчанию",
"in bytes" => "в байтах",
"Email Field" => "Поле адреса электронной почты",
"User Home Folder Naming Rule" => "Правило именования домашней папки пользователя",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "Оставьте пустым для использования имени пользователя (по умолчанию). Иначе укажите атрибут LDAP/AD.",
"Internal Username" => "Внутреннее имя пользователя",
"By default the internal username will be created from the UUID attribute. It makes sure that the username is unique and characters do not need to be converted. The internal username has the restriction that only these characters are allowed: [ a-zA-Z0-9_.@- ].  Other characters are replaced with their ASCII correspondence or simply omitted. On collisions a number will be added/increased. The internal username is used to identify a user internally. It is also the default name for the user home folder. It is also a part of remote URLs, for instance for all *DAV services. With this setting, the default behavior can be overridden. To achieve a similar behavior as before ownCloud 5 enter the user display name attribute in the following field. Leave it empty for default behavior. Changes will have effect only on newly mapped (added) LDAP users." => "По умолчанию внутреннее имя пользователя будет создано из атрибута UUID. Таким образом имя пользователя становится уникальным и не требует конвертации символов. Внутреннее имя пользователя может состоять только из следующих символов: [ a-zA-Z0-9_.@- ]. Остальные символы замещаются соответствиями из таблицы ASCII или же просто пропускаются. При совпадении к имени будет добавлено или увеличено число. Внутреннее имя пользователя используется для внутренней идентификации пользователя. Также оно является именем по умолчанию для папки пользователя в ownCloud. Оно также является частью URL, к примеру, для всех сервисов *DAV. С помощью данной настройки можно изменить поведение по умолчанию. Чтобы достичь поведения, как было до ownCloud 5, введите атрибут отображаемого имени пользователя в этом поле. Оставьте его пустым для режима по умолчанию. Изменения будут иметь эффект только для новых подключенных (добавленных) пользователей LDAP.",
"Internal Username Attribute:" => "Атрибут для внутреннего имени:",
"Override UUID detection" => "Переопределить нахождение UUID",
"By default, the UUID attribute is automatically detected. The UUID attribute is used to doubtlessly identify LDAP users and groups. Also, the internal username will be created based on the UUID, if not specified otherwise above. You can override the setting and pass an attribute of your choice. You must make sure that the attribute of your choice can be fetched for both users and groups and it is unique. Leave it empty for default behavior. Changes will have effect only on newly mapped (added) LDAP users and groups." => "По умолчанию ownCloud определяет атрибут UUID автоматически. Этот атрибут используется для того, чтобы достоверно идентифицировать пользователей и группы LDAP. Также на основании атрибута UUID создается внутреннее имя пользователя, если выше не указано иначе. Вы можете переопределить эту настройку и указать свой атрибут по выбору. Вы должны удостовериться, что выбранный вами атрибут может быть выбран для пользователей и групп, а также то, что он уникальный. Оставьте поле пустым для поведения по умолчанию. Изменения вступят в силу только для новых подключенных (добавленных) пользователей и групп LDAP.",
"UUID Attribute for Users:" => "UUID-атрибуты для пользователей:",
"UUID Attribute for Groups:" => "UUID-атрибуты для групп:",
"Username-LDAP User Mapping" => "Соответствия Имя-Пользователь LDAP",
"Usernames are used to store and assign (meta) data. In order to precisely identify and recognize users, each LDAP user will have a internal username. This requires a mapping from username to LDAP user. The created username is mapped to the UUID of the LDAP user. Additionally the DN is cached as well to reduce LDAP interaction, but it is not used for identification. If the DN changes, the changes will be found. The internal username is used all over. Clearing the mappings will have leftovers everywhere. Clearing the mappings is not configuration sensitive, it affects all LDAP configurations! Never clear the mappings in a production environment, only in a testing or experimental stage." => "ownCloud использует имена пользователей для хранения и назначения метаданных. Для точной идентификации и распознавания пользователей, каждый пользователь LDAP будет иметь свое внутреннее имя пользователя. Это требует привязки имени пользователя ownCloud к пользователю LDAP. При создании имя пользователя назначается идентификатору UUID пользователя LDAP. Помимо этого кешируется различающееся имя (DN) для уменьшения числа обращений к LDAP, однако оно не используется для идентификации. Если различающееся имя было изменено, об этом станет известно ownCloud. Внутреннее имя ownCloud используется повсеместно в ownCloud. После сброса привязок в базе могут сохраниться остатки старой информации. Сброс привязок не привязан к конфигурации, он повлияет на все LDAP-подключения! Ни в коем случае не рекомендуется сбрасывать привязки, если система уже находится в эксплуатации, только на этапе тестирования.",
"Clear Username-LDAP User Mapping" => "Очистить соответствия Имя-Пользователь LDAP",
"Clear Groupname-LDAP Group Mapping" => "Очистить соответствия Группа-Группа LDAP"
);
$PLURAL_FORMS = "nplurals=3; plural=(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2);";
