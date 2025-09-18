# Musa Mente - Sistema de Gerenciamento de Saúde Mental

Este é o projeto Musa Mente, desenvolvido utilizando PHP, Laravel, MySQL, e Bootstrap. O objetivo do sistema é fornecer uma plataforma para o gerenciamento de dados relacionados à saúde mental. Ele está atualmente hospedado na HostGator e você pode acessá-lo através do seguinte link:

[Acessar Sistema](https://teste.musadamente.com.br/admin)

## Pré-requisitos

Antes de começar, você precisa ter os seguintes programas instalados em seu computador:

- PHP (versão recomendada: 8.0 ou superior)
    - Documentação do PHP: https://www.php.net/manual/pt_BR/

- Composer (gerenciador de dependências do PHP)
    - Instalação do Composer: https://getcomposer.org/download/

- MySQL ou MariaDB
    - Documentação do MySQL: https://dev.mysql.com/doc/

- Laravel (framework PHP utilizado no projeto)
    - Documentação do Laravel: https://laravel.com/docs

- Node.js (para rodar o frontend com o Bootstrap e outras dependências)
    - Instalação do Node.js: https://nodejs.org/

## Clonando o Repositório

Para começar a trabalhar no projeto, você precisa clonar o repositório. Execute o seguinte comando no seu terminal:

```bash
git clone https://github.com/willfrombrasil/musa_mente.git
```

Depois de clonar, entre na pasta do projeto:

```bash
cd musa_mente
```

## Instalação e Configuração

1. Instalar as dependências do PHP

Dentro da pasta do projeto, execute o comando abaixo para instalar as dependências do Laravel:

```bash
composer install
```

2. Configurar o Banco de Dados

Copie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente de acordo com seu banco de dados MySQL. Por exemplo:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=musadamente
DB_USERNAME=root
DB_PASSWORD=senha_do_banco
```

Em seguida, gere a chave da aplicação:

```bash
php artisan key:generate
```

3. Rodar as Migrations do Banco de Dados

Para criar as tabelas no banco de dados, execute as migrations:

```bash
php artisan migrate
```

4. Instalar Dependências do Frontend

Se o projeto usar JavaScript ou o Bootstrap, execute o comando para instalar as dependências do frontend:

```bash
npm install
```

5. Compilar os Assets

Para compilar os arquivos CSS e JavaScript, execute o comando:

```bash
npm run dev
```

Agora o projeto está pronto para rodar localmente! Você pode iniciá-lo com o seguinte comando:

```bash
php artisan serve
```

O sistema estará disponível no endereço: http://localhost:8000

## Como Editar o Projeto

O projeto está organizado em várias pastas, mas as mais importantes para edição são:

- app/: Contém os controladores, modelos e lógicas do backend.

- resources/views/: Contém os arquivos de visualização (frontend).

- public/: Contém arquivos públicos como imagens, CSS, e JavaScript.

### Editando Páginas

As páginas do sistema estão dentro da pasta `resources/views`. Os arquivos Blade (com extensão `.blade.php`) são utilizados para gerar o HTML. Para editar uma página, basta encontrar o arquivo correspondente e fazer as alterações desejadas.

Exemplo: Para editar a página de login, procure por `login.blade.php` dentro de `resources/views/auth/`.

### Editando Funcionalidades

Se você precisar editar ou adicionar funcionalidades ao sistema, pode começar a trabalhar nos controladores e modelos, que estão na pasta `app/`.

Por exemplo, se você deseja adicionar um novo recurso para "Gestão de Usuários", você pode criar um novo controlador com o comando:

```bash
php artisan make:controller UserController
``` 

E depois adicionar as funções necessárias dentro do controlador.

### Como Atualizar ou Inserir Funcionalidades

**Adicionando uma Nova Funcionalidade**

- Criar o Controlador:
Use o comando Artisan para criar um novo controlador, por exemplo:

```bash
php artisan make:controller NovoRecursoController
```

- Adicionar Rota:
Abra o arquivo `routes/web.php` e adicione a nova rota para o recurso. Exemplo:

```bash
Route::get('/novo-recurso', [NovoRecursoController::class, 'index']);
```

- Adicionar Visão (View):
Crie ou edite os arquivos Blade em `resources/views` para exibir a nova funcionalidade.

- Criar Modelos e Migrations (se necessário):
Caso precise criar uma nova tabela no banco, use:

```bash
php artisan make:model NovoRecurso -m
```

E depois defina a estrutura da tabela no arquivo de migration gerado em `database/migrations/`.

- Rodar Migrations:
Após criar a migration, execute o comando:

```bash
php artisan migrate
```

**Atualizando Funcionalidades**

- Para atualizar uma funcionalidade existente, edite os arquivos do controlador, da view ou do modelo de acordo com a necessidade.

- Certifique-se de rodar as migrations novamente, caso haja alterações no banco de dados.

**Hospedando na HostGator**
1. Subir Arquivos para a HostGator

Você pode usar FTP ou o cPanel da HostGator para fazer upload dos arquivos do projeto. Para isso:

- Acesse seu cPanel e procure pela ferramenta "Gerenciador de Arquivos".

- Envie todos os arquivos do projeto para o diretório desejado no servidor.

2. Configurar o Banco de Dados

- No cPanel da HostGator, crie um novo banco de dados MySQL.

- Configure o banco de dados no arquivo .env com as credenciais corretas de acesso ao banco no servidor.

3. Rodar Migrations no Servidor

Se você tiver acesso SSH ao servidor, entre via terminal e rode as migrations com:

```bash
php artisan migrate
```

4. Configurar o Frontend

Se o projeto usar dependências de frontend (como o Bootstrap), não se esqueça de rodar o comando para compilar os assets:

```bash
npm run prod
```

5. Finalizar a Configuração

Depois de fazer o upload dos arquivos e configurar o banco de dados, você pode acessar o sistema através do domínio configurado na HostGator. Por exemplo: https://seusite.com.br/admin.

## Documentação de Apoio

Aqui estão alguns links úteis para entender melhor as tecnologias usadas neste projeto:

PHP: [Documentação Oficial do PHP](https://teste.musadamente.com.br/admin)

Laravel: [Documentação Oficial do Laravel](https://laravel.com/docs)

MySQL: [Documentação Oficial do MySQL](https://dev.mysql.com/doc/)

Bootstrap: [Documentação Oficial do Bootstrap](https://getbootstrap.com/)

## Requisitos

- [Node.js and NPM](https://docs.npmjs.com/getting-started/installing-node)
- [Yarn](https://yarnpkg.com/en/docs/install)
- [Node.js](https://nodejs.org/en/download/)
- [composer](https://getcomposer.org/download/)

## Instalação

- Clone o repositório e `cd` acesse o mesmo
- Execute o comando `composer install`
- Copie e Renomei `.env.example` O arquivo `.env`
- Execute `php artisan key:generate`
- Defina suas credenciais de banco de dados no arquivo `.env`
- Execute `php artisan migrate`
