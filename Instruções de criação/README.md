# AppControleTarefas
Aplicação de controle de tarefas, Curso Desenvolvimento Web Avançado Laravel Vue.js
## Criando ambiente:
* Remova o ; do fileinfo do php.ini

![alt text](image.png)

* Criando projeto laravel:
```composer create-project --prefer-dist laravel/laravel app_controle_tarefas "8.5.9"```
*  Instalando nodejs versão 14.21.3
```nvm install 14.21.3 ```
![alt text](image-1.png)
* Com os privilégios de administrador executar:
```nvm use 14.21.3```

* Instalando laravelUi
```composer require laravel/ui:^3.2```
* Ao executar php artisan list, será exibido essas duas novas funcionalidades
![alt text](image-2.png)

* OBS - Nessa versão do laravel teremos que enviar todo o caminho para o controller pq o a predefinição do namespace no RouteServiceProvider está comentada:
![alt text](image-3.png)
  - Logo precisamos passar o acrônimo completo e não somente o nome do controller para a definição das rotas:
  ![alt text](image-4.png)
  - Caso queiramos utilizar a versão encurtada basta descomentar essa instrução, e ajustar as rotas
instalando boostrap icons com :
`npm install bootstrap-icons `
após incluir os icones no app.scss rodar o run dev
![alt text](image-5.png)
![alt text](image-6.png)