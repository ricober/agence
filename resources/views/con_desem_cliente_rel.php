<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- saved from url=(0043)http://www.agence.com.br/caol/consultas.php -->
<HTML><HEAD><TITLE>CAOL - Controle de Atividades Online - Agence Interativa</TITLE>
<style>
	#sub1, #sub2, #sub3
	{ position: absolute;
	  left: 480px;
	  visibility: hidden;
	  z-index: 3
	}
</style>
		<script language='javascript' src="js/popcalendar.js"></script>
<SCRIPT language="JavaScript">
<!--
<!-- comeco do selection box
function move(fbox, tbox) {
var arrFbox = new Array();
var arrTbox = new Array();
var arrLookup = new Array();
var i;
for (i = 0; i < tbox.options.length; i++) {
arrLookup[tbox.options[i].text] = tbox.options[i].value;
arrTbox[i] = tbox.options[i].text;
}
var fLength = 0;
var tLength = arrTbox.length;
for(i = 0; i < fbox.options.length; i++) {
arrLookup[fbox.options[i].text] = fbox.options[i].value;
if (fbox.options[i].selected && fbox.options[i].value != "") {
arrTbox[tLength] = fbox.options[i].text;
tLength++;
}
else {
arrFbox[fLength] = fbox.options[i].text;
fLength++;
   }
}
arrFbox.sort();
arrTbox.sort();
fbox.length = 0;
tbox.length = 0;
var c;
for(c = 0; c < arrFbox.length; c++) {
var no = new Option();
no.value = arrLookup[arrFbox[c]];
no.text = arrFbox[c];
fbox[c] = no;
}
for(c = 0; c < arrTbox.length; c++) {
var no = new Option();
no.value = arrLookup[arrTbox[c]];
no.text = arrTbox[c];
tbox[c] = no;
   }
}
//  fim de selection box -->

function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<SCRIPT LANGUAGE="JavaScript">

<!-- selecione e mostra o campo
catnumber = 1
offset = 150
performOnchange = false
if (document.all) {
  docObj = "document.all."
  styleObj = ".style"
  } else {
  docObj = "document."
  styleObj = ""
}
function openselect(subcat) {
  popupselect = eval(docObj + subcat + styleObj)
  popupselect.visibility = "visible"
}
function closeselect(submenu,subcat){
  popupselect = eval(docObj + subcat + styleObj)
  if (submenu.selectedIndex != 0) {
    popupselect.visibility = "hidden"
    numchoice = submenu.selectedIndex
    choice = submenu[numchoice].value
    subcategory.value = choice
    submenu.selectedIndex = 0
  }
}
function lock() {
  performOnchange = false
}
function unlock() {
  performOnchange = true
}
function selectSub(cat) {
  for (i=1; i <= catnumber; i++) {
    subcat = "sub" + i
    popupselect = eval(docObj + subcat + styleObj)
    popupselect.visibility = "hidden"
  }
  if (performOnchange == true) {
    letsopen = "sub" + cat.selectedIndex
    if (letsopen == "sub0") {
      alert("No category selected")
      choice = "Cancelada"
      subcategory.value = choice
      cat.focus()
      } else {
      openselect(letsopen)
      lock()
    }
  }
}
//  fim do seleciona e mostra campo -->
</script>
<SCRIPT language=JavaScript src="js/cor_fundo.js" type=text/javascript></SCRIPT>
  <script language="JavaScript">
<!--
function PesquisaAvancada()
	{
		if (document.all['pesquisaAvancada'][1].style.display=='none')
			{
			document.all['pesquisaAvancada'][1].style.display='block'
			
			;
			}
		else
			{
			document.all['pesquisaAvancada'][1].style.display='none'
		
			;
			}
	}//-- fim PesquisaAvancada
//-->



<!-- inicio de formatacao de valores financeiros
function currencyFormat(fld, milSep, decSep, e) {
var sep = 0;
var key = '';
var i = j = 0;
var len = len2 = 0;
var strCheck = '0123456789';
var aux = aux2 = '';
var whichCode = (window.Event) ? e.which : e.keyCode;
if (whichCode == 13) return true; 
key = String.fromCharCode(whichCode); 
if (strCheck.indexOf(key) == -1) return false;  
len = fld.value.length;
for(i = 0; i < len; i++)
if ((fld.value.charAt(i) != '0') && (fld.value.charAt(i) != decSep)) break;
aux = '';
for(; i < len; i++)
if (strCheck.indexOf(fld.value.charAt(i))!=-1) aux += fld.value.charAt(i);
aux += key;
len = aux.length;
if (len == 0) fld.value = '';
if (len == 1) fld.value = '0'+ decSep + '0' + aux;
if (len == 2) fld.value = '0'+ decSep + aux;
if (len > 2) {
aux2 = '';
for (j = 0, i = len - 3; i >= 0; i--) {
if (j == 3) {
aux2 += milSep;
j = 0;
}
aux2 += aux.charAt(i);
j++;
}
fld.value = '';
len2 = aux2.length;
for (i = len2 - 1; i >= 0; i--)
fld.value += aux2.charAt(i);
fld.value += decSep + aux.substr(len - 2, len);
}
return false;
}
//  fim de formatacao de valores financeiros -->
        </script>
