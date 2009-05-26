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
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHeading"]       = "\$text='欢迎使用OpenBiblio';";
$trans["indexIntro"]         = "\$text=
  '使用这个导航访问
  管理区.';";
$trans["indexTab"]           = "\$text='标签';";
$trans["indexDesc"]          = "\$text='描述';";
$trans["indexCirc"]          = "\$text='流通';";
$trans["indexCircDesc1"]     = "\$text='管理会员.';";
$trans["indexCircDesc2"]     = "\$text='会员管理(新建，搜索，编辑，删除)';";
$trans["indexCircDesc3"]     = "\$text='会员书目借出，续借，记账，历史';";
$trans["indexCircDesc4"]     = "\$text='Bibliography checkin and shelving cart list';";
//$trans["indexCircDesc5"]     = "\$text='Member late fee payment';";
$trans["indexCat"]           = "\$text='编目';";
$trans["indexCatDesc1"]      = "\$text='管理书目 .';";
$trans["indexCatDesc2"]      = "\$text='书目管理 (新建，搜索，编辑，删除)';";
//$trans["indexCatDesc3"]      = "\$text='Import bibliography from USMarc record';";
$trans["indexAdmin"]         = "\$text='管理';";
$trans["indexAdminDesc1"]    = "\$text='管理员工和基本信息.';";
$trans["indexAdminDesc2"]    = "\$text='员工管理 (新建，搜索，编辑，密码,删除)';";
$trans["indexAdminDesc3"]    = "\$text='同样图书馆设置';";
$trans["indexAdminDesc5"]    = "\$text='载体类型';";
$trans["indexAdminDesc4"]    = "\$text='馆藏清单';";
$trans["indexAdminDesc6"]    = "\$text='样式编辑器';";
$trans["indexReports"]       = "\$text='报表';";
$trans["indexReportsDesc1"]  = "\$text='管理报表';";
$trans["indexReportsDesc2"]  = "\$text='报表.';";
$trans["indexReportsDesc3"]  = "\$text='标签.';";

?>
