# Verus Cloud Secure — WordPress theme

Custom lead-generation theme that matches the [Oracle Solutions](https://veruscloudsecure.com/consulting-services/database-management/oracle-solutions/) page across the rest of the site.

## What you get

- Oracle-style layout on every service, industry, and hub page (hero, risk, capabilities, why Verus, stats, CTA, FAQ)
- Cloudflare-style **full-width mega menu** driven by **Appearance → Menus** (native WordPress menus, 3 levels)
- **ACF Free** field groups (no Repeater / Flexible Content / Options). Numbered groups stand in for repeaters
- **AIOSEO** left alone — titles, meta, sitemap, and breadcrumbs are its job. The theme outputs `aioseo_breadcrumbs()` when present
- Global meeting URL, phone, and footer copy in **Appearance → Customize → Verus — Lead Generation**
- Default copy for the current sitemap so pages look finished before you edit ACF

## Install

1. Copy this folder into `wp-content/themes/veruscloudsecure/`
2. Install **Advanced Custom Fields** (free) from wordpress.org
3. Activate **Verus Cloud Secure**
4. On activation the theme assigns templates to known slugs (`oracle-solutions`, `cybersecurity`, `ai-services`, …) and seeds a **Primary** menu if none exists
5. **Settings → Reading**: keep your existing homepage
6. **Appearance → Customize**: set the Calendly URL, phone, email
7. **Appearance → Menus**: enable Screen Options → **Description**. Those one-liners become mega-menu blurbs. You can also fill the ACF “Mega menu blurb” on each item
8. Edit any page: the “Verus — Page sections” box is the copy. Leave a field blank to keep the default
9. **Appearance → Widgets**: drop your form (WPForms, Gravity, CF7) into **Contact Form**
10. Configure SEO in **AIOSEO** as you already planned

## Menu structure (Cloudflare pattern)

```
Level 1  →  top bar (Services, Industries, Resources)
Level 2  →  left rail inside the mega panel
Level 3  →  cards that swap when a rail item is selected
```

Assign the menu to **Primary Navigation (mega menu)**. Footer columns are optional separate menus.

## Page templates

| Template | Use |
|---|---|
| Front page | `front-page.php` (automatic) |
| Service page | Individual services (Oracle, MFA, AI agents, …) |
| Hub page | Services, AI, Cyber, Managed IT, Consulting, Industries, Resources |
| Industry page | Healthcare, finance, energy, … |
| About | Who is Verus |
| Contact | Contact + form widget |

## Design tokens

Navy `#003366` / ink `#0d1b2e` / gold `#f39200` / sky `#b4e1fe`. Headings use Freight Sans Pro via the existing Typekit kit `itd3ryy`; body is Open Sans.

## Notes

- This is a **standalone theme**, not a Pro child. Cornerstone layouts will not render. Existing page *URLs* stay; presentation is this theme
- Do not paste Cornerstone / Pro shortcodes into the new fields
- Related cards on hubs/services pull child pages automatically
- `preview/` is a static HTML mock used for design QA. Do not upload it to production if you prefer a leaner theme zip
