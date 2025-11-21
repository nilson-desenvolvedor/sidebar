# Operar Sidebar

## Demo
[sidebar.operarss.com.br](https://sidebar.operarss.com.br)
<p align="center">
  <img src="https://sidebar.operarss.com.br/demo.gif" alt="Demo" />
</p>


### Português
Sidebar no estilo acordeon, com suporte a múltiplos níveis e três temas (claro, escuro e neutro). Desenvolvida usando apenas CSS e JavaScript puro. Fácil de instalar, fácil de adaptar e pronta para ser integrada em qualquer projeto.

## 📌 Passo a passo para instalar no Laravel

### **Passo 1 — Instale o Tailwind**  
*(Atenção: o Tailwind altera todos os estilos padrão do HTML)*

```bash
npm install -D tailwindcss postcss autoprefixer
```

---

### **Passo 2 — Instale o Tippy**

```bash
npm install tippy.js
```

---

### **Passo 3 — Baixe os arquivos para as pastas correspondentes**

**resources/css**  
- theme-dark.css  
- theme-light.css  
- theme-neutral.css  

**resources/js**  
- sidebar.js  

**resources/views/components**  
- sidebar.blade.php  

---

### **Passo 4 — Importe os temas no arquivo `resources/css/app.css`**

```css
@import "./theme-neutral.css";
@import "./theme-dark.css";
@import "./theme-light.css";
```

---

### **Passo 5 — Importe o JS da sidebar no `resources/js/app.js`**

```js
import './sidebar';
```

---

### **Passo 6 — Inclua o componente logo abaixo da tag `<body>`**

```html
<body>
    @include('components.sidebar')
```

---

### **Passo 7 (opcional para o tema neutral) — Escolha um tema**

```html
<body class="theme-dark">
    @include('components.sidebar')
```


### English
A responsive accordion-style sidebar with support for multi-level menus and three built-in themes (light, dark, and blue). Built using only CSS and vanilla JavaScript, it is easy to install, simple to customize, and ready to integrate into any project.

## 📌 Step-by-step installation for Laravel

### **Step 1 — Install Tailwind**  
*(Warning: Tailwind resets and overrides all default HTML styles)*

```bash
npm install -D tailwindcss postcss autoprefixer
```

---

### **Step 2 — Install Tippy**

```bash
npm install tippy.js
```

---

### **Step 3 — Download the files into the correct folders**

**resources/css**  
- theme-dark.css  
- theme-light.css  
- theme-neutral.css  

**resources/js**  
- sidebar.js  

**resources/views/components**  
- sidebar.blade.php  

---

### **Step 4 — Import the themes in `resources/css/app.css`**

```css
@import "./theme-neutral.css";
@import "./theme-dark.css";
@import "./theme-light.css";
```

---

### **Step 5 — Import the sidebar JS in `resources/js/app.js`**

```js
import './sidebar';
```

---

### **Step 6 — Include the component right after the `<body>` tag**

```html
<body>
    @include('components.sidebar')
```

---

### **Step 7 (optional for neutral theme) — Choose a theme**

```html
<body class="theme-dark">
    @include('components.sidebar')
```



