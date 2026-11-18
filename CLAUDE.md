@README.md

# Verus Cloud Secure theme: notes from past sessions

- This repo (`advsry/veruscloudsecure`, branch `master`) is the **only** source of the live veruscloudsecure.com theme. There is no copy in `~/github/wordpress`. An older copy went missing once, so keep this repo current and commit after changes.
- The site's goal is leads and booked meetings. Every template should push toward **/book-a-meeting/**, with Calendly embedded on-site; buttons go there in the same tab, not to calendly.com. As of November 2026, the inline Calendly widget is embedded on every page, including the AI Automation and Private AI Governance test landing pages.
- **Open items from Cursor:** VR-8 (in progress): show only the logo and phone on the test landing pages. VR-1 (for review): remove the empty Ninja Forms shortcode from the informative videos page, which causes a "No Fields Found" line. Notes are in `~/github/cursor-export/Untitled/verus/internal/`.
- Design system: everything matches the original Oracle Solutions page. Mobile (≤900px) `.v-grid-3` cards become accordions, with the icon on the left and the title on the right.
- Content is in **ACF Free** (no repeaters, so numbered groups stand in). The homepage pillar cards are edited at **Pages → Homepage cards**, a dedicated screen. Saving them from the block editor lost data and triggered 413 errors from ModSecurity. "Lede" means the intro paragraph under a section heading.
- AIOSEO handles titles, meta and breadcrumbs. Don't duplicate them in the theme.
- Forms are Ninja Forms (e.g. `[ninja_form id='8']` on /ai-maturity-assessment/). Legal pages: Privacy Policy and /eula (governed by Pennsylvania law; venue Delaware or Montgomery County).
- Bump `Version` in `style.css` with each change. Mike uploads the zip, then purges cache. Staging is verus-stage.com.
- Server admin (WHM, Imunify360) questions come up. Visitor IPs come from the domain access logs. Imunify360 only records incidents.
