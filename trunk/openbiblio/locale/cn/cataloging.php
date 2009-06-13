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
$trans["catalogSubmit"]            = "\$text = '�ύ';";
$trans["catalogCancel"]            = "\$text = 'ȡ��';";
$trans["catalogRefresh"]           = "\$text = 'ˢ��';";
$trans["catalogDelete"]            = "\$text = 'ɾ��';";
$trans["catalogFootnote"]          = "\$text = '�� %symbol% ��ǵ��ֶ��Ǳ���¼���.';";
$trans["AnswerYes"]                = "\$text = '��';";
$trans["AnswerNo"]                 = "\$text = '��';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = '���ڱ�Ŀ';";
$trans["indexBarcodeHdr"]          = "\$text = 'ͨ����Ŀ����Ŀ';";
$trans["indexBarcodeField"]        = "\$text = '����';";
$trans["indexSearchHdr"]           = "\$text = 'ͨ���ʻ�����Ŀ';";
$trans["indexTitle"]               = "\$text = '��Ŀ��';";
$trans["indexAuthor"]              = "\$text = '����';";
$trans["indexSubject"]             = "\$text = '����';";
$trans["indexButton"]              = "\$text = '����';";

#****************************************************************************
#*  Translation text for page biblio_fields.php
#****************************************************************************
$trans["biblioFieldsLabel"]        = "\$text = '��Ŀ';";
$trans["biblioFieldsMaterialTyp"]  = "\$text = '��������';";
$trans["biblioFieldsCollection"]   = "\$text = '�ݲ�';";
$trans["biblioFieldsCallNmbr"]     = "\$text = '�����';";
$trans["biblioFieldsUsmarcFields"] = "\$text = 'USMarc Fields';";
$trans["biblioFieldsOpacFlg"]      = "\$text = 'OPAC����ʾ';";

#****************************************************************************
#*  Translation text for page biblio_new.php
#****************************************************************************
$trans["biblioNewFormLabel"]       = "\$text = '�½�';";
$trans["biblioNewSuccess"]         = "\$text = '��������Ŀ�Ѿ�����. Ҫ����µĿ�����������ർ��ѡ�� [�½�����]  ���� ѡ������ġ������¿����� .';";

#****************************************************************************
#*  Translation text for page biblio_edit.php
#****************************************************************************
$trans["biblioEditSuccess"]        = "\$text = '��Ŀ�Ѿ�����.';";

#****************************************************************************
#*  Translation text for page biblio_copy_new_form.php and biblio_copy_edit_form.php
#****************************************************************************
$trans["biblioCopyNewFormLabel"]   = "\$text = '�½�����';";
$trans["biblioCopyNewBarcode"]     = "\$text = '����';";
$trans["biblioCopyNewDesc"]        = "\$text = '����';";
$trans["biblioCopyNewAuto"]        = "\$text = '�Զ�����';";
$trans["biblioCopyEditFormLabel"]  = "\$text = '�༭����';";
$trans["biblioCopyEditFormStatus"] = "\$text = '״̬';";

#****************************************************************************
#*  Translation text for page biblio_copy_new.php
#****************************************************************************
$trans["biblioCopyNewSuccess"]     = "\$text = '�����Ѿ�����.';";

#****************************************************************************
#*  Translation text for page biblio_copy_edit.php
#****************************************************************************
$trans["biblioCopyEditSuccess"]    = "\$text = '�����Ѿ�����.';";

#****************************************************************************
#*  Translation text for page biblio_copy_del_confirm.php
#****************************************************************************
$trans["biblioCopyDelConfirmErr1"] = "\$text = '����ɾ������.���뻹�غ����ɾ��';";
$trans["biblioCopyDelConfirmMsg"]  = "\$text = 'Ҫɾ������Ϊ %barcodeNmbr% �Ŀ���? �������������״̬�ı���ʷҲ��ͬʱɾ��.';";

#****************************************************************************
#*  Translation text for page biblio_copy_del.php
#****************************************************************************
$trans["biblioCopyDelSuccess"]     = "\$text = '����Ϊ %barcode% �Ŀ����Ѿ���ɾ��.';";

#****************************************************************************
#*  Translation text for page biblio_marc_list.php
#****************************************************************************
$trans["biblioMarcListMarcSelect"] = "\$text = '���MARC �ֶ�';";
$trans["biblioMarcListHdr"]        = "\$text = 'MARC �ֶ���Ϣ';";
$trans["biblioMarcListTbleCol1"]   = "\$text = '����';";
$trans["biblioMarcListTbleCol2"]   = "\$text = '��ǩ(tag)';";
$trans["biblioMarcListTbleCol3"]   = "\$text = '��ǩ����';";
$trans["biblioMarcListTbleCol4"]   = "\$text = 'Ind 1';";
$trans["biblioMarcListTbleCol5"]   = "\$text = 'Ind 2';";
$trans["biblioMarcListTbleCol6"]   = "\$text = '���ֶ�';";
$trans["biblioMarcListTbleCol7"]   = "\$text = '���ֶ�����';";
$trans["biblioMarcListTbleCol8"]   = "\$text = '�ֶ�����';";
$trans["biblioMarcListNoRows"]     = "\$text = 'û���ҵ�MARC �ֶ�.';";
$trans["biblioMarcListEdit"]       = "\$text = '�༭';";
$trans["biblioMarcListDel"]        = "\$text = 'ɾ��';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["usmarcSelectHdr"]          = "\$text = 'MARC �ֶ�ѡ���';";
$trans["usmarcSelectInst"]         = "\$text = 'ѡ���ֶ�����';";
$trans["usmarcSelectNoTags"]       = "\$text = 'û���ҵ���ǩ.';";
$trans["usmarcSelectUse"]          = "\$text = 'ʹ��';";
$trans["usmarcCloseWindow"]        = "\$text = '�رմ���';";