<SCRIPT language=JavaScript>
<!-- Begin
datetoday = new Date();
timenow=datetoday.getTime();
datetoday.setTime(timenow);
thehour = datetoday.getHours();
if (thehour > 18) display = "Boa noite";
else if (thehour >12) display = "Boa tarde";
else display = "Bom dia";
var greeting = (display + " ");

//  End -->
</script>
<SCRIPT language=JavaScript>
<!--

<!-- Come�o de formata��o de data
var isNav4 = false, isNav5 = false, isIE4 = false
var strSeperator = "/"; 
var vDateType = 1;
var vYearType = 4;
var err = 0;
if(navigator.appName == "Netscape") {
if (navigator.appVersion < "5") {
isNav4 = true;
isNav5 = false;
}
else
if (navigator.appVersion > "4") {
isNav4 = false;
isNav5 = true;
   }
}
else isIE4 = true;
function DateFormat(vDateName, vDateValue, e, dateCheck, dateType) {
vDateType = dateType;

if (vDateValue == "~") {
alert("AppVersion = "+navigator.appVersion+" \nNav. 4 Version = "+isNav4+" \nNav. 5 Version = "+isNav5+" \nIE Version = "+isIE4+" \nYear Type = "+vYearType+" \nDate Type = "+vDateType+" \nSeparator = "+strSeperator);
vDateName.value = "";
vDateName.focus();
return true;
}
var whichCode = (window.Event) ? e.which : e.keyCode;

if (vDateValue.length > 8 && isNav4) {
if ((vDateValue.indexOf("-") >= 1) || (vDateValue.indexOf("/") >= 1)) return true;
}

var alphaCheck = " abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ/-";
if (alphaCheck.indexOf(vDateValue) >= 1) {
if (isNav4) {
vDateName.value = "";
vDateName.focus();
vDateName.select();
return false;
}
else {
vDateName.value = vDateName.value.substr(0, (vDateValue.length-1));
return false;
   }
}
if (whichCode == 8) 
return false;
else {


var strCheck = '47,48,49,50,51,52,53,54,55,56,57,58,59,95,96,97,98,99,100,101,102,103,104,105';
if (strCheck.indexOf(whichCode) != -1) {
if (isNav4) {
if (((vDateValue.length < 6 && dateCheck) || (vDateValue.length == 7 && dateCheck)) && (vDateValue.length >=1)) {
alert("Data inv�lida\nPor favor, tente novamente");
vDateName.value = "";
vDateName.focus();
vDateName.select();
return false;
}
if (vDateValue.length == 6 && dateCheck) {
var mDay = vDateName.value.substr(2,2);
var mMonth = vDateName.value.substr(0,2);
var mYear = vDateName.value.substr(4,4);

if (mYear.length == 2 && vYearType == 4) {
var mToday = new Date();

var checkYear = mToday.getFullYear() + 30; 
var mCheckYear = '20' + mYear;
if (mCheckYear >= checkYear) mYear = '19' + mYear;
else mYear = '20' + mYear;
}
var vDateValueCheck = mMonth+strSeperator+mDay+strSeperator+mYear;
if (!dateValid(vDateValueCheck)) {
alert("Data inv�lida\nPor favor, tente novamente");
vDateName.value = "";
vDateName.focus();
vDateName.select();
return false;
}
return true;
}
else {

if (vDateValue.length >= 8  && dateCheck) {

if (vDateType == 3) {
var mMonth = vDateName.value.substr(2,2);
var mDay = vDateName.value.substr(0,2);
var mYear = vDateName.value.substr(4,4)
vDateName.value = mDay+strSeperator+mMonth+strSeperator+mYear;
}


var vDateTypeTemp = vDateType;
vDateType = 1;
var vDateValueCheck = mMonth+strSeperator+mDay+strSeperator+mYear;
if (!dateValid(vDateValueCheck)) {
alert("Data inv�lida\nPor favor, tente novamente");
vDateType = vDateTypeTemp;
vDateName.value = "";
vDateName.focus();
vDateName.select();
return false;
}
vDateType = vDateTypeTemp;
return true;
}
else {
if (((vDateValue.length < 8 && dateCheck) || (vDateValue.length == 9 && dateCheck)) && (vDateValue.length >=1)) {
alert("Data inv�lida\nPor favor, tente novamente");
vDateName.value = "";
vDateName.focus();
vDateName.select();
return false;
         }
      }
   }
}
else {

if (((vDateValue.length < 8 && dateCheck) || (vDateValue.length == 9 && dateCheck)) && (vDateValue.length >=1)) {
alert("Data inv�lida\nPor favor, tente novamente");
vDateName.value = "";
vDateName.focus();
return true;
}

if (vDateValue.length >= 8 && dateCheck) {

if (vDateType == 1) {
var mMonth = vDateName.value.substr(0,2);
var mDay = vDateName.value.substr(3,2);
var mYear = vDateName.value.substr(6,4)
}

if (vDateType == 2) {
var mYear = vDateName.value.substr(0,4)
var mMonth = vDateName.value.substr(5,2);
var mDay = vDateName.value.substr(8,2);
}

if (vDateType == 3) {
var mDay = vDateName.value.substr(0,2);
var mMonth = vDateName.value.substr(3,2);
var mYear = vDateName.value.substr(6,4)
}

var vDateTypeTemp = vDateType;


vDateType = 1;

var vDateValueCheck = mMonth+strSeperator+mDay+strSeperator+mYear;
if (vDateValueCheck.length >= 8 && dateCheck) {

if (mYear.length == 2 && vYearType == 4) {
var mToday = new Date();

var checkYear = mToday.getFullYear() + 30; 
var mCheckYear = '20' + mYear;
if (mCheckYear >= checkYear) mYear = '19' + mYear;
else mYear = '20' + mYear;
}
vDateValueCheck = mMonth+strSeperator+mDay+strSeperator+mYear;
} 
if (!dateValid(vDateValueCheck)) {
alert("Data inv�lida\nPor favor, tente novamente");
vDateType = vDateTypeTemp;
vDateName.value = "";
vDateName.focus();
return true;
}
vDateType = vDateTypeTemp;
return true;
}
else {
if (vDateType == 1) {
if (vDateValue.length == 2) {
vDateName.value = vDateValue+strSeperator;
}
if (vDateValue.length == 5) {
vDateName.value = vDateValue+strSeperator;
   }
}
if (vDateType == 2)
{
if (vDateValue.length == 4)  
{
vDateName.value = vDateValue+strSeperator;
}
if (vDateValue.length == 7) {
vDateName.value = vDateValue+strSeperator;
   }
}
if (vDateType == 3) {
if (vDateValue.length == 2) {
vDateName.value = vDateValue+strSeperator;
}
if (vDateValue.length == 5) {
vDateName.value = vDateValue+strSeperator;
   }
}
return true;
   }
}
if (vDateValue.length == 10&& dateCheck) {
if (!dateValid(vDateName)) {


alert("Data inv�lida\nPor favor, tente novamente");
vDateName.focus();
vDateName.select();
   }
}
return false;
}
else {

if (isNav4) {
vDateName.value = "";
vDateName.focus();
vDateName.select();
return false;
}
else {
vDateName.value = vDateName.value.substr(0, (vDateValue.length-1));
return false;
         }
      }
   }
}
function dateValid(objName) {
var strDate;
var strDateArray;
var strDay;
var strMonth;
var strYear;
var intday;
var intMonth;
var intYear;
var booFound = false;
var datefield = objName;
var strSeparatorArray = new Array("-"," ","/",".");
var intElementNr;

var strMonthArray = new Array(12);
strMonthArray[0] = "Jan";
strMonthArray[1] = "Feb";
strMonthArray[2] = "Mar";
strMonthArray[3] = "Apr";
strMonthArray[4] = "May";
strMonthArray[5] = "Jun";
strMonthArray[6] = "Jul";
strMonthArray[7] = "Aug";
strMonthArray[8] = "Sep";
strMonthArray[9] = "Oct";
strMonthArray[10] = "Nov";
strMonthArray[11] = "Dec";

strDate = objName;
if (strDate.length < 1) {
return true;
}
for (intElementNr = 0; intElementNr < strSeparatorArray.length; intElementNr++) {
if (strDate.indexOf(strSeparatorArray[intElementNr]) != -1) {
strDateArray = strDate.split(strSeparatorArray[intElementNr]);
if (strDateArray.length != 3) {
err = 1;
return false;
}
else {
strDay = strDateArray[0];
strMonth = strDateArray[1];
strYear = strDateArray[2];
}
booFound = true;
   }
}
if (booFound == false) {
if (strDate.length>5) {
strDay = strDate.substr(0, 2);
strMonth = strDate.substr(2, 2);
strYear = strDate.substr(4);
   }
}

if (strYear.length == 2) {
strYear = '20' + strYear;
}
strTemp = strDay;
strDay = strMonth;
strMonth = strTemp;
intday = parseInt(strDay, 10);
if (isNaN(intday)) {
err = 2;
return false;
}
intMonth = parseInt(strMonth, 10);
if (isNaN(intMonth)) {
for (i = 0;i<12;i++) {
if (strMonth.toUpperCase() == strMonthArray[i].toUpperCase()) {
intMonth = i+1;
strMonth = strMonthArray[i];
i = 12;
   }
}
if (isNaN(intMonth)) {
err = 3;
return false;
   }
}
intYear = parseInt(strYear, 10);
if (isNaN(intYear)) {
err = 4;
return false;
}
if (intMonth>12 || intMonth<1) {
err = 5;
return false;
}
if ((intMonth == 1 || intMonth == 3 || intMonth == 5 || intMonth == 7 || intMonth == 8 || intMonth == 10 || intMonth == 12) && (intday > 31 || intday < 1)) {
err = 6;
return false;
}
if ((intMonth == 4 || intMonth == 6 || intMonth == 9 || intMonth == 11) && (intday > 30 || intday < 1)) {
err = 7;
return false;
}
if (intMonth == 2) {
if (intday < 1) {
err = 8;
return false;
}
if (LeapYear(intYear) == true) {
if (intday > 29) {
err = 9;
return false;
   }
}
else {
if (intday > 28) {
err = 10;
return false;
      }
   }
}
return true;
}
function LeapYear(intYear) {
if (intYear % 100 == 0) {
if (intYear % 400 == 0) {
return true;
   }
}
else {
if ((intYear % 4) == 0) {
return true;
   }
}
return false;
}
//  fim de validacao de data -->

