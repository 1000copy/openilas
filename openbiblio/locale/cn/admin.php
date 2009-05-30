<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
/**********************************************************************************
 *   Instructions for translators:
 *
 *   All gettext key/value pairs are specified as follows:
 *     $trans["key"] = "<php translation code to set the $text variable>";
 *   Allowing translators the ability to execute php code withint the transFunc string
 *   provides the maximum amount of flexibility to format the languange syntax.
 *
 *   Formatting rules:
 *   - Resulting translation string must be stored in a variable called $text.
 *   - Input arguments must be surrounded by % characters (i.e. %pageCount%).
 *   - A backslash ('\') needs to be placed before any special php characters 
 *     (such as $, ", etc.) within the php translation code.
 *
 *   Simple Example:
 *     $trans["homeWelcome"]       = "\$text='Welcome to OpenBiblio';";
 *
 *   Example Containing Argument Substitution:
 *     $trans["searchResult"]      = "\$text='page %page% of %pages%';";
 *
 *   Example Containing a PHP If Statment and Argument Substitution:
 *     $trans["searchResult"]      = 
 *       "if (%items% == 1) {
 *         \$text = '%items% result';
 *       } else {
 *         \$text = '%items% results';
 *       }";
 *
 **********************************************************************************
 */

#****************************************************************************
#*  Common translation text shared among multiple pages
#****************************************************************************
$trans["adminSubmit"]              = "\$text = '提交';";
$trans["adminCancel"]              = "\$text = '取消';";
$trans["adminDelete"]              = "\$text = '删除';";
$trans["adminUpdate"]              = "\$text = '更新';";
$trans["adminFootnote"]            = "\$text = '以 %symbol% 标记的字段是必须的.';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = '管理';";
$trans["indexDesc"]                = "\$text = '用左侧的导航来管理员工和基本类型.';";

#****************************************************************************
#*  Translation text for page collections*.php
#****************************************************************************
$trans["adminCollections_delReturn"]                 = "\$text = '返回 Collection';";
$trans["adminCollections_delStart"]                 = "\$text = 'Collection, ';";

#****************************************************************************
#*  Translation text for page collections_del.php
#****************************************************************************
$trans["adminCollections_delEnd"]                 = "\$text = ', 已经删除.';";

#****************************************************************************
#*  Translation text for page collections_del_confirm.php
#****************************************************************************
$trans["adminCollections_del_confirmText"]                 = "\$text = '确实要删除collection, ';";

#****************************************************************************
#*  Translation text for page collections_edit.php
#****************************************************************************
$trans["adminCollections_editEnd"]                 = "\$text = ', 已经更新.';";

#****************************************************************************
#*  Translation text for page collections_edit_form.php
#****************************************************************************
$trans["adminCollections_edit_formEditcollection"]                 = "\$text = '编辑馆藏:';";
$trans["adminCollections_edit_formDescription"]                 = "\$text = '描述:';";
$trans["adminCollections_edit_formDaysdueback"]                 = "\$text = '可借天数:';";
$trans["adminCollections_edit_formDailyLateFee"]                 = "\$text = '超期罚金(每天):';";
$trans["adminCollections_edit_formNote"]                 = "\$text = '*备注:';";
$trans["adminCollections_edit_formNoteText"]                 = "\$text = '可借天数为零表示馆藏不可借出.';";

#****************************************************************************
#*  Translation text for page collections_list.php
#****************************************************************************
$trans["adminCollections_listAddNewCollection"]                 = "\$text = '新建馆藏';";
$trans["adminCollections_listCollections"]                 = "\$text = '馆藏:';";
$trans["adminCollections_listFunction"]                 = "\$text = '操作';";
$trans["adminCollections_listDescription"]                 = "\$text = '描述';";
$trans["adminCollections_listDaysdueback"]                 = "\$text = '可借天数';";
$trans["adminCollections_listDailylatefee"]                 = "\$text = '超期罚金';";
$trans["adminCollections_listBibliographycount"]                 = "\$text = '文献<br>计数';";
$trans["adminCollections_listEdit"]                 = "\$text = '编辑';";
$trans["adminCollections_listDel"]                 = "\$text = '删除';";
$trans["adminCollections_ListNote"]                 = "\$text = '*备注:';";
$trans["adminCollections_ListNoteText"]                 = "\$text = '仅仅可以删除书目为0的馆藏<br>确实要删除，请首先改变文献的载体类型';";

