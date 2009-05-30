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
$trans["catalogSubmit"]            = "\$text = '提交';";
$trans["catalogCancel"]            = "\$text = '取消';";
$trans["catalogRefresh"]           = "\$text = '刷新';";
$trans["catalogDelete"]            = "\$text = '删除';";
$trans["catalogFootnote"]          = "\$text = '有 %symbol% 标记的字段是必须录入的.';";
$trans["AnswerYes"]                = "\$text = '是';";
$trans["AnswerNo"]                 = "\$text = '否';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = '正在编目';";
$trans["indexBarcodeHdr"]          = "\$text = '通过条目找书目';";
$trans["indexBarcodeField"]        = "\$text = '条码';";
$trans["indexSearchHdr"]           = "\$text = '通过词汇找书目';";
$trans["indexTitle"]               = "\$text = '书目名';";
$trans["indexAuthor"]              = "\$text = '作者';";
$trans["indexSubject"]             = "\$text = '标题';";
$trans["indexButton"]              = "\$text = '搜索';";

#****************************************************************************
#*  Translation text for page biblio_fields.php
#****************************************************************************
$trans["biblioFieldsLabel"]        = "\$text = '书目';";
$trans["biblioFieldsMaterialTyp"]  = "\$text = '载体类型';";
$trans["biblioFieldsCollection"]   = "\$text = '馆藏';";
$trans["biblioFieldsCallNmbr"]     = "\$text = '索书号';";
$trans["biblioFieldsUsmarcFields"] = "\$text = 'USMarc Fields';";
$trans["biblioFieldsOpacFlg"]      = "\$text = 'OPAC内显示';";

#****************************************************************************
#*  Translation text for page biblio_new.php
#****************************************************************************
$trans["biblioNewFormLabel"]       = "\$text = '新建';";
$trans["biblioNewSuccess"]         = "\$text = '如下新书目已经建立. 要添加新的拷贝，请在左侧导航选择 [新建拷贝]  或者 选择下面的【加入新拷贝】 .';";

#****************************************************************************
#*  Translation text for page biblio_edit.php
#****************************************************************************
$trans["biblioEditSuccess"]        = "\$text = '书目已经更新.';";

#****************************************************************************
#*  Translation text for page biblio_copy_new_form.php and biblio_copy_edit_form.php
#****************************************************************************
$trans["biblioCopyNewFormLabel"]   = "\$text = '新建拷贝';";
$trans["biblioCopyNewBarcode"]     = "\$text = '条码';";
$trans["biblioCopyNewDesc"]        = "\$text = '描述';";
$trans["biblioCopyNewAuto"]        = "\$text = '自动生成';";
$trans["biblioCopyEditFormLabel"]  = "\$text = '编辑拷贝';";
$trans["biblioCopyEditFormStatus"] = "\$text = '状态';";

#****************************************************************************
#*  Translation text for page biblio_copy_new.php
#****************************************************************************
$trans["biblioCopyNewSuccess"]     = "\$text = '拷贝已经建立.';";

#****************************************************************************
#*  Translation text for page biblio_copy_edit.php
#****************************************************************************
$trans["biblioCopyEditSuccess"]    = "\$text = '拷贝已经更新.';";

#****************************************************************************
#*  Translation text for page biblio_copy_del_confirm.php
#****************************************************************************
$trans["biblioCopyDelConfirmErr1"] = "\$text = '不能删除拷贝.必须还回后才能删除';";
$trans["biblioCopyDelConfirmMsg"]  = "\$text = '要删除条码为 %barcodeNmbr% 的拷贝? 这个拷贝的所有状态改变历史也会同时删除.';";

#****************************************************************************
#*  Translation text for page biblio_copy_del.php
#****************************************************************************
$trans["biblioCopyDelSuccess"]     = "\$text = '条码为 %barcode% 的拷贝已经被删除.';";

#****************************************************************************
#*  Translation text for page biblio_marc_list.php
#****************************************************************************
$trans["biblioMarcListMarcSelect"] = "\$text = 'Add New MARC Field';";
$trans["biblioMarcListHdr"]        = "\$text = 'MARC Field Information';";
$trans["biblioMarcListTbleCol1"]   = "\$text = 'Function';";
$trans["biblioMarcListTbleCol2"]   = "\$text = 'Tag';";
$trans["biblioMarcListTbleCol3"]   = "\$text = 'Tag Description';";
$trans["biblioMarcListTbleCol4"]   = "\$text = 'Ind 1';";
$trans["biblioMarcListTbleCol5"]   = "\$text = 'Ind 2';";
$trans["biblioMarcListTbleCol6"]   = "\$text = 'Subfld';";
$trans["biblioMarcListTbleCol7"]   = "\$text = 'Subfield Description';";
$trans["biblioMarcListTbleCol8"]   = "\$text = 'Field Data';";
$trans["biblioMarcListNoRows"]     = "\$text = 'No MARC fields found.';";
$trans["biblioMarcListEdit"]       = "\$text = 'edit';";
$trans["biblioMarcListDel"]        = "\$text = 'del';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["usmarcSelectHdr"]          = "\$text = 'MARC Field Selector';";
$trans["usmarcSelectInst"]         = "\$text = 'Select a field type';";
$trans["usmarcSelectNoTags"]       = "\$text = 'No tags found.';";
$trans["usmarcSelectUse"]          = "\$text = 'use';";
$trans["usmarcCloseWindow"]        = "\$text = 'Close Window';";

