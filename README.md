# README — Projeto modelo_nauka_bluemed

## 📘 Visão Geral

O projeto **modelo_nauka_bluemed** é uma clonagem/tema personalizado baseado em um site original, reestruturado em um modelo modular com PHP e componentes reutilizáveis. Ele utiliza uma arquitetura típica de template front-end PHP, com separação clara entre páginas, componentes e recursos estáticos.

Este README documenta:

* A **estrutura de diretórios** e o papel de cada parte do sistema;
* A **função dos principais arquivos PHP** (páginas e includes);
* Os **recursos front-end** (CSS, JS, imagens);
* E recomendações para manutenção ou personalização.

---

## 🗂 Estrutura de Diretórios

```
modelo_nauka_bluemed/
│
├── assets/               # Recursos estáticos (CSS, JS, imagens, fontes)
│   ├── css/              # Estilos globais e modulares
│   │   ├── dark.css
│   │   ├── style.css
│   │   ├── responsive.css
│   │   └── module-css/   # CSS por seção (header, banner, footer, etc.)
│   ├── js/               # Scripts JavaScript (plugins, inicialização)
│   ├── images/           # Logos, ícones e imagens do site
│   └── fonts/            # Fontes utilizadas no template (se aplicável)
│
├── parts/                # Componentes PHP reutilizáveis
│   ├── header/           # Cabeçalhos (menu, logo, etc.)
│   ├── footer/           # Rodapés
│   ├── home/             # Seções da página inicial
│   ├── home6/            # Versão alternativa da home
│   ├── layout/           # Estruturas de layout (topo/base)
│   ├── mobile-nav.php    # Menu para dispositivos móveis
│   ├── offcanvas.php     # Painel lateral (menu/carrinho)
│   ├── script.php        # Importa JS no final das páginas
│   ├── page-title.php    # Cabeçalho com título e breadcrumb
│   └── back-to-top.php   # Botão de voltar ao topo
│
├── .vscode/              # Configurações de ambiente (VSCode)
│   └── settings.json     # Define PHP 8.4 como versão de referência
│
├── .git/                 # Repositório Git local (não necessário na distribuição)
│
├── index.php             # Página principal (home)
├── about.php             # Página institucional “Sobre nós”
├── contact.php           # Página de contato
├── blog-1.php / blog-2.php / blog-details.php  # Seções de blog
├── shop.php / shop-details.php / cart.php / checkout.php  # E-commerce (catálogo)
├── yachts-1.php / yachts-details.php / ...     # Páginas temáticas de produtos
├── login.php / sign-up.php                     # Telas de autenticação
├── 404.php / coming-soon.php                  # Páginas especiais
└── faq.php / pricing.php / project-*.php / team.php  # Páginas secundárias
```

---

## 🧩 Descrição dos Principais Componentes

### 1. Páginas principais (`.php` no diretório raiz)

Esses arquivos definem as páginas do site. Cada um inclui automaticamente o cabeçalho e rodapé por meio de includes.

| Arquivo                                               | Função                                                                            |
| ----------------------------------------------------- | --------------------------------------------------------------------------------- |
| `index.php`                                           | Página inicial (home principal). Pode carregar seções modulares de `parts/home/`. |
| `about.php`                                           | Página institucional com informações da empresa.                                  |
| `contact.php`                                         | Página de contato com formulário e dados de localização.                          |
| `blog-1.php`, `blog-2.php`                            | Páginas de listagem de posts de blog.                                             |
| `blog-details.php`                                    | Exibe o conteúdo completo de um artigo.                                           |
| `shop.php`                                            | Página principal da loja virtual.                                                 |
| `shop-details.php`                                    | Detalhes de um produto.                                                           |
| `cart.php`, `checkout.php`                            | Carrinho e checkout (simulação de fluxo de compra).                               |
| `yachts-1.php`, `yachts-details.php`                  | Páginas de catálogo e detalhes de embarcações (tema original).                    |
| `login.php`, `sign-up.php`                            | Telas de autenticação de usuários.                                                |
| `faq.php`, `pricing.php`, `project-1.php`, `team.php` | Páginas secundárias com informações adicionais.                                   |
| `404.php`, `coming-soon.php`                          | Páginas especiais para erro e manutenção.                                         |