<!-- inicio do tratamento de apenas numeros
function numbersonly(myfield, e)
{
    if (myfield.length ==0)
	    myfield.value=0;  
	  var key;
	  var keychar;
    if (window.event)
     key = window.event.keyCode;
    else if (e)
     key = e.which;
    else
     return true;
	  keychar = String.fromCharCode(key);
    if ((key==null) || (key==0) || (key==8) || 
		      (key==9)|| (key==13)|| (key==27) )
     return true;
    else if ((("0123456789").indexOf(keychar) > -1))
	     return true;
	else
   return false;
}

//--> fim da trava para numero apenas
<!-- in�cio do valida email
function emailCheck (emailStr) {
var emailPat=/^(.+)@(.+)$/
var specialChars="\\(\\)<>@,;:\\\\\\\"\\.\\[\\]"
var validChars="\[^\\s" + specialChars + "\]"
var quotedUser="(\"[^\"]*\")"
var ipDomainPat=/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/
var atom=validChars + '+'
var word="(" + atom + "|" + quotedUser + ")"
var userPat=new RegExp("^" + word + "(\\." + word + ")*$")
var domainPat=new RegExp("^" + atom + "(\\." + atom +")*$")
var matchArray=emailStr.match(emailPat)
if (matchArray==null) {
	alert("Endere�o de Email parece incorreto (verifique @ e .)")
	return false
}
var user=matchArray[1]
var domain=matchArray[2]
if (user.match(userPat)==null) {
    alert("Conta de email parece ser inv�lido.")
    return false
}
var IPArray=domain.match(ipDomainPat)
if (IPArray!=null) {
	  for (var i=1;i<=4;i++) {
	    if (IPArray[i]>255) {
	        alert("Destino de IP inv�lido.")
		return false
	    }
    }
    return true
}
var domainArray=domain.match(domainPat)
if (domainArray==null) {
	alert("Dom�nio inv�lido.")
    return false
}
var atomPat=new RegExp(atom,"g")
var domArr=domain.match(atomPat)
var len=domArr.length
if (domArr[domArr.length-1].length<2 || 
    domArr[domArr.length-1].length>3) {
   alert("O endere�o deve ter 3 letras de dom�nio, ou 2 letras de pa�s.")
   return false
}
if (len<2) {
   var errStr="Falta hostname."
   alert(errStr)
   return false
}
return true;
}
//  fim de validacao de email -->
//-->
</SCRIPT>
<!-- HTML HEADER -->
<META http-equiv=Content-Type content="text/html; charset=windows-1252">
<META content="NOINDEX, NOFOLLOW" name=ROBOTS>
<META http-equiv=Content-Language content=pt-br>
<META http-equiv=pragma content=no-cache>
<META http-equiv=cache-Control content="no cache">
<META http-equiv=expires content="sat, 04 dec 1993 21:29:02 gmt">
<META http-equiv=Refresh content="600; url=main.php">
<link href="css/style.css" type="text/css" rel="stylesheet" />


