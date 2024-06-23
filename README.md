# ezzom Web Page
## Sobre
Esta aplicação foi feita com Laravel, MariaDB e Vite, seus dados são mokados, ou seja é necessário rodar as seeds para ter dados populados no banco e conseguir ver a aplicação

Básicamente existem 3 modelos Notícias (News) Categorias de noticias, (Category) e as manchetes (Headline)
## Tecnologias utilizadas
- *PHP:* 8.2.12
- *Laravel:* 11.11.0
- *MariaDB:* 10.4.32
- *Node:* 20.14.0
- *Npm:* 10.8.1
## Como iniciar
```bash
git clone https://github.com/marcosmatosteodoro/ezzom-web-page.git

cd ezzom-web-page

npm install

php artisan migrate

php artisan db:seed

npm run dev

php artisan serve
```