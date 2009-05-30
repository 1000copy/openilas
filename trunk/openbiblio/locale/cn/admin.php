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
$trans["adminSubmit"]              = "\$text = '�ύ';";
$trans["adminCancel"]              = "\$text = 'ȡ��';";
$trans["adminDelete"]              = "\$text = 'ɾ��';";
$trans["adminUpdate"]              = "\$text = '����';";
$trans["adminFootnote"]            = "\$text = '�� %symbol% ��ǵ��ֶ��Ǳ����.';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = '����';";
$trans["indexDesc"]                = "\$text = '�����ĵ���������Ա���ͻ�������.';";

#****************************************************************************
#*  Translation text for page collections*.php
#****************************************************************************
$trans["adminCollections_delReturn"]                 = "\$text = '���� Collection';";
$trans["adminCollections_delStart"]                 = "\$text = 'Collection, ';";

#****************************************************************************
#*  Translation text for page collections_del.php
#****************************************************************************
$trans["adminCollections_delEnd"]                 = "\$text = ', �Ѿ�ɾ��.';";

#****************************************************************************
#*  Translation text for page collections_del_confirm.php
#****************************************************************************
$trans["adminCollections_del_confirmText"]                 = "\$text = 'ȷʵҪɾ��collection, ';";

#****************************************************************************
#*  Translation text for page collections_edit.php
#****************************************************************************
$trans["adminCollections_editEnd"]                 = "\$text = ', �Ѿ�����.';";

#****************************************************************************
#*  Translation text for page collections_edit_form.php
#****************************************************************************
$trans["adminCollections_edit_formEditcollection"]                 = "\$text = '�༭�ݲ�:';";
$trans["adminCollections_edit_formDescription"]                 = "\$text = '����:';";
$trans["adminCollections_edit_formDaysdueback"]                 = "\$text = '�ɽ�����:';";
$trans["adminCollections_edit_formDailyLateFee"]                 = "\$text = '���ڷ���(ÿ��):';";
$trans["adminCollections_edit_formNote"]                 = "\$text = '*��ע:';";
$trans["adminCollections_edit_formNoteText"]                 = "\$text = '�ɽ�����Ϊ���ʾ�ݲز��ɽ��.';";

#****************************************************************************
#*  Translation text for page collections_list.php
#****************************************************************************
$trans["adminCollections_listAddNewCollection"]                 = "\$text = '�½��ݲ�';";
$trans["adminCollections_listCollections"]                 = "\$text = '�ݲ�:';";
$trans["adminCollections_listFunction"]                 = "\$text = '����';";
$trans["adminCollections_listDescription"]                 = "\$text = '����';";
$trans["adminCollections_listDaysdueback"]                 = "\$text = '�ɽ�����';";
$trans["adminCollections_listDailylatefee"]                 = "\$text = '���ڷ���';";
$trans["adminCollections_listBibliographycount"]                 = "\$text = '����<br>����';";
$trans["adminCollections_listEdit"]                 = "\$text = '�༭';";
$trans["adminCollections_listDel"]                 = "\$text = 'ɾ��';";
$trans["adminCollections_ListNote"]                 = "\$text = '*��ע:';";
$trans["adminCollections_ListNoteText"]                 = "\$text = '��������ɾ����ĿΪ0�Ĺݲ�<br>ȷʵҪɾ���������ȸı����׵���������';";

#****************************************************************************
#*  Translation text for page collections_new.php
#****************************************************************************
$trans["adminCollections_newAdded"]                 = "\$text = ', �Ѿ����.';";

#****************************************************************************
#*  Translation text for page collections_new_form.php
#****************************************************************************
$trans["adminCollections_new_formAddnewcollection"]                 = "\$text = '�½��ݲ�:';";
$trans["adminCollections_new_formDescription"]                 = "\$text = '����:';";
$trans["adminCollections_new_formDaysdueback"]                 = "\$text = '�ɽ�����:';";
$trans["adminCollections_new_formDailylatefee"]                 = "\$text = '���ڷ���(��):';";
$trans["adminCollections_new_formNote"]                 = "\$text = '*��ע:';";
$trans["adminCollections_new_formNoteText"]                 = "\$text = '�ɽ�����Ϊ���ʾ�ݲز��ɽ��.';";

#****************************************************************************
#*  Translation text for page materials_del.php
#****************************************************************************
$trans["admin_materials_delMaterialType"]                 = "\$text = '��������, ';";
$trans["admin_materials_delMaterialdeleted"]                 = "\$text = ', �Ѿ�ɾ��.';";
$trans["admin_materials_Return"]                 = "\$text = '�������������嵥';";

#****************************************************************************
#*  Translation text for page materials_del_form.php
#****************************************************************************
$trans["admin_materials_delAreyousure"]                 = "\$text = 'ȷʵҪɾ����������, ';";