#****************************************************************************
#*  Translation text for page collections_new.php
#****************************************************************************
$trans["adminCollections_newAdded"]                 = "\$text = ', 已经添加.';";

#****************************************************************************
#*  Translation text for page collections_new_form.php
#****************************************************************************
$trans["adminCollections_new_formAddnewcollection"]                 = "\$text = '新建馆藏:';";
$trans["adminCollections_new_formDescription"]                 = "\$text = '描述:';";
$trans["adminCollections_new_formDaysdueback"]                 = "\$text = '可借天数:';";
$trans["adminCollections_new_formDailylatefee"]                 = "\$text = '超期罚金(天):';";
$trans["adminCollections_new_formNote"]                 = "\$text = '*备注:';";
$trans["adminCollections_new_formNoteText"]                 = "\$text = '可借天数为零表示馆藏不可借出.';";

#****************************************************************************
#*  Translation text for page materials_del.php
#****************************************************************************
$trans["admin_materials_delMaterialType"]                 = "\$text = '载体类型, ';";
$trans["admin_materials_delMaterialdeleted"]                 = "\$text = ', 已经删除.';";
$trans["admin_materials_Return"]                 = "\$text = '返回载体类型清单';";

#****************************************************************************
#*  Translation text for page materials_del_form.php
#****************************************************************************
$trans["admin_materials_delAreyousure"]                 = "\$text = '确实要删除载体类型, ';";

#****************************************************************************
#*  Translation text for page materials_edit_form.php
#****************************************************************************
$trans["admin_materials_delEditmaterialtype"]                 = "\$text = '编辑载体类型:';";
$trans["admin_materials_delDescription"]                 = "\$text = '描述:';";
$trans["admin_materials_delunlimited"]                 = "\$text = '(0为不限制)';";
$trans["admin_materials_delImagefile"]                 = "\$text = '图片文件:';";
$trans["admin_materials_delNote"]                 = "\$text = '*备注:';";
$trans["admin_materials_delNoteText"]                 = "\$text = '图片文件必须在openbiblio/images 内.';";

#****************************************************************************
#*  Translation text for page materials_edit.php
#****************************************************************************
$trans["admin_materials_editEnd"]                 = "\$text = ', 已经更新.';";

#****************************************************************************
#*  Translation text for page materials_list.php
#****************************************************************************
$trans["admin_materials_listAddmaterialtypes"]                 = "\$text = '新建载体类型';";
$trans["admin_materials_listMaterialtypes"]                 = "\$text = '载体类型:';";
$trans["admin_materials_listFunction"]                 = "\$text = 'Function';";
$trans["admin_materials_listDescription"]                 = "\$text = '描述';";
$trans["admin_materials_listLimits"]                 = "\$text = '限定';";
$trans["admin_materials_listCheckoutlimit"]                 = "\$text = '借出';";
$trans["admin_materials_listRenewallimit"]                 = "\$text = '续借';";
$trans["admin_materials_listImageFile"]                 = "\$text = '图片<br>文件';";
$trans["admin_materials_listBibcount"]                 = "\$text = '文献<br>计数';";
$trans["admin_materials_listEdit"]                 = "\$text = '编辑';";
$trans["admin_materials_listDel"]                 = "\$text = '删除';";
$trans["admin_materials_listNote"]                 = "\$text = '*备注:';";
$trans["admin_materials_listNoteText"]                 = "\$text = '仅仅可以删除书目为0的馆藏<br>确实要删除，请首先改变文献的载体类型.';";

