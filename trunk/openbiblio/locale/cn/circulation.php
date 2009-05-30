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
$trans["circCancel"]              = "\$text = 'ȡ��';";
$trans["circDelete"]              = "\$text = 'ɾ��';";
$trans["circLogout"]              = "\$text = '�˳�';";
$trans["circAdd"]                 = "\$text = '���';";
$trans["mbrDupBarcode"]           = "\$text = '����, %barcode%, �Ѿ�ʹ��.';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHeading"]            = "\$text='��Ŀ';";
$trans["indexCardHdr"]            = "\$text='�ÿ����һ�Ա:';";
$trans["indexCard"]               = "\$text='����:';";
$trans["indexSearch"]             = "\$text='����';";
$trans["indexNameHdr"]            = "\$text='�������һ�Ա:';";
$trans["indexName"]               = "\$text='���ֿ�ͷ:';";

#****************************************************************************
#*  Translation text for page mbr_new_form.php, mbr_edit_form.php and mbr_fields.php
#****************************************************************************
$trans["Mailing Address:"] = "\$text='������ַ:';";
$trans["mbrNewForm"]              = "\$text='�½�';";
$trans["mbrEditForm"]             = "\$text='�༭';";
$trans["mbrFldsHeader"]           = "\$text='��Ա:';";
$trans["mbrFldsCardNmbr"]         = "\$text='����:';";
$trans["mbrFldsLastName"]         = "\$text='��:';";
$trans["mbrFldsFirstName"]        = "\$text='��:';";
$trans["mbrFldsAddr1"]            = "\$text='��ַ1:';";
$trans["mbrFldsAddr2"]            = "\$text='��ַ2:';";
$trans["mbrFldsCity"]             = "\$text='����:';";
$trans["mbrFldsStateZip"]         = "\$text='ʡ,�ʱ�:';";
$trans["mbrFldsHomePhone"]        = "\$text='��ͥ�绰:';";
$trans["mbrFldsWorkPhone"]        = "\$text='�����绰:';";
$trans["mbrFldsEmail"]            = "\$text='Email :';";
$trans["mbrFldsClassify"]         = "\$text='����:';";
$trans["mbrFldsGrade"]            = "\$text='School Grade:';";
$trans["mbrFldsTeacher"]          = "\$text='School Teacher:';";
$trans["mbrFldsSubmit"]           = "\$text='�ύ';";
$trans["mbrFldsCancel"]           = "\$text='ȡ��';";
$trans["mbrsearchResult"]         = "\$text='���ҳ��: ';";
$trans["mbrsearchprev"]           = "\$text='��ǰ';";
$trans["mbrsearchnext"]           = "\$text='���';";
$trans["mbrsearchNoResults"]      = "\$text='�޽��.';";
$trans["mbrsearchFoundResults"]   = "\$text=' ������ҵ�';";
$trans["mbrsearchSearchResults"]  = "\$text='�������:';";
$trans["mbrsearchCardNumber"]     = "\$text='����:';";
$trans["mbrsearchClassification"] = "\$text='����:';";

#****************************************************************************
#*  Translation text for page mbr_new.php
#****************************************************************************
$trans["mbrNewSuccess"]           = "\$text='��Ա�Ѿ����';";

#****************************************************************************
#*  Translation text for page mbr_edit.php
#****************************************************************************
$trans["mbrEditSuccess"]          = "\$text='��Ա�Ѿ��޸�.';";

