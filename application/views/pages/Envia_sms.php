<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($post)){    
    echo $post['txtTELEFONE'];
    echo $resposta;
}
?>
<form name='frmSend' action="enviando" method='post'>
    <input type='hidden' name='acao' value='sendsms'>
    <table width="100%" style="border-collapse:collapse;" border="1">
        <tr>
            <td>Telefone:</td>
            <td><input type="text" name="txtTELEFONE" value="+55XX88888888"></td>
        </tr>
        <tr>
            <td>Mensagem:</td>
            <td><textarea name="txtMENSAGEM" cols="60" rows="10" id="txtMENSAGEM"></textarea></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="Submit" value="Enviar SMS"></td>
        </tr>
    </table>

</form>