#****************************************************************************
#*  Translation text for page materials_new.php
#****************************************************************************
$trans["admin_materials_listNewadded"]                 = "\$text = ', 已经添加.';";

#****************************************************************************
#*  Translation text for page materials_new_form.php
#****************************************************************************
$trans["admin_materials_new_formNoteText"]                 = "\$text = '图片文件必须在openbiblio/images 内.';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["admin_noauth"]                 = "\$text = '未授权使用管理功能.';";

#****************************************************************************
#*  Translation text for page settings_edit.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page settings_edit_form.php
#****************************************************************************
$trans["admin_settingsUpdated"]                 = "\$text = '数据已经更新.';";
$trans["admin_settingsEditsettings"]                 = "\$text = '编辑图书馆设置:';";
$trans["admin_settingsLibName"]                 = "\$text = '图书馆名称:';";
$trans["admin_settingsLibimageurl"]                 = "\$text = 'Logo URL:';";
$trans["admin_settingsOnlyshowimginheader"]                 = "\$text = '仅仅在页头显示图片:';";
$trans["admin_settingsLibhours"]                 = "\$text = '工作时间:';";
$trans["admin_settingsLibphone"]                 = "\$text = '联系电话:';";
$trans["admin_settingsLibURL"]                 = "\$text = '图书馆首页URL:';";
$trans["admin_settingsOPACURL"]                 = "\$text = 'OPAC URL:';";
$trans["admin_settingsSessionTimeout"]                 = "\$text = '会话超时时间:';";
$trans["admin_settingsMinutes"]                 = "\$text = '分钟';";
$trans["admin_settingsSearchResults"]                 = "\$text = '搜索结果:';";
$trans["admin_settingsItemsperpage"]                 = "\$text = '每页显示条目';";
$trans["admin_settingsPurgebibhistory"]                 = "\$text = '清除文献历史在:';";
$trans["admin_settingsmonths"]                 = "\$text = '月后';";
$trans["admin_settingsBlockCheckouts"]                 = "\$text = 'Block Checkouts When Fines Due:';";
$trans["admin_settingsLocale"]                 = "\$text = '本地化:';";
$trans["admin_settingsHTMLChar"]                 = "\$text = 'HTML 字符集:';";
$trans["admin_settingsHTMLTagLangAttr"]                 = "\$text = 'HTML Tag Lang Attribute:';";

#****************************************************************************
#*  Translation text for all staff pages
#****************************************************************************
$trans["adminStaff_Staffmember"]                 = "\$text = '员工会员';";
$trans["adminStaff_Return"]                 = "\$text = '返回员工表';";
$trans["adminStaff_Yes"]                 = "\$text = '是';";
$trans["adminStaff_No"]                 = "\$text = '否';";


#****************************************************************************
#*  Translation text for page staff_del.php
#****************************************************************************
$trans["adminStaff_delDeleted"]                 = "\$text = ', 已经删除.';";

#****************************************************************************
#*  Translation text for page staff_delete_confirm.php
#****************************************************************************
$trans["adminStaff_del_confirmConfirmText"]                 = "\$text = '确实要删除员工吗, ';";

#****************************************************************************
#*  Translation text for page staff_edit.php
#****************************************************************************
$trans["adminStaff_editUpdated"]                 = "\$text = ', 已经更新.';";

#****************************************************************************
#*  Translation text for page staff_edit_form.php
#****************************************************************************
$trans["adminStaff_edit_formHeader"]                 = "\$text = '编辑员工:';";
$trans["adminStaff_edit_formLastname"]                 = "\$text = '姓:';";
$trans["adminStaff_edit_formFirstname"]                 = "\$text = '名:';";
$trans["adminStaff_edit_formLogin"]                 = "\$text = '登陆账号:';";
$trans["adminStaff_edit_formAuth"]                 = "\$text = '授权:';";
$trans["adminStaff_edit_formCirc"]                 = "\$text = '流通';";
$trans["adminStaff_edit_formUpdatemember"]                 = "\$text = '更新';";
$trans["adminStaff_edit_formCatalog"]                 = "\$text = '编目';";
$trans["adminStaff_edit_formAdmin"]                 = "\$text = '管理';";
$trans["adminStaff_edit_formReports"]                 = "\$text = '报表';";
$trans["adminStaff_edit_formSuspended"]                 = "\$text = 'Suspended:';";