#****************************************************************************
#*  Translation text for page materials_edit_form.php
#****************************************************************************
$trans["admin_materials_delEditmaterialtype"]                 = "\$text = '�༭��������:';";
$trans["admin_materials_delDescription"]                 = "\$text = '����:';";
$trans["admin_materials_delunlimited"]                 = "\$text = '(0Ϊ������)';";
$trans["admin_materials_delImagefile"]                 = "\$text = 'ͼƬ�ļ�:';";
$trans["admin_materials_delNote"]                 = "\$text = '*��ע:';";
$trans["admin_materials_delNoteText"]                 = "\$text = 'ͼƬ�ļ�������openbiblio/images ��.';";

#****************************************************************************
#*  Translation text for page materials_edit.php
#****************************************************************************
$trans["admin_materials_editEnd"]                 = "\$text = ', �Ѿ�����.';";

#****************************************************************************
#*  Translation text for page materials_list.php
#****************************************************************************
$trans["admin_materials_listAddmaterialtypes"]                 = "\$text = '�½���������';";
$trans["admin_materials_listMaterialtypes"]                 = "\$text = '��������:';";
$trans["admin_materials_listFunction"]                 = "\$text = 'Function';";
$trans["admin_materials_listDescription"]                 = "\$text = '����';";
$trans["admin_materials_listLimits"]                 = "\$text = '�޶�';";
$trans["admin_materials_listCheckoutlimit"]                 = "\$text = '���';";
$trans["admin_materials_listRenewallimit"]                 = "\$text = '����';";
$trans["admin_materials_listImageFile"]                 = "\$text = 'ͼƬ<br>�ļ�';";
$trans["admin_materials_listBibcount"]                 = "\$text = '����<br>����';";
$trans["admin_materials_listEdit"]                 = "\$text = '�༭';";
$trans["admin_materials_listDel"]                 = "\$text = 'ɾ��';";
$trans["admin_materials_listNote"]                 = "\$text = '*��ע:';";
$trans["admin_materials_listNoteText"]                 = "\$text = '��������ɾ����ĿΪ0�Ĺݲ�<br>ȷʵҪɾ���������ȸı����׵���������.';";

#****************************************************************************
#*  Translation text for page materials_new.php
#****************************************************************************
$trans["admin_materials_listNewadded"]                 = "\$text = ', �Ѿ����.';";

#****************************************************************************
#*  Translation text for page materials_new_form.php
#****************************************************************************
$trans["admin_materials_new_formNoteText"]                 = "\$text = 'ͼƬ�ļ�������openbiblio/images ��.';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["admin_noauth"]                 = "\$text = 'δ��Ȩʹ�ù�����.';";

#****************************************************************************
#*  Translation text for page settings_edit.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page settings_edit_form.php
#****************************************************************************
$trans["admin_settingsUpdated"]                 = "\$text = '�����Ѿ�����.';";
$trans["admin_settingsEditsettings"]                 = "\$text = '�༭ͼ�������:';";
$trans["admin_settingsLibName"]                 = "\$text = 'ͼ�������:';";
$trans["admin_settingsLibimageurl"]                 = "\$text = 'Logo URL:';";
$trans["admin_settingsOnlyshowimginheader"]                 = "\$text = '������ҳͷ��ʾͼƬ:';";
$trans["admin_settingsLibhours"]                 = "\$text = '����ʱ��:';";
$trans["admin_settingsLibphone"]                 = "\$text = '��ϵ�绰:';";
$trans["admin_settingsLibURL"]                 = "\$text = 'ͼ�����ҳURL:';";
$trans["admin_settingsOPACURL"]                 = "\$text = 'OPAC URL:';";
$trans["admin_settingsSessionTimeout"]                 = "\$text = '�Ự��ʱʱ��:';";
$trans["admin_settingsMinutes"]                 = "\$text = '����';";
$trans["admin_settingsSearchResults"]                 = "\$text = '�������:';";
$trans["admin_settingsItemsperpage"]                 = "\$text = 'ÿҳ��ʾ��Ŀ';";
$trans["admin_settingsPurgebibhistory"]                 = "\$text = '���������ʷ��:';";
$trans["admin_settingsmonths"]                 = "\$text = '�º�';";
$trans["admin_settingsBlockCheckouts"]                 = "\$text = 'Block Checkouts When Fines Due:';";
$trans["admin_settingsLocale"]                 = "\$text = '���ػ�:';";
$trans["admin_settingsHTMLChar"]                 = "\$text = 'HTML �ַ���:';";
$trans["admin_settingsHTMLTagLangAttr"]                 = "\$text = 'HTML Tag Lang Attribute:';";

