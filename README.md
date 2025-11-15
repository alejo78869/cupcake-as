# **Cupcake AS – Sistema Web de Cupcakes**

**Aluno:** Javier Alejandro Salvador Lopez
**RGM:** 29544874
**Curso:** Análise e Desenvolvimento de Sistemas

---

# **1. Descrição do Projeto**

O **Cupcake AS** é um sistema web desenvolvido para melhorar uma aplicação anterior que apresentava problemas de:

* experiência do usuário (UX),
* interface (UI),
* estrutura visual,
* fluxo de compra,
* organização do código.

O novo sistema foi reconstruído utilizando **Laravel (PHP)**, seguindo princípios de **IHC (Interação Humano-Computador)** e boas práticas de UX/UI.

---

# **2. Objetivo Geral**

Construir uma aplicação web funcional, acessível, organizada e visualmente agradável para compra e venda de cupcakes.

---

# **3. Objetivos Específicos**

* Melhorar a experiência de navegação.
* Criar UI moderna com tema "confeitaria pastel".
* Implementar catálogo, carrinho e checkout simples.
* Organizar o backend em arquitetura **MVC**.
* Implementar banco de dados relacional.
* Criar documentação completa do projeto.
* Garantir testes e relatório de qualidade.

---

# **4. Arquitetura do Sistema**

* **Backend:** PHP 8+, Laravel 9
* **Frontend:** Blade + Bootstrap
* **Banco de Dados:** MySQL
* **Arquitetura:** MVC
* **Deploy recomendado:** Render / Railway

Estrutura de diretórios:

```
app/
 └─ Models/
 │    ├─ Cupcake.php
 │    ├─ Category.php
 │    ├─ Order.php
 │    └─ OrderItem.php
 └─ Http/
      └─ Controllers/
            ├─ CupcakeController.php
            ├─ CartController.php
            └─ OrderController.php
resources/
 └─ views/
      ├─ layouts/
      ├─ cupcakes/
      └─ cart/
```

---

# **5. Modelagem do Banco de Dados**

Entidades:

* **Users**
* **Categories**
* **Cupcakes**
* **Orders**
* **Order_Items**

Relacionamentos:

* 1 Categoria → N Cupcakes
* 1 Pedido → N Itens
* 1 Usuário → N Pedidos

Diagrama ER:

```
Categories (1) ----- (N) Cupcakes
Users (1) ----------- (N) Orders
Orders (1) ---------- (N) Order_Items
Cupcakes (1) -------- (N) Order_Items
```

---

# **6. Funcionalidades Implementadas**

* ✔ Catálogo de cupcakes
* ✔ Filtro por categorias
* ✔ Página individual do produto
* ✔ Carrinho (sessão)
* ✔ Checkout básico
* ✔ Cadastro/login (Laravel Breeze)
* ✔ Painel visual com tema pastel
* ✔ Páginas responsivas

---

# **7. Melhorias de UX/IHC**

* Paleta pastel atraente
* Espaçamento consistente (padding e grid)
* Feedbacks visuais (alertas, mensagens, botões)
* Hierarquia visual clara
* Rotas simples e intuitivas
* Imagens otimizadas
* Tipografia amigável

---

# **8. Tecnologias Utilizadas**

* PHP 8.1+
* Laravel 9
* Composer
* MySQL / SQLite
* Bootstrap 5
* Blade Templates

---

# **9. Testes de Usuários**

Foram realizados 5 testes com usuários fictícios para avaliar a interface e funcionalidade.
Principais pontos corrigidos:

* imagens quebrando por caminho incorreto,
* contraste baixo,
* validação permitindo quantidade zero,
* mensagens de erro inconsistentes,
* remoção do carrinho sem atualização automática.

---

# **10. Laudo de Qualidade**

**Erros encontrados:**

* Validação inadequada (qty)
* Imagens quebradas
* Contraste insuficiente
* Pagamento não integrado

**Correções aplicadas:**

* Ajuste de paths
* Validação reforçada
* Melhoria no contraste
* Padronização de mensagens

---

# **11. Instalação do Projeto (Local)**

```
git clone https://github.com/SEU_USUARIO/cupcake-as.git
cd cupcake-as
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

Acesse: **[http://127.0.0.1:8000](http://127.0.0.1:8000)**

---

# **12. Deploy (Render)**

1. Criar conta em [https://render.com](https://render.com)
2. New → Web Service
3. Conectar ao repositório
4. Build command:

```
composer install && php artisan migrate --force --seed
```

5. Start command:

```
php artisan serve --host 0.0.0.0 --port $PORT
```

---

# **13. Vídeo do Projeto**

O vídeo contem:

* Introdução
* Objetivo do sistema
* Tecnologias
* Explicação do código
* Demonstração do site
* Testes
* Conclusão

---

# **14. Links Importantes**

* **Repositório do código:** *(inserir depois)*
* **Solução funcionando (Render):** *(inserir)*
* **Vídeo narrado:** *(inserir)*

---