#****************************************************************************
#*  Translation text for page staff_list.php
#****************************************************************************
$trans["adminStaff_list_formHeader"]                 = "\$text = '新建员工';";
$trans["adminStaff_list_Columnheader"]                 = "\$text = ' 员工:';";
$trans["adminStaff_list_Function"]                 = "\$text = '操作';";
$trans["adminStaff_list_Edit"]                 = "\$text = '编辑';";
$trans["adminStaff_list_Pwd"]                 = "\$text = '密码';";
$trans["adminStaff_list_Del"]                 = "\$text = '删除';";

#****************************************************************************
#*  Translation text for page staff_new.php
#****************************************************************************
$trans["adminStaff_new_Added"]                 = "\$text = ', 已经添加.';";

#****************************************************************************
#*  Translation text for page staff_new_form.php
#****************************************************************************
$trans["adminStaff_new_form_Header"]          	= "\$text = '新员工:';";
$trans["adminStaff_new_form_Password"]          = "\$text = '密码:';";
$trans["adminStaff_new_form_Reenterpassword"]   = "\$text = '重输密码:';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset.php
#****************************************************************************
$trans["adminStaff_pwd_reset_Passwordreset"]   = "\$text = '密码已经重置.';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset_form.php
#****************************************************************************
$trans["adminStaff_pwd_reset_form_Resetheader"]   = "\$text = '重置员工密码:';";

#****************************************************************************
#*  Translation text for theme pages
#****************************************************************************
$trans["adminTheme_Return"]                 = "\$text = '返回样式表';";
$trans["adminTheme_Theme"]                 = "\$text = '样式, ';";

#****************************************************************************
#*  Translation text for page theme_del.php
#****************************************************************************
$trans["adminTheme_Deleted"]                 = "\$text = ', 已经删除.';";
#****************************************************************************
#*  Translation text for page theme_del_confirm.php
#****************************************************************************
$trans["adminTheme_Deleteconfirm"]                 = "\$text = '是否确定删除样式, ';";
#****************************************************************************
#*  Translation text for page theme_edit.php
#****************************************************************************
$trans["adminTheme_Updated"]                 = "\$text = ', 已经更新.';";

