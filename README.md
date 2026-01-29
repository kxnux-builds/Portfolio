# Kishanu Mondal — Portfolio

A high-performance personal portfolio website built with pure HTML5, CSS3 and Vanilla JavaScript. The site focuses on clean architecture, modern UI (glassmorphism), accessibility, and performance — no frameworks, just lightweight, maintainable code.

Live demo : https://kxnux-builds.github.io/Portfolio/

---

## Overview

This repository contains a single-page portfolio intended to showcase projects, skills, and experience. It includes:

- A responsive, modern UI with glassmorphism and ambient gradients
- Mouse spotlight effect and performant scroll reveal animations
- Contact form (Formspree for static hosting + PHP handler for server-side)
- Minimal vanilla JS and semantic HTML for great performance and accessibility

---

## Features

- Mouse Spotlight effect that follows the cursor (js/main.js)
- Smooth scroll navigation and IntersectionObserver-powered reveal animations
- Glass-style UI with CSS variables and utility classes (css/style.css)
- Projects section with card layout, badges and CTAs
- Contact form compatible with Formspree or a PHP backend (php/contact.php)
- Mobile-first, responsive design (works across screens from mobile to desktop)
- Clean, framework-free codebase — easy to read and extend

---

## Tech & Tools

- Markup: HTML5 (semantic)
- Styling: CSS3 (Custom Properties, Grid, Flexbox, backdrop-filter)
- Behavior: Vanilla JavaScript (ES6+)
- Backend (optional): PHP (for self-hosted contact form)
- Hosting: Optimized for static hosting (GitHub Pages) or any static host

---

## Repo structure

```text
Portfolio/
├── index.html          # Main entry point
├── README.md           # Project documentation
├── LICENSE             # Project license
├── .gitignore
├── css/
│   └── style.css       # Styles, variables, animations
├── js/
│   └── main.js         # Spotlight, scroll animations, navbar behavior
├── php/
│   └── contact.php     # Optional server-side contact form (self-host)
└── assets/
    └── images/         # Screenshots / images used by the site
```

---

## Quick start (local)

No build step required — this is a static site. To preview locally:

1. Clone the repo:
   git clone https://github.com/kxnux-builds/Portfolio.git

2. Open `index.html` in your browser:
   - Double-click `index.html` OR
   - Serve locally for better behavior (recommended):
     - Python 3: `python -m http.server 8000` then open `http://localhost:8000`
     - Or use any static file server (live-server, serve, etc.)

Notes:
- Serving through a local server prevents issues with some browser features (fonts, fetch, etc.).
- For the contact form, Formspree works without server-side changes. If you want email handling on your own server, use `php/contact.php`.

---

## Deployment

Recommended: GitHub Pages

1. Push the repository to `main` on your GitHub account.
2. In the repository Settings → Pages, set the source to the `main` branch, root.
3. Your site should be available at:
   `https://kxnux-builds.github.io/Portfolio/`

Alternative: any static host (Netlify, Vercel, Surge, Firebase Hosting). Upload the repo contents or follow the provider's deployment flow.

---

## Customization guide

- Colors & theme: Update CSS variables in `css/style.css` (:root section) to change the palette.
- Fonts: Google Fonts are loaded in `<head>` of `index.html`. Replace or extend the `link` tag to change fonts.
- Projects: Edit the `<section id="projects">` in `index.html` to add/remove projects. Each project card contains image, tech badges and CTAs.
- Contact: The form currently posts to `https://formspree.io`. To use a PHP backend, set the form `action` to your `php/contact.php` endpoint and configure mail settings on your server.

---

## Accessibility & Performance notes

- Semantic HTML and readable headings were used for better screen reader support.
- Images should include meaningful `alt` text (update `assets/images/*` references as needed).
- IntersectionObserver is used for scroll animations so that off-screen content does not block rendering.
- CSS uses variables for quick theme adjustments and reduces repetition.
- Lighthouse suggestions:
  - Compress images (AVIF / optimized JPG/WEBP) for faster loads.
  - Add critical meta tags and preconnects (fonts preconnect already included).
  - Consider lazy-loading large images (loading="lazy") in project cards.

---

## Todo / Ideas

- Add an automated build pipeline to optimize assets (image optimization, minification).
- Add unit / visual tests for critical UI components.
- Add multi-language support or an i18n toggle.
- Add an RSS/Blog area to demonstrate writing and SEO skills.

---

## Credits & Links

- Author: Kishanu Mondal
- GitHub: https://github.com/kxnux-builds
- LinkedIn: https://www.linkedin.com/in/kishanu-mondal/
- X (Twitter): https://x.com/Kxnux_Dev

---

## License

See the LICENSE file for license details:
[LICENSE](./LICENSE)

---