#****************************************************************************
#*  Translation text for page biblio_marc_new_form.php
#****************************************************************************
$trans["biblioMarcNewFormHdr"]     = "\$text = '���Marc �ֶ�';";
$trans["biblioMarcNewFormTag"]     = "\$text = '��ǩ';";
$trans["biblioMarcNewFormSubfld"]  = "\$text = '���ֶ�';";
$trans["biblioMarcNewFormData"]    = "\$text = '�ֶ�����';";
$trans["biblioMarcNewFormInd1"]    = "\$text = 'ָʾ�� 1';";
$trans["biblioMarcNewFormInd2"]    = "\$text = 'ָʾ�� 2';";
$trans["biblioMarcNewFormSelect"]  = "\$text = 'ѡ��';";

#****************************************************************************
#*  Translation text for page biblio_marc_new.php
#****************************************************************************
$trans["biblioMarcNewSuccess"]     = "\$text = 'Marc �ֶ��Ѿ����.';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit_form.php
#****************************************************************************
$trans["biblioMarcEditFormHdr"]    = "\$text = '�༭ Marc �ֶ�';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit.php
#****************************************************************************
$trans["biblioMarcEditSuccess"]    = "\$text = 'Marc �ֶ��Ѿ�����.';";

#****************************************************************************
#*  Translation text for page biblio_marc_del_confirm.php
#****************************************************************************
$trans["biblioMarcDelConfirmMsg"]  = "\$text = 'ȷ��ɾ����ǩΪ%tag% ���ֶκ����ֶ� %subfieldCd%?';";

#****************************************************************************
#*  Translation text for page biblio_marc_del.php
#****************************************************************************
$trans["biblioMarcDelSuccess"]     = "\$text = 'Marc �ֶγɹ�����.';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelConfirmWarn"]     = "\$text = '�����Ŀ�� %copyCount% ������ %holdCount% ԤԼ.  ����ɾ��������ԤԼ.';";
$trans["biblioDelConfirmReturn"]   = "\$text = '������Ŀ�嵥';";
$trans["biblioDelConfirmMsg"]      = "\$text = 'ȷ��ɾ������Ϊ %title% ����Ŀ��?';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelMsg"]             = "\$text = '��Ŀ, %title%, �Ѿ�ɾ��.';";
$trans["biblioDelReturn"]          = "\$text = '������Ŀ����';";

#****************************************************************************
#*  Translation text for page biblio_hold_list.php
#****************************************************************************
$trans["biblioHoldListHead"]       = "\$text = '��ĿԤԼ:';";
$trans["biblioHoldListNoHolds"]    = "\$text = 'û����Ŀ������ԤԼ.';";
$trans["biblioHoldListHdr1"]       = "\$text = 'Function';";
$trans["biblioHoldListHdr2"]       = "\$text = '����';";
$trans["biblioHoldListHdr3"]       = "\$text = 'ԤԼ';";
$trans["biblioHoldListHdr4"]       = "\$text = '����';";
$trans["biblioHoldListHdr5"]       = "\$text = '״̬';";
$trans["biblioHoldListHdr6"]       = "\$text = 'Due Back';";
$trans["biblioHoldListdel"]        = "\$text = 'ɾ��';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["NotAuth"]                 = "\$text = 'δ��Ȩʹ�ñ�Ŀ';";

#****************************************************************************
#*  Translation text for page upload_usmarc.php and upload_usmarc_form.php
#****************************************************************************
$trans["MarcUploadTest"]            = "\$text = '����װ��';";
$trans["MarcUploadTestTrue"]        = "\$text = '��';";
$trans["MarcUploadTestFalse"]       = "\$text = '��';";
$trans["MarcUploadTestFileUpload"]  = "\$text = 'USMarc �����ļ�';";
$trans["MarcUploadRecordsUploaded"] = "\$text = '��¼������';";
$trans["MarcUploadMarcRecord"]      = "\$text = 'MARC ��¼';";
$trans["MarcUploadTag"]             = "\$text = '��ǩ';";
$trans["MarcUploadSubfield"]        = "\$text = '��';";
$trans["MarcUploadData"]            = "\$text = '����';";
$trans["MarcUploadRawData"]         = "\$text = 'ԭʼ����:';";
$trans["UploadFile"]                = "\$text = '�����ļ�';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["PoweredByOB"]                 = "\$text = '�ṩ���� by OpenBiblio';";
$trans["Copyright"]                   = "\$text = '��Ȩ &copy; 2002-2005';";
$trans["underthe"]                    = "\$text = 'under the';";
$trans["GNU"]                 = "\$text = 'GNU General Public License';";

$trans["catalogResults"]                 = "\$text = 'Search Results';";



?>
