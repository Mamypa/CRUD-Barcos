
# 🚤 CRUD de Barcos – Laravel + Bootstrap 5 (Local via Vite)

Este projeto é um CRUD completo de barcos, desenvolvido com Laravel 10 e estilizado com Bootstrap 5 carregado localmente via Vite.

---

## ✅ Requisitos para rodar o projeto

- PHP 8.1 ou superior
- Composer
- MySQL
- Node.js e NPM
- Laravel 10
- Um ambiente local como XAMPP, WAMP ou Laragon

---

## 🚀 Como rodar o projeto

### 1. Clonar o repositório

```bash
git clone https://github.com/seu-usuario/crud-barcos-laravel.git
cd crud-barcos-laravel
```

### 2. Instalar as dependências PHP

```bash
composer install
```

### 3. Copiar e configurar o arquivo .env

```bash
cp .env.example .env
```

Edite o `.env` com os dados do seu banco de dados MySQL:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=barcos
DB_USERNAME=root
DB_PASSWORD=
```

Crie o banco no phpMyAdmin com o mesmo nome definido acima.

### 4. Gerar a chave da aplicação

```bash
php artisan key:generate
```

### 5. Rodar as migrations e os seeders

```bash
php artisan migrate --seed
```

---

## 🎨 Estilização com Bootstrap (local via Vite)

### 6. Instalar as dependências front-end

```bash
npm install
```

### 7. Rodar o Vite em modo desenvolvimento

```bash
npm run dev
```

---

## ✅ Acessar o sistema

```bash
php artisan serve
```

Acesse no navegador:

```
http://127.0.0.1:8000/barcos
```

---

## 📌 Funcionalidades

- Cadastro de barcos
- Edição e exclusão
- Validações de formulário
- Layout responsivo com Bootstrap 5
- Seed automático com 3 registros

---

## ⚠️ Observações

- O arquivo `.env` não é versionado por segurança.
- O Bootstrap é carregado localmente via Vite (sem depender de CDN).
- Execute `npm run dev` sempre que alterar CSS/JS ou iniciar o projeto.

---

Desenvolvido com ❤️ usando Laravel.
