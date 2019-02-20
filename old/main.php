<?php

error_reporting(E_ALL & ~E_NOTICE);
set_time_limit(0);

require_once "Conexao.php";

function converteMoeda($num) {

    $numero01 = $num / 100;
    $numbfmt = number_format($numero01, 2, ".", "");
    return $numbfmt;

}

function removeZero($num) {

   $numero01 = ltrim($num, '0');
   return $numero01;

}
    



function leiaregfunc() {

    $arqreg = file("reg/reg-func-email");

    $i = 0;

    $bd = new Conexao('bdesocial');
    $bd->setBanco('regs');
    $stmt = $bd->_bd->prepare("insert into reg_func_email(idfuncemail, nome, tamanho) values(:ID, :NOME, :TAMANHO)");
 
    foreach ($arqreg as $row) {

        $col1 = trim(substr($arqreg[$i],0, 27));
        $col2 = substr($arqreg[$i],33, 3);
        
        $id = 'null';
        
        $stmt->bindParam(":ID", $id);
        $stmt->bindParam(":NOME", $col1);
        $stmt->bindParam(":TAMANHO", $col2);

        $stmt->execute();

                
        $i++;   
    }

    return sizeof($arqreg);

    unset($arqreg);
    unset($bd);
 

}

function leiaregamemail() {

    $arqreg = file("reg/reg-am-email");

    $i = 0;

    $bd = new Conexao('bdesocial');
    $bd->setBanco('regs');
    $stmt = $bd->_bd->prepare("insert into reg_am_email(idamemail, nome, tamanho) values(:ID, :NOME, :TAMANHO)");
 
    foreach ($arqreg as $row) {

        $col1 = trim(substr($arqreg[$i],0, 24));
        $col2 = substr($arqreg[$i],33, 3);
        
        $id = 'null';
        
        $stmt->bindParam(":ID", $id);
        $stmt->bindParam(":NOME", $col1);
        $stmt->bindParam(":TAMANHO", $col2);

        $stmt->execute();

                
        $i++;   
    }

    return sizeof($arqreg);

    unset($arqreg);
    unset($bd);
 

}

function leiaregevtemail() {

    $arqreg = file("reg/reg-evt-email");

    $i = 0;

    $bd = new Conexao('bdesocial');
    $bd->setBanco('regs');
    $stmt = $bd->_bd->prepare("insert into reg_evt_email(idevtemail, nome, tamanho) values(:ID, :NOME, :TAMANHO)");
 
    foreach ($arqreg as $row) {

        $col1 = trim(substr($arqreg[$i],0, 24));
        $col2 = substr($arqreg[$i],33, 3);
       
        
        $id = 'null';
        
        $stmt->bindParam(":ID", $id);
        $stmt->bindParam(":NOME", $col1);
        $stmt->bindParam(":TAMANHO", $col2);
      

        $stmt->execute();

                
        $i++;   
    }

    return sizeof($arqreg);

    unset($arqreg);
    unset($bd);
 

}

function leiaregiamemail() {

    $arqreg = file("reg/reg-iam-email");

    $i = 0;

    $bd = new Conexao('bdesocial');
    $bd->setBanco('regs');
    $stmt = $bd->_bd->prepare("insert into reg_iam_email(idiamemail, nome, tamanho) values(:ID, :NOME, :TAMANHO)");
 
    foreach ($arqreg as $row) {

        $col1 = trim(substr($arqreg[$i],0, 24));
        $col2 = substr($arqreg[$i],33, 3);
       
        
        $id = 'null';
        
        $stmt->bindParam(":ID", $id);
        $stmt->bindParam(":NOME", $col1);
        $stmt->bindParam(":TAMANHO", $col2);
      

        $stmt->execute();

                
        $i++;   
    }

    return sizeof($arqreg);

    unset($arqreg);
    unset($bd);
 

}


