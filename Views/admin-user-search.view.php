$view = new view();
$view->name = 'user_search';
$view->description = '';
$view->tag = 'default';
$view->base_table = 'users';
$view->human_name = 'User Search';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'User Search';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'role';
$handler->display->display_options['access']['role'] = array(
  3 => '3',
);
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'full';
$handler->display->display_options['pager']['options']['items_per_page'] = '50';
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['columns'] = array(
  'name' => 'name',
  'mail' => 'mail',
  'created' => 'created',
  'status' => 'status',
  'edit_node' => 'edit_node',
);
$handler->display->display_options['style_options']['default'] = 'name';
$handler->display->display_options['style_options']['info'] = array(
  'name' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'mail' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'created' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'status' => array(
    'sortable' => 1,
    'default_sort_order' => 'asc',
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
  'edit_node' => array(
    'align' => '',
    'separator' => '',
    'empty_column' => 0,
  ),
);
/* Field: User: Name */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['name']['alter']['ellipsis'] = FALSE;
/* Field: User: E-mail */
$handler->display->display_options['fields']['mail']['id'] = 'mail';
$handler->display->display_options['fields']['mail']['table'] = 'users';
$handler->display->display_options['fields']['mail']['field'] = 'mail';
/* Field: User: Created date */
$handler->display->display_options['fields']['created']['id'] = 'created';
$handler->display->display_options['fields']['created']['table'] = 'users';
$handler->display->display_options['fields']['created']['field'] = 'created';
$handler->display->display_options['fields']['created']['date_format'] = 'short';
/* Field: User: Active */
$handler->display->display_options['fields']['status']['id'] = 'status';
$handler->display->display_options['fields']['status']['table'] = 'users';
$handler->display->display_options['fields']['status']['field'] = 'status';
$handler->display->display_options['fields']['status']['not'] = 0;
/* Field: User: Last access */
$handler->display->display_options['fields']['access']['id'] = 'access';
$handler->display->display_options['fields']['access']['table'] = 'users';
$handler->display->display_options['fields']['access']['field'] = 'access';
$handler->display->display_options['fields']['access']['date_format'] = 'short';
/* Field: User: Last login */
$handler->display->display_options['fields']['login']['id'] = 'login';
$handler->display->display_options['fields']['login']['table'] = 'users';
$handler->display->display_options['fields']['login']['field'] = 'login';
$handler->display->display_options['fields']['login']['date_format'] = 'short';
/* Field: User: Edit link */
$handler->display->display_options['fields']['edit_node']['id'] = 'edit_node';
$handler->display->display_options['fields']['edit_node']['table'] = 'users';
$handler->display->display_options['fields']['edit_node']['field'] = 'edit_node';
/* Filter criterion: User: Active */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'users';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = '1';
$handler->display->display_options['filters']['status']['group'] = 1;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
/* Filter criterion: User: E-mail */
$handler->display->display_options['filters']['mail']['id'] = 'mail';
$handler->display->display_options['filters']['mail']['table'] = 'users';
$handler->display->display_options['filters']['mail']['field'] = 'mail';
$handler->display->display_options['filters']['mail']['operator'] = 'contains';
$handler->display->display_options['filters']['mail']['exposed'] = TRUE;
$handler->display->display_options['filters']['mail']['expose']['operator_id'] = 'mail_op';
$handler->display->display_options['filters']['mail']['expose']['label'] = 'E-mail';
$handler->display->display_options['filters']['mail']['expose']['operator'] = 'mail_op';
$handler->display->display_options['filters']['mail']['expose']['identifier'] = 'mail';
$handler->display->display_options['filters']['mail']['expose']['remember_roles'] = array(
  2 => '2',
  1 => 0,
  9 => 0,
  10 => 0,
  4 => 0,
  8 => 0,
  7 => 0,
  3 => 0,
  6 => 0,
);
/* Filter criterion: User: Name */
$handler->display->display_options['filters']['uid']['id'] = 'uid';
$handler->display->display_options['filters']['uid']['table'] = 'users';
$handler->display->display_options['filters']['uid']['field'] = 'uid';
$handler->display->display_options['filters']['uid']['value'] = '';
$handler->display->display_options['filters']['uid']['exposed'] = TRUE;
$handler->display->display_options['filters']['uid']['expose']['operator_id'] = 'uid_op';
$handler->display->display_options['filters']['uid']['expose']['label'] = 'Name';
$handler->display->display_options['filters']['uid']['expose']['operator'] = 'uid_op';
$handler->display->display_options['filters']['uid']['expose']['identifier'] = 'uid';
$handler->display->display_options['filters']['uid']['expose']['remember_roles'] = array(
  2 => '2',
  1 => 0,
  9 => 0,
  10 => 0,
  4 => 0,
  8 => 0,
  7 => 0,
  3 => 0,
  6 => 0,
);

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page');
$handler->display->display_options['path'] = 'admin/people/search';
$handler->display->display_options['menu']['type'] = 'tab';
$handler->display->display_options['menu']['title'] = 'User search';
$handler->display->display_options['menu']['weight'] = '0';
$handler->display->display_options['menu']['name'] = 'management';
$handler->display->display_options['menu']['context'] = 0;
$handler->display->display_options['menu']['context_only_inline'] = 0;