#****************************************************************************
#*  Translation text for page biblio_marc_new_form.php
#****************************************************************************
$trans["biblioMarcNewFormHdr"]     = "\$text = 'Add New Marc Field';";
$trans["biblioMarcNewFormTag"]     = "\$text = 'Tag';";
$trans["biblioMarcNewFormSubfld"]  = "\$text = 'Subfield';";
$trans["biblioMarcNewFormData"]    = "\$text = 'Field Data';";
$trans["biblioMarcNewFormInd1"]    = "\$text = 'Indicator 1';";
$trans["biblioMarcNewFormInd2"]    = "\$text = 'Indicator 2';";
$trans["biblioMarcNewFormSelect"]  = "\$text = 'Select';";

#****************************************************************************
#*  Translation text for page biblio_marc_new.php
#****************************************************************************
$trans["biblioMarcNewSuccess"]     = "\$text = 'Marc field successfully added.';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit_form.php
#****************************************************************************
$trans["biblioMarcEditFormHdr"]    = "\$text = 'Edit Marc Field';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit.php
#****************************************************************************
$trans["biblioMarcEditSuccess"]    = "\$text = 'Marc field successfully updated.';";

#****************************************************************************
#*  Translation text for page biblio_marc_del_confirm.php
#****************************************************************************
$trans["biblioMarcDelConfirmMsg"]  = "\$text = 'Are you sure you want to delete the field with tag %tag% and subfield %subfieldCd%?';";

#****************************************************************************
#*  Translation text for page biblio_marc_del.php
#****************************************************************************
$trans["biblioMarcDelSuccess"]     = "\$text = 'Marc field successfully deleted.';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelConfirmWarn"]     = "\$text = '这个数目有 %copyCount% 拷贝， %holdCount% 预约.  请先删除拷贝和预约.';";
$trans["biblioDelConfirmReturn"]   = "\$text = '返回书目清单';";
$trans["biblioDelConfirmMsg"]      = "\$text = '确认删除标题为 %title% 的书目吗?';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelMsg"]             = "\$text = '书目, %title%, 已经删除.';";
$trans["biblioDelReturn"]          = "\$text = '返回书目搜索';";

#****************************************************************************
#*  Translation text for page biblio_hold_list.php
#****************************************************************************
$trans["biblioHoldListHead"]       = "\$text = '书目预约:';";
$trans["biblioHoldListNoHolds"]    = "\$text = '没有书目拷贝被预约.';";
$trans["biblioHoldListHdr1"]       = "\$text = 'Function';";
$trans["biblioHoldListHdr2"]       = "\$text = '拷贝';";
$trans["biblioHoldListHdr3"]       = "\$text = '预约';";
$trans["biblioHoldListHdr4"]       = "\$text = '读者';";
$trans["biblioHoldListHdr5"]       = "\$text = '状态';";
$trans["biblioHoldListHdr6"]       = "\$text = 'Due Back';";
$trans["biblioHoldListdel"]        = "\$text = '删除';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["NotAuth"]                 = "\$text = '未授权使用编目';";

#****************************************************************************
#*  Translation text for page upload_usmarc.php and upload_usmarc_form.php
#****************************************************************************
$trans["MarcUploadTest"]            = "\$text = 'Test Load';";
$trans["MarcUploadTestTrue"]        = "\$text = 'True';";
$trans["MarcUploadTestFalse"]       = "\$text = 'False';";
$trans["MarcUploadTestFileUpload"]  = "\$text = 'USMarc Input File';";
$trans["MarcUploadRecordsUploaded"] = "\$text = 'Records Uploaded';";
$trans["MarcUploadMarcRecord"]      = "\$text = 'MARC Record';";
$trans["MarcUploadTag"]             = "\$text = 'Tag';";
$trans["MarcUploadSubfield"]        = "\$text = 'Sub';";
$trans["MarcUploadData"]            = "\$text = 'Data';";
$trans["MarcUploadRawData"]         = "\$text = 'Raw Data:';";
$trans["UploadFile"]                = "\$text = 'Upload File';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["PoweredByOB"]                 = "\$text = '提供动力 by OpenBiblio';";
$trans["Copyright"]                   = "\$text = '版权 &copy; 2002-2005';";
$trans["underthe"]                    = "\$text = 'under the';";
$trans["GNU"]                 = "\$text = 'GNU General Public License';";

$trans["catalogResults"]                 = "\$text = 'Search Results';";



?>