function leiafuncemail() {

    $i = 0;

    $arqfile = file("arq/func.email");

    $bd02 = new Conexao('bdesocial');
    $bd02->setBanco('regs');
    $bd02->_bd->exec('truncate table func_email');
    $stmt = $bd02->_bd->prepare("select * from reg_func_email");
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt2 = $bd02->_bd->prepare("insert into func_email(PREDIO_FUNC_EMAIL, NOME_PREDIO_EMAIL, MATRICULA_FUNC_EMAIL, MES_FUNC_EMAIL, ANO_FUNC_EMAIL, DD_EMIS_ARQ_FUNC_EMAIL, MM_EMIS_ARQ_FUNC_EMAIL, AA_EMIS_ARQ_FUNC_EMAIL, HH_EMIS_ARQ_FUNC_EMAIL, NOME_FUNC_EMAIL, FUNCAO_FUNC_EMAIL, DT_ADM_FUNC_EMAIL, DEPSF_FUNC_EMAIL, DEPIR_FUNC_EMAIL, HH_ENTR_ARQ_FUNC_EMAIL, HH_INIC_ARQ_FUNC_EMAIL, HH_TERM_ARQ_FUNC_EMAIL, HH_SAID_ARQ_FUNC_EMAIL, DT_INIC_ULTFER_FUNC_EMAIL, DT_TERM_ULTFER_FUNC_EMAIL, PERIODO_ULTFER_FUNC_EMAIL, NUM_FERVENC_FUNC_EMAIL, PERIODO_FERVENC_FUNC_EMAIL, PRAZOFERIAS_FUNC_EMAIL, EMAIL_FUNC_EMAIL, DDD_FUNC_EMAIL, TELEFONE_FUNC_EMAIL, CNPJ_EMP610_EMAIL) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    
    
    $ponteiro = 0;

    foreach($arqfile as $row) {
            
         
            $col1 = trim(substr($arqfile[$i], $ponteiro, ($results[0]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[0]['tamanho'];
            $col2 = trim(substr($arqfile[$i], $ponteiro, ($results[1]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[1]['tamanho'];
            $col3 = trim(substr($arqfile[$i], $ponteiro, ($results[2]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[2]['tamanho'];
            $col4 = trim(substr($arqfile[$i], $ponteiro, ($results[3]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[3]['tamanho'];
            $col5 = trim(substr($arqfile[$i], $ponteiro, ($results[4]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[4]['tamanho'];
            $col6 = trim(substr($arqfile[$i], $ponteiro, ($results[5]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[5]['tamanho'];
            $col7 = trim(substr($arqfile[$i], $ponteiro, ($results[6]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[6]['tamanho'];
            $col8 = trim(substr($arqfile[$i], $ponteiro, ($results[7]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[7]['tamanho'];
            $col9 = trim(substr($arqfile[$i], $ponteiro, ($results[8]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[8]['tamanho'];
            $col10 = trim(substr($arqfile[$i], $ponteiro, ($results[9]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[9]['tamanho'];
            $col11 = trim(substr($arqfile[$i], $ponteiro, ($results[10]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[10]['tamanho'];
            $col12 = trim(substr($arqfile[$i], $ponteiro, ($results[11]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[11]['tamanho'];
            $col13 = trim(substr($arqfile[$i], $ponteiro, ($results[12]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[12]['tamanho'];
            $col14 = trim(substr($arqfile[$i], $ponteiro, ($results[13]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[13]['tamanho'];
            $col15 = trim(substr($arqfile[$i], $ponteiro, ($results[14]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[14]['tamanho'];
            $col16 = trim(substr($arqfile[$i], $ponteiro, ($results[15]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[15]['tamanho'];
            $col17 = trim(substr($arqfile[$i], $ponteiro, ($results[16]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[16]['tamanho'];
            $col18 = trim(substr($arqfile[$i], $ponteiro, ($results[17]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[17]['tamanho'];
            $col19 = trim(substr($arqfile[$i], $ponteiro, ($results[18]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[18]['tamanho'];
            $col20 = trim(substr($arqfile[$i], $ponteiro, ($results[19]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[19]['tamanho'];
            $col21 = trim(substr($arqfile[$i], $ponteiro, ($results[20]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[20]['tamanho'];
            $col22 = trim(substr($arqfile[$i], $ponteiro, ($results[21]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[21]['tamanho'];
            $col23 = trim(substr($arqfile[$i], $ponteiro, ($results[22]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[22]['tamanho'];
            $col24 = trim(substr($arqfile[$i], $ponteiro, ($results[23]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[23]['tamanho'];
            $col25 = trim(substr($arqfile[$i], $ponteiro, ($results[24]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[24]['tamanho'];
            $col26 = trim(substr($arqfile[$i], $ponteiro, (int)($results[25]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[25]['tamanho'];
            $col27 = trim(substr($arqfile[$i], $ponteiro, (int)($results[26]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[26]['tamanho'];
            $col28 = trim(substr($arqfile[$i], $ponteiro, (int)($results[27]['tamanho'])));

          
          //echo "<br>";
          
          
          $stmt2->bindParam(1, $col1);
          $stmt2->bindParam(2, $col2);
          $stmt2->bindParam(3, $col3);
          $stmt2->bindParam(4, $col4);
          $stmt2->bindParam(5, $col5);
          $stmt2->bindParam(6, $col6);
          $stmt2->bindParam(7, $col7);
          $stmt2->bindParam(8, $col8);
          $stmt2->bindParam(9, $col9);
          $stmt2->bindParam(10, $col10);
          $stmt2->bindParam(11, $col11);
          $stmt2->bindParam(12, $col12);
          $stmt2->bindParam(13, $col13);
          $stmt2->bindParam(14, $col14);
          $stmt2->bindParam(15, $col15);
          $stmt2->bindParam(16, $col16);
          $stmt2->bindParam(17, $col17);
          $stmt2->bindParam(18, $col18);
          $stmt2->bindParam(19, $col19);
          $stmt2->bindParam(20, $col20);
          $stmt2->bindParam(21, $col21);
          $stmt2->bindParam(22, $col22);
          $stmt2->bindParam(23, $col23);
          $stmt2->bindParam(24, $col24);
          $stmt2->bindParam(25, $col25);
          $stmt2->bindParam(26, $col26);
          $stmt2->bindParam(27, $col27);
          $stmt2->bindParam(28, $col28);

       
                                             
          $stmt2->execute();
       
          
          $ponteiro = 0;
          $i++;

    }

    
    unset($bd02);
    unset($arqfile);

} // Fim da funcao

function leiaamemail() {

    $i = 0;

    $arqfile = file("arq/bases-email");

    $bd02 = new Conexao('bdesocial');
    $bd02->setBanco('regs');
    $bd02->_bd->exec('truncate table am_email');
    $stmt = $bd02->_bd->prepare("select * from reg_am_email");
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt2 = $bd02->_bd->prepare("insert into am_email(PREDIO_AM_EMAIL, MATRICULA_AM_EMAIL, MES_AM_EMAIL, ANO_AM_EMAIL, DD_EMIS_ARQ_AM_EMAIL, MM_EMIS_ARQ_AM_EMAIL, AA_EMIS_ARQ_AM_EMAIL, HH_EMIS_ARQ_AM_EMAIL, BASEINSS_AM_EMAIL, BASEIRRF_AM_EMAIL, BASEFGTS_AM_EMAIL, VALORFGTS_AM_EMAIL) values (?,?,?,?,?,?,?,?,?,?,?,?)");
    
    
    $ponteiro = 0;

    foreach($arqfile as $row) {
            
         
            $col1 = trim(substr($arqfile[$i], $ponteiro, ($results[0]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[0]['tamanho']; 
            $col2 = trim(substr($arqfile[$i], $ponteiro, ($results[1]['tamanho']))); 
            $ponteiro = $ponteiro + (int)$results[1]['tamanho']; 
            $col3 = trim(substr($arqfile[$i], $ponteiro, ($results[2]['tamanho']))); 
            $ponteiro = $ponteiro + (int)$results[2]['tamanho'];
            $col4 = trim(substr($arqfile[$i], $ponteiro, ($results[3]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[3]['tamanho'];
            $col5 = trim(substr($arqfile[$i], $ponteiro, ($results[4]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[4]['tamanho'];
            $col6 = trim(substr($arqfile[$i], $ponteiro, ($results[5]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[5]['tamanho'];
            $col7 = trim(substr($arqfile[$i], $ponteiro, ($results[6]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[6]['tamanho'];
            $col8 = trim(substr($arqfile[$i], $ponteiro, ($results[7]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[7]['tamanho'];
            $col9 = converteMoeda(trim(substr($arqfile[$i], $ponteiro, ($results[8]['tamanho']))));
            $ponteiro = $ponteiro + (int)$results[8]['tamanho'];
            $col10 = converteMoeda(trim(substr($arqfile[$i], $ponteiro, ($results[9]['tamanho']))));
            $ponteiro = $ponteiro + (int)$results[9]['tamanho'];
            $col11 = converteMoeda(trim(substr($arqfile[$i], $ponteiro, ($results[10]['tamanho']))));
            $ponteiro = $ponteiro + (int)$results[10]['tamanho'];
            $col12 = converteMoeda(trim(substr($arqfile[$i], $ponteiro, ($results[11]['tamanho']))));
            $ponteiro = $ponteiro + (int)$results[11]['tamanho'];


          
          //echo "<br>";
          
          
          $stmt2->bindParam(1, $col1);
          $stmt2->bindParam(2, $col2);
          $stmt2->bindParam(3, $col3);
          $stmt2->bindParam(4, $col4);
          $stmt2->bindParam(5, $col5);
          $stmt2->bindParam(6, $col6);
          $stmt2->bindParam(7, $col7);
          $stmt2->bindParam(8, $col8);
          $stmt2->bindParam(9, $col9);
          $stmt2->bindParam(10, $col10);
          $stmt2->bindParam(11, $col11);
          $stmt2->bindParam(12, $col12);
    
                                             
          $stmt2->execute();
       
          
          $ponteiro = 0;
          $i++;

    }

    
    unset($bd02);
    unset($arqfile);

} // Fim da funcao

function leiaeventoemail() {

    $i = 0;

    $arqfile = file("arq/eventos.email");

    $bd02 = new Conexao('bdesocial');
    $bd02->setBanco('regs');
    $bd02->_bd->exec('truncate table eventos_email');
    $stmt = $bd02->_bd->prepare("select * from reg_evt_email");
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt2 = $bd02->_bd->prepare("insert into eventos_email(CODIGO_EVT_EMAIL, DESCRICAO_EVT_EMAIL, ASTERISCO_EVT_EMAIL) values (?,?,?)");
    
    
    $ponteiro = 0;

    foreach($arqfile as $row) {
            
         
            $col1 = trim(substr($arqfile[$i], $ponteiro, ($results[0]['tamanho'])));
            $ponteiro = $ponteiro + (int)$results[0]['tamanho']; 
            $col2 = trim(substr($arqfile[$i], $ponteiro, ($results[1]['tamanho']))); 
            $ponteiro = $ponteiro + (int)$results[1]['tamanho']; 
            $col3 = trim(substr($arqfile[$i], $ponteiro, ($results[2]['tamanho']))); 
            


          
          //echo "<br>";
          
          
          $stmt2->bindParam(1, $col1);
          $stmt2->bindParam(2, $col2);
          $stmt2->bindParam(3, $col3);
          
    
                                             
          $stmt2->execute();
       
          
          $ponteiro = 0;
          $i++;

    }

    
    unset($bd02);
    unset($arqfile);

} // Fim da funcao

function leiaiamemail() {

    $i = 0;

    $arqfile = file("arq/proventos-email");

    $bd02 = new Conexao('bdesocial');
    $bd02->setBanco('regs');
    $bd02->_bd->exec('truncate table iam_email');
    $stmt = $bd02->_bd->prepare("select * from reg_iam_email");
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt2 = $bd02->_bd->prepare("insert into iam_email(PREDIO_IAM_EMAIL, MATRICULA_IAM_EMAIL, CODEVT_IAM_EMAIL, HH_IAM_EMAIL, PROVDESC_IAM_EMAIL, VALOREVT_IAM_EMAIL) values (?,?,?,?,?,?)");
    
    
    $ponteiro = 0;

    foreach($arqfile as $row) {
            
         
        $col1 = trim(substr($arqfile[$i], $ponteiro, ($results[0]['tamanho'])));
        $ponteiro = $ponteiro + (int)$results[0]['tamanho']; 
        $col2 = trim(substr($arqfile[$i], $ponteiro, ($results[1]['tamanho']))); 
        $ponteiro = $ponteiro + (int)$results[1]['tamanho']; 
        $col3 = trim(substr($arqfile[$i], $ponteiro, ($results[2]['tamanho']))); 
        $ponteiro = $ponteiro + (int)$results[2]['tamanho'];
        $col4 = removeZero(trim(substr($arqfile[$i], $ponteiro, ($results[3]['tamanho']))));
        $ponteiro = $ponteiro + (int)$results[3]['tamanho'];
        $col5 = trim(substr($arqfile[$i], $ponteiro, ($results[4]['tamanho'])));
        $ponteiro = $ponteiro + (int)$results[4]['tamanho'];
        $col6 = converteMoeda(trim(substr($arqfile[$i], $ponteiro, ($results[5]['tamanho']))));
            


          
          //echo "<br>";
          
          
          $stmt2->bindParam(1, $col1);
          $stmt2->bindParam(2, $col2);
          $stmt2->bindParam(3, $col3);
          $stmt2->bindParam(4, $col4);
          $stmt2->bindParam(5, $col5);
          $stmt2->bindParam(6, $col6);
          
    
                                             
          $stmt2->execute();
       
          
          $ponteiro = 0;
          $i++;

    }

    
    unset($bd02);
    unset($arqfile);

} // Fim da funcao

//leiafuncemaisl();
leiaamemail();
//leiaeventoemail();
leiaiamemail();


?>


