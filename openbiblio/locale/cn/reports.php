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
$trans["indexHdr"]                 = "\$text = '����';";
$trans["indexDesc"]                = "\$text = '����ർ����ӡ��������ɱ�ǩ.';";

#****************************************************************************
#*  Translation text for page report_list.php
#****************************************************************************
$trans["reportListHdr"]            = "\$text = '�����嵥';";
$trans["reportListDesc"]           = "\$text = '�������嵥ѡ��һ������.';";
$trans["reportListXmlErr"]         = "\$text = '����xml���ʹ���';";
$trans["reportListCannotRead"]     = "\$text = '���ܶ���ǩ�ļ�: %fileName%';";

#****************************************************************************
#*  Translation text for page label_list.php
#****************************************************************************
$trans["labelListHdr"]             = "\$text = '��ǩ�嵥';";
$trans["labelListDesc"]            = "\$text = 'ѡ�����Ӵ�ӡpdf��ʽ��ǩ.';";
$trans["displayLabelsXmlErr"]      = "\$text = '�����������ļ�����.  ���� = ';";

#****************************************************************************
#*  Translation text for page letter_list.php
#****************************************************************************
$trans["letterListHdr"]            = "\$text = 'Letter List';";
$trans["letterListDesc"]           = "\$text = 'ѡ�����Ӵ�ӡpdf��ʽ��Letter.';";
$trans["displayLettersXmlErr"]      = "\$text = '�������ļ���������.  ����= ';";

#****************************************************************************
#*  Translation text for page report_criteria.php
#****************************************************************************
$trans["reportCriteriaHead1"]      = "\$text = '������������(��ѡ)';";
$trans["reportCriteriaHead2"]      = "\$text = '�������� (��ѡ)';";
$trans["reportCriteriaHead3"]      = "\$text = '������������';";
$trans["reportCriteriaCrit1"]      = "\$text = '���� 1:';";
$trans["reportCriteriaCrit2"]      = "\$text = '���� 2:';";
$trans["reportCriteriaCrit3"]      = "\$text = '���� 3:';";
$trans["reportCriteriaCrit4"]      = "\$text = '���� 4:';";
$trans["reportCriteriaEQ"]         = "\$text = '=';";
$trans["reportCriteriaNE"]         = "\$text = 'not =';";
$trans["reportCriteriaLT"]         = "\$text = '&lt;';";
$trans["reportCriteriaGT"]         = "\$text = '&gt;';";
$trans["reportCriteriaLE"]         = "\$text = '&lt or =';";
$trans["reportCriteriaGE"]         = "\$text = '&gt or =';";
$trans["reportCriteriaBT"]         = "\$text = 'between';";
$trans["reportCriteriaAnd"]        = "\$text = 'and';";
$trans["reportCriteriaRunReport"]  = "\$text = 'ִ�б���';";
$trans["reportCriteriaSortCrit1"]  = "\$text = '���� 1:';";
$trans["reportCriteriaSortCrit2"]  = "\$text = '���� 2:';";
$trans["reportCriteriaSortCrit3"]  = "\$text = '���� 3:';";
$trans["reportCriteriaAscending"]  = "\$text = '����';";
$trans["reportCriteriaDescending"] = "\$text = '����';";
$trans["reportCriteriaStartOnLabel"] = "\$text = '��ʼ��ӡ��ǩ:';";
$trans["reportCriteriaOutput"]     = "\$text = '��������:';";
$trans["reportCriteriaOutputHTML"] = "\$text = 'HTML';";
$trans["reportCriteriaOutputCSV"]  = "\$text = 'CSV';";

#****************************************************************************
#*  Translation text for page run_report.php
#****************************************************************************
$trans["runReportReturnLink1"]     = "\$text = '����ѡ������';";
$trans["runReportReturnLink2"]     = "\$text = '�����嵥';";
$trans["runReportTotal"]           = "\$text = '������:';";

