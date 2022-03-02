<?php


namespace App\Models;

use CodeIgniter\Model;

/**
 * Class DefaultData_model
 * @package App\Controllers
 * все возможные настроки опианы здесь
 * данные по умолчанию для настроек таблиц, полей, пользователей и т.д.
 * возможно надо в модель перенести
 */
class DefaultData_model extends Model
{
	/*
	 * Параметры и значения по умолчанию
	 * 'раздел' => [  - раздел настроек
	 * 		'description' => '', - описание раздела
	 * 		'группа' => [ - группа настроек в разделе
	 * 			'description' => '', - описание группы
	 *  		'настройка' => [ - имя настройки
	 * 				'description' => '', - описание настройки
	 * 				'value' => '', - значение настройки
	 * 				'data' => '', - писок значений для выбора
	 * 				'editable' => true, - доступно для редактирования
	 * 				'type' => 'text' - тип поля для редактирвоания text, select, checkbox, ...
	 * 				'help' => null - текст, ссылка, или файл с дополнительным описанием
	 * 			],
	 *		 ],
	 * ],
	 */
	private $defaultConfig = [
		// основные настройки
		'MainConfig'	 => [
			'description' => 'Основные настройки',
			'Main' => [
				'description' => 'Общие',
				'Version' => [
					'description'	 => 'Версия',
					'value'			 => '3',
					'editable'		 => false,
					'type'			 => 'text',
					'help'			 => null
				],
				'DefaultName' => [ // Instance name
					'description'	 => 'Название экземпляра',
					'value'			 => 'ET',
					'editable'		 => true,
					'type'			 => 'text',
					'help'			 => null
				],
				'DefaultTable' => [ // если пусто, то список всех таблиц
					'description'	 => 'Стартовая таблица по умолчанию',
					'editable'		 => true,
					'type'			 => 'select',
					'value'			 => '',
					'data'			 => [
						''	 => 'Таблица не задана',
					],
					'help'			 => null
				],
				'DefaultTheme' => [ // если пусто, то список всех таблиц
					'description'	 => 'Тема оформления',
					'value'			 => 'default',
					'editable'		 => true,
					'type'			 => 'text',
					'help'			 => null
				],
			],
			'Access' => [
				'description' => 'Доступ',
				'UsePassword' => [
					'description'	 => 'Использовать проль для входа',
					'value'			 => false,
					'editable'		 => true,
					'type'			 => 'checkbox',
					'help'			 => 'Должен быть настроен пользователь с правами root'
				],
				'DefaultUserGroup' => [
					'description'	 => 'Группа пользователя по умолчанию',
					'value'			 => 'root',
					'editable'		 => true,
					'type'			 => 'select',
					'data'			 => [
						'read'	 => 'Только чтение (read)',
						'new'	 => 'Создание новых записей (read,new)',
						'edit'	 => 'Редактирование (read,new,edit)',
						'delete' => 'Удаление (read,new,edit,delete)',
						'admin'	 => 'Администратор (read,new,edit,delete,admin)',
						'root'	 => 'Супер администратор (read,new,edit,delete,admin,root)',
					],
					'help'			 => null
				],
				'DefaultUserGroupList' => [
					'description'	 => 'Список групп по умолчанию',
					'editable'		 => false,
					'type'			 => 'select',
					'value'			 => 'read',
					'data'			 => [
						'read'	 => 'read',
						'new'	 => 'read,new',
						'edit'	 => 'read,new,edit',
						'delete' => 'read,new,edit,delete',
						'admin'	 => 'read,new,edit,delete,admin',
						'root'	 => 'read,new,edit,delete,admin,root',
					],
					'help'			 => null
				],
				'DefaultUserRight' => [
					'description'	 => 'Список разрешений по умолчанию',
					'editable'		 => false,
					'type'			 => 'select',
					'value'			 => 'read',
					'data'			 => ['read','new','edit','delete','admin','root',],
					'help'			 => null
				],

			],
		],
		// типы полей
		'FieldType'	 => [
			'string'		 => 'string', // текстовая строка (возможноть выбора значения из справочника, если он подключен)
			'textarea'		 => 'textarea', // поле для ввода текста
			'selectarea'	 => 'selectarea', // выподающий список
			'radiobutton'	 => 'radiobutton', // радио кнопки

			'number'		 => 'number', // числовое поле (любое числовое значение)
			'date'			 => 'date', // если дата в таблице представлена в виде timestamp (int)
			'datetime'		 => 'datetime', // если дата в таблице представлена в формате DateTime
			'varbool'		 => 'varbool', // true/false, 1/0
			'support'		 => 'support',

//			'directory_name' => 'directory_name', // если берем только значение из справочника
			'directory_id'	 => 'directory_id', // если привязываемся к значению справочника

			'link'			 => 'link', // ссылка
			'file'			 => 'file', // файл
			'image'			 => 'image', // изображение

			'list_string'	 => 'list_string', // список строк
			'list_link'		 => 'list_link', // список ссылок
			'list_file'		 => 'list_file', // список файлов
			'list_image'	 => 'list_image', // список картинок

			'hide'			 => 'hide', // скрытое поле
			'password'		 => 'password', // поле с паролем

		],
		//шаблон настроек для всей таблицы
		'TableConfig'	 => [
			'name'					 => '', // название таблицы как оно есть в БД
			'description'			 => '', // описание для вывода в заголовке
			'PrimaryKey'			 => '', //

			'OrderFields'			 => '', // порядок сортировки, как в запросе, поле с выбором field0 asc, field1 desc,
			'limit'					 => '', // сколько записей выдвать на одну страницу
			'StatusField'			 => '', // поле по которому сомотреть отображать или нет запись в списке
			'AllRows'				 => true, // показывать в списке все записи или только те которые не попадают под StatusField
			'WhereType'				 => 'or', // and/or режим объединение условий в поиске
			'TotalSumm'				 => false, // показывать сумму по числовым полям в низу списка

			'ico'					 => '', // иконка для шапки
			'tpl'					 => '', // оформление для списка и форм

			'BeforeLoading'			 => '', // функция до загрузки таблицы, используется в списке и в редактировании
			'AfterLoading'			 => '', // функция полсе загрузки таблицы, используется в списке и в редактировании

			'BeforeLoadinglist'		 => '', // функция до загрузки списка таблицы
			'AfterLoadinglist'		 => '', // функция полсе загрузки списка таблицы

			'BeforeLoadEditForm'	 => '', // функция до загрузки формы редактирования записи
			'AfterLoadEditForm'		 => '', // функция после загрузки формы редактирования записи

			'BeforeSaveEditForm'	 => '', // функция до сохранения формы редактирования записи
			'AfterSaveEditForm'			 => '', // функция после сохранения формы редактирования записи

			'BeforeDelRow'			 => '', // в списке функция до удаления записи
			'AfterDelRow'			 => '', // в списке функция после удаления записи

			'BeforeChangeRow'		 => '', // в списке функция до внесения изменения в поле статуса указанного в настройках StatusField
			'AfterChangeRow'		 => '', // в списке функция после внесения изменения в поле статуса указанного в настройках StatusField

			'SelectFunction'		 => '', // запрос для списка записей

			'ReadonlyOffForCopyRow'	 => '', // разрешить редактирование полей для чтения при копориовании записи

			'FormFieldWidth'		 => '500', // ширина полей на форме
			'FormFieldHeight'		 => '100', // высота полей на форме

			'FormButtonShowSave'	 => true, // показать кнопку формы 'Сохранить'
			'FormButtonShowCancel'	 => true, // показать кнопку формы 'Отмена'
			'FormButtonShowPrint'	 => true, // показать кнопку формы 'Печать'
			'FormButtonShowCopy'	 => true, // показать кнопку формы 'Сделать копию'

			'NameTabFileList'		 => 'Загрузка файлов',
			'UseTableFileList'		 => false,

			'NameTabTableList'		 => 'Список',
			'UseTableList'			 => false,

			'NameTabTableUser'		 => 'Список таблиц пользователя',
			'UseTableUser'			 => false,

			'is_directory'			 => false, // является ли таблица справчником или просто таблицей
			'directory_root'		 => '', // родительское поле
			'directory_name'		 => '', // имя в списке
			'directory_name2'		 => '', // имя в списке 2, разделитель ', '
			'directory_name3'		 => '', // имя в списке 3, разделитель ', '
			'directory_name4'		 => '', // имя в списке 4, разделитель ', '
			'directory_name5'		 => '', // имя в списке 5, разделитель ', '
			'directory_name_edit'	 => '', // имя для полей редатирования в других таблицах
			'directory_name_edit2'	 => '', // имя для полей редатирования в других таблицах 2, разделитель ', '
			'directory_name_edit3'	 => '', // имя для полей редатирования в других таблицах 3, разделитель ', '
			'directory_name_edit4'	 => '', // имя для полей редатирования в других таблицах 4, разделитель ', '
			'directory_name_edit5'	 => '', // имя для полей редатирования в других таблицах 5, разделитель ', '

//'directory_name_show' => '', // имя в списке для связи по идентификатору
			'directory_type'		 => '', // это категория

			'directory_NoAddInWindow' => false, // это категория
			'directory_NoSelectCat'	 => false, // запретить выбор категорий в окне выбора
			'directory_UseFullPath'	 => false, // показывать полный путь к выбранному элементу

			'FileStore'				 => '' // папка для загрузки файлов

		],
		// шаблон настроек полей
		'FieldConfig'	 => [
			'name'				 => null, // название таблицы
			'description'		 => null, // описание таблицы
			'column_descr'		 => null, // название для колонки
			'type'				 => 'string', // от типа зависит формат редактирования данных

			'type_data'			 => '', // данные для полей с типом selectarea и radio
			'dateformat'		 => 'Y-m-d H:i:s', // формат времени
			'default'			 => '', // значение по умолчанию, необходимо при создании новой записи или вывода в список
			'maxlength'			 => '', // ограничениее на количество символов для текстовых полей ('maxlength'=''), 0 или '' не ограничено

//			'directory_table'	 => '', // подключаемая таблица - это наверное отельно надо сделать для возможности подключения нескольких дочерних таблиц
			'multiselect'		 => false, // Множественный выбор для полей типа directory_name
			'multiselect_sep'	 => ',', // Разделитель выбранного для полей типа directory_name

			'visible'			 => true, // использовать в списке
			'editable'			 => true, // использовать на форме редактирования
			'forprint'			 => true, // использовать в печатно форме
			'for_search'		 => true, // использовать на форме поиска и вообще для поиска
			'readonly'			 => false, // только для чтения при редактирвоании
			'use_order'			 => false, // в списке включить сортировку по колонке
			'required'			 => false, // при редактировании поле обязательно к заполнению

			'width'				 => '',

			'image'				 => '', // для списка, использование иконок
			'image_other'		 => '', // для списка, использование иконок

			'link'				 => '', // для списка
			//'link_edit'		 => '0', // для списка
			'link_image'		 => '1', // для списка
			'link_newwindow'	 => '0', // для списка

//			'func'				 => '', // функция только не помню когда выполняется и нужна ли вообще
			//'theme_head'		 => '',
//			'theme'				 => '', // не нужная настройка, тема офрмления поля

			'FormFieldWidth'	 => '', // ширина полей на форме, если не указано берем из ['TableConfig']['FormFieldWidth']
			'FormFieldHeight'	 => '', // высота полей на форме, если не указано берем из ['TableConfig']['FormFieldHeight']
			'FormColumn'		 => '0', // колонка размещения поля на форме редактирования в квдрате 3х3

			// в списке, для вывода в нескольких полей в одной колонке
			'AttachField1'		 => '',
			'AttachField2'		 => '',
			'AttachField3'		 => '',
			'AttachField4'		 => '',
			'AttachField5'		 => '',
			'AttachSeparator'	 => '; ', // Разделитель объединенных полей
			'AttachShowColumnName' => '0' // показывать название колонки в списке
		]
	];

	public function getMainConfig(){

		return $this->defaultConfig['MainConfig'];
	}
}