<SCRIPT language=JavaScript 
src="inc/menu_array.js.htm" 
type=text/javascript></SCRIPT>

<SCRIPT language=JavaScript 
src="inc/menu_script.js" 
type=text/javascript></SCRIPT>

<META content="MSHTML 6.00.2800.1106" name=GENERATOR>
</HEAD>
<BODY>
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR>
    <TD width="100%" colSpan=3 height=10><IMG 
      src="inc/spacer.gif" 
      width=10></TD></TR>
  <TR>
    <TD noWrap width=10><IMG 
      src="inc/spacer.gif" 
      width=10></TD>
    <TD width="100%">
      <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        <TBODY>
        <TR>
          <TD style="BORDER-BOTTOM: #ccc 1px solid">&nbsp;</TD>
          <TD width=98 background="" height=40 rowSpan=2><A 
            href="http://www.agence.com.br/" target=_blank><IMG alt="" 
            src="inc/logo.gif" 
            border=0></A></TD></TR>
        <TR>
          <TD 
          style="PADDING-RIGHT: 3px; PADDING-LEFT: 3px; PADDING-BOTTOM: 3px; BORDER-LEFT: #ccc 1px dotted; PADDING-TOP: 3px"><IMG 
            height=15 alt="" 
            src="inc/fig.gif" 
            width=51 border=0></TD></TR></TBODY></TABLE></TD>
    <TD noWrap width=10><IMG 
      src="inc/spacer.gif" 
      width=10></TD></TR>
  <TR>
    <TD width="100%" colSpan=3 height=10><IMG 
      src="inc/spacer.gif" 
      width=10></TD></TR>
  <TR>
    <TD noWrap width=10><IMG 
      src="inc/spacer.gif" 
      width=10></TD>
    <TD width="100%">&nbsp;</TD>
    <TD noWrap width=10><IMG 
      src="inc/spacer.gif" 
      width=10></TD></TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR>
    <TD noWrap width=10><IMG 
      src="inc/spacer.gif" 
      width=10></TD>
    <TD width="100%">
      <table cellspacing=0 cellpadding=0 width="100%" border=0>
        <tr>
          <td class=index style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; PADDING-TOP: 10px" valign=top><table border="0" width="100%" cellspacing="0" cellpadding="0">
                <tr>
                  <!--
    
    Para as abas ficarem com o visual apresentado na p&aacute;gina, &eacute; necess&aacute;rio colocar os inputs
    dentro de uma tabela. Essa tabela faz o papel de grade e gera algumas linhas pra completar
    o layout. 
    
    Importante:
    Note the a c&eacute;lula onde consta o botao principal (selecionado) n&atilde;o leva a classe CEL_TAB.
    
    Recomendo criar uma funcao/classe para gerar essas Abas com esse layout.
    
    -->
                  <td nowrap valign="bottom" align="center" class="cel_tab" height="35"><input type="submit" value name="nothing2" class="nothing">
