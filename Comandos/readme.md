## Customizações web
* Iniciando o ui com o boostrap, e criando o skeleto de rotas views e controles de autenticação:
```php artisan ui bootstrap --auth```
* Executar o npm install para compilar o scaffold e adicionar o boostrap e as outras dependencias:
![alt text](image.png)
``` npm install ```
![alt text](image-1.png) erro ao adicionar um dependencia rodar novamentemo :
```npm install resolve-url-loader@^5.0.0 --save-dev --legacy-peer-deps```
![alt text](image-2.png)
em seguida o 
```npm run dev ```
![alt text](image-3.png)

* Fazer as configurações de banco de dados no arquivo .env
* Executar as migration:
```php artisan migrate```  
![alt text](image-4.png)

* Criando o Model e o Controller de tarefa
```php artisan make:controller --resource TarefaController --model=Tarefa```
![alt text](image-5.png)

* Fazendo as configurações do smtp pelo arquivo .env
* habilitando o reset de senha
![alt text](image-6.png)

* Criando template de email com markdown Mailables
```php artisan make:mail MensagemTesteMail --markdown emails.mensagem-teste```
* Enviando o email com template personalizado:
![alt text](image-7.png)

* Publicando o template de email para poder ser customizado e editado sem mexer nos códigos raiz.
* Execute o comando
 ```php artisan vendor:publish```
 E selecione o 14 para publicar o mail
 ![alt text](image-8.png)
 * Criando uma classe de notificação para Redefinir a senha, para que não seja necessários mexer nos métodos padrões do framework
 ```php artisan make:notification RedefinirSenhaNotification```
 ![alt text](image-9.png)

 * Conclusão:
 * ![alt text](image-10.png)

* Habilitando Verificação de email:
![alt text](image-11.png)

* Customizando email de verificação de email
```php artisan make:notification VerificarEmailNotification ```
![alt text](image-12.png)

* Criando tabela tarefas:
```php artisan make:migration create_tarefas_table```
![alt text](image-13.png)
```php artisan migrate```
![alt text](image-14.png)

Criando novo email para tarefas
```php artisan make:mail NovaTarefaMail --markdown emails.nova-tarefa```

* Criando migration pare relacionar tarefas a um usuário:
```php artisan make:migration alter_table_tarefas_relacionamento_users```

* Executando a migrate:
```php artisan migrate ```
![alt text](image-15.png)

* Instalando o pacote laravel Excel:
No diretório do projeto chamar:
*OBS: Foi necessário abrir o terminal bash como administrador e atualizar o composer para a versão 2 ```composer self-update --2 ```
```composer require maatwebsite/excel:^3.1.0 --ignore-platform-reqs```
* É necessário publicar o arquivo exel para poder fazer configurações específicar para n ter que mexer na classe vendor:
```php artisan vendor:publish --provider="Maatwebsite\Excel\ExcelServiceProvider" --tag=config ```
![alt text](image-16.png)

* Criando uma classe de exportação para Tarefa
``` php artisan make:export TarefasExport --model=Tarefa```
* OBS: Para o perfeito funcionamento foi necessário ativar essa extensção no php.ini ```;extension=gd ``` e atualizar o composer:
![alt text](image-17.png)
![alt text](image-18.png)