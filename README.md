# ⚡ Portfolio

A **premium, high-performance personal portfolio website** built with **pure HTML5, CSS3, and Vanilla JavaScript**, designed to showcase projects, skills, and experience with a **modern, futuristic UI**.

This portfolio focuses on **clean architecture, custom design systems, accessibility, and performance** — no UI frameworks, no shortcuts.

---

## 🎨 Design Philosophy

This project uses a **custom design system** inspired by modern SaaS and developer portfolios.

### Visual Style
- Dark, minimal, **glassmorphism UI**
- Ambient gradient mesh background
- Interactive **mouse spotlight effect**
- Subtle micro-interactions & smooth transitions

#### Color System (CSS Variables)
The design is built on a strict, reusable variable system defined in `style.css`:

```css
:root {
    --bg-main: #030712;         /* Deep Navy Black */
    --bg-secondary: #0f172a;    /* Card Surface */
    --accent-primary: #6366f1;  /* Indigo Glow */
    --accent-secondary: #22d3ee;/* Cyan Highlights */
    --text-main: #f9fafb;       /* High Contrast Text */
    --text-muted: #9ca3af;      /* Secondary Text */
}

---

## 🌟 Key Features

* **🖱️ Mouse Spotlight Effect:** A dynamic lighting effect that tracks cursor movement, implemented via efficient JS event listeners.
* **🌫️ Glassmorphism UI:** Modern frosted glass effects on cards and navigation bars using `backdrop-filter`.
* **📈 Live GitHub Stats:** Integrated `github-readme-stats` to display real-time commit data and top languages.
* **📜 Scroll Animations:** Elements fade in and slide up smoothly as they enter the viewport using the `Intersection Observer API`.
* **📱 Mobile-First:** Fully responsive layout that adapts gracefully from 4K desktops to mobile screens.
* **🔒 Privacy-Focused Contact:** Supports both PHP backend (for servers) and Formspree (for static hosting like GitHub Pages).

---

## 🧱 Tech Stack

| Component | Technology | Description |
| :--- | :--- | :--- |
| **Frontend** | HTML5 (Semantic) | Accessible markup, SEO optimized. |
| **Styling** | CSS3 (Modern) | Custom Properties, Flexbox, Grid, Backdrop Filters. |
| **Logic** | Vanilla JS (ES6+) | `IntersectionObserver`, Event Listeners, No Frameworks. |
| **Backend** | PHP | Contact form handling. |
| **Hosting** | GitHub Pages | Optimized for static deployment. |

---

## 📂 Folder Structure

The project follows a semantic and clean architecture:

```text
portfolio/
│
├── index.html          # The main entry point
├── README.md           # Project documentation
├── .gitignore          # Ignored files for Git
│
├── css/
│   └── style.css       # Combined styles, variables, and animations
│
├── js/
│   └── main.js         # Core logic (Spotlight, Scroll, Mobile Menu)
│
├── php/
│   └── contact.php     # Server-side email handler
│
└── assets/
    └── images/         # Project screenshots, Profile picture