&nbsp;&nbsp;</td><form action="con_desempenho">
                  <td nowrap valign="bottom" align="center"><span class="cel_tab">
                     <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                        Por Consultor
                        </button>
                  </span></td>
				  </form>
                  <td nowrap valign="bottom" align="center" class="cel_tab">&nbsp;&nbsp;</td>
				  <form action="con_desempenho_aba_cliente.htm">
                  <td nowrap valign="bottom" align="center"><button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                        Por Cliente
                        </button>                  </td>
				  </form>
                  <td nowrap valign="bottom" align="center" class="cel_tab">&nbsp;&nbsp;</td>
				  <form action="cadastro_boleto_carregado_cancelado.htm">
                  <td nowrap valign="bottom" align="center" class="cel_tab">&nbsp;</td>
				  </form>
                  <td nowrap valign="bottom" align="center" class="cel_tab">&nbsp;&nbsp;</td>
                  <td nowrap valign="bottom" align="center" class="cel_tab">&nbsp;</td>
                  <td nowrap valign="bottom" align="center" class="cel_tab">&nbsp;&nbsp;</td>
                  <td nowrap valign="bottom" align="center" class="cel_tab">&nbsp;</td>
                  <td nowrap valign="bottom" align="center" class="cel_tab">&nbsp;&nbsp;</td>
                  <td nowrap valign="bottom" align="center" class="cel_tab">&nbsp;</td>
                  <td valign="bottom" class="cel_tab" width="100%">&nbsp;</td>
                </tr>
              </table>
              <br>
              <table width="100%" cellpadding="3" cellspacing="1" 
                  bgcolor="#cccccc"  id="pesquisaAvancada">
                <tbody>
                  <tr bgcolor="#fafafa">
                    <td width="10%" nowrap="nowrap" bgcolor="#efefef"><div align="right"><strong>Per&iacute;odo</strong></div></td>
                    <td><font color="black">
                      <select name="select5">
                        <option selected>Jan
                        <option>Fev
                        <option>Mar
                        <option>Abr
                        <option>Mai                        
                        <option>Jun
                        <option>Jul
                        <option>Ago
                        <option>Set 
                        <option>Out                          
                        <option>Nov
                        <option>Dez
                      </select>
                      <select name="select">
                          <option>2003
                          <option>2004
                        <option>2005</option>
                          <option>2006</option>
                          <option selected>2007</option>
                      </select>
a
<select name="select3">
  <option>Jan
    <option selected>Fev
      <option>Mar
        <option>Abr
          <option>Mai                        
            <option>Jun
              <option>Jul
                <option>Ago
                  <option>Set 
                    <option>Out                          
                      <option>Nov
                        <option>Dez
                      </select>
