# Sistema de Login com PHP e MySQL

Este é um projeto básico de sistema de login e cadastro de usuários desenvolvido com **HTML**, **CSS**, **PHP** e **MySQL**, utilizando o servidor local **XAMPP**.

## 💻 Funcionalidades

- Tela de login com validação de email e senha
- Cadastro de novos usuários
- Conexão com banco de dados MySQL
- Redirecionamento após autenticação
- Layout responsivo com CSS e Google Fonts

## 🗂️ Estrutura do Projeto

```
meu-projeto/
├── public/             # Arquivos visíveis no navegador
│   ├── login.php
│   ├── cadastro.html
│   ├── welcome.html
│   ├── css/
│   │   ├── style.css
│   │   └── welcome.css
│   └── imagens/
├── src/                # Scripts PHP internos
│   ├── conexao.php
│   ├── cadastrar.php
│   └── autenticar.php
├── database/           # SQL de criação de tabelas
│   └── schema.sql
```

## ⚙️ Requisitos

- PHP 7+
- MySQL
- Navegador moderno
- [XAMPP](https://www.apachefriends.org/)

## 🚀 Como usar

1. Clone ou baixe este repositório.
2. Coloque o projeto em `C:\xampp\htdocs\meu-projeto`.
3. Inicie o Apache e MySQL pelo XAMPP.
4. Importe o arquivo `database/schema.sql` no **phpMyAdmin** para criar a tabela `usuarios`.
5. Acesse no navegador:  
   ```
   http://localhost/meu-projeto/public/login.php
   ```

## 🧑‍💻 Autor

Bruno Schmidt  
Projeto criado com fins de aprendizado e prática em desenvolvimento web.

## 📄 Licença

Este projeto está licenciado sob a [MIT License](LICENSE).