#****************************************************************************
#*  Translation text for page mbr_view.php
#****************************************************************************
$trans["mbrViewHead1"]            = "\$text='��Ա��Ϣ:';";
$trans["mbrViewName"]             = "\$text='��:';";
$trans["mbrViewAddr"]             = "\$text='��ַ:';";
$trans["mbrViewCardNmbr"]         = "\$text='����:';";
$trans["mbrViewClassify"]         = "\$text='����:';";
$trans["mbrViewPhone"]            = "\$text='�绰:';";
$trans["mbrViewPhoneHome"]        = "\$text='H:';";
$trans["mbrViewPhoneWork"]        = "\$text='W:';";
$trans["mbrViewEmail"]            = "\$text='Email :';";
$trans["mbrViewGrade"]            = "\$text='School Grade:';";
$trans["mbrViewTeacher"]          = "\$text='School Teacher:';";
$trans["mbrViewHead2"]            = "\$text='���ͳ��:';";
$trans["mbrViewStatColHdr1"]      = "\$text='��������';";
$trans["mbrViewStatColHdr2"]      = "\$text='����';";
$trans["mbrViewStatColHdr3"]      = "\$text='�޶�';";
$trans["mbrViewStatColHdr4"]      = "\$text='���';";
$trans["mbrViewStatColHdr5"]      = "\$text='����';";
$trans["mbrViewHead3"]            = "\$text='�����Ŀ:';";
$trans["mbrViewBarcode"]          = "\$text='����:';";
$trans["mbrViewCheckOut"]         = "\$text='���';";
$trans["mbrViewHead4"]            = "\$text='��ǰ�����Ŀ:';";
$trans["mbrViewOutHdr1"]          = "\$text='���';";
$trans["mbrViewOutHdr2"]          = "\$text='��������';";
$trans["mbrViewOutHdr3"]          = "\$text='����';";
$trans["mbrViewOutHdr4"]          = "\$text='����';";
$trans["mbrViewOutHdr5"]          = "\$text='����';";
$trans["mbrViewOutHdr6"]          = "\$text='�黹ʱ��';";
$trans["mbrViewOutHdr7"]          = "\$text='��������';";
$trans["mbrViewOutHdr8"]          = "\$text='����';";
$trans["mbrViewOutHdr9"]          = "\$text='time/s';";
$trans["mbrViewNoCheckouts"]      = "\$text='��ǰû�н����Ŀ.';";
$trans["mbrViewHead5"]            = "\$text='ԤԼ:';";
$trans["mbrViewHead6"]            = "\$text='��ǰԤԼ�嵥:';";
$trans["mbrViewPlaceHold"]        = "\$text='ԤԼ';";
$trans["mbrViewHoldHdr1"]         = "\$text='����';";
$trans["mbrViewHoldHdr2"]         = "\$text='ԤԼ';";
$trans["mbrViewHoldHdr3"]         = "\$text='��������';";
$trans["mbrViewHoldHdr4"]         = "\$text='����';";
$trans["mbrViewHoldHdr5"]         = "\$text='����';";
$trans["mbrViewHoldHdr6"]         = "\$text='����';";
$trans["mbrViewHoldHdr7"]         = "\$text='״̬';";
$trans["mbrViewHoldHdr8"]         = "\$text='����ʱ��';";
$trans["mbrViewNoHolds"]          = "\$text='��ǰ��ԤԼ.';";
$trans["mbrViewBalMsg"]           = "\$text='Note: Member has an outstanding account balance of %bal%.';";
$trans["mbrPrintCheckouts"]	  = "\$text='��ӡ����嵥';";
$trans["mbrViewDel"]              = "\$text='del';";

#****************************************************************************
#*  Translation text for page checkout.php
#****************************************************************************
$trans["checkoutBalErr"]          = "\$text='��Ա����֮ǰ�����Ƚ��ɷ���.';";
$trans["checkoutErr1"]            = "\$text='���������Ӣ�ĺ�����.';";
$trans["checkoutErr2"]            = "\$text='�������û�ж�Ӧ����Ŀ.';";
$trans["checkoutErr3"]            = "\$text='������� %barcode% ����Ŀ�Ѿ����.';";
$trans["checkoutErr4"]            = "\$text='������� %barcode% ���ܽ��.';";
$trans["checkoutErr5"]            = "\$text='������� %barcode% �����뵱ǰ��������ԱԤԼ .';";
$trans["checkoutErr6"]            = "\$text='��Ա���������������͵���Ŀ�Ѿ������޶�.';";
$trans["checkoutErr7"]            = "\$text='������� %barcode% ����Ŀ�Ѿ�����������޶�';";
$trans["checkoutErr8"]            = "\$text='������� %barcode% ����Ŀ �������裬��Ϊ�����Ѿ�����.';";

#****************************************************************************
#*  Translation text for page shelving_cart.php
#****************************************************************************
$trans["shelvingCartErr1"]        = "\$text='���������Ӣ�ĺ����ֹ���.';";
$trans["shelvingCartErr2"]        = "\$text='û���ҵ�����������Ŀ.';";
$trans["shelvingCartTrans"]       = "\$text='���ڷ���  (����=%barcode%)';";

#****************************************************************************
#*  Translation text for page checkin_form.php
#****************************************************************************
$trans["checkinFormHdr1"]         = "\$text='����:';";
$trans["checkinFormBarcode"]      = "\$text='����:';";
$trans["checkinFormShelveButton"] = "\$text='Add to Shelving Cart';";
$trans["checkinFormCheckinLink1"] = "\$text='���飺ѡ����';";
$trans["checkinFormCheckinLink2"] = "\$text='���飺ȫ��';";
$trans["checkinFormHdr2"]         = "\$text='Current Shelving Cart List:';";
$trans["checkinFormColHdr1"]      = "\$text='Date Scanned';";
$trans["checkinFormColHdr2"]      = "\$text='����';";
$trans["checkinFormColHdr3"]      = "\$text='����';";
$trans["checkinFormColHdr4"]      = "\$text='����';";
$trans["checkinFormEmptyCart"]    = "\$text='û��״̬Ϊ shelving cart status ����Ŀ.';";

#****************************************************************************
#*  Translation text for page checkin.php
#****************************************************************************
$trans["checkinErr1"]             = "\$text='û���κ�ѡ��.';";