<select name="select4">
  <option>2003
    <option>2004
      <option>2005</option>
                            <option>2006</option>
                            <option selected>2007</option>
</select>
                    </font></td>
                    <td width="20%" rowspan="2"><div align="center"><font color="black">
				     <form action="con_desem_cliente_rel.htm">
				       <input style="BORDER-RIGHT: 1px outset; BORDER-TOP: 1px outset; FONT-SIZE: 8pt; BACKGROUND-POSITION-Y: center; LEFT: 120px; BACKGROUND-IMAGE: url(img/icone_relatorio.png); BORDER-LEFT: 1px outset; WIDTH: 110px; BORDER-BOTTOM: 1px outset; BACKGROUND-REPEAT: no-repeat; FONT-FAMILY: Tahoma, Verdana, Arial; HEIGHT: 22px; BACKGROUND-COLOR: #CCCCCC" type="submit" value="Relat�rio" name="btSalvar22" /></form>
					<form action="con_desem_cliente_graf.htm"><input style="BORDER-RIGHT: 1px outset; BORDER-TOP: 1px outset; FONT-SIZE: 8pt; BACKGROUND-POSITION-Y: center; LEFT: 120px; BACKGROUND-IMAGE: url(img/icone_grafico.png); BORDER-LEFT: 1px outset; WIDTH: 110px; BORDER-BOTTOM: 1px outset; BACKGROUND-REPEAT: no-repeat; FONT-FAMILY: Tahoma, Verdana, Arial; HEIGHT: 22px; BACKGROUND-COLOR: #CCCCCC" type="submit" value="Gr�fico" name="btSalvar222" /></form>
					<form action="con_desem_cliente_pizza.htm"><input style="BORDER-RIGHT: 1px outset; BORDER-TOP: 1px outset; FONT-SIZE: 8pt; BACKGROUND-POSITION-Y: center; LEFT: 120px; BACKGROUND-IMAGE: url(img/icone_pizza.png); BORDER-LEFT: 1px outset; WIDTH: 110px; BORDER-BOTTOM: 1px outset; BACKGROUND-REPEAT: no-repeat; FONT-FAMILY: Tahoma, Verdana, Arial; HEIGHT: 22px; BACKGROUND-COLOR: #CCCCCC" type="submit" value="Pizza" name="btSalvar222" /></form>
                    </font></div></td>
                  </tr>
                  <tr bgcolor="#fafafa">
                    <td nowrap="nowrap" bgcolor="#efefef"><div align="right"><strong>Clientes</strong></div></td>
                    <td><table align="center">
                      <tr>
                        <td><select multiple size="8" name="list1" id="list1" style="width:280">
                            
                       <option value="57" >3A Rural</option>
