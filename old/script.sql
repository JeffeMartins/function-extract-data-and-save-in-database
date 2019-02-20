create database regs;

use regs;

create table reg_func_email (

	idfuncemail int primary key auto_increment,
    nome varchar(27), 
    tamanho int(3)
 
);


create table func_email (
	
	PREDIO_FUNC_EMAIL varchar(7),         
	NOME_PREDIO_EMAIL varchar(57),           
	MATRICULA_FUNC_EMAIL varchar(7),        
	MES_FUNC_EMAIL varchar(4),               
	ANO_FUNC_EMAIL varchar(6),              
	DD_EMIS_ARQ_FUNC_EMAIL varchar(4),     
	MM_EMIS_ARQ_FUNC_EMAIL varchar(4),      
	AA_EMIS_ARQ_FUNC_EMAIL varchar(6),      
	HH_EMIS_ARQ_FUNC_EMAIL varchar(7),       
	NOME_FUNC_EMAIL varchar(32),             
	FUNCAO_FUNC_EMAIL varchar(22),           
	DT_ADM_FUNC_EMAIL varchar(10),           
	DEPSF_FUNC_EMAIL varchar(4),             
	DEPIR_FUNC_EMAIL varchar(4),             
	HH_ENTR_ARQ_FUNC_EMAIL varchar(7),       
	HH_INIC_ARQ_FUNC_EMAIL varchar(7),      
	HH_TERM_ARQ_FUNC_EMAIL varchar(7),        
	HH_SAID_ARQ_FUNC_EMAIL varchar(7),       
	DT_INIC_ULTFER_FUNC_EMAIL varchar(10),  
	DT_TERM_ULTFER_FUNC_EMAIL  varchar(10),  
	PERIODO_ULTFER_FUNC_EMAIL  varchar(11),   
	NUM_FERVENC_FUNC_EMAIL     varchar(4),   
	PERIODO_FERVENC_FUNC_EMAIL varchar(11),   
	PRAZOFERIAS_FUNC_EMAIL     varchar(10),   
	EMAIL_FUNC_EMAIL           varchar(47),  
	DDD_FUNC_EMAIL             varchar(4),  
	TELEFONE_FUNC_EMAIL        varchar(11)

);


drop table func_email;

desc func_email;

select * from func_email;

truncate table func_email;


create table reg_am_email (

	idamemail int primary key auto_increment,
    nome varchar(27), 
    tamanho int(3)
 
);


create table am_email (

	PREDIO_AM_EMAIL          varchar(5),    
	MATRICULA_AM_EMAIL       varchar(5),    
	MES_AM_EMAIL             varchar(2),     
	ANO_AM_EMAIL             varchar(4),     
	DD_EMIS_ARQ_AM_EMAIL     varchar(2),     
	MM_EMIS_ARQ_AM_EMAIL     varchar(2),     
	AA_EMIS_ARQ_AM_EMAIL     varchar(4),     
	HH_EMIS_ARQ_AM_EMAIL     varchar(5),   
	BASEINSS_AM_EMAIL        varchar(10),  
	BASEIRRF_AM_EMAIL        varchar(10),  
	BASEFGTS_AM_EMAIL        varchar(10),  
	VALORFGTS_AM_EMAIL       varchar(10)  
	
);

os ultimos da am_email sao V99


create table reg_evt_email (

	idevtemail int primary key auto_increment,
    nome varchar(27),
    tamanho int(3),
	asterisco char(1)
    
);

create table eventos_email(

	CODIGO_EVT_EMAIL varchar(3),
	DESCRICAO_EVT_EMAIL varchar(25),
	ASTERISCO_EVT_EMAIL char(1)

);

create table reg_iam_email (

	idiamemail int primary key auto_increment,
    nome varchar(27),
    tamanho int(3)
	
    
);

create table iam_email (

	PREDIO_IAM_EMAIL varchar(5),
	MATRICULA_IAM_EMAIL varchar(5),
	CODEVT_IAM_EMAIL varchar(3),
	HH_IAM_EMAIL varchar(6),
	PROVDESC_IAM_EMAIL varchar(1),
	VALOREVT_IAM_EMAIL varchar(10)

);

select count(*) as "Total", (select count(*) from func_email where telefone_func_email like '%000000000') as "Em branco" from func_email;


bases-email -> am-email

iam-email -> proventos-email















