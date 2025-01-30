# Discovering-PHP
### PHP + MYSQL
##### Projeto Alura Blog com PHP e MySQLi 
##### Algumas instruções caso você tenha interesse de executar este projeto com um SO Linux Ubunto com o PHP. 

 Caso você não tenha o git, instale o git com o seguinte comando: 
 
 	 sudo apt install git
	 
	 
 Caso tenha interesse em clonar este repositório você deve utilizar o comando git mais a url:
 
 	git clone https://github.com/patricchubaca/Discovering-PHP.git 

### Execução do projeto pelo servidor do proprio PHP 

Levando em consideração que você tenha o PHP instalado você pode usar o proprio servidor do PHP para ler o projeto.
Acesse o diretório que tem o arquivo index.php e inicie o servidor.
Assim, você só vai precisar do MySQL Server como base de dados e pode rodar o dump que esta disponivel no projeto junto na pasta:

	ConexaoBD/SQL/Instructions.sql
	
  Caso você tenha o Vim instalado e queira abrir o dump para fazer a cópia utilize o comando :
  	
	vim ConexaoBD/SQL/Instructions.sql
	
### Para executar o projeto você pode usar o servidor do proprio PHP com uma porta disponivel.

Você pode mudar caso já tenha algo sendo executado.
	
  Simulação do numero da porta :
	  
  	php -S localhost:8080
	  
  Exemplo de como vai ser executado :
    	
	php -S localhost:8080	
	    
### Caso você tenha o XAMPP e o MYSQL SERVER  

Você tem disponivel o arquivo para rodar o sql para criação da base de dados.


		ConexaoBD/SQL/Instructions.sql 


### START DO XAMPP 
	
Instruções para iniciar o xampp.
- Caso você queira usar a interface do banco de dados:
	 	
		sudo /opt/lampp/lampp start

### ACESSO AO MYSQL  
        
Instruções para acessar o banco.
- Caso você queira usar a o banco de dados via linha de comando:
		  
		  mysql -h localhost -u root -p

- Selecione o database:
		
		 USE DATABASE;
		 
  DESC
- Descreve databases, tabelas e etc.   
		
		 DESC 'nome_tabela';
		 DESC 'data_base';