<option value="6941" >Accenture</option>
<option value="7035" >A�os Groth</option>
<option value="6881" >Aero Flash</option>
<option value="6882" >Aero Flash</option>
<option value="6" >Agence</option>
<option value="50" >AGENCIA ARROW</option>
<option value="7009" >Agricon Consultoria</option>
<option value="58" >Amamsul</option>
<option value="7028" >Anhanguera Educacional</option>
<option value="7058" >Antares Capital</option>
<option value="7052" >Anucc Associa��o dos Usuarios de Cart�o de Cr�dito</option>
<option value="7005" >Archivum - Organiza��o e Guarda de Documentos</option>
<option value="7010" >Arte Traco Publicidade</option>
<option value="7029" >Arte Traco Publicidade</option>
<option value="7043" >Assurant Solutions</option>
<option value="6981" >Ateflor Assessoria Tecnica Florestal Ltda</option>
<option value="7031" >Banco Bradesco AM</option>
<option value="2" >Banco Bradesco MT</option>
<option value="6905" >Banco Central do Brasil</option>
<option value="33" >Banco Fator</option>
<option value="6885" >Bem Bom Alimentos</option>
<option value="6979" >Botti Rubin</option>
<option value="6947" >Caltabiano</option>
<option value="18" >Captatec Consultoria</option>
<option value="7027" >Central de Interc�mbio</option>
<option value="4684" >CERAMICA GYOTOKU LTDA</option>
<option value="40" >CERT RASTRO</option>
<option value="60" >Cert Rastro</option>
<option value="38" >Chemin Construtora S/A</option>
<option value="6977" >Claudio Humberto</option>
<option value="36" >Cl�nica Dr. Wilson Cantero</option>
<option value="7053" >CMA Consultoria, M�todos, Assessoria e Mercantil S</option>
<option value="7040" >Compactor</option>
<option value="6993" >Consultafrete.com</option>
<option value="7007" >Controle Solu��es Compartilhadas</option>
<option value="61" >Corredores Ecol�gicos</option>
<option value="6711" >CURSOS ROBERTO MIRANDA</option>
<option value="11" >D1CLICK</option>
<option value="10" >DDA BRASIL</option>
<option value="7011" >Deputada T�nia</option>
<option value="32" >Dicorel</option>
<option value="41" >Dieta e Saude</option>
<option value="6936" >Digital Group</option>
<option value="6982" >Diimagem Diagn�sticos</option>
<option value="42" >Diretotal</option>
<option value="7048" >Doup Incentive</option>
<option value="726" >Ecplan Ltda.</option>
<option value="34" >Enccon Construtora</option>
<option value="7049" >ENERGIA ONLINE</option>
<option value="714" >Enzo Cocession�ria Fiat</option>
<option value="7045" >Est�dio Fotogr�fico Rodrigo Gimenes</option>
<option value="7025" >Facundo Imobili�ria</option>
<option value="6994" >FC2 Marketing Promocional e Eventos</option>
<option value="59" >Fertisemen</option>
<option value="9" >Fiat Paulimar</option>
<option value="6983" >FitoGuard</option>
<option value="17" >FORD</option>
<option value="52" >FRESI P�ES ESPECIAIS</option>
<option value="6999" >Garra Host</option>
<option value="56" >Geosat</option>
<option value="6984" >Globo SAT - NET Brasil</option>
<option value="7054" >Grand Company</option>
<option value="7057" >Grupo Brabus</option>
<option value="7047" >Grupo Chevrolet Nova</option>
<option value="7056" >Grupo Infinity</option>
<option value="12" >Guttier Personnalit� fran�aise</option>
<option value="6978" >H2L equipamentos e sistemas</option>
<option value="53" >HAMAJI MACHINE</option>
<option value="29" >Hidro</option>
<option value="6796" >Honda</option>
<option value="8" >Hospital Brasil</option>
<option value="7008" >Humanita</option>
<option value="7021" >humanita</option>
<option value="15" >Idea</option>
<option value="6988" >Ideas Group</option>
<option value="7033" >Informativa distribuidora e comunica��o</option>
<option value="6880" >INPC</option>
<option value="7015" >It� J�ias</option>
<option value="6943" >Kampai Motors</option>
<option value="6998" >Karina Distribuidora</option>
<option value="64" >Katech</option>
<option value="16" >Kwikasair</option>
<option value="6996" >Lenan Im�veis</option>
<option value="28" >LOPES</option>
<option value="6911" >Lucio Engenharia</option>
<option value="6887" >Maluf e Associados</option>
<option value="7020" >marcus vinicius academia</option>
<option value="7051" >Maria e Maria</option>
<option value="39" >Mark Trabalhos Tempor�rios</option>
<option value="7019" >Mauricio Karani</option>
<option value="6965" >Maur�cio Karani</option>
<option value="26" >Medial Sa�de</option>
<option value="6938" >Mediavox</option>
<option value="49" >METRORED</option>
<option value="7001" >MMLink Representa��o Comercial Ltda.</option>
<option value="13" >N DIDINI</option>
<option value="7012" >NBS</option>
<option value="6944" >Noblat</option>
<option value="6945" >OCB/MS</option>
<option value="7002" >Oi Internet</option>
<option value="22" >One Up</option>
<option value="46" >Orbe Investimentos</option>
<option value="6997" >P�o & Tal</option>
<option value="21" >PHILIPS</option>
<option value="7024" >Pinheir�o Madeiras</option>
<option value="4343" >PIRELLI PNEUS S/A</option>
<option value="44" >Pom Pom</option>
<option value="6709" >Portal do Sul</option>
<option value="6969" >Pousada Aloha Brasil</option>
<option value="6705" >POWER TRAVEL</option>
<option value="6712" >Prime Action</option>
<option value="30" >Promel</option>
<option value="6948" >PROMOSEF</option>
<option value="7055" >QUALITEC CONSULTORIA IMOBILIARIA LTDA</option>
<option value="62" >QUICKNESS</option>
<option value="6723" >R. MIRANDA FORMA��O PROFISSIONAL</option>
<option value="47" >RAIDHO</option>
<option value="6884" >RECAST CONSULTORIA E MARKETING LTDA</option>
<option value="63" >REDE RECORD</option>
<option value="7044" >Renato Ribeiro Pereira</option>
<option value="7026" >Renault</option>
<option value="25" >RHODIA</option>
<option value="6991" >Riscali Im�veis</option>
<option value="992" >SADIA</option>
<option value="7030" >Samuel S. Santos</option>
<option value="55" >S�O PAULO ALPARGATAS S.A</option>
<option value="7039" >Search RH</option>
<option value="6940" >Secretaria de Seguran�a P�blica</option>
<option value="6701" >SERT�O</option>
<option value="43" >Simpress Ind.  Com. e Loca��o</option>
<option value="7050" >Sina Enxovais</option>
<option value="14" >Sinal Ve�culos</option>
<option value="6970" >SIQ Systems</option>
<option value="45" >Souza Lima Seguran�a Patrimonial</option>
<option value="6883" >Spot Publicidade</option>
<option value="6992" >Stampa Com�rcio de Alimentos</option>
<option value="7046" >Support Comm</option>
<option value="7041" >Takla</option>
<option value="7022" >Takla Produ��es</option>
<option value="19" >TAM</option>
<option value="6946" >Target Sistemas</option>
<option value="54" >TEC SORO / GRAVOSOM</option>
<option value="23" >Tecnol</option>
<option value="7042" >Tecnutri do Brasil</option>
<option value="7018" >Teste</option>

