# Custom WordPress Theme (TailwindCSS)

Een custom WordPress theme gebouwd met TailwindCSS, gericht op een blogplatform met:

- Homepage met hero banner  
- Blog overzicht met cards + pagination  
- Categorie filter  
- Single post pagina  
- Responsive navbar + footer  

---

## Setup (LocalWP)

### 1. Project clonen
```bash
git clone <repo-url>
```

### 2. Plaats in WordPress
Plaats de theme folder in:

```bash
/wp-content/themes/<theme-naam>
```

---

## Development setup

### Vereisten
- Node.js
- npm
- Local (LocalWP)

---

### 3. Dependencies installeren
```bash
npm install
```

---

### 4. Tailwind build + live sync starten

Installeer Tailwind:

```bash
npm install tailwindcss @tailwindcss/postcss postcss
```

Start development:

```bash
npm run dev
npm run sync
```

Of gecombineerd:

```bash
npm run watch
```

---

### 5. Build voor productie

```bash
npm run build
```

Output CSS bestand:

```bash
/assets/css/main.css
```

---

## Structuur

```bash
theme/
│
├── assets/
│   ├── css/
│   │   └── main.css
│   ├── js/
│   │   └── main.js
│
├── template-parts/
│   ├── components/
│   │   ├── card-post.php
│   │   └── hero.php
│   ├── layout/
│   │   └── navbar.php
│
├── front-page.php
├── home.php
├── archive.php
├── single.php
├── index.php
├── header.php
├── footer.php
├── functions.php
│
└── tailwind.config.js
```

---

## Styling (TailwindCSS)

### **Fonts**
We gebruiken Google Fonts (**Montserrat**).

Toegevoegd in:

```bash
input.css
```

Gebruik in HTML:

```html
class="font-sans"
```

---

## Templates uitleg

### **front-page.php**
- Homepage  
- Hero component  
- Laatste 6 posts  

---

### **home.php**
- Blog overzicht pagina  
- Cards + pagination  

---

### **archive.php**
- Categorie filter  
- Gefilterde posts  

---

### **single.php**
- Detail pagina van post  
- Featured image + content  

---

### **index.php**
- Fallback template  

---

## 🔧 Scripts

```bash
npm run dev     # Tailwind build (watch mode)
npm run sync    # BrowserSync live reload
npm run watch   # Alles tegelijk
npm run build   # Production build
```

---

## Belangrijk

- Gebruik **Featured Image** voor posts (niet bovenaan in editor plaatsen)  
- Zorg dat `wp_head()` en `wp_footer()` aanwezig zijn  
- Controleer je LocalWP URL in BrowserSync config  

---

## Samenwerken

Gebruik branches:

```bash
main        # stabiel
dev         # development
feature/*   # nieuwe features
```

Voorbeeld:

```bash
git checkout -b feature/navbar
```

---

## TODO

- [ ] AJAX blog filter  
- [ ] Search functionaliteit  
- [ ] Gerelateerde posts  
- [ ] Contact pagina  

---

## License
Vrij te gebruiken voor eigen projecten.
