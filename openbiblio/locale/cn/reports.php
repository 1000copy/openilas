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
#*  Translation text used on multiple pages
#****************************************************************************
$trans["reportsCancel"]            = "\$text = 'Cancel';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = '报表';";
$trans["indexDesc"]                = "\$text = '用左侧导航打印报表和生成标签.';";

#****************************************************************************
#*  Translation text for page report_list.php
#****************************************************************************
$trans["reportListHdr"]            = "\$text = '报表清单';";
$trans["reportListDesc"]           = "\$text = '从下列清单选择一个报表.';";
$trans["reportListXmlErr"]         = "\$text = '报表xml解释错误';";
$trans["reportListCannotRead"]     = "\$text = '不能读标签文件: %fileName%';";

#****************************************************************************
#*  Translation text for page label_list.php
#****************************************************************************
$trans["labelListHdr"]             = "\$text = '标签清单';";
$trans["labelListDesc"]            = "\$text = '选择链接打印pdf格式标签.';";
$trans["displayLabelsXmlErr"]      = "\$text = '剖析报表定义文件错误.  错误 = ';";

#****************************************************************************
#*  Translation text for page letter_list.php
#****************************************************************************
$trans["letterListHdr"]            = "\$text = 'Letter List';";
$trans["letterListDesc"]           = "\$text = '选择链接打印pdf格式的Letter.';";
$trans["displayLettersXmlErr"]      = "\$text = '报表定义文件剖析错误.  错误= ';";

#****************************************************************************
#*  Translation text for page report_criteria.php
#****************************************************************************
$trans["reportCriteriaHead1"]      = "\$text = '报表搜索条件(可选)';";
$trans["reportCriteriaHead2"]      = "\$text = '报表排序 (可选)';";
$trans["reportCriteriaHead3"]      = "\$text = '报表输入类型';";
$trans["reportCriteriaCrit1"]      = "\$text = '条件 1:';";
$trans["reportCriteriaCrit2"]      = "\$text = '条件 2:';";
$trans["reportCriteriaCrit3"]      = "\$text = '条件 3:';";
$trans["reportCriteriaCrit4"]      = "\$text = '条件 4:';";
$trans["reportCriteriaEQ"]         = "\$text = '=';";
$trans["reportCriteriaNE"]         = "\$text = 'not =';";
$trans["reportCriteriaLT"]         = "\$text = '&lt;';";
$trans["reportCriteriaGT"]         = "\$text = '&gt;';";
$trans["reportCriteriaLE"]         = "\$text = '&lt or =';";
$trans["reportCriteriaGE"]         = "\$text = '&gt or =';";
$trans["reportCriteriaBT"]         = "\$text = 'between';";
$trans["reportCriteriaAnd"]        = "\$text = 'and';";
$trans["reportCriteriaRunReport"]  = "\$text = '执行报表';";
$trans["reportCriteriaSortCrit1"]  = "\$text = '排序 1:';";
$trans["reportCriteriaSortCrit2"]  = "\$text = '排序 2:';";
$trans["reportCriteriaSortCrit3"]  = "\$text = '排序 3:';";
$trans["reportCriteriaAscending"]  = "\$text = '升序';";
$trans["reportCriteriaDescending"] = "\$text = '降序';";
$trans["reportCriteriaStartOnLabel"] = "\$text = '开始打印标签:';";
$trans["reportCriteriaOutput"]     = "\$text = '输入类型:';";
$trans["reportCriteriaOutputHTML"] = "\$text = 'HTML';";
$trans["reportCriteriaOutputCSV"]  = "\$text = 'CSV';";

#****************************************************************************
#*  Translation text for page run_report.php
#****************************************************************************
$trans["runReportReturnLink1"]     = "\$text = '报表选择条件';";
$trans["runReportReturnLink2"]     = "\$text = '报表清单';";
$trans["runReportTotal"]           = "\$text = '总行数:';";

