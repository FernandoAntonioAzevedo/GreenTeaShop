# 🍵 GreenTeaShop

Uma plataforma de e-commerce sendo desenvolvida em PHP para venda de produtos relacionados ao universo do chá verde. Este projeto foca em funcionalidades essenciais como cadastro e login de administradores, gestão de produtos e uma interface clara e responsiva para os usuários.

[🌐 Acesse o repositório no GitHub](https://github.com/FernandoAntonioAzevedo/GreenTeaShop)

---

## 📸 Preview

![image](https://github.com/user-attachments/assets/9a9f2712-a230-4729-badc-edcc7f767bd1)


---

## 🚀 Funcionalidades

- 📦 Cadastro e login de administradores
- 🖼️ Upload de imagens de perfil com validação
- 🔐 Hash de senha segura com `password_hash()`
- 🛠️ Interface administrativa para controle do conteúdo
- 💻 Design responsivo e acessível
- ✨ Validação e sanitização dos dados de entrada

---

## 🧰 Tecnologias utilizadas

- **PHP (versão 8+)**
- **MySQL** (via PDO)
- **HTML5 + CSS3**
- **JavaScript**
- **SweetAlert2** (para mensagens)
- **XAMPP / Apache** (ambiente local)

---

## 📁 Estrutura do Projeto até o momento:

```
GreenTeaShop/
│
├── admin/                            # Área administrativa (painel de admin)
│   ├── components/                   # Componentes reutilizáveis do admin
│   │   ├── alert.php                 # Sistema de alertas
│   │   └── connection.php           # Conexão com o banco de dados
│   │
│   ├── database/                     # (Possivelmente) scripts SQL e modelos de dados
│   │
│   ├── admin_style.css               # Estilos específicos do painel administrativo
│   ├── login.php                     # Tela de login para admins
│   └── register.php                  # Tela de registro de novos admins
│
├── FrontEnd/                         # Parte pública (visível ao usuário final)
│   ├── components/                   # Componentes reutilizáveis do site
│   │   ├── alert.php                 # Sistema de mensagens
│   │   ├── connection.php           # Conexão com o banco de dados
│   │   ├── footer.php                # Rodapé
│   │   └── header.php                # Cabeçalho
│   │
│   ├── css/
│   │   └── styles.css                # Estilos globais do site
│   │
│   ├── img/                          # Imagens do frontend (ex: banners, logos)
│   │
│   ├── js/
│   │   └── script.js                 # Scripts JavaScript do frontend
│   │
│   ├── about.php                     # Página "Sobre"
│   ├── contact.php                   # Página de contato
│   ├── home.php                      # Página inicial
│   ├── login.php                     # Login do usuário (não admin)
│   ├── register.php                  # Registro de usuário comum
│   └── view_products.php            # Listagem de produtos para o público
│
├── image/                            # Pasta de uploads (ex: perfis ou produtos)
│
└── README.md                         # Arquivo de apresentação do projeto

```

---

## 🔧 Como usar localmente

1. **Clone o repositório:**
   ```bash
   git clone https://github.com/FernandoAntonioAzevedo/GreenTeaShop.git
   ```

2. **Abra com o XAMPP ou WAMP e mova para a pasta `htdocs`:**
   ```bash
   cp -r GreenTeaShop/ C:/xampp/htdocs/
   ```

3. **Inicie o Apache e o MySQL pelo painel XAMPP.**

4. **Crie o banco de dados no phpMyAdmin (ex: `greentea_db`)**  
   e importe a estrutura com o script SQL disponível (adicione em breve ao projeto).

5. **Configure as credenciais no arquivo `connection.php`:**
   ```php
   $conn = new PDO("mysql:host=localhost;dbname=greentea_db", "root", "");
   ```

6. **Acesse no navegador:**
   ```
   http://localhost/GreenTeaShop/admin/login.php
   ```

---

## 📌 Requisitos

- PHP 8.x
- MySQL ou MariaDB
- Servidor local (XAMPP, WAMP, Laragon, etc)

---

## 📮 Contribuição

Pull requests são bem-vindos! Para contribuições maiores, por favor abra uma *issue* primeiro para discutir as mudanças.

---


---

## 🙋‍♂️ Autor

** Dev Fernando Antonio Azevedo**  
[🔗 GitHub](https://github.com/FernandoAntonioAzevedo)