#****************************************************************************
#*  Translation text for page hold_message.php
#****************************************************************************
$trans["holdMessageHdr"]          = "\$text='��Ŀ�Ѿ��ɹ�ԤԼ!';";
$trans["holdMessageMsg1"]         = "\$text='���� %barcode% ����Ŀ�Ѿ���ԤԼ <b>����ʱ���У����طŵ������ (shelving cart).</b>  �Ȿ���Ѿ�������Ϊ ��ԤԼ ״̬.';";
$trans["holdMessageMsg2"]         = "\$text='���� ���� ҳ��.';";

#****************************************************************************
#*  Translation text for page place_hold.php
#****************************************************************************
$trans["placeHoldErr1"]           = "\$text='�������Ϊ����.';";
$trans["placeHoldErr2"]           = "\$text='���벻����.';";
$trans["placeHoldErr3"]           = "\$text='��Ա�Ѿ���������Ŀ - ����ԤԼ.';";

#****************************************************************************
#*  Translation text for page mbr_del_confirm.php
#****************************************************************************
$trans["mbrDelConfirmWarn"]       = "\$text = '��Ա, %name%, �Ѿ���� %checkoutCount% �Σ�������ԤԼ %holdCount% ��.  ɾ����Աǰ���뻹���ɾ��ԤԼ';";
$trans["mbrDelConfirmReturn"]     = "\$text = '���� ��Ա��Ϣ';";
$trans["mbrDelConfirmMsg"]        = "\$text = 'ȷ��ɾ����Ա, %name%?  ��Ա��ȫ����ʷҲ�����.';";

#****************************************************************************
#*  Translation text for page mbr_del.php
#****************************************************************************
$trans["mbrDelSuccess"]           = "\$text='��Ա, %name%, �Ѿ�ɾ��.';";
$trans["mbrDelReturn"]            = "\$text='���� ��Ա����';";

#****************************************************************************
#*  Translation text for page mbr_history.php
#****************************************************************************
$trans["mbrHistoryHead1"]         = "\$text='�����ʷ:';";
$trans["mbrHistoryNoHist"]        = "\$text='����ʷ.';";
$trans["mbrHistoryHdr1"]          = "\$text='����';";
$trans["mbrHistoryHdr2"]          = "\$text='����';";
$trans["mbrHistoryHdr3"]          = "\$text='����';";
$trans["mbrHistoryHdr4"]          = "\$text='��״̬';";
$trans["mbrHistoryHdr5"]          = "\$text='״̬�仯����';";
$trans["mbrHistoryHdr6"]          = "\$text='�黹����';";

#****************************************************************************
#*  Translation text for page mbr_account.php
#****************************************************************************
$trans["mbrAccountLabel"]         = "\$text='�����Ŀ:';";
$trans["mbrAccountTransTyp"]      = "\$text='��Ŀ����:';";
$trans["mbrAccountAmount"]        = "\$text='����:';";
$trans["mbrAccountDesc"]          = "\$text='����:';";
$trans["mbrAccountHead1"]         = "\$text='��Ա��Ŀ:';";
$trans["mbrAccountNoTrans"]       = "\$text='����Ŀ.';";
$trans["mbrAccountOpenBal"]       = "\$text='Opening Balance';";
$trans["mbrAccountDel"]           = "\$text='ɾ��';";
$trans["mbrAccountHdr1"]          = "\$text='����';";
$trans["mbrAccountHdr2"]          = "\$text='����';";
$trans["mbrAccountHdr3"]          = "\$text='��Ŀ����';";
$trans["mbrAccountHdr4"]          = "\$text='����';";
$trans["mbrAccountHdr5"]          = "\$text='���';";
$trans["mbrAccountHdr6"]          = "\$text='���';";

#****************************************************************************
#*  Translation text for page mbr_transaction.php
#****************************************************************************
$trans["mbrTransactionSuccess"]   = "\$text='�����Ŀ.';";

#****************************************************************************
#*  Translation text for page mbr_transaction_del_confirm.php
#****************************************************************************
$trans["mbrTransDelConfirmMsg"]   = "\$text='Ҫɾ�������Ŀ��?';";

#****************************************************************************
#*  Translation text for page mbr_transaction_del.php
#****************************************************************************
$trans["mbrTransactionDelSuccess"] = "\$text='��Ŀ�Ѿ�ɾ��.';";

#****************************************************************************
#*  Translation text for page mbr_print_checkouts.php
#****************************************************************************
$trans["mbrPrintCheckoutsTitle"]  = "\$text='Ϊ %mbrName% ���';";
$trans["mbrPrintCheckoutsHdr1"]   = "\$text='��ǰ����:';";
$trans["mbrPrintCheckoutsHdr2"]   = "\$text='��Ա:';";
$trans["mbrPrintCheckoutsHdr3"]   = "\$text='����:';";
$trans["mbrPrintCheckoutsHdr4"]   = "\$text='����:';";
$trans["mbrPrintCloseWindow"]     = "\$text='�رմ���';";

?>