#****************************************************************************
#*  Translation text for all staff pages
#****************************************************************************
$trans["adminStaff_Staffmember"]                 = "\$text = 'Ա����Ա';";
$trans["adminStaff_Return"]                 = "\$text = '����Ա����';";
$trans["adminStaff_Yes"]                 = "\$text = '��';";
$trans["adminStaff_No"]                 = "\$text = '��';";


#****************************************************************************
#*  Translation text for page staff_del.php
#****************************************************************************
$trans["adminStaff_delDeleted"]                 = "\$text = ', �Ѿ�ɾ��.';";

#****************************************************************************
#*  Translation text for page staff_delete_confirm.php
#****************************************************************************
$trans["adminStaff_del_confirmConfirmText"]                 = "\$text = 'ȷʵҪɾ��Ա����, ';";

#****************************************************************************
#*  Translation text for page staff_edit.php
#****************************************************************************
$trans["adminStaff_editUpdated"]                 = "\$text = ', �Ѿ�����.';";

#****************************************************************************
#*  Translation text for page staff_edit_form.php
#****************************************************************************
$trans["adminStaff_edit_formHeader"]                 = "\$text = '�༭Ա��:';";
$trans["adminStaff_edit_formLastname"]                 = "\$text = '��:';";
$trans["adminStaff_edit_formFirstname"]                 = "\$text = '��:';";
$trans["adminStaff_edit_formLogin"]                 = "\$text = '��½�˺�:';";
$trans["adminStaff_edit_formAuth"]                 = "\$text = '��Ȩ:';";
$trans["adminStaff_edit_formCirc"]                 = "\$text = '��ͨ';";
$trans["adminStaff_edit_formUpdatemember"]                 = "\$text = '����';";
$trans["adminStaff_edit_formCatalog"]                 = "\$text = '��Ŀ';";
$trans["adminStaff_edit_formAdmin"]                 = "\$text = '����';";
$trans["adminStaff_edit_formReports"]                 = "\$text = '����';";
$trans["adminStaff_edit_formSuspended"]                 = "\$text = 'Suspended:';";

#****************************************************************************
#*  Translation text for page staff_list.php
#****************************************************************************
$trans["adminStaff_list_formHeader"]                 = "\$text = '�½�Ա��';";
$trans["adminStaff_list_Columnheader"]                 = "\$text = ' Ա��:';";
$trans["adminStaff_list_Function"]                 = "\$text = '����';";
$trans["adminStaff_list_Edit"]                 = "\$text = '�༭';";
$trans["adminStaff_list_Pwd"]                 = "\$text = '����';";
$trans["adminStaff_list_Del"]                 = "\$text = 'ɾ��';";

#****************************************************************************
#*  Translation text for page staff_new.php
#****************************************************************************
$trans["adminStaff_new_Added"]                 = "\$text = ', �Ѿ����.';";

#****************************************************************************
#*  Translation text for page staff_new_form.php
#****************************************************************************
$trans["adminStaff_new_form_Header"]          	= "\$text = '��Ա��:';";
$trans["adminStaff_new_form_Password"]          = "\$text = '����:';";
$trans["adminStaff_new_form_Reenterpassword"]   = "\$text = '��������:';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset.php
#****************************************************************************
$trans["adminStaff_pwd_reset_Passwordreset"]   = "\$text = '�����Ѿ�����.';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset_form.php
#****************************************************************************
$trans["adminStaff_pwd_reset_form_Resetheader"]   = "\$text = '����Ա������:';";

#****************************************************************************
#*  Translation text for theme pages
#****************************************************************************
$trans["adminTheme_Return"]                 = "\$text = '������ʽ��';";
$trans["adminTheme_Theme"]                 = "\$text = '��ʽ, ';";

#****************************************************************************
#*  Translation text for page theme_del.php
#****************************************************************************
$trans["adminTheme_Deleted"]                 = "\$text = ', �Ѿ�ɾ��.';";
#****************************************************************************
#*  Translation text for page theme_del_confirm.php
#****************************************************************************
$trans["adminTheme_Deleteconfirm"]                 = "\$text = '�Ƿ�ȷ��ɾ����ʽ, ';";
#****************************************************************************
#*  Translation text for page theme_edit.php
#****************************************************************************
$trans["adminTheme_Updated"]                 = "\$text = ', �Ѿ�����.';";

