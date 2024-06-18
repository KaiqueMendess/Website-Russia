# Sistema de Gestão de Comentários

Este é um sistema de gestão de comentários desenvolvido em PHP com autenticação de usuário e funcionalidade de "Lembrar de mim". O sistema permite aos administradores moderar comentários enviados pelos usuários.

## Funcionalidades

- **Cadastro de Usuário**: Permite que novos usuários se cadastrem no sistema.
- **Login de Usuário**: Permite que os usuários façam login no sistema.
- **Autenticação**: As senhas são criptografadas utilizando `password_hash` e verificadas com `password_verify` para segurança.
- **Lembrar de Mim**: Opção para manter o usuário logado por 30 dias utilizando cookies.
- **Renovação Automática de Cookies**: A sessão é mantida ativa através da renovação automática dos cookies a cada acesso.
- **Moderação de Comentários**: Administradores podem aprovar ou rejeitar comentários enviados pelos usuários.

## Estrutura do Projeto

- `index.php`: Página principal do sistema.
- `login.php`: Página de login dos usuários.
- `logout.php`: Página para deslogar o usuário.
- `register.php`: Página de cadastro de novos usuários.
- `admin/index.php`: Página de administração para moderação de comentários.
- `includes/config.php`: Arquivo de configuração com as credenciais de conexão ao banco de dados.
- `includes/functions.php`: Arquivo com funções auxiliares.
- `includes/header.php`: Cabeçalho comum incluído em várias páginas.
- `includes/footer.php`: Rodapé comum incluído em várias páginas.
- Os demais arquivos são apenas informações sobre a russia disponível para qualquer usuário ver
## Configuração

### Requisitos

- Servidor web (por exemplo, Apache)
- PHP 7.4+
- MySQL

### Instalação

1. Clone o repositório ou faça o download dos arquivos.
2. Configure o banco de dados MySQL:
    ```sql
    CREATE DATABASE comentarios;
    USE comentarios;

    CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL
    );

    CREATE TABLE comments (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT NOT NULL,
        comment TEXT NOT NULL,
        approved BOOLEAN DEFAULT FALSE,
        FOREIGN KEY (user_id) REFERENCES users(id)
    );
    ```
3. Configure o arquivo `includes/config.php` com suas credenciais de banco de dados:
    ```php
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "comentarios";

    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Checa a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    ?>
    ```
4. Abra o navegador e acesse `index.php` para utilizar o sistema.

## Segurança

- **Criptografia de Senha**: As senhas são armazenadas de forma segura utilizando o algoritmo `bcrypt`.
- **Prevenção de SQL Injection**: Dados de entrada são escapados utilizando `mysqli_real_escape_string` para prevenir SQL injection.

## Contribuição

1. Faça um fork do projeto.
2. Crie uma branch para sua feature (`git checkout -b feature/nova-feature`).
3. Commit suas alterações (`git commit -am 'Adiciona nova feature'`).
4. Push para a branch (`git push origin feature/nova-feature`).
5. Crie um novo Pull Request.

## Licença

Este projeto é licenciado sob a MIT License - veja o arquivo [LICENSE](LICENSE) para detalhes.
