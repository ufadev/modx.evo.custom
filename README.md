Сборка обзавеласть собственным сайтом: http://modx.com.ua
Так же рекоменую скачивать сборку с сайта так как на гитхаб не всегда стабильный релиз!!!

!YAMS не работает с d5.3 исправлю в релизе d5.4

!!Ченжлог не содержит те правки которые не отличаются с офф версией 
текущая нестаблильная верси] 1.0.10-d5.4  (*.07.2013)
=======================================================
- под IE9 — не разворачивался календарь (http://modx.im/blog/dmi3yy/955.html#comment8196) 
- обновил CodeMirror до 1.1b (http://modx.im/blog/addons/960.html)
- add tv sitemap_exclude for sitemap.xml
- fix Seostrict (работа с ajax, правильная генерация ссылки на странички со своим суфиксом и на главную)
- #9849 Replace to DBAPI functions
- fix Seostrict 404 by Bumkaka
- Обновление KCFinder (https://github.com/dmi3yy/modx.evo.custom/pull/56) Больше спасибо Pathologic
- исправленна ошибка с (пишет в логи «fake settings_version») (спасибо Shin)
- исправленн виджет managermanager для evogalery для работы с админкой не MANAGER (спасибо Shin)
- webLogin Corected authorization after the password activation (Спасибо Akool)

проверить добавить до выпуска: 
===
- дитто пагинацию в параметр
- seoStrict в настройки 
- тип TV-параметров «Textarea» превратился в «Textarea (Mini)», а «Textarea (Mini)» превратился в тип «Text».


текущая версии 1.0.10-d5.3  (13.06.2013)
=======================================================
- исправлен request.extender при работе с orderBy
- исправлен парсер системных настроек (при работе игнорировались системные параметры с A-Z9-0)
- manager_path в управлениями файлов (пропадали иконки если переименовать путь к админке)
- баг при редактировании картинков в EvoGallery (когда картинка рушит внешний вид) 
- update MultiTv to 1.5.1
- исправленна ошибка в сниппете IF с параметром  notempty
- CodeMirror Добавление горячих клавиш и подсветка синтаксиса у документов типов: css, js, json (спасибо Mihanik71)
- в TV type="number" теперь возможны только символы (0-9+-.,)
- добавил в ностройки SMTP-порт 
- при использовании 2-х datapicker 1 перекрывался другим (исправленно)
- JotX поправлен вывод даты
- fix subject in phpmailer
- мелкие правки manager_path
- Обновление CodeMirror до версии 3,13 (спасибо Mihanik71)
- CodeMirror Add fullscreen and MODx tags (спасибо Mihanik71)
- CodeMirror Add Emmet (спасибо Mihanik71)
- CodeMirror in FileManager (спасибо Mihanik71)
- Обновление snippet sitemap (спасибо Mihanik71)
- добавление параметров для карты сайта в таб для SEO (спасибо Mihanik71)
- Обновление fancybox до 2.1.4 (спасибо Mihanik71)
- добавил тему из стандартного MODX EVO
- перенос SeoStrictUrl в ядро (спасибо 64j)
- удалил SeoStrictUrl
- обновил ajaxSearch to 1.9.3b
- исправленно автоматичское добавление alias_visible при простом обновлении сайта (спасибо Bumkaka)
- исправлен баг в DirectResize (http://modx.im/blog/questions/904.html#comment7793)
- fix  Удаление ключей в $_GET в Ditto(http://modx.im/blog/dmi3yy/895.html#comment7605)
- разрешение добликатов псевдонимов в разных папках (http://modx.im/blog/fast-solution/810.html) (спасибо Webber)
- добаленна сортировка при просмотре дочерних документов ресурса (спасибо Webber)
- поправил сниипет phpthumb (лишний слеш) и переименовал его папку для картинок и в сниппетах

============то что будет в 1.0.11=============
- fix trouble with display 2 tv with type date
- Refactor #9939: multiple event functions separated by comma
- Bug #9938: Send sendirect, ccsender and autotext mails
- #9933 insideManager - security fix
- Refactor #9930 update tv type numeric and email to html5
- Refactor #3833 Default template in root when Sibling is checked
- Refactor #3432 Use menutitle instead of Pagetitle in resource tree
- Refactor #5972 Installer should check whether $_SESSION data
- Refactor #9845 Snippet Parameters cannot use Chunks
- Refactor #9797 Fetch modx tags without using the regular expression
- Refactor #9891 Delete phpSniff
- Fixed 'wrong datatype' warning at install 
- Refactor parser statistics into own method, so accessible from all code
- Refactor #9860 Delete Etomite database functions
- Refactor #9720 Separation deprecated core functions 
- Refactor #9861 Should be core files line feed code


текущая стабильная версии 1.0.10-d5.2  (18.04.2013)
=======================================================
- исправленна ошибка в getParentIds при отключенный AliasVisible не коректно работало
- из .htaccess удалены ненужные записи
- update phpthumb snippet
- Автоматическое добавление alias_visible при обновлении с modx evo
- добавил параметр а EvoGallery (https://github.com/Mark-H/EvoGallery/pull/55)
- ускорение работы KCFinder при большом количестве папок 
- решение проблемы с прозрачными PNG и GIF в KCFinder


1.0.9-d5  (19.03.2013)
=======================================================
- добавлен параметр outerTpl в Ditto (http://modx.im/blog/triks/414.html)
- добавлен placeholder [+ditto_class+] в Ditto (http://modx.im/blog/triks/416.html)
- delete CacheExtender
- refactor exec mergeSettingsContent Для использования системных плейсхолдеров не только в шаблонах и чанках
- добавлен плагин CfgTv 0.1  (http://modx.im/blog/addons/425.html)
- fix phpthumb for php5.4
- update distinct extender for Ditto Evo to 1.0.2 version (http://modx.com/extras/package/distinctdittoextender)
- исправленна ошибка в DocInfo ( "$render = )" )
- ManagerManger откатил до 0.3.11
- ManagerManager исправленна проблема с переносом CustomTV в отдельные вкладки
- add customTv choiceTv (http://modx.im/blog/triks/489.html)
- fix folder .thumbs (теперь папка создается по умолчанию но для нее нужно все равно выставлять права на запить)
- fix crumbSeparator and separator to BreadCrumbs (параметр для хлебных крошек поправлен)
- tinyMCE youtube in full mode (добавил кнопу YouTube в Full - режиме
- add caption for TV in tv-list (теперь на страничке всех ТВ у них отображается не только описание но и название)
- настроил RSS на modx.com.ua что б транслировать новости сборки и новости modx evo
- обновил phpmailer до 5.2.4
- добавил в системные параметры настройки для отправки почты через SMTP
- добавил возможность отправлять в eForm, JotX, WebLogin, WebSignup, ForgotManagerLogin, создание менеджера и веб пользователя через smtp
- fix MODX_MANAGER_PATH (убрал лишний слеш)
- При создании нового документа что б переходило к документу (http://community.modx-cms.ru/blog/tips_and_tricks/848.html#comment11349)
- Поправлен некоректный html при выводе TV типа select
- Правильное указание select
- Fix ImageMagick which convert issue (PHP 5.3.2+) for phpthumb
- TV & template blank (Избавляемся от лишнего SQL запроса за TV параметрами если у документа выбран шаблон blank)
- Fix разбора параметра типа list-multi в модулях/плагинах/сниппетах
- исправил ошибку когда при инстале заменялось содержимое чанков


1.0.8-d4.1  (10.02.2013)
========================================================
- плагин tvs-on-template (позволяет прям в шаблоне указывать какие тв к нему относяться)
- удалил phx из multiPhotos
- исправил ошибку при обновлении (нужно было экранировать кавычки в параметрах модулей и плагинов)
- демо сайт устанавливается теперь как нужно
- добавил отсутствующие файлы TreeTabs плагина
- seo strict Url - выключен по умолчанию
- parseChunk - Передаем параметры в чанки (http://modx.im/blog/triks/398.html)
- update DocInfo (http://modx.im/blog/addons/101.html#comment864)
- обновил с mysql_escape_string до mysql_real_escape_string для лучшей совместимости с php 5.4


1.0.8-d4 (17.01.2013)
========================================================
- возможность поменять папку manager
- заполнения пропущенных id в site_content (опционально в настройках) 


1.0.8-d3 (15.01.2013)
========================================================
- обновлен JotX до 1.1 (https://github.com/Temus/JotX/)
- обновлен ManagerManager до 0.4 (http://code.divandesign.biz/modx/managermanager)
- добавлен модуль ddMMEditor 1.2.3 (http://code.divandesign.biz/modx/ddmmeditor)
- добавлен сниппет ddGetMultipleField 2.13 (http://code.divandesign.ru/modx ddgetmultiplefield)
- вернул тему EvoRevo и немного доработал
- обновлен снипет IF до 1.2
- удалил модуль EasyAdvertising 
- удален снипет Youtube 
- update TinyMce + добавлен плагин Youtube и кнопка justifyFull (http://modx.im/blog/addons/234.html)
- add MarkitUp! плагин (http://modx.im/blog/addons/65.html)
- add multiTV (https://github.com/Jako/multiTV)
- удален Getfiled  вместо него есть DocInfo (быстрее и меньше запросов)
- fix EXACTPHRASE in AjaxSearch 
- fix phpthumb for seo image name
- резервное копирование и востановление из modx.jp форка


1.0.7-d2 (26.11.2012)
========================================================
- обновлен modx до версии 1.0.7 
- исправленно пару ошибок в снипете IF
- обновлен плагин Forgot Manager Login до версии 1.1.4


1.0.6-d2 (09.11.2012)
========================================================
- удален phx, используйте сниппет IF для логических операций
- отключен phx в ditto  для включения пишем  &phx=`1`
- снипеты плагины вынесенны в файлы
- пагинация дитто теперь работает хитро: (http://d.hatena.ne.jp/hikidas_ikeda/20090831/1251718786)
- изменено оформелние админки
- добавлен плагин FileSource, доработан так же под работу с плагинами(http://community.modx-cms.ru/blog/dev/456.html)
рекомендую для безопасности в свои снипеты которые добавляете в файлы добавлять строку: 
if(!defined('MODX_BASE_PATH')){die('What are you doing? Get out of here!');}


1.0.6-d1 (20.09.2012)
========================================================
---------------Добавленны файлы:------------------------
- fancybox
- swfobject

--------------Инсталл изменение настроек----------------
- изменил setup.sql (поправил настройки по умолчанию)  (http://e-kao.ru/ownmodx)
- при инстале удалил все языки кроме EN и RU


-------------Изменение системных файлов----------------
- поправил robot.txt
- транслитерация файлов в менеджере картинок и файлов  (http://www.supremum.lv/2010/04/09/transliteraciya-imyon-fajlov-pri-zagruzke-v-modx/)
- wait.static.php - ускоряем переход на главную при сохранении (http://community.modx-cms.ru/blog/tips_and_tricks/2580.html)
- jot обновил шаблоны
- правка managermanager - глюк тв параметра с картинкой mm_widget_showimagetvs  (http://community.modx-cms.ru/blog/questions/2486.html)
- правка managermanager - глюк в MultiPhotos MultiFiles - (http://community.modx-cms.ru/blog/addons/1232.html#comment18538)
- ditto отключение пагинации если 1 страничка (ditto.class.inc.php)
- ditto замена ?=& при работе с @CODE на |xq|','|xe|','|xa| (template.class.inc.php)
- transalias - правильная транслитерация по умолчанию
- FirstChildRedirect - баг с Яндексом (http://community.modx-cms.ru/blog/questions/627.html#comment6754)
- JotX (https://github.com/Temus/JotX/)
- phpmailer - патч (http://forums.modx.com/index.php/topic,36046.0.html)
- ditto исправлен баг в get масивом (http://community.modx-cms.ru/blog/2760.html#comment21973)
- хак дерева документов для редактирования дочерних ресурсов(http://community.modx-cms.ru/blog/tips_and_tricks/848.html)
- переведен на русский datepicker.js
- хак tree.php  для вывода иконки быстрго доступа к елементам(эксперементальная штука)
- удалил лишние языки из manager, а так же снипетов модулей и плагинов
- instprocessor.php - если плагин без категории то инстлируем его отключенным
- добавил свое оформления странички входа
- document.parser.class.inc.php - http://community.modx-cms.ru/blog/fast-solution/6964.html
- заменил файловый менеджер на KCFinder (http://community.modx-cms.ru/blog/tips_and_tricks/932.html)
- обновдение парсера для работы с вложенными снипетами
- обновление кеша для кеширования страниц с учетом гет параметров


--------------------------------TV----------------
- добавленны TV для SEO:  ключевые слова, мета дескрипшн, мета титл, управление URL (вынесено сразу в отдельную вкладку), управление индексом


-------------------------------Чанки------------------
- удалил чанк: weblogin sidebar 
- добавил чанк стандартной формы отправки сообщения feedback
- добавил чанк ie6nomore(можно всраивать в шапку 
- переименовал mm_demo_rules в mm_rules
- добавил в mm_rules несколько примеров
- fancy  - скрипты для лайтбокса


-----------------------Сниппеты------------------------
- MultiFiles 1.11   (http://community.modx-cms.ru/blog/addons/1232.html)
- MultiPhotos 1.24  (http://community.modx-cms.ru/blog/addons/1146.html)
- TvTable 1.1       (http://community.modx-cms.ru/blog/addons/1170.html)
- aDate  - вывод русской даты
- GetField 1.3            (http://modx.com/extras/package/getfield)
- parentTitle - получаем pagetitle парента   (http://forums.modx.com/?action=thread&thread=11074)
- sitemap.xml 1.0.8  (есть новее надо обновить) (http://modx.com/extras/package/sitemap)
- splitPagination 2.0 - красивая пагинация для Ditto   (http://modx.com/extras/package/splitpagination)
- YouTube 0.1  
- include
- EvoGallery (http://modx.com/extras/package/evogallery) 
- phpthumb by Karandash (http://community.modx-cms.ru/blog/6217.html)
- обновил веблогин и вебсингап (http://modx-shopkeeper.ru/forum/viewtopic.php?id=226)
- Easy Advertising управление рекламой(http://community.modx-cms.ru/blog/addons/7197.html)
- Ajax submit 1.0 (http://wdevblog.net.ru/blog/ajaxsubmit-1.0-otpravka-ajax-zaprosom-dannyix-lyuboj-formyi-modx.html)
- if, isset (http://community.modx-cms.ru/blog/addons/7801.html)
- alterTitle  вывод pagetitle если longtitle пустой 
- DocInfo    (http://community.modx-cms.ru/blog/fast-solution/6543.html#comment43842)
- truncate (http://minyta.ru/modx/snippet/usechenie.html)

------------------------Плагины-------------------------
- добавил плагин seo_strict_urls       (http://modx.com/extras/package/?id=seostricturls)
- добавил ACE (подсветка кода)    (http://community.modx-cms.ru/blog/addons/5828.html)
- добавил CodeMirror (подсветка кода)    (http://forums.modx.com/thread/73753/codemirror-for-modx-evolution)
- TvTable 1.11         (http://community.modx-cms.ru/blog/addons/1170.html)
- MultiFiles 1.0.2      (http://community.modx-cms.ru/blog/addons/1232.html)
- MultiPhotos 1.26     (http://community.modx-cms.ru/blog/addons/1146.html) + (http://community.modx-cms.ru/blog/addons/1146.html#comment13064)
- customTemplate 0.1   (http://community.modx-cms.ru/blog/addons/2368.html)
- devStat 1.0    (http://62.109.9.249/raznoe/devstat___plagin_dlya_mod.html)
- PHx 2.1.4 + хак(меньше запросов) + <!--phx-stop--><!--phx-start-->    (http://community.modx-cms.ru/blog/fast-solution/2782.html)
- исправил глюк с вкладками в MM при переносе в них тв вида чекбокс и радио
- DirectResize 0.8  - автосоздание мелких картинок в контенте и не только
- CacheAccelerator    - кешируем все что можно :) (http://community.modx-cms.ru/blog/addons/1621.html)
- CacheExtender 0.4b - (http://community.modx-cms.ru/blog/dev/1625.html)
- managermanager 0.3.11 (http://modx.com/extras/package/managermanager)
- Ajax submit 1.0 (http://wdevblog.net.ru/blog/ajaxsubmit-1.0-otpravka-ajax-zaprosom-dannyix-lyuboj-formyi-modx.html)
- customSettings 1.0 (http://community.modx-cms.ru/blog/addons/1778.html)
- systemField (http://community.modx-cms.ru/blog/addons/1225.html)
- alwaysStay (http://habrahabr.ru/post/112813/)



-------------------------Модули----------------------------
- Модуль doc finder    (http://habrahabr.ru/blogs/modx/102635/)

----------------Экстендеры для Ditto-----------------------
- distinct  (http://modx.com/extras/package/distinctdittoextender)
- jotcount
- tvFilter
- glossaryFilter  (http://setpro.pl/software/ditto-stuff/glossary-extender)
- nosort(customsort)
- search(https://github.com/yama/MODx-Ditto-Extenders/)
- jotdatesort (http://community.modx-cms.ru/blog/addons/6532.html)
- level (вывод документов определенного уровня http://community.modx-cms.ru/blog/questions/6534.html#comment31029)
- andFilter

----------------------------setup.sql----------------------
- Default admin account -> admin
- My MODx site -> MODx Site By Dmi3yy
- Шаблон по умолчанию СОСЕДНИЙ
- Опубликованно по умолчанию
- Дружественные урлы ВКЛ с вложенностью
- капча 0,1,2,3,4,5,6,7,8,9
- запоминать вкладки ДА
- изменен шаблон по умолчанию
- тема по умолчанию MOdxCarbonEvoRevo