<option value="51" >TOP SERVICE</option>

<option value="7038" >Unidesc</option>
<option value="7" >Unipar</option>
<option value="48" >VENICE VIAGENS E TURISMO</option>
<option value="1" >Vivo</option>
<option value="20" >VOE GOL</option>
<option value="6939" >WBC International Business</option>

<option value="6912" >WebsourcingBrazil</option>
<option value="6942" >Wnet tecnologia</option>
<option value="6722" >XYZ</option>
<option value="6710" >ZICARD VIEIRA</option>
                          </select>
                        </td>
                        <td align="center" valign="middle">
						  <input name="button" type="button" onClick="move(list1,list2)" value=">>">
                          <br>
                        <input name="button" type="button" onClick="move(list2,list1)" value="<<">
                        </td>
                        <td><select multiple size="8" name="list2" id="list2" style="width:280">
<option value="3" >Toyota do Brasil</option>	
<option value="7014" >Traffic</option>
<option value="24" >Unicoba</option>
<option value="27" >WebMotors</option>
<option value="6949" >TIM Celular</option>
					
                          </select>
                            <input type="hidden"  name="lista_analista" value="">
                        </td>
                      </tr>
                    </table></td>
                  </tr>
                </tbody>
              </table>
              <br>
              <table cellspacing=1 cellpadding=3 width="100%" 
                  bgcolor=#cccccc  id="pesquisaAvancada">
                <tbody>

                  <tr bgcolor=#fafafa>
                    <td nowrap bgcolor="#efefef"><div align="center" class="style3"><strong>Per&iacute;odo</strong></div></td>
                    <td bgcolor="#efefef"><div align="center" class="style3"><strong>Toyota</strong></div></td>
                    <td bgcolor="#efefef"><div align="center" class="style3"><strong>Traffic</strong></div></td>
                    <td bgcolor="#efefef"><div align="center" class="style3"><strong>Unicoba</strong></div></td>
                    <td bgcolor="#efefef"><div align="center" class="style3"><strong>Webmotors</strong></div></td>
                    <td bgcolor="#efefef"><div align="center" class="style3"><strong>TIM</strong></div></td>
                    <td bgcolor="#efefef"><div align="center" class="style3"><strong>TOTAL</strong></div></td>
                  </tr>
                  <tr bgcolor=#fafafa>
                    <td nowrap>Janeiro de 2007</td>
                    <td><div align="right">R$ 1.500,00</div></td>
                    <td><div align="right">R$ 1.500,00</div></td>
                    <td bgcolor="#fafafa"><div align="right" class="style2"> R$ 11.350,00</div></td>
                    <td><div align="right">R$ 1.500,00</div></td>
                    <td><div align="right"> R$ 1.350,00</div></td>
                    <td><div align="right"> R$ 17.200,00</div></td>
                  </tr>
                  <tr bgcolor=#fafafa>
                    <td nowrap>Fevereiro de 2007 </td>
                    <td><div align="right">R$ 25.000,00</div></td>
                    <td><div align="right">R$ 2.500,00</div></td>
                    <td><div align="right">R$ 24.750,00</div></td>
                    <td><div align="right" class="style2">R$ 27.100,00</div></td>
                    <td><div align="right">R$ 24.750,00</div></td>
                    <td><div align="right">R$ 104.100,00</div></td>
                  </tr>
                  <tr bgcolor=#efefef>
                    <td nowrap bgcolor="#efefef"><strong>TOTAL</strong></td>
                    <td bgcolor="#efefef"><div align="right"><font color="#000000">R$ 26.500,00</font></div></td>
                    <td><div align="right"><font color="#000000">R$ 4.000,00</font></div></td>
                    <td><div align="right" class="style2"><strong>R$ 36.100,00</strong></div></td>
                    <td><div align="right"><font color="#000000">R$ 28.600,00</font></div></td>
                    <td><div align="right" class="style3">R$ 26.100,00</div></td>
                    <td><div align="right" class="style3"><strong>R$ 121.300,00</strong></div></td>
                  </tr>
                </tbody>
              </table>
              <br>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
            </td>
        </tr>
      </table></TD>
    <TD noWrap width=10><IMG 
      src="inc/spacer.gif" 
      width=10></TD></TR></TBODY></TABLE><BR></BODY></HTML>