#****************************************************************************
#*  Translation text for page theme_edit_form.php
#****************************************************************************
$trans["adminTheme_Preview"]                 = "\$text = '预览样式修改';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Changetheme"]                 = "\$text = '修改当前使用的样式:';";
$trans["adminTheme_Choosetheme"]                 = "\$text = '选择一个新样式:';";
$trans["adminTheme_Addnew"]                 = "\$text = '新建样式';";
$trans["adminTheme_themes"]                 = "\$text = '样式:';";
$trans["adminTheme_function"]                 = "\$text = '操作';";
$trans["adminTheme_Themename"]                 = "\$text = '样式名称';";
$trans["adminTheme_Usage"]                 = "\$text = '用法';";
$trans["adminTheme_Edit"]                 = "\$text = '修改';";
$trans["adminTheme_Copy"]                 = "\$text = '拷贝';";
$trans["adminTheme_Del"]                 = "\$text = '删除';";
$trans["adminTheme_Inuse"]                 = "\$text = '正在使用';";
$trans["adminTheme_Note"]                 = "\$text = '*备注:';";
$trans["adminTheme_Notetext"]                 = "\$text = '不能删除正在使用的样式.';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Theme2"]                 = "\$text = '样式:';";
$trans["adminTheme_Tablebordercolor"]                 = "\$text = '表的边线颜色:';";
$trans["adminTheme_Errorcolor"]                 = "\$text = '错误的颜色:';";
$trans["adminTheme_Tableborderwidth"]                 = "\$text = '表的边线宽度:';";
$trans["adminTheme_Tablecellpadding"]                 = "\$text = '表格单元填充:';";
$trans["adminTheme_Title"]                 = "\$text = '标题';";
$trans["adminTheme_Mainbody"]                 = "\$text = '内容';";
$trans["adminTheme_Navigation"]                 = "\$text = '导航';";
$trans["adminTheme_Tabs"]                 = "\$text = '标签';";
$trans["adminTheme_Backgroundcolor"]                 = "\$text = '背景色:';";
$trans["adminTheme_Fontface"]                 = "\$text = '字体:';";
$trans["adminTheme_Fontsize"]                 = "\$text = '字体大小:';";
$trans["adminTheme_Bold"]                 = "\$text = '粗体';";
$trans["adminTheme_Fontcolor"]                 = "\$text = '字体颜色:';";
$trans["adminTheme_Linkcolor"]                 = "\$text = '链接颜色:';";
$trans["adminTheme_Align"]                 = "\$text = '对齐:';";
$trans["adminTheme_Right"]                 = "\$text = '靠右';";
$trans["adminTheme_Left"]                 = "\$text = '靠左';";
$trans["adminTheme_Center"]                 = "\$text = '中心';";

$trans["adminTheme_HeaderWording"]                 = "\$text = '编辑';";


#****************************************************************************
#*  Translation text for page theme_new.php
#****************************************************************************
$trans["adminTheme_new_Added"]                 = "\$text = ', 已经添加.';";

#****************************************************************************
#*  Translation text for page theme_new_form.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page theme_preview.php
#****************************************************************************
$trans["adminTheme_preview_Themepreview"]                 = "\$text = '样式预览';";
$trans["adminTheme_preview_Librarytitle"]                 = "\$text = '图书馆标题';";
$trans["adminTheme_preview_CloseWindow"]                 = "\$text = '关闭窗口';";
$trans["adminTheme_preview_Home"]                 = "\$text = '首页';";
$trans["adminTheme_preview_Circulation"]   = "\$text = '流通';";
$trans["adminTheme_preview_Cataloging"]    = "\$text = '编目';";
$trans["adminTheme_preview_Admin"]         = "\$text = '管理';";
$trans["adminTheme_preview_Samplelink"]    = "\$text = '简单链接';";
$trans["adminTheme_preview_Thisstart"]     = "\$text = '预览';";
$trans["adminTheme_preview_Thisend"]       = "\$text = '样式.';";
$trans["adminTheme_preview_Samplelist"]    = "\$text = '样本清单:';";
$trans["adminTheme_preview_Tableheading"]  = "\$text = '表头';";
$trans["adminTheme_preview_Sampledatarow1"]= "\$text = '样本行1';";
$trans["adminTheme_preview_Sampledatarow2"]= "\$text = '样本行2';";
$trans["adminTheme_preview_Sampledatarow3"]= "\$text = '样本行3';";
$trans["adminTheme_preview_Samplelink"]    = "\$text = '样本链接';";
$trans["adminTheme_preview_Sampleerror"]   = "\$text = '样本错误';";
$trans["adminTheme_preview_Sampleinput"]   = "\$text = '样本输入';";
$trans["adminTheme_preview_Samplebutton"]  = "\$text = '样本按钮';";
$trans["adminTheme_preview_Poweredby"]     = "\$text = 'Powered by OpenBiblio';";
$trans["adminTheme_preview_Copyright"]     = "\$text = 'Copyright &copy; 2002-2005 Dave Stevens';";
$trans["adminTheme_preview_underthe"]      = "\$text = 'under the';";
$trans["adminTheme_preview_GNU"]           = "\$text = 'GNU General Public License';";

#****************************************************************************
#*  Translation text for page theme_use.php
#****************************************************************************

?>
