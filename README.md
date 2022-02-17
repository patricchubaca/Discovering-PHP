

# Discovering-PHP
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

Você pode mudar caso já tenha algo sendo executado 
	
  Simulação do numero da porta
  
  	$porta = 8080;
	  
  	php -S localhost:$porta 	
	  
  Exemplo de como vai ser executado :
    	
	php -S localhost:8080	
	    
### Caso você tenha o XAMPP e o MYSQL SERVER  

Você tem disponivel o arquivo para rodar o sql para criação da base de dados.
		ConexaoBD/SQL/Instructions.sql 


### START DO XAMPP 
	
Instruções para iniciar o xampp
- Caso você queira usar a interface do banco de dados
	 	
		sudo /opt/lampp/lampp start

### START MYSQL SERVER 
        
	Instruções para acessar o banco
	- Caso você queira usar a o banco de dados via linha de comando
	mysql -h localhost -u root -p

	- Comando para selecionar o database - USE BLOG;

### COMANDO PARA ATIVIDADES NO LINUX  

    	CRIANDO ARQUIVO 
	touch /tmp/debugPatric
	
	PERMISÃO DE LEITURA E ESCRITA
	chmdod 666 /tmp/debugPatric

	ESCREVE AS ULTIMAS 10 LINHAS DO ARQUIVO 
	tail -f /tmp/debugPatric

	Metodo PHP para debug e leitura de Objetos e Strings
	
	Debug de Arrays e Obijetos 
	file_put_contents('/tmp/degubPatric', date('H:i:s').print_r($lista, 1)."\n", FILE_APPEND);
	  
	Debug de Strings 			
	file_put_contents('/tmp/degubPatric', date('H:i:s'). "$conteudo\n", FILE_APPEND);


	echo "<pre>";
	var_dump($lista);
	echo "</pre>";


