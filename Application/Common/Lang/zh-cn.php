<?php

/**
 * 公共语言包
 * @author   Devil
 * @blog     http://gong.gg/
 * @version  0.0.1
 * @datetime 2016-12-01T21:51:08+0800
 */
return array(
	// 站点信息
	'common_site_name'					=>	'SchoolCMS',
	'common_site_title'					=>	'SchoolCMS后台管理系统',

	// 应用信息
	'common_application_name'			=>	'SchoolCMS',
	'common_application_ver'			=>	'v2.0',
	'common_application_website'		=>	'http://schoolcms.org/',

	// 公共
	'common_login_invalid'				=>	'登录失效，请重新登录',
	'common_jump_tips'					=>	'页面跳转中...',
	'common_form_loading_tips'			=>	'处理中...',
	'common_mobile_name'				=>	'手机号码',
	'common_mobile_format_error'		=>	'手机号码格式错误',
	'common_id_card_name'				=>	'身份证',
	'common_id_url_name'				=>	'url地址',
	'common_id_ip_name'					=>	'ip地址',
	'common_admin_name'					=>	'管理员',
	'common_not_login_name'				=>	'未登录',
	'common_not_data_tips'				=>	'没有数据',
	'common_create_time_name'			=>	'创建时间',
	'common_delete_tips'				=>	'你，确定要删除这条记录吗？',
	'common_do_not_operate'				=>	'不可操作',
	'common_name_text'					=>	'名称',
	'common_pid_text'					=>	'父id',
	'common_address_text'				=>	'详细地址',
	'common_more_screening'				=>	'更多筛选',
	'common_more_name'					=>	'更多',
	'common_see_more_name'				=>	'查看更多',
	'common_detail_content'				=>	'详情内容',

	'common_param_error'				=>	'参数错误',
	'common_format_error'				=>	'格式错误',
	'common_format_success'				=>	'格式正确',
	'common_success'					=>	'正确',
	'common_error'						=>	'错误',
	'common_username_already_exist'		=>	'帐号已经存在',
	'common_there_is_no_power'			=>	'无权限',
	'common_select_can_choose'			=>	'可选择...',
	'common_select_level_one_choice'	=>	'一级栏目...',
	'common_sort_error'					=>	'顺序只能为数字（不能超过3位）',
	'common_is_exist_son_error'			=>	'该节点下还存在子级数据',
	'common_name_format'				=>	'名称格式 2~16 个字符',
	'common_pid_format'					=>	'请选择所属级别',
	'common_student_state_format'		=>	'请选择学生状态',
	'common_address_format'				=>	'详细地址2~30 个字符',
	'common_teacher_state_format'		=>	'请选择教师状态',

	'common_operation_name'				=>	'操作',
	'common_operation_add'				=>	'新增',
	'common_operation_edit'				=>	'编辑',
	'common_operation_delete'			=>	'删除',
	'common_operation_back'				=>	'返回',
	'common_operation_save'				=>	'保存',
	'common_operation_query'			=>	'查询',
	'common_operation_confirm'			=>	'确认',
	'common_operation_cancel'			=>	'取消',
	'common_operation_success'			=>	'操作成功',
	'common_operation_error'			=>	'操作失败',
	'common_operation_add_success'		=>	'新增成功',
	'common_operation_add_error'		=>	'新增失败',
	'common_operation_edit_success'		=>	'编辑成功',
	'common_operation_edit_error'		=>	'编辑失败或数据未改变',
	'common_operation_delete_success'	=>	'删除成功',
	'common_operation_delete_error'		=>	'删除失败或数据不存在',
	'common_operation_unauthorized'		=>	'非法操作',
	'common_value_not_change'			=>	'数据未改变',
	'common_gender_tips'				=>	'性别值范围不正确',
	'common_enable_tips'				=>	'启用值范围不正确',
	'common_view_pay_cost_tips'			=>	'缴费状态值范围不正确',
	'common_view_tel_error'				=>	'联系方式格式有误',
	'common_view_tel_tips'				=>	'座机或手机号码',
	'common_view_id_card_format'		=>	'身份证号码格式有误',
	'common_no_exist_id_card_tips'		=>	'身份证号码不存在',
	'common_is_exist_id_card_tips'		=>	'身份证号码已存在',
	'common_student_state_tips'			=>	'学生状态值范围不正确',
	'common_tuition_state_tips'			=>	'缴费状态值范围不正确',
	'common_data_is_exist_error'		=>	'数据已存在',

	'common_view_gender_name'			=>	'性别',
	'common_view_enable_title'			=>	'是否启用',
	'common_view_name_title'			=>	'名称',
	'common_view_state_title'			=>	'状态',
	'common_view_is_show_title'			=>	'是否显示',
	'common_view_sort_title'			=>	'顺序',
	'common_view_student_state_name'	=>	'学生状态',
	'common_view_pay_cost_name'			=>	'缴费状态',
	'common_view_tel_name'				=>	'联系方式',
	'common_view_id_card_text'			=>	'身份证号码',
	'common_view_teacher_state_name'	=>	'教师状态',

	'common_unauthorized_access'		=>	'非法访问',
	'nav_fulltext_open'					=>	'开启全屏',
	'nav_fulltext_exit'					=>	'退出全屏',
	'nav_switch_text'					=>	'导航切换',

	// 性别
	'common_gender_list'				=>	array(
			0 => array('id' => 0, 'name' => '保密', 'checked' => true),
			1 => array('id' => 1, 'name' => '女'),
			2 => array('id' => 2, 'name' => '男'),
		),

	// 是否启用
	'common_is_enable_tips'				=>	array(
			0 => array('id' => 0, 'name' => '未启用'),
			1 => array('id' => 1, 'name' => '已启用'),
		),
	'common_is_enable_list'				=>	array(
			0 => array('id' => 0, 'name' => '不启用'),
			1 => array('id' => 1, 'name' => '启用', 'checked' => true),
		),

	// 是否显示
	'common_is_show_list'				=>	array(
			0 => array('id' => 0, 'name' => '不显示'),
			1 => array('id' => 1, 'name' => '显示', 'checked' => true),
		),

	// 学生状态
	'common_student_state_list'			=>	array(
			0 => array('id' => 0, 'name' => '待入学', 'checked' => true),
			1 => array('id' => 1, 'name' => '在读'),
			2 => array('id' => 2, 'name' => '已毕业'),
			3 => array('id' => 3, 'name' => '弃学'),
			4 => array('id' => 4, 'name' => '已开除'),
		),

	// 学生缴费状态
	'common_tuition_state_list'			=>	array(
			0 => array('id' => 0, 'name' => '待缴费', 'checked' => true),
			1 => array('id' => 1, 'name' => '已缴费'),
		),

	// 学生成绩等级
	'common_fraction_level_list'		=>	array(
			0 => array(
					'id'	=>	0,
					'name'	=>	'差',
					'min'	=>	0,
					'max'	=>	intval(MyC('fraction_weak', 20))-1
				),
			1 => array(
					'id'	=>	1,
					'name'	=>	'较差',
					'min'	=>	MyC('fraction_weak', 20),
					'max'	=>	intval(MyC('fraction_poor', 40))-1
				),
			2 => array(
					'id'	=>	2,
					'name'	=>	'中',
					'min'	=>	MyC('fraction_poor', 40),
					'max'	=>	intval(MyC('fraction_commonly', 60))-1
			),
			3 => array(
					'id'	=>	3,
					'name'	=>	'良',
					'min'	=>	MyC('fraction_commonly', 60),
					'max'	=>	intval(MyC('fraction_good', 80))-1
				),
			4 => array(
					'id'	=>	4,
					'name'	=>	'优',
					'min'	=>	MyC('fraction_good', 80),
					'max'	=>	MyC('fraction_excellent', 100)
				),
		),

	// CSV编码列表
	'common_csv_charset_list'			=>	array(
			0 => array('id' => 0, 'value' => 'utf-8', 'name' => 'utf-8', 'checked' => true),
			1 => array('id' => 1, 'value' => 'gbk', 'name' => 'gbk'),
		),

	// 教师状态
	'common_teacher_state_list'			=>	array(
			0 => array('id' => 0, 'name' => '待报道', 'checked' => true),
			1 => array('id' => 1, 'name' => '在职'),
			2 => array('id' => 2, 'name' => '已离职'),
			3 => array('id' => 3, 'name' => '已退休'),
			4 => array('id' => 4, 'name' => '已开除'),
		),

	// 色彩值
	'common_color_list'					=>	array(
			'',
			'am-badge-primary',
			'am-badge-secondary',
			'am-badge-success',
			'am-badge-warning',
			'am-badge-danger',
		),

	// 正则
	// 用户名
	'common_regex_username'				=>	'^[A-Za-z0-9_]{5,18}$',

	// 用户名
	'common_regex_pwd'					=>	'^.{5,18}$',

	// 手机号码
	'common_regex_mobile'				=>	'^1((3|5|8|7){1}\d{1})\d{8}$',

	// 联系方式
	'common_regex_tel'					=>	'^(1((3|5|8|7){1}\d{1})\d{8})|(\d{3,4}-?\d{8})$',

	// 身份证号码
	'common_regex_id_card'				=>	'^(\d{15}$|^\d{18}$|^\d{17}(\d|X|x))$',

	// 身份证号码
	'common_regex_price'				=>	'^([0-9]{1}\d{0,6})(\.\d{1,2})?$',

	// ip
	'common_regex_ip'					=>	'^(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])$',

	// url
	'common_regex_url'					=>	'^http[s]?:\/\/[A-Za-z0-9]+\.[A-Za-z0-9]+[\/=\?%\-&_~`@[\]\':+!]*([^<>\"\"])*$',

	// 控制器名称
	'common_regex_control'				=>	'^[A-Za-z]{1}[A-Za-z0-9_]{0,29}$',

	// 方法名称
	'common_regex_action'				=>	'^[A-Za-z]{1}[A-Za-z0-9_]{0,29}$',

	// 顺序
	'common_regex_sort'					=>	'^[0-9]{1,3}$',

	// 生日
	'common_regex_birthday'				=>	'^\d{4}-\d{2}-\d{2}$',

	// 分数
	'common_regex_score'				=>	'^[0-9]{1,3}$',

	// 分页
	'common_regex_page_number'			=>	'^[1-9]{1}[0-9]{0,2}$',
);
?>