#****************************************************************************
#*  Translation text for page display_labels.php
#****************************************************************************
$trans["displayLabelsStartOnLblErr"] = "\$text = '字段必须是数字.';";
$trans["displayLabelsXmlErr"]      = "\$text = '剖析报表文件错误.  错误= ';";
$trans["displayLabelsCannotRead"]  = "\$text = '无法读出文件： %fileName%';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["noauthMsg"]                = "\$text = '你没有被授权使用报表标签.';";

#****************************************************************************
#*  Report Titles
#****************************************************************************
$trans["reportHolds"]              = "\$text = '包含会员联系信息的预约';";
$trans["reportCheckouts"]          = "\$text = '书目借出清单';";
$trans["Over Due Letters"]           = "\$text = 'Over Due Letters';";
$trans["reportLabels"]             = "\$text = '标签打印查询(由标签使用)';";
$trans["popularBiblios"]           = "\$text = '借阅最多的书目';";
$trans["overdueList"]              = "\$text = '超期会员清单';";
$trans["balanceDueList"]           = "\$text = '欠费会员清单';";

#****************************************************************************
#*  Label Titles
#****************************************************************************
$trans["labelsMulti"]              = "\$text = '多标签例子';";
$trans["labelsSimple"]             = "\$text = '简单标签例子';";

#****************************************************************************
#*  Column Text
#****************************************************************************
$trans["biblio.bibid"]             = "\$text = '书目id';";
$trans["biblio.create_dt"]         = "\$text = '添加日期';";
$trans["biblio.last_change_dt"]    = "\$text = '最后改变日期';";
$trans["biblio.material_cd"]       = "\$text = '载体';";
$trans["biblio.collection_cd"]     = "\$text = '馆藏';";
$trans["biblio.call_nmbr1"]        = "\$text = '索书号 1';";
$trans["biblio.call_nmbr2"]        = "\$text = '索书号 2';";
$trans["biblio.call_nmbr3"]        = "\$text = '索书号 3';";
$trans["biblio.title_remainder"]   = "\$text = 'Title Remainder';";
$trans["biblio.responsibility_stmt"] = "\$text = 'Stmt of Resp';";
$trans["biblio.opac_flg"]          = "\$text = 'OPAC 标志';";

$trans["biblio_copy.barcode_nmbr"] = "\$text = '条码';";
$trans["biblio.title"]             = "\$text = '标题';";
$trans["biblio.author"]            = "\$text = '作者';";
$trans["biblio_copy.status_begin_dt"]   = "\$text = '状态开始日期';";
$trans["biblio_copy.due_back_dt"]       = "\$text = '应归还日期';";
$trans["member.mbrid"]             = "\$text = '会员 ID';";
$trans["member.barcode_nmbr"]      = "\$text = '会员条码';";
$trans["member.last_name"]         = "\$text = '姓';";
$trans["member.first_name"]        = "\$text = '名';";
$trans["member.address"]          = "\$text = '地址';";
$trans["biblio_hold.hold_begin_dt"] = "\$text = '预约开始日期';";
$trans["member.home_phone"]        = "\$text = '家庭电话';";
$trans["member.work_phone"]        = "\$text = '工作电话';";
$trans["member.email"]             = "\$text = 'Email';";
$trans["biblio_status_dm.description"] = "\$text = '状态';";
$trans["settings.library_name"]    = "\$text = '图书馆名称';";
$trans["settings.library_hours"]   = "\$text = '图书馆工作时间';";
$trans["settings.library_phone"]   = "\$text = '图书馆电话';";
$trans["days_late"]                = "\$text = 'Days Late';";
$trans["title"]                    = "\$text = '标题';";
$trans["author"]                   = "\$text = '作者';";
$trans["due_back_dt"]              = "\$text = 'Due Back';";
$trans["checkoutCount"]            = "\$text = '借出数量';";

?>
