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
#*  Translation text shared by various php files under the navbars dir
#****************************************************************************
$trans["login"]                    = "\$text = '登陆';";
$trans["logout"]                   = "\$text = '退出';";
$trans["help"]                     = "\$text = '帮助';";

#****************************************************************************
#*  Translation text for page home.php
#****************************************************************************
$trans["homeHomeLink"]             = "\$text = '首页';";
$trans["homeLicenseLink"]          = "\$text = '许可';";

#****************************************************************************
#*  Translation text for page admin.php
#****************************************************************************
$trans["adminSummary"]             = "\$text = '管理入口';";
$trans["adminStaff"]               = "\$text = '员工管理';";
$trans["adminSettings"]            = "\$text = '图书馆设置';";
$trans["adminMaterialTypes"]       = "\$text = '载体类型';";
$trans["adminCollections"]         = "\$text = '馆藏';";
$trans["adminThemes"]              = "\$text = '样式';";
$trans["adminTranslation"]         = "\$text = '翻译';";

#****************************************************************************
#*  Translation text for page cataloging.php
#****************************************************************************
$trans["catalogSummary"]           = "\$text = '编目入口';";
$trans["catalogSearch1"]           = "\$text = '书目搜索';";
$trans["catalogSearch2"]           = "\$text = '书目搜索';";
$trans["catalogResults"]           = "\$text = '搜索结果';";
$trans["catalogBibInfo"]           = "\$text = '书目信息';";
$trans["catalogBibEdit"]           = "\$text = 'Edit-Basic';";
$trans["catalogBibEditMarc"]       = "\$text = 'Edit-MARC';";
$trans["catalogBibMarcNewFld"]     = "\$text = 'New MARC Field';";
$trans["catalogBibMarcNewFldShrt"] = "\$text = 'New MARC';";
$trans["catalogBibMarcEditFld"]    = "\$text = 'Edit MARC Fld';";
$trans["catalogCopyNew"]           = "\$text = 'New Copy';";
$trans["catalogCopyEdit"]          = "\$text = 'Edit Copy';";
$trans["catalogHolds"]             = "\$text = 'Hold Requests';";
$trans["catalogDelete"]            = "\$text = 'Delete';";
$trans["catalogBibNewLike"]        = "\$text = 'New Like';";
$trans["catalogBibNew"]            = "\$text = 'New Bibliography';";
$trans["Upload Marc Data"]         = "\$text = 'Upload Marc Data';";

#****************************************************************************
#*  Translation text for page reports.php
#****************************************************************************
$trans["reportsSummary"]           = "\$text = '报表入口';";
$trans["reportsReportListLink"]    = "\$text = '报表清单';";
$trans["reportsLabelsLink"]        = "\$text = '打印标签';";
$trans["reportsLettersLink"]        = "\$text = 'Print Letters';";

#****************************************************************************
#*  Translation text for page opac.php
#****************************************************************************
$trans["catalogSearch1"]           = "\$text = '搜索';";
$trans["catalogSearch2"]           = "\$text = '书目搜索';";
$trans["catalogResults"]           = "\$text = '搜索结果';";
$trans["catalogBibInfo"]           = "\$text = '书目信息';";

#Added

$trans["memberInfo"]="\$text = 'Member Info';";
$trans["memberSearch"]="\$text = 'Member Search';";
$trans["editInfo"]="\$text = 'Edit Info';";
$trans["checkoutHistory"]= "\$text = 'Checkout History';";
$trans["account"]="\$text = 'Account';";
$trans["checkIn"]="\$text = 'Check In';";
$trans["memberSearch"]= "\$text = 'Member Search';";
$trans["newMember"]= "\$text = 'New Member';";
//$trans["account"]        	= "\$text = 'Account';";
?>