Cada página geralmente contém includes como:

```php
<?php include('parts/header/header.php'); ?>
<?php include('parts/footer/footer.php'); ?>
<?php include('parts/script.php'); ?>
```

---

### 2. Pasta `parts/`

Organiza o projeto em módulos independentes para facilitar manutenção e reuso.

| Arquivo / Pasta    | Função                                                                   |
| ------------------ | ------------------------------------------------------------------------ |
| `header/`          | Contém menus, logos e cabeçalhos principais. Várias versões disponíveis. |
| `footer/`          | Contém rodapés padronizados (várias variações).                          |
| `home/` e `home6/` | Blocos reutilizáveis da página inicial (banners, depoimentos, seções).   |
| `layout/`          | Arquivos de estrutura geral (`top-layout.php`, `bottom-layout.php`).     |
| `mobile-nav.php`   | Navegação móvel lateral.                                                 |
| `offcanvas.php`    | Painel lateral (menu/carrinho/flutuante).                                |
| `script.php`       | Importa scripts JavaScript ao final das páginas.                         |
| `page-title.php`   | Cabeçalho das páginas internas (breadcrumb e título).                    |
| `back-to-top.php`  | Botão de retorno ao topo da página.                                      |

---

### 3. Pasta `assets/`

Contém todos os recursos estáticos usados pelo front-end.

| Subpasta          | Descrição                                                                                                                               |
| ----------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `css/`            | Folhas de estilo. `style.css` é o tema principal; `responsive.css` adapta o layout a diferentes telas; `dark.css` habilita modo escuro. |
| `css/module-css/` | Contém arquivos CSS nomeados por seções (`01-header-section.css`, `02-banner-section.css` etc.), permitindo modularidade visual.        |
| `js/`             | Scripts JS para sliders, animações, menus e inicializações gerais (por ex. `main.js`, `wow.js`, `swiper.js`).                           |
| `images/`         | Logos, ícones e imagens temáticas.                                                                                                      |
| `fonts/`          | Conjunto de fontes web personalizadas (caso incluídas).                                                                                 |

---

### 4. Configuração de Ambiente

**`.vscode/settings.json`**

```json
{
  "php.version": "8.4"
}
```

Define a versão de PHP sugerida para o desenvolvimento, útil ao abrir o projeto no VSCode.

---

### 5. Repositório Git

O diretório `.git/` indica que o projeto possui versionamento local. Ele contém commits, histórico e hooks de Git. **Não é necessário incluir essa pasta** na versão distribuída ou em produção.

---

## ⚙️ Requisitos de Execução

* Servidor web local (Apache, Nginx ou XAMPP/WAMP) com suporte a PHP 8+;
* Navegador moderno (Chrome, Edge, Firefox);
* Pasta `assets/` e `parts/` devem estar acessíveis e no mesmo nível dos arquivos `.php` principais.

---

## 🚀 Personalização e Manutenção

1. **Editar conteúdo**: altere o texto e imagens diretamente nos arquivos `.php` ou substitua as seções em `parts/home/`.
2. **Modificar estilos**: edite os arquivos em `assets/css/`. O arquivo `style.css` é o principal ponto de personalização.
3. **Adicionar páginas**: copie um dos `.php` existentes (ex.: `about.php`) e personalize o conteúdo.
4. **Scripts e interatividade**: os scripts em `assets/js/` controlam sliders, menus e efeitos de animação.

---

## 🧱 Estrutura de Includes (exemplo de fluxo de página)

```php
<!-- Exemplo: about.php -->
<?php include('parts/header/header.php'); ?>
<?php include('parts/page-title.php'); ?>
<section class="about-section"> ... </section>
<?php include('parts/footer/footer.php'); ?>
<?php include('parts/script.php'); ?>
```

---

## 🪪 Autor e Origem

Este projeto foi criado a partir da clonagem/adaptação de um site existente, remodelado em estrutura modular e responsiva.
Ideal para estudos de front-end, demonstração de temas ou base para sites institucionais e comerciais.

---

## 📄 Licenciamento

Verifique o licenciamento do tema original antes de redistribuir ou comercializar. Se utilizado apenas para fins acadêmicos ou de aprendizado, mantenha os créditos do template original, se houver.

---

**Última atualização:** outubro de 2025
