# ACV Unity & Development – Modern Website

A modern, responsive website for the **Afghaanse Culturele Vereniging Unity & Development** in Leiden, Netherlands. Built as both a **static site** (Cloudflare Pages ready) and a **WordPress theme**.

---

## Project Structure

```
acv-unity-website/
├── index.html          ← Homepage
├── over.html           ← About
├── bestuur.html        ← Board
├── anbi.html           ← ANBI status
├── galerij.html        ← Gallery
├── verslagen.html      ← Annual reports
├── contact.html        ← Contact + map + form
├── css/
│   └── style.css       ← All styles (shared)
├── js/
│   └── main.js         ← All client JS (shared)
└── wp-theme/           ← WordPress theme (drop into wp-content/themes/)
    ├── style.css           Theme header
    ├── functions.php       Setup, enqueue, helpers
    ├── header.php          Navbar
    ├── footer.php          Footer
    ├── front-page.php      Homepage
    ├── index.php           Blog listing / fallback
    ├── page.php            Default page
    ├── single.php          Single post
    ├── 404.php             Not-found page
    └── assets/             (see below – copy css/ & js/ here)
        ├── css/style.css
        └── js/main.js
```

---

## Option A – Cloudflare Pages (Static, Free)

This is the quickest path to a live site at no cost.

1. **Fork or clone** this repo to your GitHub / GitLab account.
2. Go to [Cloudflare Dashboard → Pages](https://pages.cloudflare.com/) and create a new project.
3. Connect your repo. Set the **build command** to empty (no build step needed) and the **output directory** to `.` (root).
4. Deploy. Cloudflare will serve `index.html` and the other pages automatically.

> **Form submissions:** The contact form on the static site shows a success message client-side only. To receive actual submissions for free, connect a service like [Formspree](https://formspree.io/) or [Netlify Forms](https://www.netlify.com/products/forms/):
> - Open `contact.html`, find the `<form class="contact-form">` tag and add `action="https://formspree.io/YOUR_ENDPOINT"` and `method="POST"`.
> - Remove the `e.preventDefault()` line in `js/main.js` inside the form handler block.

---

## Option B – WordPress Theme (Self-Hosted)

1. Copy the **`wp-theme/`** folder into your WordPress installation at `wp-content/themes/acv-unity/`.
2. Copy the shared assets into the theme:
   ```
   cp css/style.css    wp-theme/assets/css/style.css
   cp js/main.js       wp-theme/assets/js/main.js
   ```
   (Create the `assets/css/` and `assets/js/` directories first if they don't exist.)
3. In the **WordPress Admin → Appearance → Themes**, activate **ACV Unity & Development**.
4. **Create pages** with these slugs so the navigation works:
   | Page title   | Slug         |
   |-------------|--------------|
   | Over Ons     | `over`       |
   | Bestuur      | `bestuur`    |
   | ANBI         | `anbi`       |
   | Galerij      | `galerij`    |
   | Verslagen    | `verslagen`  |
   | Contact      | `contact`    |

5. Assign a **Primary menu** under Appearance → Menus and link it to the navigation location.
6. Set a **static front page** (Settings → Reading) pointing to a page, then choose "ACV Homepage" – the theme's `front-page.php` will render automatically.

### Multilingual support

Install **[Polylang](https://wordpress.org/plugins/polylang/)** (free). Once active, the language switcher in the header will automatically use Polylang's language links for Dutch, Dari, and Pashto.

### Contact form

Install **[Contact Form 7](https://wordpress.org/plugins/contact-form-7/)** (free). Create a form, then open the **contact** page in the editor and replace the placeholder form with the CF7 shortcode.

---

## Design Notes

| Aspect | Details |
|--------|---------|
| Primary palette | Deep green `#1B3A2D` · Gold accent `#C8993E` |
| Typography | **Inter** (body) · **Playfair Display** (headings) – both via Google Fonts |
| Layout | CSS Grid + Flexbox, mobile-first |
| Animations | Scroll-reveal via `IntersectionObserver`; counter animation on stats |
| Map | OpenStreetMap embed (no API key required) |
| Gallery | Placeholder colour-gradient cards; replace `<div class="gallery-placeholder">` with `<img>` tags when real photos are available |

---

## License

All content belongs to ACV Unity & Development (RSIN 851292677). Code is provided under **GPL v2 or later**.
