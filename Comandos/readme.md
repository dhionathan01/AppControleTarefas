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