#****************************************************************************
#*  Translation text for page theme_edit_form.php
#****************************************************************************
$trans["adminTheme_Preview"]                 = "\$text = 'Ԥ����ʽ�޸�';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Changetheme"]                 = "\$text = '�޸ĵ�ǰʹ�õ���ʽ:';";
$trans["adminTheme_Choosetheme"]                 = "\$text = 'ѡ��һ������ʽ:';";
$trans["adminTheme_Addnew"]                 = "\$text = '�½���ʽ';";
$trans["adminTheme_themes"]                 = "\$text = '��ʽ:';";
$trans["adminTheme_function"]                 = "\$text = '����';";
$trans["adminTheme_Themename"]                 = "\$text = '��ʽ����';";
$trans["adminTheme_Usage"]                 = "\$text = '�÷�';";
$trans["adminTheme_Edit"]                 = "\$text = '�޸�';";
$trans["adminTheme_Copy"]                 = "\$text = '����';";
$trans["adminTheme_Del"]                 = "\$text = 'ɾ��';";
$trans["adminTheme_Inuse"]                 = "\$text = '����ʹ��';";
$trans["adminTheme_Note"]                 = "\$text = '*��ע:';";
$trans["adminTheme_Notetext"]                 = "\$text = '����ɾ������ʹ�õ���ʽ.';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Theme2"]                 = "\$text = '��ʽ:';";
$trans["adminTheme_Tablebordercolor"]                 = "\$text = '��ı�����ɫ:';";
$trans["adminTheme_Errorcolor"]                 = "\$text = '�������ɫ:';";
$trans["adminTheme_Tableborderwidth"]                 = "\$text = '��ı��߿��:';";
$trans["adminTheme_Tablecellpadding"]                 = "\$text = '���Ԫ���:';";
$trans["adminTheme_Title"]                 = "\$text = '����';";
$trans["adminTheme_Mainbody"]                 = "\$text = '����';";
$trans["adminTheme_Navigation"]                 = "\$text = '����';";
$trans["adminTheme_Tabs"]                 = "\$text = '��ǩ';";
$trans["adminTheme_Backgroundcolor"]                 = "\$text = '����ɫ:';";
$trans["adminTheme_Fontface"]                 = "\$text = '����:';";
$trans["adminTheme_Fontsize"]                 = "\$text = '�����С:';";
$trans["adminTheme_Bold"]                 = "\$text = '����';";
$trans["adminTheme_Fontcolor"]                 = "\$text = '������ɫ:';";
$trans["adminTheme_Linkcolor"]                 = "\$text = '������ɫ:';";
$trans["adminTheme_Align"]                 = "\$text = '����:';";
$trans["adminTheme_Right"]                 = "\$text = '����';";
$trans["adminTheme_Left"]                 = "\$text = '����';";
$trans["adminTheme_Center"]                 = "\$text = '����';";

$trans["adminTheme_HeaderWording"]                 = "\$text = '�༭';";


#****************************************************************************
#*  Translation text for page theme_new.php
#****************************************************************************
$trans["adminTheme_new_Added"]                 = "\$text = ', �Ѿ����.';";

#****************************************************************************
#*  Translation text for page theme_new_form.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page theme_preview.php
#****************************************************************************
$trans["adminTheme_preview_Themepreview"]                 = "\$text = '��ʽԤ��';";
$trans["adminTheme_preview_Librarytitle"]                 = "\$text = 'ͼ��ݱ���';";
$trans["adminTheme_preview_CloseWindow"]                 = "\$text = '�رմ���';";
$trans["adminTheme_preview_Home"]                 = "\$text = '��ҳ';";
$trans["adminTheme_preview_Circulation"]   = "\$text = '��ͨ';";
$trans["adminTheme_preview_Cataloging"]    = "\$text = '��Ŀ';";
$trans["adminTheme_preview_Admin"]         = "\$text = '����';";
$trans["adminTheme_preview_Samplelink"]    = "\$text = '������';";
$trans["adminTheme_preview_Thisstart"]     = "\$text = 'Ԥ��';";
$trans["adminTheme_preview_Thisend"]       = "\$text = '��ʽ.';";
$trans["adminTheme_preview_Samplelist"]    = "\$text = '�����嵥:';";
$trans["adminTheme_preview_Tableheading"]  = "\$text = '��ͷ';";
$trans["adminTheme_preview_Sampledatarow1"]= "\$text = '������1';";
$trans["adminTheme_preview_Sampledatarow2"]= "\$text = '������2';";
$trans["adminTheme_preview_Sampledatarow3"]= "\$text = '������3';";
$trans["adminTheme_preview_Samplelink"]    = "\$text = '��������';";
$trans["adminTheme_preview_Sampleerror"]   = "\$text = '��������';";
$trans["adminTheme_preview_Sampleinput"]   = "\$text = '��������';";
$trans["adminTheme_preview_Samplebutton"]  = "\$text = '������ť';";
$trans["adminTheme_preview_Poweredby"]     = "\$text = 'Powered by OpenBiblio';";
$trans["adminTheme_preview_Copyright"]     = "\$text = 'Copyright &copy; 2002-2005 Dave Stevens';";
$trans["adminTheme_preview_underthe"]      = "\$text = 'under the';";
$trans["adminTheme_preview_GNU"]           = "\$text = 'GNU General Public License';";

#****************************************************************************
#*  Translation text for page theme_use.php
#****************************************************************************

?>
