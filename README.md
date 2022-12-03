<p align="center">
    <a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a>
</p>

<h1 align="center">
    LARAVEL DDD
</h1>
<p align="center">
    Domain Driven Design - Projeto Exemplo
    <br />
</p>

<p align="center">
<img  src="https://img.shields.io/static/v1?label=license&message=MIT&color=orange&labelColor=121214" alt="License">
<img src="https://img.shields.io/github/forks/gonribeiro/Laravel-DDD?label=forks&message=MIT&color=orange&labelColor=121214" alt="Forks">
<img src="https://img.shields.io/github/stars/gonribeiro/Laravel-DDD?label=stars&message=MIT&color=orange&labelColor=121214" alt="Stars">
</p>

## 🚴 Sobre o Projeto

Projeto de estudo. Caso deseje visualizar todos os arquivos criados ou modificados para chegar ao resultado final, acesse o segundo commit nomeado: DDD

## ⚡ Requisitos e Instalação
```
PHP 8.0+
```

- Faça uma cópia do projeto e acesse a pasta
```
git clone https://github.com/gonribeiro/Laravel-DDD

cd Laravel-DDD
```
- Faça uma cópia do arquivo ```.env.example``` renomeando para ```.env```
- Instale o projeto
```
composer install
```
- Crie as tabelas do banco de dados e semeie (o projeto usa sqlite para banco de dados)
```
# caso solicite alguma confirmação, informe sim
php artisan migrate

php artisan db:seed
```
- Inicie o projeto
```
php artisan serve
```

- O projeto ficará disponível pelo endereço: http://localhost:8000/

<p align="center">
    <br />
    <img src=".github/view.jpg" width="100%">
    <br />
    <br />
    <img src=".github/commit_all_files_ddd_final.jpg">
</p>