#****************************************************************************
#*  Translation text for page display_labels.php
#****************************************************************************
$trans["displayLabelsStartOnLblErr"] = "\$text = '�ֶα���������.';";
$trans["displayLabelsXmlErr"]      = "\$text = '���������ļ�����.  ����= ';";
$trans["displayLabelsCannotRead"]  = "\$text = '�޷������ļ��� %fileName%';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["noauthMsg"]                = "\$text = '��û�б���Ȩʹ�ñ����ǩ.';";

#****************************************************************************
#*  Report Titles
#****************************************************************************
$trans["reportHolds"]              = "\$text = '������Ա��ϵ��Ϣ��ԤԼ';";
$trans["reportCheckouts"]          = "\$text = '��Ŀ����嵥';";
$trans["Over Due Letters"]           = "\$text = 'Over Due Letters';";
$trans["reportLabels"]             = "\$text = '��ǩ��ӡ��ѯ(�ɱ�ǩʹ��)';";
$trans["popularBiblios"]           = "\$text = '����������Ŀ';";
$trans["overdueList"]              = "\$text = '���ڻ�Ա�嵥';";
$trans["balanceDueList"]           = "\$text = 'Ƿ�ѻ�Ա�嵥';";

#****************************************************************************
#*  Label Titles
#****************************************************************************
$trans["labelsMulti"]              = "\$text = '���ǩ����';";
$trans["labelsSimple"]             = "\$text = '�򵥱�ǩ����';";

#****************************************************************************
#*  Column Text
#****************************************************************************
$trans["biblio.bibid"]             = "\$text = '��Ŀid';";
$trans["biblio.create_dt"]         = "\$text = '�������';";
$trans["biblio.last_change_dt"]    = "\$text = '���ı�����';";
$trans["biblio.material_cd"]       = "\$text = '����';";
$trans["biblio.collection_cd"]     = "\$text = '�ݲ�';";
$trans["biblio.call_nmbr1"]        = "\$text = '����� 1';";
$trans["biblio.call_nmbr2"]        = "\$text = '����� 2';";
$trans["biblio.call_nmbr3"]        = "\$text = '����� 3';";
$trans["biblio.title_remainder"]   = "\$text = 'Title Remainder';";
$trans["biblio.responsibility_stmt"] = "\$text = 'Stmt of Resp';";
$trans["biblio.opac_flg"]          = "\$text = 'OPAC ��־';";

$trans["biblio_copy.barcode_nmbr"] = "\$text = '����';";
$trans["biblio.title"]             = "\$text = '����';";
$trans["biblio.author"]            = "\$text = '����';";
$trans["biblio_copy.status_begin_dt"]   = "\$text = '״̬��ʼ����';";
$trans["biblio_copy.due_back_dt"]       = "\$text = 'Ӧ�黹����';";
$trans["member.mbrid"]             = "\$text = '��Ա ID';";
$trans["member.barcode_nmbr"]      = "\$text = '��Ա����';";
$trans["member.last_name"]         = "\$text = '��';";
$trans["member.first_name"]        = "\$text = '��';";
$trans["member.address"]          = "\$text = '��ַ';";
$trans["biblio_hold.hold_begin_dt"] = "\$text = 'ԤԼ��ʼ����';";
$trans["member.home_phone"]        = "\$text = '��ͥ�绰';";
$trans["member.work_phone"]        = "\$text = '�����绰';";
$trans["member.email"]             = "\$text = 'Email';";
$trans["biblio_status_dm.description"] = "\$text = '״̬';";
$trans["settings.library_name"]    = "\$text = 'ͼ�������';";
$trans["settings.library_hours"]   = "\$text = 'ͼ��ݹ���ʱ��';";
$trans["settings.library_phone"]   = "\$text = 'ͼ��ݵ绰';";
$trans["days_late"]                = "\$text = 'Days Late';";
$trans["title"]                    = "\$text = '����';";
$trans["author"]                   = "\$text = '����';";
$trans["due_back_dt"]              = "\$text = 'Due Back';";
$trans["checkoutCount"]            = "\$text = '�������';";

?>
